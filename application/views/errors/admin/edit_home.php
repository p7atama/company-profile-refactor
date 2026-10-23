<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">EDIT HOME</h2>
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
                                <form action="<?php echo site_url('admin/home/update/'.$home->id) ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $home->id?>" />
                                <div class="form-group">
                                    <label for="text">Text :</label>
                                    <input class="form-control" name="text" value="<?php echo $home->text ?>" required></input>
                                </div>
                        
                                <div class="form-group">
                                    <label for="vision">About : *</label>
                                    <textarea class="form-control" rows="10" name="about" id="about"><?php echo $home->about; ?></textarea>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <div class="judul-attach">
                                            <p>Slider *</p>
                                        </div>                                
                                    </div>

                                    <div class="col-md-3"> 
                                        <div class="custom-file">                                            
                                            <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $home->slider1; ?>">
                                            <img src="<?php echo base_url('uploads/home/'.$home->slider1);?>" alt="" height="100" width="265"/ class="mb-5">
                                            <label class="custom-file-label" for="customFile"><?php if($home->slider1) echo $home->slider1; else echo "no-img.jpg"; ?></label>
                                            <input type="hidden" name="slider1" value="<?= $home->slider1; ?>">
                                        </div>                      
                                    </div>

                                    <div class="col-md-3">      
                                        <div class="custom-file">
                                            <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $home->slider2; ?>">
                                            <img src="<?php echo base_url('uploads/home/'.$home->slider2);?>" alt="" height="100" width="265"/ class="mb-5">
                                            <label class="custom-file-label" for="customFile"><?php if($home->slider2) echo $home->slider2; else echo "no-img.jpg"; ?></label>
                                            <input type="hidden" name="slider2" value="<?= $home->slider2; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="custom-file">
                                            <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $home->slider3; ?>">
                                            <img src="<?php echo base_url('uploads/home/'.$home->slider3);?>" alt="" height="100" width="265"/ class="mb-5">
                                            <label class="custom-file-label" for="customFile"><?php if($home->slider3) echo $home->slider3; else echo "no-img.jpg"; ?></label>
                                            <input type="hidden" name="slider3" value="<?= $home->slider3; ?>">
                                        </div> 
                                    </div>                  
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="form-group col-md-2 mt-4">
                                        <div class="judul-attach">
                                            <p>Clients : *</p>
                                        </div>                                
                                    </div>

                                    <div class="col-md-3 mt-4 mb-2">
                                        <div class="custom-file">
                                            <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $home->client1; ?>">
                                            <img src="<?php echo base_url('uploads/home/'.$home->client1);?>" alt="" height="140" width="265"/ class="mb-5">
                                            <label class="custom-file-label" for="customFile"><?php if($home->client1) echo $home->client1; else echo "no-img.jpg"; ?></label>
                                            <input type="hidden" name="client1" value="<?= $home->client1; ?>">
                                        </div>                      
                                    </div>

                                    <div class="col-md-3 mt-4 mb-2">      
                                        <div class="custom-file">
                                            <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $home->client2; ?>">
                                            <img src="<?php echo base_url('uploads/home/'.$home->client2);?>" alt="" height="140" width="265"/ class="mb-5">
                                            <label class="custom-file-label" for="customFile"><?php if($home->client2) echo $home->client2; else echo "no-img.jpg"; ?></label>
                                            <input type="hidden" name="client2" value="<?= $home->client2; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-4 mb-2">
                                        <div class="custom-file">
                                            <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $home->client3; ?>">
                                            <img src="<?php echo base_url('uploads/home/'.$home->client3);?>" alt="" height="140" width="265"/ class="mb-5">
                                            <label class="custom-file-label" for="customFile"><?php if($home->client3) echo $home->client3; else echo "no-img.jpg"; ?></label>
                                            <input type="hidden" name="client3" value="<?= $home->client3; ?>">
                                        </div> 
                                    </div>                  
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">                              
                                    </div>

                                    <div class="col-md-3 mt-5 mb-5">
                                        <div class="custom-file">
                                            <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo base_url('uploads/home/'.$home->slider1) ?>">
                                            <img src="<?php echo base_url('uploads/home/'.$home->client4);?>" alt="" height="140" width="265"/ class="mb-5">
                                            <label class="custom-file-label" for="customFile"><?php if($home->client4) echo $home->client4; else echo "no-img.jpg"; ?></label>
                                            <input type="hidden" name="client4" value="<?= $home->client4; ?>">

                                        </div>                      
                                    </div>

                                    <div class="col-md-3">      
                                        <div class="custom-file mt-5 mb-5">
                                            <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $home->client5; ?>">
                                            <img src="<?php echo base_url('uploads/home/'.$home->client5);?>" alt="" height="140" width="265"/ class="mb-5">
                                            <label class="custom-file-label" for="customFile"><?php if($home->client5) echo $home->client5; else echo "no-img.jpg"; ?></label>
                                            <input type="hidden" name="client5" value="<?= $home->client5; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-5 mb-5">
                                        <div class="custom-file">
                                            <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $home->client6; ?>">
                                            <img src="<?php echo base_url('uploads/home/'.$home->client6);?>" alt="" height="140" width="265"/ class="mb-5">
                                            <label class="custom-file-label" for="customFile"><?php if($home->client6) echo $home->client6; else echo "no-img.jpg"; ?></label>
                                            <input type="hidden" name="client6" value="<?= $home->client6; ?>">
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
       // function readURL(input) 
       //  {
       //      if (input.files && input.files[0]) 
       //      {
       //          var reader = new FileReader();
       //          reader.onload = function (e) 
       //          {
       //              $('#foto')
       //                  .attr('src', e.target.result)
       //                  .width(250)
       //                  .height(250);
       //          };
       //          reader.readAsDataURL(input.files[0]);
       //      }
       //  }

        //Input image
        $(".custom-file-input").on("change", function() 
        {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        
     </script>