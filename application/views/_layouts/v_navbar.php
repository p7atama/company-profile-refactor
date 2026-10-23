
<?php error_reporting(0); // Turn off all error reporting ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT Padma Soode Indonesia</title>
    
    <!-- Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- CSS Bootstrap Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

    <!-- My Style CSS -->
    <link href="<?php echo base_url('compro_style.css') ?>" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/css/owl.theme.default.min.css') ?>">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Owl Carousel JS -->
    <script src="<?php echo base_url('assets/vendor/owl.carousel/js/owl.carousel.js') ?>"></script> 

    <!-- Tinymce -->
    <script src="https://cdn.tiny.cloud/1/vzoc9w3ghyy7t7mjsc0ceuwbsv1g2qoaw8hvc23wsxg2ju0o/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Datepicker JS -->
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>  
</head>

<body>
    <!-- Header -->
    <header id="header">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand nb-logo-soode" href="<?php echo base_url('dashboard')?>">
                        <img src="<?php echo base_url(); ?>assets/img/logo-soode.png" width="135" height="50" class="d-inline-block align-top img-responsive" alt="">
                    </a>
                    <a class="navbar-brand nb-logo-aeo">
                        <img src="<?php echo base_url(); ?>assets/img/logo-aeo.jpg" width="65" height="45" class="d-inline-block align-top img-responsive" alt="">
                    </a>
                  
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="nav-menu collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">  
                            <li class="nav-item">
                                <div class="nav-link">
                                    <a href="<?php echo base_url('dashboard')?>">Home</a>
                                </div>
                            </li>                          
                            <li class="nav-item dropdown">
                                <div class="nav-link">
                                    <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo base_url('vision_mission')?>">Vision and Mission</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url('milestone')?>">Milestone</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url('world_wide_groups')?>">World Wide Groups</a> 
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url('conflict_mineral_policy')?>">The Conflict Mineral Policy</a>                        
                                    </div>
                                </div>
                               
                            </li>  
                            <li class="nav-item">
                                <div class="nav-link">
                                    <a href="<?php echo base_url('line_of_business')?>">Line of Business</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <a href="<?php echo base_url('career')?>">Career</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <a href="<?php echo base_url('contact')?>">Contact</a>
                                </div>
                            </li>             
                        </ul>            
                    </div>
                </div> 
            </nav>
        </header>
    <!-- Akhir Header -->

    <!--  JavaScript Bootstrap from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- JS Bootstrap Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

    
    
    
   
    
    

    
    
    
