<?php include("conf/config.inc.php");

function pr($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
?>
<!doctype html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Find a doctor | Docvisits</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/normalize.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/icomoon.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/owl.theme.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/prettyPhoto.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/version-2.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/typo.css">
  <!--<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/style.css">-->
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/transitions.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/color.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/responsive.css">
  <script src="<?php echo WEB_ROOT?>service/public/newjs/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/vendor/jquery-library.js"></script>


  <script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/jquery.min.js'></script>
  <!--  <script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/script.js"></script>-->
  <script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/bootstrap.min.js'></script>
  <script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/jquery.bootpag.js'></script>


  <script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/slider/jquery.mobile.customized.min.js'></script>
  <script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/slider/jquery.easing.1.3.js'></script> 
  <script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/slider/camera.min.js'></script> 


  <script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/jquery.touchSwipe.min.js"></script>
  <script type="text/javascript" src='<?php echo WEB_ROOT;?>service/public/js/jquery.base64.min.js'></script>

  <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/css/BeatPicker.min.css"/>
  <script src="<?php echo WEB_ROOT?>service/public/js/calander/BeatPicker.min.js"></script>

  <link href="<?php echo WEB_ROOT?>service/public/css/css/newbookmydoc.css" rel="stylesheet" type="text/css">
  <script src="<?php echo WEB_ROOT?>service/public/newjs/vendor/jquery-library.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/vendor/bootstrap.min.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/jquery-ui.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/countdown.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/jquery.nicescroll.js"></script>

  <script src="<?php echo WEB_ROOT?>service/public/newjs/parallax.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/owl.carousel.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/prettyPhoto.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/appear.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/countTo.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/main.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/newjs/slider.min.js"></script>
  <script type="text/javascript" src='<?php echo WEB_ROOT;?>service/public/js/jquery.base64.min.js'></script>
  <script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/parsley.min.js"></script>
  <script src="<?php echo WEB_ROOT?>conf/config.js"></script>
  <script src="<?php echo WEB_ROOT?>service/public/js/newscadcustom.js"></script>
  
  <link href="<?php echo WEB_ROOT?>service/public/css/css/tabcontent.css" rel="stylesheet" type="text/css">

  <script src="<?php echo WEB_ROOT?>service/public/js/js/tabcontent.js"></script>
</head><!-- Head Ends -->
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
    <!--************************************
                    Wrapper Start
                    *************************************-->
                    <div id="wrapper" class="tg-haslayout">
                      <div class="row">
                        <div style="width: 30%;float:left; border-bottom: 10px solid rgb(2, 184, 191); height: 0;">
                        </div>
                        <div style="width: 40%; float: left; border-bottom: 10px solid rgb(25, 144, 206); height: 0; ">
                        </div>
                        <div style="width: 30%; float: left; border-bottom: 10px solid rgb(7, 188, 131); height: 0; ">
                        </div>
                      </div>

      <!--************************************
                        Header Start
                        *************************************-->
                        <header id="header" class="tg-haslayout">
                          <div class="container">
                            <div class="row">
                              <div class="col-xs-3">
                                <a class="logo" href="<?php echo WEB_ROOT?>index.php"><img src="<?php echo WEB_ROOT?>service/public/newimages/logo-new.png" alt="image description"></a>
                              </div>
                              <div class="col-xs-9">
                                <nav id="tg-nav" class="tg-nav">
                                  <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                      <span class="sr-only">Toggle navigation</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                    </button>
                                  </div>
                                  <div class="collapse navbar-collapse" id="tg-navigation">
                                    <ul>
                                     <?php if($_SESSION['userID']){
                                      $url = ($_SESSION['userType'] == 1) ? WEB_ROOT.'index.php/doctor/profile' : WEB_ROOT.'index.php/patient/profile';
                                      ?>
                                      <li><a href="<?php echo $url;?>">My Services</a></li>
                                      <?php } else {
                                        ?>
                                        <li>
                                          <a href="<?php echo WEB_ROOT?>index.php">Home</a>
                                        </li>
                                        <?php }?>
                                        <li><a href="<?php echo WEB_ROOT;?>index.php/patient_settings">Account Settings</a></li>
                                        <!--<li><a href="<?php echo WEB_ROOT?>index.php/About">About Us</a></li>-->
                                        <li><a href="#">Health Blog</a></li>
                                        <?php if($_SESSION['userID']){ ?>
                                        <li><a href="<?php echo WEB_ROOT?>index.php/signout">Logout</a></li>
                                        <?php } ?>
                                      </ul>
                                    </div>
                                  </nav>
                                </div>
                              </div>
                            </div>
                          </header>
<!--************************************
    Header End
    *************************************-->


