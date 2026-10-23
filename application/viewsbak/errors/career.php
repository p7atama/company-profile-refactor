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
    	<div class="row">
        	<?php foreach($career->result() as $m): ?>
        	<div class="border">
            	<div class="col-sm-12">
	              <div class="title-career">
	                <h4><strong><?php echo $m->division_name ?> <span>(<?php echo $m->division_code ?>)</span></strong></h4>
	              </div>
	              <br>
          
	              <div class="content-career">
	              	<?php echo $m->keterangan_job ?>
	              </div>
	              <br>

	             <div class="container">	
	              	<div class="row justify-content-center">
	              		<div class="col-sm-10">
	              			<table class="table table-bordered">
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
				</div>
            	</div>
            	<br>
  
	            <div class="col-sm12 d-flex justify-content-between">
	              <a href="<?php echo base_url('recruitment_form/index/'.$m->division_code.'/'.$m->jabatan	)?>" class="btn custom-btn">Apply</a>
	              <button class="btn btn-danger">Close Date : <?php echo $m->close ?></button>
	            </div>
        	</div>
        	<?php endforeach; ?>

        	<?php $query = "SELECT * FROM karir AS k WHERE k.sisa > 0";
	        $result = $this->db->query($query);
	        if ($result->num_rows() > 0) {
	           '';
	        } else {
	        	echo "<p style='color:red; font-size:24px;text-align:center;margin-top:60px;font-weight:500; padding:40px' class='card rounded' style='box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.4);'>PT Padma Soode Indonesia tidak menerima berkas lamaran melalui via pos, email dan datang langsung. Kami hanya memproses pelamar yang telah mengisi Formulir Pendaftaran di website ini. Selama proses seleksi tidak dipungut biaya (gratis).";
	        } ?>
        </div>
  	</div>
</section>