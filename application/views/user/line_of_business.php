<section id="jumbotron">
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="jumbotron-title display-4"><strong>LINE OF BUSINESS</strong></h1>
        <p class="jumbotron-content lead"><strong>PT PADMA SOODE INDONESIA</strong></p>
      </div>
  </div>
</section>

<!-- ======= Line of business Section ======= -->
<section id="lob" class="lob">
    <div class="container">
        <div class="row">
          <div class="col-lg-2">
              <ul class="nav nav-tabs flex-column">
                  <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#tab-1">STAMPING</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-2">INJECTION</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-3">MACHINING</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-4">ASSEMBLY</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-5">TOOLING</a>
                  </li>
              </ul>
        </div>

        <div class="col-lg-10 mt-4 mt-lg-0">
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <?php foreach($lob as $lob): ?> 
                      <div class="col-lg-7 details order-2 order-lg-1">
                        <h3><strong><?php echo $lob->judul ?></strong></h3>
                        <p><?php echo $lob->deskripsi ?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalProductStamping">PRODUCT</button>
                        <div class="modal fade modalProductStamping" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header justify-text-center">
                                <h5>PRODUCT <?php echo $lob->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                  <div class="row d-flex justify-content-around">
                                    <div class="col-lg-4" data-toggle="modal" data-target="#modal">
                                      <div class="title-lob">
                                        <p><?php echo $lob->product1_name ?></p>
                                      </div>                                        
                                      <a href="#lightbox" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->product1) ?>" width="100" height="100" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modal">
                                      <div class="title-lob">
                                        <p><?php echo $lob->product2_name ?></p>
                                      </div>  
                                      <a href="#lightbox" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->product2) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modal">
                                      <div class="title-lob">
                                        <p><?php echo $lob->product3_name ?></p>
                                      </div> 
                                      <a href="#lightbox" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->product3) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modal">
                                      <div class="title-lob">
                                        <p><?php echo $lob->product4_name ?></p>
                                      </div> 
                                      <a href="#lightbox" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->product4) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modal">
                                      <div class="title-lob">
                                        <p><?php echo $lob->product5_name ?></p>
                                      </div> 
                                      <a href="#lightbox" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->product5) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modal">
                                      <div class="title-lob">
                                        <p><?php echo $lob->product6_name ?></p>
                                      </div> 
                                      <a href="#lightbox" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->product6) ?>" class="img-thumbnail my-3"></a>
                                    </div>                                      
                                  </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content modal-content-zoom">
                                      <div class="modal-body modal-body-zoom" >
                                        <div id="lightbox" class="carousel slide" data-interval="false" data-keyboard="true">
                                          <ol class="carousel-indicators indicators-zoom">
                                            <li data-target="#lightbox" data-slide-to="0"></li>
                                            <li data-target="#lightbox" data-slide-to="1"></li>
                                            <li data-target="#lightbox" data-slide-to="2"></li>
                                            <li data-target="#lightbox" data-slide-to="3"></li>
                                            <li data-target="#lightbox" data-slide-to="4"></li>
                                            <li data-target="#lightbox" data-slide-to="5"></li>                                  
                                          </ol>

                                          <div class="carousel-inner" style="padding-bottom: 20px;">
                                            <div class="carousel-item active">
                                              <p style="text-align: center;"><?php echo $lob->product1_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product1) ?>" class="w-100"alt="Product-1" width="842" height="559">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $lob->product2_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product2) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $lob->product3_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product3) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $lob->product4_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product4) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $lob->product5_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product5) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $lob->product6_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product6) ?>" class="w-100"
                                                 alt="">
                                            </div>  
                                          </div>

                                          <a class="carousel-control-prev cpv-lightbox" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                          <a class="carousel-control-next cpn-lightbox" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br>                           
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalMachineStamping">MACHINE</button>
                        <div class="modal fade modalMachineStamping" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5>MACHINE <?php echo $lob->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                    <div class="row d-flex justify-content-around">
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->machine1_name ?></p>
                                        </div>  
                                        <a href="#lightboxMachineStamping" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine1) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->machine2_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineStamping" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine2) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->machine3_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineStamping" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine3) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->machine4_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineStamping" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine4) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->machine5_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineStamping" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine5) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->machine6_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineStamping" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine6) ?>" class="img-thumbnail my-3"></a>
                                      </div>                                      
                                    </div>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modalMachineStamping" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                      <div class="modal-content modal-content-zoom">
                                        <div class="modal-body modal-body-zoom" >
                                          <div id="lightboxMachineStamping" class="carousel slide" data-interval="false" data-keyboard="true">
                                            <ol class="carousel-indicators">
                                              <li data-target="#lightboxMachineStamping" data-slide-to="0"></li>
                                              <li data-target="#lightboxMachineStamping" data-slide-to="1"></li>
                                              <li data-target="#lightboxMachineStamping" data-slide-to="2"></li>
                                              <li data-target="#lightboxMachineStamping" data-slide-to="3"></li>
                                              <li data-target="#lightboxMachineStamping" data-slide-to="4"></li>
                                              <li data-target="#lightboxMachineStamping" data-slide-to="5"></li>                                       
                                            </ol>
                                            <div class="carousel-inner" style="padding-bottom: 20px;">
                                              
                                              <div class="carousel-item active">
                                                <p style="text-align: center;"><?php echo $lob->machine1_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine1) ?>" class="w-100"alt="Product-1">
                                              </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $lob->machine2_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine2) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $lob->machine3_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine3) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $lob->machine4_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine4) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $lob->machine5_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine5) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $lob->machine6_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine6) ?>" class="w-100"
                                                 alt="">
                                               </div>                                             
                                            </div>
                                            <a class="carousel-control-prev cpv-lightbox" href="#lightboxMachineStamping" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next cpn-lightbox" href="#lightboxMachineStamping" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>                           
              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalTechStamping">TECHNOLOGY</button>
                        <div class="modal fade modalTechStamping" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5>TECHNOLOGY <?php echo $lob->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                    <div class="row d-flex justify-content-around">
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->tech1_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechStamping" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech1) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->tech2_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechStamping" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech2) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->tech3_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechStamping" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech3) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->tech4_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechStamping" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech4) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->tech5_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechStamping" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech5) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechStamping">
                                        <div class="title-lob">
                                          <p><?php echo $lob->tech6_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechStamping" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech6) ?>" class="img-thumbnail my-3"></a>
                                      </div>                                      
                                    </div>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modalTechStamping" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                      <div class="modal-content modal-content-zoom">
                                        <div class="modal-body modal-body-zoom" >
                                          <div id="lightboxTechStamping" class="carousel slide" data-interval="false" data-keyboard="true">
                                            <ol class="carousel-indicators">
                                              <li data-target="#lightboxTechStamping" data-slide-to="0"></li>
                                              <li data-target="#lightboxTechStamping" data-slide-to="1"></li>
                                              <li data-target="#lightboxTechStamping" data-slide-to="2"></li>
                                              <li data-target="#lightboxTechStamping" data-slide-to="3"></li>
                                              <li data-target="#lightboxTechStamping" data-slide-to="4"></li>
                                              <li data-target="#lightboxTechStamping" data-slide-to="5"></li>                                    
                                            </ol>
                                            <div class="carousel-inner" style="padding-bottom: 20px;">
                                              
                                              <div class="carousel-item active">
                                                <p style="text-align: center;"><?php echo $lob->tech1_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech1) ?>" class="w-100"alt="Product-1">
                                              </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $lob->tech2_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech2) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $lob->tech3_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech3) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $lob->tech4_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech4) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $lob->tech5_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech5) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $lob->tech6_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech6) ?>" class="w-100"
                                                   alt="">
                                                 </div>                                             
                                            </div>
                                            <a class="carousel-control-prev cpv-lightbox" href="#lightboxTechStamping" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next cpn-lightbox" href="#lightboxTechStamping" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>                           
              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">VIDEO </button>

                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">VIDEO <?php echo $lob->judul ?></h4>
                                </div>
                                <div class="modal-body">
                                  <?php 
                                  $sorry = base_url('assets/img/line-of-business/sorry.jpg');
                                  $video = base_url('uploads/line_of_business/'.$lob->video);
                                  if ($lob->video == null || '') {
                                    echo "
                                    <div class='card card-img rounded' >
                                      <img src='$sorry' />   
                                    </div> 
                                    ";
                                  } else {
                                    echo "
                                    <div class='embed-responsive embed-responsive-16by9'>
                                      <video width='auto' controls>
                                        <source src='$video' type='video/mp4'>
                                      </video>
                                    </div>      
                                    ";
                                  }
                                   ?>
                                                              
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal"> Tutup </button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                      </div>

                      <div class="col-lg-5 text-center order-1 order-lg-2">
                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->img_besar) ?>" alt="" class="img-fluid rounded shadow">
                    </div>
                </div>
                <?php endforeach; ?>
          </div>

            <!-- INJECTION -->
            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <?php foreach($injection as $injection): ?> 
                    <div class="col-lg-7 details order-2 order-lg-1">
                        <h3><strong><?php echo $injection->judul ?></strong></h3>
                        <p><?php echo $injection->deskripsi ?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalProductInjection">PRODUCT</button>
                        <div class="modal fade modalProductInjection" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header justify-text-center">
                                <h5>PRODUCT <?php echo $injection->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                  <div class="row d-flex justify-content-around">
                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductInjection">
                                      <div class="title-lob">
                                        <p><?php echo $injection->product1_name ?></p>
                                      </div>                                        
                                      <a href="#lightboxProductInjection" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->product1) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductInjection">
                                      <div class="title-lob">
                                        <p><?php echo $injection->product2_name ?></p>
                                      </div>  
                                      <a href="#lightboxProductInjection" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->product2) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductInjection">
                                      <div class="title-lob">
                                        <p><?php echo $injection->product3_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductInjection" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->product3) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductInjection">
                                      <div class="title-lob">
                                        <p><?php echo $injection->product4_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductInjection" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->product4) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductInjection">
                                      <div class="title-lob">
                                        <p><?php echo $injection->product5_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductInjection" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->product5) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductInjection">
                                      <div class="title-lob">
                                        <p><?php echo $injection->product6_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductInjection" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->product6) ?>" class="img-thumbnail my-3"></a>
                                    </div>                                      
                                  </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modalProductInjection" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content modal-content-zoom">
                                      <div class="modal-body modal-body-zoom" >
                                        <div id="lightboxProductInjection" class="carousel slide" data-interval="false" data-keyboard="true">
                                          <ol class="carousel-indicators indicators-zoom">
                                            <li data-target="#lightboxProductInjection" data-slide-to="0"></li>
                                            <li data-target="#lightboxProductInjection" data-slide-to="1"></li>
                                            <li data-target="#lightboxProductInjection" data-slide-to="2"></li>
                                            <li data-target="#lightboxProductInjection" data-slide-to="3"></li>
                                            <li data-target="#lightboxProductInjection" data-slide-to="4"></li>
                                            <li data-target="#lightboxProductInjection" data-slide-to="5"></li>                                  
                                          </ol>

                                          <div class="carousel-inner" style="padding-bottom: 20px;">
                                            <div class="carousel-item active">
                                              <p style="text-align: center;"><?php echo $injection->product1_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$injection->product1) ?>" class="w-100"alt="Product-1">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $injection->product2_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$injection->product2) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $injection->product3_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$injection->product3) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $injection->product4_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$injection->product4) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $injection->product5_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$injection->product5) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $injection->product6_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$injection->product6) ?>" class="w-100"
                                                 alt="">
                                            </div>  
                                          </div>

                                          <a class="carousel-control-prev cpv-lightbox" href="#lightboxProductInjection" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                          <a class="carousel-control-next cpn-lightbox" href="#lightboxProductInjection" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br>                           
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalMachineInjection">MACHINE</button>
                        <div class="modal fade modalMachineInjection" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5>MACHINE <?php echo $injection->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                    <div class="row d-flex justify-content-around">
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->machine1_name ?></p>
                                        </div>  
                                        <a href="#lightboxMachineInjection" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine1) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->machine2_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineInjection" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine2) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->machine3_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineInjection" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine3) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->machine4_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineInjection" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine4) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->machine5_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineInjection" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine5) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->machine6_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineInjection" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine6) ?>" class="img-thumbnail my-3"></a>
                                      </div>                                      
                                    </div>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modalMachineInjection" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                      <div class="modal-content modal-content-zoom">
                                        <div class="modal-body modal-body-zoom" >
                                          <div id="lightboxMachineInjection" class="carousel slide" data-interval="false" data-keyboard="true">
                                            <ol class="carousel-indicators">
                                              <li data-target="#lightboxMachineInjection" data-slide-to="0"></li>
                                              <li data-target="#lightboxMachineInjection" data-slide-to="1"></li>
                                              <li data-target="#lightboxMachineInjection" data-slide-to="2"></li>
                                              <li data-target="#lightboxMachineInjection" data-slide-to="3"></li>
                                              <li data-target="#lightboxMachineInjection" data-slide-to="4"></li>
                                              <li data-target="#lightboxMachineInjection" data-slide-to="5"></li>                                       
                                            </ol>
                                            <div class="carousel-inner" style="padding-bottom: 20px;">
                                              
                                              <div class="carousel-item active">
                                                <p style="text-align: center;"><?php echo $injection->machine1_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine1) ?>" class="w-100"alt="Product-1">
                                              </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $injection->machine2_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine2) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $injection->machine3_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine3) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $injection->machine4_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine4) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $injection->machine5_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine5) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $injection->machine6_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine6) ?>" class="w-100"
                                                 alt="">
                                               </div>                                             
                                            </div>
                                            <a class="carousel-control-prev cpv-lightbox" href="#lightboxMachineInjection" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next cpn-lightbox" href="#lightboxMachineInjection" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>                           
              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalTechInjection">TECHNOLOGY</button>
                        <div class="modal fade modalTechInjection" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5>TECHNOLOGY <?php echo $injection->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                    <div class="row d-flex justify-content-around">
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->tech1_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechInjection" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech1) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->tech2_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechInjection" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech2) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->tech3_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechInjection" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech3) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->tech4_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechInjection" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech4) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->tech5_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechInjection" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech5) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechInjection">
                                        <div class="title-lob">
                                          <p><?php echo $injection->tech6_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechInjection" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech6) ?>" class="img-thumbnail my-3"></a>
                                      </div>                                      
                                    </div>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modalTechInjection" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                      <div class="modal-content modal-content-zoom">
                                        <div class="modal-body modal-body-zoom" >
                                          <div id="lightboxTechInjection" class="carousel slide" data-interval="false" data-keyboard="true">
                                            <ol class="carousel-indicators">
                                              <li data-target="#lightboxTechInjection" data-slide-to="0"></li>
                                              <li data-target="#lightboxTechInjection" data-slide-to="1"></li>
                                              <li data-target="#lightboxTechInjection" data-slide-to="2"></li>
                                              <li data-target="#lightboxTechInjection" data-slide-to="3"></li>
                                              <li data-target="#lightboxTechInjection" data-slide-to="4"></li>
                                              <li data-target="#lightboxTechInjection" data-slide-to="5"></li>                                    
                                            </ol>
                                            <div class="carousel-inner" style="padding-bottom: 20px;">
                                              
                                              <div class="carousel-item active">
                                                <p style="text-align: center;"><?php echo $injection->tech1_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech1) ?>" class="w-100"alt="Product-1">
                                              </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $injection->tech2_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech2) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $injection->tech3_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech3) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $injection->tech4_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech4) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $injection->tech5_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech5) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $injection->tech6_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$injection->tech6) ?>" class="w-100"
                                                   alt="">
                                                 </div>                                             
                                            </div>
                                            <a class="carousel-control-prev cpv-lightbox" href="#lightboxTechInjection" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next cpn-lightbox" href="#lightboxTechInjection" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>                           
              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalVideoInjection">VIDEO </button>

                          <!-- Modal -->
                          <div class="modal fade" id="modalVideoInjection" role="dialog">
                            <div class="modal-dialog modal-lg">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">VIDEO <?php echo $injection->judul ?></h4>
                                </div>
                                <div class="modal-body">
                                  <?php 
                                  $sorry = base_url('assets/img/line-of-business/sorry.jpg');
                                  $video = base_url('uploads/line_of_business/'.$injection->video);
                                  if ($injection->video == null || '') {
                                    echo "
                                    <div class='card card-img rounded' >
                                      <img src='$sorry' />   
                                    </div> 
                                    ";
                                  } else {
                                    echo "
                                    <div class='embed-responsive embed-responsive-16by9'>
                                      <video width='auto' controls>
                                        <source src='$video' type='video/mp4'>
                                      </video>
                                    </div>      
                                    ";
                                  }
                                   ?>                               
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal"> Tutup </button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                      </div>

                      <div class="col-lg-5 text-center order-1 order-lg-2">
                        <img src="<?php echo base_url('uploads/line_of_business/'.$injection->img_besar) ?>" alt="" class="img-fluid rounded shadow">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="tab-pane" id="tab-3">
                <div class="row">
                    <?php foreach($machining as $machining): ?> 
                    <div class="col-lg-7 details order-2 order-lg-1">
                        <h3><strong><?php echo $machining->judul ?></strong></h3>
                        <p><?php echo $machining->deskripsi ?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalProductMachining">PRODUCT</button>
                        <div class="modal fade modalProductMachining" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header justify-text-center">
                                <h5>PRODUCT <?php echo $machining->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                  <div class="row d-flex justify-content-around">
                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductMachining">
                                      <div class="title-lob">
                                        <p><?php echo $machining->product1_name ?></p>
                                      </div>                                        
                                      <a href="#lightboxProductMachining" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->product1) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductMachining">
                                      <div class="title-lob">
                                        <p><?php echo $machining->product2_name ?></p>
                                      </div>  
                                      <a href="#lightboxProductMachining" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->product2) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductMachining">
                                      <div class="title-lob">
                                        <p><?php echo $machining->product3_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductMachining" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->product3) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductMachining">
                                      <div class="title-lob">
                                        <p><?php echo $machining->product4_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductMachining" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->product4) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductMachining">
                                      <div class="title-lob">
                                        <p><?php echo $machining->product5_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductMachining" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->product5) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductMachining">
                                      <div class="title-lob">
                                        <p><?php echo $machining->product6_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductMachining" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->product6) ?>" class="img-thumbnail my-3"></a>
                                    </div>                                      
                                  </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modalProductMachining" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content modal-content-zoom">
                                      <div class="modal-body modal-body-zoom" >
                                        <div id="lightboxProductMachining" class="carousel slide" data-interval="false" data-keyboard="true">
                                          <ol class="carousel-indicators indicators-zoom">
                                            <li data-target="#lightboxProductMachining" data-slide-to="0"></li>
                                            <li data-target="#lightboxProductMachining" data-slide-to="1"></li>
                                            <li data-target="#lightboxProductMachining" data-slide-to="2"></li>
                                            <li data-target="#lightboxProductMachining" data-slide-to="3"></li>
                                            <li data-target="#lightboxProductMachining" data-slide-to="4"></li>
                                            <li data-target="#lightboxProductMachining" data-slide-to="5"></li>                                  
                                          </ol>

                                          <div class="carousel-inner" style="padding-bottom: 20px;">
                                            <div class="carousel-item active">
                                              <p style="text-align: center;"><?php echo $machining->product1_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$machining->product1) ?>" class="w-100"alt="Product-1">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $machining->product2_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$machining->product2) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $machining->product3_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$machining->product3) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $machining->product4_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$machining->product4) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $machining->product5_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$machining->product5) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $machining->product6_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$machining->product6) ?>" class="w-100"
                                                 alt="">
                                            </div>  
                                          </div>

                                          <a class="carousel-control-prev cpv-lightbox" href="#lightboxProductMachining" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                          <a class="carousel-control-next cpn-lightbox" href="#lightboxProductMachining" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br>                           
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalMachineMachining">MACHINE</button>
                        <div class="modal fade modalMachineMachining" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5>MACHINE <?php echo $machining->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                    <div class="row d-flex justify-content-around">
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->machine1_name ?></p>
                                        </div>  
                                        <a href="#lightboxMachineMachining" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine1) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->machine2_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineMachining" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine2) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->machine3_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineMachining" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine3) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->machine4_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineMachining" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine4) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->machine5_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineMachining" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine5) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->machine6_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineMachining" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine6) ?>" class="img-thumbnail my-3"></a>
                                      </div>                                      
                                    </div>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modalMachineMachining" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                      <div class="modal-content modal-content-zoom">
                                        <div class="modal-body modal-body-zoom" >
                                          <div id="lightboxMachineMachining" class="carousel slide" data-interval="false" data-keyboard="true">
                                            <ol class="carousel-indicators">
                                              <li data-target="#lightboxMachineMachining" data-slide-to="0"></li>
                                              <li data-target="#lightboxMachineMachining" data-slide-to="1"></li>
                                              <li data-target="#lightboxMachineMachining" data-slide-to="2"></li>
                                              <li data-target="#lightboxMachineMachining" data-slide-to="3"></li>
                                              <li data-target="#lightboxMachineMachining" data-slide-to="4"></li>
                                              <li data-target="#lightboxMachineMachining" data-slide-to="5"></li>                                       
                                            </ol>
                                            <div class="carousel-inner" style="padding-bottom: 20px;">
                                              
                                              <div class="carousel-item active">
                                                <p style="text-align: center;"><?php echo $machining->machine1_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine1) ?>" class="w-100"alt="Product-1">
                                              </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $machining->machine2_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine2) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $machining->machine3_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine3) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $machining->machine4_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine4) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $machining->machine5_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$machining->machine5) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $machining->machine6_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$injection->machine6) ?>" class="w-100"
                                                 alt="">
                                               </div>                                             
                                            </div>
                                            <a class="carousel-control-prev cpv-lightbox" href="#lightboxMachineMachining" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next cpn-lightbox" href="#lightboxMachineMachining" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>                           
              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalTechMachining">TECHNOLOGY</button>
                        <div class="modal fade modalTechMachining" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5>TECHNOLOGY <?php echo $machining->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                    <div class="row d-flex justify-content-around">
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->tech1_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechMachining" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech1) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->tech2_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechMachining" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech2) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->tech3_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechMachining" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech3) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->tech4_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechMachining" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech4) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->tech5_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechMachining" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech5) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechMachining">
                                        <div class="title-lob">
                                          <p><?php echo $machining->tech6_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechMachining" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech6) ?>" class="img-thumbnail my-3"></a>
                                      </div>                                      
                                    </div>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modalTechMachining" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                      <div class="modal-content modal-content-zoom">
                                        <div class="modal-body modal-body-zoom" >
                                          <div id="lightboxTechMachining" class="carousel slide" data-interval="false" data-keyboard="true">
                                            <ol class="carousel-indicators">
                                              <li data-target="#lightboxTechMachining" data-slide-to="0"></li>
                                              <li data-target="#lightboxTechMachining" data-slide-to="1"></li>
                                              <li data-target="#lightboxTechMachining" data-slide-to="2"></li>
                                              <li data-target="#lightboxTechMachining" data-slide-to="3"></li>
                                              <li data-target="#lightboxTechMachining" data-slide-to="4"></li>
                                              <li data-target="#lightboxTechMachining" data-slide-to="5"></li>                                    
                                            </ol>
                                            <div class="carousel-inner" style="padding-bottom: 20px;">
                                              
                                              <div class="carousel-item active">
                                                <p style="text-align: center;"><?php echo $machining->tech1_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech1) ?>" class="w-100"alt="Product-1">
                                              </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $machining->tech2_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech2) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $machining->tech3_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech3) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $machining->tech4_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech4) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $machining->tech5_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech5) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $machining->tech6_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$machining->tech6) ?>" class="w-100"
                                                   alt="">
                                                 </div>                                             
                                            </div>
                                            <a class="carousel-control-prev cpv-lightbox" href="#lightboxTechMachining" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next cpn-lightbox" href="#lightboxTechMachining" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>                           
              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalVideoMachining">VIDEO </button>

                          <!-- Modal -->
                          <div class="modal fade" id="modalVideoMachining" role="dialog">
                            <div class="modal-dialog modal-lg">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">VIDEO <?php echo $machining->judul ?></h4>
                                </div>
                                <div class="modal-body">
                                  <?php 
                                  $sorry = base_url('assets/img/line-of-business/sorry.jpg');
                                  $video = base_url('uploads/line_of_business/'.$machining->video);
                                  if ($machining->video == null || '') {
                                    echo "
                                    <div class='card card-img rounded' >
                                      <img src='$sorry' />   
                                    </div> 
                                    ";
                                  } else {
                                    echo "
                                    <div class='embed-responsive embed-responsive-16by9'>
                                      <video width='auto' controls>
                                        <source src='$video' type='video/mp4'>
                                      </video>
                                    </div>      
                                    ";
                                  }
                                   ?>                                  
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal"> Tutup </button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                      </div>

                      <div class="col-lg-5 text-center order-1 order-lg-2">
                        <img src="<?php echo base_url('uploads/line_of_business/'.$machining->img_besar) ?>" alt="" class="img-fluid rounded shadow">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="tab-pane" id="tab-4">
                <div class="row">
                    <?php foreach($assembly as $assembly): ?> 
                    <div class="col-lg-7 details order-2 order-lg-1">
                        <h3><strong><?php echo $assembly->judul ?></strong></h3>
                        <p><?php echo $assembly->deskripsi ?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalProductAssembly">PRODUCT</button>
                        <div class="modal fade modalProductAssembly" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header justify-text-center">
                                <h5>PRODUCT <?php echo $assembly->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                  <div class="row d-flex justify-content-around">
                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductAssembly">
                                      <div class="title-lob">
                                        <p><?php echo $assembly->product1_name ?></p>
                                      </div>                                        
                                      <a href="#lightboxProductAssembly" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product1) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductAssembly">
                                      <div class="title-lob">
                                        <p><?php echo $assembly->product2_name ?></p>
                                      </div>  
                                      <a href="#lightboxProductAssembly" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product2) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductAssembly">
                                      <div class="title-lob">
                                        <p><?php echo $assembly->product3_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductAssembly" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product3) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductAssembly">
                                      <div class="title-lob">
                                        <p><?php echo $assembly->product4_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductAssembly" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product4) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductAssembly">
                                      <div class="title-lob">
                                        <p><?php echo $assembly->product5_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductAssembly" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product5) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductAssembly">
                                      <div class="title-lob">
                                        <p><?php echo $assembly->product6_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductAssembly" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product6) ?>" class="img-thumbnail my-3"></a>
                                    </div>                                      
                                  </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modalProductAssembly" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content modal-content-zoom">
                                      <div class="modal-body modal-body-zoom" >
                                        <div id="lightboxProductAssembly" class="carousel slide" data-interval="false" data-keyboard="true">
                                          <ol class="carousel-indicators indicators-zoom">
                                            <li data-target="#lightboxProductAssembly" data-slide-to="0"></li>
                                            <li data-target="#lightboxProductAssembly" data-slide-to="1"></li>
                                            <li data-target="#lightboxProductAssembly" data-slide-to="2"></li>
                                            <li data-target="#lightboxProductAssembly" data-slide-to="3"></li>
                                            <li data-target="#lightboxProductAssembly" data-slide-to="4"></li>
                                            <li data-target="#lightboxProductAssembly" data-slide-to="5"></li>                                  
                                          </ol>

                                          <div class="carousel-inner" style="padding-bottom: 20px;">
                                            <div class="carousel-item active">
                                              <p style="text-align: center;"><?php echo $assembly->product1_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product1) ?>" class="w-100"alt="Product-1">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $assembly->product2_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product2) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $assembly->product3_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product3) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $assembly->product4_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product4) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $assembly->product5_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product5) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $assembly->product6_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->product6) ?>" class="w-100"
                                                 alt="">
                                            </div>  
                                          </div>

                                          <a class="carousel-control-prev cpv-lightbox" href="#lightboxProductAssembly" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                          <a class="carousel-control-next cpn-lightbox" href="#lightboxProductAssembly" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br>                           
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalMachineAssembly">MACHINE</button>
                        <div class="modal fade modalMachineAssembly" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5>MACHINE <?php echo $assembly->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                    <div class="row d-flex justify-content-around">
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->machine1_name ?></p>
                                        </div>  
                                        <a href="#lightboxMachineAssembly" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine1) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->machine2_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineAssembly" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine2) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->machine3_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineAssembly" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine3) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->machine4_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineAssembly" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine4) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->machine5_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineAssembly" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine5) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->machine6_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineAssembly" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine6) ?>" class="img-thumbnail my-3"></a>
                                      </div>                                      
                                    </div>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modalMachineAssembly" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                      <div class="modal-content modal-content-zoom">
                                        <div class="modal-body modal-body-zoom" >
                                          <div id="lightboxMachineAssembly" class="carousel slide" data-interval="false" data-keyboard="true">
                                            <ol class="carousel-indicators">
                                              <li data-target="#lightboxMachineAssembly" data-slide-to="0"></li>
                                              <li data-target="#lightboxMachineAssembly" data-slide-to="1"></li>
                                              <li data-target="#lightboxMachineAssembly" data-slide-to="2"></li>
                                              <li data-target="#lightboxMachineAssembly" data-slide-to="3"></li>
                                              <li data-target="#lightboxMachineAssembly" data-slide-to="4"></li>
                                              <li data-target="#lightboxMachineAssembly" data-slide-to="5"></li>                                       
                                            </ol>
                                            <div class="carousel-inner" style="padding-bottom: 20px;">
                                              
                                              <div class="carousel-item active">
                                                <p style="text-align: center;"><?php echo $assembly->machine1_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine1) ?>" class="w-100"alt="Product-1">
                                              </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $assembly->machine2_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine2) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $assembly->machine3_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine3) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $assembly->machine4_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine4) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $assembly->machine5_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine5) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $assembly->machine6_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->machine6) ?>" class="w-100"
                                                 alt="">
                                               </div>                                             
                                            </div>
                                            <a class="carousel-control-prev cpv-lightbox" href="#lightboxMachineAssembly" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next cpn-lightbox" href="#lightboxMachineAssembly" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>                           
              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalTechAssembly">TECHNOLOGY</button>
                        <div class="modal fade modalTechAssembly" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5>TECHNOLOGY <?php echo $assembly->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                    <div class="row d-flex justify-content-around">
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->tech1_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechAssembly" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech1) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->tech2_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechAssembly" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech2) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->tech3_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechAssembly" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech3) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->tech4_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechAssembly" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech4) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->tech5_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechAssembly" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech5) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechAssembly">
                                        <div class="title-lob">
                                          <p><?php echo $assembly->tech6_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechAssembly" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech6) ?>" class="img-thumbnail my-3"></a>
                                      </div>                                      
                                    </div>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modalTechAssembly" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                      <div class="modal-content modal-content-zoom">
                                        <div class="modal-body modal-body-zoom" >
                                          <div id="lightboxTechAssembly" class="carousel slide" data-interval="false" data-keyboard="true">
                                            <ol class="carousel-indicators">
                                              <li data-target="#lightboxTechAssembly" data-slide-to="0"></li>
                                              <li data-target="#lightboxTechAssembly" data-slide-to="1"></li>
                                              <li data-target="#lightboxTechAssembly" data-slide-to="2"></li>
                                              <li data-target="#lightboxTechAssembly" data-slide-to="3"></li>
                                              <li data-target="#lightboxTechAssembly" data-slide-to="4"></li>
                                              <li data-target="#lightboxTechAssembly" data-slide-to="5"></li>                                    
                                            </ol>
                                            <div class="carousel-inner" style="padding-bottom: 20px;">
                                              
                                              <div class="carousel-item active">
                                                <p style="text-align: center;"><?php echo $assembly->tech1_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech1) ?>" class="w-100"alt="Product-1">
                                              </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $assembly->tech2_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech2) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $assembly->tech3_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech3) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $assembly->tech4_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech4) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $assembly->tech5_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech5) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $assembly->tech6_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->tech6) ?>" class="w-100"
                                                   alt="">
                                                 </div>                                             
                                            </div>
                                            <a class="carousel-control-prev cpv-lightbox" href="#lightboxTechAssembly" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next cpn-lightbox" href="#lightboxTechAssembly" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>                           
              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalVideoAssembly">VIDEO </button>

                          <!-- Modal -->
                          <div class="modal fade" id="modalVideoAssembly" role="dialog">
                            <div class="modal-dialog modal-lg">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">VIDEO <?php echo $assembly->judul ?></h4>
                                </div>
                                <div class="modal-body">
                                  <?php 
                                  $sorry = base_url('assets/img/line-of-business/sorry.jpg');
                                  $video = base_url('uploads/line_of_business/'.$assembly->video);
                                  if ($assembly->video == null || '') {
                                    echo "
                                    <div class='card card-img rounded' >
                                      <img src='$sorry' />   
                                    </div> 
                                    ";
                                  } else {
                                    echo "
                                    <div class='embed-responsive embed-responsive-16by9'>
                                      <video width='auto' controls>
                                        <source src='$video' type='video/mp4'>
                                      </video>
                                    </div>      
                                    ";
                                  }
                                   ?>                                 
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal"> Tutup </button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                      </div>

                      <div class="col-lg-5 text-center order-1 order-lg-2">
                        <img src="<?php echo base_url('uploads/line_of_business/'.$assembly->img_besar) ?>" alt="" class="img-fluid rounded shadow">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="tab-pane" id="tab-5">
                <div class="row">
                    <?php foreach($tooling as $tooling): ?> 
                    <div class="col-lg-7 details order-2 order-lg-1">
                        <h3><strong><?php echo $tooling->judul ?></strong></h3>
                        <p><?php echo $tooling->deskripsi ?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalProductTooling">PRODUCT</button>
                        <div class="modal fade modalProductTooling" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header justify-text-center">
                                <h5>PRODUCT <?php echo $tooling->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                  <div class="row d-flex justify-content-around">
                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductTooling">
                                      <div class="title-lob">
                                        <p><?php echo $tooling->product1_name ?></p>
                                      </div>                                        
                                      <a href="#lightboxProductTooling" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product1) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductTooling">
                                      <div class="title-lob">
                                        <p><?php echo $tooling->product2_name ?></p>
                                      </div>  
                                      <a href="#lightboxProductTooling" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product2) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductTooling">
                                      <div class="title-lob">
                                        <p><?php echo $tooling->product3_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductTooling" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product3) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductTooling">
                                      <div class="title-lob">
                                        <p><?php echo $tooling->product4_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductTooling" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product4) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductTooling">
                                      <div class="title-lob">
                                        <p><?php echo $tooling->product5_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductTooling" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product5) ?>" class="img-thumbnail my-3"></a>
                                    </div>

                                    <div class="col-lg-4" data-toggle="modal" data-target="#modalProductTooling">
                                      <div class="title-lob">
                                        <p><?php echo $tooling->product6_name ?></p>
                                      </div> 
                                      <a href="#lightboxProductTooling" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product6) ?>" class="img-thumbnail my-3"></a>
                                    </div>                                      
                                  </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modalProductTooling" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content modal-content-zoom">
                                      <div class="modal-body modal-body-zoom" >
                                        <div id="lightboxProductTooling" class="carousel slide" data-interval="false" data-keyboard="true">
                                          <ol class="carousel-indicators indicators-zoom">
                                            <li data-target="#lightboxProductTooling" data-slide-to="0"></li>
                                            <li data-target="#lightboxProductTooling" data-slide-to="1"></li>
                                            <li data-target="#lightboxProductTooling" data-slide-to="2"></li>
                                            <li data-target="#lightboxProductTooling" data-slide-to="3"></li>
                                            <li data-target="#lightboxProductTooling" data-slide-to="4"></li>
                                            <li data-target="#lightboxProductTooling" data-slide-to="5"></li>                                  
                                          </ol>

                                          <div class="carousel-inner" style="padding-bottom: 20px;">
                                            <div class="carousel-item active">
                                              <p style="text-align: center;"><?php echo $tooling->product1_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product1) ?>" class="w-100"alt="Product-1">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $tooling->product2_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product2) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $tooling->product3_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product3) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $tooling->product4_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product4) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $tooling->product5_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product5) ?>" class="w-100"
                                                 alt="">
                                            </div>

                                            <div class="carousel-item">
                                              <p style="text-align: center;"><?php echo $tooling->product6_name ?></p>
                                              <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->product6) ?>" class="w-100"
                                                 alt="">
                                            </div>  
                                          </div>

                                          <a class="carousel-control-prev cpv-lightbox" href="#lightboxProductTooling" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                          <a class="carousel-control-next cpn-lightbox" href="#lightboxProductTooling" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br>                           
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalMachineTooling">MACHINE</button>
                        <div class="modal fade modalMachineTooling" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5>MACHINE <?php echo $tooling->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                    <div class="row d-flex justify-content-around">
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->machine1_name ?></p>
                                        </div>  
                                        <a href="#lightboxMachineTooling" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine1) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->machine2_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineTooling" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine2) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->machine3_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineTooling" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine3) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->machine4_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineTooling" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine4) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->machine5_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineTooling" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine5) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalMachineTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->machine6_name ?></p>
                                        </div> 
                                        <a href="#lightboxMachineTooling" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine6) ?>" class="img-thumbnail my-3"></a>
                                      </div>                                      
                                    </div>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modalMachineTooling" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                      <div class="modal-content modal-content-zoom">
                                        <div class="modal-body modal-body-zoom" >
                                          <div id="lightboxMachineTooling" class="carousel slide" data-interval="false" data-keyboard="true">
                                            <ol class="carousel-indicators">
                                              <li data-target="#lightboxMachineTooling" data-slide-to="0"></li>
                                              <li data-target="#lightboxMachineTooling" data-slide-to="1"></li>
                                              <li data-target="#lightboxMachineTooling" data-slide-to="2"></li>
                                              <li data-target="#lightboxMachineTooling" data-slide-to="3"></li>
                                              <li data-target="#lightboxMachineTooling" data-slide-to="4"></li>
                                              <li data-target="#lightboxMachineTooling" data-slide-to="5"></li>                                       
                                            </ol>
                                            <div class="carousel-inner" style="padding-bottom: 20px;">
                                              
                                              <div class="carousel-item active">
                                                <p style="text-align: center;"><?php echo $tooling->machine1_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine1) ?>" class="w-100"alt="Product-1">
                                              </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $tooling->machine2_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine2) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $tooling->machine3_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine3) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $tooling->machine4_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine4) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $tooling->machine5_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine5) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $tooling->machine6_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->machine6) ?>" class="w-100"
                                                 alt="">
                                               </div>                                             
                                            </div>
                                            <a class="carousel-control-prev cpv-lightbox" href="#lightboxMachineTooling" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next cpn-lightbox" href="#lightboxMachineTooling" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>                           
              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalTechTooling">TECHNOLOGY</button>
                        <div class="modal fade modalTechTooling" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5>TECHNOLOGY <?php echo $tooling->judul ?></h5>
                              </div>
                              <div class="modal-body">
                                <div class="container justify-text-center">
                                    <div class="row d-flex justify-content-around">
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->tech1_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechTooling" data-slide-to="0"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech1) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->tech2_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechTooling" data-slide-to="1"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech2) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->tech3_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechTooling" data-slide-to="2"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech3) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->tech4_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechTooling" data-slide-to="3"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech4) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->tech5_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechTooling" data-slide-to="4"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech5) ?>" class="img-thumbnail my-3"></a>
                                      </div>
                                      <div class="col-lg-4" data-toggle="modal" data-target="#modalTechTooling">
                                        <div class="title-lob">
                                          <p><?php echo $tooling->tech6_name ?></p>
                                        </div> 
                                        <a href="#lightboxTechTooling" data-slide-to="5"><img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech6) ?>" class="img-thumbnail my-3"></a>
                                      </div>                                      
                                    </div>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modalTechTooling" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                      <div class="modal-content modal-content-zoom">
                                        <div class="modal-body modal-body-zoom" >
                                          <div id="lightboxTechTooling" class="carousel slide" data-interval="false" data-keyboard="true">
                                            <ol class="carousel-indicators">
                                              <li data-target="#lightboxTechTooling" data-slide-to="0"></li>
                                              <li data-target="#lightboxTechTooling" data-slide-to="1"></li>
                                              <li data-target="#lightboxTechTooling" data-slide-to="2"></li>
                                              <li data-target="#lightboxTechTooling" data-slide-to="3"></li>
                                              <li data-target="#lightboxTechTooling" data-slide-to="4"></li>
                                              <li data-target="#lightboxTechTooling" data-slide-to="5"></li>                                    
                                            </ol>
                                            <div class="carousel-inner" style="padding-bottom: 20px;">
                                              
                                              <div class="carousel-item active">
                                                <p style="text-align: center;"><?php echo $tooling->tech1_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech1) ?>" class="w-100"alt="Product-1">
                                              </div>
                                              <div class="carousel-item">
                                                <p style="text-align: center;"><?php echo $tooling->tech2_name ?></p>
                                                <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech2) ?>" class="w-100"
                                                 alt="">
                                               </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $tooling->tech3_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech3) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $tooling->tech4_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech4) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $tooling->tech5_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech5) ?>" class="w-100"
                                                   alt="">
                                                 </div>
                                                <div class="carousel-item">
                                                  <p style="text-align: center;"><?php echo $tooling->tech6_name ?></p>
                                                  <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->tech6) ?>" class="w-100"
                                                   alt="">
                                                 </div>                                             
                                            </div>
                                            <a class="carousel-control-prev cpv-lightbox" href="#lightboxTechTooling" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next cpn-lightbox" href="#lightboxTechTooling" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>                           
              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalVideoTooling">VIDEO </button>

                          <!-- Modal -->
                          <div class="modal fade" id="modalVideoTooling" role="dialog">
                            <div class="modal-dialog modal-lg">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">VIDEO <?php echo $tooling->judul ?></h4>
                                </div>
                                <div class="modal-body">
                                  <?php 
                                  $sorry = base_url('assets/img/line-of-business/sorry.jpg');
                                  $video = base_url('uploads/line_of_business/'.$tooling->video);
                                  if ($tooling->video == null || '') {
                                    echo "
                                    <div class='card card-img rounded' >
                                      <img src='$sorry' />   
                                    </div> 
                                    ";
                                  } else {
                                    echo "
                                    <div class='embed-responsive embed-responsive-16by9'>
                                      <video width='auto' controls>
                                        <source src='$video' type='video/mp4'>
                                      </video>
                                    </div>      
                                    ";
                                  }
                                   ?>                                 
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal"> Tutup </button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                      </div>

                      <div class="col-lg-5 text-center order-1 order-lg-2">
                        <img src="<?php echo base_url('uploads/line_of_business/'.$tooling->img_besar) ?>" alt="" class="img-fluid rounded shadow">
                    </div>
                    <?php endforeach; ?>
                </div>
              </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</section>
