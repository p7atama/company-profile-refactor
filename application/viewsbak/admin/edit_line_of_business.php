<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">EDIT LINE OF BUSINESS</h2>
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
                                <form action="<?php echo site_url('pintumasuk/line_of_business/update/'.$lob->id) ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $lob->id?>" />
                                    <div class="form-group">
                                        <label for="text">Title :</label>
                                        <input class="form-control" name="judul" value="<?php echo $lob->judul ?>" readonly></input>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="vision">Description : </label>
                                        <textarea class="form-control" rows="10" name="deskripsi" id="deskripsi"><?php echo $lob->deskripsi; ?></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('about') ?>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Image Division :</p>
                                                <small class='form-text text-muted'>*Catatan : </small>
                                                <small class='form-text text-muted'>1. Dimensi : 2000 x 2000px</small>
                                                <small class='form-text text-muted'>2. Size max. 200kb</small>
                                                <small class='form-text text-muted'>3. Format : JPEG</small>
                                            </div>                                
                                        </div>

                                        <div class="col-md-3 mb-5">
                                            <div class="custom-file">                                            
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->img_besar; ?>">
                                                <div class="center">
                                                    <img src="<?php echo base_url('uploads/line_of_business/'.$lob->img_besar);?>" alt="" height="265" width="265" class="mb-5">
                                                </div>                                            
                                                <label class="custom-file-label" for="customFile"><?php if($lob->img_besar) echo $lob->img_besar; else echo "no-img.jpg"; ?></label>
                                                <input type="hidden" name="img_besar" value="<?= $lob->img_besar; ?>">
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="form-row mt-5">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Product Name :</p>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="product1_name" value="<?php echo $lob->product1_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="product2_name" value="<?php echo $lob->product2_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="product3_name" value="<?php echo $lob->product3_name ?>"></input>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="product4_name" value="<?php echo $lob->product4_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="product5_name" value="<?php echo $lob->product5_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="product6_name" value="<?php echo $lob->product6_name ?>"></input>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row mt-5 mb-5">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Product Image : </p>
                                                <small class='form-text text-muted'>*Catatan : </small>
                                                <small class='form-text text-muted'>1. Dimensi : 842 x 559px</small>
                                                <small class='form-text text-muted'>2. Size max. 200kb</small>
                                                <small class='form-text text-muted'>3. Format : JPEG</small>
                                            </div>                                
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->product1; ?>">
                                                <?php
                                                if ($lob->product1 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product1);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->product1) echo $lob->product1; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="product1" value="<?= $lob->product1; ?>">
                                            </div>                      
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->product2; ?>">
                                                <?php
                                                if ($lob->product2 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product2);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->product2) echo $lob->product2; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="product2" value="<?= $lob->product2; ?>">
                                            </div>                      
                                        </div>   

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->product3; ?>">
                                                <?php
                                                if ($lob->product3 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product3);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->product3) echo $lob->product3; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="product3" value="<?= $lob->product3; ?>">
                                            </div>                      
                                        </div>                                                  
                                    </div> 

                                    <div class="form-row mt-5">
                                        <div class="form-group col-md-2">                              
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->product4; ?>">
                                                <?php
                                                if ($lob->product4 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product4);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->product4) echo $lob->product4; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="product4" value="<?= $lob->product4; ?>">
                                            </div>                      
                                        </div>

                                        <div class="col-md-3">      
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->product5; ?>">
                                                <?php
                                                if ($lob->product5 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product5);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->product5) echo $lob->product5; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="product5" value="<?= $lob->product5; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->product6; ?>">
                                                <?php
                                                if ($lob->product6 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product6);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->product6) echo $lob->product6; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="product6" value="<?= $lob->product6; ?>">
                                            </div> 
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <div class="form-row mt-5">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Machine Name :</p>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="machine1_name" value="<?php echo $lob->machine1_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="machine2_name" value="<?php echo $lob->machine2_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="machine3_name" value="<?php echo $lob->machine3_name ?>"></input>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="machine4_name" value="<?php echo $lob->machine4_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="machine5_name" value="<?php echo $lob->machine5_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="machine6_name" value="<?php echo $lob->machine6_name ?>"></input>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row mt-5 mb-5">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Machine Image: </p>
                                                <small class='form-text text-muted'>*Catatan : </small>
                                                <small class='form-text text-muted'>1. Dimensi : 842 x 559px</small>
                                                <small class='form-text text-muted'>2. Size max. 200kb</small>
                                                <small class='form-text text-muted'>3. Format : JPEG</small>
                                            </div>                                
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->machine1; ?>">
                                                <?php
                                                if ($lob->machine1 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine1);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->machine1) echo $lob->machine1; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="machine1" value="<?= $lob->machine1; ?>">
                                            </div>                      
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->machine2; ?>">
                                                <?php
                                                if ($lob->machine2 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine2);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->machine2) echo $lob->machine2; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="machine2" value="<?= $lob->machine2; ?>">
                                            </div>                      
                                        </div>   

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->machine3; ?>">
                                                <?php
                                                if ($lob->machine3 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine3);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->machine3) echo $lob->machine3; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="machine3" value="<?= $lob->machine3; ?>">
                                            </div>                      
                                        </div>                                                  
                                    </div> 

                                    <div class="form-row">
                                        <div class="form-group col-md-2">                              
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->machine4; ?>">
                                                <?php
                                                if ($lob->machine4 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine4);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->machine4) echo $lob->machine4; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="machine4" value="<?= $lob->machine4; ?>">
                                            </div>                      
                                        </div>

                                        <div class="col-md-3">      
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->machine5; ?>">
                                                <?php
                                                if ($lob->machine5 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine5);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->machine5) echo $lob->machine5; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="machine5" value="<?= $lob->machine5; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->machine6; ?>">
                                                <?php
                                                if ($lob->machine6 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine6);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->machine6) echo $lob->machine6; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="machine6" value="<?= $lob->machine6; ?>">
                                            </div> 
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <div class="form-row mt-5">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Technology Name :</p>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="tech1_name" value="<?php echo $lob->tech1_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="tech2_name" value="<?php echo $lob->tech2_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="tech3_name" value="<?php echo $lob->tech3_name ?>"></input>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="tech4_name" value="<?php echo $lob->tech4_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="tech5_name" value="<?php echo $lob->tech5_name ?>"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input class="form-control" name="tech6_name" value="<?php echo $lob->tech6_name ?>"></input>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row mt-5 mb-5">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Technology Image: </p>
                                                <small class='form-text text-muted'>*Catatan : </small>
                                                <small class='form-text text-muted'>1. Dimensi : 842 x 559px</small>
                                                <small class='form-text text-muted'>2. Size max. 200kb</small>
                                                <small class='form-text text-muted'>3. Format : JPEG</small>
                                            </div>                                
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->tech1; ?>">
                                                <?php
                                                if ($lob->tech1 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech1);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->tech1) echo $lob->tech1; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="tech1" value="<?= $lob->tech1; ?>">
                                            </div>                      
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->tech2; ?>">
                                                <?php
                                                if ($lob->tech2 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech2);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->tech2) echo $lob->tech2; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="tech2" value="<?= $lob->tech2; ?>">
                                            </div>                      
                                        </div>   

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->tech3; ?>">
                                                <?php
                                                if ($lob->tech3 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech3);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->tech3) echo $lob->tech3; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="tech3" value="<?= $lob->tech3; ?>">
                                            </div>                      
                                        </div>                                                  
                                    </div> 

                                    <div class="form-row mb-5">
                                        <div class="form-group col-md-2">                              
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->tech4; ?>">
                                                <?php
                                                if ($lob->tech4 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech4);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->tech4) echo $lob->tech4; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="tech4" value="<?= $lob->tech4; ?>">
                                            </div>                      
                                        </div>

                                        <div class="col-md-3">      
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->tech5; ?>">
                                                <?php
                                                if ($lob->tech5 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech5);?>" alt="" height="150" width="265" class="mb-5">
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->tech5) echo $lob->tech5; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="tech5" value="<?= $lob->tech5; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->tech6; ?>">
                                                <?php
                                                if ($lob->tech6 != null ||'')
                                                { ?>
                                                     <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech6) ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }
                                                else { ?>
                                                      <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="265" height="150" class="mb-5" />
                                                <?php 
                                                }   
                                                ?>
                                                <label class="custom-file-label" for="customFile"><?php if($lob->tech6) echo $lob->tech6; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="tech6" value="<?= $lob->tech6; ?>">
                                            </div> 
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Video Division :</p>
                                                <small class='form-text text-muted'>*Catatan : </small>
                                                <small class='form-text text-muted'>1. Size max : 6Mb</small>
                                                <small class='form-text text-muted'>2. Max. 1 min</small>
                                                <small class='form-text text-muted'>3. Format : MP4</small>
                                            </div>                                
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom-file">                                            
                                                <input type="file" name="userfile[]" multiple class="custom-file-input" value="<?php echo $lob->video; ?>">
                                                <?php 
                                                  $sorry = base_url('assets/img/line-of-business/sorry.jpg');
                                                  $video = base_url('uploads/line_of_business/'.$lob->video);
                                                  if ($lob->video == null || '') {
                                                    echo "
                                                    <div class='card card-img rounded' width='810' >
                                                      <img src='$sorry' />   
                                                    </div> 
                                                    ";
                                                  } else {
                                                    echo "
                                                    <div class='center'>
                                                        <video width='810' controls>
                                                          <source src='$video'>
                                                        </video>
                                                    </div>         
                                                    ";
                                                  }
                                                ?>
                                                                                         
                                                <label class="custom-file-label" for="customFile"><?php if($lob->video) echo $lob->video; else echo "Upload disini ..."; ?></label>
                                                <input type="hidden" name="video" value="<?= $lob->video; ?>">
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>

                                    <div class="col-md-12 d-flex justify-content-center mt-3">
                                        <a href="<?php echo site_url('admin/line_of_business/') ?>" class="btn btn-secondary"> Back</a>
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