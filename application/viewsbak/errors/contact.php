<section id="jumbotron">
	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h3 class="jumbotron-title display-4"><strong>CONTACT US</strong></h3>
    		<p class="jumbotron-content lead"><strong>PT PADMA SOODE INDONESIA</strong></p>
  		</div>
	</div>
</section>

<section id="contact" class="contact">
	<div class="container">
	    <div class="container">
	    	<div class="row mt-5">
		    	<div class="col-xl-4 justify-content-center align-items-stretch">
		    		<div class="card">
				  		<div class="card-header">
					   		<div class="title-contact">
						    	<h5><strong>PT PADMA SOODE INDONESIA</strong></h5>
						    </div>
				  	</div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item">
					    	<div class="info">
						    	<div class="address">
			                		<i class="icofont-google-map"></i>
			                		<h4>Location:</h4>
			                		<p>Jl. Raya Narogong km. 15 Ciketing Udik Bekasi 17310 - Indonesia</p>
		              			</div>
		              		</div>
					    </li>
					    <li class="list-group-item">
					    	<div class="info">
						    	<div class="phone">
			                		<i class="icofont-phone"></i>
			                		<h4>Call:</h4>
			                		<p>(+62-21) 8325718 (Hunting)</p>
			              		</div>
		              		</div>	
					    </li>
					    <li class="list-group-item">
					    	<div class="info">
					    		<div class="phone">
			                		<i class="icofont-phone"></i>
			                		<h4>Call:</h4>
			                		<p>(+62-21) 8320033 (Hunting)</p>
		              			</div>
					    	</div>
					    </li>
					    <li class="list-group-item">
					    	<div class="info">
					    		<div class="fax">
			                		<i class="icofont-fax"></i>
			                		<h4>Fax:</h4>
			                		<p>(+62-21) 82495843</p>
		              			</div>	
					    	</div>
					    </li>
					  </ul>
					</div>
					<br>
		    	</div>

	    		<div class="col-xl-8 align-items-stretch justify-content-center">
	    			
	    			<?php if ($this->session->flashdata('success')): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
					<?php endif; ?>

		    			<form action="<?php echo site_url('contact/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-row">
								<input type="hidden" name="user[0][date]" value="<?php echo date("y-m-d"); ?>">
		                		<div class="col-md-6 form-group">		                			
		                  			<input type="name" class="form-control" name="user[0][name]"placeholder="Enter your name*" required/>
		                		</div>

		                		<div class="col-md-6 form-group">		                		
		                  			<input type="email" class="form-control" name="user[0][email]"  placeholder="Enter your e-mail*" required/>
		                		</div>

		                		<div class="col-md-12 form-group">		                			
		                  			<input type="number" class="form-control" name="user[0][phone]" placeholder="Enter your phone*" required/>
		                		</div>
	             		 	</div>

		              		<div class="form-group">
		                		<textarea class="form-control" name="user[0][message]" rows="5" data-msg="Testimoni" placeholder="Message" required></textarea>
		              		</div>

	              		<div class="text-center"><input class="btn" type="submit" name="simpan" value="Send Message" /></div>
	            	</form>
	    		</div>
	    	</div>	
	    </div>
	</div>	

	<div class=" container-fluid">
		<div class="gmaps">
	        <iframe style="border:0; width: 100%; height: 400px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3309888445815!2d106.97433491473618!3d-6.35117636390322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993bc10a635f1%3A0xfd2d9e2da96e09ed!2sPT%20PADMA%20SOODE%20INDONESIA!5e0!3m2!1sid!2sid!4v1615370147971!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>"
	    </div>
	</div>
	   
</section>