<body onLoad="window.print('width=400,height=150,resizable=yes,scrollbars=yes')">
<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<title>Job Vacancy | <?php echo $career->division_name ?> (<?php echo $career->division_code ?>)</title>
	</head>
	<body>
		<div class="container-fluid">   
	    	<div class="container">
	    		<div class="row justify-content mt-5 pt-5">
	    			<div class="col-sm-12">
	    				<div class="section-title-print" style="text-align: center" >
			                <h2 style="color: #115c9b"><center>PENGUMUMAN LOWONGAN KERJA</center></h2>
			                <hr>
			            </div> 
	    			</div>
	    		</div>
	    	</div>
	        <br>

	        <div class="container">
	        	<div class="pengantar">
	        		<h5>Bersama ini kami informasikan bahwa <?php echo $career->location ?> sedang membutuhkan karyawan untuk menempati posisi sebagai berikut : </h5>	        		
	        	</div>
	        	<br>

	        	<div class="title-career">
				    <h4 style="color: #115c9b"><strong>1. <?php echo $career->division_name ?> <span>(<?php echo $career->division_code ?>)</span></strong></h4>
				</div>
				<br>

				<div class="content-career">
				    <h5><?php echo $career->keterangan_job ?></h5>
				</div>
				<br>
				<br>

				<div class="kirim">
				    <h5>Kirim lamaran melalui website <i style="color: #115c9b"><u>www.padmasoode.co.id</u></i> paling lambat <?php echo $career->close ?>.</h5>
				    <h5>Demikian pengumuman / informasi ini kami sampaikan, terimakasih atas perhatian dan kerjasamanya.</h5>
				</div>
				<br>
				<br>
				<br>

				<div class="akhir">
				    <h5>Bekasi, <?php echo $career->date ?></h5>
				    <br>
				    <br>
				    <h5><u>Feri Firmansyah</u></h5>
				    <h5>HRD</h5>
				</div>	        	
	        </div>

		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	</body>
</html>