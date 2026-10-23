<br>
<br>
<br>
<br>
<div class="container">

	<div class="border rounded mt-5 mb-5">
		<div class="row justify-content-center">
			<div class="col-sm-8 mt-5" style="text-align: center;">
		    	<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert" style="text-align: center; font-weight: 700;font-size: 18px">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>
		    </div>

			    <div class="col-sm-10 mt-4 mb-5">
			        <?php if (isset($rec) && $rec): ?>
			        <table class="table table-bordered">
						<thead>
							<tr>
								<th colspan="2" style="text-align: center;"><strong>Information detail :</strong></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>ID</td>
								<td><?php echo isset($rec->id) ? htmlspecialchars($rec->id) : '-' ?></td>
							</tr>
							<tr>
								<td>Code</td>
								<td><?php echo isset($rec->posisi) ? htmlspecialchars($rec->posisi) : '-' ?></td>
							</tr>
							<tr>
								<td>Name</td>
								<td><?php echo isset($rec->name) ? htmlspecialchars($rec->name) : '-' ?></td>
							</tr>
							<tr>
								<td>Date Apply</td>
								<td><?php echo isset($rec->date) ? htmlspecialchars($rec->date) : '-' ?></td>
							</tr>
						</tbody>
					</table>
					<?php else: ?>
					<p style="text-align:center;">Data anda telah tersimpan.</p>
					<?php endif; ?>
					<br>
		    <div class="col-sm12 d-flex justify-content-between">
	            <a href="<?php echo base_url('career')?>" class="btn btn-primary">Back to Career</a>
	        </div>
		    	
		    </div>
		</div>
	
	</div>		 
</div>