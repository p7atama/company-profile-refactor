<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">ADD VISION MISSION</h2>
            </div>           

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="card mb-4">
                        <div class="card-body">
                            <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success" style="text-align: center;" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="container">
                                <form action="<?php echo site_url('pintumasuk/vision_mission/save') ?>" method="post" enctype="multipart/form-data" >   
                                    
                                    <div class="form-group">
                                        <label for="vision">Vision : *</label>
                                        <textarea class="form-control <?php echo form_error('vision') ? 'is-invalid':'' ?>" rows="10" name="vision" id="vision"></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('vision') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mission">Mission : *</label>
                                        <textarea class="form-control <?php echo form_error('mission') ? 'is-invalid':'' ?>" rows="10" name="mission" id="mission"></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('mission') ?>
                                        </div>
                                    </div>                                   
                                    <br>                               
                                           
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <a href="<?php echo site_url('pintumasuk/vision_mission/') ?>" class="btn btn-secondary"> Back</a>
                                        <input class="btn btn-primary ml-2" type="submit" name="btn" value="Save"/>
                                    </div>                           
                                </form>
                            </div>      
                        </div>
                    </div>
                </div>
                
            </div>
                               
            
        </div>
    </main>