<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<br>
<section id="rec_form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm12">
				<div class="section-title">
					<h2>RECRUITMENT <?php echo $code; ?> - <?php echo $jabatan; ?></h2>
				</div>
			</div>
		</div>
	</div>

	<input type="hidden" name="" id="jabatan" value="<?php echo $jabatan; ?>">
	<form action="<?php echo site_url('recruitment_form/save')?>" method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-4 colom-foto">				
	                <label for="">Foto <span class="bintang">*</span></label>
	                <div class="card card-img">
	                	<img id="foto" src="#" alt="Upload Foto" />   
	               	</div>
	               	<div class="custom-file">
				    	<input type="file" class="custom-file-input" name="userfile[]" id="foto_formal" required onchange="readURL(this);">
				    	<label class="custom-file-label" for="customFile">Max. 500kb, Format JPG/PNG</label>
				  	</div>                            
				</div>
			</div>
		</div>
			
		<div class="container">
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>

			<?php if ($this->session->flashdata('error')): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $this->session->flashdata('error'); ?>
				</div>
			<?php endif; ?>

			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse.show" data-target="#identitas">
					<h5>I. IDENTITAS<span><img src="<?php echo base_url('assets/img/arrow.png') ?>" width="40px"></span></h5>
				</button>
			  	<br>
			  	<div class="card-body">
			  		<div id="identitas" class="collapse.show">
						<div class="form-row">
							<input type="hidden" name="date" value="<?php echo date("y-m-d"); ?>">
							<div class="form-group col-md-6">
							   	<label for="no_ktp">Nomor KTP/NIK <span class="bintang">*</span></label>
							    <input type="text" class="form-control text-besar" name="no_ktp" id="ktp" placeholder="Isi disini ..." required>
							    <div id="hasil">
							    	
							    </div>
							</div>

					    	<div class="form-group col-md-6">
						      	<label for="name">Nama Lengkap <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="name" placeholder="Isi disini ..." required="" onkeyup="cekKTP(this.value)">
					    	</div>
					    </div>

					    <div class="form-row">
							<div class="form-group col-md-4">						    	
								<label for="tempat_lahir">Tempat Lahir <span class="bintang">*</span></label>
							    <input type="text" class="form-control text-besar" id="tempat_lahir" name="tempat_lahir" placeholder="Isi disini ..." required="">
							</div>

							<div class="form-group col-md-4">
						        <label>Tanggal Lahir <span class="bintang">*</span></label>
						        <div class="form-row">
						           	<div class="input-group col-md-12">
						           		<!-- <input type="date" name="tanggal_lahir" placeholder="Isi disini ..." class="form-control" required> -->
							           	<input type="date" name="tanggal_lahir" id="birthday" oninput="getAge();" placeholder="Isi disini ..."  class="form-control text-besar" required/>								
								    </div>
						        </div>						            
						    </div>

						    <div class="form-group col-md-4">
						    	<label for="result">Umur</label>
						      	<div class="input-group">
						        	<input type="text" class="form-control" name="umur" id="age" readonly="" >
						        	<span class="input-group-text">Tahun</span>
<!-- 						        	<div class="input-group-prepend">
						          		<span class="input-group-text">@gmail.com</span>
						        	</div> -->
						      	</div>
							</div>
						</div>  

					    <div class="form-row">
					    	<div class="form-group col-md-4">
						      	<label class="control-label text-right m-b-10">Jenis Kelamin <span class="bintang">*</span></label>
						        <select class="form-control" name="jenis_kelamin" required>
						            <option value="">Pilih salah satu</option>
						            <option value="LAKI - LAKI">LAKI - LAKI</option>
						            <option value="PEREMPUAN">PEREMPUAN</option>
						        </select>
					    	</div>
						
					    	<div class="form-group col-md-4">
						      	<label for="gol_darah" class="control-label text-right m-b-10">Golongan Darah <span class="bintang">*</span></label>
						        <select class="form-control" name="gol_darah" required="">
						            <option value="">Pilih salah satu</option>
						            <option value="A">A</option>
						            <option value="B">B</option>
						            <option value="O">O</option>
						            <option value="AB">AB</option>
						        </select>
					    	</div>

					    	<div class="form-group col-md-4">
						       	<label for="no_npwp">Nomor NPWP</label>
							    <input type="text" class="form-control text-besar" name="no_npwp" placeholder="Isi disini ...">
							</div>
					    </div>
						<br>

						<div class="judul-form">
							<h5>Alamat Sesuai KTP</h5> 
						</div>

						<div class="form-row">
					    	<div class="form-group col-md-4">
						      	<label for="alamat_ktp">Alamat <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="alamat_ktp" placeholder="Isi disini ..." required>
					    	</div>

						    <div class="form-group col-md-4">
							    <label for="rt_rw_ktp">RT/RW <span class="bintang">*</span></label>
							    <input type="text" class="form-control text-besar" name="rt_rw_ktp" placeholder="Isi disini ..." required>
						   	</div>

						    <div class="form-group col-md-4">
							    <label for="kelurahan_ktp">Kelurahan/Desa <span class="bintang">*</span></label>
							    <input type="text" class="form-control text-besar" name="kelurahan_ktp" placeholder="Isi disini ..." required>
						    </div>
				  		</div>

				  		<div class="form-row">
					    	<div class="form-group col-md-4">
						      	<label for="kecamatan_ktp">Kecamatan <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="kecamatan_ktp" placeholder="Isi disini ..." required>
					    	</div>

					    	<div class="form-group col-md-4">
						      	<label for="kota_ktp">Kota <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="kota_ktp" placeholder="Isi disini ..." required>
					    	</div>

					    	<div class="form-group col-md-4">
						      	<label for="provinsi_ktp">Provinsi <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="provinsi_ktp" placeholder="Isi disini ..." required>
					    	</div>							  							    
				  		</div>				  	
				  		<br>

				  		<div class="judul-form">
				  			<h5>Alamat Tinggal</h5>
				  		</div>
				  		<div class="form-row">
					    	<div class="form-group col-md-4">
						      	<label for="alamat_tinggal">Alamat <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="alamat_tinggal" placeholder="Isi disini ..." required>
					    	</div>

					    	<div class="form-group col-md-4">
						      	<label for="rt_rw_tinggal">RT/RW <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="rt_rw_tinggal" placeholder="Isi disini ..." required>
					    	</div>

					    	<div class="form-group col-md-4">
						      	<label for="kelurahan_tinggal">Kelurahan/Desa <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="kelurahan_tinggal" placeholder="Isi disini ..." required>
					    	</div>
				  		</div>

				  		<div class="form-row">
					    	<div class="form-group col-md-4">
						      	<label for="kecamatan_tinggal">Kecamatan <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="kecamatan_tinggal" placeholder="Isi disini ..." required>
					    	</div>

					    	<div class="form-group col-md-4">
						      	<label for="kota_tinggal">Kota <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="kota_tinggal" placeholder="Isi disini ..." required>
					    	</div>

					    	<div class="form-group col-md-4">
						      	<label for="provinsi_tinggal">Provinsi <span class="bintang">*</span></label>
						      	<input type="text" class="form-control text-besar" name="provinsi_tinggal" placeholder="Isi disini ..." required>
					    	</div>							  							    
				  		</div>

				  		<div class="form-row">
					    	<div class="form-group col-md-4">
						      	<label for="no_hp">No. Telp / No. WhatsApp <span class="bintang">*</span></label>
						      	<input type="text" class="form-control" name="no_hp" placeholder="Isi disini ..." required>
					    	</div>

					    	<div class="col-md-4 mb-3">
						      	<label for="email">Email<span class="bintang">*</span></label>
						      	<div class="input-group">
						        	<input type="text" class="form-control" name="email" placeholder="Isi disini ..." required>
						        	<span class="input-group-text">@gmail.com</span>
