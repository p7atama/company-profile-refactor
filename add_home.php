<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">ADD HOME</h2>
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
                                <form action="<?php echo site_url('admin/home/save') ?>" method="post" enctype="multipart/form-data" >
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="text">Text *</label>
                                            <input type="text" class="form-control" name="text"placeholder="Fill in here" required />
                                        </div>
                                    </div> 

                                    <div class="form-group">
                                        <label for="about">About *</label>
                                        <textarea class="form-control <?php echo form_error('about') ? 'is-invalid':'' ?>" rows="10" name="about" id="about"></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('about') ?>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <div class="judul-attach">
                                                <p>Slider *</p>
                                            </div>                                
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Slider 1</label>

                                            </div>                      
                                        </div>

                                        <div class="col-md-3">      
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Slider 2</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Slider 3</label>
                                            </div> 
                                        </div>                  
                                    </div> 

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <div class="judul-attach">
                                                <p>Client *</p>
                                            </div>                                
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Client 1</label>
                                            </div>                      
                                        </div>

                                        <div class="col-md-3">      
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Client 2</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Client 3</label>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">                              
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Client 4</label>
                                            </div>                      
                                        </div>

                                        <div class="col-md-3">      
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Client 5</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Client 6</label>
                                            </div> 
                                        </div>
                                    </div>                                     
                                    <br>                               
                                           
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <a href="<?php echo site_url('admin/home/') ?>" class="btn btn-secondary"> Back</a>
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

    <script type="text/javascript">
       function readURL(input) 
        {
            if (input.files && input.files[0]) 
            {
                var reader = new FileReader();
                reader.onload = function (e) 
                {
                    $('#foto')
                        .attr('src', e.target.result)
                        .width(250)
                        .height(250);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        //Input image
        $(".custom-file-input").on("change", function() 
        {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
     </script>