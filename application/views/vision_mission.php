<section id="jumbotron">
	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h3 class="jumbotron-title display-4"><strong>VISION AND MISSION</strong></h3>
    		<p class="jumbotron-content lead"><strong>PT PADMA SOODE INDONESIA</strong></p>
  		</div>
	</div>
</section>

<!-- Awal Visi -->
<section id="vision" class="vision">
	<div class="container">
		<?php foreach($vision_mission->result() as $mvm): ?>
			<?php endforeach; ?>
		<div class="row justify-content-center">
			<div class="col-sm12">
				<div class="section-title">
					<h2>OUR VISION</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="border">
					<div class="col-sm12">
						<div class="content-vision">
							<p><blockquote><strong><?php echo $mvm->vision ?></strong>
							</blockquote></p>							
						</div>						
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Akhir Visi -->

<!-- Awal Misi -->
<section id="mission" class="mission">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm12">
				<div class="section-title">
					<h2>OUR MISSION</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="border">
					<div class="col-sm12">
						<div class="content-mission">
							<p><blockquote><strong><?php echo $mvm->mission ?></strong>
							</blockquote></p>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Akhir Misi -->
	
	
