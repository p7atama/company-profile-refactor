<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">ADD LINE OF BUSINESS DIVISION</h2>
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
                                <form action="<?php echo site_url('pintumasuk/line_of_business/save') ?>" method="post" enctype="multipart/form-data" >   
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="title">Title : </label>
                                            <select class="form-control" name="judul" required>
                                                <option value="">Pilih salah satu</option>
                                                <option value="STAMPING DIVISION">STAMPING DIVISION</option>
                                                <option value="INJECTION DIVISION">INJECTION DIVISION</option>
                                                <option value="MACHINING DIVISION">MACHINING DIVISION</option>
                                                <option value="ASSEMBLY DIVISION">ASSEMBLY DIVISION</option>
                                                <option value="TOOLING DIVISION">TOOLING DIVISION</option>
                                                <option value="SILICON RUBBER DIVISION">SILICON RUBBER DIVISION</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Image Division : </p>
                                            </div>                                
                                        </div>

                                        <div class="col-md">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Image Division</label>
                                            </div>                      
                                        </div>                                                         
                                    </div>  

                                    <div class="form-group">
                                        <label for="deskripsi">Description : </label>
                                        <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" rows="10" name="deskripsi" id="deskripsi"></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('deskripsi') ?>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Product : </p>
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="product1_name"placeholder="Product 1 Name"  />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Product 1 Image</label>
                                            </div>                      
                                        </div>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="product2_name"placeholder="Product 2 Name"  />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Product 2 Image</label>
                                            </div>                      
                                        </div>
                                    </div> 
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="product3_name"placeholder="Product 3 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Product 3 Image</label>
                                            </div>                      
                                        </div>
                                    </div>  
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="product4_name"placeholder="Product 4 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Product 4 Image</label>
                                            </div>                      
                                        </div>
                                    </div> 
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="product5_name"placeholder="Product 5 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Product 5 Image</label>
                                            </div>                      
                                        </div>
                                    </div> 
                                    <br> 

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="product6_name"placeholder="Product 6 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Product 6 Image</label>
                                            </div>                      
                                        </div>
                                    </div>                                                          
                                    <br>   
                                    <br>    

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Machine : </p>
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="machine1_name"placeholder="Machine 1 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Machine 1 Image</label>
                                            </div>                      
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="machine2_name"placeholder="Machine 2 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Machine 2 Image</label>
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="machine3_name"placeholder="Machine 3 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Machine 3 Image</label>
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="machine4_name"placeholder="Machine 4 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Machine 4 Image</label>
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="machine5_name"placeholder="Machine 5 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Machine 5 Image</label>
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="machine6_name"placeholder="Machine 6 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Machine 6 Image</label>
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Technology : </p>
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="tech1_name"placeholder="Technology 1 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Technology 1 Image</label>
                                            </div>                      
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="tech2_name"placeholder="Technology 2 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Technology 2 Image</label>
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="tech3_name"placeholder="Technology 3 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Technology 3 Image</label>
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="tech4_name"placeholder="Technology 4 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Technology 4 Image</label>
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="tech5_name"placeholder="Technology 5 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Technology 5 Image</label>
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                            </div>                                
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="tech6_name"placeholder="Technology 6 Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Technology 6 Image</label>
                                            </div>                      
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="judul-attach">
                                                <p>Video : </p>
                                            </div>                                
                                        </div>

                                        <div class="col-md-10">
                                            <div class="custom-file">
                                                <input type="file" name="userfile[]" multiple class="custom-file-input">
                                                <label class="custom-file-label" for="customFile">Video</label>
                                            </div>                      
                                        </div>
                                    </div>                                   
                                    <br>   
                                    <br>                            
                                           
                                    <div class="col-md-12 d-flex justify-content-center">
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