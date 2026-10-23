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
	                <label for="">Photo *</label>
	                <div class="card card-img">
	                	<img id="foto" src="#" alt="Upload your image ..." />   
	               	</div>
	               	<div class="custom-file">
				    	<input type="file" class="custom-file-input" onchange="readURL(this);">
				    	<label class="custom-file-label" for="customFile">Choose file</label>
				  	</div>                            
				</div>
			</form>
			
			<div class="container">
				<div class="card">
					<button type="button" class="btn btn-info" data-toggle="collapse.show" data-target="#identitas">
						<h5>I. IDENTITY</h5></button>
			  		<br>
			  		<div class="card-body">
			  			<form>
			  				<div id="identitas" class="collapse.show">
							<div class="form-row">
					    		<div class="form-group col-md-6">
						      		<label for="nama">Full Name *</label>
						      		<input type="text" class="form-control" id="nama" placeholder="Fill in here ...">
					    		</div>

							    <div class="form-group col-md-3">
							      	<label for="jenis_kelamin" class="control-label text-right m-b-10">Gender *</label>
						          	<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
						            	<option value="">-Select one-</option>
						                <option value="Laki - Laki">Male</option>
						                <option value="Perempuan">Female</option>
						            </select>
							    </div>

							    <div class="form-group col-md-3">
							      	<label for="golongan_darah" class="control-label text-right m-b-10">Blood Type *</label>
						          	<select class="form-control" id="golongan_darah" name="golongan_darah">
						               	<option value="">-Select one-</option>
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
							      <label for="tempat_lahir">Place of Birth *</label>
							      <input type="text" class="form-control" id="tempat_lahir" placeholder="Fill in here ...">
							    </div>

							    <div class="form-group col-md-6">
						            <label>Date of Birth *</label>
						            <div class="form-row">
						            	<div class="input-group col-md-12">
							            	<input type="text"  name="tanggal" placeholder="Fill in here ..."  class="form-control datepickerLahir" required/>
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
							      <label for="no_ktp">Identity Number *</label>
							      <input type="text" class="form-control" id="no_ktp" placeholder="Fill in here ...">
							    </div>

							    <div class="form-group col-md-6">
						          	<label for="no_npwp">NPWP Number</label>
							      <input type="text" class="form-control" id="no_npwp" placeholder="Fill in here ...">
							    </div>
							</div> 
							<br>

							<div class="judul-form">
								<h5>Address *</h5> 
							</div>
							<div class="form-row">
					    		<div class="form-group col-md-4">
						      		<label for="alamat_ktp">Adress *</label>
						      		<input type="text" class="form-control" id="alamat_ktp" placeholder="Fill in here ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="rt_rw">RT/RW *</label>
						      		<input type="text" class="form-control" id="rt_rw" placeholder="Fill in here ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="kelurahan">Sub-district *</label>
						      		<input type="text" class="form-control" id="kelurahan" placeholder="Fill in here ...">
					    		</div>
				  			</div>

				  			<div class="form-row">
					    		<div class="form-group col-md-4">
						      		<label for="kecamatan">District *</label>
						      		<input type="text" class="form-control" id="kecamatan" placeholder="Fill in here ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="kota">City *</label>
						      		<input type="text" class="form-control" id="kota" placeholder="Fill in here ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="prov">Province *</label>
						      		<input type="text" class="form-control" id="prov" placeholder="Fill in here ...">
					    		</div>							  							    
				  			</div>				  	
				  			<br>

				  			<div class="judul-form">
				  				<h5>Current Address *</h5>
				  			</div>
				  			<div class="form-row">
					    		<div class="form-group col-md-4">
						      		<label for="alamat_tinggal">Address *</label>
						      		<input type="text" class="form-control" id="alamat_tinggal" placeholder="Fill in here ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="rt_rw_tinggal">RT/RW *</label>
						      		<input type="text" class="form-control" id="rt_rw_tinggal" placeholder="Fill in here ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="kelurahan_tinggal">Sub-district *</label>
						      		<input type="text" class="form-control" id="kelurahan_tinggal" placeholder="Fill in here ...">
					    		</div>
				  			</div>

				  			<div class="form-row">
					    		<div class="form-group col-md-4">
						      		<label for="kecamatan_tinggal">District *</label>
						      		<input type="text" class="form-control" id="kecamatan_tinggal" placeholder="Fill in here ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="kota_tinggal">City *</label>
						      		<input type="text" class="form-control" id="kota_tinggal" placeholder="Fill in here ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="prov_tinggal">Province *</label>
						      		<input type="text" class="form-control" id="prov_tinggal" placeholder="Fill in here ...">
					    		</div>							  							    
				  			</div>

				  			<div class="form-row">
					    		<div class="form-group col-md-4">
						      		<label for="no_hp">Mobile Number *</label>
						      		<input type="text" class="form-control" id="no_hp" placeholder="Fill in here ...">
					    		</div>

					    		<div class="form-group col-md-4">
						      		<label for="email">E-mail *</label>
						      		<input type="email" class="form-control" id="email" placeholder="Fill in here ...">
					    		</div>	

					    		<div class="form-group col-md-4">
						      		<label for="agama">Religion *</label>
						      		<select class="form-control" id="agama" name="agama">
						               	<option value="">-Select one-</option>
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
						      		<label for="tinggi_badan">Height *</label>
								      <div class="input-group">								        
								        <input type="text" class="form-control" id="tinggi_badan" placeholder="Fill in here ...">
								        <div class="input-group-prepend">
								          <div class="input-group-text">CM</div>
								        </div>
								      </div>
					    		</div>

					    		<div class="form-group col-md-6">
						      		<label for="berat_badan">Weight *</label>
								      <div class="input-group">								        
								        <input type="text" class="form-control" id="berat_badan" placeholder="Fill in here ...">
								        <div class="input-group-prepend">
								          <div class="input-group-text">KG</div>
								        </div>
								      </div>
					    		</div>						  							    
				  			</div>
				  			
				  			<div class="form-row">	    		
					    		<div class="form-group col-md-12">
						      		<label for="status_kepemilikan">Residence Status *</label>
						      		<select class="form-control" id="status_kepemilikan" name="status_kepemilikan">
						               	<option value="">-Select one-</option>
						                <option value="orang_tua">Parental Property</option>
						                <option value="kost">Boarding House</option>
						                <option value="pribadi">One's own</option>
						            </select>
					    		</div>						  							    
				  			</div>

				  			<div class="form-row">
								<div class="form-group col-md-2">
								   	<div class="judul-attach">
								    	<p>Marital Status * :</p>
								    </div>							      
								</div>

								<div class="form-group col-md-6">
									<div class="custom-control custom-radio custom-control-inline">
								    	<input type="radio" class="rad-nikah custom-control-input" id="rad1" name="rad-nikah" value="1">
								    	<label class="custom-control-label" for="rad1">Married</label>
								 	</div>
								  	<div class="custom-control custom-radio custom-control-inline">
								    	<input type="radio" class="rad-nikah custom-control-input" id="rad2" name="rad-nikah" value="2">
								    	<label class="custom-control-label" for="rad2">Single</label>
								  	</div>					
								</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-12">					
			                   		<div id="form1" style="display:none">
			                   			<label for="golongan" class="control-label text-right m-b-10">Class *</label>
						          			<select class="form-control" id="golongan" name="golongan">
								               	<option value="">-Select one-</option>
								                <option value="K0">K0 (Without Dependents)</option>
								                <option value="K1">K1 (1 Dependents)</option>
								                <option value="K2">K2 (2 Dependents)</option>
								                <option value="K3">K3 (3 Dependents)</option>
								            </select>
									</div>
								</div>
							</div>  				

				  			<div class="judul-form">
				  				<h5>Position *</h5>
				  			</div>
				  			<div class="form-row">
					    		<div class="form-group col-md-6">
						      		<label for="posisi">Position *</label>
						      		<input type="text" class="form-control" id="posisi" placeholder="Fill in here ...">
					    		</div>

					    		<div class="form-group col-md-6">
						      		<label for="gaji">Salary *</label>
						      		<input type="number" class="form-control" id="gaji" placeholder="Fill in here ... (Ex : 5000000)">
					    		</div>						  							    
				  			</div>
						</form>
			  		</div>
			    </div>			  	
			</div>
		</div>

		<div class="container">
				<div class="card">
					<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Click here" data-target="#pendidikan">
						<h5>II. EDUCATION</h5></button>
			  		<br>
			  		<div class="card-body">
			  			<form>
			  				<div id="pendidikan" class="collapse">
			  					<div class="judul-form">
					  				<h5>1. Formal Education *</h5>
					  			</div>
			  					<div class="table-responsive ">
							    	<table class="table table-bordered table-hover">
							       		<thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
							         		<tr>
									           <th class="text-center">No.</th>
									           <th class="text-center">Level</th>
									           <th class="text-center">Name</th>
									           <th class="text-center">Major</th>
									           <th class="text-center">Year</th>
									           <th class="text-center">GPA/Final Score</th>
									           <th class="text-center">City</th>
							        		</tr>
							     		</thead>

		    	 						<tbody>
               								<tr>
									           <td align="center">1</td>
									           <td align="center">
									             	<select class="form-control" id="jenjang1" name="jenjang1">
										               <option value="">-Select one-</option>
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
										          	<input class="form-control" type="text" name="nama_sekolah1" placeholder="Fil in here ...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="prog_studi1" placeholder="Fil in here ...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun1" placeholder="Fil in here ...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="nilai1" placeholder="Fil in here ...">
										       	</td>
       											<td align="center">
										          	<input class="form-control" type="text" name="kota1" placeholder="Fil in here ...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">2</td>
									           <td align="center">
									             	<select class="form-control" id="jenjang2" name="jenjang2">
										               <option value="">-Select one-</option>
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
										          	<input class="form-control" type="text" name="nama_sekolah2" placeholder="Fil in here ...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="prog_studi2" placeholder="Fil in here ...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun2" placeholder="Fil in here ...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="nilai2" placeholder="Fil in here ...">
										       	</td>
       											<td align="center">
										          	<input class="form-control" type="text" name="kota2" placeholder="Fil in here ...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">3</td>
									           <td align="center">
									             	<select class="form-control" id="jenjang3" name="jenjang3">
										               <option value="">-Select one-</option>
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
										          	<input class="form-control" type="text" name="nama_sekolah3" placeholder="Fil in here ...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="prog_studi3" placeholder="Fil in here ...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun3" placeholder="Fil in here ...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="nilai3" placeholder="Fil in here ...">
										       	</td>
       											<td align="center">
										          	<input class="form-control" type="text" name="kota3" placeholder="Fil in here ...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">4</td>
									           <td align="center">
									             	<select class="form-control" id="jenjang4" name="jenjang4">
										               <option value="">-Select one-</option>
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
										          	<input class="form-control" type="text" name="nama_sekolah4" placeholder="Fil in here ...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="prog_studi4" placeholder="Fil in here ...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun4" placeholder="Fil in here ...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="nilai4" placeholder="Fil in here ...">
										       	</td>
       											<td align="center">
										          	<input class="form-control" type="text" name="kota4" placeholder="Fil in here ...">
										       	</td>
 											</tr>         									
										</tbody>
									</table>
								</div>
								<br>

								<div class="judul-form">
					  				<h5>2. Non-Formal Education (Certified)</h5>
					  			</div>
			  					<div class="table-responsive ">
							    	<table class="table table-bordered table-hover">
							       		<thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
							         		<tr>
									           <th class="text-center align-middle">No.</th>
									           <th class="text-center align-middle">Training Name</th>
									           <th class="text-center align-middle">Institution</th>
									           <th class="text-center align-middle">City</th>
									           <th class="text-center align-middle">Year</th>
									           <th class="text-center align-middle">Skills Obtained</th>
							        		</tr>
							     		</thead>

		    	 						<tbody>
               								<tr>
									           <td align="center">1</td>
									           <td align="center">
										          	<input class="form-control" type="text" name="kursus1" placeholder="Fil in here ...">
										       	</td>
         										<td align="center">
										          	<input class="form-control" type="text" name="lembaga1" placeholder="Fil in here ...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="tempat1" placeholder="Fil in here ...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun1" placeholder="Fil in here ...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="skill1" placeholder="Fil in here ...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">2</td>
									           <td align="center">
										          	<input class="form-control" type="text" name="kursus2" placeholder="Fil in here ...">
										       	</td>
         										<td align="center">
										          	<input class="form-control" type="text" name="lembaga2" placeholder="Fil in here ...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="tempat2" placeholder="Fil in here ...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun2" placeholder="Fil in here ...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="skill2" placeholder="Fil in here ...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">3</td>
									           <td align="center">
										          	<input class="form-control" type="text" name="kursus3" placeholder="Fil in here ...">
										       	</td>
         										<td align="center">
										          	<input class="form-control" type="text" name="lembaga3" placeholder="Fil in here ...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="tempat3" placeholder="Fil in here ...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun3" placeholder="Fil in here ...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="skill3" placeholder="Fil in here ...">
										       	</td>
 											</tr>

         									<tr>
									           <td align="center">4</td>
									           <td align="center">
										          	<input class="form-control" type="text" name="kursus4" placeholder="Fil in here ...">
										       	</td>
         										<td align="center">
										          	<input class="form-control" type="text" name="lembaga4" placeholder="Fil in here ...">
										       	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="tempat4" placeholder="Isi disini...">
										      	</td>
										       		<td align="center">
										          	<input class="form-control" type="text" name="tahun4" placeholder="Fil in here ...">
										      	</td>
										       	<td align="center">
										          	<input class="form-control" type="text" name="skill4" placeholder="Fil in here ...">
										       	</td>
 											</tr>         									
										</tbody>
									</table>
								</div>
								<br>

								<div class="judul-form">
					  				<h5>3. File Document (.pdf)</h5>
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
											    <label class="custom-file-label" for="customFile">Choose file</label>
											  </div>
											</form>
									    </div>
									</div>  

									<div class="form-row">
									    <div class="form-group col-md-3">
									    	<div class="judul-attach">
									    		<p>Transcript Value / Final Score *</p>
									    	</div>							      
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="transkrip" accept="" id="transkrip-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											  </div>
											</form>
									    </div>
									</div>  

									<div class="form-row">
									    <div class="form-group col-md-3">
									    	<div class="judul-attach">
									    		<p>Work Experience Certificate</p>
									    	</div>							      
									    </div>
									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="spk1" accept="" id="spk1-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											  </div>
											</form>
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="spk2" accept="" id="spk2-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											  </div>
											</form>
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="spk3" accept="" id="spk3-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											  </div>
											</form>
									    </div>									
									</div> 

									<div class="form-row">
									    <div class="form-group col-md-3">
									    	<div class="judul-attach">
									    		<p>Expertise Certificate</p>
									    	</div>							      
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="sertif_keahlian1" accept="" id="sertif_keahlian1-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											  </div>
											</form>
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="sertif_keahlian2" accept="" id="sertif_keahlian2-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											  </div>
											</form>
									    </div>

									    <div class="col-md-3">
									    	<form>
											  <div class="custom-file">
											    <input type="file" name="sertif_keahlian3" accept="" id="sertif_keahlian3-upload" class="custom-file-input">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											  </div>
											</form>
									    </div>								
									</div>  
					  			</div>
								<br>
								<br>

								<div class="judul-form">
									<h5>4. Language</h5>
								</div> 
									<div class="table-responsive m-b-30 p-r-20">
  										<table id="mainTable" class="table table-bordered table-hover">
    										<thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
										    	<tr>
										        	<th class="text-center" rowspan="2" style="vertical-align: middle;font-weight: bold">No.</th>
										        	<th class="text-center" rowspan="2" style="vertical-align: middle;font-weight: bold;width: 50%">Language</th>
										        	<th class="text-center" colspan="3" style="font-weight: bold;width: 10%!important;">Verbal</th>
										        	<th class="text-center" colspan="3" style="font-weight: bold;width: 10%!important">Written</th>
										     	</tr>
										     	<tr>
										        	<th class="text-center" style="padding: 15px 37px;">Deficient</th>
										        	<th class="text-center" style="padding: 15px 37px;">Fair</th>
										        	<th class="text-center" style="padding: 15px 37px;border-right: #ccc solid 1px">Good</th>
										        	<th class="text-center" style="padding: 15px 37px;">Deficient</th>
										        	<th class="text-center" style="padding: 15px 37px;">Fair</th>
										        	<th class="text-center" style="padding: 15px 37px;">Good</th>
										     	</tr>
  											</thead>

  											<tbody>
        										<tr>
										       		<td align="center" style="width:5%">1</td>
										       		<td align="center">
										         		<select class="form-control" id="bahasa1" name="bahasa1">
										           			<option value="">-Select one-</option>
										           			<option value="Indonesia">Indonesia</option>
										           			<option value="Inggris">English</option>
										           			<option value="Jepang">Japan</option>									     		
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
										           			<option value="">-Select one-</option>
										           			<option value="Indonesia">Indonesia</option>
										           			<option value="Inggris">English</option>
										           			<option value="Jepang">Japan</option>							     		
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
										           			<option value="">-Select one-</option>
										           			<option value="Indonesia">Indonesia</option>
										           			<option value="Inggris">English</option>
										           			<option value="Jepang">Japan</option>						     		
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
										<h5>5. Skill</h5>
									</div>
									<div class="table-responsive m-b-30 p-r-20">
								      	<table id="mainTable" class="table table-bordered table-hover">
								        	<thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
								          		<tr>
										            <th class="text-center align-middle">No.</th>
										            <th class="text-center align-middle">Skill</th>
										            <th class="text-center align-middle">Deficient</th>
										            <th class="text-center align-middle">Fair</th>
										            <th class="text-center align-middle">Good</th>
										            <th class="text-center align-middle">Skill Description</th>
										        </tr>
								      		</thead>
								      		<tbody>
                								<tr>
           											<td align="center">1</td>
           											<td align="center">
             											<input type="text" name="keterampilan1" class="form-control" placeholder="Fill in here ..."></textarea>
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
												      		<input class="form-control" name="deskripsi1" type="text" placeholder="Fill in here ...">
												   		</div>
													</td>
												</tr>

         										<tr>
           											<td align="center">2</td>
           											<td align="center">
             											<input type="text" name="keterampilan2" class="form-control" placeholder="Fill in here ..."></textarea>
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
												      		<input class="form-control" name="deskripsi2" type="text" placeholder="Fill in here ...">
												   		</div>
													</td>
												</tr>

									         	<tr>
           											<td align="center">3</td>
           											<td align="center">
             											<input type="text" name="keterampilan3" class="form-control" placeholder="Fill in here ..."></textarea>
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
												      		<input class="form-control" name="deskripsi3" type="text" placeholder="Fill in here ...">
												   		</div>
													</td>
												</tr>

									         	<tr>
           											<td align="center">4</td>
           											<td align="center">
             											<input type="text" name="keterampilan4" class="form-control" placeholder="Fill in here ..."></textarea>
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
												      		<input class="form-control" name="deskripsi4" type="text" placeholder="Fill in here ...">
												   		</div>
													</td>
												</tr>

									         	<tr>
           											<td align="center">5</td>
           											<td align="center">
             											<input type="text" name="keterampilan5" class="form-control" placeholder="Fill in here ..."></textarea>
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
												      		<input class="form-control" name="deskripsi5" type="text" placeholder="Fill in here ...">
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
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Click here" data-target="#riwayat_pekerjaan">
					<h5>III. WORK EXPERIENCE</h5></button>
			  	<br>
			  	<div class="card-body">
			  		<form>
			  			<div id="riwayat_pekerjaan" class="collapse">
			  				<div class="judul-form">
									<h5>Recent Work Experience</h5>
									<br>
								</div> 

			  				<div class="form-row">
								<div class="form-group col-md-2 title-company">
						      		<label for="nama_perusahaan">Company Name</label>
					    		</div>
					    		<div class="form-group col-md-10 title-company">
						      		<input type="text" class="form-control" id="nama_perusahaan" placeholder="Fill in here ...">
					    		</div>
							</div>  
							
							<div class="form-row">
								<div class="form-group col-md-2 title-company">
						      		<label for="nama_perusahaan">Business Fields</label>
					    		</div>
					    		<div class="form-group col-md-10">
						      		<input type="text" class="form-control" id="bidang_usaha" placeholder="Fill in here ...">
					    		</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-2 title-company">
						      		<label for="lokasi">City</label>
					    		</div>
					    		<div class="form-group col-md-10">
						      		<input type="text" class="form-control" id="lokasi" placeholder="Fill in here ...">
					    		</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-2 title-company">
						      		<label for="jabatan">Position</label>
					    		</div>
					    		<div class="form-group col-md-10">
						      		<input type="text" class="form-control" id="jabatan" placeholder="Fill in here ...">
					    		</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-2 title-company">
									<label for="waktu">... s/d ...</label>
								</div>
								<div class="form-group col-md-5">
									<div class="input-group date">
										<input id="tgl_mulai" placeholder="Starting date ..." type="text" class="form-control datepickerTanggalAwal" name="tgl_awal">
										<span class="input-group-append">
						                <button class="btn btn-outline-secondary border-left-0 border" type="button">
						                    <i class="fa fa-calendar addingCalendarAwal"></i>
						                </button>
						            </span>
									</div>

								</div>

								<div class="form-group col-md-5">
									<div class="input-group date">
										<input id="tgl_akhir" placeholder="End date ..." type="text" class="form-control datepickerTanggalAkhir" name="tgl_akhir">
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
						      		<label for="gaji">Salary</label>
					    		</div>
					    		<div class="form-group col-md-10">
						      		<input type="text" class="form-control" id="gaji" placeholder="Fill in here ...">
					    		</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-2 title-company">
						      		<label for="alasan">Reason to Stop</label>
					    		</div>
					    		<div class="form-group col-md-10">
						      		<textarea type="text" class="form-control" id="alasan" placeholder="Fill in here ..."></textarea> 
					    		</div>
							</div>
						</div>
					</form>
		
			  	</div>
			</div>
		</div>

		<div class=" container">
			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Click here" data-target="#minat_konsep">
					<h5>III. PERSONAL INTEREST</h5></button>
			  	<br>
			  	<div class="card-body">
			  		<form>
			  			<div id="minat_konsep" class="collapse">

			  				<div class="form-row">
								<div class="form-group col-md-12">
						      		<label for="nama">1. Why do you want to work for our company *</label>
						      		<textarea type="text" class="form-control" id="nama" placeholder="Fill in here ..."></textarea> 
					    		</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-12">
						      		<label for="nama">2. State the facilites you expect *</label>
						      		<textarea type="text" class="form-control" id="nama" placeholder="Fill in here ..."></textarea> 
					    		</div>
							</div>  
							
							<div class="form-row">
								<div class="form-group col-md-12">
						      		<label for="nama">3. When you can start working *</label>
						      		<input type="text" class="form-control" id="nama" placeholder="Fill in here ..."></input> 
					    		</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-5">
									<div class="judul-attach">
								    	<p>4. There is any acquaintance in our company *</p>
								    </div>	
					    		</div>

								<div class="form-group col-md-7">	
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad-kenalan custom-control-input" id="rad3" name="rad-kenalan" value="3">
									    	<label class="custom-control-label" for="rad3">Yes</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad-kenalan custom-control-input" id="rad4" name="rad-kenalan" value="4">
									    <label class="custom-control-label" for="rad4">No</label>
									</div>					
								</div>
							</div> 

							<div class="form-row">								
								<div class="form-group col-md-12">					
			                   		<div id="form_kenalan1" style="display:none;margin-top: -20px;">
			                   			<label for="ada_kenalan">If any, please specify :</label>
						          		<div class="table-responsive ">
									    	<table class="table table-bordered table-hover">
									       		<thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
									         		<tr>
											           <th class="text-center">No.</th>
											           <th class="text-center">Name</th>
											           <th class="text-center">Position</th>
											           <th class="text-center">Division</th>
											           <th class="text-center">Relation</th>
									        		</tr>
									     		</thead>

				    	 						<tbody>
		               								<tr>
											           <td align="center">1</td>
											           <td align="center">
											             	<input class="form-control" type="text" name="nama_kenalan1" placeholder="Fill in here ...">
		         										</td>
		         										<td align="center">
												          	<input class="form-control" type="text" name="jabatan_kenalan1" placeholder="Fill in here ...">
												       	</td>
												       	<td align="center">
												          	<input class="form-control" type="text" name="bagian_kenalan1" placeholder="Fill in here ...">
												      	</td>
												       		<td align="center">
												          	<input class="form-control" type="text" name="hubungan_kenalan1" placeholder="Fill in here ...">
												      	</td>												       	
		 											</tr>

		         									<tr>
											           <td align="center">2</td>
											           <td align="center">
											             	<input class="form-control" type="text" name="nama_kenalan2" placeholder="Fill in here ...">
		         										</td>
		         										<td align="center">
												          	<input class="form-control" type="text" name="jabatan_kenalan2" placeholder="Fill in here ...">
												       	</td>
												       	<td align="center">
												          	<input class="form-control" type="text" name="bagian_kenalan2" placeholder="Fill in here ...">
												      	</td>
												       		<td align="center">
												          	<input class="form-control" type="text" name="hubungan_kenalan2" placeholder="Fill in here ...">
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
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Click here" data-target="#kelebihan_kekurangan">
					<h5>IV. STRENGTH AND WEAKNESS</h5></button>
			  	<br>
			  	<div class="card-body">
			  		<form>
			  			<div id="kelebihan_kekurangan" class="collapse">
			  				<div class="form-row">
								<div class="form-group col-md-12">
						      		<label for="kelebihan">1. Explain your strengths *</label>
						      		<textarea type="text" class="form-control" id="kelebihan" placeholder="Fill in here ..."></textarea> 
					    		</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-12">
						      		<label for="kekurangan">2. Explain your weakness *</label>
						      		<textarea type="text" class="form-control" id="kekurangan" placeholder="Fill in here ..."></textarea> 
					    		</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-6">
									<div class="judul-attach">
								    	<p>3. Have you ever had a long illness that healed *</p>
								    </div>	
					    		</div>

								<div class="form-group col-md-6">
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad-sakit custom-control-input" id="rad5" name="rad-sakit" value="5">
									    <label class="custom-control-label" for="rad5">Yes</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad-sakit custom-control-input" id="rad6" name="rad-sakit" value="6">
									    <label class="custom-control-label" for="rad6">No</label>
									</div>						
								</div>
							</div> 

							<div class="form-row">
								<div class="form-group col-md-12">					
				                   	<div id="form_sakit1" style="display:none">
				                   		<label for="form_sakit1">If so, please spesify :</label>			                   			
				                   		<textarea type="text" class="form-control" id="form_sakit" placeholder="Fill in here ..."></textarea>		
									</div>
								</div>
							</div>  

							<div class="form-row buta-warna">
								<div class="form-group col-md-3">
								    <p>4. Are you color blind *</p>
					    		</div>

								<div class="form-group col-md-9">
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad custom-control-input" id="rad7" name="rad" value="7">
									    <label class="custom-control-label" for="rad7">Yes</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="rad custom-control-input" id="rad8" name="rad" value="8">
									    <label class="custom-control-label" for="rad8">No</label>
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
			  	<label class="custom-control-label" for="customCheck1">I hereby declare that the applicant's biodata I fill in truthfully, if in the future there is a discrepancy, then I am willing to be thwarted.</label>
			</div>
			
			<div class="custom-control custom-checkbox">
			  	<input type="checkbox" class="custom-control-input" id="customCheck2">
			  	<label class="custom-control-label" for="customCheck2">I hereby declare that I have never worked as an employee of PT Padma Soode Indonesia or any other company under the Soode Group.</label>
			</div>

			<div class="catatan2">
				<p>*) must be filled in</p>
			</div>

			<div class="catatan">
				<p>*note : During the selection process it is free, all costs of the selection process are borne by the company.</p>
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

<!-- Upload Image -->
<script>
	$(".custom-file-input").on("change", function() {
  		var fileName = $(this).val().split("\\").pop();
  		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});
</script>

<!-- Date of Birth -->
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

<!-- Starting date -->
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

<!-- End date -->
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
