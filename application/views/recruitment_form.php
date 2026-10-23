<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>


<br>
<section id="rec_form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<div class="section-title">
					<h2>RECRUITMENT <?php echo $code; ?> - <?php echo $jabatan; ?></h2>
					<div id="hasil2"></div>
					<p style="color:red;font-size: 22px;font-weight: 750">PERHATIAN!</p>
					<p style="color:red;font-size: 20px;font-weight: 500;text-align: left">1. DATA WAJIB DIISI DENGAN LENGKAP DAN BENAR. APABILA TIDAK, MAKA ANDA AKAN LANGSUNG DIDISKUALIFIKASI (GUGUR).
						<br> 2. NAMA LENGKAP YANG ANDA ISI WAJIB SESUAI DENGAN NAMA LENGKAP PADA KARTU TANDA PENDUDUK.
						<br> 3. EX-PADMA SOODE INDONESIA/COVAC/CKU/SSP TIDAK DIPERKENANKAN MELAMAR KEMBALI, KARENA AKAN OTOMATIS GUGUR.
					</p>
				</div>
			</div>
		</div>
	</div>

	<input type="hidden" name="" id="jabatan" value="<?php echo $jabatan; ?>">
	<input type="hidden" name="" id="list_degree" value="<?php echo $degree; ?>">
	<form method="post" enctype="multipart/form-data" id="form_submit" name="form_submit" autocomplete="off">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-4 colom-foto">
					<label for="">Foto <span class="bintang">*</span></label>
					<div class="card card-img">
						<img id="foto" src="#" alt="Upload Foto" />
					</div>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="userfile[]" id="foto_formal" multiple onchange="readURL(this);" required="">
						<label class="custom-file-label" for="customFile">Max. 500kb, Format JPG/PNG</label>
					</div>
				</div>
			</div>
		</div>
		<br><br>

		<div class="container isi">
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
							<?php
							$default_time = date('d-m-Y H:i:s');
							date_default_timezone_set('Asia/Jakarta');

							?>
							<input type="hidden" name="date" id="waktu_lamar" value="<?php echo date("Y-m-d H:i:s"); ?>">
							<!-- <input type="button" id="timeModify"> -->
							<input type="hidden" name="code" id="code" value="<?php echo $code; ?>">
							<div class="form-group col-md-4">

								<label for="no_ktp">Nomor KTP/NIK <span class="bintang">*</span></label>
								<input type="number" class="form-control text-besar" name="no_ktp" id="ktp" placeholder="Isi disini ..." onkeyup="cekKTP(this.value)" required>
								<!-- <input type="text" class="form-control" name="jam" value="<? php // echo date('H:i:s A')
																								?>"> -->
								<div id="hasil">

								</div>
							</div>

							<div class="form-group col-md-4">
								<label for="name">Nama Lengkap <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" name="name" placeholder="Isi disini ..." required>
							</div>
							<div class="form-group col-md-4">
								<label for="name">No. KK <span class="bintang">*</span></label>
								<input type="number" class="form-control" name="no_kk" placeholder="Isi disini ..." required>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="tempat_lahir">Tempat Lahir <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" id="tempat_lahir" name="tempat_lahir" placeholder="Isi disini ..." required>
							</div>

							<div class="form-group col-md-4">
								<label>Tanggal Lahir <span class="bintang">*</span></label>
								<div class="form-row">
									<div class="input-group col-md-12">
										<!-- <input type="date" name="tanggal_lahir" placeholder="Isi disini ..." class="form-control" > -->
										<input type="date" name="tanggal_lahir" id="birthday" oninput="getAge();" placeholder="Isi disini ..." class="form-control text-besar" required />
									</div>
								</div>
							</div>

							<div class="form-group col-md-4">
								<label for="result">Umur</label>
								<div class="input-group">
									<input type="text" class="form-control" name="umur" id="age" readonly="">
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
									<option value="Pria">PRIA</option>
									<option value="Wanita">WANITA</option>
								</select>
							</div>

							<div class="form-group col-md-4">
								<label for="gol_darah" class="control-label text-right m-b-10">Golongan Darah <span class="bintang">*</span></label>
								<select class="form-control" name="gol_darah" required>
									<option value="">Pilih salah satu</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="O">O</option>
									<option value="AB">AB</option>
								</select>
							</div>

							<div class="form-group col-md-4">
								<label for="no_npwp">Nomor NPWP <span class="bintang">*</span></label>
								<input type="number" class="form-control text-besar" placeholder="Isi disini ..." id="npwp" required onkeyup="getNPWPFormat(this.value)">
								<div id="hasil_npwp"></div>
								<input type="hidden" name="npwp_hasil" id="npwp_hasil">
							</div>
						</div>
						<br>

						<div class="judul-form">
							<h5>Alamat Sesuai KTP</h5>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="alamat_ktp">Alamat <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" name="alamat_ktp" id="alamat_ktp" placeholder="Isi disini ..." required>
							</div>

							<div class="form-group col-md-4">
								<label for="rt_rw_ktp">RT/RW <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" name="rt_rw_ktp" id="rt_rw_ktp" placeholder="Isi disini ..." required>
							</div>

							<div class="form-group col-md-4">
								<label for="provinsi_ktp">Provinsi <span class="bintang">*</span></label>
								<select name="" class="form-control" id="provinsi_ktp" required="" onchange="getProvinsi()">
									<option value=''>Pilih Provinsi</option>
									<?php foreach ($provinsi as $prov) {
										echo '<option value="' . $prov->kode . '">' . $prov->nama . '</option>';
									} ?>
								</select>
								<input type="hidden" class="form-control" name="provinsi_ktp" id="provinsi_ktp_hasil">
							</div>

						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="kota_ktp">Kota/Kabupaten <span class="bintang">*</span></label>
								<select name="" class="form-control" id="kota_ktp" required="" onchange="getKabKot()">
									<option value=''>Pilih Kota/Kabupaten</option>
								</select>
								<input type="hidden" class="form-control" name="kota_ktp" id="kota_ktp_hasil">
								<!-- <input type="text" class="form-control text-besar" name="kota_ktp" id="kota_ktp" placeholder="Isi disini ..." required> -->
							</div>
							<div class="form-group col-md-4">
								<label for="kecamatan_ktp">Kecamatan <span class="bintang">*</span></label>
								<select name="" class="form-control" id="kecamatan_ktp" required="" onchange="getKecamatan()">
									<option value=''>Pilih Kecamatan</option>
								</select>
								<input type="hidden" class="form-control" name="kecamatan_ktp" id="kecamatan_ktp_hasil">
								<!-- <input type="text" class="form-control text-besar" name="kecamatan_ktp" id="kecamatan_ktp" placeholder="Isi disini ..." required> -->
							</div>
							<div class="form-group col-md-4">
								<label for="kelurahan_ktp">Kelurahan/Desa <span class="bintang">*</span></label>
								<select name="" class="form-control" id="kelurahan_ktp" required="" onchange="getKelurahan()">
									<option value=''>Pilih Desa/Kelurahan</option>
								</select>
								<input type="hidden" class="form-control" name="kelurahan_ktp" id="kelurahan_ktp_hasil">
								<!-- <input type="text" class="form-control text-besar" name="kelurahan_ktp" id="kelurahan_ktp" placeholder="Isi disini ..." required> -->
							</div>
						</div>


						<div class="judul-form mt-2">
							<div class="form-group form-check">
								<h5 style="margin-left: -20px">Alamat Tinggal &nbsp;<span>
										(
										<input type="checkbox" class="form-control-input mt-5" id="checkAlamat" onclick="getDataAlamatKTP()">
										<label class="form-check-label" for="exampleCheck1">
											<p style="font-size:12px">Alamat tinggal sama dengan alamat KTP</p>
										</label>

									</span>)</h5>
							</div>


						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="alamat_tinggal">Alamat <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" name="alamat_tinggal" id="alamat_tinggal" placeholder="Isi disini ..." required>
							</div>

							<div class="form-group col-md-4">
								<label for="rt_rw_tinggal">RT/RW <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" name="rt_rw_tinggal" id="rt_rw_tinggal" placeholder="Isi disini ..." required>
							</div>

							<div class="form-group col-md-4">
								<label for="provinsi_tinggal">Provinsi <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" name="provinsi_tinggal" id="provinsi_tinggal" placeholder="Isi disini ..." required>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="kota_tinggal">Kota/Kabupaten <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" name="kota_tinggal" id="kota_tinggal" placeholder="Isi disini ..." required>
							</div>
							<div class="form-group col-md-4">
								<label for="kecamatan_tinggal">Kecamatan <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" name="kecamatan_tinggal" id="kecamatan_tinggal" placeholder="Isi disini ..." required>
							</div>
							<div class="form-group col-md-4">
								<label for="kelurahan_tinggal">Kelurahan/Desa <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" name="kelurahan_tinggal" id="kelurahan_tinggal" placeholder="Isi disini ..." required>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="no_hp">Kode Pos <span class="bintang">*</span></label>
								<input type="number" class="form-control" name="kode_pos" id="kode_pos" oninput="cekLokasi()" placeholder="Isi disini ..." required>
							</div>

							<div class="form-group col-md-4">
								<label for="no_hp">No. Telp / No. WhatsApp <span class="bintang">*</span></label>
								<input type="number" class="form-control" name="no_hp" placeholder="Isi disini ..." required>
							</div>

							<div class="col-md-4 mb-3">
								<label for="email">Email<span class="bintang">*</span></label>
								<div class="input-group">
									<input type="text" class="form-control" name="email" placeholder="Isi disini ..." required>
									<span class="input-group-text">@gmail.com</span>
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="agama">Agama <span class="bintang">*</span></label>
								<select class="form-control" name="agama" required>
									<option value="">Pilih salah satu</option>
									<option value="Islam">ISLAM</option>
									<option value="Kristen">KRISTEN</option>
									<!-- <option value="Kristen Katolik">KRISTEN KATOLIK</option> -->
									<option value="Hindu">HINDU</option>
									<option value="Buddha">BUDDHA</option>
									<option value="Konghucu">KONGHUCU</option>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="status_tempat_tinggal">Status Kepemilikan Tempat Tinggal <span class="bintang">*</span></label>
								<select class="form-control" name="status_tempat_tinggal" required>
									<option value="">Pilih salah satu</option>
									<option value="MILIK ORANG TUA">MILIK ORANG TUA</option>
									<option value="KOST">KOST</option>
									<option value="MILIK SENDIRI / PRIBADI">MILIK SENDIRI / PRIBADI</option>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="ibu_kandung">Nama Ibu Kandung <span class="bintang">*</span></label>
								<input type="text" class="form-control text-besar" name="ibu_kandung" placeholder="Isi disini ..." required>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="tinggi_badan">Tinggi Badan</label>
								<div class="input-group">
									<input type="number" class="form-control" name="tinggi_badan" placeholder="Isi disini ...">
									<div class="input-group-prepend">
										<div class="input-group-text">CM</div>
									</div>
								</div>
							</div>

							<div class="form-group col-md-6">
								<label for="berat_badan">Berat Badan</label>
								<div class="input-group">
									<input type="number" class="form-control" name="berat_badan" placeholder="Isi disini ...">
									<div class="input-group-prepend">
										<div class="input-group-text" name="ukuran" value="KG">KG</div>
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
									<input type="radio" class="rad-nikah custom-control-input" id="rad1" name="status_pernikahan" value="Sudah Menikah" required>
									<label class="custom-control-label" for="rad1">Menikah</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="rad-nikah custom-control-input" id="rad2" name="status_pernikahan" value="Belum Menikah">
									<label class="custom-control-label" for="rad2">Belum Menikah</label>
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-12">
								<div id="form1" class="mt-1" style="display:none">
									<label for="golongan" class="control-label text-right m-b-10">Golongan <span class="bintang">*</span></label>
									<select class="form-control" name="golongan_nikah">
										<option value="">Pilih salah satu</option>
										<option value="K/0">K/0</option>
										<option value="K/1">K/1</option>
										<option value="K/2">K/2</option>
										<option value="K/3">K/3</option>
									</select>
								</div>
								<div id="form2" style="display:none">
									<label for="golongan" class="control-label text-right m-b-10">Golongan <span class="bintang">*</span></label>
									<input type="text" class="form-control" name="golongan_belum_nikah" value="T/K" readonly>
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
								<input type="hidden" class="form-control" name="lokasi" id="lokasi" value="<?php echo $location; ?>" readonly>
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
					<h5>II. PENDIDIKAN<span><img src="<?php echo base_url('assets/img/arrow.png') ?>" width="40px"></span></h5>
				</button>
				<br>

				<div class="card-body">
					<div id="pendidikan" class="collapse">
						<div class="judul-form">
							<h5>1. Pendidikan Formal Terakhir</h5>
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
												<?php
												// $degree comes from karir.last_degree (e.g. "SMA, SMK, D3, S1").
												// Previously this used strtok(), which is STATEFUL: the first call
												// split on comma but the loop body called strtok(" ") (space),
												// silently switching the delimiter mid-loop and producing tokens
												// with commas glued on ("SMK,", "D3,"). When last_degree had no
												// spaces or was empty, the dropdown rendered NO options at all.
												// Fix: explode on comma, trim each, and guard empty values.
												$jenjang_opts = array();
												if (!empty($degree)) {
													foreach (explode(",", $degree) as $j) {
														$j = trim($j);
														if ($j !== '') {
															$jenjang_opts[] = $j;
														}
													}
												}
												?>
												<select class="form-control" name="jenjang1" required>
													<option value="">Pilih option</option>
													<?php foreach ($jenjang_opts as $pecah): ?>
														<?php if (strtoupper($pecah) === 'S1'): ?>
															<option value="<?= htmlspecialchars($pecah, ENT_QUOTES) ?>"><?= htmlspecialchars($pecah, ENT_QUOTES) ?> / D4</option>
														<?php else: ?>
															<option value="<?= htmlspecialchars($pecah, ENT_QUOTES) ?>"><?= htmlspecialchars($pecah, ENT_QUOTES) ?></option>
														<?php endif; ?>
													<?php endforeach; ?>
												</select>
											</td>
										<td align="center">
											<input class="form-control text-besar" type="text" name="nama_sekolah1" placeholder="Isi disini..." required>
										</td>
										<td align="center">
											<input class="form-control text-besar" type="text" name="jurusan1" placeholder="Isi disini..." required>
										</td>
										<td align="center">
											<input class="form-control text-besar" type="number" name="tahun1" placeholder="Isi disini..." required>
										</td>
										<td align="center">
											<input class="form-control text-besar" type="number" name="nilai_akhir1" placeholder="Isi disini..." required>
										</td>
										<td align="center">
											<input class="form-control text-besar" type="text" name="kota1" placeholder="Isi disini..." required>
										</td>
									</tr>

									<!--<tr>
									    <td align="center">2 <span class="bintang">*</td>
									    <td align="center">
									        <select class="form-control" name="jenjang2" >
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
										    <input class="form-control text-besar" type="text" name="nama_sekolah2" placeholder="Isi disini..." >
										</td>
										<td align="center">
										  	<input class="form-control text-besar" type="text" name="jurusan2" placeholder="Isi disini..." >
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="tahun2" placeholder="Isi disini..." >
										</td>
										<td align="center">
										    <input class="form-control text-besar" type="text" name="nilai_akhir2" placeholder="Isi disini..." >
										</td>
       									<td align="center">
										    <input class="form-control text-besar" type="text" name="kota2" placeholder="Isi disini..." >
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
 									-->
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

						<!-- <div class="judul-form">
					  		<h5>3. File Dokumen</h5>
					  	</div>
						-->
						<!-- <div class="card card-upload">
					  		<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									    <p>Foto Formal (.jpg/.png)<span class="bintang">*</span></p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="foto_formal" multiple class="custom-file-input" required>
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>
							</div>  -->
						<!--
					  		<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									    <p>Ijazah (.jpg/.png)<span class="bintang">*</span></p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="ijazah" multiple class="custom-file-input" required>
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>
							</div>  

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>Transkrip Nilai (.jpg/.png)<span class="bintang">*</span></p>
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
									   	<p>Sertifikat Vaksin Terakhir (.jpg/.png)<span class="bintang">*</span></p>
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
									   	<p>KTP (.jpg/.png)<span class="bintang">*</span></p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="ktp_berkas" multiple class="custom-file-input" required>
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>NPWP (.jpg/.png)<span class="bintang">*</span></p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="npwp" multiple class="custom-file-input" required>
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>Kartu Keluarga (.jpg/.png)<span class="bintang">*</span></p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="kartu_keluarga" multiple class="custom-file-input" required>
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>Surat Pernyataan (.jpg/.png/.pdf)<span class="bintang">*</span></p>	
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="surat_pernyataan" multiple class="custom-file-input" required>
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>
								</div>

								<div class="form-group col-md-4 mt-2" style="font-size: 16px;margin-top: 5px;">						      
									<a href="<?= base_url('recruitment_form/lakukan_download'); ?>"><strong>(Download file Surat Pernyataan)</strong></a>	
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>Kartu Pencari Kerja (.jpg/.png)</p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="kartu_disnaker" multiple class="custom-file-input">
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>	
								</div>			
							</div> 

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>SKCK (.jpg/.png)</p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="skck" multiple class="custom-file-input">
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>	
								</div>			
							</div>

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>Surat Keterangan Sehat Terbaru (.jpg/.png)</p>
									</div>							      
								</div>

								<div class="col-md-3">
									<div class="custom-file">
										<input type="file" name="userfile[]" id="surat_sehat" multiple class="custom-file-input">
										<label class="custom-file-label" for="customFile">Pilih berkas</label>
									</div>	
								</div>			
							</div>

							<div class="form-row">
								<div class="form-group col-md-3">
									<div class="judul-attach">
									   	<p>Surat Pengalaman Kerja (.jpg/.png)</p>
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
									   	<p>Sertifikat Keahlian (.jpg/.png)</p>
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
							</div>  -->

						<!-- <div class="form-group col-md-12">
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
											<input type="checkbox" name="kelengkapan_berkas[]" value="TRANSKRIP NILAI" required> Transkrip Nilai<br>
										</div>
										<div class="custom-control ">
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="SERTIFIKAT VAKSIN" required> Sertifikat Vaksin<br>
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
											<input type="checkbox" name="kelengkapan_berkas[]" id="checkBtn" value="SURAT PERNYATAAN" required> Surat Pernyataan
										</div>
						  			</div>
						  		</div>
						  		<div class="form-row">
									<div class="form-group col-md">
										<div class="format" style="margin-top:10px;margin-bottom:-15px">
											<p><strong>*Catatan : Max. 300kb</strong></p>
										</div>							      
									</div>					
								</div> -->
						<!-- </div>
						<br>
						<br> -->

						<div class="judul-form">
							<h5>3. Bahasa Yang Dikuasai</h5>
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


						<div class="judul-form">
							<h5>4. Keterampilan/Skill</h5>
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
					<h5>III. RIWAYAT ORGANISASI & PEKERJAAN<span><img src="<?php echo base_url('assets/img/arrow.png') ?>" width="40px"></span></h5>
				</button>
				<br>
				<div class="card-body">
					<div id="riwayat_pekerjaan" class="collapse">
						<div class="judul-form">
							<h5>1. Pengalaman Organisasi</h5>
						</div>

						<div class="table-responsive m-b-30 p-r-20">
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
											<input type="text" name="nama_organisasi1" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td>
											<input type="text" name="jenis_organisasi1" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td>
											<input type="text" name="jabatan_organisasi1" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td align="center">
											<input type="text" name="periode_organisasi1" class="form-control text-besar" placeholder="Isi disini...">
										</td>
									</tr>

									<tr>
										<td align="center">2</td>
										<td>
											<input type="text" name="nama_organisasi2" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td>
											<input type="text" name="jenis_organisasi2" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td>
											<input type="text" name="jabatan_organisasi2" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td align="center">
											<input type="text" name="periode_organisasi2" class="form-control text-besar" placeholder="Isi disini...">
										</td>
									</tr>
									<tr>
										<td align="center">3</td>
										<td>
											<input type="text" name="nama_organisasi3" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td>
											<input type="text" name="jenis_organisasi3" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td>
											<input type="text" name="jabatan_organisasi3" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td align="center">
											<input type="text" name="periode_organisasi3" class="form-control text-besar" placeholder="Isi disini...">
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
							<div class="form-group col-md-2">
								<label for="nama_perusahaan">Nama Perusahaan</label>
							</div>
							<div class="form-group col-md-10">
								<input type="text" class="form-control text-besar" name="nama_perusahaan" placeholder="Isi disini ...">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="bidang_usaha">Bidang Usaha</label>
							</div>
							<div class="form-group col-md-10">
								<input type="text" class="form-control text-besar" name="bidang_usaha" placeholder="Isi disini ...">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="lokasi">Lokasi/Kota</label>
							</div>
							<div class="form-group col-md-10">
								<input type="text" class="form-control text-besar" name="kota_perusahaan" placeholder="Isi disini ...">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="jabatan_perusahaan">Jabatan</label>
							</div>
							<div class="form-group col-md-10">
								<input type="text" class="form-control text-besar" name="jabatan_perusahaan" placeholder="Isi disini ...">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2">
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
							<div class="form-group col-md-2">
								<label for="gaji_terakhir">Gaji</label>
							</div>
							<div class="form-group col-md-10">
								<input type="number" class="form-control" name="gaji_terakhir" placeholder="Isi disini ...">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="alasan_berhenti">Alasan Berhenti</label>
							</div>
							<div class="form-group col-md-10">
								<textarea type="text" class="form-control text-besar" name="alasan_berhenti" placeholder="Isi disini ..." rows="4"></textarea>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="alasan_berhenti">Uraian Tugas dan Tanggung Jawab</label>
							</div>
							<div class="form-group col-md-10">
								<textarea type="text" class="form-control text-besar" name="tugas_tgg_jawab" placeholder="Isi disini ..." rows="4"></textarea>
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
									<input type="radio" class="rad custom-control-input" id="rad7" name="buta_warna" value="Pernah" required="">
									<label class="custom-control-label" for="rad7">Pernah</label>
								</div>

								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="rad custom-control-input" id="rad8" name="buta_warna" value="Tidak Pernah" required="">
									<label class="custom-control-label" for="rad8">Tidak Pernah</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class=" container">
			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#minat_konsep">
					<h5>IV. MINAT DAN KONSEP PRIBADI<span><img src="<?php echo base_url('assets/img/arrow.png') ?>" width="40px"></span></h5>
				</button>
				<br>
				<div class="card-body">
					<div id="minat_konsep" class="collapse">
						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="alasan_bekerja">1. Mengapa anda ingin bekerja di Perusahaan kami <span class="bintang">*</span></label>
								<textarea type="text" class="form-control text-besar" name="alasan_bekerja" placeholder="Isi disini ..." maxlength="300" required></textarea>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="fasilitas_bekerja">2. Sebutkan fasilitas yang anda harapkan <span class="bintang">*</span></label>
								<textarea type="text" class="form-control text-besar" name="fasilitas_bekerja" placeholder="Isi disini ..." maxlength="300" required></textarea>
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
														<input class="form-control text-besar" type="text" name="jabatan_kenalan1" placeholder="Isi disini...">
													</td>
													<td align="center">
														<input class="form-control text-besar" type="text" name="bagian_kenalan1" placeholder="Isi disini...">
													</td>
													<td align="center">
														<input class="form-control text-besar" type="text" name="hubungan_kenalan1" placeholder="Isi disini...">
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
					<h5>V. KELEBIHAN DAN KEKURANGAN<span><img src="<?php echo base_url('assets/img/arrow.png') ?>" width="40px"></span></h5>
				</button>
				<br>
				<div class="card-body">
					<div id="kelebihan_kekurangan" class="collapse">
						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="kelebihan">1. Sebutkan hal-hal yang menjadi kelebihan dalam diri anda <span class="bintang">*</span></label>
								<textarea type="text" class="form-control text-besar" name="kelebihan" placeholder="Isi disini ..." maxlength="300" required></textarea>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="kekurangan">2. Sebutkan hal-hal yang menjadi kelemahan dalam diri anda <span class="bintang">*</span></label>
								<textarea type="text" class="form-control text-besar" name="kekurangan" placeholder="Isi disini ..." maxlength="300" required></textarea>
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
														<input class="form-control text-besar" type="text" name="lama_sakit1" placeholder="Isi disini...">
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
					</div>
				</div>
			</div>
		</div>

		<div class=" container">
			<div class="card">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-tooltip="true" data-placement="top" title="Klik disini" data-target="#lain_lain">
					<h5>VI. LAIN-LAIN<span><img src="<?php echo base_url('assets/img/arrow.png') ?>" width="40px"></span></h5>
				</button>
				<br>
				<div class="card-body">
					<div id="lain_lain" class="collapse">
						<div class="judul-form">
							<h5>1. Orang Yang Dihubungi Dalam Keadaan Darurat</h5>
						</div>

						<div class="table-responsive m-b-30 p-r-20">
							<table id="mainTable" class="table table-bordered table-hover">
								<thead class="table-custom" style="background-color: #355469; color: #FFFFFF">
									<tr>
										<th class="text-center align-middle">No.</th>
										<th class="text-center align-middle">Nama</th>
										<th class="text-center align-middle">Alamat</th>
										<th class="text-center align-middle">No.Telp</th>
										<th class="text-center align-middle">Pekerjaan</th>
										<th class="text-center align-middle">Hubungan</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td align="center">1 <span class="bintang">*</span></td>
										<td>
											<input type="text" name="nama_dihubungi1" class="form-control text-besar" placeholder="Isi disini..." required="">
										</td>

										<td>
											<input type="text" name="alamat_dihubungi1" class="form-control text-besar" placeholder="Isi disini..." required="">
										</td>

										<td>
											<input type="number" name="no_telp_dihubungi1" class="form-control text-besar" placeholder="Isi disini..." required="">
										</td>

										<td align="center">
											<input type="text" name="pekerjaan_dihubungi1" class="form-control text-besar" placeholder="Isi disini..." required="">
										</td>
										<td>
											<input type="text" name="hubungan_dihubungi1" class="form-control text-besar" placeholder="Isi disini..." required="">
										</td>
									</tr>

									<tr>
										<td align="center">2</td>
										<td>
											<input type="text" name="nama_dihubungi2" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td>
											<input type="text" name="alamat_dihubungi2" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td>
											<input type="number" name="no_telp_dihubungi2" class="form-control text-besar" placeholder="Isi disini...">
										</td>

										<td align="center">
											<input type="text" name="pekerjaan_dihubungi2" class="form-control text-besar" placeholder="Isi disini...">
										</td>
										<td>
											<input type="text" name="hubungan_dihubungi2" class="form-control text-besar" placeholder="Isi disini...">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<br>
						<div class="judul-form">
							<h5>2. Lain-lain (Pastikan anda download file dibawah ini!)</h5>
							<div class="row">
								<div class="col-md-2">
									<p>1. Surat Pernyataan</p>
								</div>
								<div class="col">
									<a href="<?= base_url('recruitment_form/lakukan_download'); ?>"><strong>(Download File)</strong></a>
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
				<input type="checkbox" class="custom-control-input" name="check2" id="customCheck2" value="check2_complete" onclick="cekLimit();" required>
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
			<input class="btn custom-btn submit" id="submit" type="submit" name="simpan" value="Submit" /><span id="loading" class="ml-2" style="vertical-align: middle;margin-top:35px"></span>
		</div>

	</form>

	<!--<form id="coba-form">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-12 d-flex justify-content-center">
					<input class="btn custom-btn submit" id="btn-submit" type="submit" name="simpan" value="Submit"/><span id="loading_new" class="ml-2" style="vertical-align: middle;margin-top:35px"></span>
				</div>
			</div>
		</div>
	</form>
	-->


