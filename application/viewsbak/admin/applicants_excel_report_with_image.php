 <?php
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=$title.xls");
 header("Pragma: no-cache");
 header("Expires: 0");
 ?>
 
 <table border="1" width="100%">
      <thead>
           <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Golongan Darah</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>No. KTP</th>
              <th>No. NPWP</th>
              <th>Alamat (KTP)</th>
              <th>RW/RW (KTP)</th>
              <th>Kelurahan (KTP)</th>
              <th>Kecamatan (KTP)</th>
              <th>Kota (KTP)</th>
              <th>Provinsi (KTP)</th>
              <th>Alamat Tinggal</th>
              <th>RW/RW</th>
              <th>Kelurahan</th>
              <th>Kecamatan</th>
              <th>Kota</th>
              <th>Provinsi</th>
              <th>No. Hp</th>
              <th>Email</th>
              <th>Agama</th>
              <th>Tinggi Badan</th>
              <th>Berat Badan</th>
              <th>Status Tempat Tinggal</th>
              <th>Status Pernikahan</th>
              <th>Golongan</th>
              <th>Posisi</th>
              <th>Gaji</th> 
              <th>Jenjang</th>
              <th>Nama Sekolah</th>
              <th>Jurusan</th>
              <th>Tahun</th>
              <th>Nilai Akhir</th>
              <th>Kota</th>
              <th>Jenjang</th>
              <th>Nama Sekolah</th>
              <th>Jurusan</th>
              <th>Tahun</th>
              <th>Nilai Akhir</th>
              <th>Kota</th>
              <th>Jenjang</th>
              <th>Nama Sekolah</th>
              <th>Jurusan</th>
              <th>Tahun</th>
              <th>Nilai Akhir</th>
              <th>Kota</th>
              <th>Jenjang</th>
              <th>Nama Sekolah</th>
              <th>Jurusan</th>
              <th>Tahun</th>
              <th>Nilai Akhir</th>
              <th>Kota</th>
              <th>Nama Training</th>
              <th>Lembaga</th>
              <th>Kota Training</th>
              <th>Tahun Training</th>
              <th>Skill Training</th>
              <th>Nama Training</th>
              <th>Lembaga</th>
              <th>Kota Training</th>
              <th>Tahun Training</th>
              <th>Skill Training</th>
              <th>Nama Training</th>
              <th>Lembaga</th>
              <th>Kota Training</th>
              <th>Tahun Training</th>
              <th>Skill Training</th>
              <th>Nama Training</th>
              <th>Lembaga</th>
              <th>Kota Training</th>
              <th>Tahun Training</th>
              <th>Skill Training</th>
              <th>Bahasa 1</th>
              <th>Lisan</th>
              <th>Tulisan</th>
              <th>Bahasa 2</th>
              <th>Lisan</th>
              <th>Tulisan</th>
              <th>Bahasa 3</th>
              <th>Lisan</th>
              <th>Tulisan</th>
              <th>Keterampilan</th>
              <th>Keterangan</th>
              <th>Deskripsi</th>
              <th>Keterampilan</th>
              <th>Keterangan</th>
              <th>Deskripsi</th>
              <th>Keterampilan</th>
              <th>Keterangan</th>
              <th>Deskripsi</th>
              <th>Keterampilan</th>
              <th>Keterangan</th>
              <th>Deskripsi</th>
              <th>Keterampilan</th>
              <th>Keterangan</th>
              <th>Deskripsi</th>
              <th>Nama Perusahaan</th>
              <th>Bidang Usaha</th>
              <th>Kota Perusahaan</th>
              <th>Jabatan</th>
              <th>Awal Kerja</th>
              <th>Akhir Kerja</th>
              <th>Gaji Terakhir</th>
              <th>Alasan Berhenti</th>
              <th>Alasan Bekerja</th>
              <th>Fasilitas Diharapkan</th>
              <th>Kapan Bisa Mulai Bekejra</th>
              <th>Kenalan Perusahaan</th>
              <th>Nama Kenalan</th>
              <th>Jabatan</th>
              <th>Bagian</th>
              <th>Hubungan</th>
              <th>Nama Kenalan</th>
              <th>Jabatan</th>
              <th>Bagian</th>
              <th>Hubungan</th>
              <th>Kelebihan</th>
              <th>Kekurangan</th>
              <th>Pernah Sakit</th>
              <th>Nama Penyakit</th>
              <th>Lama Sakit</th>
              <th>Akibat Ditimbulkan</th>
              <th>Nama Penyakit</th>
              <th>Lama Sakit</th>
              <th>Akibat Ditimbulkan</t>
              <th>Buta Warna</th>
              <th>Foto Formal</th>
              <th>Ijazah</th>
              <th>Transkrip Nilai</th>
              <th>SPK 1</th>
              <th>SPK 2</th>
              <th>SPK 3</th>
              <th>Sertifikat Keahlian 1</th>
              <th>Sertifikat Keahlian 2</th>
              <th>Sertifikat Keahlian 3</th>
              <th>Image</th>
           </tr>
      </thead>
 
      <tbody>
          <?php 
            $no = 1;
            foreach ($recruitment as $rec): ?>
            <tr>
              <td>
                <?php echo $no++ ?>
              </td>
              <td>
                <?php echo $rec->name ?>
              </td>
              <td>
                <?php echo $rec->jenis_kelamin ?>
              </td>
              <td>
                <?php echo $rec->gol_darah ?>
              </td>
              <td>
                <?php echo $rec->tempat_lahir ?>
              </td>
              <td>
                <?php echo $rec->tanggal_lahir ?>
              </td> 
              <td>
                <?php echo $rec->no_ktp ?>
              </td>
              <td>
                <?php if ($rec->no_npwp !== null) 
                {
                  echo $rec->no_npwp;
                } else
                {
                  echo "DATA KOSONG";
                } ?>
              </td>   
              <td>
                <?php echo $rec->alamat_ktp ?>
              </td> 
              <td>
                <?php echo $rec->rt_rw_ktp ?>
              </td>
              <td>
                <?php echo $rec->kelurahan_ktp ?>
              </td>
              <td>
                <?php echo $rec->kecamatan_ktp ?>
              </td>   
              <td>
                <?php echo $rec->kota_ktp ?>
              </td>           
              <td>
                <?php echo $rec->provinsi_ktp ?>
              </td>
              <td>
                <?php echo $rec->alamat_tinggal ?>
              </td> 
              <td>
                <?php echo $rec->rt_rw_tinggal ?>
              </td>
              <td>
                <?php echo $rec->kelurahan_tinggal ?>
              </td>
              <td>
                <?php echo $rec->kecamatan_tinggal ?>
              </td>   
              <td>
                <?php echo $rec->kota_tinggal ?>
              </td>           
              <td>
                <?php echo $rec->provinsi_tinggal ?>
              </td>   
              <td>
                <?php echo $rec->no_hp ?>
              </td> 
              <td>
                <?php echo $rec->email ?>
              </td>
              <td>
                <?php echo $rec->agama ?>
              </td>
              <td>
                <?php echo $rec->tinggi_badan ?>
              </td>   
              <td>
                <?php echo $rec->berat_badan ?>
              </td>           
              <td>
                <?php echo $rec->status_tempat_tinggal ?>
              </td> 
              <td>
                <?php echo $rec->status_pernikahan ?>
              </td> 
              <td>
                <?php echo $rec->golongan ?>
              </td>
              <td>
                <?php echo $rec->posisi ?>
              </td>
              <td>
                <?php echo $rec->gaji ?>
              </td> 
              <td>
                <?php echo $rec->jenjang1 ?>
              </td>
              <td>
                <?php echo $rec->nama_sekolah1 ?>
              </td>
              <td>
                <?php echo $rec->jurusan1 ?>
              </td>
              <td>
                <?php echo $rec->tahun1 ?>                      
              </td>
              <td>
                <?php echo $rec->nilai_akhir1 ?>
              </td>
              <td>
                <?php echo $rec->kota1 ?>
              </td>
              <td>
                <?php echo $rec->jenjang2 ?>
              </td>
              <td>
                <?php echo $rec->nama_sekolah2 ?>
              </td>
              <td>
                <?php echo $rec->jurusan2 ?>
              </td>
              <td>
                <?php echo $rec->tahun2 ?>                      
              </td>
              <td>
                <?php echo $rec->nilai_akhir2 ?>
              </td>
              <td>
                <?php echo $rec->kota2 ?>
              </td>
              <td>
                <?php echo $rec->jenjang3 ?>
              </td>
              <td>
                <?php echo $rec->nama_sekolah3 ?>
              </td>
              <td>
                <?php echo $rec->jurusan3 ?>
              </td>
              <td>
                <?php echo $rec->tahun3 ?>                      
              </td>
              <td>
                <?php echo $rec->nilai_akhir3 ?>
              </td>
              <td>
                <?php echo $rec->kota3 ?>
                    </td>
              <td>
                <?php echo $rec->jenjang4 ?>
              </td>
              <td>
                <?php echo $rec->nama_sekolah4 ?>
              </td>
              <td>
                <?php echo $rec->jurusan4 ?>
              </td>
              <td>
                <?php echo $rec->tahun4 ?>                      
              </td>
              <td>
                <?php echo $rec->nilai_akhir4 ?>
              </td>
              <td>
                <?php echo $rec->kota4 ?>
              </td>
              <td>
                <?php echo $rec->nama_training1 ?>
              </td>
              <td>
                <?php echo $rec->lembaga1 ?>
              </td>
              <td>
                <?php echo $rec->kota_training1 ?>
              </td>
              <td>
                <?php echo $rec->tahun_training1 ?>                     
              </td>
              <td>
                <?php echo $rec->skill_training1 ?>
              </td>
              <td>
                <?php echo $rec->nama_training2 ?>
              </td>
              <td>
                <?php echo $rec->lembaga2 ?>
              </td>
              <td>
                <?php echo $rec->kota_training2 ?>
              </td>
              <td>
                <?php echo $rec->tahun_training2 ?>                     
              </td>
              <td>
                <?php echo $rec->skill_training2 ?>
              </td>
              <td>
                <?php echo $rec->nama_training3 ?>
              </td>
              <td>
                <?php echo $rec->lembaga3 ?>
              </td>
              <td>
                <?php echo $rec->kota_training3 ?>
              </td>
              <td>
                <?php echo $rec->tahun_training3 ?>                     
              </td>
              <td>
                <?php echo $rec->skill_training3 ?>
              </td>
              <td>
                <?php echo $rec->nama_training4 ?>
              </td>
              <td>
                <?php echo $rec->lembaga4 ?>
              </td>
              <td>
                 <?php echo $rec->kota_training4 ?>
              </td>
              <td>
                <?php echo $rec->tahun_training4 ?>                     
              </td>
              <td>
                <?php echo $rec->skill_training4 ?>
              </td>
              <td>
                <?php echo $rec->bahasa1 ?>
              </td>
              <td>
                <?php echo $rec->lisan1 ?>
              </td>
              <td>
                <?php echo $rec->tulisan1 ?>
              </td>
              <td>
                <?php echo $rec->bahasa2 ?>
              </td>
              <td>
                <?php echo $rec->lisan2 ?>
              </td>
              <td>
                <?php echo $rec->tulisan2 ?>
              </td>
              <td>
                <?php echo $rec->bahasa3 ?>
              </td>
              <td>
                <?php echo $rec->lisan3 ?>
              </td>
              <td>
                <?php echo $rec->tulisan3 ?>
              </td>
              <td>
                <?php echo $rec->keterampilan1 ?>
              </td>
              <td>
                <?php echo $rec->keterangan1 ?>
              </td>
              <td>
                <?php echo $rec->deskripsi1 ?>
              </td>
              <td>
                <?php echo $rec->keterampilan2 ?>
              </td>
              <td>
                <?php echo $rec->keterangan2 ?>
              </td>
              <td>
                <?php echo $rec->deskripsi2 ?>
              </td>
              <td>
                <?php echo $rec->keterampilan3 ?>
              </td>
              <td>
                <?php echo $rec->keterangan3 ?>
              </td>
              <td>
                <?php echo $rec->deskripsi3 ?>
              </td>
              <td>
                <?php echo $rec->keterampilan4 ?>
              </td>
              <td>
                <?php echo $rec->keterangan4 ?>
              </td>
              <td>
                <?php echo $rec->deskripsi4 ?>
              </td>
              <td>
                <?php echo $rec->keterampilan5 ?>
              </td>
              <td>
                <?php echo $rec->keterangan5 ?>
              </td>
              <td>
                <?php echo $rec->deskripsi5 ?>
              </td>
              <td>
                <?php echo $rec->nama_perusahaan ?>
              </td>
              <td>
                <?php echo $rec->bidang_usaha ?>
              </td>
              <td>
                <?php echo $rec->kota_perusahaan ?>
              </td>
              <td>
                <?php echo $rec->jabatan_perusahaan ?>
              </td>
              <td>
                <?php echo $rec->awal_kerja ?>
              </td>
              <td>
                <?php echo $rec->akhir_kerja ?>
              </td>
              <td>
                <?php echo $rec->gaji_terakhir ?>
              </td>
              <td>
                <?php echo $rec->alasan_berhenti ?>
              </td>
              <td>
                <?php echo $rec->alasan_bekerja ?>
              </td>
              <td>
                <?php echo $rec->fasilitas_bekerja ?>
              </td>
              <td>
                <?php echo $rec->kapan_mulai_bekerja ?>
              </td>
              <td>
                <?php echo $rec->kenalan_perusahaan ?>
              </td>
              <td>
                <?php echo $rec->nama_kenalan1 ?>
              </td>
              <td>
                <?php echo $rec->jabatan_kenalan1 ?>
              </td>
              <td>
                <?php echo $rec->bagian_kenalan1 ?>
              </td>
              <td>
                <?php echo $rec->hubungan_kenalan1 ?>
              </td>
              <td>
                <?php echo $rec->nama_kenalan2 ?>
              </td>
              <td>
                <?php echo $rec->jabatan_kenalan2 ?>
              </td>
              <td>
                <?php echo $rec->bagian_kenalan2 ?>
              </td>
              <td>
                <?php echo $rec->hubungan_kenalan2 ?>
              </td>
              <td>
                <?php echo $rec->kelebihan ?>
              </td>
              <td>
                <?php echo $rec->kekurangan ?>
              </td>
              <td>
                <?php echo $rec->pernah_sakit ?>
              </td>
              <td>
                <?php echo $rec->nama_penyakit1 ?>
              </td>
              <td>
                <?php echo $rec->lama_sakit1 ?>
              </td>
              <td>
                <?php echo $rec->akibat_ditimbulkan1 ?>
              </td>
              <td>
                <?php echo $rec->nama_penyakit2 ?>
              </td>
              <td>
                <?php echo $rec->lama_sakit2 ?>
              </td>
              <td>
                <?php echo $rec->akibat_ditimbulkan2 ?>
              </td>
              <td>
                <?php echo $rec->buta_warna ?>
              </td>
              <td>
                <?php if ($rec->foto_formal !== null) 
                {
                  echo "<p style='color: blue'>Ada</p>";
                } else
                {
                  echo "<p style='color: red'>Tidak ada</p>";
                } ?>
              </td>
              <td>
                <?php if ($rec->ijazah !== null) 
                {
                  echo "<p style='color: blue'>Ada</p>";
                } else
                {
                  echo "<p style='color: red'>Tidak ada</p>";
                } ?>
              </td>
              <td>
                <?php if ($rec->transkrip_nilai !== null) 
                {
                  echo "<p style='color: blue'>Ada</p>";
                } else
                {
                  echo "<p style='color: red'>Tidak ada</p>";
                } ?>
              </td>
              <td>
                <?php if ($rec->spk1 !== null) 
                {
                  echo "<p style='color: blue'>Ada</p>";
                } else
                {
                  echo "<p style='color: red'>Tidak ada</p>";
                } ?>
              </td>
              <td>
                <?php if ($rec->spk2 !== null) 
                {
                  echo "<p style='color: blue'>Ada</p>";
                } else
                {
                  echo "<p style='color: red'>Tidak ada</p>";
                } ?>
              </td>
              <td>
                <?php if ($rec->spk3 !== null) 
                {
                  echo "<p style='color: blue'>Ada</p>";
                } else
                {
                  echo "<p style='color: red'>Tidak ada</p>";
                } ?> 
              </td>
              <td>
                <?php if ($rec->sertif_keahlian1 !== null) 
                {
                  echo "<p style='color: blue'>Ada</p>";
                } else
                {
                  echo "<p style='color: red'>Tidak ada</p>";
                } ?>
              </td>
              <td>
                <?php if ($rec->sertif_keahlian2 !== null) 
                {
                  echo "<p style='color: blue'>Ada</p>";
                } else
                {
                  echo "<p style='color: red'>Tidak ada</p>";
                } ?> 
              </td>
              <td>
                <?php if ($rec->sertif_keahlian3 !== null)
                {
                  echo "<p style='color: blue'>Ada</p>";
                } else
                {
                  echo "<p style='color: red'>Tidak ada</p>";
                } ?>
              </td>
              <td>
                <?php if ($rec->foto_formal !== null && $rec->foto_formal !== '') {
                    $photo_url = base_url('uploads/recruitment/' . $rec->foto_formal);
                    echo '<a href="' . $photo_url . '" target="_blank">Lihat Foto</a>';
                } else {
                    echo "<p style='color: red'>Tidak ada</p>";
                } ?>
              </td>
           </tr>
           <?php endforeach; ?>
      </tbody>
 
 </table>