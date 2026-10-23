<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">EDIT DISCLAIMER</h2>
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
                                <form action="<?php echo site_url('pintumasuk/disclaimer/update') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $disclaimer->id_disclaimer?>" />                        
                                <div class="form-group">
                                    <label for="vision">Content : *</label>
                                    <textarea class="form-control" rows="20" name="content" id="vision"><?php echo $disclaimer->content; ?></textarea>
                                </div>
                                
                                <br>

                                <div class="col-md-12 d-flex justify-content-center">
                                    <a href="<?php echo site_url('pintumasuk/disclaimer') ?>" class="btn btn-secondary"> Back</a>
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