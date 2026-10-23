<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">EDIT VISION MISSION</h2>
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
                                <form action="<?php echo site_url('admin/vision_mission/update') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $vision_mission->id?>" />                        
                                <div class="form-group">
                                    <label for="vision">Vision : *</label>
                                    <textarea class="form-control <?php echo form_error('vision') ? 'is-invalid':'' ?>" rows="10" name="vision" id="vision"><?php echo $vision_mission->vision; ?></textarea>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('vision') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mission">Mission : *</label>
                                    <textarea class="form-control <?php echo form_error('mission') ? 'is-invalid':'' ?>" rows="10" name="mission" id="mission"><?php echo $vision_mission->mission; ?></textarea>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('mission') ?>
                                    </div>
                                </div>
                                <br>

                                <div class="col-md-12 d-flex justify-content-center">
                                    <a href="<?php echo site_url('admin/vision_mission/') ?>" class="btn btn-secondary"> Back</a>
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