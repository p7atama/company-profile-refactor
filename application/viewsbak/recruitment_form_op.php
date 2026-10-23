<br>
<section id="rec_form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm12">
				<div class="section-title">
					<h2>RECRUITMENT</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center">	
			<form>
				<div class="col-sm colom-foto">				
	                <label for="">Foto *</label>
	                <div class="card card-img">
	                	<img id="foto" src="#" alt="Unggah foto ..." />   
	               	</div>
	               	<div class="custom-file">
				    	<input type="file" class="custom-file-input" onchange="readURL(this);">
				    	<label class="custom-file-label" for="customFile">Pilih berkas</label>
				  	</div>                            
				</div>
			</form>
			
			<div class="container">
				<div class="card">
					<button type="button" class="btn btn-info" data-toggle="collapse.show" data-target="#identitas">
						<h5>I. IDENTITAS</h5></button>
			  		<br>
			  		<div class="card-body">
			  			<form>
			  				<div id="identitas" class="collapse.show">
							<div class="form-row">
					    		<div class="form-group col-md-6">
						      		<label for="nama">Nama Lengkap *</label>
						      		<input type="text" class="form-control" id="nama" placeholder="Isi disini ...">
					    		</div>

							    <div class="form-group col-md-3">
							      	<label for="jenis_kelamin" class="control-label text-right m-b-10">Jenis Kelamin *</label>
						          	<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
						            	<option value="">Pilih salah satu</option>
						                <option value="Laki - Laki">Laki - Laki</option>
						                <option value="Perempuan">Perempuan</option>
						            </select>
							    </div>

							    <div class="form-group col-md-3">
							      	<label for="golongan_darah" class="control-label text-right m-b-10">Golongan Darah *</label>
						          	<select class="form-control" id="golongan_darah" name="golongan_darah">
						               	<option value="">Pilih salah satu</option>
						                <option value="-">-</option>
						                <option value="A">A</option>
						                <option value="B">B</option>
						                <option value="O">O</option>
						                <option value="AB">AB</option>
						            </select>
							    </div>
				  			</div>

						 	<div class="form-row">
							    <div class="form-group col-md-6">						    	
							      <label for="tempat_lahir">Tempat Lahir *</label>
							      <input type="text" class="form-control" id="tempat_lahir" placeholder="Isi disini ...">
							    </div>

							   <!--  <div class="form-row">
									<div class="label">
										<label>Tanggal Lahir</label>
									</div>
									<div class="input-group col-md-12">
						            	<input type="text"  name="tanggal" placeholder=" Fill in here ..."  class="form-control datepickerLahir" required/>
							            <span class="input-group-append">
							                <button class="btn btn-outline-secondary border-left-0 border" type="button">
							                    <i class="fa fa-calendar addingCalendarLahir"></i>
							                </button>
							            </span>
							        </div>
								</div> -->

							    <div class="form-group col-md-6">
						            <label>Tanggal Lahir *</label>
						            <div class="form-row">
						            	<div class="input-group col-md-12">
							            	<input type="text"  name="tanggal" placeholder="Isi disini ..."  class="form-control datepickerLahir" required/>
								            <span class="input-group-append">
								                <button class="btn btn-outline-secondary border-left-0 border" type="button">
								                    <i class="fa fa-calendar addingCalendarLahir"></i>
								                </button>
								            </span>
								        </div>
						            </div>						            
						        </div>
							</div>  

							<div class="form-row">
							    <div class="form-group col-md-6">
							      <label for="no_ktp">Nomor KTP/NIK *</label>
							      <input type="text" class="form-control" id="no_ktp" placeholder="Isi disini ...">
							    </div>

							    <div class="form-group col-md-6">
						          	<label for="no_npwp">Nomor NPWP</label>
							      <input type="text" class="form-control" id="no_npwp" placeholder="Isi disini ...">
							    </div>
							</div> 
							<br>

							<div class="judul-form">
								<h5>Alamat Sesuai KTP *</h5> 
							</div>
							<div class="form-row">
					    		<div class="form-group col-md-4">
						      		<label for="alamat_ktp">Alamat *</label>
						      		<input type="text" class="form-control" id="alamat_ktp" placeholder="Isi disini ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="rt_rw">RT/RW *</label>
						      		<input type="text" class="form-control" id="rt_rw" placeholder="Isi disini ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="kelurahan">Keluarahan/Desa *</label>
						      		<input type="text" class="form-control" id="kelurahan" placeholder="Isi disini ...">
					    		</div>
				  			</div>

				  			<div class="form-row">
					    		<div class="form-group col-md-4">
						      		<label for="kecamatan">Kecamatan *</label>
						      		<input type="text" class="form-control" id="kecamatan" placeholder="Isi disini ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="kota">Kota *</label>
						      		<input type="text" class="form-control" id="kota" placeholder="Isi disini ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="prov">Provinsi *</label>
						      		<input type="text" class="form-control" id="prov" placeholder="Isi disini ...">
					    		</div>							  							    
				  			</div>				  	
				  			<br>

				  			<div class="judul-form">
				  				<h5>Alamat Tinggal *</h5>
				  			</div>
				  			<div class="form-row">
					    		<div class="form-group col-md-4">
						      		<label for="alamat_tinggal">Alamat *</label>
						      		<input type="text" class="form-control" id="alamat_tinggal" placeholder="Isi disini ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="rt_rw_tinggal">RT/RW *</label>
						      		<input type="text" class="form-control" id="rt_rw_tinggal" placeholder="Isi disini ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="kelurahan_tinggal">Keluarahan/Desa *</label>
						      		<input type="text" class="form-control" id="kelurahan_tinggal" placeholder="Isi disini ...">
					    		</div>
				  			</div>

				  			<div class="form-row">
					    		<div class="form-group col-md-4">
						      		<label for="kecamatan_tinggal">Kecamatan *</label>
						      		<input type="text" class="form-control" id="kecamatan_tinggal" placeholder="Isi disini ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="kota_tinggal">Kota *</label>
						      		<input type="text" class="form-control" id="kota_tinggal" placeholder="Isi disini ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="prov_tinggal">Provinsi *</label>
						      		<input type="text" class="form-control" id="prov_tinggal" placeholder="Isi disini ...">
					    		</div>							  							    
				  			</div>

				  			<div class="form-row">
					    		<div class="form-group col-md-4">
						      		<label for="no_hp">No. Telp/No. Hp *</label>
						      		<input type="text" class="form-control" id="no_hp" placeholder="Isi disini ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="email">E-mail *</label>
						      		<input type="email" class="form-control" id="email" placeholder="Isi disini ...">
					    		</div>	

					    		<div class="form-group col-md-4">
						      		<label for="agama">Agama *</label>
						      		<select class="form-control" id="agama" name="agama">
						               	<option value="">Pilih salah satu</option>
						                <option value="-">-</option>
						                <option value="islam">Islam</option>
						                <option value="kristen_protestan">Kristen Protestan</option>
						                <option value="kristen_katolik">Kristen Katolik</option>
						                <option value="hindu">Hindu</option>
						                <option value="buddha">Buddha</option>
						                <option value="konghucu">Konghucu</option>
						            </select>
					    		</div>						  							    
				  			</div>

				  			<div class="form-row">
					    		<div class="form-group col-md-6">
						      		<label for="tinggi_badan">Tinggi Badan *</label>
								      <div class="input-group">								        
								        <input type="text" class="form-control" id="tinggi_badan" placeholder="Isi disini ...">
								        <div class="input-group-prepend">
								          <div class="input-group-text">CM</div>
								        </div>
								      </div>
					    		</div>

					    		<div class="form-group col-md-6">
						      		<label for="berat_badan">Berat Badan *</label>
								      <div class="input-group">								        
								        <input type="text" class="form-control" id="berat_badan" placeholder="Isi disini ...">
								        <div class="input-group-prepend">
								          <div class="input-group-text">KG</div>
								        </div>
								      </div>
					    		</div>						  							    
				  			</div>
				  			
				  			<div class="form-row">	    		
					    		<div class="form-group col-md-12">
						      		<label for="status_kepemilikan">Status Kepemilikan Tempat Tinggal *</label>
						      		<select class="form-control" id="status_kepemilikan" name="status_kepemilikan">
						               	<option value="">Pilih salah satu</option>
						                <option value="orang_tua">Milik Orang Tua</option>
						                <option value="kost">Kost</option>
						                <option value="pribadi">Pribadi</option>
						            </select>
					    		</div>						  							    
				  			</div>

				  			<div class="form-row">
								<div class="form-group col-md-2">
								   	<div class="judul-attach">
								    	<p>Status Pernikahan * :</p>
								    </div>							      
								</div>

								<div class="form-group col-md-6">
									<div class="custom-control custom-radio custom-control-inline">
								    	<input type="radio" class="rad-nikah custom-control-input" id="rad1" name="rad-nikah" value="1">
								    	<label class="custom-control-label" for="rad1">Menikah</label>
								 	</div>
								  	<div class="custom-control custom-radio custom-control-inline">
								    	<input type="radio" class="rad-nikah custom-control-input" id="rad2" name="rad-nikah" value="2">
								    	<label class="custom-control-label" for="rad2">Belum Menikah</label>
								  	</div>					
								</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-12">					
			                   		<div id="form1" style="display:none">
			                   			<label for="golongan" class="control-label text-right m-b-10">Golongan *</label>
						          			<select class="form-control" id="golongan" name="golongan">
								               	<option value="">Pilih salah satu</option>
								                <option value="K0">K0 (Tanpa Tanggungan)</option>
								                <option value="K1">K1 (1 Tanggungan)</option>
								                <option value="K2">K2 (2 Tanggungan)</option>
								                <option value="K3">K3 (3 Tanggungan)</option>
								            </select>
									</div>
								</div>
							</div>  				

				  			<div class="judul-form">
				  				<h5>Posisi Diinginkan *</h5>
				  			</div>
				  			<div class="form-row">
					    		<div class="form-group col-md-12">
						      		<label for="posisi">Posisi *</label>
						      		<input type="text" class="form-control" id="posisi" placeholder="Isi disini ...">
					    		</div>					   				  							    
				  			</div>
						</form>
			  		</div>
			    </div>			  	
			</div>
		</div>

		<div class="container">
				<div class="card">
					<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#pendidikan">
						<h5>II. PENDIDIKAN</h5></button>
			  		<br>
			  		<div class="card-body">
			  			<form>
			  				<div id="pendidikan" class="collapse">
			  					<div class="judul-form">
					  				<h5>1. Pendidikan Formal *</h5>
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
									           <td align="center">1</td>
									           <td align="center">
									             	<select class="form-control" id="jenjang1" name="jenjang1">
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
										          	<input class="form-control" type="text" name="nama_sekolah1" placeholder="Isi disini...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="prog_studi1" placeholder="Isi disini...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun1" placeholder="Isi disini...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="nilai1" placeholder="Isi disini...">
										       	</td>
       											<td align="center">
										          	<input class="form-control" type="text" name="kota1" placeholder="Isi disini...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">2</td>
									           <td align="center">
									             	<select class="form-control" id="jenjang2" name="jenjang2">
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
										          	<input class="form-control" type="text" name="nama_sekolah2" placeholder="Isi disini...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="prog_studi2" placeholder="Isi disini...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun2" placeholder="Isi disini...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="nilai2" placeholder="Isi disini...">
										       	</td>
       											<td align="center">
										          	<input class="form-control" type="text" name="kota2" placeholder="Isi disini...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">3</td>
									           <td align="center">
									             	<select class="form-control" id="jenjang3" name="jenjang3">
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
										          	<input class="form-control" type="text" name="nama_sekolah3" placeholder="Isi disini...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="prog_studi3" placeholder="Isi disini...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun3" placeholder="Isi disini...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="nilai3" placeholder="Isi disini...">
										       	</td>
       											<td align="center">
										          	<input class="form-control" type="text" name="kota3" placeholder="Isi disini...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">4</td>
									           <td align="center">
									             	<select class="form-control" id="jenjang4" name="jenjang4">
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
										          	<input class="form-control" type="text" name="nama_sekolah4" placeholder="Isi disini...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="prog_studi4" placeholder="Isi disini...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun4" placeholder="Isi disini...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="nilai4" placeholder="Isi disini...">
										       	</td>
       											<td align="center">
										          	<input class="form-control" type="text" name="kota4" placeholder="Isi disini...">
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
										          	<input class="form-control" type="text" name="kursus1" placeholder="Isi disini...">
										       	</td>
         										<td align="center">
										          	<input class="form-control" type="text" name="lembaga1" placeholder="Isi disini...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="tempat1" placeholder="Isi disini...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun1" placeholder="Isi disini...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="skill1" placeholder="Isi disini...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">2</td>
									           <td align="center">
										          	<input class="form-control" type="text" name="kursus2" placeholder="Isi disini...">
										       	</td>
         										<td align="center">
										          	<input class="form-control" type="text" name="lembaga2" placeholder="Isi disini...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="tempat2" placeholder="Isi disini...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun2" placeholder="Isi disini...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="skill2" placeholder="Isi disini...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">3</td>
									           <td align="center">
										          	<input class="form-control" type="text" name="kursus3" placeholder="Isi disini...">
										       	</td>
         										<td align="center">
										          	<input class="form-control" type="text" name="lembaga3" placeholder="Isi disini...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="tempat3" placeholder="Isi disini...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun3" placeholder="Isi disini...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="skill3" placeholder="Isi disini...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">4</td>
									           <td align="center">
										          	<input class="form-control" type="text" name="kursus4" placeholder="Isi disini...">
										       	</td>
         										<td align="center">
										          	<input class="form-control" type="text" name="lembaga4" placeholder="Isi disini...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="tempat4" placeholder="Isi disini...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun4" placeholder="Isi disini...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="skill4" placeholder="Isi disini...">
										       	</td>
 											</tr>         									
										</tbody>
									</table>
								</div>
								<br>

								<div class="judul-form">
					  				<h5>3. File Dokumen (.pdf)</h5>
					  			</div>

					  			<div class="card card-upload">
					  				<div class="form-row">
									    <div class="form-group col-md-3">
									    	<div class="judul-attach">
									    		<p>Ijazah *</p>
									    	</div>							      
									    </div>
									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="ijazah" accept="" id="ijazah-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Pilih berkas</label>
											  </div>
											</form>
									    </div>
									</div>  

									<div class="form-row">
									    <div class="form-group col-md-3">
									    	<div class="judul-attach">
									    		<p>Transkrip Nilai *</p>
									    	</div>							      
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="transkrip" accept="" id="transkrip-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Pilih berkas</label>
											  </div>
											</form>
									    </div>
									</div>  

									<div class="form-row">
									    <div class="form-group col-md-3">
									    	<div class="judul-attach">
									    		<p>Surat Pengalaman Kerja</p>
									    	</div>							      
									    </div>
									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="spk1" accept="" id="spk1-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Pilih berkas</label>
											  </div>
											</form>
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="spk2" accept="" id="spk2-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Pilih berkas</label>
											  </div>
											</form>
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="spk3" accept="" id="spk3-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Pilih berkas</label>
											  </div>
											</form>
									    </div>									
									</div> 

									<div class="form-row">
									    <div class="form-group col-md-3">
									    	<div class="judul-attach">
									    		<p>Sertifikat Keahlian</p>
									    	</div>							      
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="sertif_keahlian1" accept="" id="sertif_keahlian1-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Pilih berkas</label>
											  </div>
											</form>
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="sertif_keahlian2" accept="" id="sertif_keahlian2-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Pilih berkas</label>
											  </div>
											</form>
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="sertif_keahlian3" accept="" id="sertif_keahlian3-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Pilih berkas</label>
											  </div>
											</form>
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
										       		<td align="center" style="width:5%">1</td>
										       		<td align="center">
										         		<select class="form-control" id="bahasa1" name="bahasa1">
										           			<option value="">Pilih Salah Satu</option>
										           			<option value="Indonesia">Indonesia</option>
										           			<option value="Inggris">Inggris</option>
										           			<option value="Jepang">Jepang</option>									     		
										        		</select>
										     		</td>
											     	<td>
											     		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="lisan_kurang1" name="lisan1" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="lisan_kurang1"></label>
														</div>	
											  		</td>
												  	<td>
												  		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="lisan_cukup1" name="lisan1" class="custom-control-input" value="cukup">
														  <label class="custom-control-label orange" for="lisan_cukup1"></label>
														</div>	
													</td>
													<td style="border-right: #ccc solid 1px">
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="lisan_baik1" name="lisan1" class="custom-control-input" value="baik">
														  <label class="custom-control-label green" for="lisan_baik1"></label>
														</div>	
													</td>
													<td>
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="tulis_kurang1" name="tulis1" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="tulis_kurang1"></label>
														</div>	
													</td>
													<td>
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="tulis_cukup1" name="tulis1" class="custom-control-input" value="cukup">
														  <label class="custom-control-label orange" for="tulis_cukup1"></label>
														</div>	
													</td>
													<td>
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="tulis_baik1" name="tulis1" class="custom-control-input" value="baik">
														  <label class="custom-control-label green" for="tulis_baik1"></label>
														</div>	
													</td>
												</tr>
											    <tr>
										       		<td align="center" style="width:5%">2</td>
										       		<td align="center">
										         		<select class="form-control" id="bahasa2" name="bahasa2">
										           			<option value="">Pilih Salah Satu</option>
										           			<option value="Indonesia">Indonesia</option>
										           			<option value="Inggris">Inggris</option>
										           			<option value="Jepang">Jepang</option>							     		
										        		</select>
										     		</td>
											     	<td>
											     		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="lisan_kurang2" name="lisan2" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="lisan_kurang2"></label>
														</div>	
											  		</td>
												  	<td>
												  		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="lisan_cukup2" name="lisan2" class="custom-control-input" value="cukup">
														  <label class="custom-control-label orange" for="lisan_cukup2"></label>
														</div>	
													</td>
													<td style="border-right: #ccc solid 1px">
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="lisan_baik2" name="lisan2" class="custom-control-input" value="baik">
														  <label class="custom-control-label green" for="lisan_baik2"></label>
														</div>	
													</td>
													<td>
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="tulis_kurang2" name="tulis2" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="tulis_kurang2"></label>
														</div>	
													</td>
													<td>
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="tulis_cukup2" name="tulis2" class="custom-control-input" value="cukup">
														  <label class="custom-control-label orange" for="tulis_cukup2"></label>
														</div>	
													</td>
													<td>
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="tulis_baik2" name="tulis2" class="custom-control-input" value="baik">
														  <label class="custom-control-label green" for="tulis_baik2"></label>
														</div>	
													</td>
												</tr>
											    <tr>
										       		<td align="center" style="width:5%">3</td>
										       		<td align="center">
										         		<select class="form-control" id="bahasa3" name="bahasa3">
										           			<option value="">Pilih Salah Satu</option>
										           			<option value="Indonesia">Indonesia</option>
										           			<option value="Inggris">Inggris</option>
										           			<option value="Jepang">Jepang</option>							     		
										        		</select>
										     		</td>
											     	<td>
											     		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="lisan_kurang3" name="lisan3" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="lisan_kurang3"></label>
														</div>	
											  		</td>
												  	<td>
												  		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="lisan_cukup3" name="lisan3" class="custom-control-input" value="cukup">
														  <label class="custom-control-label orange" for="lisan_cukup3"></label>
														</div>	
													</td>
													<td style="border-right: #ccc solid 1px">
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="lisan_baik3" name="lisan3" class="custom-control-input" value="baik">
														  <label class="custom-control-label green" for="lisan_baik3"></label>
														</div>	
													</td>
													<td>
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="tulis_kurang3" name="tulis3" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="tulis_kurang3"></label>
														</div>	
													</td>
													<td>
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="tulis_cukup3" name="tulis3" class="custom-control-input" value="cukup">
														  <label class="custom-control-label orange" for="tulis_cukup3"></label>
														</div>
													</td>
													<td>
														<div class="custom-control custom-radio text-center">
														  <input type="radio" id="tulis_baik3" name="tulis3" class="custom-control-input" value="baik">
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
           											<td align="center">1</td>
           											<td align="center">
             											<input type="text" name="keterampilan1" class="form-control" placeholder="Isi disini..."></textarea>
          											</td>
          											
											        <td>
											        	<div class="custom-control custom-radio text-center">
														  <input type="radio" id="kurang_keterampilan1" name="keterampilan1" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="kurang_keterampilan1"></label>
														</div>											            
											        </td>
         											<td>
         												<div class="custom-control custom-radio text-center">
														  <input type="radio" id="cukup_keterampilan1" name="keterampilan1" class="custom-control-input" value="cukup">
														  <label class="custom-control-label orange" for="cukup_keterampilan1"></label>
														</div>										          		
										     	 	</td>
											      	<td>
											      		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="baik_keterampilan1" name="keterampilan1" class="custom-control-input" value="baik">
														  <label class="custom-control-label green" for="baik_keterampilan1"></label>
														</div>											       		
											   		</td>
												   	<td>
												    	<div class="radio radio-success text-center">
												      		<input class="form-control" name="deskripsi1" type="text" placeholder="Isi disini...">
												   		</div>
													</td>
												</tr>

         										<tr>
           											<td align="center">2</td>
           											<td align="center">
             											<input type="text" name="keterampilan2" class="form-control" placeholder="Isi disini..."></textarea>
          											</td>
											        <td>
											        	<div class="custom-control custom-radio text-center">
														  <input type="radio" id="kurang_keterampilan2" name="keterampilan2" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="kurang_keterampilan2"></label>
														</div>	
											        </td>
         											<td>
         												<div class="custom-control custom-radio text-center">
														  <input type="radio" id="cukup_keterampilan2" name="keterampilan2" class="custom-control-input" value="cukup">
														  <label class="custom-control-label orange" for="cukup_keterampilan2"></label>
														</div>	
										     	 	</td>
											      	<td>
											      		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="baik_keterampilan2" name="keterampilan2" class="custom-control-input" value="baik">
														  <label class="custom-control-label green" for="baik_keterampilan2"></label>
														</div>	
											   		</td>
												   	<td>
												    	<div class="radio radio-success text-center">
												      		<input class="form-control" name="deskripsi2" type="text" placeholder="Isi disini...">
												   		</div>
													</td>
												</tr>

									         	<tr>
           											<td align="center">3</td>
           											<td align="center">
             											<input type="text" name="keterampilan3" class="form-control" placeholder="Isi disini..."></textarea>
          											</td>
											        <td>
											        	<div class="custom-control custom-radio text-center">
														  <input type="radio" id="kurang_keterampilan3" name="keterampilan3" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="kurang_keterampilan3"></label>
														</div>	
											        </td>
         											<td>
         												<div class="custom-control custom-radio text-center">
														  <input type="radio" id="cukup_keterampilan3" name="keterampilan3" class="custom-control-input" value="kurang">
														  <label class="custom-control-label orange" for="cukup_keterampilan3"></label>
														</div>	
										     	 	</td>
											      	<td>
											      		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="baik_keterampilan3" name="keterampilan3" class="custom-control-input" value="baik">
														  <label class="custom-control-label green" for="baik_keterampilan3"></label>
														</div>	
											   		</td>
												   	<td>
												    	<div class="radio radio-success text-center">
												      		<input class="form-control" name="deskripsi3" type="text" placeholder="Isi disini...">
												   		</div>
													</td>
												</tr>

									         	<tr>
           											<td align="center">4</td>
           											<td align="center">
             											<input type="text" name="keterampilan4" class="form-control" placeholder="Isi disini..."></textarea>
          											</td>
											        <td>
											        	<div class="custom-control custom-radio text-center">
														  <input type="radio" id="kurang_keterampilan4" name="keterampilan4" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="kurang_keterampilan4"></label>
														</div>
											        </td>
         											<td>
         												<div class="custom-control custom-radio text-center">
														  <input type="radio" id="cukup_keterampilan4" name="keterampilan4" class="custom-control-input" value="cukup">
														  <label class="custom-control-label orange" for="cukup_keterampilan4"></label>
														</div>	
										     	 	</td>
											      	<td>
											      		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="baik_keterampilan4" name="keterampilan4" class="custom-control-input" value="baik">
														  <label class="custom-control-label green" for="baik_keterampilan4"></label>
														</div>	
											   		</td>
												   	<td>
												    	<div class="radio radio-success text-center">
												      		<input class="form-control" name="deskripsi4" type="text" placeholder="Isi disini...">
												   		</div>
													</td>
												</tr>

									         	<tr>
           											<td align="center">5</td>
           											<td align="center">
             											<input type="text" name="keterampilan5" class="form-control" placeholder="Isi disini..."></textarea>
          											</td>
											        <td>
											        	<div class="custom-control custom-radio text-center">
														  <input type="radio" id="kurang_keterampilan5" name="keterampilan5" class="custom-control-input" value="kurang">
														  <label class="custom-control-label red" for="kurang_keterampilan5"></label>
														</div>	
											        </td>
         											<td>
         												<div class="custom-control custom-radio text-center">
														  <input type="radio" id="cukup_keterampilan5" name="keterampilan5" class="custom-control-input" value="cukup">
														  <label class="custom-control-label orange" for="cukup_keterampilan5"></label>
														</div>	
										     	 	</td>
											      	<td>
											      		<div class="custom-control custom-radio text-center">
														  <input type="radio" id="baik_keterampilan5" name="keterampilan5" class="custom-control-input" value="kurang">
														  <label class="custom-control-label green" for="baik_keterampilan5"></label>
														</div>	
											   		</td>
												   	<td>
												    	<div class="radio radio-success text-center">
												      		<input class="form-control" name="deskripsi5" type="text" placeholder="Isi disini...">
												   		</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>		
			  			</form>
			  		</div>					
				</div>
		</div>
	</div>

	<div class=" container">
			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#riwayat_pekerjaan">
					<h5>III. RIWAYAT PEKERJAAN</h5></button>
			  	<br>
			  	<div class="card-body">
			  		<form>
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
						      		<input type="text" class="form-control" id="nama_perusahaan" placeholder="Isi disini ...">
					    		</div>
							</div>  
							
							<div class="form-row">
								<div class="form-group col-md-2 title-company">
						      		<label for="nama_perusahaan">Bidang Usaha</label>
					    		</div>
					    		<div class="form-group col-md-10">
						      		<input type="text" class="form-control" id="bidang_usaha" placeholder="Isi disini ...">
					    		</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-2 title-company">
						      		<label for="lokasi">Lokasi/Kota</label>
					    		</div>
					    		<div class="form-group col-md-10">
						      		<input type="text" class="form-control" id="lokasi" placeholder="Isi disini ...">
					    		</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-2 title-company">
						      		<label for="jabatan">Jabatan</label>
					    		</div>
					    		<div class="form-group col-md-10">
						      		<input type="text" class="form-control" id="jabatan" placeholder="Isi disini ...">
					    		</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-2 title-company">
									<label for="waktu">... s/d ...</label>
								</div>
								<div class="form-group col-md-5">
									<div class="input-group date">
										<input id="tgl_mulai" placeholder=" Isi tanggal awal ..." type="text" class="form-control datepickerTanggalAwal" name="tgl_awal">
										<span class="input-group-append">
						                <button class="btn btn-outline-secondary border-left-0 border" type="button">
						                    <i class="fa fa-calendar addingCalendarAwal"></i>
						                </button>
						            </span>
									</div>

								</div>

								<div class="form-group col-md-5">
									<div class="input-group date">
										<input id="tgl_akhir" placeholder=" Isi tanggal akhir ..." type="text" class="form-control datepickerTanggalAkhir" name="tgl_akhir">
										<span class="input-group-append">
						                <button class="btn btn-outline-secondary border-left-0 border" type="button">
						                    <i class="fa fa-calendar addingCalendarAkhir"></i>
						                </button>
						            </span>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-2 title-company">
						      		<label for="gaji">Gaji</label>
					    		</div>
					    		<div class="form-group col-md-10">
						      		<input type="text" class="form-control" id="gaji" placeholder="Isi disini ...">
					    		</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-2 title-company">
						      		<label for="alasan">Alasan Berhenti</label>
					    		</div>
					    		<div class="form-group col-md-10">
						      		<textarea type="text" class="form-control" id="alasan" placeholder="Isi disini ..."></textarea> 
					    		</div>
							</div>
						</div>
					</form>
		
			  	</div>
			</div>
		</div>

		<div class=" container">
			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#minat_konsep">
					<h5>III. MINAT DAN KONSEP PRIBADI</h5></button>
			  	<br>
			  	<div class="card-body">
			  		<form>
			  			<div id="minat_konsep" class="collapse">

			  				<div class="form-row">
								<div class="form-group col-md-12">
						      		<label for="nama">1. Mengapa anda ingin bekerja di Perusahaan kami *</label>
						      		<textarea type="text" class="form-control" id="nama" placeholder="Isi disini ..."></textarea> 
					    		</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-12">
						      		<label for="nama">2. Sebutkan fasilitas yang anda harapkan *</label>
						      		<textarea type="text" class="form-control" id="nama" placeholder="Isi disini ..."></textarea> 
					    		</div>
							</div>  
							
							<div class="form-row">
								<div class="form-group col-md-12">
						      		<label for="nama">3. Kapan anda sudah bisa mulai bekerja *</label>
						      		<input type="text" class="form-control" id="nama" placeholder="Isi disini ..."></input> 
					    		</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-4">
									<div class="judul-attach">
								    	<p>4. Adakah kenalan di Perusahaan kami *</p>
								    </div>	
					    		</div>

								<div class="form-group col-md-8">	
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad-kenalan custom-control-input" id="rad3" name="rad-kenalan" value="3">
									    	<label class="custom-control-label" for="rad3">Ada</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad-kenalan custom-control-input" id="rad4" name="rad-kenalan" value="4">
									    <label class="custom-control-label" for="rad4">Tidak Ada</label>
									</div>					
								</div>
							</div> 

							<div class="form-row">								
								<div class="form-group col-md-12">					
			                   		<div id="form_kenalan1" style="display:none;margin-top: -20px;">
			                   			<label for="ada_kenalan">Jika ada, sebutkan :</label>
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
											             	<input class="form-control" type="text" name="nama_kenalan1" placeholder="Isi disini...">
		         										</td>
		         										<td align="center">
												          	<input class="form-control" type="text" name="jabatan_kenalan1" placeholder="Isi disini...">
												       	</td>
												       	<td align="center">
												          	<input class="form-control" type="text" name="bagian_kenalan1" placeholder="Isi disini...">
												      	</td>
												       		<td align="center">
												          	<input class="form-control" type="text" name="hubungan_kenalan1" placeholder="Isi disini...">
												      	</td>												       	
		 											</tr>

		         									<tr>
											           <td align="center">2</td>
											           <td align="center">
											             	<input class="form-control" type="text" name="nama_kenalan2" placeholder="Isi disini...">
		         										</td>
		         										<td align="center">
												          	<input class="form-control" type="text" name="jabatan_kenalan2" placeholder="Isi disini...">
												       	</td>
												       	<td align="center">
												          	<input class="form-control" type="text" name="bagian_kenalan2" placeholder="Isi disini...">
												      	</td>
												       		<td align="center">
												          	<input class="form-control" type="text" name="hubungan_kenalan2" placeholder="Isi disini...">
												      	</td>												       	
		 											</tr>		         									
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>  
							
						</div>
					</form>
		
			  	</div>
			</div>
		</div>

		<div class=" container">
			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#kelebihan_kekurangan">
					<h5>IV. KELEBIHAN DAN KEKURANGAN</h5></button>
			  	<br>
			  	<div class="card-body">
			  		<form>
			  			<div id="kelebihan_kekurangan" class="collapse">
			  				<div class="form-row">
								<div class="form-group col-md-12">
						      		<label for="kelebihan">1. Sebutkan hal-hal yang menjadi kelebihan dalam diri anda *</label>
						      		<textarea type="text" class="form-control" id="kelebihan" placeholder="Isi disini ..."></textarea> 
					    		</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-12">
						      		<label for="kekurangan">2. Sebutkan hal-hal yang menjadi kelemahan dalam diri anda *</label>
						      		<textarea type="text" class="form-control" id="kekurangan" placeholder="Isi disini ..."></textarea> 
					    		</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-6">
									<div class="judul-attach">
								    	<p>3. Apakah anda pernah menderita sakit yang lama sembuh *</p>
								    </div>	
					    		</div>

								<div class="form-group col-md-6">
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad-sakit custom-control-input" id="rad5" name="rad-sakit" value="5">
									    <label class="custom-control-label" for="rad5">Pernah</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad-sakit custom-control-input" id="rad6" name="rad-sakit" value="6">
									    <label class="custom-control-label" for="rad6">Tidak</label>
									</div>						
								</div>
							</div> 

							<div class="form-row">
								<div class="form-group col-md-12">					
				                   	<div id="form_sakit1" style="display:none">
				                   		<label for="form_sakit1">Jika pernah, sebutkan :</label>			                   			
				                   		<textarea type="text" class="form-control" id="form_sakit" placeholder="Isi disini ..."></textarea>		
									</div>
								</div>
							</div>  

							<div class="form-row buta-warna">
								<div class="form-group col-md-3">
								    <p>4. Apakah anda buta warna *</p>
					    		</div>

								<div class="form-group col-md-9">
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad custom-control-input" id="rad7" name="rad" value="7">
									    <label class="custom-control-label" for="rad7">Ya</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad custom-control-input" id="rad8" name="rad" value="8">
									    <label class="custom-control-label" for="rad8">Tidak</label>
									</div>						
								</div>
							</div>
						</div>
					</form>
		
			  	</div>
			</div>
		</div>

		<div class="container">
			<div class="custom-control custom-checkbox">
			  	<input type="checkbox" class="custom-control-input" id="customCheck1">
			  	<label class="custom-control-label" for="customCheck1">Dengan ini saya menyatakan bahwa biodata pelamar ini saya isi dengan sebenar-benarnya, bila dikemudian hari ternyata terdapat ketidaksesuaian, maka saya bersedia untuk digagalkan.</label>
			</div>
			
			<div class="custom-control custom-checkbox">
			  	<input type="checkbox" class="custom-control-input" id="customCheck2">
			  	<label class="custom-control-label" for="customCheck2">Dengan ini saya menyatakan bahwa belum pernah bekerja sebagai karyawan PT Padma Soode Indonesia atau perusahaan lain dibawah Soode Group.</label>
			</div>

			<div class="catatan2">
				<p>*) Wajib di isi</p>
			</div>

			<div class="catatan">
				<p>*catatan : Selama proses seleksi berlangsung tidak dipungut biaya atau gratis, semua biaya proses seleksi ditanggung oleh pihak perusahaan.</p>
			</div>
			
			<div class="col-sm12 d-flex justify-content-center">
				<a href="<?php echo base_url('recruitment_form')?>" class="btn custom-btn">Submit</a>
			</div>
			
		</div>
		  
