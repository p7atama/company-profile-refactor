<body onLoad="window.print('width=400,height=150,resizable=yes,scrollbars=yes')">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Applicant Data</title>
  </head>
  <body>
    <div class="container-fluid">   
            <div class="section-title">
<!--                 <h2 class="mt-5">APPLICANT DATA</h2> -->
            </div>                      
                    <div class="container"> 
                        <div class="row justify-content-center">
                            <div class="col-sm-3 colom-foto mt-5">               
                                <div class="card card-img rounded" >
                                    <img style="padding: 8px 8px 8px 8px" id="foto" src="<?php echo base_url('uploads/recruitment/'.$recruitment->foto_formal) ?>" />   
                                </div>                          
                            </div>
                        </div>
                        <br>

                        <div class="card">
                            <button type="button" class="btn btn-info" data-toggle="collapse.show" data-target="#identitas">
                                <h5>I. IDENTITAS</h5>
                            </button>
                            <br>
                            <div class="card-body">
                                <div id="identitas" class="collapse.show">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="no_ktp">Nomor KTP/NIK</label>
                                            <input type="text" class="form-control" name="no_ktp" id="ktp" value="<?php echo $recruitment->no_ktp ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $recruitment->name ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">                               
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $recruitment->tempat_lahir ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Tanggal Lahir</label>
                                            <div class="form-row">
                                                <div class="input-group col-md-12">
                                                    <input type="date" name="tanggal_lahir" id="birthday" value="<?php echo $recruitment->tanggal_lahir ?>"  class="form-control" readonly/>
                                                </div>
                                            </div>                                  
                                        </div>

                                        <div class="form-group col-md-4">       
                                            <label for="result">Umur</label>
                                            <input type="number" class="form-control" name="umur" id="age" value="<?php echo $recruitment->umur ?>" readonly>
                                        </div>
                                    </div>  

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label text-right m-b-10">Jenis Kelamin</label>
                                            <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $recruitment->jenis_kelamin ?>" readonly>   
                                        </div>
                                    
                                        <div class="form-group col-md-4">
                                            <label for="gol_darah" class="control-label text-right m-b-10">Golongan Darah</label>
                                            <input type="text" class="form-control" name="gol_darah" value="<?php echo $recruitment->gol_darah ?>" readonly>   
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="no_npwp">Nomor NPWP</label>
                                            <input type="text" class="form-control"  name="no_npwp" readonly 
                                            value="<?php if ($recruitment->no_npwp == null) {
                                                            echo $recruitment->no_npwp;
                                                        } else{
                                                            echo "-";
                                                        } ?>">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="judul-form">
                                        <h5>Alamat Sesuai KTP</h5> 
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="alamat_ktp">Alamat</label>
                                            <input type="text" class="form-control" name="alamat_ktp" value="<?php echo $recruitment->alamat_ktp ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="rt_rw_ktp">RT/RW</label>
                                            <input type="text" class="form-control" name="rt_rw_ktp" value="<?php echo $recruitment->rt_rw_ktp ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="kelurahan_ktp">Kelurahan/Desa</label>
                                            <input type="text" class="form-control" name="kelurahan_ktp" value="<?php echo $recruitment->kelurahan_ktp ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="kecamatan_ktp">Kecamatan</label>
                                            <input type="text" class="form-control" name="kecamatan_ktp" value="<?php echo $recruitment->kecamatan_ktp ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="kota_ktp">Kota</label>
                                            <input type="text" class="form-control" name="kota_ktp" value="<?php echo $recruitment->kota_ktp ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="provinsi_ktp">Provinsi</label>
                                            <input type="text" class="form-control" name="provinsi_ktp" value="<?php echo $recruitment->provinsi_ktp ?>" readonly>
                                        </div>                                                          
                                    </div>                  
                                    <br>

                                    <div class="judul-form">
                                        <h5>Alamat Tinggal</h5>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="alamat_tinggal">Alamat</label>
                                            <input type="text" class="form-control" name="alamat_tinggal" value="<?php echo $recruitment->alamat_tinggal ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="rt_rw_tinggal">RT/RW</label>
                                            <input type="text" class="form-control" name="rt_rw_tinggal" value="<?php echo $recruitment->rt_rw_tinggal ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="kelurahan_tinggal">Kelurahan/Desa</label>
                                            <input type="text" class="form-control" name="kelurahan_tinggal" value="<?php echo $recruitment->kelurahan_tinggal ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="kecamatan_tinggal">Kecamatan</label>
                                            <input type="text" class="form-control" name="kecamatan_tinggal" value="<?php echo $recruitment->kecamatan_tinggal ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="kota_tinggal">Kota</label>
                                            <input type="text" class="form-control" name="kota_tinggal" value="<?php echo $recruitment->kota_tinggal ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="provinsi_tinggal">Provinsi</label>
                                            <input type="text" class="form-control" name="provinsi_tinggal" value="<?php echo $recruitment->provinsi_tinggal ?>" readonly>
                                        </div>                                                          
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="no_hp">No. Telp/No. Hp</label>
                                            <input type="text" class="form-control" name="no_hp" value="<?php echo $recruitment->no_hp ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $recruitment->email ?>" readonly>
                                        </div>  

                                        <div class="form-group col-md-4">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control" name="agama" value="<?php echo $recruitment->agama ?>" readonly>                                            
                                        </div>                                                      
                                    </div>

                                    <div class="form-row">              
                                        <div class="form-group col-md-12">
                                            <label for="status_tempat_tinggal">Status Kepemilikan Tempat Tinggal</label>
                                            <input type="text" class="form-control" name="status_tempat_tinggal" value="<?php echo $recruitment->status_tempat_tinggal ?>" readonly>   
                                        </div>                                                      
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="tinggi_badan">Tinggi Badan</label>
                                            <div class="input-group">                                       
                                                <input type="text" class="form-control" name="tinggi_badan" value="<?php echo $recruitment->tinggi_badan ?>" readonly>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">CM</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="berat_badan">Berat Badan</label>
                                            <div class="input-group">                                       
                                                <input type="text" class="form-control" name="berat_badan" value="<?php echo $recruitment->berat_badan ?>" readonly>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">KG</div>
                                                </div>
                                            </div>
                                        </div>                                                      
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="status_pernikahan">Status Pernikahan</label> 
                                            <input type="text" class="form-control" name="status_pernikahan" value="<?php echo $recruitment->status_pernikahan ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-6">                  
                                            <div>
                                                <label for="golongan" class="control-label text-right m-b-10">Golongan</label>
                                                <input type="text" class="form-control" name="golongan" 
                                                value="<?php if ($recruitment->golongan !== "") {
                                                            echo $recruitment->golongan;
                                                        } else{
                                                            echo "-";
                                                        } ?>" readonly>
                                            </div>
                                        </div>
                                    </div>  
                                    <br>

                                    <div class="judul-form">
                                        <h5>Posisi Diinginkan</h5>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="Posisi">Posisi</label>
                                            <input type="text" class="form-control" name="posisi" id="posisi" value="<?php echo $recruitment->posisi; ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-6" id="gaji">
                                            <label for="gaji">Gaji Diinginkan</label>
                                            <input type="number" class="form-control" name="gaji" value="<?php echo $recruitment->gaji; ?>" readonly>
                                        </div>                                                      
                                    </div>
                                    <br>

                                    <div class="judul-form">
                                        <h5>Kelengkapan Berkas</h5>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="kelengkapan_berkas">Kelengkapan Berkas</label>
                                            <input type="text" class="form-control" name="posisi" id="kelengkapan_berkas" value="<?php if ($recruitment->kelengkapan_berkas !== null) {
                                                            echo $recruitment->kelengkapan_berkas;
                                                        } else{
                                                            echo "-";
                                                        } ?>" readonly>
                                        </div>                                                    
                                    </div>
                                </div>
                            </div>  
                        </div> 
                        <br>
                        <br>   

                        <div class="card">
                            <button type="button" class="btn btn-info" data-toggle="collapse.show" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#pendidikan">
                                <h5>II. PENDIDIKAN</h5>
                            </button>
                            <br>

                            <div class="card-body">
                                <div id="pendidikan" class="collapse.show">
                                    <div class="judul-form">
                                        <h5>1. Pendidikan Formal</h5>
                                    </div>

                                    <div class="table-responsive ">
                                        <table class="table table-bordered table-striped">
                                            <thead class="table">
                                                <tr>
                                                    <th class="text-center">No.</th>
                                                    <th class="text-center">Jenjang</th>
                                                    <th class="text-center">Nama Sekolah</th>
                                                    <th class="text-center">Prog. Studi</th>
                                                    <th class="text-center">Tahun</th>
                                                    <th class="text-center">GPA/Nilai Akhir</th>
                                                    <th class="text-center">Kota</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td align="center">1</span></td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenjang1" id="jenjang1" value="<?php echo $recruitment->jenjang1; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nama_sekolah1" value="<?php echo $recruitment->nama_sekolah1; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="jurusan1" value="<?php echo $recruitment->jurusan1; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun1" value="<?php echo $recruitment->tahun1; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nilai_akhir1" value="<?php echo $recruitment->nilai_akhir1; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota1" value="<?php echo $recruitment->kota1; ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">2</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenjang2" 
                                                        value="<?php if ($recruitment->jenjang2 !== "") {
                                                                echo $recruitment->jenjang2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nama_sekolah2" 
                                                        value="<?php if ($recruitment->nama_sekolah2 !== "") {
                                                                echo $recruitment->nama_sekolah2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="jurusan2" 
                                                        value="<?php if ($recruitment->jurusan2 !== "") {
                                                                echo $recruitment->jurusan2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun2" 
                                                        value="<?php if ($recruitment->tahun2 !== "0") {
                                                                echo $recruitment->tahun2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nilai_akhir2" 
                                                        value="<?php if ($recruitment->nilai_akhir2 !== "") {
                                                                echo $recruitment->nilai_akhir2;
                                                                } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota2" 
                                                        value="<?php if ($recruitment->kota2 !== "") {
                                                                echo $recruitment->kota2;
                                                               }else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">3</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenjang3" 
                                                        value="<?php if ($recruitment->jenjang3 !== "") {
                                                                echo $recruitment->jenjang3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nama_sekolah3" 
                                                        value="<?php if ($recruitment->nama_sekolah3 !== "") {
                                                                echo $recruitment->nama_sekolah3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="jurusan3" 
                                                        value="<?php if ($recruitment->jurusan3 !== "") {
                                                                echo $recruitment->jurusan3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun3" 
                                                        value="<?php if ($recruitment->tahun3 !== "0") {
                                                                echo $recruitment->tahun3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nilai_akhir3" 
                                                        value="<?php if ($recruitment->nilai_akhir3 !== "") {
                                                                echo $recruitment->nilai_akhir3;
                                                                } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota3" 
                                                        value="<?php if ($recruitment->kota3 !== "") {
                                                                echo $recruitment->kota3;
                                                               }else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">4</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenjang4" 
                                                        value="<?php if ($recruitment->jenjang4 !== "") {
                                                                echo $recruitment->jenjang4;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nama_sekolah4" 
                                                        value="<?php if ($recruitment->nama_sekolah4 !== "") {
                                                                echo $recruitment->nama_sekolah4;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="jurusan4" 
                                                        value="<?php if ($recruitment->jurusan4 !== "") {
                                                                echo $recruitment->jurusan4;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun4" 
                                                        value="<?php if ($recruitment->tahun4 !== "0") {
                                                                echo $recruitment->tahun4;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nilai_akhir4" 
                                                        value="<?php if ($recruitment->nilai_akhir4 !== "") {
                                                                echo $recruitment->nilai_akhir4;
                                                                } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota4" 
                                                        value="<?php if ($recruitment->kota4 !== "") {
                                                                echo $recruitment->kota4;
                                                               }else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                </tr>                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>

                                    <div class="judul-form">
                                        <h5>2. Pendidikan Non-Formal (Bersertifikat)</h5>
                                    </div>

                                    <div class="table-responsive ">
                                        <table class="table table-bordered table-striped">
                                            <thead class="table">
                                                <tr>
                                                    <th class="text-center align-middle">No.</th>
                                                    <th class="text-center align-middle">Nama Bidang Kursus/Training</th>
                                                    <th class="text-center align-middle">Institusi/Lembaga</th>
                                                    <th class="text-center align-middle">Tempat/Kota</th>
                                                    <th class="text-center align-middle">Tahun</th>
                                                    <th class="text-center align-middle">Penjelasan Skill Yang Diperoleh</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td align="center">1</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="nama_training1" 
                                                        value="<?php if ($recruitment->nama_training1 !== "") {
                                                                echo $recruitment->nama_training1;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="lembaga1" 
                                                        value="<?php if ($recruitment->lembaga1 !== "") {
                                                                echo $recruitment->lembaga1;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota_training1" 
                                                        value="<?php if ($recruitment->kota_training1 !== "") {
                                                                echo $recruitment->kota_training1;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun_training1" 
                                                        value="<?php if ($recruitment->tahun_training1 !== "0") {
                                                                echo $recruitment->tahun_training1;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="skill_training1" 
                                                        value="<?php if ($recruitment->skill_training1 !== "") {
                                                                echo $recruitment->skill_training1;
                                                                } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">2</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="nama_training2" 
                                                        value="<?php if ($recruitment->nama_training2 !== "") {
                                                                echo $recruitment->nama_training2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="lembaga2" 
                                                        value="<?php if ($recruitment->lembaga2 !== "") {
                                                                echo $recruitment->lembaga2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota_training2" 
                                                        value="<?php if ($recruitment->kota_training2 !== "") {
                                                                echo $recruitment->kota_training2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun_training2" 
                                                        value="<?php if ($recruitment->tahun_training2 !== "0") {
                                                                echo $recruitment->tahun_training2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="skill_training2" 
                                                        value="<?php if ($recruitment->skill_training2 !== "") {
                                                                echo $recruitment->skill_training2;
                                                                } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">3</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="nama_training3" 
                                                        value="<?php if ($recruitment->nama_training3 !== "") {
                                                                echo $recruitment->nama_training3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="lembaga3" 
                                                        value="<?php if ($recruitment->lembaga3 !== "") {
                                                                echo $recruitment->lembaga3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota_training3" 
                                                        value="<?php if ($recruitment->kota_training3 !== "") {
                                                                echo $recruitment->kota_training3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun_training3" 
                                                        value="<?php if ($recruitment->tahun_training3 !== "0") {
                                                                echo $recruitment->tahun_training3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="skill_training3" 
                                                        value="<?php if ($recruitment->skill_training3 !== "") {
                                                                echo $recruitment->skill_training3;
                                                                } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">4</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="nama_training4" 
                                                        value="<?php if ($recruitment->nama_training4 !== "") {
                                                                echo $recruitment->nama_training4;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="lembaga4" 
                                                        value="<?php if ($recruitment->lembaga4 !== "") {
                                                                echo $recruitment->lembaga4;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota_training4" 
                                                        value="<?php if ($recruitment->kota_training4 !== "") {
                                                                echo $recruitment->kota_training4;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun_training4" 
                                                        value="<?php if ($recruitment->tahun_training4 !== "0") {
                                                                echo $recruitment->tahun_training4;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="skill_training4" 
                                                        value="<?php if ($recruitment->skill_training4 !== "") {
                                                                echo $recruitment->skill_training4;
                                                                } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>
                                                </tr>                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>

                                    <div class="judul-form">
                                        <h5>3. Bahasa Yang Dikuasai</h5>
                                    </div> 

                                    <div class="table-responsive m-b-30 p-r-20">
                                        <table id="mainTable" class="table table-bordered table-striped">
                                            <thead class="table">
                                                <tr>
                                                    <th class="text-center" rowspan="2" style="vertical-align: middle;font-weight: bold">No.</th>
                                                    <th class="text-center" rowspan="2" style="vertical-align: middle;font-weight: bold;width: 50%">Bahasa</th>
                                                    <th class="text-center" colspan="3" style="font-weight: bold;width: 10%!important;">Lisan</th>
                                                    <th class="text-center" colspan="3" style="font-weight: bold;width: 10%!important">Tertulis</th>
                                                </tr>

                                                <tr>
                                                    <th class="text-center" style="padding: 15px 37px;">Kurang</th>
                                                    <th class="text-center" style="padding: 15px 37px;">Cukup</th>
                                                    <th class="text-center" style="padding: 15px 37px;border-right: #ccc solid 1px">Baik</th>
                                                    <th class="text-center" style="padding: 15px 37px;">Kurang</th>
                                                    <th class="text-center" style="padding: 15px 37px;">Cukup</th>
                                                    <th class="text-center" style="padding: 15px 37px;">Baik</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td align="center" style="width:5%">1</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="bahasa1" value="<?php echo $recruitment->bahasa1 ?>" readonly>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_kurang1" name="lisan1" class="custom-control-input" value="Kurang"  <?php if($recruitment->lisan1 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="lisan_kurang1"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_cukup1" name="lisan1" class="custom-control-input" value="Cukup" <?php if($recruitment->lisan1 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="lisan_cukup1"></label>
                                                        </div>  
                                                    </td>

                                                    <td style="border-right: #ccc solid 1px">
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_baik1" name="lisan1" class="custom-control-input" value="Baik" <?php if($recruitment->lisan1 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="lisan_baik1"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_kurang1" name="tulisan1" class="custom-control-input" value="Kurang" <?php if($recruitment->tulisan1 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="tulis_kurang1"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_cukup1" name="tulisan1" class="custom-control-input" value="Cukup" <?php if($recruitment->tulisan1 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="tulis_cukup1"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_baik1" name="tulisan1" class="custom-control-input" value="Baik" <?php if($recruitment->tulisan1 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="tulis_baik1"></label>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center" style="width:5%">2</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="bahasa2" 
                                                        value="<?php if ($recruitment->bahasa2 !== "") {
                                                                echo $recruitment->bahasa2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_kurang2" name="lisan2" class="custom-control-input" value="Kurang" <?php if($recruitment->lisan2 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="lisan_kurang2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_cukup2" name="lisan2" class="custom-control-input" value="Cukup" <?php if($recruitment->lisan2 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="lisan_cukup2"></label>
                                                        </div>  
                                                    </td>

                                                    <td style="border-right: #ccc solid 1px">
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_baik2" name="lisan2" class="custom-control-input" value="Baik" <?php if($recruitment->lisan2 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="lisan_baik2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_kurang2" name="tulisan2" class="custom-control-input" value="Kurang" <?php if($recruitment->tulisan2 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="tulis_kurang2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_cukup2" name="tulisan2" class="custom-control-input" value="Cukup" <?php if($recruitment->tulisan2 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="tulis_cukup2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_baik2" name="tulisan2" class="custom-control-input" value="Baik" <?php if($recruitment->tulisan2 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="tulis_baik2"></label>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center" style="width:5%">3</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="bahasa3" 
                                                        value="<?php if ($recruitment->bahasa3 !== "") {
                                                                echo $recruitment->bahasa3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_kurang3" name="lisan3" class="custom-control-input" value="Kurang" <?php if($recruitment->lisan3 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="lisan_kurang3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_cukup3" name="lisan3" class="custom-control-input" value="Cukup" <?php if($recruitment->lisan3 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="lisan_cukup3"></label>
                                                        </div>  
                                                    </td>

                                                    <td style="border-right: #ccc solid 1px">
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_baik3" name="lisan3" class="custom-control-input" value="Baik" <?php if($recruitment->lisan3 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="lisan_baik3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_kurang3" name="tulisan3" class="custom-control-input" value="Kurang" <?php if($recruitment->tulisan3 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="tulis_kurang3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_cukup3" name="tulisan3" class="custom-control-input" value="Cukup" <?php if($recruitment->tulisan3 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="tulis_cukup3"></label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_baik3" name="tulisan3" class="custom-control-input" value="Baik" <?php if($recruitment->tulisan3 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="tulis_baik3"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <br>

                                    <div class="judul-form">
                                        <h5>4. Keterampilan/Skill</h5>
                                    </div>

                                    <div class="table-responsive m-b-30 p-r-20">
                                        <table id="mainTable" class="table table-bordered table-striped">
                                            <thead class="table">
                                                <tr>
                                                    <th class="text-center align-middle">No.</th>
                                                    <th class="text-center align-middle">Skill</th>
                                                    <th class="text-center align-middle">Kurang</th>
                                                    <th class="text-center align-middle">Cukup</th>
                                                    <th class="text-center align-middle">Baik</th>
                                                    <th class="text-center align-middle">Deskripsi Skill <br>Yang Dimiliki</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td align="center">1</td>
                                                    <td align="center">
                                                        <input type="text" name="keterampilan1" class="form-control" value="<?php if ($recruitment->keterampilan1 !== "") {
                                                                echo $recruitment->keterampilan1;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly></input>
                                                    </td>
                                                                
                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="kurang_keterampilan1" name="keterangan1" class="custom-control-input" value="Kurang" <?php if($recruitment->keterangan1 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="kurang_keterampilan1"></label>
                                                        </div>                                                      
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="cukup_keterampilan1" name="keterangan1" class="custom-control-input" value="Cukup" <?php if($recruitment->keterangan1 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="cukup_keterampilan1"></label>
                                                        </div>                                                      
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="baik_keterampilan1" name="keterangan1" class="custom-control-input" value="Baik" <?php if($recruitment->keterangan1 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="baik_keterampilan1"></label>
                                                        </div>                                                      
                                                    </td>

                                                    <td>
                                                        <div class="radio radio-success text-center">
                                                            <input class="form-control" name="deskripsi1" type="text" 
                                                            value="<?php if ($recruitment->deskripsi1 !== "") {
                                                                echo $recruitment->deskripsi1;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">2</td>
                                                    <td align="center">
                                                        <input type="text" name="keterampilan2" class="form-control" 
                                                        value="<?php if ($recruitment->keterampilan2 !== "") {
                                                                echo $recruitment->keterampilan2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly></input>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="kurang_keterampilan2" name="keterangan2" class="custom-control-input" value="Kurang" <?php if($recruitment->keterangan2 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="kurang_keterampilan2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="cukup_keterampilan2" name="keterangan2" class="custom-control-input" value="Cukup" <?php if($recruitment->keterangan2 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="cukup_keterampilan2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="baik_keterampilan2" name="keterangan2" class="custom-control-input" value="Baik" <?php if($recruitment->keterangan2 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="baik_keterampilan2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="radio radio-success text-center">
                                                            <input class="form-control" name="deskripsi2" type="text" 
                                                            value="<?php if ($recruitment->deskripsi2 !== "") {
                                                                echo $recruitment->deskripsi2;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">3</td>
                                                    <td align="center">
                                                        <input type="text" name="keterampilan3" class="form-control" value="<?php if ($recruitment->keterampilan3 !== "") {
                                                                echo $recruitment->keterampilan3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly></input>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="kurang_keterampilan3" name="keterangan3" class="custom-control-input" value="Kurang" <?php if($recruitment->keterangan3 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="kurang_keterampilan3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="cukup_keterampilan3" name="keterangan3" class="custom-control-input" value="Cukup" <?php if($recruitment->keterangan3 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="cukup_keterampilan3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="baik_keterampilan3" name="keterangan3" class="custom-control-input" value="Baik" <?php if($recruitment->keterangan3 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="baik_keterampilan3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="radio radio-success text-center">
                                                            <input class="form-control" name="deskripsi3" type="text" value="<?php if ($recruitment->deskripsi3 !== "") {
                                                                echo $recruitment->deskripsi3;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">4</td>
                                                    <td align="center">
                                                        <input type="text" name="keterampilan4" class="form-control" value="<?php if ($recruitment->keterampilan4 !== "") {
                                                                echo $recruitment->keterampilan4;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly></input>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="kurang_keterampilan4" name="keterangan4" class="custom-control-input" value="Kurang" <?php if($recruitment->keterangan4 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="kurang_keterampilan4"></label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="cukup_keterampilan4" name="keterangan4" class="custom-control-input" value="Cukup" <?php if($recruitment->keterangan4 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="cukup_keterampilan4"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="baik_keterampilan4" name="keterangan4" class="custom-control-input" value="Baik" <?php if($recruitment->keterangan4 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="baik_keterampilan4"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="radio radio-success text-center">
                                                            <input class="form-control" name="deskripsi4" type="text" value="<?php if ($recruitment->deskripsi4 !== "") {
                                                                echo $recruitment->deskripsi4;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">5</td>
                                                    <td align="center">
                                                        <input type="text" name="keterampilan5" class="form-control" value="<?php if ($recruitment->keterampilan5 !== "") {
                                                                echo $recruitment->keterampilan5;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="kurang_keterampilan5" name="keterangan5" class="custom-control-input" value="Kurang" <?php if($recruitment->keterangan5 == 'Kurang') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="kurang_keterampilan5"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="cukup_keterampilan5" name="keterangan5" class="custom-control-input" value="Cukup" <?php if($recruitment->keterangan5 == 'Cukup') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="cukup_keterampilan5"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="baik_keterampilan5" name="keterangan5" class="custom-control-input" value="Baik" <?php if($recruitment->keterangan5 == 'Baik') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="baik_keterampilan5"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="radio radio-success text-center">
                                                            <input class="form-control" name="deskripsi5" type="text" value="<?php if ($recruitment->deskripsi5 !== "") {
                                                                echo $recruitment->deskripsi5;
                                                            } else{
                                                                echo "-";
                                                            } ?>" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                  
                            </div>
                        </div>   
                        <br>
                        <br> 

                        <div class="card">
                            <button type="button" class="btn btn-info" data-toggle="collapse.show" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#riwayat_pekerjaan">
                                <h5>III. RIWAYAT PEKERJAAN</h5></button>
                            <br>
                            <div class="card-body">
                                <div id="riwayat_pekerjaan" class="collapse.show">
                                    <div class="judul-form">
                                        <h5>Pengalaman Kerja Terakhir</h5>
                                        <br>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="nama_perusahaan">Nama Perusahaan</label>
                                        </div>
                                        <div class="form-group col-md-10 title-company">
                                            <input type="text" class="form-control" name="nama_perusahaan" 
                                            value="<?php if ($recruitment->nama_perusahaan !== "") {
                                                echo $recruitment->nama_perusahaan;
                                            } else{
                                                echo "-";
                                            } ?>" readonly>
                                        </div>
                                    </div>  
                                        
                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="bidang_usaha">Bidang Usaha</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="bidang_usaha" 
                                            value="<?php if ($recruitment->bidang_usaha !== "") {
                                                echo $recruitment->bidang_usaha;
                                            } else{
                                                echo "-";
                                            } ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="lokasi">Lokasi/Kota</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="kota_perusahaan" 
                                            value="<?php if ($recruitment->kota_perusahaan !== "") {
                                                echo $recruitment->kota_perusahaan;
                                            } else{
                                                echo "-";
                                            } ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="jabatan_perusahaan">Jabatan</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="jabatan_perusahaan" 
                                            value="<?php if ($recruitment->jabatan_perusahaan !== "") {
                                                echo $recruitment->jabatan_perusahaan;
                                            } else{
                                                echo "-";
                                            } ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="waktu">... s/d ...</label>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <div class="input-group date">
                                                <input id="awal_kerja" type="date" class="form-control" name="awal_kerja"
                                                value="<?php if ($recruitment->awal_kerja !== "") {
                                                    echo $recruitment->awal_kerja;
                                                } else{
                                                    echo "-";
                                                } ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-5">
                                            <div class="input-group date">
                                                <input id="akhir_kerja" type="date" class="form-control" name="akhir_kerja"
                                                value="<?php if ($recruitment->akhir_kerja !== "") {
                                                echo $recruitment->akhir_kerja;
                                            } else{
                                                echo "-";
                                            } ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="gaji_terakhir">Gaji</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="number" class="form-control" name="gaji_terakhir" 
                                            value="<?php if ($recruitment->gaji_terakhir !== "") {
                                                echo $recruitment->gaji_terakhir;
                                            } else{
                                                echo "-";
                                            } ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="alasan_berhenti">Alasan Berhenti</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="alasan_berhenti" 
                                            value="<?php if ($recruitment->alasan_berhenti !== "") {
                                                echo $recruitment->alasan_berhenti;
                                            } else{
                                                echo "-";
                                            } ?>" readonly></input> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <br>
                        <br>

                        <div class="card">
                            <button type="button" class="btn btn-info" data-toggle="collapse.show" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#minat_konsep">
                                <h5>III. MINAT DAN KONSEP PRIBADI</h5></button>
                            <br>
                            <div class="card-body">
                                <div id="minat_konsep" class="collapse.show">

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="alasan_bekerja">1. Mengapa anda ingin bekerja di Perusahaan kami</label>
                                            <textarea readonly type="text" class="form-control" name="alasan_bekerja"><?php echo $recruitment->alasan_bekerja ?></textarea> 
                                        </div>
                                    </div>  

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="fasilitas_bekerja">2. Sebutkan fasilitas yang anda harapkan</label>
                                            <textarea readonly type="text" class="form-control" name="fasilitas_bekerja"><?php echo $recruitment->fasilitas_bekerja ?></textarea> 
                                        </div>
                                    </div>  
                                        
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="kapan_mulai_bekerja">3. Kapan anda sudah bisa mulai bekerja</label>
                                            <input type="date" readonly name="kapan_mulai_bekerja" value="<?php echo $recruitment->kapan_mulai_bekerja ?>"  class="form-control"/>
                                        </div>
                                    </div>  

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="judul-attach">
                                                <p>4. Adakah kenalan di Perusahaan kami <span class="bintang">*</span></p>
                                               </div>   
                                        </div>

                                        <div class="form-group col-md-8">   
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="rad-kenalan custom-control-input" id="rad3" name="kenalan_perusahaan" value="Ada" <?php if($recruitment->kenalan_perusahaan == 'Ada') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad3">Ada</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="rad-kenalan custom-control-input" id="rad4" name="kenalan_perusahaan" value="Tidak Ada" <?php if($recruitment->kenalan_perusahaan == 'Tidak Ada') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad4">Tidak Ada</label>
                                            </div>                  
                                        </div>
                                    </div> 

                                    <div class="form-row">                              
                                        <div class="form-group col-md-12">                  
                                            <div>
                                                <label for="ada_kenalan1">5. Kenalan Perusahaan :</label>
                                                <div class="table-responsive ">
                                                    <table class="table table-bordered table-striped">
                                                        <thead class="table">
                                                            <tr>
                                                                <th class="text-center">No.</th>
                                                                <th class="text-center">Nama</th>
                                                                <th class="text-center">Jabatan</th>
                                                                <th class="text-center">Bagian</th>
                                                                <th class="text-center">Hubungan</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td align="center">1</td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="nama_kenalan1" value="<?php if ($recruitment->nama_kenalan1 !== "") {
                                                                        echo $recruitment->nama_kenalan1;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="jabatan_kenalan1" 
                                                                    value="<?php if ($recruitment->jabatan_kenalan1 !== "") {
                                                                        echo $recruitment->jabatan_kenalan1;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="bagian_kenalan1" 
                                                                    value="<?php if ($recruitment->bagian_kenalan1 !== "") {
                                                                        echo $recruitment->bagian_kenalan1;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                   <input class="form-control" type="text" name="hubungan_kenalan1"
                                                                   value="<?php if ($recruitment->hubungan_kenalan1 !== "") {
                                                                        echo $recruitment->hubungan_kenalan1;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>                                                       
                                                            </tr>

                                                            <tr>
                                                                <td align="center">2</td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="nama_kenalan2" value="<?php if ($recruitment->nama_kenalan2 !== "") {
                                                                        echo $recruitment->nama_kenalan2;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="jabatan_kenalan2" 
                                                                    value="<?php if ($recruitment->jabatan_kenalan2 !== "") {
                                                                        echo $recruitment->jabatan_kenalan2;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="bagian_kenalan2" 
                                                                    value="<?php if ($recruitment->bagian_kenalan2 !== "") {
                                                                        echo $recruitment->bagian_kenalan2;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="hubungan_kenalan2" 
                                                                    value="<?php if ($recruitment->hubungan_kenalan2 !== "") {
                                                                        echo $recruitment->hubungan_kenalan2;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>                                                       
                                                            </tr>                                                   
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </div>  
                            </div>
                        </div>   
                        <br>
                        <br>

                        <div class="card">
                            <button type="button" class="btn btn-info" data-toggle="collapse.show" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#kelebihan_kekurangan">
                                <h5>IV. KELEBIHAN DAN KEKURANGAN</h5></button>
                            <br>
                            <div class="card-body">
                                <div id="kelebihan_kekurangan" class="collapse.show">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="kelebihan">1. Sebutkan hal-hal yang menjadi kelebihan dalam diri anda</label>
                                            <textarea readonly type="text" class="form-control" name="kelebihan"><?php echo $recruitment->kelebihan ?></textarea> 
                                        </div>
                                    </div>  

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="kekurangan">2. Sebutkan hal-hal yang menjadi kelemahan dalam diri anda</label>
                                            <textarea readonly type="text" class="form-control" name="kekurangan"><?php echo $recruitment->kekurangan ?></textarea> 
                                        </div>
                                    </div>  

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="judul-attach">
                                                <p>3. Apakah anda pernah menderita sakit yang lama sembuh</p>
                                            </div>  
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="rad-sakit custom-control-input" id="rad5" name="pernah_sakit" value="Pernah" <?php if($recruitment->pernah_sakit == 'Pernah') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad5">Pernah</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="rad-sakit custom-control-input" id="rad6" name="pernah_sakit" value="Tidak Pernah" <?php if($recruitment->pernah_sakit == 'Tidak Pernah') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad6">Tidak</label>
                                            </div>                      
                                        </div>
                                    </div>
                                
                                    <div class="form-row">
                                        <div class="form-group col-md-12">                  
                                            <div>
                                                <label for="form_sakit1">4. Jika pernah, sebutkan :</label>                                     
                                                <div class="table-responsive ">
                                                    <table class="table table-bordered table-striped">
                                                        <thead class="table">
                                                            <tr>
                                                                <th class="text-center">No.</th>
                                                                <th class="text-center">Nama Penyakit</th>
                                                                <th class="text-center">Lama Sakit</th>
                                                                <th class="text-center">Akibat Ditimbulkan</th>                                     
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td align="center">1</td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="nama_penyakit1" value="<?php if ($recruitment->nama_penyakit1 !== "") {
                                                                        echo $recruitment->nama_penyakit1;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="lama_sakit1" value="<?php if ($recruitment->lama_sakit1 !== "") {
                                                                        echo $recruitment->lama_sakit1;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="akibat_ditimbulkan1" 
                                                                    value="<?php if ($recruitment->akibat_ditimbulkan1 !== "") {
                                                                        echo $recruitment->akibat_ditimbulkan1;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>                                                                           
                                                            </tr>

                                                            <tr>
                                                                <td align="center">2</td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="nama_penyakit2" value="<?php if ($recruitment->nama_penyakit2 !== "") {
                                                                        echo $recruitment->nama_penyakit2;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="lama_sakit2" value="<?php if ($recruitment->lama_sakit2 !== "") {
                                                                        echo $recruitment->lama_sakit2;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="akibat_ditimbulkan2" 
                                                                    value="<?php if ($recruitment->akibat_ditimbulkan2 !== "") {
                                                                        echo $recruitment->akibat_ditimbulkan2;
                                                                    } else{
                                                                        echo "-";
                                                                    } ?>" readonly>
                                                                </td>     
                                                            </tr>                                                   
                                                        </tbody>
                                                    </table>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="form-row buta-warna">
                                        <div class="form-group col-md-3">
                                            <p>5. Apakah anda buta warna</p>
                                        </div>

                                        <div class="form-group col-md-9">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="rad custom-control-input" id="rad7" name="buta_warna" value="Ya" <?php if($recruitment->buta_warna == 'Ya') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad7">Ya</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="rad custom-control-input" id="rad8" name="buta_warna" value="Tidak" <?php if($recruitment->buta_warna == 'Tidak') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad8">Tidak</label>
                                            </div>                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                    <br>
        </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>