<!-- 						        	<div class="input-group-prepend">
						          		<span class="input-group-text">@gmail.com</span>
						        	</div> -->
						      	</div>
						    </div>

					    	<!-- <div class="form-group col-md-4">
						      	<label for="email">E-mail <span class="bintang">*</span></label>
						      	<input type="email" class="form-control" name="email" placeholder="Isi disini ..." required>
					    	</div>	 -->

					    	<div class="form-group col-md-4">
						      	<label for="agama">Agama <span class="bintang">*</span></label>
						      	<select class="form-control" name="agama" required>
						            <option value="">Pilih salah satu</option>
						            <option value="ISLAM">ISLAM</option>
						            <option value="KRISTEN PROTESTAN">KRISTEN PROTESTAN</option>
						            <option value="KRISTEN KATOLIK">KRISTEN KATOLIK</option>
						            <option value="HINDU">HINDU</option>
						            <option value="BUDDHA">BUDDHA</option>
						            <option value="KONGHUCU">KONGHUCU</option>
						        </select>
					    	</div>						  							    
				  		</div>

				  		<div class="form-row">	    		
					    	<div class="form-group col-md-12">
						      	<label for="status_tempat_tinggal">Status Kepemilikan Tempat Tinggal <span class="bintang">*</span></label>
						      	<select class="form-control" name="status_tempat_tinggal" required>
						            <option value="">Pilih salah satu</option>
						            <option value="MILIK ORANG TUA">MILIK ORANG TUA</option>
						            <option value="KOST">KOST</option>
						            <option value="MILIK SENDIRI / PRIBADI">MILIK SENDIRI / PRIBADI</option>
						        </select>
					    	</div>						  							    
				  		</div>

				  		<div class="form-row">
					    	<div class="form-group col-md-6">
						      	<label for="tinggi_badan">Tinggi Badan <span class="bintang">*</span></label>
								<div class="input-group">								        
								    <input type="text" class="form-control" name="tinggi_badan" placeholder="Isi disini ..." required>
								    <div class="input-group-prepend">
								      	<div class="input-group-text">CM</div>
								    </div>
								</div>
					    	</div>

					    	<div class="form-group col-md-6">
						      	<label for="berat_badan">Berat Badan <span class="bintang">*</span></label>
								<div class="input-group">								        
								    <input type="text" class="form-control" name="berat_badan" placeholder="Isi disini ..." required>
								    <div class="input-group-prepend">
								        <div class="input-group-text" name ="ukuran" value="KG">KG</div>
								    </div>
								</div>
					    	</div>						  							    
				  		</div>

				  		<div class="form-row">
							<div class="form-group col-md-2">
								<label for="status_pernikahan">Status Pernikahan <span class="bintang">*</span></label>			 
							</div>

							<div class="form-group col-md-6">
								<div class="custom-control custom-radio custom-control-inline">
								    <input type="radio" class="rad-nikah custom-control-input" id="rad1" name="status_pernikahan" value="MENIKAH">
								    <label class="custom-control-label" for="rad1">Menikah</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
								    <input type="radio" class="rad-nikah custom-control-input" id="rad2" name="status_pernikahan" value="BELUM MENIKAH">
								    <label class="custom-control-label" for="rad2">Belum Menikah</label>
								</div>					
							</div>
						</div>  

						<div class="form-row">
							<div class="form-group col-md-12">					
			                   	<div id="form1" style="display:none">
			                   		<label for="golongan" class="control-label text-right m-b-10">Golongan <span class="bintang">*</span></label>
						          	<select class="form-control" name="golongan">
								        <option value="">Pilih salah satu</option>
								        <option value="K0 (TANPA TANGGUNGAN)">K0 (TANPA TANGGUNGAN)</option>
								        <option value="K1 (1 TANGGUNGAN)">K1 (1 TANGGUNGAN)</option>
								        <option value="K2 (2 TANGGUNGAN)">K2 (2 TANGGUNGAN)</option>
								        <option value="K3 (3 TANGGUNGAN)">K3 (3 TANGGUNGAN)</option>
								    </select>
								</div>
							</div>
						</div>  				

				  		<div class="judul-form">
				  			<h5>Posisi Diinginkan</h5>
				  		</div>

				  		<div class="form-row">
				  			<div class="form-group col-md-6">
				  				<label for="Posisi">Posisi</label>
						      	<input type="text" class="form-control" name="posisi" id="posisi" value="<?php echo $code; ?>" readonly>
							</div>

					    	<div class="form-group col-md-6" id="gaji">
						      	<label for="gaji">Gaji Diinginkan <span class="bintang">*</span></label>
						      	<input type="number" class="form-control" name="gaji" placeholder="Isi disini ... (Contoh : 5000000)">
					    	</div>						  							    
				  		</div>

			  		</div>
			    </div>			  	
			</div>
		</div>

		<div class="container">
			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#pendidikan">
				<h5>II. PENDIDIKAN<span><img src="<?php echo base_url('assets/img/arrow.png') ?>" width="40px"></span></h5></button>
			  	<br>

			  	<div class="card-body">
			  		<div id="pendidikan" class="collapse">
			  			<div class="judul-form">
					  		<h5>1. Pendidikan Formal (Urutkan dari pendidikan terakhir)</h5>
					  	</div>

			  			<div class="table-responsive ">
							<table class="table table-bordered table-hover">
							    <thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
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
									    <td align="center">1 <span class="bintang">*</span></td>
									    <td align="center">
									    <select class="form-control" name="jenjang1" required>
										    <option value="">Pilih</option>
										    <option value="SMP">SMP</option>
										    <option value="SMA/SMK">SMA/SMK</option>
										    <option value="D1">D1</option>
										    <option value="D3">D3</option>
										    <option value="D4">D4</option>
										    <option value="S1">S1</option>
										    <option value="S2">S2</option>
										    <option value="S3">S3</option>
									    </select>
         								</td>
         								<td align="center">
										    <input class="form-control text-besar" type="text" name="nama_sekolah1" placeholder="Isi disini..." required="">
										</td>
										<td align="center">
										   	<input class="form-control text-besar" type="text" name="jurusan1" placeholder="Isi disini..." required="">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="tahun1" placeholder="Isi disini..." required="">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="nilai_akhir1" placeholder="Isi disini..." required="">
										</td>
       									<td align="center">
										    <input class="form-control text-besar" type="text" name="kota1" placeholder="Isi disini..." required="">
										</td>
 									</tr>

         							<tr>
									    <td align="center">2 <span class="bintang">*</td>
									    <td align="center">
									        <select class="form-control" name="jenjang2" required>
										        <option value="">Pilih</option>
										        <option value="SMP">SMP</option>
										        <option value="SMA/SMK">SMA/SMK</option>
										        <option value="D1">D1</option>
										        <option value="D3">D3</option>
										        <option value="D4">D4</option>
										        <option value="S1">S1</option>
										        <option value="S2">S2</option>
										        <option value="S3">S3</option>
									        </select>
         								</td>
         								<td align="center">
										    <input class="form-control text-besar" type="text" name="nama_sekolah2" placeholder="Isi disini..." required>
										</td>
										<td align="center">
										  	<input class="form-control text-besar" type="text" name="jurusan2" placeholder="Isi disini..." required>
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="tahun2" placeholder="Isi disini..." required>
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="nilai_akhir2" placeholder="Isi disini..." required>
										</td>
       									<td align="center">
										    <input class="form-control text-besar" type="text" name="kota2" placeholder="Isi disini..." required>
										</td>
 									</tr>

         							<tr>
									    <td align="center">3</td>
									    <td align="center">
									        <select class="form-control" name="jenjang3">
										        <option value="">Pilih</option>
										        <option value="SMP">SMP</option>
										        <option value="SMA/SMK">SMA/SMK</option>
										        <option value="D1">D1</option>
										        <option value="D3">D3</option>
										        <option value="D4">D4</option>
										        <option value="S1">S1</option>
										        <option value="S2">S2</option>
										        <option value="S3">S3</option>
									        </select>
         								</td>
         								<td align="center">
										    <input class="form-control text-besar" type="text" name="nama_sekolah3" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="jurusan3" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="tahun3" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="nilai_akhir3" placeholder="Isi disini...">
										</td>
       									<td align="center">
										    <input class="form-control text-besar" type="text" name="kota3" placeholder="Isi disini...">
										</td>
 									</tr>

         							<tr>
									    <td align="center">4</td>
									    <td align="center">
									        <select class="form-control" name="jenjang4">
										        <option value="">Pilih</option>
										        <option value="SMP">SMP</option>
										        <option value="SMA/SMK">SMA/SMK</option>
										        <option value="D1">D1</option>
										        <option value="D3">D3</option>
										        <option value="D4">D4</option>
										        <option value="S1">S1</option>
										        <option value="S2">S2</option>
										        <option value="S3">S3</option>
									        </select>
         								</td>
         								<td align="center">
										    <input class="form-control text-besar" type="text" name="nama_sekolah4" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="jurusan4" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="tahun4" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="nilai_akhir4" placeholder="Isi disini...">
										</td>
       									<td align="center">
										    <input class="form-control text-besar" type="text" name="kota4" placeholder="Isi disini...">
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
							<table class="table table-bordered table-hover">
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
										    <input class="form-control text-besar" type="text" name="nama_training1" placeholder="Isi disini...">
										</td>
         								<td align="center">
										    <input class="form-control text-besar" type="text" name="lembaga1" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="kota_training1" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="tahun_training1" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="skill_training1" placeholder="Isi disini...">
										</td>
 									</tr>

         							<tr>
									    <td align="center">2</td>
									    <td align="center">
										    <input class="form-control text-besar" type="text" name="nama_training2" placeholder="Isi disini...">
										</td>
         								<td align="center">
										    <input class="form-control text-besar" type="text" name="lembaga2" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="kota_training2" placeholder="Isi disini...">
										</td>
										<td align="center">
											<input class="form-control text-besar" type="text" name="tahun_training2" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="skill_training2" placeholder="Isi disini...">
										</td>
 									</tr>

         							<tr>
									    <td align="center">3</td>
									    <td align="center">
										    <input class="form-control text-besar" type="text" name="nama_training3" placeholder="Isi disini...">
										</td>
         								<td align="center">
										    <input class="form-control text-besar" type="text" name="lembaga3" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="kota_training3" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="tahun_training3" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="skill_training3" placeholder="Isi disini...">
										</td>
 									</tr>

         							<tr>
									    <td align="center">4</td>
									    <td align="center">
										    <input class="form-control text-besar" type="text" name="nama_training4" placeholder="Isi disini...">
										</td>
         								<td align="center">
										    <input class="form-control text-besar" type="text" name="lembaga4" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="kota_training4" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="tahun_training4" placeholder="Isi disini...">
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="skill_training4" placeholder="Isi disini...">
										</td>
 									</tr>         									
								</tbody>
							</table>
						</div>
						<br>

						<div class="judul-form">
					  		<h5>3. File Dokumen (.jpg/.png)</h5>
					  	</div>

					  	<div class="card card-upload">
					  		<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									    <p>Ijazah <span class="bintang">*</span></p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="ijazah" multiple class="custom-file-input" required>
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>
<!-- 								<div class="col-md-3">
									<div class="format">
										<p>(format file : no.KTP_Ijazah.jpg)</p>
									</div>	
								</div> -->
							</div>  

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>Transkrip Nilai <span class="bintang">*</span></p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="transkrip_nilai" multiple class="custom-file-input" required>
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>Sertifikat Vaksin Terakhir <span class="bintang">*</span></p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="sertif_vaksin" multiple class="custom-file-input" required>
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>Surat Pengalaman Kerja</p>
									</div>							      
								</div>

								<div class="col-md-3">									 
									<div class="custom-file">
										<input type="file" name="userfile[]" id="spk1" multiple class="custom-file-input">
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>					
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="spk2" multiple class="custom-file-input">
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="spk3" multiple class="custom-file-input">
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>									
							</div> 

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>Sertifikat Keahlian </p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="sertif1" multiple class="custom-file-input">
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>						
								</div>

								<div class="col-md-3">		
									<div class="custom-file">
										<input type="file" name="userfile[]" id="sertif2" multiple class="custom-file-input">
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="sertif3" multiple class="custom-file-input">
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div> 
								</div>					
							</div> 

							<div class="form-group col-md-12">
								<div class="judul-attach">
									<p style="margin-left: -15px;margin-bottom: -8px; margin-top: 5px;">Kelengkapan Berkas <span class="bintang">*</span></p>
									</div>							      
								</div>

								<div class="border rounded" style="padding: 10px 5px 10px 5px; margin: auto">
									<div class="form-row berkas">
						  				<div class="custom-control ">
											<input type="checkbox" name="kelengkapan_berkas[]" value="KTP" required> KTP<br>
										</div>
										<div class="custom-control ">
											<input type="checkbox" name="kelengkapan_berkas[]" value="IJAZAH" required> Ijazah<br>
										</div>
										<div class="custom-control ">
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="SERTIFIKAT VAKSIN" required> Sertifikat Vaksin<br>
										</div>
										<div class="custom-control ">
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="SKHUN" required> SKHUN<br>
										</div>

										<div class="custom-control ">
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="SKCK" required> SKCK<br>
										</div>
										<div class="custom-control ">
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="NPWP" required> NPWP<br>
										</div>
										<div class="custom-control ">
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="PAKLARING" required> Paklaring<br>
										</div>
										<div class="custom-control ">
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="REKENING BCA" required> Rekening BCA<br>
										</div>
										<div class="custom-control ">
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="KARTU KELUARGA" required> Kartu Keluarga<br>
										</div>
										<div class="custom-control mt-2">
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="KARTU PENCARI KERJA DISNAKER" required> Kartu Pencari Kerja Disnaker
										</div>
										<div class="custom-control mt-2">
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="SURAT DOKTER" required> Surat Dokter  Max. 3 Bulan
										</div>
						  			</div>
						  		</div>
						  		<div class="form-row">
									<div class="form-group col-md">
										<div class="format" style="margin-top:10px;margin-bottom:-15px">
											<p><strong>*Catatan : Max. 500kb, Format JPEG/JPG</strong></p>
										</div>							      
									</div>					
								</div>
					  	</div>
						<br>
						<br>

						<div class="judul-form">
							<h5>4. Bahasa Yang Dikuasai</h5>
						</div> 

						<div class="table-responsive m-b-30 p-r-20">
  							<table id="mainTable" class="table table-bordered table-hover">
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
										<td align="center" style="width:5%">1 <span class="bintang">*</span></td>
										<td align="center">
										    <select class="form-control" name="bahasa1" required>
										       	<option value="">Pilih Salah Satu</option>
										        <option value="INDONESIA">INDONESIA</option>
										        <option value="INGGRIS">INGGRIS</option>
										        <option value="JEPANG">JEPANG</option>									     		
										    </select>
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="lisan_kurang1" name="lisan1" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="lisan_kurang1"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="lisan_cukup1" name="lisan1" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="lisan_cukup1"></label>
											</div>	
										</td>

										<td style="border-right: #ccc solid 1px">
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="lisan_baik1" name="lisan1" class="custom-control-input" value="BAIK">
												<label class="custom-control-label green" for="lisan_baik1"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="tulis_kurang1" name="tulisan1" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="tulis_kurang1"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="tulis_cukup1" name="tulisan1" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="tulis_cukup1"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="tulis_baik1" name="tulisan1" class="custom-control-input" value="BAIK">
												<label class="custom-control-label green" for="tulis_baik1"></label>
											</div>	
										</td>
									</tr>

									<tr>
										<td align="center" style="width:5%">2</td>
										<td align="center">
										    <select class="form-control" id="bahasa2" name="bahasa2">
										        <option value="">Pilih Salah Satu</option>
										        <option value="INDONESIA">INDONESIA</option>
										        <option value="INGGRIS">INGGRIS</option>
										        <option value="JEPANG">JEPANG</option>							     		
										    </select>
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="lisan_kurang2" name="lisan2" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="lisan_kurang2"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="lisan_cukup2" name="lisan2" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="lisan_cukup2"></label>
											</div>	
										</td>

										<td style="border-right: #ccc solid 1px">
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="lisan_baik2" name="lisan2" class="custom-control-input" value="BAIK">
												<label class="custom-control-label green" for="lisan_baik2"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="tulis_kurang2" name="tulisan2" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="tulis_kurang2"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="tulis_cukup2" name="tulisan2" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="tulis_cukup2"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="tulis_baik2" name="tulisan2" class="custom-control-input" value="BAIK">
												<label class="custom-control-label green" for="tulis_baik2"></label>
											</div>	
										</td>
									</tr>

									<tr>
										<td align="center" style="width:5%">3</td>
										<td align="center">
										    <select class="form-control" id="bahasa3" name="bahasa3">
										        <option value="">Pilih Salah Satu</option>
										        <option value="INDONESIA">INDONESIA</option>
										        <option value="INGGRIS">INGGRIS</option>
										        <option value="JEPANG">JEPANG</option>							     		
										    </select>
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="lisan_kurang3" name="lisan3" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="lisan_kurang3"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="lisan_cukup3" name="lisan3" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="lisan_cukup3"></label>
											</div>	
										</td>

										<td style="border-right: #ccc solid 1px">
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="lisan_baik3" name="lisan3" class="custom-control-input" value="BAIK">
												<label class="custom-control-label green" for="lisan_baik3"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="tulis_kurang3" name="tulisan3" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="tulis_kurang3"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="tulis_cukup3" name="tulisan3" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="tulis_cukup3"></label>
											</div>
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="tulis_baik3" name="tulisan3" class="custom-control-input" value="BAIK">
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
							<h5>5. Keterampilan/Skill</h5>
						</div>

						<div class="table-responsive m-b-30 p-r-20">
							<table id="mainTable" class="table table-bordered table-hover">
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
           								<td align="center">1 <span class="bintang">*</span></td>
           								<td align="center">
             								<input type="text" name="keterampilan1" class="form-control text-besar" placeholder="Isi disini..." required></textarea>
          								</td>
          											
										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="kurang_keterampilan1" name="keterangan1" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="kurang_keterampilan1"></label>
											</div>											            
										</td>

         								<td>
         									<div class="custom-control custom-radio text-center">
												<input type="radio" id="cukup_keterampilan1" name="keterangan1" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="cukup_keterampilan1"></label>
											</div>										          		
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="baik_keterampilan1" name="keterangan1" class="custom-control-input" value="BAIK">
												<label class="custom-control-label green" for="baik_keterampilan1"></label>
											</div>											       		
										</td>

										<td>
											<div class="radio radio-success text-center">
												<input class="form-control text-besar" name="deskripsi1" type="text" placeholder="Isi disini..." required>
											</div>
										</td>
									</tr>

         							<tr>
           								<td align="center">2</td>
           								<td align="center">
             								<input type="text" name="keterampilan2" class="form-control text-besar" placeholder="Isi disini..."></textarea>
          								</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="kurang_keterampilan2" name="keterangan2" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="kurang_keterampilan2"></label>
											</div>	
										</td>

         								<td>
         									<div class="custom-control custom-radio text-center">
												<input type="radio" id="cukup_keterampilan2" name="keterangan2" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="cukup_keterampilan2"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="baik_keterampilan2" name="keterangan2" class="custom-control-input" value="BAIK">
												<label class="custom-control-label green" for="baik_keterampilan2"></label>
											</div>	
										</td>

										<td>
											<div class="radio radio-success text-center">
												<input class="form-control text-besar" name="deskripsi2" type="text" placeholder="Isi disini...">
											</div>
										</td>
									</tr>

									<tr>
           								<td align="center">3</td>
           								<td align="center">
             								<input type="text" name="keterampilan3" class="form-control text-besar" placeholder="Isi disini..."></textarea>
          								</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="kurang_keterampilan3" name="keterangan3" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="kurang_keterampilan3"></label>
											</div>	
										</td>

         								<td>
         									<div class="custom-control custom-radio text-center">
												<input type="radio" id="cukup_keterampilan3" name="keterangan3" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="cukup_keterampilan3"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="baik_keterampilan3" name="keterangan3" class="custom-control-input" value="BAIK">
												<label class="custom-control-label green" for="baik_keterampilan3"></label>
											</div>	
										</td>

										<td>
											<div class="radio radio-success text-center">
												<input class="form-control text-besar" name="deskripsi3" type="text" placeholder="Isi disini...">
											</div>
										</td>
									</tr>

									<tr>
           								<td align="center">4</td>
           								<td align="center">
             								<input type="text" name="keterampilan4" class="form-control text-besar" placeholder="Isi disini..."></textarea>
          								</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="kurang_keterampilan4" name="keterangan4" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="kurang_keterampilan4"></label>
											</div>
										</td>

         								<td>
         									<div class="custom-control custom-radio text-center">
												<input type="radio" id="cukup_keterampilan4" name="keterangan4" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="cukup_keterampilan4"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="baik_keterampilan4" name="keterangan4" class="custom-control-input" value="BAIK">
												<label class="custom-control-label green" for="baik_keterampilan4"></label>
											</div>	
										</td>

										<td>
											<div class="radio radio-success text-center">
												<input class="form-control text-besar" name="deskripsi4" type="text" placeholder="Isi disini...">
											</div>
										</td>
									</tr>

									<tr>
           								<td align="center">5</td>
           								<td align="center">
             								<input type="text" name="keterampilan5" class="form-control text-besar" placeholder="Isi disini..."></textarea>
          								</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="kurang_keterampilan5" name="keterangan5" class="custom-control-input" value="KURANG">
												<label class="custom-control-label red" for="kurang_keterampilan5"></label>
											</div>	
										</td>

         								<td>
         									<div class="custom-control custom-radio text-center">
												<input type="radio" id="cukup_keterampilan5" name="keterangan5" class="custom-control-input" value="CUKUP">
												<label class="custom-control-label orange" for="cukup_keterampilan5"></label>
											</div>	
										</td>

										<td>
											<div class="custom-control custom-radio text-center">
												<input type="radio" id="baik_keterampilan5" name="keterangan5" class="custom-control-input" value="BAIK">
												<label class="custom-control-label green" for="baik_keterampilan5"></label>
											</div>	
										</td>

										<td>
											<div class="radio radio-success text-center">
												<input class="form-control text-besar" name="deskripsi5" type="text" placeholder="Isi disini...">
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<br>

						<div class="judul-form">
							<h5>6. Prestasi Akademik / Non Akademik</h5>
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
             								<select class="form-control" name="jenis_prestasi1">
										       	<option value="">Pilih Salah Satu</option>
										        <option value="Akademik">Akademik</option>
										        <option value="Non Akademik">Non Akademik</option>
										    </select>
          								</td>

          								<td align="center">
             								<input type="text" name="peringkat1" class="form-control text-besar" placeholder="Isi disini...">
          								</td>

          								<td align="center">
             								<input type="text" name="tingkat_prestasi1" class="form-control text-besar" placeholder="Isi disini...">
          								</td>
          										
          								<td align="center">
             								<input type="text" name="tahun_prestasi1" class="form-control text-besar" placeholder="Isi disini...">
          								</td>

          								<td align="center">
             								<input type="text" name="keterangan_prestasi1" class="form-control text-besar" placeholder="Isi disini...">
          								</td>
									</tr>

									<tr>
           								<td align="center">2</td>
           								<td align="center">
             								<select class="form-control" name="jenis_prestasi2">
										       	<option value="">Pilih Salah Satu</option>
										        <option value="Akademik">Akademik</option>
										        <option value="Non Akademik">Non Akademik</option>
										    </select>
          								</td>

          								<td align="center">
             								<input type="text" name="peringkat2" class="form-control text-besar" placeholder="Isi disini...">
          								</td>

          								<td align="center">
             								<input type="text" name="tingkat_prestasi2" class="form-control text-besar" placeholder="Isi disini...">
          								</td>
          										
          								<td align="center">
             								<input type="text" name="tahun_prestasi2" class="form-control text-besar" placeholder="Isi disini...">
          								</td>

          								<td align="center">
             								<input type="text" name="keterangan_prestasi2" class="form-control text-besar" placeholder="Isi disini...">
          								</td>
									</tr>

									<tr>
           								<td align="center">3</td>
           								<td align="center">
             								<select class="form-control" name="jenis_prestasi3">
										       	<option value="">Pilih Salah Satu</option>
										        <option value="Akademik">Akademik</option>
										        <option value="Non Akademik">Non Akademik</option>
										    </select>
          								</td>

          								<td align="center">
             								<input type="text" name="peringkat3" class="form-control text-besar" placeholder="Isi disini...">
          								</td>

          								<td align="center">
             								<input type="text" name="tingkat_prestasi3" class="form-control text-besar" placeholder="Isi disini...">
          								</td>
          										
          								<td align="center">
             								<input type="text" name="tahun_prestasi3" class="form-control text-besar" placeholder="Isi disini...">
          								</td>

          								<td align="center">
             								<input type="text" name="keterangan_prestasi3" class="form-control text-besar" placeholder="Isi disini...">
          								</td>
									</tr>

									<tr>
           								<td align="center">4</td>
           								<td align="center">
             								<select class="form-control" name="jenis_prestasi4">
										       	<option value="">Pilih Salah Satu</option>
										        <option value="Akademik">Akademik</option>
										        <option value="Non Akademik">Non Akademik</option>
										    </select>
          								</td>

          								<td align="center">
             								<input type="text" name="peringkat4" class="form-control text-besar" placeholder="Isi disini...">
          								</td>

          								<td align="center">
             								<input type="text" name="tingkat_prestasi4" class="form-control text-besar" placeholder="Isi disini...">
          								</td>
          										
          								<td align="center">
             								<input type="text" name="tahun_prestasi4" class="form-control text-besar" placeholder="Isi disini...">
          								</td>

          								<td align="center">
             								<input type="text" name="keterangan_prestasi4" class="form-control text-besar" placeholder="Isi disini...">
          								</td>
									</tr>

									<tr>
           								<td align="center">5</td>
           								<td align="center">
             								<select class="form-control" name="jenis_prestasi5">
										       	<option value="">Pilih Salah Satu</option>
										        <option value="Akademik">Akademik</option>
										        <option value="Non Akademik">Non Akademik</option>
										    </select>
          								</td>

          								<td align="center">
             								<input type="text" name="peringkat5" class="form-control text-besar" placeholder="Isi disini...">
          								</td>

          								<td align="center">
             								<input type="text" name="tingkat_prestasi5" class="form-control text-besar" placeholder="Isi disini...">
          								</td>
          										
          								<td align="center">
             								<input type="text" name="tahun_prestasi5" class="form-control text-besar" placeholder="Isi disini...">
          								</td>

          								<td align="center">
             								<input type="text" name="keterangan_prestasi5" class="form-control text-besar" placeholder="Isi disini...">
          								</td>
									</tr>
								</tbody>
							</table>
						</div>
			  		</div>					
				</div>
			</div>
		</div>

		<div class=" container">
			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#riwayat_pekerjaan">
					<h5>III. RIWAYAT PEKERJAAN<span><img src="<?php echo base_url('assets/img/arrow.png') ?>" width="40px"></span></h5></button>
			  	<br>
			  	<div class="card-body">
			  		<div id="riwayat_pekerjaan" class="collapse">
			  			<div class="judul-form">
							<h5>Pengalaman Kerja Terakhir</h5>
							<br>
						</div> 

			  			<div class="form-row">
							<div class="form-group col-md-2 title-company">
						      	<label for="nama_perusahaan">Nama Perusahaan</label>
					    	</div>
					    	<div class="form-group col-md-10 title-company">
						      	<input type="text" class="form-control text-besar" name="nama_perusahaan" placeholder="Isi disini ...">
					    	</div>
						</div>  
							
						<div class="form-row">
							<div class="form-group col-md-2 title-company">
						      	<label for="bidang_usaha">Bidang Usaha</label>
					    	</div>
					 		<div class="form-group col-md-10">
						      	<input type="text" class="form-control text-besar" name="bidang_usaha" placeholder="Isi disini ...">
					    	</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2 title-company">
						      	<label for="lokasi">Lokasi/Kota</label>
					    	</div>
					    	<div class="form-group col-md-10">
						      	<input type="text" class="form-control text-besar" name="kota_perusahaan" placeholder="Isi disini ...">
					    	</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2 title-company">
						      	<label for="jabatan_perusahaan">Jabatan</label>
					    	</div>
					    	<div class="form-group col-md-10">
						      	<input type="text" class="form-control text-besar" name="jabatan_perusahaan" placeholder="Isi disini ...">
					    	</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2 title-company">
								<label for="waktu">... s/d ...</label>
							</div>
							<div class="form-group col-md-5">
								<div class="input-group date">
									<input id="awal_kerja" placeholder=" Isi tanggal awal ..." type="date" class="form-control " name="awal_kerja">
								</div>
							</div>

							<div class="form-group col-md-5">
								<div class="input-group date">
									<input id="akhir_kerja" placeholder=" Isi tanggal akhir ..." type="date" class="form-control" name="akhir_kerja">
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2 title-company">
						      	<label for="gaji_terakhir">Gaji</label>
					    	</div>
					    	<div class="form-group col-md-10">
						      	<input type="number" class="form-control" name="gaji_terakhir" placeholder="Isi disini ...">
					    	</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2 title-company">
						      	<label for="alasan_berhenti">Alasan Berhenti</label>
					    	</div>
					    	<div class="form-group col-md-10">
						      	<textarea type="text" class="form-control text-besar" name="alasan_berhenti" placeholder="Isi disini ..."></textarea> 
					    	</div>
						</div>
					</div>
			  	</div>
			</div>
		</div>

		<div class=" container">
			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#minat_konsep">
					<h5>III. MINAT DAN KONSEP PRIBADI<span><img src="<?php echo base_url('assets/img/arrow.png') ?>" width="40px"></span></h5></button>
			  	<br>
			  	<div class="card-body">
			  		<div id="minat_konsep" class="collapse">

			  			<div class="form-row">
							<div class="form-group col-md-12">
						      	<label for="alasan_bekerja">1. Mengapa anda ingin bekerja di Perusahaan kami <span class="bintang">*</span></label>
						      	<textarea type="text" class="form-control text-besar" name="alasan_bekerja" placeholder="Isi disini ..." required></textarea> 
					    	</div>
						</div>  

						<div class="form-row">
							<div class="form-group col-md-12">
						      	<label for="fasilitas_bekerja">2. Sebutkan fasilitas yang anda harapkan <span class="bintang">*</span></label>
						      	<textarea type="text" class="form-control text-besar" name="fasilitas_bekerja" placeholder="Isi disini ..." required></textarea> 
					    	</div>
						</div>  
							
						<div class="form-row">
							<div class="form-group col-md-4">
						      	<label for="kapan_mulai_bekerja">3. Kapan anda sudah bisa mulai bekerja <span class="bintang">*</span></label>
						      	<input type="date" class="form-control" name="kapan_mulai_bekerja" required></input> 
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
									<input type="radio" class="rad-kenalan custom-control-input" id="rad3" name="kenalan_perusahaan" value="ADA">
									<label class="custom-control-label" for="rad3">Ada</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="rad-kenalan custom-control-input" id="rad4" name="kenalan_perusahaan" value="TIDAK ADA">
									<label class="custom-control-label" for="rad4">Tidak Ada</label>
								</div>					
							</div>
						</div> 

						<div class="form-row">								
							<div class="form-group col-md-12">					
			                   	<div id="form_kenalan1" style="display:none;margin-top: -20px;">
			                   		<label for="ada_kenalan1">Jika ada, sebutkan : <span class="bintang">*</span></label>
						          	<div class="table-responsive ">
									    <table class="table table-bordered table-hover">
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
											        	<input class="form-control text-besar" type="text" name="nama_kenalan1" placeholder="Isi disini...">
		         									</td>
		         									<td align="center">
												        <input class="form-control text-besar" type="text" name="jabatan_kenalan1" placeholder="Isi disini..." >
												    </td>
												    <td align="center">
												       	<input class="form-control text-besar" type="text" name="bagian_kenalan1" placeholder="Isi disini...">
												    </td>
												    <td align="center">
												       <input class="form-control text-besar" type="text" name="hubungan_kenalan1" placeholder="Isi disini..." >
												   	</td>												       	
		 										</tr>

		         								<tr>
											        <td align="center">2</td>
											        <td align="center">
											        	<input class="form-control text-besar" type="text" name="nama_kenalan2" placeholder="Isi disini...">
		         									</td>
		         									<td align="center">
												        <input class="form-control text-besar" type="text" name="jabatan_kenalan2" placeholder="Isi disini...">
												    </td>
												    <td align="center">
												        <input class="form-control text-besar" type="text" name="bagian_kenalan2" placeholder="Isi disini...">
												    </td>
												    <td align="center">
												        <input class="form-control text-besar" type="text" name="hubungan_kenalan2" placeholder="Isi disini...">
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
		</div>

		<div class=" container">
			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#kelebihan_kekurangan">
					<h5>IV. KELEBIHAN DAN KEKURANGAN<span><img src="<?php echo base_url('assets/img/arrow.png') ?>" width="40px"></span></h5></button>
			  	<br>
			  	<div class="card-body">
			  		<div id="kelebihan_kekurangan" class="collapse">
			  			<div class="form-row">
							<div class="form-group col-md-12">
						      	<label for="kelebihan">1. Sebutkan hal-hal yang menjadi kelebihan dalam diri anda <span class="bintang">*</span></label>
						      	<textarea type="text" class="form-control text-besar" name="kelebihan" placeholder="Isi disini ..." required></textarea> 
					    	</div>
						</div>  

						<div class="form-row">
							<div class="form-group col-md-12">
						      	<label for="kekurangan">2. Sebutkan hal-hal yang menjadi kelemahan dalam diri anda <span class="bintang">*</span></label>
						      	<textarea type="text" class="form-control text-besar" name="kekurangan" placeholder="Isi disini ..." required></textarea> 
					    	</div>
						</div>  

						<div class="form-row">
							<div class="form-group col-md-6">
								<div class="judul-attach">
								    <p>3. Apakah anda pernah menderita sakit yang lama sembuh <span class="bintang">*</span></p>
								</div>	
					    	</div>

							<div class="form-group col-md-6">
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="rad-sakit custom-control-input" id="rad5" name="pernah_sakit" value="PERNAH">
									<label class="custom-control-label" for="rad5">Pernah</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="rad-sakit custom-control-input" id="rad6" name="pernah_sakit" value="TIDAK PERNAH">
									<label class="custom-control-label" for="rad6">Tidak</label>
								</div>						
							</div>
						</div>
					
						<div class="form-row">
							<div class="form-group col-md-12">					
				                <div id="form_sakit1" style="display:none">
				                   	<label for="form_sakit1">Jika pernah, sebutkan : <span class="bintang">*</span></label>			                   			
				                   	<div class="table-responsive ">
									    <table class="table table-bordered table-hover">
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
											        	<input class="form-control text-besar" type="text" name="nama_penyakit1" placeholder="Isi disini...">
		         									</td>
		         									<td align="center">
												        <input class="form-control text-besar" type="text" name="lama_sakit1" placeholder="Isi disini..." >
												    </td>
												    <td align="center">
												       	<input class="form-control text-besar" type="text" name="akibat_ditimbulkan1" placeholder="Isi disini...">
												    </td>					    											       	
		 										</tr>

		         								<tr>
											        <td align="center">2</td>
											        <td align="center">
											        	<input class="form-control text-besar" type="text" name="nama_penyakit2" placeholder="Isi disini...">
		         									</td>
		         									<td align="center">
												        <input class="form-control text-besar" type="text" name="lama_sakit2" placeholder="Isi disini...">
												    </td>
												    <td align="center">
												        <input class="form-control text-besar" type="text" name="akibat_ditimbulkan2" placeholder="Isi disini...">
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
								<p>4. Apakah anda buta warna <span class="bintang">*</span></p>
					    	</div>

							<div class="form-group col-md-9">
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="rad custom-control-input" id="rad7" name="buta_warna" value="YA">
									<label class="custom-control-label" for="rad7">Ya</label>
								</div>

								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="rad custom-control-input" id="rad8" name="buta_warna" value="TIDAK">
									<label class="custom-control-label" for="rad8">Tidak</label>
								</div>						
							</div>
						</div>
					</div>
			  	</div>
			</div>
		</div>

		<div class="container">
			<div class="custom-control custom-checkbox">
			  	<input type="checkbox" class="custom-control-input" name="check1" id="customCheck1" value="check1_complete" required>
			  	<label class="custom-control-label" for="customCheck1">Dengan ini saya menyatakan bahwa biodata pelamar ini saya isi dengan sebenar-benarnya, bila dikemudian hari ternyata terdapat ketidaksesuaian, maka saya bersedia untuk digagalkan.</label>
			</div>
			
			<div class="custom-control custom-checkbox">
			  	<input type="checkbox" class="custom-control-input" name="check2" id="customCheck2" value="check2_complete" required>
			  	<label class="custom-control-label" for="customCheck2">Dengan ini saya menyatakan bahwa belum pernah bekerja sebagai karyawan PT Padma Soode Indonesia atau perusahaan lain dibawah Soode Group.</label>
			</div>

			<div class="catatan2">
				<p><span class="bintang">*</span>) Wajib di isi</p>
			</div>

			<div class="catatan">
				<p>*catatan : Selama proses seleksi berlangsung tidak dipungut biaya atau gratis, semua biaya proses seleksi ditanggung oleh pihak perusahaan.</p>
			</div>
		</div> 

		<div class="col-sm12 d-flex justify-content-center">
			<input class="btn custom-btn submit" id="submit" type="submit" name="simpan" value="Submit" />
		</div>
	</form>

