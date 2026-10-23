<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">   
            <div class="section-title">
                <h2 class="mt-5">APPLICANT DATA</h2>
            </div>                      
                    <div class="container"> 
                        <div class="row justify-content-center">
                            <div class="col-sm-3 colom-foto">               
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
                                        <div class="form-group col-md-4">
                                            <label for="no_ktp">Nomor KTP/NIK</label>
                                            <input type="text" class="form-control" name="no_ktp" id="ktp" value="<?php echo $recruitment->no_ktp ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $recruitment->name ?>" readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="no_kk">No. KK</label>
                                            <input type="number" class="form-control" name="no_kk" value="<?php echo $recruitment->no_kk ?>" readonly>
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
                                            value="<?php echo $recruitment->no_npwp; ?>">
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
                                            <label for="no_hp">Kode Pos</label>
                                            <input type="text" class="form-control" name="no_hp" value="<?php echo $recruitment->kode_pos; ?>" readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="no_hp">No. Telp/No. Hp</label>
                                            <input type="text" class="form-control" name="no_hp" value="<?php echo '0'.$recruitment->no_hp; ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $recruitment->email ?>" readonly>
                                        </div>                                                 
                                    </div>

                                    <div class="form-row">     
                                        <div class="form-group col-md-4">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control" name="agama" value="<?php echo $recruitment->agama ?>" readonly>        
                                        </div>            
                                        <div class="form-group col-md-4">
                                            <label for="status_tempat_tinggal">Status Kepemilikan Tempat Tinggal</label>
                                            <input type="text" class="form-control" name="status_tempat_tinggal" value="<?php echo $recruitment->status_tempat_tinggal ?>" readonly>   
                                        </div>   
                                        <div class="form-group col-md-4">
                                            <label for="ibu_kandung">Nama Ibu Kandung</label>
                                            <input type="text" class="form-control" name="ibu_kandung" value="<?php echo $recruitment->ibu_kandung ?>" readonly>        
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
                                        <h5>1. Pendidikan Formal Terakhir</h5>
                                    </div>

                                    <div class="table-responsive ">
                                        <table class="table table-bordered table-striped">
                                            <thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
                                                <tr>
                                                    <th class="text-center">No.</th>
                                                    <th class="text-center">Jenjang</th>
                                                    <th class="text-center">Nama Sekolah</th>
                                                    <th class="text-center">Prog. Studi</th>
                                                    <th class="text-center">Tahun Lulus</th>
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

                                                <!--
                                                <tr>
                                                    <td align="center">2</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenjang2" 
                                                        value="<?php// if ($recruitment->jenjang2 !== "") {
                                                            //    echo $recruitment->jenjang2;
                                                            //} else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nama_sekolah2" 
                                                        value="<?php// if ($recruitment->nama_sekolah2 !== "") {
                                                            //    echo $recruitment->nama_sekolah2;
                                                            //} else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="jurusan2" 
                                                        value="<?php// if ($recruitment->jurusan2 !== "") {
                                                            //    echo $recruitment->jurusan2;
                                                            //} else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun2" 
                                                        value="<?php //if ($recruitment->tahun2 !== "0") {
                                                            //    echo $recruitment->tahun2;
                                                            //} else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nilai_akhir2" 
                                                        value="<?php// if ($recruitment->nilai_akhir2 !== "") {
                                                            //    echo $recruitment->nilai_akhir2;
                                                            //    } else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota2" 
                                                        value="<?php// if ($recruitment->kota2 !== "") {
                                                            //    echo $recruitment->kota2;
                                                            //   }else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">3</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenjang3" 
                                                        value="<?php// if ($recruitment->jenjang3 !== "") {
                                                            //   echo $recruitment->jenjang3;
                                                            //} else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nama_sekolah3" 
                                                        value="<?php// if ($recruitment->nama_sekolah3 !== "") {
                                                            //    echo $recruitment->nama_sekolah3;
                                                            //} else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="jurusan3" 
                                                        value="<?php// if ($recruitment->jurusan3 !== "") {
                                                            //    echo $recruitment->jurusan3;
                                                            //} else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun3" 
                                                        value="<?php// if ($recruitment->tahun3 !== "0") {
                                                            //    echo $recruitment->tahun3;
                                                            //} else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
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
                                                        value="<?php// if ($recruitment->kota3 !== "") {
                                                            //    echo $recruitment->kota3;
                                                            //   }else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">4</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenjang4" 
                                                        value="<?php// if ($recruitment->jenjang4 !== "") {
                                                                //echo $recruitment->jenjang4;
                                                            //} else{
                                                            //    echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nama_sekolah4" 
                                                        value="<?php// if ($recruitment->nama_sekolah4 !== "") {
                                                                //echo $recruitment->nama_sekolah4;
                                                            //} else{
                                                                //echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="jurusan4" 
                                                        value="<?php// if ($recruitment->jurusan4 !== "") {
                                                            //    echo $recruitment->jurusan4;
                                                            //} else{
                                                                //echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun4" 
                                                        value="<?php// if ($recruitment->tahun4 !== "0") {
                                                                //echo $recruitment->tahun4;
                                                            //} else{
                                                               // echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="nilai_akhir4" 
                                                        value="<?php// if ($recruitment->nilai_akhir4 !== "") {
                                                                //echo $recruitment->nilai_akhir4;
                                                                //} else{
                                                                //echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota4" 
                                                        value="<?php// if ($recruitment->kota4 !== "") {
                                                                //echo $recruitment->kota4;
                                                               //}else{
                                                               // echo "-";
                                                            //} ?>" readonly>
                                                    </td>
                                                </tr> 
                                                -->                                          
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>

                                    <div class="judul-form">
                                        <h5>2. Pendidikan Non-Formal (Bersertifikat)</h5>
                                    </div>

                                    <div class="table-responsive ">
                                        <table class="table table-bordered table-striped">
                                            <thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
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
                                                        value="<?php echo $recruitment->nama_training1; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="lembaga1" 
                                                        value="<?php echo $recruitment->lembaga1; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota_training1" 
                                                        value="<?php echo $recruitment->kota_training1; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun_training1" 
                                                        value="<?php echo $recruitment->tahun_training1; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="skill_training1" 
                                                        value="<?php echo $recruitment->skill_training1; ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">2</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="nama_training2" 
                                                        value="<?php echo $recruitment->nama_training2; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="lembaga2" 
                                                        value="<?php echo $recruitment->lembaga2; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota_training2" 
                                                        value="<?php echo $recruitment->kota_training2; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun_training2" 
                                                        value="<?php echo $recruitment->tahun_training2; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="skill_training2" 
                                                        value="<?php echo $recruitment->skill_training2; ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">3</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="nama_training3" 
                                                        value="<?php echo $recruitment->nama_training3; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="lembaga3" 
                                                        value="<?php echo $recruitment->lembaga3; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota_training3" 
                                                        value="<?php echo $recruitment->kota_training3; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun_training3" 
                                                        value="<?php echo $recruitment->tahun_training3; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="skill_training3" 
                                                        value="<?php echo $recruitment->skill_training3; ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">4</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="nama_training4" 
                                                        value="<?php echo $recruitment->nama_training4; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="lembaga4" 
                                                        value="<?php echo $recruitment->lembaga4; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="kota_training4" 
                                                        value="<?php echo $recruitment->kota_training4; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="tahun_training4" 
                                                        value="<?php echo $recruitment->tahun_training4; ?>" readonly>
                                                    </td>
                                                    <td align="center">
                                                        <input class="form-control" type="text" name="skill_training4" 
                                                        value="<?php echo $recruitment->skill_training4; ?>" readonly>
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
                                            <thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
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
                                                            <input type="radio" id="lisan_kurang1" name="lisan1" class="custom-control-input"  <?php if($recruitment->lisan1 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="lisan_kurang1"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_cukup1" name="lisan1" class="custom-control-input" <?php if($recruitment->lisan1 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="lisan_cukup1"></label>
                                                        </div>  
                                                    </td>

                                                    <td style="border-right: #ccc solid 1px">
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_baik1" name="lisan1" class="custom-control-input" <?php if($recruitment->lisan1 == 'BAIK') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="lisan_baik1"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_kurang1" name="tulisan1" class="custom-control-input" <?php if($recruitment->tulisan1 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="tulis_kurang1"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_cukup1" name="tulisan1" class="custom-control-input" <?php if($recruitment->tulisan1 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="tulis_cukup1"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_baik1" name="tulisan1" class="custom-control-input" <?php if($recruitment->tulisan1 == 'BAIK') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="tulis_baik1"></label>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center" style="width:5%">2</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="bahasa2" 
                                                        value="<?php echo $recruitment->bahasa2; ?>" readonly>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_kurang2" name="lisan2" class="custom-control-input" <?php if($recruitment->lisan2 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="lisan_kurang2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_cukup2" name="lisan2" class="custom-control-input" <?php if($recruitment->lisan2 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="lisan_cukup2"></label>
                                                        </div>  
                                                    </td>

                                                    <td style="border-right: #ccc solid 1px">
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_baik2" name="lisan2" class="custom-control-input" <?php if($recruitment->lisan2 == 'BAIK') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="lisan_baik2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_kurang2" name="tulisan2" class="custom-control-input" <?php if($recruitment->tulisan2 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="tulis_kurang2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_cukup2" name="tulisan2" class="custom-control-input" <?php if($recruitment->tulisan2 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="tulis_cukup2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_baik2" name="tulisan2" class="custom-control-input" <?php if($recruitment->tulisan2 == 'BAIK') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="tulis_baik2"></label>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center" style="width:5%">3</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="bahasa3" 
                                                        value="<?php echo $recruitment->bahasa3; ?>" readonly>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_kurang3" name="lisan3" class="custom-control-input" <?php if($recruitment->lisan3 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="lisan_kurang3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_cukup3" name="lisan3" class="custom-control-input" <?php if($recruitment->lisan3 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="lisan_cukup3"></label>
                                                        </div>  
                                                    </td>

                                                    <td style="border-right: #ccc solid 1px">
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="lisan_baik3" name="lisan3" class="custom-control-input" <?php if($recruitment->lisan3 == 'BAIK') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="lisan_baik3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_kurang3" name="tulisan3" class="custom-control-input" <?php if($recruitment->tulisan3 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="tulis_kurang3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_cukup3" name="tulisan3" class="custom-control-input" <?php if($recruitment->tulisan3 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="tulis_cukup3"></label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="tulis_baik3" name="tulisan3" class="custom-control-input" <?php if($recruitment->tulisan3 == 'BAIK') echo 'checked'?>>
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
                                            <thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
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
                                                        <input type="text" name="keterampilan1" class="form-control" value="<?php echo $recruitment->keterampilan1; ?>" readonly></input>
                                                    </td>
                                                                
                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="kurang_keterampilan1" name="keterangan1" class="custom-control-input" <?php if($recruitment->keterangan1 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="kurang_keterampilan1"></label>
                                                        </div>                                                      
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="cukup_keterampilan1" name="keterangan1" class="custom-control-input" <?php if($recruitment->keterangan1 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="cukup_keterampilan1"></label>
                                                        </div>                                                      
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="baik_keterampilan1" name="keterangan1" class="custom-control-input" <?php if($recruitment->keterangan1 == 'BAIK') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="baik_keterampilan1"></label>
                                                        </div>                                                      
                                                    </td>

                                                    <td>
                                                        <div class="radio radio-success text-center">
                                                            <input class="form-control" name="deskripsi1" type="text" 
                                                            value="<?php echo $recruitment->deskripsi1; ?>" readonly>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">2</td>
                                                    <td align="center">
                                                        <input type="text" name="keterampilan2" class="form-control" 
                                                        value="<?php echo $recruitment->keterampilan2; ?>" readonly></input>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="kurang_keterampilan2" name="keterangan2" class="custom-control-input" <?php if($recruitment->keterangan2 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="kurang_keterampilan2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="cukup_keterampilan2" name="keterangan2" class="custom-control-input" <?php if($recruitment->keterangan2 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="cukup_keterampilan2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="baik_keterampilan2" name="keterangan2" class="custom-control-input" <?php if($recruitment->keterangan2 == 'BAIK') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="baik_keterampilan2"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="radio radio-success text-center">
                                                            <input class="form-control" name="deskripsi2" type="text" 
                                                            value="<?php echo $recruitment->deskripsi2; ?>" readonly>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">3</td>
                                                    <td align="center">
                                                        <input type="text" name="keterampilan3" class="form-control" value="<?php echo $recruitment->keterampilan3; ?>" readonly></input>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="kurang_keterampilan3" name="keterangan3" class="custom-control-input" <?php if($recruitment->keterangan3 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="kurang_keterampilan3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="cukup_keterampilan3" name="keterangan3" class="custom-control-input" <?php if($recruitment->keterangan3 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="cukup_keterampilan3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="baik_keterampilan3" name="keterangan3" class="custom-control-input" <?php if($recruitment->keterangan3 == 'BAIK') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="baik_keterampilan3"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="radio radio-success text-center">
                                                            <input class="form-control" name="deskripsi3" type="text" value="<?php echo $recruitment->deskripsi3; ?>" readonly>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">4</td>
                                                    <td align="center">
                                                        <input type="text" name="keterampilan4" class="form-control" value="<?php echo $recruitment->keterampilan4; ?>" readonly></input>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="kurang_keterampilan4" name="keterangan4" class="custom-control-input" <?php if($recruitment->keterangan4 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="kurang_keterampilan4"></label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="cukup_keterampilan4" name="keterangan4" class="custom-control-input" <?php if($recruitment->keterangan4 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="cukup_keterampilan4"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="baik_keterampilan4" name="keterangan4" class="custom-control-input" <?php if($recruitment->keterangan4 == 'BAIK') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="baik_keterampilan4"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="radio radio-success text-center">
                                                            <input class="form-control" name="deskripsi4" type="text" value="<?php echo $recruitment->deskripsi4; ?>" readonly>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">5</td>
                                                    <td align="center">
                                                        <input type="text" name="keterampilan5" class="form-control" value="<?php echo $recruitment->keterampilan5; ?>" readonly>
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="kurang_keterampilan5" name="keterangan5" class="custom-control-input" <?php if($recruitment->keterangan5 == 'KURANG') echo 'checked'?>>
                                                            <label class="custom-control-label red" for="kurang_keterampilan5"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="cukup_keterampilan5" name="keterangan5" class="custom-control-input" <?php if($recruitment->keterangan5 == 'CUKUP') echo 'checked'?>>
                                                            <label class="custom-control-label orange" for="cukup_keterampilan5"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="custom-control custom-radio text-center">
                                                            <input type="radio" id="baik_keterampilan5" name="keterangan5" class="custom-control-input" <?php if($recruitment->keterangan5 == 'BAIK') echo 'checked'?>>
                                                            <label class="custom-control-label green" for="baik_keterampilan5"></label>
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <div class="radio radio-success text-center">
                                                            <input class="form-control" name="deskripsi5" type="text" value="<?php echo $recruitment->deskripsi5; ?>" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>

                                    <div class="judul-form">
                                    <h5>5. Prestasi Akademik / Non Akademik</h5>
                                    </div>

                                    <div class="table-responsive m-b-30 p-r-20">
                                        <table id="mainTable" class="table table-bordered table-hover">
                                            <thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
                                                <tr>
                                                    <th class="text-center align-middle">No.</th>
                                                    <th class="text-center align-middle">Jenis Prestasi</th>
                                                    <th class="text-center align-middle">Peringkat</th>
                                                    <th class="text-center align-middle">Tingkat</th>
                                                    <th class="text-center align-middle">Tahun</th>
                                                    <th class="text-center align-middle">Keterangan</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td align="center">1</td>   
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenis_prestasi1" id="jenjang1" value="<?php echo $recruitment->jenis_prestasi1; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="peringkat1" class="form-control text-besar" value="<?php echo $recruitment->peringkat1; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="tingkat_prestasi1" class="form-control text-besar" value="<?php echo $recruitment->tingkat_prestasi1; ?>" readonly>
                                                    </td>
                                                            
                                                    <td align="center">
                                                        <input type="text" name="tahun_prestasi1" class="form-control text-besar" value="<?php echo $recruitment->tahun_prestasi1; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="keterangan_prestasi1" class="form-control text-besar" value="<?php echo $recruitment->keterangan_prestasi1; ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">2</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenis_prestasi2" id="jenjang1" value="<?php echo $recruitment->jenis_prestasi2; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="peringkat2" class="form-control text-besar" value="<?php echo $recruitment->peringkat2; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="tingkat_prestasi2" class="form-control text-besar" value="<?php echo $recruitment->tingkat_prestasi2; ?>" readonly>
                                                    </td>
                                                            
                                                    <td align="center">
                                                        <input type="text" name="tahun_prestasi2" class="form-control text-besar" value="<?php echo $recruitment->tahun_prestasi2; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="keterangan_prestasi2" class="form-control text-besar" value="<?php echo $recruitment->keterangan_prestasi2; ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">3</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenis_prestasi3" id="jenjang1" value="<?php echo $recruitment->jenis_prestasi3; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="peringkat3" class="form-control text-besar" value="<?php echo $recruitment->peringkat3; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="tingkat_prestasi3" class="form-control text-besar" value="<?php echo $recruitment->tingkat_prestasi3; ?>" readonly>
                                                    </td>
                                                            
                                                    <td align="center">
                                                        <input type="text" name="tahun_prestasi3" class="form-control text-besar" value="<?php echo $recruitment->tahun_prestasi3; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="keterangan_prestasi3" class="form-control text-besar" value="<?php echo $recruitment->keterangan_prestasi3; ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">4</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenis_prestasi4" id="jenjang1" value="<?php echo $recruitment->jenis_prestasi4; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="peringkat4" class="form-control text-besar" value="<?php echo $recruitment->peringkat4; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="tingkat_prestasi4" class="form-control text-besar" value="<?php echo $recruitment->tingkat_prestasi4; ?>" readonly>
                                                    </td>
                                                            
                                                    <td align="center">
                                                        <input type="text" name="tahun_prestasi4" class="form-control text-besar" value="<?php echo $recruitment->tahun_prestasi4; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="keterangan_prestasi4" class="form-control text-besar" value="<?php echo $recruitment->keterangan_prestasi4; ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">5</td>
                                                    <td align="center">
                                                        <input type="text" class="form-control" name="jenis_prestasi5" id="jenjang1" value="<?php echo $recruitment->jenis_prestasi5; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="peringkat5" class="form-control text-besar" value="<?php echo $recruitment->peringkat5; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="tingkat_prestasi5" class="form-control text-besar" value="<?php echo $recruitment->tingkat_prestasi5; ?>" readonly>
                                                    </td>
                                                            
                                                    <td align="center">
                                                        <input type="text" name="tahun_prestasi5" class="form-control text-besar" value="<?php echo $recruitment->tahun_prestasi5; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="keterangan_prestasi5" class="form-control text-besar" value="<?php echo $recruitment->keterangan_prestasi5; ?>" readonly>
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
                                <h5>III. RIWAYAT ORGANISASI & PEKERJAAN</h5></button>
                            <br>
                            <div class="card-body">
                                <div id="riwayat_pekerjaan" class="collapse.show">
                                    <div class="table-responsive m-b-30 p-r-20">
                                        <div class="judul-form">
                                            <h5>1. Pengalaman Organisasi</h5>
                                        </div>
                                        <table id="mainTable" class="table table-bordered table-hover">
                                            <thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
                                                <tr>
                                                    <th class="text-center align-middle">No.</th>
                                                    <th class="text-center align-middle">Nama Organisasi</th>
                                                    <th class="text-center align-middle">Jenis Organisasi</th>
                                                    <th class="text-center align-middle">Jabatan</th>
                                                    <th class="text-center align-middle">Periode</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td align="center">1</td>   
                                                    <td>
                                                        <input type="text" name="nama_organisasi1" class="form-control text-besar" value="<?php echo $recruitment->nama_organisasi1; ?>">
                                                    </td>

                                                    <td>
                                                        <input type="text" name="jenis_organisasi1" class="form-control text-besar" value="<?php echo $recruitment->jenis_organisasi1; ?>">
                                                    </td>
                                                            
                                                    <td>
                                                        <input type="text" name="jabatan_organisasi1" class="form-control text-besar" value="<?php echo $recruitment->jabatan_organisasi1; ?>">
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="periode_organisasi1" class="form-control text-besar" value="<?php echo $recruitment->periode_organisasi1; ?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">2</td>   
                                                    <td>
                                                        <input type="text" name="nama_organisasi2" class="form-control text-besar" value="<?php echo $recruitment->nama_organisasi2; ?>">
                                                    </td>

                                                    <td>
                                                        <input type="text" name="jenis_organisasi2" class="form-control text-besar" value="<?php echo $recruitment->jenis_organisasi2; ?>">
                                                    </td>
                                                            
                                                    <td>
                                                        <input type="text" name="jabatan_organisasi2" class="form-control text-besar" value="<?php echo $recruitment->jabatan_organisasi2; ?>">
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="periode_organisasi2" class="form-control text-besar" value="<?php echo $recruitment->periode_organisasi2; ?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">3</td>   
                                                    <td>
                                                        <input type="text" name="nama_organisasi3" class="form-control text-besar" value="<?php echo $recruitment->nama_organisasi3; ?>">
                                                    </td>

                                                    <td>
                                                        <input type="text" name="jenis_organisasi3" class="form-control text-besar" value="<?php echo $recruitment->jenis_organisasi3; ?>">
                                                    </td>
                                                            
                                                    <td>
                                                        <input type="text" name="jabatan_organisasi3" class="form-control text-besar" value="<?php echo $recruitment->jabatan_organisasi3; ?>">
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="periode_organisasi3" class="form-control text-besar" value="<?php echo $recruitment->periode_organisasi3; ?>">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>  
                                    <br>
                                    <div class="judul-form">
                                        <h5>2. Pengalaman Kerja Terakhir</h5>
                                        <br>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="nama_perusahaan">Nama Perusahaan</label>
                                        </div>
                                        <div class="form-group col-md-10 title-company">
                                            <input type="text" class="form-control" name="nama_perusahaan" 
                                            value="<?php echo $recruitment->nama_perusahaan; ?>" readonly>
                                        </div>
                                    </div>  
                                        
                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="bidang_usaha">Bidang Usaha</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="bidang_usaha" 
                                            value="<?php echo $recruitment->bidang_usaha; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="lokasi">Lokasi/Kota</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="kota_perusahaan" 
                                            value="<?php echo $recruitment->kota_perusahaan; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="jabatan_perusahaan">Jabatan</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="jabatan_perusahaan" 
                                            value="<?php echo $recruitment->jabatan_perusahaan; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="waktu">... s/d ...</label>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <div class="input-group date">
                                                <input id="awal_kerja" type="date" class="form-control" name="awal_kerja"
                                                value="<?php echo $recruitment->awal_kerja; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-5">
                                            <div class="input-group date">
                                                <input id="akhir_kerja" type="date" class="form-control" name="akhir_kerja"
                                                value="<?php echo $recruitment->akhir_kerja; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="gaji_terakhir">Gaji</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="number" class="form-control" name="gaji_terakhir" 
                                            value="<?php echo $recruitment->gaji_terakhir; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2 title-company">
                                            <label for="alasan_berhenti">Alasan Berhenti</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <textarea type="text" class="form-control" name="alasan_berhenti" 
                                            rows="4" readonly><?php echo $recruitment->alasan_berhenti; ?></textarea> 
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="tugas_tgg_jawab">Uraian Tugas dan Tanggung Jawab</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <textarea type="text" class="form-control text-besar" name="tugas_tgg_jawab" rows="4" readonly><?php echo $recruitment->tugas_tgg_jawab; ?></textarea> 
                                        </div>
                                    </div>
                                    <br>
                                    <div class="judul-form">
                                        <h5>3. Apakah Anda pernah bekerja di PT Padma Soode Indonesia / PT Covac Indonesia / PT Senjaya Soode Precision / PT Ciptajaya Kreasindo Utama?<span class="bintang"> * </span><span style="font-size:14px;color:red">(Jawablah dengan jujur; apabila tidak, Anda akan langsung <strong>diskualifikasi/gugur).</strong></h5>
                                        <br>
                                    </div> 
                                    <div class="form-row buta-warna">
                                        <div class="form-group col-md-12" style="margin-top:-20px">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="lisan_kurang1" name="lisan1" class="custom-control-input"  <?php if($recruitment->buta_warna == 'Pernah') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad7">Pernah</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="lisan_baik1" name="lisan1" class="custom-control-input" <?php if($recruitment->buta_warna == 'Tidak Pernah') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad8">Tidak Pernah</label>
                                            </div>                      
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
                                            <textarea readonly type="text" class="form-control" name="alasan_bekerja" rows="4"><?php echo $recruitment->alasan_bekerja ?></textarea> 
                                        </div>
                                    </div>  

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="fasilitas_bekerja">2. Sebutkan fasilitas yang anda harapkan</label>
                                            <textarea readonly type="text" class="form-control" name="fasilitas_bekerja" rows="4"><?php echo $recruitment->fasilitas_bekerja ?></textarea> 
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
                                                <input type="radio" class="rad-kenalan custom-control-input" id="rad3" name="kenalan_perusahaan" value="Ada" <?php if($recruitment->kenalan_perusahaan == 'ADA') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad3">Ada</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="rad-kenalan custom-control-input" id="rad4" name="kenalan_perusahaan" value="Tidak Ada" <?php if($recruitment->kenalan_perusahaan == 'TIDAK ADA') echo 'checked'?>>
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
                                                        <thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
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
                                                                    <input class="form-control" type="text" name="nama_kenalan1" value="<?php echo $recruitment->nama_kenalan1; ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="jabatan_kenalan1" 
                                                                    value="<?php echo $recruitment->jabatan_kenalan1; ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="bagian_kenalan1" 
                                                                    value="<?php echo $recruitment->bagian_kenalan1; ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                   <input class="form-control" type="text" name="hubungan_kenalan1"
                                                                   value="<?php echo $recruitment->hubungan_kenalan1; ?>" readonly>
                                                                </td>                                                       
                                                            </tr>

                                                            <tr>
                                                                <td align="center">2</td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="nama_kenalan2" value="<?php echo $recruitment->nama_kenalan2; ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="jabatan_kenalan2" 
                                                                    value="<?php echo $recruitment->jabatan_kenalan2; ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="bagian_kenalan2" 
                                                                    value="<?php echo $recruitment->bagian_kenalan2; ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="hubungan_kenalan2" 
                                                                    value="<?php echo $recruitment->hubungan_kenalan2; ?>" readonly>
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
                                            <textarea readonly type="text" class="form-control" name="kelebihan" rows="4"><?php echo $recruitment->kelebihan ?></textarea> 
                                        </div>
                                    </div>  

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="kekurangan">2. Sebutkan hal-hal yang menjadi kelemahan dalam diri anda</label>
                                            <textarea readonly type="text" class="form-control" name="kekurangan" rows="4"><?php echo $recruitment->kekurangan ?></textarea> 
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
                                                <input type="radio" class="rad-sakit custom-control-input" id="rad5" name="pernah_sakit" value="Pernah" <?php if($recruitment->pernah_sakit == 'PERNAH') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad5">Pernah</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="rad-sakit custom-control-input" id="rad6" name="pernah_sakit" value="Tidak Pernah" <?php if($recruitment->pernah_sakit == 'TIDAK PERNAH') echo 'checked'?>>
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
                                                        <thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
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
                                                                    <input class="form-control" type="text" name="nama_penyakit1" value="<?php echo $recruitment->nama_penyakit1; ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="lama_sakit1" value="<?php echo $recruitment->lama_sakit1; ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="akibat_ditimbulkan1" 
                                                                    value="<?php echo $recruitment->akibat_ditimbulkan1; ?>" readonly>
                                                                </td>                                                                           
                                                            </tr>

                                                            <tr>
                                                                <td align="center">2</td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="nama_penyakit2" value="<?php echo $recruitment->nama_penyakit2; ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="lama_sakit2" value="<?php echo $recruitment->lama_sakit2; ?>" readonly>
                                                                </td>
                                                                <td align="center">
                                                                    <input class="form-control" type="text" name="akibat_ditimbulkan2" 
                                                                    value="<?php echo $recruitment->akibat_ditimbulkan2; ?>" readonly>
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
                                                <input type="radio" class="rad custom-control-input" id="rad7" name="buta_warna" value="Ya" <?php if($recruitment->buta_warna == 'YA') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad7">Ya</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="rad custom-control-input" id="rad8" name="buta_warna" value="Tidak" <?php if($recruitment->buta_warna == 'TIDAK') echo 'checked'?>>
                                                <label class="custom-control-label" for="rad8">Tidak</label>
                                            </div>                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="card">
                            <button type="button" class="btn btn-info" data-toggle="collapse.show" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#lain_lain">
                                <h5>V. LAIN-LAIN</h5></button>
                            <br>
                            <div id="kelengkapan" class="card-body">
                                    <div class="judul-form">
                                        <h5>1. Orang Yang Dihubungi Dalam Keadaan Darurat</h5>
                                    </div>

                                    <div class="table-responsive m-b-30 p-r-20">
                                        <table id="mainTable" class="table table-bordered table-hover">
                                            <thead class="table-custom text-white" style="background-color: #355469; color: #FFFFFF">
                                                <tr>
                                                    <th class="text-center align-middle text-white">No.</th>
                                                    <th class="text-center align-middle text-white">Nama</th>
                                                    <th class="text-center align-middle text-white">Alamat</th>
                                                    <th class="text-center align-middle text-white">No.Telp</th>
                                                    <th class="text-center align-middle text-white">Pekerjaan</th>
                                                    <th class="text-center align-middle text-white">Hubungan</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td align="center">1</td>    
                                                    <td>
                                                        <input type="text" name="nama_dihubungi1" class="form-control text-besar" value="<?php echo $recruitment->nama_dihubungi1; ?>" readonly>
                                                    </td>

                                                    <td>
                                                        <input type="text" name="alamat_dihubungi1" class="form-control text-besar" value="<?php echo $recruitment->alamat_dihubungi1; ?>" readonly>
                                                    </td>
                                                            
                                                    <td>
                                                        <input type="number" name="no_telp_dihubungi1" class="form-control text-besar" value="<?php echo $recruitment->no_telp_dihubungi1; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="pekerjaan_dihubungi1" class="form-control text-besar" value="<?php echo $recruitment->pekerjaan_dihubungi1; ?>" readonly>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="hubungan_dihubungi1" class="form-control text-besar" value="<?php echo $recruitment->hubungan_dihubungi1; ?>" readonly>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">2</td>   
                                                    <td>
                                                        <input type="text" name="nama_dihubungi2" class="form-control text-besar" value="<?php echo $recruitment->nama_dihubungi2; ?>" readonly>
                                                    </td>

                                                    <td>
                                                        <input type="text" name="alamat_dihubungi2" class="form-control text-besar" value="<?php echo $recruitment->alamat_dihubungi2; ?>" readonly>
                                                    </td>
                                                            
                                                    <td>
                                                        <input type="number" name="no_telp_dihubungi2" class="form-control text-besar" value="<?php echo $recruitment->no_telp_dihubungi2; ?>" readonly>
                                                    </td>

                                                    <td align="center">
                                                        <input type="text" name="pekerjaan_dihubungi2" class="form-control text-besar" value="<?php echo $recruitment->pekerjaan_dihubungi2; ?>" readonly>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="hubungan_dihubungi2" class="form-control text-besar" value="<?php echo $recruitment->hubungan_dihubungi2; ?>" readonly>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                              
                                        
                                </div>  
                            </div>
                        
                        <br>
                        <br>

                        <div class="card">
                            <button type="button" class="btn btn-info" data-toggle="collapse.show" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#kelengkapan">
                                <h5>VI. KELENGKAPAN BERKAS</h5></button>
                            <br>
                            <div id="kelengkapan" class="card-body">
                                <table class="table table-bordered" style="color: #115c9b">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>                            
                                            <td>Kelengkapan Berkas :</td>
                                            <td colspan="2">
                                                <?php if ($recruitment->kelengkapan_berkas !== null) {
                                                            echo $recruitment->kelengkapan_berkas;
                                                        } else{
                                                            echo "-";
                                                        } ?>                           
                                            </td>
                                        </tr>
                                        
                                        <tr>                            
                                            <td>Kelengkapan Berkas Wajib :<br>
                                                (Ijazah, Transkrip Nilai, Sertifikat Vaksin)</td>
                                            <td colspan="2" style="margin: auto">
                                                <div class="gallery">
                                                    <div class="row justify-content-center">
                                                        <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->ijazah) ?>" rel="kelengkapan"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->ijazah) ?>" width="200" align="center" class="img-thumbnail mr-3" alt="Ijazah"></a>
                                                        <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->transkrip_nilai) ?>" rel="kelengkapan"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->transkrip_nilai) ?>" width="200" align="center" class="img-thumbnail" alt="Transkrip Nilai"></a>
                                                        <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->sertifikat_vaksin) ?>" rel="kelengkapan"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->sertifikat_vaksin) ?>" width="200" align="center" class="img-thumbnail ml-3" alt="Sertifikat Vaksin Terakhir"></a>
                                                        <!-- <iframe src="<?php echo base_url('uploads/recruitment/'.$recruitment->surat_pernyataan) ?>" class="mt-2"
                                                            style="width:600px; height:500px;" frameborder="0">
                                                        </iframe> -->
                                                        <!-- <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->surat_pernyataan) ?>" rel="kelengkapan"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->surat_pernyataan) ?>" width="200" align="center" class="img-thumbnail ml-3" alt="Surat Pernyataan"></a> -->
                                                    </div>
                                                </div>                    
                                            </td>
                                        </tr>

                                        <tr>                            
                                            <td>Kelengkapan Berkas Wajib :<br>
                                                (KTP, NPWP, Kartu Keluarga)</td>
                                            <td colspan="2" style="margin: auto">
                                                <div class="gallery">
                                                    <div class="row justify-content-center">
                                                        <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->ktp) ?>" rel="kelengkapan"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->ktp) ?>" width="200" align="center" class="img-thumbnail mr-3" alt="KTP"></a>
                                                        <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->npwp) ?>" rel="kelengkapan"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->npwp) ?>" width="200" align="center" class="img-thumbnail" alt="NPWP"></a>
                                                        <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->kartu_keluarga) ?>" rel="kelengkapan"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->kartu_keluarga) ?>" width="200" align="center" class="img-thumbnail ml-3" alt="Kartu Keluarga"></a>
                                                    </div>
                                                </div>                    
                                            </td>
                                        </tr>

                                        <tr>                            
                                            <td>Kelengkapan Berkas Wajib :<br>
                                                (Surat Pernyataan)</td>
                                            <td colspan="2" style="margin: auto">
                                                <div class="gallery">
                                                    <div class="row justify-content-center">
                                                        <?php
                                                        $filename = base_url('uploads/recruitment/'.$recruitment->surat_pernyataan);
                                                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                                                        if ($ext == 'pdf') { ?>
                                                            <iframe src="<?php echo base_url('uploads/recruitment/'.$recruitment->surat_pernyataan) ?>" class="mt-2"
                                                            style="width:600px; height:500px;" frameborder="0">
                                                            </iframe>
                                                        <?php }
                                                        else{ ?>
                                                            <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->surat_pernyataan) ?>" rel="kelengkapan"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->surat_pernyataan) ?>" width="200" align="center" class="img-thumbnail ml-3" alt="Surat Pernyataan"></a>
                                                        <?php }
                                                        ?>
                                                        <!-- <iframe src="<?php echo base_url('uploads/recruitment/'.$recruitment->surat_pernyataan) ?>" class="mt-2"
                                                            style="width:600px; height:500px;" frameborder="0">
                                                        </iframe> -->
                                                    </div>
                                                </div>                    
                                            </td>
                                        </tr>

                                        <tr>                            
                                            <td>Kelengkapan Berkas Optional :<br>
                                                (Surat Keterangan Kerja 1, 2, 3)
                                            </td>
                                            <td colspan="2" style="margin: auto">
                                                <div class="gallery">
                                                    <div class="row justify-content-center align-middle">
                                                        <?php
                                                        if ($recruitment->spk1 != '') 
                                                        { ?>
                                                            <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->spk1) ?>" rel="kelengkapan_opsi"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->spk1) ?>" width="200" align="center" class="img-thumbnail mr-3" alt="Surat Keterangan Kerja 1"></a>
                                                        <?php 
                                                        } 
                                                        else { ?>
                                                            <div class="text-center align-middle mr-3">
                                                                <h5 style='color:#d9534f;font-size:16px'><strong>Tidak ada berkas</strong></h5>
                                                            </div>
                                                        <?php        
                                                        }
                                                        ?>

                                                        <?php
                                                        if ($recruitment->spk2 != '') 
                                                        { ?>
                                                            <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->spk2) ?>" rel="kelengkapan_opsi"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->spk2) ?>" width="200" align="center" class="img-thumbnail" alt="Surat Keterangan Kerja 2"></a>
                                                        <?php 
                                                        } 
                                                        else { 
                                                            echo "<h5 style='color:#d9534f;font-size:16px' class='text-center align-middle'><strong>Tidak ada berkas</strong></h5>";
                                                        }
                                                        ?>
                                                            
                                                        <?php
                                                        if ($recruitment->spk3 != '') 
                                                        { ?>
                                                            <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->spk3) ?>" rel="kelengkapan_opsi"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->spk3) ?>" width="200" align="center" class="img-thumbnail ml-3" alt="Surat Keterangan Kerja 3"></a>
                                                        <?php 
                                                        } 
                                                        else { ?>
                                                            <div class="text-center align-middle ml-3">
                                                                <h5 style='color:#d9534f;font-size:16px'><strong>Tidak ada berkas</strong></h5>
                                                            </div>
                                                        <?php        
                                                        }
                                                        ?>
                                                    </div>
                                                </div>   
                                            </td>
                                        </tr>

                                        <tr>                            
                                            <td>Kelengkapan Berkas Optional :<br>
                                                (Sertifikat Keahlian 1, 2, 3)
                                            </td>
                                            <td colspan="2" style="margin: auto">
                                                <div class="gallery">
                                                    <div class="row justify-content-center">
                                                        <?php
                                                        if ($recruitment->sertif_keahlian1 != '') 
                                                        { ?>
                                                            <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->sertif_keahlian1) ?>" rel="kelengkapan_opsi"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->sertif_keahlian1) ?>" width="200" align="center" class="img-thumbnail mr-3" alt="Sertifikat Keahlian 1"></a>
                                                        <?php 
                                                        }
                                                        else { 
                                                            echo "<h5 style='color:#d9534f;font-size:16px' class='text-center align-middle mr-3'><strong>Tidak ada berkas</strong></h5>";
                                                        }
                                                        ?>

                                                        <?php
                                                        if ($recruitment->sertif_keahlian2 != '') 
                                                        { ?>
                                                            <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->sertif_keahlian2) ?>" rel="kelengkapan_opsi"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->sertif_keahlian2) ?>" width="200" align="center" class="img-thumbnail" alt="Sertifikat Keahlian 2"></a>
                                                        <?php 
                                                        } 
                                                        else { 
                                                            echo "<h5 style='color:#d9534f;font-size:16px' class='text-center align-middle'><strong>Tidak ada berkas</strong></h5>";
                                                        }
                                                        ?>
                                                            
                                                        <?php
                                                        if ($recruitment->sertif_keahlian3 != '') 
                                                        { ?>
                                                            <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->sertif_keahlian3) ?>" rel="kelengkapan_opsi"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->sertif_keahlian3) ?>" width="200" align="center" class="img-thumbnail ml-3" alt="Sertifikat Keahlian 3"></a>
                                                        <?php 
                                                        } 
                                                        else { ?>
                                                            <div class="text-center align-middle ml-3">
                                                                <h5 style='color:#d9534f;font-size:16px'><strong>Tidak ada berkas</strong></h5>
                                                            </div>
                                                        <?php        
                                                        }
                                                        ?>
                                                    </div>
                                                </div>   
                                            </td>
                                        </tr>

                                        <tr>                            
                                            <td>Kelengkapan Berkas Optional :<br>
                                                (Kartu Pencari Kerja, SKCK, Surat Keterangan Sehat)
                                            </td>
                                            <td colspan="2" style="margin: auto">
                                                <div class="gallery">
                                                    <div class="row justify-content-center">
                                                        <?php
                                                        if ($recruitment->kartu_disnaker != '') 
                                                        { ?>
                                                            <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->kartu_disnaker) ?>" rel="kelengkapan_opsi"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->kartu_disnaker) ?>" width="200" align="center" class="img-thumbnail mr-3" alt="Kartu Pencari Kerja"></a>
                                                        <?php 
                                                        }
                                                        else { 
                                                            echo "<h5 style='color:#d9534f;font-size:16px' class='text-center align-middle mr-3'><strong>Tidak ada berkas</strong></h5>";
                                                        }
                                                        ?>

                                                        <?php
                                                        if ($recruitment->skck != '') 
                                                        { ?>
                                                            <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->skck) ?>" rel="kelengkapan_opsi"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->skck) ?>" width="200" align="center" class="img-thumbnail" alt="SKCK"></a>
                                                        <?php 
                                                        } 
                                                        else { 
                                                            echo "<h5 style='color:#d9534f;font-size:16px' class='text-center align-middle'><strong>Tidak ada berkas</strong></h5>";
                                                        }
                                                        ?>
                                                            
                                                        <?php
                                                        if ($recruitment->surat_sehat != '') 
                                                        { ?>
                                                            <a href="<?php echo base_url('uploads/recruitment/'.$recruitment->surat_sehat) ?>" rel="kelengkapan_opsi"><img src="<?php echo base_url('uploads/recruitment/'.$recruitment->surat_sehat) ?>" width="200" align="center" class="img-thumbnail ml-3" alt="Surat Dokter"></a>
                                                        <?php 
                                                        } 
                                                        else { ?>
                                                            <div class="text-center align-middle ml-3">
                                                                <h5 style='color:#d9534f;font-size:16px'><strong>Tidak ada berkas</strong></h5>
                                                            </div>
                                                        <?php        
                                                        }
                                                        ?>
                                                    </div>
                                                </div>   
                                            </td>
                                        </tr>
                                        <tr>                            
                                            <td>Tanggal Melamar :</td>
                                            <td colspan="2">
                                                <?php echo $recruitment->date ?>                         
                                            </td>
                                        </tr>                                                                 
                                    </tbody>
                                </table>                                
                            </div>
                        </div>   
                        <br>
                        <br>

                        <div class="card">
                            <button type="button" class="btn btn-info" data-toggle="collapse.show" data-tooltip="true" data-placement="top">
                                <h5>VII. KONFIRMASI DATA</h5></button>
                            <br>
                            <div class="card-body">
                                <table class="table table-bordered" style="color: #115c9b">
                                    <tbody>

                                        <form action="<?php echo site_url('pintumasuk/list_of_applicants/save/'.$id)?>" method="post">
                                            <tr>                            
                                                <td>Konfirmasi :</td>
                                                <td>
                                                    <?php
                                                    if ($recruitment->status == 'None') { ?>
                                                        <select class="form-control" name="status" required>
                                                        <option value="">Pilih Salah Satu</option>
                                                        <option value='Approve'>Approve</option>
                                                        <option value='Not Approve'>Not Approve</option>
                                                    </select>
                                                    <?php  } else { ?>
                                                        <select class="form-control" name="status" required>
                                                            <option value="">Pilih Salah Satu</option>
                                                            <option <?php if( $recruitment->status =='Approve'){echo "selected"; } ?> value='Approve'>Approve</option>
                                                            <option <?php if( $recruitment->status =='Not Approve'){echo "selected"; } ?> value='Not Approve'>Not Approve</option>
                                                        </select>
                                                    <?php  }  
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>                            
                                                <td>Konfirmasi Oleh :</td>
                                                <td>
                                                    <input class="form-control" type="text" readonly name="confirm_by" value="<?php echo $this->session->userdata('nama'); ?>">
                                                </td>
                                            </tr>

                                            <tr>                            
                                                <td>Tanggal Konfirmasi :</td>
                                                <td>
                                                    <input class="form-control" type="text" readonly name="confirm_date" value="<?php echo date("Y-m-d") ?>">
                                                </td>
                                            </tr>

                                            <tr>                            
                                                <td>Catatan :</td>
                                                <td>
                                                    <textarea class="form-control" type="text" name="note"><?php echo $recruitment->note ?></textarea>
                                                </td>
                                            </tr>

                                            <tr>                            
                                                <td>Status Print :</td>
                                                <td>
                                                    <select id="status_print" required class="form-control" name="status_print">
                                                        <option<?php if ($recruitment->status_print == "Belum Print"): ?> selected="selected"<?php endif; ?>>Belum Print</option>
                                                        <option<?php if ($recruitment->status_print == "Sudah Print"): ?> selected="selected"<?php endif; ?>>Sudah Print</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="col-sm12 d-flex justify-content-center mt-3 mb-3">  
                                                        <?php 
                                                        $none_approve = base_url('pintumasuk/list_of_applicants');
                                                        $approve = base_url('pintumasuk/list_of_applicants_approved');
                                                        $not_approved = base_url('pintumasuk/list_of_applicants_not_approved');
                                                        if ($recruitment->status == '' || NULL) {
                                                            echo "<a href='$none_approve' class='btn btn-secondary'>Back</a>";
                                                        } else if ($recruitment->status == 'Approve'){
                                                            echo "<a href='$approve' class='btn btn-secondary'>Back</a>";
                                                        } else{
                                                            echo "<a href='$not_approved' class='btn btn-secondary'>Back</a>";
                                                        }
                                                        ?>       
                                                        <!-- <a href="<?php //echo base_url('admin/list_of_applicants')?>" class="btn btn-secondary" >Back</a> -->
                                                        <input type="submit" class="btn btn-primary ml-2 mr-5" id="submit" name="simpan" value="Submit">                                                     
                                                    </div>
                                                </td>
                                            </tr>                                            
                                        </form>
                                    </tbody>
                                </table>
                            </div>       
                        </div>  
                    </div>
                    <br>
        </div>
    </main>

    <script type="text/javascript">
        $(':radio:not(:checked)').attr('disabled', true);

          

        $(document).ready(function() {
              // add all to same gallery
              $(".gallery a").attr("data-fancybox","mygallery");
              // assign captions and title from alt-attributes of images:
              $(".gallery a").each(function(){
                $(this).attr("data-caption", $(this).find("img").attr("alt"));
                $(this).attr("title", $(this).find("img").attr("alt"));
              });
              // start fancybox:
                $(".gallery a").fancybox();
            });
    </script>
</body>
                