<?php foreach ($disclaimer->result() as $disc): ?>
<?php endforeach; ?>

<section id="jumbotron">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h3 class="jumbotron-title display-4"><strong>CAREER</strong></h3>
			<p class="jumbotron-content lead"><strong>PT PADMA SOODE INDONESIA & GROUP</strong></p>
		</div>
	</div>
</section>

<section id="career">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item border rounded">
						<a class="nav-link" id="pills-disclaimer-tab" data-toggle="pill" href="#pills-disclaimer" role="tab" aria-controls="pills-home" aria-selected="true" style="border-width:2px !important;"><strong>DISCLAIMER</strong></a>
					</li>
					<li class="nav-item border rounded">
						<a class="nav-link" id="pills-job-opening-tab" data-toggle="pill" href="#pills-job-opening" role="tab" aria-controls="pills-profile" aria-selected="false" style="border-width:2px !important;"><strong>JOB OPENING</strong></a>
					</li>
					<li class="nav-item border rounded">
						<a class="nav-link" id="pills-faq-tab" data-toggle="pill" href="#pills-faq" role="tab" aria-controls="pills-faq" aria-selected="false" style="border-width:2px !important;"><strong>FAQ</strong></a>
					</li>
				</ul>
			</div>
		</div>


		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-disclaimer" role="tabpanel" aria-labelledby="pills-disclaimer-tab">
				<div class="border rounded p-2 center" style="margin-top:-17px;box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.4);">
					<div class="text-center">
						<img class="img-fluid rounded" style="padding: 8px 8px 8px 8px" width="1100" src="<?php echo base_url('assets/img/disclaimer_new.png') ?>" />
					</div>
					<hr>
					<div class="p-3" style='color:red; text-align:center;margin-top:5px;font-weight:500;'>
						<?php echo $disc->content ?>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-faq" role="tabpanel" aria-labelledby="pills-faq-tab">
				<div class="border rounded p-2 center" style="margin-top:-17px;box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.4);">
					<div class="text-center">
						<img class="img-fluid rounded" style="padding: 8px 8px 8px 8px" width="1100" src="<?php echo base_url('assets/img/faq.png') ?>" />
					</div>
					<hr>
					<div class="row">
						<div class="col-12 col-md-12 pb-3">
							<div class="accordion" id="accordionExample">
								<?php foreach ($faq->result() as $faq):
									$value = $faq->id_faq;
								?>
									<div class="card shadow-sm" style="color: #115c9b;">
										<div class="card-header" id="headingOne">
											<div class="row">
												<div class="col-10">
													<h5 class="mt-3" style="margin:auto"><?php echo $faq->question ?></h5>
												</div>
												<div class="col-2" style="text-align: end;font-size: 20px">
													<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $value ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $value ?>" style="text-decoration: none;border: none; outline: none;">
														<h5><strong>(+)</strong></h5>
													</button>
												</div>
											</div>

										</div>

										<div id="collapseOne<?php echo $value ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
											<div class="card-body text-left" style="font-weight: 600;">
												<?php echo $faq->answer ?>
											</div>
										</div>
									</div>
								<?php endforeach; ?>




















								<!-- <div class="card shadow-sm">
                    <div class="card-header" id="headingTwo">
                      
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h5 class="mb-0">
              Collapsible Group Item #2
           </h5>
        </button>
     
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body text-left">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-header" id="headingThree">
                       
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
           <h5 class="mb-0">
              Collapsible Group Item #3
           </h5>
        </button>
     
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body text-left">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>-->
							</div>
						</div>



					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-job-opening" role="tabpanel" aria-labelledby="pills-job-opening-tab">
				<?php $query = "SELECT * FROM karir AS k WHERE k.`close` >= CURDATE() AND (SELECT COUNT(*) FROM tb_pelamar p WHERE p.posisi = k.division_code) < k.`limit`";
				$result = $this->db->query($query);
				if ($result->num_rows() > 0) { ?>
					<?php foreach ($career->result() as $m): ?>
						<div class="border rounded p-5 mb-4" style="margin-top:-17px;color: #115c9b; box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.4);">
							<div class="row justify-content-center">
								<div class="col-sm-12">
									<?php
									$now = time();
									$your_date = strtotime($m->close);
									$datediff = $your_date - $now;
									if (round($your_date / (60 * 60 * 24)) - round($now / (60 * 60 * 24)) <= 7) { ?>
										<div class="d-flex flex-row-reverse p-2 border-rounded">
											<span class="badge badge-danger text-left" style="font-size:16px">
												<?php
												$now = time();
												$your_date = strtotime($m->close);
												$datediff = $your_date - $now;
												if (round($your_date / (60 * 60 * 24)) == round($now / (60 * 60 * 24))) {
													echo 'LAST DAY';
												} else {
													echo round($datediff / (60 * 60 * 24)) . ' DAYS LEFT';
												}
												?>
											</span>
										</div>
									<?php } else {
										echo "";
									}
									?>
								</div>

								<div class="col-sm-12">
									<div class="title-career">
										<h4><strong><?php echo $m->division_name ?> <span>(<?php echo $m->division_code ?>)</span></strong></h4>
									</div>
									<br>
								</div>
								<div class="col-sm-12">
									<div class="content-career">
										<p><?php echo $m->keterangan_job ?></p>
									</div>
									<br>
								</div>

								<div class="col-sm-8">
									<table class="table table-bordered isi_table">
										<thead>
											<tr>
												<th colspan="2"><strong>Information detail :</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Last Degree</td>
												<td><?php echo $m->last_degree ?></td>
											</tr>
											<tr>
												<td>Major</td>
												<td><?php echo $m->major ?></td>
											</tr>
											<tr>
												<td>Location</td>
												<td><?php echo $m->location ?></td>
											</tr>
										</tbody>
									</table>
								</div>

							</div>
							<br>
							<br>
							<div class="col-sm-12 d-flex justify-content-between">
								<?php
								$clode_date = $m->close;
								?>
								<a href="<?php echo base_url('recruitment_form/index/' . $m->division_code . '/' . $m->jabatan . '/' . $m->location_new) ?>" class="btn custom-btn mr-2">Apply</a>
								<button class="btn btn-danger">Closing Date : <?php echo date("d F Y", strtotime($clode_date)) ?></button>
							</div>
						</div>
						<br>
					<?php endforeach; ?>
				<?php } else {
					echo "
	        		<div class='border align-middle p-3' style='color: #FFFFFF;margin-top:-17px;box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.4); text-align:center;margin:auto;'>
	        			<div class='border p-3' style='background-color: #115c9b;'>
	        			<h5 style='font-size:28px;text-shadow: 2px 2px 2px #000;'>MOHON MAAF<br>BELUM ADA<br>LOWONGAN KERJA<br>UNTUK SAAT INI</h5>
	        			</div
	        		</div
	        	";
				} ?>

			</div>
		</div>

	</div>


	</div>
	</div>
	</div>
</section>