</section>

<!-- tambahan jquery-->
<script type="text/javascript">
	//Radio button nikah
	$(function()
	{
		$(":radio.rad-nikah").click(function(){
		$("#form1, #form2").hide()
			if($(this).val() == "MENIKAH"){
				$("#form1").show();
			}else{
				$("#form2").show();
			}
		});
	});

	//Radio button kenalan
	$(function()
	{
		$(":radio.rad-kenalan").click(function()
		{
		$("#form_kenalan1, #form_kenalan2").hide()
			if($(this).val() == "ADA")
			{
				$("#form_kenalan1").show();
			}else
			{
				$("#form_kenalan2").show();
			}
		});
	});

	//Radio button sakit
	$(function()
	{
		$(":radio.rad-sakit").click(function()
		{
		$("#form_sakit1, #form_sakit2").hide()
			if($(this).val() == "PERNAH")
			{
				$("#form_sakit1").show();
			}else
			{
				$("#form_sakit2").show();
			}
		});
	});

	$(document).ready(function() 
	{
	    document.getElementById("gaji").style.display = "none";
	    var jabatan = $('#jabatan').val();
		if (jabatan == 'STAFF') 
		{
			document.getElementById("gaji").style.display = "";
		} else
		{
			document.getElementById("gaji").style.display = "none";
		}
	});

	function cekKTP(id)
	{
		var hasil = 'berhasil';
		var ktp = $('#ktp').val();

		$.ajax(
		{
	        type    : "POST",
	        url     : "<?php echo base_url(); ?>Recruitment_form/valid_ktp",
	        asyn	: true,
	        dataType	: 'json',
	        data    : "ktp=" + ktp,

	        success : function(data)
	        {
		        if(data == 0)
		        {
		            $('#hasil').html("Identity number with code already available, you can't apply again.");
		            document.getElementById("hasil").style.color = "red"; 
		           	document.getElementById("submit").disabled = true; 
		        } else
		        {
		        	$('#hasil').html('');
		        	document.getElementById("submit").disabled = false; 
		        }
	      	}
 		})
	}

	//Foto Formal
	function readURL(input) 
	{
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function (e) 
            {
                $('#foto')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#foto_formal").change(function() 
    {
        var val = $(this).val();
        switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase())
        {
            case 'gif': case 'jpg': case 'png':
            alert("Success upload!");
            document.getElementById("submit").disabled = false; 
                break;
            default:
                $(this).val('');
                // error message here
                alert("Please upload JPG / PNG file!");
                document.getElementById("submit").disabled = true; 
                break;
        }
    });

    $("#ijazah").change(function() 
    {
        var val = $(this).val();
        switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase())
        {
            case 'gif': case 'jpg': case 'png':
            alert("Success upload!");
            document.getElementById("submit").disabled = false; 
                break;
            default:
                $(this).val('');
                // error message here
                alert("Please upload JPG / PNG file!");
                document.getElementById("submit").disabled = true; 
                break;
        }
    });

    $("#transkrip_nilai").change(function() 
    {
        var val = $(this).val();
        switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase())
        {
            case 'gif': case 'jpg': case 'png':
            alert("Success upload!");
            document.getElementById("submit").disabled = false; 
                break;
            default:
                $(this).val('');
                // error message here
                alert("Please upload JPG / PNG file!");
                document.getElementById("submit").disabled = true; 
                break;
        }
    });

    $("#sertif_vaksin").change(function() 
    {
        var val = $(this).val();
        switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase())
        {
            case 'gif': case 'jpg': case 'png':
            alert("Success upload!");
            document.getElementById("submit").disabled = false; 
                break;
            default:
                $(this).val('');
                // error message here
                alert("Please upload JPG / PNG file!");
                document.getElementById("submit").disabled = true; 
                break;
        }
    });

    $("#spk1,#spk2,#spk3").change(function() 
    {
        var val = $(this).val();
        switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase())
        {
            case 'gif': case 'jpg': case 'png':
            alert("Success upload!");
            document.getElementById("submit").disabled = false; 
                break;
            default:
                $(this).val('');
                // error message here
                alert("Please upload JPG / PNG file!");
                document.getElementById("submit").disabled = true; 
                break;
        }
    });

    $("#sertif1,#sertif2,#sertif3").change(function() 
    {
        var val = $(this).val();
        switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase())
        {
            case 'gif': case 'jpg': case 'png':
            alert("Success upload!");
            document.getElementById("submit").disabled = false; 
                break;
            default:
                $(this).val('');
                // error message here
                alert("Please upload JPG / PNG file!");
                document.getElementById("submit").disabled = true; 
                break;
        }
    });

    //Input image
    $(".custom-file-input").on("change", function() 
	{
  		var fileName = $(this).val().split("\\").pop();
  		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});

	//Datepicker Tanggal Lahir
	$('.datepickerLahir').datepicker(
  	{
	  	format: 'yyyy-mm-dd',
	    // format: 'dd-M-yyyy',
	    todayHighlight: true,
	    todayHighlight: true,
  	});

   	$('.addingCalendarLahir').on("click", function(e)
   	{
    console.log("clicked");
        $('.datepickerLahir').focus();
    });

    // Datepicker Tanggal Awal Kerja
    $(function()
   	{
	    $(".datepickerTanggalAwal").datepicker(
	    {
	       format: 'yyyy-mm-dd',
	       todayHighlight: true,
	       todayHighlight: true,
	    });

	    $('.addingCalendarAwal').on("click", function(e)
	    {
	    console.log("clicked");
	        $('.datepickerTanggalAwal').focus();
	    });

	    $("#awal_kerja").on('changeDate', function(selected) 
	    {
	        var startDate = new Date(selected.date.valueOf());
	        $("#akhir_kerja").datepicker('setStartDate', startDate);
	        if($("#awal_kerja").val() > $("#akhir_kerja").val())
	        {
	          $("#akhir_kerja").val($("#awal_kerja").val());
	        }
	    });
 	});

 	//Datepicker Tanggal Akhir Kerja
 	$(function()
   	{
	    $(".datepickerTanggalAkhir").datepicker({
	        format: 'yyyy-mm-dd',
	        todayHighlight: true,
	        todayHighlight: true,
	    });

	    $('.addingCalendarAkhir').on("click", function(e)
	    {
	    console.log("clicked");
	        $('.datepickerTanggalAkhir').focus();
	    });

	    $("#awal_kerja").on('changeDate', function(selected) 
	    {
	        var startDate = new Date(selected.date.valueOf());
	        $("#akhir_kerja").datepicker('setStartDate', startDate);
	        if($("#awal_kerja").val() > $("#akhir_kerja").val())
	        {
	          $("#akhir_kerja").val($("#awal_kerja").val());
	        }
	    });
 	});

 	//Tooltip Recruitment
 	$(function () 
	{
	  $('[data-tooltip="true"]').tooltip()
	})

 	//Tooltips Submit
 	$(document).ready(function() 
    {
        $('.submit').click(function() 
        {
        return confirm("Are you sure you want to submit?");
        });
    });

    $(function() 
    {
        $('[data-toggle="tooltip"]').tooltip()
    });


    function getAge() 
    {
	var date = document.getElementById('birthday').value;
 
	if(date === "")
	{
		alert("Please complete the required field!");
    }else
    {
		var today = new Date();
		var birthday = new Date(date);
		var year = 0;
		if (today.getMonth() < birthday.getMonth()) 
		{
			year = 1;
		} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) 
		{
			year = 1;
		}
		var age = today.getFullYear() - birthday.getFullYear() - year;
 
		if(age < 0)
		{
			age = 0;
		}
		document.getElementById('age').value = age; 
	}

}
</script>

<script>
	$(function() {
	    $('.text-besar').keyup(function() {
	        this.value = this.value.toUpperCase();
	    });
	});
	
	$(function() {
	    $('textarea').keyup(function() {
	        this.value = this.value.toUpperCase();
	    });
	});



	$(function(){
    var requiredCheckboxes = $('.berkas :checkbox[required]');
    requiredCheckboxes.change(function(){
        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });

});
</script>