</section>

<!-- tambahan jquery-->
<script type="text/javascript">
	// $(function(){

	//         $('#timeModify').click(function(){
	// 			var time = moment().format('YYYY-MM-DD hh:mm:ss');
	//             $('#waktu_lamar').val(time);  
	//         });

	//     }
	// );
	//Radio button nikah
	$(function() {
		$(":radio.rad-nikah").click(function() {
			$("#form1, #form2").hide()
			if ($(this).val() == "Sudah Menikah") {
				$("#form1").show();
			} else {
				$("#form2").show();
			}
		});
	});

	//Radio button kenalan
	$(function() {
		$(":radio.rad-kenalan").click(function() {
			$("#form_kenalan1, #form_kenalan2").hide()
			if ($(this).val() == "ADA") {
				$("#form_kenalan1").show();
			} else {
				$("#form_kenalan2").show();
			}
		});
	});

	//Radio button sakit
	$(function() {
		$(":radio.rad-sakit").click(function() {
			$("#form_sakit1, #form_sakit2").hide()
			if ($(this).val() == "PERNAH") {
				$("#form_sakit1").show();
			} else {
				$("#form_sakit2").show();
			}
		});
	});

	$(document).ready(function() {
		document.getElementById("gaji").style.display = "none";
		var jabatan = $('#jabatan').val();
		if (jabatan !== 'OPERATOR') {
			document.getElementById("gaji").style.display = "";
		} else {
			document.getElementById("gaji").style.display = "none";
		}
	});

	// cekKTP is fired on every keyup in the KTP field. Under high traffic
	// (a job vacancy spike) the backend can become unresponsive, so the AJAX
	// may fail or hang. Without an error/timeout handler the success callback
	// never runs and the submit button stays permanently disabled — trapping
	// the user. We therefore: (1) debounce so rapid typing makes at most one
	// request per pause, (2) set a timeout, and (3) on error FAIL OPEN (re-
	// enable the button) instead of trapping the user, which would only make
	// them refresh and worsen the server load.
	var _ktpTimer = null;
	function cekKTP(id) {
		var ktp = $('#ktp').val();

		// The 16-digit length check is pure client-side; apply it immediately
		// without hitting the server. The duplicate check needs the server.
		if (ktp.length !== 16) {
			$('#hasil').html("Please input the valid identity number.");
			document.getElementById("hasil").style.color = "red";
			document.getElementById("submit").disabled = true;
			return;
		}

		// Debounce: cancel any pending check and wait 400ms after the last
		// keystroke before asking the server. Stops a typing burst from
		// firing dozens of overlapping requests under load.
		if (_ktpTimer) { clearTimeout(_ktpTimer); }
		_ktpTimer = setTimeout(function () {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>Recruitment_form/valid_ktp",
				async: true,
				dataType: 'json',
				data: "ktp=" + encodeURIComponent(ktp),
				timeout: 8000,   // don't wait forever if the server is overloaded
				success: function (data) {
					if (data == 0) {
						$('#hasil').html("Identity number with code already available, you can't apply again.");
						document.getElementById("hasil").style.color = "red";
						document.getElementById("submit").disabled = true;
					} else {
						$('#hasil').html('');
						document.getElementById("submit").disabled = false;
					}
				},
				error: function () {
					// Server unavailable / timed out. Fail OPEN: let the user
					// continue rather than trapping them. The length check
					// (above) already validated the format client-side.
					$('#hasil').html('');
					document.getElementById("submit").disabled = false;
				}
			});
		}, 400);
	}

	function cekLimit() {
		var date = moment(new Date()).format('YYYY-MM-DD HH:mm:ss')
		var code = $('#code').val();
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Recruitment_form/valid_kuota",
			async: true,
			dataType: 'json',
			data: "code=" + encodeURIComponent(code),
			timeout: 8000,
			success: function (data) {
				if (data == 1) {
					$('#waktu_lamar').val(date);
				} else {
					alert('Mohon maaf kuota sudah penuh!');
					window.location = "<?php echo base_url(); ?>career";
					document.getElementById("submit").disabled = true;
				}
			},
			error: function () {
				// Quota check unavailable — fail open. Better to allow the
				// submission attempt than to trap the user or silently block.
			}
		});
		return false;
	}

	// $(document).ready(function () {
	//        $("#form_submit").submit(function (e) {
	//        	munculPesan();
	//            // $("#submit").attr("disabled", true);
	//            // $('#loading').html("Loading, please wait...");
	//            // document.getElementById("loading").style.color = "red"; 
	//            // return true;
	//        });
	//    });

	// function submitData(){

	// 	//var time = moment().format('YYYY-MM-DD hh:mm:ss'); 
	// 	document.form_submit.action = '<?php echo site_url('recruitment_form/save') ?>';
	//            $(document).ready(function() { 
	//            	munculPesan();
	//                //$("#form_submit").submit();
	//              });
	//    }

	function munculPesan() {
		document.form_submit.action = '<?php echo site_url('recruitment_form/save') ?>';
		$(document).ready(function() {
			if (document.form_submit.action == true) {
				$("#form_submit").submit();
				$("#submit").attr("disabled", true);
				$('#loading').html("Loading, please wait...");
				document.getElementById("loading").style.color = "red";
				return true;
			} else {
				alert('gagal');
			}
		});
	}
	//    function myFunction()
	// {
	// var data = 1;
	//   if(data == 0)
	//   { 
	//   	$(document).ready(function() { 
	//   		alert('Gagal submit lamaran, kuota sudah penuh!')
	//     	return false;
	//        });
	//   }
	//   else{
	//   	document.form_submit.action = '<? php // echo site_url('recruitment_form/save') ?>';
	//   	$(document).ready(function() {
	//            $("#form_submit").submit();
	//        });
	//   }

	// }

	//   function myFunction(){
	// e.preventDefault();
	//   	var code = $('#code').val();

	// $.ajax(
	// {
	//        type    : "POST",
	//        url     : "<? php // echo base_url(); ?>Recruitment_form/valid_kuota",
	//        asyn	: true,
	//        dataType	: 'json',
	//        data    : "code=" + code,

	//        success : function(data)
	//        {
	//        	if(data == 0)
	// 		  { 
	// 		    alert("validation failed false");
	// 		    $('#hasil2').html("Sudah melebihi limit!");
	//             document.getElementById("hasil2").style.color = "red"; 
	// 		    return false;
	// 		  }

	// 		  alert("validations passed");
	// 		  return true;
	//       if(data == 1)
	//       {
	// 	alert("Hello! I am an alert box! ga ada kuota");

	//           $('#hasil2').html("Sudah melebihi limit!");
	//           document.getElementById("hasil2").style.color = "red"; 
	//          	//alert("button clicked"); 
	//       	console.log("ini data di true"+data);

	// } 
	//       else
	//       {
	// 	$('#my-form').unbind().submit();
	// 	alert("Hello! I am an alert box Ada kuota");
	//       	$('#hasil2').html('');
	// 	console.log("ini data di false"+data);

	// }
	//}

	//})

	//};

	// function cekKuota()
	// {
	// 	var code = $('#code').val();
	// 	$.ajax(
	// 	{
	//         type    : "POST",
	//         url     : "<? php // echo base_url(); ?>Recruitment_form/valid_kuota",
	//         asyn	: true,
	//         dataType	: 'json',
	//         data    : "code=" + code,

	//         success : function(data)
	//         {
	// 	        if(data == 0)
	// 	        {
	// 	            $('#hasil2').html("Sudah melebihi limit!");
	// 	            document.getElementById("hasil2").style.color = "red"; 
	// 	           	document.getElementById("submit2").disabled = true; 
	// 	        } 
	//       	}
	// 		})
	// }

	//Foto Formal
	function readURL(input) {
		$("#foto_formal").change(function() {
			var val = $(this).val();
			var file = $('#foto_formal')[0].files[0];
			var totalSize = file.size;
			var totalSizeMb = totalSize / 1024;
			var totalSizeMb_fix = totalSizeMb.toFixed();
			// var maxSizeMb = 200000 / 1024;
			// var maxSizeMb_fix = maxSizeMb.toFixed();
			//alert(totalSizeMb_fix);
			if (totalSizeMb_fix > 300) {
				alert("File size must under 300Kb!");
				$(this).val('');
				// document.getElementById("submit").disabled = true; 
			} else {
				switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
					case 'gif':
					case 'jpg':
					case 'png':
						if (input.files && input.files[0]) {
							var reader = new FileReader();
							reader.onload = function(e) {
								$('#foto')
									.attr('src', e.target.result)
									.width(250)
									.height(250);
							};
							reader.readAsDataURL(input.files[0]);
							alert("Success upload!");
						}

						// document.getElementById("submit").disabled = false; 
						break;
					default:
						$(this).val('');
						// error message here
						alert("Please upload JPG / PNG file!");
						// document.getElementById("submit").disabled = true; 
						break;
				}
			}
		});
	}

	//   $("#foto_formal").change(function() 
	//   {
	//       var val = $(this).val();
	//       var file = $('#foto_formal')[0].files[0];
	//       var totalSize = file.size;
	//       var totalSizeMb = totalSize  / 1024;
	//       var totalSizeMb_fix = totalSizeMb.toFixed();
	//       // var maxSizeMb = 200000 / 1024;
	//       // var maxSizeMb_fix = maxSizeMb.toFixed();
	//       //alert(totalSizeMb_fix);
	//       if (totalSizeMb_fix > 300)
	// {
	//   alert("File size must under 300Kb!");
	//   $(this).val('');
	//   // document.getElementById("submit").disabled = true; 
	// }
	// else{
	// 	switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase())
	//        {
	//            case 'gif': case 'jpg': case 'png':
	//            alert("Success upload!");
	//            // document.getElementById("submit").disabled = false; 
	//                break;
	//            default:
	//                $(this).val('');
	//                // error message here
	//                alert("Please upload JPG / PNG file!");
	//                // document.getElementById("submit").disabled = true; 
	//                break;
	//        }
	// }

	//   });

	$("#ijazah").change(function() {
		var val = $(this).val();
		var file = $('#ijazah')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			// document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#transkrip_nilai").change(function() {
		var val = $(this).val();
		var file = $('#transkrip_nilai')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#sertif_vaksin").change(function() {
		var val = $(this).val();
		var file = $('#sertif_vaksin')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#surat_pernyataan").change(function() {
		var val = $(this).val();
		var file = $('#surat_pernyataan')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
				case 'pdf':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG / PDF file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#ktp_berkas").change(function() {
		var val = $(this).val();
		var file = $('#ktp_berkas')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
				case 'pdf':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG / PDF file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#npwp").change(function() {
		var val = $(this).val();
		var file = $('#npwp')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
				case 'pdf':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG / PDF file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#kartu_keluarga").change(function() {
		var val = $(this).val();
		var file = $('#kartu_keluarga')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
				case 'pdf':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG / PDF file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#kartu_disnaker").change(function() {
		var val = $(this).val();
		var file = $('#kartu_disnaker')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#skck").change(function() {
		var val = $(this).val();
		var file = $('#skck')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#surat_sehat").change(function() {
		var val = $(this).val();
		var file = $('#surat_sehat')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#spk1").change(function() {
		var val = $(this).val();
		var file = $('#spk1')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#spk2").change(function() {
		var val = $(this).val();
		var file = $('#spk2')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#spk3").change(function() {
		var val = $(this).val();
		var file = $('#spk3')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#sertif1").change(function() {
		var val = $(this).val();
		var file = $('#sertif1')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#sertif2").change(function() {
		var val = $(this).val();
		var file = $('#sertif2')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	$("#sertif3").change(function() {
		var val = $(this).val();
		var file = $('#sertif3')[0].files[0];
		var totalSize = file.size;
		var totalSizeMb = totalSize / 1024;
		var totalSizeMb_fix = totalSizeMb.toFixed();
		//alert(totalSizeMb_fix);
		if (totalSizeMb_fix > 300) {
			alert("File size must under 300Kb!");
			$(this).val('');
			//document.getElementById("submit").disabled = true; 
		} else {
			switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
				case 'gif':
				case 'jpg':
				case 'png':
					alert("Success upload!");
					//document.getElementById("submit").disabled = false; 
					break;
				default:
					$(this).val('');
					// error message here
					alert("Please upload JPG / PNG file!");
					//document.getElementById("submit").disabled = true; 
					break;
			}
		}
	});

	//Input image
	$(".custom-file-input").on("change", function() {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});

	//Datepicker Tanggal Lahir
	$('.datepickerLahir').datepicker({
		format: 'yyyy-mm-dd',
		// format: 'dd-M-yyyy',
		todayHighlight: true,
		todayHighlight: true,
	});

	$('.addingCalendarLahir').on("click", function(e) {
		console.log("clicked");
		$('.datepickerLahir').focus();
	});

	// Datepicker Tanggal Awal Kerja
	$(function() {
		$(".datepickerTanggalAwal").datepicker({
			format: 'yyyy-mm-dd',
			todayHighlight: true,
			todayHighlight: true,
		});

		$('.addingCalendarAwal').on("click", function(e) {
			console.log("clicked");
			$('.datepickerTanggalAwal').focus();
		});

		$("#awal_kerja").on('changeDate', function(selected) {
			var startDate = new Date(selected.date.valueOf());
			$("#akhir_kerja").datepicker('setStartDate', startDate);
			if ($("#awal_kerja").val() > $("#akhir_kerja").val()) {
				$("#akhir_kerja").val($("#awal_kerja").val());
			}
		});
	});

	//Datepicker Tanggal Akhir Kerja
	$(function() {
		$(".datepickerTanggalAkhir").datepicker({
			format: 'yyyy-mm-dd',
			todayHighlight: true,
			todayHighlight: true,
		});

		$('.addingCalendarAkhir').on("click", function(e) {
			console.log("clicked");
			$('.datepickerTanggalAkhir').focus();
		});

		$("#awal_kerja").on('changeDate', function(selected) {
			var startDate = new Date(selected.date.valueOf());
			$("#akhir_kerja").datepicker('setStartDate', startDate);
			if ($("#awal_kerja").val() > $("#akhir_kerja").val()) {
				$("#akhir_kerja").val($("#awal_kerja").val());
			}
		});
	});

	//Tooltip Recruitment
	$(function() {
		$('[data-tooltip="true"]').tooltip()
	})

	//Tooltips Submit
	$(document).ready(function() {
		$('.submit').click(function() {
			return confirm("Are you sure you want to submit?");
		});
	});

	$(function() {
		$('[data-toggle="tooltip"]').tooltip()
	});


	function getAge() {
		var date = document.getElementById('birthday').value;

		if (date === "") {
			alert("Please complete the  field!");
		} else {
			var today = new Date();
			var birthday = new Date(date);
			var year = 0;
			if (today.getMonth() < birthday.getMonth()) {
				year = 1;
			} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
				year = 1;
			}
			var age = today.getFullYear() - birthday.getFullYear() - year;

			if (age < 0) {
				age = 0;
			}
			document.getElementById('age').value = age;
		}
		var list_degree = document.getElementById('list_degree').value;
		var searchTerm = 'SMA'; // Replace with the word or character you're looking for
		var searchTerm2 = 'SMK';
		if (list_degree.includes(searchTerm) || list_degree.includes(searchTerm2)) {

		} else {
			if (age < 21) {
				$("#submit").attr("disabled", true);
			} else {
				$("#submit").attr("disabled", false);
			}
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



	$(function() {
		var requiredCheckboxes = $('.berkas :checkbox[required]');
		requiredCheckboxes.change(function() {
			if (requiredCheckboxes.is(':checked')) {
				requiredCheckboxes.removeAttr('required');
			} else {
				requiredCheckboxes.attr('required', 'required');
			}
		});

	});

	$(document).ready(function() {
		document.form_submit.action = '<?php echo site_url('recruitment_form/save') ?>';
		$("#form_submit").submit(function(e) {
			// Only disable the button + show loading if the form actually
			// passes HTML5 validation. Otherwise the browser cancels the
			// navigation (to show a validation bubble on the bad field) but
			// the button would already be disabled with no code to re-enable
			// it — leaving the user stuck and unable to submit after fixing
			// the field. checkValidity() is false when a required field fails.
			var form = this;
			if (form.checkValidity && !form.checkValidity()) {
				return true; // let the browser show the validation message
			}
			$("#submit").attr("disabled", true);
			$('#loading').html("Loading, please wait...");
			document.getElementById("loading").style.color = "red";
			return true;
		});
	});

	$(document).ready(function() {
		$("#coba-form").submit(function(e) {
			$("#btn-submit").attr("disabled", true);
			$('#loading_new').html("Loading, please wait...");
			document.getElementById("loading_new").style.color = "red";
			return true;
		});
	});

	function cekLokasi() {
		var lokasi = $('#lokasi').val();
		var kode_pos = $('#kode_pos').val();
		if (lokasi == 'PT_Ciptajaya_Kreasindo_Utama') {
			if (kode_pos == 17530 || kode_pos == 17520 || kode_pos == 17510 || kode_pos == 17532 || kode_pos == 17320) {
				$("#submit").attr("disabled", false);
			} else {
				$("#submit").attr("disabled", true);
				//alert('Mohon maaf, domisili anda terlalu jauh dari area perusahaan!')
			}
		} else if (lokasi == 'PT_Senjaya_Soode_Precision') {
			if (kode_pos == 17530 || kode_pos == 17520 || kode_pos == 17510 || kode_pos == 17532 || kode_pos == 17320) {
				$("#submit").attr("disabled", false);
			} else {
				$("#submit").attr("disabled", true);
				//alert('Mohon maaf, domisili anda terlalu jauh dari area perusahaan!')
			}
		} else if (lokasi == 'PT_Ciptajaya_Kreasindo_Utama_dan_PT_Senjaya_Soode_Precision') {
			if (kode_pos == 17530 || kode_pos == 17520 || kode_pos == 17510 || kode_pos == 17532 || kode_pos == 17320) {
				$("#submit").attr("disabled", false);
			} else {
				$("#submit").attr("disabled", true);
				//alert('Mohon maaf, domisili anda terlalu jauh dari area perusahaan!')
			}
		} else {
			$("#submit").attr("disabled", false);
		}
	}

	function getNPWPFormat($id) {
		var npwp_ori = $('#npwp').val();
		let npwp1 = npwp_ori.substr(0, 2);
		let npwp2 = npwp_ori.substr(2, 3);
		let npwp3 = npwp_ori.substr(5, 3);
		let npwp4 = npwp_ori.substr(8, 1);
		let npwp5 = npwp_ori.substr(9, 3);
		let npwp6 = npwp_ori.substr(12, 3);

		var npwp_hasil = npwp1 + '.' + npwp2 + '.' + npwp3 + '.' + npwp4 + '-' + npwp5 + '.' + npwp6;
		if (npwp_ori.length != 16) {
			$('#hasil_npwp').html("Please input the valid npwp number.");
			document.getElementById("hasil_npwp").style.color = "red";
			document.getElementById("submit").disabled = true;
		} else {
			$('#hasil_npwp').html('');
			document.getElementById("submit").disabled = false;
		}
		$("#npwp_hasil").val(npwp_hasil);
	}

	function getDataAlamatKTP() {
		var alamat_ktp = $('#alamat_ktp').val();
		var rt_rw_ktp = $('#rt_rw_ktp').val();
		var kelurahan_ktp = $('#kelurahan_ktp option:selected').html();
		var kecamatan_ktp = $('#kecamatan_ktp option:selected').html();
		var kota_ktp = $('#kota_ktp option:selected').html();
		var provinsi_ktp = $('#provinsi_ktp option:selected').html();

		if ($("#checkAlamat").prop('checked') == true) {
			//Lempar hasilnya
			$('#alamat_tinggal').val(alamat_ktp);
			$('#rt_rw_tinggal').val(rt_rw_ktp);
			$('#kelurahan_tinggal').val(kelurahan_ktp);
			$('#kecamatan_tinggal').val(kecamatan_ktp);
			$('#kota_tinggal').val(kota_ktp);
			$('#provinsi_tinggal').val(provinsi_ktp);
			$("#alamat_tinggal").attr("readonly", true);
			$("#rt_rw_tinggal").attr("readonly", true);
			$("#kelurahan_tinggal").attr("readonly", true);
			$("#kecamatan_tinggal").attr("readonly", true);
			$("#kota_tinggal").attr("readonly", true);
			$("#provinsi_tinggal").attr("readonly", true);
		} else {
			$('#alamat_tinggal').val('');
			$('#rt_rw_tinggal').val('');
			$('#kelurahan_tinggal').val('');
			$('#kecamatan_tinggal').val('');
			$('#kota_tinggal').val('');
			$('#provinsi_tinggal').val('');
			$("#alamat_tinggal").attr("readonly", false);
			$("#rt_rw_tinggal").attr("readonly", false);
			$("#kelurahan_tinggal").attr("readonly", false);
			$("#kecamatan_tinggal").attr("readonly", false);
			$("#kota_tinggal").attr("readonly", false);
			$("#provinsi_tinggal").attr("readonly", false);
		}
	}

	$(document).ready(function() {
		$("#provinsi_ktp").change(function() {
			var url = "<?php echo site_url('recruitment_form/add_ajax_kab'); ?>/" + $(this).val();
			$('#kota_ktp').load(url);
			return false;
		})

		$("#kota_ktp").change(function() {
			var url = "<?php echo site_url('recruitment_form/add_ajax_kec'); ?>/" + $(this).val();
			$('#kecamatan_ktp').load(url);
			return false;
		})

		$("#kecamatan_ktp").change(function() {
			var url = "<?php echo site_url('recruitment_form/add_ajax_des'); ?>/" + $(this).val();
			$('#kelurahan_ktp').load(url);
			return false;
		})
	});

	function getProvinsi() {
		var provinsi_ktp = $('#provinsi_ktp option:selected').html();
		$('#provinsi_ktp_hasil').val(provinsi_ktp);
	}

	function getKabKot() {
		var kota_ktp = $('#kota_ktp option:selected').html();
		$('#kota_ktp_hasil').val(kota_ktp);
	}

	function getKecamatan() {
		var kecamatan_ktp = $('#kecamatan_ktp option:selected').html();
		$('#kecamatan_ktp_hasil').val(kecamatan_ktp);
	}

	function getKelurahan() {
		var kelurahan_ktp = $('#kelurahan_ktp option:selected').html();
		$('#kelurahan_ktp_hasil').val(kelurahan_ktp);
	}
</script>