</section>

<!-- tambahan jquery-->
<script type="text/javascript">
	$(function(){
		$(":radio.rad-nikah").click(function(){
		$("#form1, #form2").hide()
			if($(this).val() == "1"){
				$("#form1").show();
			}else{
				$("#form2").show();
			}
		});
	});
</script>

<script type="text/javascript">
	$(function(){
		$(":radio.rad-kenalan").click(function(){
		$("#form_kenalan1, #form_kenalan2").hide()
			if($(this).val() == "3"){
				$("#form_kenalan1").show();
			}else{
				$("#form_kenalan2").show();
			}
		});
	});
</script>

<script type="text/javascript">
	$(function(){
		$(":radio.rad-sakit").click(function(){
		$("#form_sakit1, #form_sakit2").hide()
			if($(this).val() == "5"){
				$("#form_sakit1").show();
			}else{
				$("#form_sakit2").show();
			}
		});
	});
</script>


<script>
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<!-- Input Image -->
<script>
	$(".custom-file-input").on("change", function() {
  		var fileName = $(this).val().split("\\").pop();
  		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});
</script>

<!-- Date Tanggal Lahir -->
<script type="text/javascript">
  $('.datepickerLahir').datepicker({
        format: 'dd-M-yyyy',
        todayHighlight: true,
        todayHighlight: true,
    });

   $('.addingCalendarLahir').on("click", function(e){
    console.log("clicked");
        $('.datepickerLahir').focus();
    });
 </script>

