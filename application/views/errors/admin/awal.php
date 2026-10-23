<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Auto Height</title>
</head>
<link rel="stylesheet" type="text/css" href="<?= base_url("assets_admin/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets_admin/css/font-awesome.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets_admin/css/templatemo-art-factory.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets_admin/css/owl-carousel.css"); ?>">

<body>
  <div class="header">
   
  </div>
  <div class="main">
    <div class="main-content">
      <!-- ***** Contact Us Start ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <!-- <div class="row"> -->
                <!-- ***** Contact Form Start ***** -->
                <!-- <div class="col-lg-6 col-md-6 col-sm-12"> -->
                  <?php echo form_open('admin'); ?>
                  <center>
                    <div class="contact-form" style="height: 100%">
                       <div class="section-heading">
                        <h2>- LOGIN <strong>ADMIN</strong> -</h2>
                        </div>
                        <br/><br/>
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-8 offset-md-2" >
                              <fieldset>
                                <input name="user" type="text" id="user" placeholder="Username" required="" class="contact-field">
                              </fieldset>
                            </div>
                          </div>
                          <div class="row" >
                            <div class="col-md-8 offset-md-2">
                              <fieldset>
                                <input name="pass" type="password" id="password" placeholder="Password" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" name="submit" class="main-button">Login</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
               <!--  </div> -->
               <?= form_close(); ?>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->
    </div>
  </div>
  <div class="footer">
    
  </div>
</body>
</html>


 <!-- jQuery -->
    <script src="<?= base_url("assets_admin/js/jquery-2.1.0.min.js"); ?>"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url("assets_admin/js/popper.js"); ?>"></script>
    <script src="<?= base_url("assets_admin/js/bootstrap.min.js"); ?>"></script>

    <!-- Plugins -->
    <script src="<?= base_url("assets_admin/js/owl-carousel.js"); ?>"></script>
    <script src="<?= base_url("assets_admin/js/scrollreveal.min.js"); ?>"></script>
    <script src="<?= base_url("assets_admin/js/waypoints.min.js"); ?>"></script>
    <script src="<?= base_url("assets_admin/js/jquery.counterup.min.js"); ?>"></script>
    <script src="<?= base_url("assets_admin/js/imgfix.min.js"); ?>"></script> 
    
    <!-- Global Init -->
    <script src="<?= base_url("assets_admin/js/custom.js"); ?>"></script>
<style type="text/css">
  *{
  padding: 0;margin: 0;
}
html, body{
  height: 100%;
  padding: 100px;
  background: rgba(0, 136, 232, 1);
  background: -moz-linear-gradient(
    -45deg,
    rgba(0, 136, 232, 1) 0%,
    rgba(0, 182, 198, 1) 0%,
    rgba(0, 136, 232, 1) 100%
  );
  background: -webkit-gradient(
    left top,
    right bottom,
    color-stop(0%, rgba(0, 136, 232, 1)),
    color-stop(0%, rgba(0, 182, 198, 1)),
    color-stop(100%, rgba(0, 136, 232, 1))
  );
  background: -webkit-linear-gradient(
    -45deg,
    rgba(0, 136, 232, 1) 0%,
    rgba(0, 182, 198, 1) 0%,
    rgba(0, 136, 232, 1) 100%
  );
  background: -o-linear-gradient(
    -45deg,
    rgba(0, 136, 232, 1) 0%,
    rgba(0, 182, 198, 1) 0%,
    rgba(0, 136, 232, 1) 100%
  );
  background: -ms-linear-gradient(
    -45deg,
    rgba(0, 136, 232, 1) 0%,
    rgba(0, 182, 198, 1) 0%,
    rgba(0, 136, 232, 1) 100%
  );
  background: linear-gradient(
    135deg,
    rgba(0, 136, 232, 1) 0%,
    rgba(0, 182, 198, 1) 0%,
    rgba(0, 136, 232, 1) 100%
  );
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0088e8', endColorstr='#0088e8', GradientType=1 );
}
.header{
  /*height: 10%;*/
  /*background: red;*/
}

.main{
  height: 100%;
  /*background:yellow;*/
  /*overflow-y: scroll;*/
}
  .main-content{
    padding: 20px;
  }
.footer{
  /*height: 5%;*/
  /*background: orange;*/
}
</style>