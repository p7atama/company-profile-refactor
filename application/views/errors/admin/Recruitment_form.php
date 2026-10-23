<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Recruitment_form extends CI_Controller {
 
	 public function __construct()
     {
		 parent::__construct();
		 $this->load->helper('url','form');
		 $this->load->model(array("m_recruitment","m_career"));
		 $this->load->library('form_validation');
    }

	 public function index($code,$jabatan)
     { 
        $data = ['career','recruitment' => $this->m_career->index(),
        'code' => $code, 'jabatan' =>$jabatan];
		 $this->load->view('_layouts/v_navbar');
		 $this->load->view('recruitment_form',$data);
		 $this->load->view('_layouts/v_footer');
    }

    public function save() 
    {
        //Untuk Upload Multifile
        $this->load->library('upload');
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        for($i=0; $i<$cpt; $i++) 
        {           
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload();
            $dataInfo[] = $this->upload->data();
        }

        //Insert data ke database
        $data = array(
            // Identitas
	    'id' => '',
            'date' => $this->input->post('date'),
            'name' => $this->input->post('name'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'gol_darah' => $this->input->post('gol_darah'),
            'umur' => $this->input->post('umur'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'no_ktp' => $this->input->post('no_ktp'),
            'no_npwp'=> $this->input->post('no_npwp'),
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
            'kota_tinggal'=> $this->input->post('kota_tinggal'),
            'provinsi_tinggal' => $this->input->post('provinsi_tinggal'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'agama' => $this->input->post('agama'),
            'tinggi_badan' => $this->input->post('tinggi_badan'),
            'berat_badan' => $this->input->post('berat_badan'),
            'status_tempat_tinggal' => $this->input->post('status_tempat_tinggal'),
            'status_pernikahan' => $this->input->post('status_pernikahan'),
            'golongan' => $this->input->post('golongan'),
            'posisi' => $this->input->post('posisi'),
            'gaji' => $this->input->post('gaji'),

            // Pendidikan
            'jenjang1' => $this->input->post('jenjang1'),
            'nama_sekolah1' => $this->input->post('nama_sekolah1'),
            'jurusan1' => $this->input->post('jurusan1'),
            'tahun1' => $this->input->post('tahun1'),
            'nilai_akhir1' => $this->input->post('nilai_akhir1'),
            'kota1' => $this->input->post('kota1'),
            'jenjang2' => $this->input->post('jenjang2'),
            'nama_sekolah2' => $this->input->post('nama_sekolah2'),
            'jurusan2' => $this->input->post('jurusan2'),
            'tahun2'=> $this->input->post('tahun2'),
            'nilai_akhir2' => $this->input->post('nilai_akhir2'),
            'kota2' => $this->input->post('kota2'),
            'jenjang3' => $this->input->post('jenjang3'),
            'nama_sekolah3' => $this->input->post('nama_sekolah3'),
            'jurusan3' => $this->input->post('jurusan3'),
            'tahun3' => $this->input->post('tahun3'),
            'nilai_akhir3' => $this->input->post('nilai_akhir3'),
            'kota3' => $this->input->post('kota3'),
            'jenjang4' => $this->input->post('jenjang4'),
            'nama_sekolah4' => $this->input->post('nama_sekolah4'),
            'jurusan4' => $this->input->post('jurusan4'),
            'tahun4' => $this->input->post('tahun4'),
            'nilai_akhir4' => $this->input->post('nilai_akhir4'),
            'kota4' => $this->input->post('kota4'),
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
        
            //Riwayat Pekerjaan
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'bidang_usaha' => $this->input->post('bidang_usaha'),
            'kota_perusahaan' => $this->input->post('kota_perusahaan'),
            'jabatan_perusahaan' => $this->input->post('jabatan_perusahaan'),
            'awal_kerja' => $this->input->post('awal_kerja'),
            'akhir_kerja' => $this->input->post('akhir_kerja'),
            'gaji_terakhir' => $this->input->post('gaji_terakhir'),
            'alasan_berhenti' => $this->input->post('alasan_berhenti'),

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

            // Check Box
            'check1' => $this->input->post('check1'),
            'check2' => $this->input->post('check2'),
            'kelengkapan_berkas' => implode(', ', $this->input->post('kelengkapan_berkas')),

            // Files
            'foto_formal' => $dataInfo[0]['file_name'],
            'ijazah' => $dataInfo[1]['file_name'],
            'transkrip_nilai' => $dataInfo[2]['file_name'],
            'spk1' => $dataInfo[3]['file_name'],
            'spk2' => $dataInfo[4]['file_name'],
            'spk3' => $dataInfo[5]['file_name'],
            'sertif_keahlian1' => $dataInfo[6]['file_name'],
            'sertif_keahlian2' => $dataInfo[7]['file_name'],
            'sertif_keahlian3' => $dataInfo[8]['file_name'],
        );
        $this->m_recruitment->save($data);
        redirect('recruitment_form/berhasil_daftar');
    }

  private function set_upload_options() 
  {   
    //Upload image options
    $config = array();
    $nmfile = $this->input->post('no_ktp');
    $config['upload_path'] = './uploads/recruitment';
    $config['allowed_types'] = 'jpg|png|pdf';
    $config['max_size']      = '20000';
    $config['max_width']      = '10240';
    $config['max_height']      = '7680';
    $config['file_name'] = $nmfile;
    $config['overwrite']     = FALSE;
    return $config;
  }

    public function valid_ktp()
    {
        $ktp       = $this->input->post('ktp');
        $data      = $this->m_recruitment->validid($ktp);
        echo json_encode($data);
    }

    public function berhasil_daftar(){
        $this->session->set_flashdata('success', 'Data anda berhasil dikirim, silahkan menunggu informasi selanjutnya melalui email atau nomor handphone.');
        $data = ['recruitment' => $this->m_recruitment->index()];
        $this->load->view('_layouts/v_navbar');
        $this->load->view('berhasil_daftar', $data);
        $this->load->view('_layouts/v_footer');
    }

    public function hitung_umur(){
        $this->load->helper('date');
        $tanggal_lahir = strtotime('tanggal_lahir');
        $tanggal_sekarang = time();
        $umur =  timespan($tanggal_lahir, $tanggal_sekarang,1);
        return $umur;
    }
}