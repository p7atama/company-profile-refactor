<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">EDIT FAQ</h2>
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
                                <form action="<?php echo site_url('pintumasuk/faq/update_faq') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $faq->id_faq?>" />  
                                <div class="form-group">
                                    <label for="vision">Question : *</label>
                                    <textarea class="form-control" rows="5" name="question" id="vision"><?php echo $faq->question; ?></textarea>
                                </div>                      
                                <div class="form-group">
                                    <label for="vision">Answer : *</label>
                                    <textarea class="form-control" rows="15" name="answer" id="mission"><?php echo $faq->answer; ?></textarea>
                                </div>
                                
                                <br>

                                <div class="col-md-12 d-flex justify-content-center">
                                    <a href="<?php echo site_url('pintumasuk/faq') ?>" class="btn btn-secondary"> Back</a>
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