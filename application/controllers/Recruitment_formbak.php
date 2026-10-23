<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recruitment_form extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->helper('download');
        $this->load->model(array("m_recruitment", "m_career"));
        $this->load->library('form_validation');
    }

    public function index($code, $jabatan, $location)
    {
        if ($code == null || $jabatan == null) {
            redirect('career');
            return;
        }

        $sql = "SELECT q.division_name, q.division_code, q.last_degree, q.`limit`,
                       (SELECT COUNT(*) FROM tb_pelamar p WHERE p.posisi = q.division_code) AS sudah_isi
                FROM karir AS q
                WHERE q.`division_code` = ?
                  AND q.`jabatan` = ?
                  AND q.`close` >= CURDATE()
                  AND (SELECT COUNT(*) FROM tb_pelamar p WHERE p.posisi = q.division_code) < q.`limit`";
        $result = $this->db->query($sql, array($code, $jabatan));

        if ($result->num_rows() == 0) {
            redirect('career');
            return;
        }

        $row = $result->row();
        $data = [
            'career',
            'recruitment' => $this->m_career->index(),
            'provinsi' => $this->m_career->get_all_provinsi(),
            'code' => $code,
            'jabatan' => $jabatan,
            'location' => $location,
            'degree' => $row->last_degree,
        ];
        $this->load->view('_layouts/v_navbar');
        $this->load->view('recruitment_form', $data);
        $this->load->view('_layouts/v_footer');
    }

    public function lakukan_download()
    {
        force_download('assets/file/SURAT_PERNYATAAN_Seleksi_Rekrutmen_PSI_Group.pdf', NULL);
    }

    public function save()
    {
        // --------------------------------------------------------------
        // EMPTY-POST GUARD.
        // save() has NO server-side validation, so an empty/garbled POST body
        // (mobile connection drop, truncated multipart, bot) was inserting
        // all-NULL rows and showing the success page. This is the source of
        // the 228 null rows on production. Reject early — before the upload
        // loop and the insert — if the essential fields are missing. This
        // also prevents the empty-POST from bypassing the quota check below
        // (which only runs when posisi is non-empty).
        // --------------------------------------------------------------
        $name   = trim((string) $this->input->post('name'));
        $no_ktp = trim((string) $this->input->post('no_ktp'));
        $posisi = $this->input->post('posisi');

        if ($name === '' || $posisi === null || $posisi === ''
            || !ctype_digit($no_ktp) || strlen($no_ktp) !== 16)
        {
            log_message('error',
                'Recruitment_form::save rejected empty/invalid POST. '
                . 'name="' . $name . '" ktp="' . $no_ktp . '" posisi="' . $posisi . '" '
                . 'ip=' . $this->input->ip_address() . ' '
                . 'ua=' . substr((string)$this->input->user_agent(), 0, 120)
            );
            $this->session->set_flashdata('error',
                'Data tidak lengkap atau koneksi terputus saat mengirim. '
                . 'Silakan isi kembali formulir dengan lengkap.');
            redirect('career');
            return;
        }

        // --------------------------------------------------------------
        // SERVER-SIDE QUOTA ENFORCEMENT.
        // The client-side cekLimit() check is only a hint (bypassable, and it
        // loses to race conditions when many applicants see quota left at
        // once). The authoritative check must happen here, before the insert.
        // We use SELECT ... FOR UPDATE on the underlying tb_recruitment row:
        // this takes a row lock so that concurrent save() calls serialize on
        // the same job, preventing two applicants from both seeing the last
        // slot and both inserting. (InnoDB tb_pelamar / tb_recruitment.)
        // --------------------------------------------------------------
        if ($posisi !== null && $posisi !== '') {
            // Lock the job row and read its limit + current live count together.
            $row = $this->db->query(
                "SELECT r.`limit`,
                        (SELECT COUNT(*) FROM tb_pelamar p WHERE p.posisi = r.division_code) AS sudah_isi
                 FROM tb_recruitment r
                 WHERE r.division_code = ?
                 FOR UPDATE",
                array($posisi)
            )->row();

            if ($row) {
                $sisa = (int) $row->limit - (int) $row->sudah_isi;
                if ($sisa <= 0) {
                    $this->session->set_flashdata('error', 'Mohon maaf, kuota untuk lowongan ini sudah penuh.');
                    redirect('career');
                    return;
                }
            }
            // Note: because of the empty-POST guard above, we always reach
            // here with a non-empty posisi for a genuine submission, so the
            // quota check is no longer bypassable by empty POST bodies.
        }

        //Untuk Upload Multifile
        $this->load->library('upload');
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        for ($i = 0; $i < $cpt; $i++) {
            $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
            $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
            $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload();

            $dataInfo[] = $this->upload->data();
        }

        $status_nikah = $this->input->post('status_pernikahan');
        if ($status_nikah == 'Sudah Menikah') {
            $data = array(
                // Identitas
                'date' => $this->input->post('date'),
                'name' => $this->input->post('name'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'gol_darah' => $this->input->post('gol_darah'),
                'umur' => $this->input->post('umur'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'no_ktp' => $this->input->post('no_ktp'),
                'no_kk' => $this->input->post('no_kk'),
                'no_npwp' => $this->input->post('npwp_hasil'),
                'alamat_ktp' => $this->input->post('alamat_ktp'),
                'rt_rw_ktp' => $this->input->post('rt_rw_ktp'),
                'kelurahan_ktp' => $this->input->post('kelurahan_ktp'),
                'kecamatan_ktp' => $this->input->post('kecamatan_ktp'),
                'kota_ktp' => $this->input->post('kota_ktp'),
                'provinsi_ktp' => $this->input->post('provinsi_ktp'),
                'alamat_tinggal' => $this->input->post('alamat_tinggal'),
                'rt_rw_tinggal' => $this->input->post('rt_rw_tinggal'),
                'kelurahan_tinggal' => $this->input->post('kelurahan_tinggal'),
                'kecamatan_tinggal' => $this->input->post('kecamatan_tinggal'),
                'kota_tinggal' => $this->input->post('kota_tinggal'),
                'provinsi_tinggal' => $this->input->post('provinsi_tinggal'),
                'kode_pos' => $this->input->post('kode_pos'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email') . '@gmail.com',
                'agama' => $this->input->post('agama'),
                'status' => 'None',
                'tinggi_badan' => $this->input->post('tinggi_badan'),
                'berat_badan' => $this->input->post('berat_badan'),
                'status_tempat_tinggal' => $this->input->post('status_tempat_tinggal'),
                'status_pernikahan' => $this->input->post('status_pernikahan'),
                'golongan' => $this->input->post('golongan_nikah'),
                'posisi' => $this->input->post('posisi'),
                'gaji' => $this->input->post('gaji'),
                'ibu_kandung' => $this->input->post('ibu_kandung'),

                // Pendidikan
                'jenjang1' => $this->input->post('jenjang1'),
                'nama_sekolah1' => $this->input->post('nama_sekolah1'),
                'jurusan1' => $this->input->post('jurusan1'),
                'tahun1' => $this->input->post('tahun1'),
                'nilai_akhir1' => $this->input->post('nilai_akhir1'),
                'kota1' => $this->input->post('kota1'),
                'nama_training1' => $this->input->post('nama_training1'),
                'lembaga1' => $this->input->post('lembaga1'),
                'kota_training1' => $this->input->post('kota_training1'),
                'tahun_training1' => $this->input->post('tahun_training1'),
                'skill_training1' => $this->input->post('skill_training1'),
                'nama_training2' => $this->input->post('nama_training2'),
                'lembaga2' => $this->input->post('lembaga2'),
                'kota_training2' => $this->input->post('kota_training2'),
                'tahun_training2' => $this->input->post('tahun_training2'),
                'skill_training2' => $this->input->post('skill_training2'),
                'nama_training3' => $this->input->post('nama_training3'),
                'lembaga3' => $this->input->post('lembaga3'),
                'kota_training3' => $this->input->post('kota_training3'),
                'tahun_training3' => $this->input->post('tahun_training3'),
                'skill_training3' => $this->input->post('skill_training3'),
                'nama_training4' => $this->input->post('nama_training4'),
                'lembaga4' => $this->input->post('lembaga4'),
                'kota_training4' => $this->input->post('kota_training4'),
                'tahun_training4' => $this->input->post('tahun_training4'),
                'skill_training4' => $this->input->post('skill_training4'),
                'bahasa1' => $this->input->post('bahasa1'),
                'lisan1' => $this->input->post('lisan1'),
                'tulisan1' => $this->input->post('tulisan1'),
                'bahasa2' => $this->input->post('bahasa2'),
                'lisan2' => $this->input->post('lisan2'),
                'tulisan2' => $this->input->post('tulisan2'),
                'bahasa3' => $this->input->post('bahasa3'),
                'lisan3' => $this->input->post('lisan3'),
                'tulisan3' => $this->input->post('tulisan3'),
                'keterampilan1' => $this->input->post('keterampilan1'),
                'keterangan1' => $this->input->post('keterangan1'),
                'deskripsi1' => $this->input->post('deskripsi1'),
                'keterampilan2' => $this->input->post('keterampilan2'),
                'keterangan2' => $this->input->post('keterangan2'),
                'deskripsi2' => $this->input->post('deskripsi2'),
                'keterampilan3' => $this->input->post('keterampilan3'),
                'keterangan3' => $this->input->post('keterangan3'),
                'deskripsi3' => $this->input->post('deskripsi3'),
                'keterampilan4' => $this->input->post('keterampilan4'),
                'keterangan4' => $this->input->post('keterangan4'),
                'deskripsi4' => $this->input->post('deskripsi4'),
                'keterampilan5' => $this->input->post('keterampilan5'),
                'keterangan5' => $this->input->post('keterangan5'),
                'deskripsi5' => $this->input->post('deskripsi5'),

                //Prestasi akademik / non akademik
                'jenis_prestasi1' => $this->input->post('jenis_prestasi1'),
                'peringkat1' => $this->input->post('peringkat1'),
                'tingkat_prestasi1' => $this->input->post('tingkat_prestasi1'),
                'tahun_prestasi1' => $this->input->post('tahun_prestasi1'),
                'keterangan_prestasi1' => $this->input->post('keterangan_prestasi1'),
                'jenis_prestasi2' => $this->input->post('jenis_prestasi2'),
                'peringkat2' => $this->input->post('peringkat2'),
                'tingkat_prestasi2' => $this->input->post('tingkat_prestasi2'),
                'tahun_prestasi2' => $this->input->post('tahun_prestasi2'),
                'keterangan_prestasi2' => $this->input->post('keterangan_prestasi2'),
                'jenis_prestasi3' => $this->input->post('jenis_prestasi3'),
                'peringkat3' => $this->input->post('peringkat3'),
                'tingkat_prestasi3' => $this->input->post('tingkat_prestasi3'),
                'tahun_prestasi3' => $this->input->post('tahun_prestasi3'),
                'keterangan_prestasi3' => $this->input->post('keterangan_prestasi3'),
                'jenis_prestasi4' => $this->input->post('jenis_prestasi4'),
                'peringkat4' => $this->input->post('peringkat4'),
                'tingkat_prestasi4' => $this->input->post('tingkat_prestasi4'),
                'tahun_prestasi4' => $this->input->post('tahun_prestasi4'),
                'keterangan_prestasi4' => $this->input->post('keterangan_prestasi4'),
                'jenis_prestasi5' => $this->input->post('jenis_prestasi5'),
                'peringkat5' => $this->input->post('peringkat5'),
                'tingkat_prestasi5' => $this->input->post('tingkat_prestasi5'),
                'tahun_prestasi5' => $this->input->post('tahun_prestasi5'),
                'keterangan_prestasi5' => $this->input->post('keterangan_prestasi5'),


                //Riwayat Pekerjaan
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'bidang_usaha' => $this->input->post('bidang_usaha'),
                'kota_perusahaan' => $this->input->post('kota_perusahaan'),
                'jabatan_perusahaan' => $this->input->post('jabatan_perusahaan'),
                'awal_kerja' => $this->input->post('awal_kerja'),
                'akhir_kerja' => $this->input->post('akhir_kerja'),
                'gaji_terakhir' => $this->input->post('gaji_terakhir'),
                'alasan_berhenti' => $this->input->post('alasan_berhenti'),
                'tugas_tgg_jawab' => $this->input->post('tugas_tgg_jawab'),

                // Minat dan Konsep pribadi
                'alasan_bekerja' => $this->input->post('alasan_bekerja'),
                'fasilitas_bekerja' => $this->input->post('fasilitas_bekerja'),
                'kapan_mulai_bekerja' => $this->input->post('kapan_mulai_bekerja'),
                'kenalan_perusahaan' => $this->input->post('kenalan_perusahaan'),
                'nama_kenalan1' => $this->input->post('nama_kenalan1'),
                'jabatan_kenalan1' => $this->input->post('jabatan_kenalan1'),
                'bagian_kenalan1' => $this->input->post('bagian_kenalan1'),
                'hubungan_kenalan1' => $this->input->post('hubungan_kenalan1'),
                'nama_kenalan2' => $this->input->post('nama_kenalan2'),
                'jabatan_kenalan2' => $this->input->post('jabatan_kenalan2'),
                'bagian_kenalan2' => $this->input->post('bagian_kenalan2'),
                'hubungan_kenalan2' => $this->input->post('hubungan_kenalan2'),

                // Kelebihan dan Kekurangan
                'kelebihan' => $this->input->post('kelebihan'),
                'kekurangan' => $this->input->post('kekurangan'),
                'pernah_sakit' => $this->input->post('pernah_sakit'),
                'nama_penyakit1' => $this->input->post('nama_penyakit1'),
                'lama_sakit1' => $this->input->post('lama_sakit1'),
                'akibat_ditimbulkan1' => $this->input->post('akibat_ditimbulkan1'),
                'nama_penyakit2' => $this->input->post('nama_penyakit2'),
                'lama_sakit2' => $this->input->post('lama_sakit2'),
                'akibat_ditimbulkan2' => $this->input->post('akibat_ditimbulkan2'),
                'buta_warna' => $this->input->post('buta_warna'),

                //Pengalaman Organisasi
                'nama_organisasi1' => $this->input->post('nama_organisasi1'),
                'jenis_organisasi1' => $this->input->post('jenis_organisasi1'),
                'jabatan_organisasi1' => $this->input->post('jabatan_organisasi1'),
                'periode_organisasi1' => $this->input->post('periode_organisasi1'),
                'nama_organisasi2' => $this->input->post('nama_organisasi2'),
                'jenis_organisasi2' => $this->input->post('jenis_organisasi2'),
                'jabatan_organisasi2' => $this->input->post('jabatan_organisasi2'),
                'periode_organisasi2' => $this->input->post('periode_organisasi2'),
                'nama_organisasi3' => $this->input->post('nama_organisasi3'),
                'jenis_organisasi3' => $this->input->post('jenis_organisasi3'),
                'jabatan_organisasi3' => $this->input->post('jabatan_organisasi3'),
                'periode_organisasi3' => $this->input->post('periode_organisasi3'),

                //Referensi
                'nama_referensi1' => $this->input->post('nama_referensi1'),
                'alamat_referensi1' => $this->input->post('alamat_referensi1'),
                'no_telp_referensi1' => $this->input->post('no_telp_referensi1'),
                'pekerjaan_referensi1' => $this->input->post('pekerjaan_referensi1'),
                'hubungan_referensi1' => $this->input->post('hubungan_referensi1'),
                'nama_referensi2' => $this->input->post('nama_referensi2'),
                'alamat_referensi2' => $this->input->post('alamat_referensi2'),
                'no_telp_referensi2' => $this->input->post('no_telp_referensi2'),
                'pekerjaan_referensi2' => $this->input->post('pekerjaan_referensi2'),
                'hubungan_referensi2' => $this->input->post('hubungan_referensi2'),

                //Orang Dihubungi Darurat
                'nama_dihubungi1' => $this->input->post('nama_dihubungi1'),
                'alamat_dihubungi1' => $this->input->post('alamat_dihubungi1'),
                'no_telp_dihubungi1' => $this->input->post('no_telp_dihubungi1'),
                'pekerjaan_dihubungi1' => $this->input->post('pekerjaan_dihubungi1'),
                'hubungan_dihubungi1' => $this->input->post('hubungan_dihubungi1'),
                'nama_dihubungi2' => $this->input->post('nama_dihubungi2'),
                'alamat_dihubungi2' => $this->input->post('alamat_dihubungi2'),
                'no_telp_dihubungi2' => $this->input->post('no_telp_dihubungi2'),
                'pekerjaan_dihubungi2' => $this->input->post('pekerjaan_dihubungi2'),
                'hubungan_dihubungi2' => $this->input->post('hubungan_dihubungi2'),

                // Check Box
                'check1' => $this->input->post('check1'),
                'check2' => $this->input->post('check2'),
                // 'kelengkapan_berkas' => implode(', ', $this->input->post('kelengkapan_berkas')),

                // Files
                'foto_formal' => $dataInfo[0]['file_name'],
                // 'ijazah' => $dataInfo[1]['file_name'],
                // 'transkrip_nilai' => $dataInfo[2]['file_name'],
                // 'sertifikat_vaksin' => $dataInfo[3]['file_name'],
                // 'ktp' => $dataInfo[4]['file_name'],
                // 'npwp' => $dataInfo[5]['file_name'],
                // 'kartu_keluarga' => $dataInfo[6]['file_name'],
                // 'surat_pernyataan' => $dataInfo[7]['file_name'],
                // 'kartu_disnaker' => $dataInfo[8]['file_name'],
                // 'skck' => $dataInfo[9]['file_name'],
                // 'surat_sehat' => $dataInfo[10]['file_name'],
                // 'spk1' => $dataInfo[11]['file_name'],
                // 'spk2' => $dataInfo[12]['file_name'],
                // 'spk3' => $dataInfo[13]['file_name'],
                // 'sertif_keahlian1' => $dataInfo[14]['file_name'],
                // 'sertif_keahlian2' => $dataInfo[15]['file_name'],
                // 'sertif_keahlian3' => $dataInfo[16]['file_name'],
            );
        } else {
            $data = array(
                // Identitas
                'date' => $this->input->post('date'),
                'name' => $this->input->post('name'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'gol_darah' => $this->input->post('gol_darah'),
                'umur' => $this->input->post('umur'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'no_ktp' => $this->input->post('no_ktp'),
                'no_kk' => $this->input->post('no_kk'),
                'no_npwp' => $this->input->post('npwp_hasil'),
                'alamat_ktp' => $this->input->post('alamat_ktp'),
                'rt_rw_ktp' => $this->input->post('rt_rw_ktp'),
                'kelurahan_ktp' => $this->input->post('kelurahan_ktp'),
                'kecamatan_ktp' => $this->input->post('kecamatan_ktp'),
                'kota_ktp' => $this->input->post('kota_ktp'),
                'provinsi_ktp' => $this->input->post('provinsi_ktp'),
                'alamat_tinggal' => $this->input->post('alamat_tinggal'),
                'rt_rw_tinggal' => $this->input->post('rt_rw_tinggal'),
                'kelurahan_tinggal' => $this->input->post('kelurahan_tinggal'),
                'kecamatan_tinggal' => $this->input->post('kecamatan_tinggal'),
                'kota_tinggal' => $this->input->post('kota_tinggal'),
                'provinsi_tinggal' => $this->input->post('provinsi_tinggal'),
                'kode_pos' => $this->input->post('kode_pos'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email') . '@gmail.com',
                'agama' => $this->input->post('agama'),
                'status' => 'None',
                'tinggi_badan' => $this->input->post('tinggi_badan'),
                'berat_badan' => $this->input->post('berat_badan'),
                'status_tempat_tinggal' => $this->input->post('status_tempat_tinggal'),
                'status_pernikahan' => $this->input->post('status_pernikahan'),
                'golongan' => $this->input->post('golongan_belum_nikah'),
                'posisi' => $this->input->post('posisi'),
                'gaji' => $this->input->post('gaji'),
                'ibu_kandung' => $this->input->post('ibu_kandung'),

                // Pendidikan
                'jenjang1' => $this->input->post('jenjang1'),
                'nama_sekolah1' => $this->input->post('nama_sekolah1'),
                'jurusan1' => $this->input->post('jurusan1'),
                'tahun1' => $this->input->post('tahun1'),
                'nilai_akhir1' => $this->input->post('nilai_akhir1'),
                'kota1' => $this->input->post('kota1'),
                'nama_training1' => $this->input->post('nama_training1'),
                'lembaga1' => $this->input->post('lembaga1'),
                'kota_training1' => $this->input->post('kota_training1'),
                'tahun_training1' => $this->input->post('tahun_training1'),
                'skill_training1' => $this->input->post('skill_training1'),
                'nama_training2' => $this->input->post('nama_training2'),
                'lembaga2' => $this->input->post('lembaga2'),
                'kota_training2' => $this->input->post('kota_training2'),
                'tahun_training2' => $this->input->post('tahun_training2'),
                'skill_training2' => $this->input->post('skill_training2'),
                'nama_training3' => $this->input->post('nama_training3'),
                'lembaga3' => $this->input->post('lembaga3'),
                'kota_training3' => $this->input->post('kota_training3'),
                'tahun_training3' => $this->input->post('tahun_training3'),
                'skill_training3' => $this->input->post('skill_training3'),
                'nama_training4' => $this->input->post('nama_training4'),
                'lembaga4' => $this->input->post('lembaga4'),
                'kota_training4' => $this->input->post('kota_training4'),
                'tahun_training4' => $this->input->post('tahun_training4'),
                'skill_training4' => $this->input->post('skill_training4'),
                'bahasa1' => $this->input->post('bahasa1'),
                'lisan1' => $this->input->post('lisan1'),
                'tulisan1' => $this->input->post('tulisan1'),
                'bahasa2' => $this->input->post('bahasa2'),
                'lisan2' => $this->input->post('lisan2'),
                'tulisan2' => $this->input->post('tulisan2'),
                'bahasa3' => $this->input->post('bahasa3'),
                'lisan3' => $this->input->post('lisan3'),
                'tulisan3' => $this->input->post('tulisan3'),
                'keterampilan1' => $this->input->post('keterampilan1'),
                'keterangan1' => $this->input->post('keterangan1'),
                'deskripsi1' => $this->input->post('deskripsi1'),
                'keterampilan2' => $this->input->post('keterampilan2'),
                'keterangan2' => $this->input->post('keterangan2'),
                'deskripsi2' => $this->input->post('deskripsi2'),
                'keterampilan3' => $this->input->post('keterampilan3'),
                'keterangan3' => $this->input->post('keterangan3'),
                'deskripsi3' => $this->input->post('deskripsi3'),
                'keterampilan4' => $this->input->post('keterampilan4'),
                'keterangan4' => $this->input->post('keterangan4'),
                'deskripsi4' => $this->input->post('deskripsi4'),
                'keterampilan5' => $this->input->post('keterampilan5'),
                'keterangan5' => $this->input->post('keterangan5'),
                'deskripsi5' => $this->input->post('deskripsi5'),

                //Prestasi akademik / non akademik
                'jenis_prestasi1' => $this->input->post('jenis_prestasi1'),
                'peringkat1' => $this->input->post('peringkat1'),
                'tingkat_prestasi1' => $this->input->post('tingkat_prestasi1'),
                'tahun_prestasi1' => $this->input->post('tahun_prestasi1'),
                'keterangan_prestasi1' => $this->input->post('keterangan_prestasi1'),
                'jenis_prestasi2' => $this->input->post('jenis_prestasi2'),
                'peringkat2' => $this->input->post('peringkat2'),
                'tingkat_prestasi2' => $this->input->post('tingkat_prestasi2'),
                'tahun_prestasi2' => $this->input->post('tahun_prestasi2'),
                'keterangan_prestasi2' => $this->input->post('keterangan_prestasi2'),
                'jenis_prestasi3' => $this->input->post('jenis_prestasi3'),
                'peringkat3' => $this->input->post('peringkat3'),
                'tingkat_prestasi3' => $this->input->post('tingkat_prestasi3'),
                'tahun_prestasi3' => $this->input->post('tahun_prestasi3'),
                'keterangan_prestasi3' => $this->input->post('keterangan_prestasi3'),
                'jenis_prestasi4' => $this->input->post('jenis_prestasi4'),
                'peringkat4' => $this->input->post('peringkat4'),
                'tingkat_prestasi4' => $this->input->post('tingkat_prestasi4'),
                'tahun_prestasi4' => $this->input->post('tahun_prestasi4'),
                'keterangan_prestasi4' => $this->input->post('keterangan_prestasi4'),
                'jenis_prestasi5' => $this->input->post('jenis_prestasi5'),
                'peringkat5' => $this->input->post('peringkat5'),
                'tingkat_prestasi5' => $this->input->post('tingkat_prestasi5'),
                'tahun_prestasi5' => $this->input->post('tahun_prestasi5'),
                'keterangan_prestasi5' => $this->input->post('keterangan_prestasi5'),


                //Riwayat Pekerjaan
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'bidang_usaha' => $this->input->post('bidang_usaha'),
                'kota_perusahaan' => $this->input->post('kota_perusahaan'),
                'jabatan_perusahaan' => $this->input->post('jabatan_perusahaan'),
                'awal_kerja' => $this->input->post('awal_kerja'),
                'akhir_kerja' => $this->input->post('akhir_kerja'),
                'gaji_terakhir' => $this->input->post('gaji_terakhir'),
                'alasan_berhenti' => $this->input->post('alasan_berhenti'),
                'tugas_tgg_jawab' => $this->input->post('tugas_tgg_jawab'),

                // Minat dan Konsep pribadi
                'alasan_bekerja' => $this->input->post('alasan_bekerja'),
                'fasilitas_bekerja' => $this->input->post('fasilitas_bekerja'),
                'kapan_mulai_bekerja' => $this->input->post('kapan_mulai_bekerja'),
                'kenalan_perusahaan' => $this->input->post('kenalan_perusahaan'),
                'nama_kenalan1' => $this->input->post('nama_kenalan1'),
                'jabatan_kenalan1' => $this->input->post('jabatan_kenalan1'),
                'bagian_kenalan1' => $this->input->post('bagian_kenalan1'),
                'hubungan_kenalan1' => $this->input->post('hubungan_kenalan1'),
                'nama_kenalan2' => $this->input->post('nama_kenalan2'),
                'jabatan_kenalan2' => $this->input->post('jabatan_kenalan2'),
                'bagian_kenalan2' => $this->input->post('bagian_kenalan2'),
                'hubungan_kenalan2' => $this->input->post('hubungan_kenalan2'),

                // Kelebihan dan Kekurangan
                'kelebihan' => $this->input->post('kelebihan'),
                'kekurangan' => $this->input->post('kekurangan'),
                'pernah_sakit' => $this->input->post('pernah_sakit'),
                'nama_penyakit1' => $this->input->post('nama_penyakit1'),
                'lama_sakit1' => $this->input->post('lama_sakit1'),
                'akibat_ditimbulkan1' => $this->input->post('akibat_ditimbulkan1'),
                'nama_penyakit2' => $this->input->post('nama_penyakit2'),
                'lama_sakit2' => $this->input->post('lama_sakit2'),
                'akibat_ditimbulkan2' => $this->input->post('akibat_ditimbulkan2'),
                'buta_warna' => $this->input->post('buta_warna'),

                //Pengalaman Organisasi
                'nama_organisasi1' => $this->input->post('nama_organisasi1'),
                'jenis_organisasi1' => $this->input->post('jenis_organisasi1'),
                'jabatan_organisasi1' => $this->input->post('jabatan_organisasi1'),
                'periode_organisasi1' => $this->input->post('periode_organisasi1'),
                'nama_organisasi2' => $this->input->post('nama_organisasi2'),
                'jenis_organisasi2' => $this->input->post('jenis_organisasi2'),
                'jabatan_organisasi2' => $this->input->post('jabatan_organisasi2'),
                'periode_organisasi2' => $this->input->post('periode_organisasi2'),
                'nama_organisasi3' => $this->input->post('nama_organisasi3'),
                'jenis_organisasi3' => $this->input->post('jenis_organisasi3'),
                'jabatan_organisasi3' => $this->input->post('jabatan_organisasi3'),
                'periode_organisasi3' => $this->input->post('periode_organisasi3'),

                //Referensi
                'nama_referensi1' => $this->input->post('nama_referensi1'),
                'alamat_referensi1' => $this->input->post('alamat_referensi1'),
                'no_telp_referensi1' => $this->input->post('no_telp_referensi1'),
                'pekerjaan_referensi1' => $this->input->post('pekerjaan_referensi1'),
                'hubungan_referensi1' => $this->input->post('hubungan_referensi1'),
                'nama_referensi2' => $this->input->post('nama_referensi2'),
                'alamat_referensi2' => $this->input->post('alamat_referensi2'),
                'no_telp_referensi2' => $this->input->post('no_telp_referensi2'),
                'pekerjaan_referensi2' => $this->input->post('pekerjaan_referensi2'),
                'hubungan_referensi2' => $this->input->post('hubungan_referensi2'),

                //Orang Dihubungi Darurat
                'nama_dihubungi1' => $this->input->post('nama_dihubungi1'),
                'alamat_dihubungi1' => $this->input->post('alamat_dihubungi1'),
                'no_telp_dihubungi1' => $this->input->post('no_telp_dihubungi1'),
                'pekerjaan_dihubungi1' => $this->input->post('pekerjaan_dihubungi1'),
                'hubungan_dihubungi1' => $this->input->post('hubungan_dihubungi1'),
                'nama_dihubungi2' => $this->input->post('nama_dihubungi2'),
                'alamat_dihubungi2' => $this->input->post('alamat_dihubungi2'),
                'no_telp_dihubungi2' => $this->input->post('no_telp_dihubungi2'),
                'pekerjaan_dihubungi2' => $this->input->post('pekerjaan_dihubungi2'),
                'hubungan_dihubungi2' => $this->input->post('hubungan_dihubungi2'),

                // Check Box
                'check1' => $this->input->post('check1'),
                'check2' => $this->input->post('check2'),
                // 'kelengkapan_berkas' => implode(', ', $this->input->post('kelengkapan_berkas')),

                // Files
                'foto_formal' => $dataInfo[0]['file_name'],
                // 'ijazah' => $dataInfo[1]['file_name'],
                // 'transkrip_nilai' => $dataInfo[2]['file_name'],
                // 'sertifikat_vaksin' => $dataInfo[3]['file_name'],
                // 'ktp' => $dataInfo[4]['file_name'],
                // 'npwp' => $dataInfo[5]['file_name'],
                // 'kartu_keluarga' => $dataInfo[6]['file_name'],
                // 'surat_pernyataan' => $dataInfo[7]['file_name'],
                // 'kartu_disnaker' => $dataInfo[8]['file_name'],
                // 'skck' => $dataInfo[9]['file_name'],
                // 'surat_sehat' => $dataInfo[10]['file_name'],
                // 'spk1' => $dataInfo[11]['file_name'],
                // 'spk2' => $dataInfo[12]['file_name'],
                // 'spk3' => $dataInfo[13]['file_name'],
                // 'sertif_keahlian1' => $dataInfo[14]['file_name'],
                // 'sertif_keahlian2' => $dataInfo[15]['file_name'],
                // 'sertif_keahlian3' => $dataInfo[16]['file_name'],
            );
        }
        // --------------------------------------------------------------
        // AUTHORITATIVE QUOTA CHECK + INSERT (transaction-wrapped).
        // The early check above is only a fast gate so we don't waste time
        // uploading files for a clearly-full job. The REAL enforcement is
        // here: SELECT ... FOR UPDATE inside a transaction takes a row lock
        // that is held until the INSERT commits. Concurrent save() calls
        // serialize on this row, so only one applicant can take each slot.
        // (Autocommit would release the lock between SELECT and INSERT,
        //  which is why this MUST be in an explicit transaction.)
        // --------------------------------------------------------------
        if ($posisi !== null && $posisi !== '') {
            $this->db->trans_start();

            $row = $this->db->query(
                "SELECT r.`limit`,
                        (SELECT COUNT(*) FROM tb_pelamar p WHERE p.posisi = r.division_code) AS sudah_isi
                 FROM tb_recruitment r
                 WHERE r.division_code = ?
                 FOR UPDATE",
                array($posisi)
            )->row();

            $quota_exceeded = false;
            if ($row) {
                $sisa = (int) $row->limit - (int) $row->sudah_isi;
                if ($sisa <= 0) {
                    $quota_exceeded = true;
                }
            }

            if ($quota_exceeded) {
                // Roll back the transaction and reject. A second applicant
                // who was waiting on the lock will now see the updated count.
                $this->db->trans_rollback();
                $this->session->set_flashdata('error', 'Mohon maaf, kuota untuk lowongan ini sudah penuh.');
                redirect('career');
                return;
            }

            //Insert data ke database (still inside the transaction)
            $this->m_recruitment->save($data);
            $insert_id = $this->db->insert_id();

            $this->db->trans_complete();
        } else {
            // Historical/orphan posisi not in tb_recruitment — no quota to enforce.
            $this->m_recruitment->save($data);
            $insert_id = $this->db->insert_id();
        }

        // Pass the just-inserted applicant id in the URL so the success page
        // can show THAT record. We deliberately do NOT use flashdata here:
        // flashdata depends on the session cookie surviving the redirect, and
        // this app uses file-based sessions (sess_save_path=NULL) which are
        // unreliable on the production host — a lost session left the success
        // page showing empty Code/Name/Date fields. A URL segment survives
        // regardless of session state.
        redirect('recruitment_form/berhasil_daftar/' . (int) $insert_id);
    }

    private function set_upload_options()
    {
        //Upload image options
        $config = array();
        $nmfile = $this->input->post('no_ktp');
        $config['upload_path'] = './uploads/recruitment';
        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
        $config['max_size']      = '20000';
        $config['max_width']      = '10240';
        $config['max_height']      = '7680';
        if ($_FILES == '' || null) {
            $config['file_name'] = '';
        } else {
            $config['file_name'] = $nmfile . '_' . $_FILES["userfile"]['name'];
        }
        $config['overwrite']     = FALSE;
        return $config;
    }

    public function valid_ktp()
    {
        $ktp       = $this->input->post('ktp');
        $data      = $this->m_recruitment->validid_new($ktp);
        echo json_encode($data);
    }

    public function valid_kuota()
    {
        $code       = $this->input->post('code');
        $data      = $this->m_recruitment->validkuota($code);
        echo json_encode($data);
    }

    public function berhasil_daftar($id = 0)
    {
        // The applicant id is passed in the URL (see save()), NOT via
        // flashdata, because the file-based session is unreliable on the
        // production host and flashdata was being lost — leaving the page
        // with empty fields.
        $this->session->set_flashdata('success', 'Data anda berhasil dikirim, silahkan menunggu informasi selanjutnya melalui email atau nomor handphone.');
        $data['rec'] = $this->m_recruitment->getById((int) $id);

        $this->load->view('_layouts/v_navbar');
        $this->load->view('berhasil_daftar', $data);
        $this->load->view('_layouts/v_footer');
    }

    public function hitung_umur()
    {
        $this->load->helper('date');
        $tanggal_lahir = strtotime('tanggal_lahir');
        $tanggal_sekarang = time();
        $umur =  timespan($tanggal_lahir, $tanggal_sekarang, 1);
        return $umur;
    }

    /**
     * Kabupaten/Kota for a province, from the cahyadsn wilayah table.
     * @param string $prov_kode  province kode, e.g. "32"
     *
     * Kota/Kabupaten is encoded in the kode's second segment:
     *   01-69 => Kabupaten,  71-99 => Kota.
     * The nama already includes the "Kabupaten "/"Kota " prefix, so we just
     * group by type for clarity.
     */
    function add_ajax_kab($prov_kode)
    {
        $prov_kode = $this->db->escape_like_str((string) $prov_kode);
        // children: one dot (e.g. "32.16"), not two ("32.16.01")
        $rows = $this->db->query(
            "SELECT kode, nama FROM wilayah
             WHERE kode LIKE ? ESCAPE '|'
               AND kode NOT LIKE ? ESCAPE '|'
             ORDER BY (SUBSTRING_INDEX(kode, '.', -1) >= 70) ASC, nama ASC",
            array($prov_kode . '|.%', $prov_kode . '|.%.%')
        )->result();

        $data = "<option value=''>- Pilih Kota/Kabupaten -</option>";
        $current_type = null;
        foreach ($rows as $value) {
            $is_kota = (substr($value->kode, -2) >= 70);
            $type = $is_kota ? 'kota' : 'kabupaten';
            if ($type !== $current_type) {
                if ($current_type !== null) { $data .= "</optgroup>"; }
                $data .= "<optgroup label='" . ($is_kota ? 'Kota' : 'Kabupaten') . "'>";
                $current_type = $type;
            }
            $data .= "<option value='" . htmlspecialchars($value->kode, ENT_QUOTES) . "'>"
                   . htmlspecialchars($value->nama, ENT_QUOTES) . "</option>";
        }
        if ($current_type !== null) { $data .= "</optgroup>"; }
        echo $data;
    }

    /**
     * Kecamatan for a kabupaten/kota.
     * @param string $kab_kode  e.g. "32.16"
     */
    function add_ajax_kec($kab_kode)
    {
        $kab_kode = $this->db->escape_like_str((string) $kab_kode);
        $rows = $this->db->query(
            "SELECT kode, nama FROM wilayah
             WHERE kode LIKE ? ESCAPE '|'
               AND kode NOT LIKE ? ESCAPE '|'
             ORDER BY nama ASC",
            array($kab_kode . '|.%', $kab_kode . '|.%.%')
        )->result();

        $data = "<option value=''> - Pilih Kecamatan - </option>";
        foreach ($rows as $value) {
            $data .= "<option value='" . htmlspecialchars($value->kode, ENT_QUOTES) . "'>"
                   . htmlspecialchars($value->nama, ENT_QUOTES) . "</option>";
        }
        echo $data;
    }

    /**
     * Kelurahan/Desa for a kecamatan.
     * @param string $kec_kode  e.g. "32.16.01"
     */
    function add_ajax_des($kec_kode)
    {
        $kec_kode = $this->db->escape_like_str((string) $kec_kode);
        $rows = $this->db->query(
            "SELECT kode, nama FROM wilayah
             WHERE kode LIKE ? ESCAPE '|'
             ORDER BY nama ASC",
            array($kec_kode . '|.%')
        )->result();

        $data = "<option value=''> - Pilih Desa - </option>";
        foreach ($rows as $value) {
            $data .= "<option value='" . htmlspecialchars($value->kode, ENT_QUOTES) . "'>"
                   . htmlspecialchars($value->nama, ENT_QUOTES) . "</option>";
        }
        echo $data;
    }
}