<!-- Dashboard Carousel -->
<?php foreach($home->result() as $mh): ?>
<?php endforeach; ?>

<section id="dashboard-carousel" class="dashboard-carousel">

        <div id="carouselExampleIndicators" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            </ol>

            <div class="carousel-inner text-center">

                  <!-- Slide Pertama -->
                <div class="carousel-item active">
                    <img src="<?php echo base_url('uploads/home/'.$mh->slider1) ?>" >
                    <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                        <h3 data-animation="animated bounceInDown"><strong>
                            <?php echo $mh->text ?>
                        </strong>
                      </h3>
                    </div>
                </div>

                <!-- Slide Kedua -->
                <div class="carousel-item">
                    <img src="<?php echo base_url('uploads/home/'.$mh->slider2) ?>" >
                    <div class="carousel-caption d-md-block">                
                    </div>
                </div>

                  <!-- Slide Ketiga -->
                <div class="carousel-item">
                    <img src="<?php echo base_url('uploads/home/'.$mh->slider3) ?>" >
                    <div class="carousel-caption d-md-block">                  
                    </div>
                </div>
                 <!-- Slide Ke Empat -->
                <div class="carousel-item">
                    <img src="<?php echo base_url('uploads/home/'.$mh->slider4) ?>" >
                    <div class="carousel-caption d-md-block">                  
                    </div>
                </div>
                 <!-- Slide Ke Lima -->
                <div class="carousel-item">
                    <img src="<?php echo base_url('uploads/home/'.$mh->slider5) ?>" >
                    <div class="carousel-caption d-md-block">                  
                    </div>
                </div>
                 <!-- Slide Ke Enam -->
                <div class="carousel-item">
                    <img src="<?php echo base_url('uploads/home/'.$mh->slider6) ?>" >
                    <div class="carousel-caption d-md-block">                  
                    </div>
                </div>
                 <!-- Slide Ke Tujuh -->
                <div class="carousel-item">
                    <img src="<?php echo base_url('uploads/home/'.$mh->slider7) ?>" >
                    <div class="carousel-caption d-md-block">                  
                    </div>
                </div>
                 <!-- Slide Ke Delapan -->
                <div class="carousel-item">
                    <img src="<?php echo base_url('uploads/home/'.$mh->slider8) ?>" >
                    <div class="carousel-caption d-md-block">                  
                    </div>
                </div>
            </div>

            <!-- Control -->
            <a class="carousel-control-prev ccp-dashboard" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next ccn-dashboard" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
   
    
</section>
<!-- Akhir Dashboard Carousel -->
    
<!-- About -->
<section id ="about" class="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm12">
                <div class="section-title">
                    <h2>ABOUT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="border">
                    <div class="col-sm12">
                        <div class="section-content">
                            <p><?php echo $mh->about ?></p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</section>
<!-- Akhir About -->


<!-- Our Client -->
<section id="client" class="client">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm12">
                <div class="section-title">
                    <h2>OUR CLIENTS</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="carousel-warp">
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/clients/denso.png') ?>" >
                    </div>
                </div>
                <div class="carousel-warp">
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/clients/epson.png') ?>" >
                    </div>
                </div>
                <div class="carousel-warp">
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/clients/itron.png') ?>" >
                    </div>
                </div>
                <div class="carousel-warp">
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/clients/jvc.png') ?>" >
                    </div>
                </div>
                <div class="carousel-warp">
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/clients/panasonic.png') ?>" >
                    </div>
                </div>
                <div class="carousel-warp">
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/clients/yamaha-music.png') ?>" >
                    </div>
                </div>
            </div>               
        </div>
    </div>
    <br>
    <br>   
    <br>
</section> 

<!-- JS for Owl Carousel -->
<script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:35,
            nav:true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            dots: false,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:6
                }
            }
        }) 
</script>

<!-- JS for Dashboard Carousel -->
<script>
    (function($) {
        //Function to animate slider captions
        function doAnimations(elems) {
        //Cache the animationend event in a variable
            var animEndEv = "webkitAnimationEnd animationend";

            elems.each(function() {
                var $this = $(this),
                $animationType = $this.data("animation");
                $this.addClass($animationType).one(animEndEv, function() {
                $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $myCarousel = $("#carouselExampleIndicators"),
        $firstAnimatingElems = $myCarousel
        .find(".carousel-item:first")
        .find("[data-animation ^= 'animated']");

        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);

        //Other slides to be animated on carousel slide event
        $myCarousel.on("slide.bs.carousel", function(e) {
            var $animatingElems = $(e.relatedTarget).find(
                "[data-animation ^= 'animated']"
                );
            doAnimations($animatingElems);
              });
    })(jQuery);
</script>

