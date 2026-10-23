<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        	<div class="section-title">
                <h2 class="mt-5">ADD NEW USER</h2>
            </div>    
			<div class="row justify-content-center mt-2">
				<div class="col-md-6">
					<div class="card mt-5">
						<div class="card-header">
							<div class="section-title" style="text-align: center;margin-top: 5px;">
								<h4>FORM REGISTER</h4>
							</div>
						</div>
						<div class="card-body">
							<?php 
							if($this->session->flashdata('error') !='')
							{
								echo '<div class="alert alert-danger" role="alert">';
								echo $this->session->flashdata('error');
								echo '</div>';
							}
							?>
			 
							<?php 
							if($this->session->flashdata('success_register') !='')
							{
								echo '<div class="alert alert-info" role="alert">';
								echo $this->session->flashdata('success_register');
								echo '</div>';
							}
							?>
							<form method="post" action="<?php echo base_url(); ?>user/register/proses">
								<div class="form-group">
									<label for="nama">Name :</label>
									<input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Name">
								</div>
								<div class="form-group">
									<label for="username">Username :</label>
									<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
								</div>
								<div class="form-group">
									<label for="password">Password :</label>
									<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
								</div>
								<br>
								<div class="col-sm12 d-flex justify-content-around">
									<button type="submit" class="btn btn-primary btn-block">Register</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
    </main>