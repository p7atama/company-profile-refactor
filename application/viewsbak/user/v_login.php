<html>
	<head>
		<title>Admin | PT Padma Soode Indonesia</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	</head>
	<body style="background-color: #5bc0de">
	<div class="container">
		<div class="row justify-content-center mt-5 pt-5">
			<div class="col-md-6 mt-5 pt-5">
				<div class="card mt-5 shadow mb-5 bg-white rounded">
					<div class="card-header">
						<div class="section-title" style="text-align: center;margin-top: 5px;">
							<h4>LOGIN ADMIN PSI</h4>
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
						<form method="post" action="<?php echo base_url(); ?>Login/proses">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Password">
							</div>
							<div class="col-sm12 d-flex justify-content-around">
								<button type="submit" class="btn btn-primary btn-block">Login</button>
							</div>
							<div class="bottom text-center mt-3">
								<!-- New here ? <a href="<?php //echo base_url('user/register') ?>"><b>Join Us</b></a> -->
								<!-- <a href="<?php //echo base_url('admin/Contact') ?>"><b>Join Us</b></a> -->
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>		
	</body>
</html>