<!-- Date Awal -->
<script type="text/javascript">
   $(function(){
     $(".datepickerTanggalAwal").datepicker({
        format: 'dd-M-yyyy',
        todayHighlight: true,
        todayHighlight: true,
    });

    $('.addingCalendarAwal').on("click", function(e){
    console.log("clicked");
        $('.datepickerTanggalAwal').focus();
    });

    $("#tgl_mulai").on('changeDate', function(selected) {
        var startDate = new Date(selected.date.valueOf());
        $("#tgl_akhir").datepicker('setStartDate', startDate);
        if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
          $("#tgl_akhir").val($("#tgl_mulai").val());
        }
    });
 });
</script>

<!-- Date Akhir -->
<script type="text/javascript">
   $(function(){
     $(".datepickerTanggalAkhir").datepicker({
        format: 'dd-M-yyyy',
        todayHighlight: true,
        todayHighlight: true,
    });

    $('.addingCalendarAkhir').on("click", function(e){
    console.log("clicked");
        $('.datepickerTanggalAkhir').focus();
    });

    $("#tgl_mulai").on('changeDate', function(selected) {
        var startDate = new Date(selected.date.valueOf());
        $("#tgl_akhir").datepicker('setStartDate', startDate);
        if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
          $("#tgl_akhir").val($("#tgl_mulai").val());
        }
    });
 });
</script>

<!-- Tooltips -->
<script type="text/javascript">
	$(function () {
	  $('[data-tooltip="true"]').tooltip()
	})
</script>
