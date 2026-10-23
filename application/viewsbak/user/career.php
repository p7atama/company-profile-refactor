<section id="jumbotron">
	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h3 class="jumbotron-title display-4"><strong>CAREER</strong></h3>
    		<p class="jumbotron-content lead"><strong>PT PADMA SOODE INDONESIA</strong></p>
  		</div>
	</div>
</section>

<section id="career">
	<div class="container">
    	<?php foreach($career->result() as $m): ?>
	        	<div class="border rounded p-5 mb-4 mt-3" style="border-radius: 100px;box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.4); color: #115c9b;">
	        		<div class="row justify-content-center">
    					<div class="col-sm-12">
				        		<?php 
				        		$now = time(); 
								$your_date = strtotime($m->close);
								$datediff = $your_date - $now;
				        		if (round($your_date / (60 * 60 *24)) - round($now / (60 * 60 *24)) <= 7 ) { ?>
				        			<div class="d-flex flex-row-reverse p-2 border-rounded">
										<span class="badge badge-danger text-left" style="font-size:16px">
								              	<?php  
								              	$now = time(); 
												$your_date = strtotime($m->close);
												$datediff = $your_date - $now;
												if (round($your_date / (60 * 60 *24)) == round($now / (60 * 60 *24))) {
													echo 'LAST DAY';
												} else {
													echo round($datediff / (60 * 60 * 24)).' DAYS LEFT';
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

		              <div class="col-sm-6">
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
		              <a href="<?php echo base_url('recruitment_form/index/'.$m->division_code.'/'.$m->jabatan	)?>" class="btn custom-btn mr-2">Apply</a>
		              <button class="btn btn-danger">Close Date : <?php echo date("d F Y", strtotime($clode_date)) ?></button>
		            </div>
	        	</div>
	        	<br>
	        	<?php endforeach; ?>

	        	<?php $query = "SELECT * FROM karir AS k WHERE k.sisa > 0 AND k.`close` >= CURDATE()";
		        $result = $this->db->query($query);
		        if ($result->num_rows() > 0) {
		           '';
		        } else {
		        	echo "<p style='color:red; font-size:24px;text-align:center;margin-top:60px;font-weight:500; padding:40px' class='card rounded' style='box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.4);'>PT Padma Soode Indonesia tidak menerima berkas lamaran melalui via pos, email dan datang langsung. Kami hanya memproses pelamar yang telah mengisi Formulir Pendaftaran di website ini. Selama proses seleksi tidak dipungut biaya (gratis).";
		        } ?>
    		</div>
        </div>
  	</div>
</section>