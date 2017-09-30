<?php include("conf/config.inc.php");?>
<!doctype html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang=""> <![endif]-->
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
    <link rel="stylesheet" href="service/public/newcss/font-awesome.min.css">
    <link rel="stylesheet" href="service/public/newcss/icomoon.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/owl.theme.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/version-2.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/typo.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/style.css">
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
</head>
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
                                        <a class="logo" href="index.php"><img src="<?php echo WEB_ROOT?>service/public/newimages/logo-new.png" alt="image description"></a>
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
                                                      <li><a class="active" href="<?php echo $url;?>">Home</a></li>
                                                      <?php } else {
                                                        ?>
                                                        <li>
                                                          <a class="active" href="<?php echo WEB_ROOT?>index.php">Home</a>
                                                      </li>
                                                      <?php }?>
                                                      <li><a href="<?php echo WEB_ROOT?>index.php/About">About Us</a></li>
                                                      <li><a href="#">Health Blog</a></li>
                                                      <li><a href="<?php echo WEB_ROOT?>index.php/join/learnmore">Doctors</a></li>
                                                      <li><a href="<?php echo WEB_ROOT?>index.php/join/learnmorep">Patients</a></li>
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
    <!--************************************

    <!--************************************
    Main Start
    *************************************-->
    <main id="main" class="tg-haslayout">
        <!--************************************
        Home Slider Start
        *************************************-->

        <div class="row">
            <div class="main-page-wrapper tg-haslayout">
                <div class="fw-page-builder-content">
                    <section class="haslayout  stretch_section_contents_corner stretch_section stretch_data" style="background-repeat: no-repeat;background-position: 0% 100%;background-size: cover;position: relative;box-sizing: border-box;">
                        <div class="builder-items">
                            <div class="col-xs-12 col-md-12 builder-column ">
                                <div class="tg-banner-holder">
                                    <div class="tg-banner-content">
                                        <div class="container">
                                            <div class="col-sm-4 box" style="background-color: rgba(2, 184, 191, 0.6); border-bottom: 10px solid rgb(2, 184, 191)">
                                                <a href="#" data-toggle="modal" data-target=".tg-user-modal"><i class="fa fa-user-plus"></i> Patient<br /> <b>Login</b></a>
                                            </div>
                                            <div class="col-sm-4 box box-middle" style="background-color: rgba(25, 144, 206, 0.6); border-bottom: 10px solid rgb(25, 144, 206)">
                                                <a href="#" data-toggle="modal" data-target=".tg-search-modal"><i class="fa fa-search"></i> Find Your <br /> <b>Doctor</b></a>
                                            </div>
                                            <div class="col-sm-4 box" style="background-color: rgba(7, 188, 131, 0.6); border-bottom: 10px solid rgb(7, 188, 131)">
                                                <a href="#" data-toggle="modal" data-target=".tg-doctor-modal"><i class="fa fa-user-plus"></i> Doctor <br /> <b>Login</b></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="searchbanner-" class="tg-homeslidertwo">
                                        <div class="item">
                                            <figure>
                                                <img src="<?php echo WEB_ROOT?>service/public/newimages/slides/banner-img1.jpg" alt="Search">
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure>
                                                <img src="<?php echo WEB_ROOT?>service/public/newimages/slides/banner-img2.jpg" alt="Search">
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure>
                                                <img src="<?php echo WEB_ROOT?>service/public/newimages/slides/banner-img3.jpg" alt="Search">
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure>
                                                <img src="<?php echo WEB_ROOT?>service/public/newimages/slides/banner-img5.jpg" alt="Search">
                                            </figure>
                                        </div>
                                    </div>
                                    <script>
                                        jQuery(document).ready(function (e) {
                                            jQuery("#searchbanner-").owlCarousel({
                                                paginationSpeed: 400,
                                                slideSpeed: 300,
                                                autoPlay: true,
                                                singleItem: true,
                                                navigation: false,
                                                navigationText: [
                                                "<i class='tg-prev fa fa-angle-left'></i>",
                                                "<i class='tg-next fa fa-angle-right'></i>"
                                                ]
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        <!--************************************
        Home Slider End
        *************************************-->
        <!--************************************
        What to Expect Start
        *************************************-->
        <section class="tg-main-section tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="tg-theme-heading">
                            <h2>what to expect</h2>
                            <span class="tg-roundbox"></span>
                            <div class="tg-description">
                                <p>In just three simple steps, DocVisits will help you find your nearest healthcare setting without having to signup. We aim to facilitate you in finding your right doctor with just three clicks without having to ask around or wander to find your nearest healthcare facility.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tg-search-categories">
                        <div class="col-sm-4 col-xs-4 tg-expectwidth">
                            <div class="tg-search-category">
                                <div class="tg-displaytable">
                                    <div class="tg-displaytablecell">
                                        <div class="tg-box">
                                            <h3>map of doctors in your insurance network</h3>
                                            <i class="icon-map"></i>
                                            <span class="tg-show"><em class="icon-add"></em></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-4 tg-expectwidth">
                            <div class="tg-search-category">
                                <div class="tg-displaytable">
                                    <div class="tg-displaytablecell">
                                        <div class="tg-box">
                                            <h3>patient reviews to help you choose</h3>
                                            <i class="icon-stars"></i>
                                            <span class="tg-show"><em class="icon-add"></em></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-4 tg-expectwidth">
                            <div class="tg-search-category">
                                <div class="tg-displaytable">
                                    <div class="tg-displaytablecell">
                                        <div class="tg-box">
                                            <h3>doctor's available times and click to book</h3>
                                            <i class="fa fa-clock-o"></i>
                                            <span class="tg-show"><em class="icon-add"></em></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
        What to Expect End
        *************************************-->
        <!--************************************
        Are You A Doctor Start
        *************************************-->
        <section class="tg-main-section tg-haslayout parallax-window tg-custom-padding" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo WEB_ROOT?>service/public/newimages/bgparallax/bgparallax-01.jpg">
            <div class="container">
                <div class="row">
                    <div class="tg-areuadoctor tg-haslayout">
                        <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 pull-right">
                            <div class="tg-contentbox tg-haslayout">
                                <div class="tg-heading-border">
                                    <h2>are you a doctor?</h2>
                                    <h3>join now and reach thousands of patients</h3>
                                </div>
                                <div class="tg-description">
                                    <p>We know how much it takes to become a qualified doctor so we have taken away all your hassle to look out for your patients once you have qualified. DocVisits will give you an easy reach to all the patients, all you need is to sign up!</p>
                                </div>
                                <ul>
                                    <li>Attract and engage new patients</li>
                                    <li>Build and strengthen your online reputation</li>
                                    <li>Deliver a premium experience patients love</li>
                                </ul>
                                <a class="tg-btn" data-toggle="modal" href="<?php echo WEB_ROOT?>index.php/join/learnmore">join now</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 pull-left">
                            <figure class="tg-img">
                                <img src="<?php echo WEB_ROOT?>service/public/newimages/img-01.png" alt="image description">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
        Are You A Doctor End
        *************************************-->
        <!--************************************
        Featured doctors start
        *************************************-->

        <section class="tg-main-section haslayout  stretch_section">
            <div class="builder-items">
                <div class="col-xs-12 col-md-12 builder-column">
                    <div class="sc-featured-users">
                        <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                            <div class="tg-section-head tg-haslayout">
                                <div class="tg-section-heading tg-haslayout">
                                    <h2>FEATURED DOCTORS</h2>
                                </div>
                                <div class="tg-description tg-haslayout">
                                    <p>We aim to facilitate you in finding your right doctor with just three clicks without having to ask around or wander to find your nearest healthcare facility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div id="tg-featuredlist-3" class="tg-featuredlist-slider tg-featuredlist-slider-v2 tg-haslayout">
                                <div class="item">
                                    <figure>
                                        <a href="#"><img src="<?php echo WEB_ROOT?>service/public/newimages/doctors/1.jpg" alt="User"></a>
                                        <a data-view_type="v1" class="tg-like add-to-fav" data-wl_id="294" href="javascript:;"><i class="fa fa-heart"></i></a>                                                              <span class="tg-featuredtags">
                                        <a class="tg-featured" href="javascript:;">featured</a>
                                    </span>
                                    <span class="user-verified">
                                        <svg id="Icon" xmlns="http://www.w3.org/2000/svg" width="74.875" height="21" viewbox="0 0 74.875 21">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #10a64a;
                                                    }

                                                    .cls-2 {
                                                        font-size: 16px;
                                                        text-anchor: middle;
                                                        font-family: FontAwesome;
                                                        text-transform: uppercase;
                                                    }

                                                    .cls-2, .cls-3 {
                                                        fill: #fff;
                                                    }

                                                    .cls-3 {
                                                        font-size: 14.437px;
                                                        font-family: Montserrat;
                                                    }
                                                </style>
                                            </defs>
                                            <rect id="BG" class="cls-1" width="74.875" height="21" rx="3" ry="3" />
                                            <text id="_" data-name="" class="cls-2" transform="translate(14.829 14.99) scale(0.737 0.762)"></text>
                                            <text id="Verified" class="cls-3" transform="translate(22.787 15.191) scale(0.737 0.762)">Verified</text>
                                        </svg>

                                    </span>
                                </figure>
                                <div class="tg-contentbox">
                                    <h3><a href="#">Dr. Janet Johnson</a></h3>
                                    <div class="feature-rating">
                                        <span class="tg-stars star-rating">
                                            <span style="width:80%"></span>
                                        </span>
                                        <em>4.0<sub>/5</sub></em>
                                    </div>
                                    <address>54 Park Rd, London NW4 3PH, UK</address>
                                    <div class="tg-phone"><i class="fa fa-phone"></i> <em>50 235 856843</em></div>
                                </div>
                            </div>
                            <div class="item">
                                <figure>
                                    <a href="#"><img src="<?php echo WEB_ROOT?>service/public/newimages/doctors/2.jpg" alt="User"></a>
                                    <a data-view_type="v1" class="tg-like add-to-fav" data-wl_id="296" href="javascript:;"><i class="fa fa-heart"></i></a>                                                              <span class="tg-featuredtags">
                                    <a class="tg-featured" href="javascript:;">featured</a>
                                </span>
                                <span class="user-verified">
                                    <svg id="Icon" xmlns="http://www.w3.org/2000/svg" width="74.875" height="21" viewbox="0 0 74.875 21">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #10a64a;
                                                }

                                                .cls-2 {
                                                    font-size: 16px;
                                                    text-anchor: middle;
                                                    font-family: FontAwesome;
                                                    text-transform: uppercase;
                                                }

                                                .cls-2, .cls-3 {
                                                    fill: #fff;
                                                }

                                                .cls-3 {
                                                    font-size: 14.437px;
                                                    font-family: Montserrat;
                                                }
                                            </style>
                                        </defs>
                                        <rect id="BG" class="cls-1" width="74.875" height="21" rx="3" ry="3" />
                                        <text id="_" data-name="" class="cls-2" transform="translate(14.829 14.99) scale(0.737 0.762)"></text>
                                        <text id="Verified" class="cls-3" transform="translate(22.787 15.191) scale(0.737 0.762)">Verified</text>
                                    </svg>

                                </span>
                            </figure>
                            <div class="tg-contentbox">
                                <h3><a href="#">Dr. Charles Smith</a></h3>
                                <div class="feature-rating">
                                    <span class="tg-stars star-rating">
                                        <span style="width:100%"></span>
                                    </span>
                                    <em>5.0<sub>/5</sub></em>
                                </div>
                                <address>N Circular Rd, London N11, UK</address>
                                <div class="tg-phone"><i class="fa fa-phone"></i> <em>52 235 856843</em></div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <a href="#"><img src="<?php echo WEB_ROOT?>service/public/newimages/doctors/3.jpg" alt="User"></a>
                                <a data-view_type="v1" class="tg-like add-to-fav" data-wl_id="336" href="javascript:;"><i class="fa fa-heart"></i></a>                                                              <span class="tg-featuredtags">
                                <a class="tg-featured" href="javascript:;">featured</a>
                            </span>
                            <span class="user-verified">
                                <svg id="Icon" xmlns="http://www.w3.org/2000/svg" width="74.875" height="21" viewbox="0 0 74.875 21">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #10a64a;
                                            }

                                            .cls-2 {
                                                font-size: 16px;
                                                text-anchor: middle;
                                                font-family: FontAwesome;
                                                text-transform: uppercase;
                                            }

                                            .cls-2, .cls-3 {
                                                fill: #fff;
                                            }

                                            .cls-3 {
                                                font-size: 14.437px;
                                                font-family: Montserrat;
                                            }
                                        </style>
                                    </defs>
                                    <rect id="BG" class="cls-1" width="74.875" height="21" rx="3" ry="3" />
                                    <text id="_" data-name="" class="cls-2" transform="translate(14.829 14.99) scale(0.737 0.762)"></text>
                                    <text id="Verified" class="cls-3" transform="translate(22.787 15.191) scale(0.737 0.762)">Verified</text>
                                </svg>

                            </span>
                        </figure>
                        <div class="tg-contentbox">
                            <h3><a href="#">Dr. Olivia Bayne</a></h3>
                            <div class="feature-rating">
                                <span class="tg-stars star-rating">
                                    <span style="width:60%"></span>
                                </span>
                                <em>3.0<sub>/5</sub></em>
                            </div>
                            <address>Holland Walk, Kensington, London W8...</address>
                            <div class="tg-phone"><i class="fa fa-phone"></i> <em>60 235 856843</em></div>
                        </div>
                    </div>
                    <div class="item">
                        <figure>
                            <a href="#"><img src="<?php echo WEB_ROOT?>service/public/newimages/doctors/1.jpg" alt="User"></a>
                            <a data-view_type="v1" class="tg-like add-to-fav" data-wl_id="334" href="javascript:;"><i class="fa fa-heart"></i></a>                                                              <span class="tg-featuredtags">
                            <a class="tg-featured" href="javascript:;">featured</a>
                        </span>
                        <span class="user-verified">
                            <svg id="Icon" xmlns="http://www.w3.org/2000/svg" width="74.875" height="21" viewbox="0 0 74.875 21">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #10a64a;
                                        }

                                        .cls-2 {
                                            font-size: 16px;
                                            text-anchor: middle;
                                            font-family: FontAwesome;
                                            text-transform: uppercase;
                                        }

                                        .cls-2, .cls-3 {
                                            fill: #fff;
                                        }

                                        .cls-3 {
                                            font-size: 14.437px;
                                            font-family: Montserrat;
                                        }
                                    </style>
                                </defs>
                                <rect id="BG" class="cls-1" width="74.875" height="21" rx="3" ry="3" />
                                <text id="_" data-name="" class="cls-2" transform="translate(14.829 14.99) scale(0.737 0.762)"></text>
                                <text id="Verified" class="cls-3" transform="translate(22.787 15.191) scale(0.737 0.762)">Verified</text>
                            </svg>

                        </span>
                    </figure>
                    <div class="tg-contentbox">
                        <h3><a href="#">Dr. Janet Johnson</a></h3>
                        <div class="feature-rating">
                            <span class="tg-stars star-rating">
                                <span style="width:60%"></span>
                            </span>
                            <em>3.0<sub>/5</sub></em>
                        </div>
                        <address>28 Gatcombe Mews, London, United Ki...</address>
                        <div class="tg-phone"><i class="fa fa-phone"></i> <em>58 235 856843</em></div>
                    </div>
                </div>
                <div class="item">
                    <figure>
                        <a href="#"><img src="<?php echo WEB_ROOT?>service/public/newimages/doctors/2.jpg" alt="User"></a>
                        <a data-view_type="v1" class="tg-like add-to-fav" data-wl_id="330" href="javascript:;"><i class="fa fa-heart"></i></a>                                                              <span class="tg-featuredtags">
                        <a class="tg-featured" href="javascript:;">featured</a>
                    </span>
                    <span class="user-verified">
                        <svg id="Icon" xmlns="http://www.w3.org/2000/svg" width="74.875" height="21" viewbox="0 0 74.875 21">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #10a64a;
                                    }

                                    .cls-2 {
                                        font-size: 16px;
                                        text-anchor: middle;
                                        font-family: FontAwesome;
                                        text-transform: uppercase;
                                    }

                                    .cls-2, .cls-3 {
                                        fill: #fff;
                                    }

                                    .cls-3 {
                                        font-size: 14.437px;
                                        font-family: Montserrat;
                                    }
                                </style>
                            </defs>
                            <rect id="BG" class="cls-1" width="74.875" height="21" rx="3" ry="3" />
                            <text id="_" data-name="" class="cls-2" transform="translate(14.829 14.99) scale(0.737 0.762)"></text>
                            <text id="Verified" class="cls-3" transform="translate(22.787 15.191) scale(0.737 0.762)">Verified</text>
                        </svg>

                    </span>
                </figure>
                <div class="tg-contentbox">
                    <h3><a href="#">Dr. Charles Smith</a></h3>
                    <div class="feature-rating">
                        <span class="tg-stars star-rating">
                            <span style="width:80%"></span>
                        </span>
                        <em>4.0<sub>/5</sub></em>
                    </div>
                    <address>154 Bayswater Rd, London W2 4HP, UK</address>
                    <div class="tg-phone"><i class="fa fa-phone"></i> <em>54 235 856843</em></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function (e) {
            jQuery("#tg-featuredlist-3").owlCarousel({
                autoPlay: false,
                items: 4,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [991, 2],
                itemsTabletSmall: [568, 1],
                slideSpeed: 300,
                paginationSpeed: 400,
                pagination: false,
                navigation: true,
                navigationText: [
                "<i class='tg-prev fa fa-angle-left'></i>",
                "<i class='tg-next fa fa-angle-right'></i>"
                ]
            });
        });
    </script>
</div>
</div>
</div>
</section>

<!--************************************
    Featured doctors end
    *************************************-->
    <!--************************************
    Patient Feedback Start
    *************************************-->
    <section class="tg-main-section tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo WEB_ROOT?>service/public/newimages/bgparallax/bgparallax-02.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="tg-theme-heading">
                        <h2>Happy Clients</h2>
                        <span class="tg-roundbox"></span>
                        <div class="tg-description">
                            <p>In just three simple steps, DocVisits will help you find your nearest healthcare setting without having to signup. We aim to facilitate you in finding your right doctor with just three clicks without having to ask around or wander to find your nearest healthcare facility.</p>
                        </div>
                    </div>
                </div>
                <div id="doc-testimonialsslider-4" class="doc-testimonialsslider doc-testimonials">
                    <div class="item doc-testimonial">
                        <div class="col-xs-12 col-sm-6 doc-verticalmiddle">
                            <blockquote><q>"Adipisicing elit sed eiusmod teampor intcididunt labore sita dolore magna aliqua enim minim veniam cetur apisicing elit sed do eiusmod mithiao." </q></blockquote>
                            <div class="doc-clientdetail">
                                <figure class="doc-clientimg"> <img src="<?php echo WEB_ROOT?>service/public/newimages/patientfeedback/1.jpg" alt="reviewer"> </figure>
                                <div class="doc-clientinfo">
                                    <h3>Riva Benavidez</h3>                         <span>Doctor - Manchester</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item doc-testimonial">
                        <div class="col-xs-12 col-sm-6 doc-verticalmiddle">
                            <blockquote><q>"Adipisicing elit sed eiusmod teampor intcididunt labore sita dolore magna aliqua enim minim veniam cetur apisicing elit sed do eiusmod mithiao." </q></blockquote>
                            <div class="doc-clientdetail">
                                <figure class="doc-clientimg"> <img src="<?php echo WEB_ROOT?>service/public/newimages/patientfeedback/2.jpg" alt="reviewer"> </figure>
                                <div class="doc-clientinfo">
                                    <h3>Riva Benavidez</h3>                         <span>Doctor - Manchester</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item doc-testimonial">
                        <div class="col-xs-12 col-sm-6 doc-verticalmiddle">
                            <blockquote><q>"Adipisicing elit sed eiusmod teampor intcididunt labore sita dolore magna aliqua enim minim veniam cetur apisicing elit sed do eiusmod mithiao." </q></blockquote>
                            <div class="doc-clientdetail">
                                <figure class="doc-clientimg"> <img src="<?php echo WEB_ROOT?>service/public/newimages/patientfeedback/3.jpg" alt="reviewer"> </figure>
                                <div class="doc-clientinfo">
                                    <h3>Riva Benavidez</h3>                         <span>Doctor - Manchester</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                jQuery(document).ready(function (e) {
                    jQuery("#doc-testimonialsslider-4").owlCarousel({
                        autoPlay: false,
                        slideSpeed: 300,
                        pagination: false,
                        paginationSpeed: 400,
                        singleItem: true,
                        navigation: true,
                        navigationText: [
                        "<i class='tg-prev fa fa-angle-left'></i>",
                        "<i class='tg-next fa fa-angle-right'></i>"
                        ]
                    });
                });
            </script>
        </div>
    </section>
    <!--************************************
    Patient Feedback End
    *************************************-->
</main>
<!--************************************
    Main End
    *************************************-->
    <!--************************************
    Footer Start
    *************************************-->
    <div class="row">
        <div style="width: 30%;float:left; border-bottom: 10px solid rgb(2, 184, 191); height: 0;">
        </div>
        <div style="width: 40%; float: left; border-bottom: 10px solid rgb(25, 144, 206); height: 0; ">
        </div>
        <div style="width: 30%; float: left; border-bottom: 10px solid rgb(7, 188, 131); height: 0; ">
        </div>
    </div>
    <footer id="footer" class="tg-haslayout">
        <div class="tg-threecolumn">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 pull-left">
                        <div class="tg-footercol">
                            <div class="address-column tg-widget">
                                <strong class="logo">
                                    <a href="#">
                                        <img src="<?php echo WEB_ROOT?>service/public/newimages/logo-new.png" alt="image description">
                                    </a>
                                </strong>
                                <div class="tg-description">
                                    <p>Make an appointment on the go.</p>
                                </div>
                                <ul class="tg-info">
                                    <li>
                                      <i class="fa fa-home"></i>
                                      <address>4 Ardmore Pl, East Brunswick, New Jersey, 08816</address>
                                  </li>
                                  <li>
                                      <i class="fa fa-envelope"></i>
                                      <em><a href="mailto:info@docvisits.com">info@docVisits.com</a></em>
                                  </li>
                                  <li>
                                    <i class="fa fa-phone"></i>
                                    <em><a href="#">+44 123 456 788 - 9</a></em>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 pull-right">
                    <div class="tg-footercol">
                        <div class="tg-heading-border tg-small">
                            <h4>Quick links</h4>
                        </div>
                        <div class="tg-widget tg-usefullinks widget_nav_menu">
                            <ul>
                                <li><a href="<?php echo WEB_ROOT?>index.php">Home</a></li>
                                <li><a href="<?php echo WEB_ROOT?>index.php/About">About Us</a></li>
                                <li><a href="<?php echo WEB_ROOT?>index.php/terms">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="<?php echo WEB_ROOT?>index.php/Contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="tg-footercol">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-footerbar tg-haslayout">
        <div class="tg-copyrights">
            <p>&copy; 2017 DocVisits LLC. </p>
        </div>
    </div>
</footer>
    <!--************************************
    Footer End
    *************************************-->
</div>
<!--************************************
    Wrapper End
    *************************************-->
    <!--************************************
    Sign In Sign Up Light Box Start
    *************************************-->

    <div class="modal fade tg-user-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="row">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 25px;><span aria-hidden="true">&times;</span></button>
                    <ul class="tg-modaltabs-nav" role="tablist">
                        <li role="presentation" class="active"><a href="#tg-signin-formarea" aria-controls="tg-signin-formarea" role="tab" data-toggle="tab"><h2 class="modal-title" style="font-size: 25px;">sign in</h2></a></li>
                        <li role="presentation"><a href="#tg-signup-formarea" aria-controls="tg-signup-formarea" role="tab" data-toggle="tab"><h2 class="modal-title" style="font-size: 25px;">sign up</h2></a></li>
                    </ul>
                    <div class="tab-content tg-haslayout">
                        <div role="tabpanel" class="tab-pane tg-haslayout active" id="tg-signin-formarea">
                         <div id="payment_error" style="margin-top:20px;display:none;" class="alert alert-error">You account has been expired.<a href="<?php echo WEB_ROOT?>index.php/payment_package" >click here</a> to subscribe.</div>
                         <div id="email_error" style="margin-top:20px;display:none;" class="alert alert-error">Email not verified.</div>
                         <div id="signin_error" style="margin-top:20px;display:none;" class="alert alert-error">Invalid Login.</div>
                         <form class="tg-form-modal tg-form-signin" id="signin-form" name="signin-form">
                            <fieldset>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address" data-type="email" data-trigger="change" data-required="true" name="email"  id="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" data-trigger="change" data-required="true" id="password" name="password">
                                </div>
                            </fieldset>
                    <!-- <fieldset>
                    <div class="form-group tg-checkbox">
                        <label>
                            <input type="checkbox" class="form-control">
                            Remember Me
                        </label>
                        <a class="tg-forgot-password" href="#">
                            <i>Forgot Password</i>
                            <i class="fa fa-question-circle"></i>
                        </a>
                    </div>-->
                    <input type="button" class="tg-btn tg-btn-lg" id="signinBtn" class="findDoctors join jo" name="LOGIN" value="LOGIN">
                    <!--</fieldset>-->
                </form>
            </div>
            <div role="tabpanel" class="tab-pane tg-haslayout" id="tg-signup-formarea">
                <div id="patient_error" style="margin-top:20px;display:none;" class="alert alert-error">Email Already Exist.</div>
                <div id="patient_success" style="margin-top:20px;display:none;" class="alert alert-success">Registration success .<br/>Please verify your account.(check your mail)</div>
                <form  class="tg-form-modal tg-form-signup do-registration-form" id="patient-form" name="patient-form">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="email" data-type="email" data-trigger="change" data-required="true" value="" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" data-regexp="^[a-zA-Z]+$" data-trigger="change" data-minlength="3" data-required="true" placeholder="First Name" name="firstname" id=""  class="form-control" >      
                        </div>
                        <div class="form-group">
                            <input type="text" data-regexp="^[a-zA-Z]+$" data-trigger="change" data-minlength="3" data-required="true" placeholder="Last Name" name="lastname" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" value="" data-minlength="6" data-trigger="change" data-required="true" id="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirmpassword" value="" data-minlength="6" data-trigger="change" data-required="true" data-parsley-equalto="#password" id="confirmpassword" placeholder="Confirm Password" class="form-control" data-error-message="Passwords should match">
                        </div>
                        <div class="clearBoth"></div>
                        <div class="form-group">
                            <input id="male" name="gender" value="1" data-required="true" type="radio" checked="checked"> Male
                            &nbsp;&nbsp;
                            <input id="female" name="gender" value="2" data-required="true" type="radio"> Female
                            <div class="clearBoth"></div>
                        </div>
                        <div class="form-group tg-checkbox">
                            <label>
                                <input data-trigger="change" data-required="true" name="patprivacy" type="checkbox">
                                <a href="<?php echo WEB_ROOT;?>index.php/terms" target="_blank">I agree to the Terms and Conditions</a>
                            </label>
                        </div>
                        <button class="tg-btn tg-btn-lg  do-register-button" type="button" id="continue">Create an Account</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!--************************************
    Sign In Sign Up Light Box End
    *************************************-->
    <!--************************************
    Search Light Box Start
    *************************************-->
    <div class="modal fade tg-search-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-12 search-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title">Find your nearest doctor</h2>
                        </div>
                        <div class="modal-body tg-banner-holder">
                            <div class="tg-searcharea-v2">
                                <form class="tg-searchform directory-map" id="findDoctor-form">
                                    <fieldset>
                                     <div class="form-group">
                                        <input type="text" name="docZip" id="doc-zip" placeholder="City name or zip code" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <span class="select">
                                            <select name="docSpeciality" id="docSpeciality" class="spciality_search">
                                              <optgroup label="All">
                                                 <option value="" style="text-transform:unset;">Select a Speciality</option>
                                                 <?php
                                                 $condition = 'category_id = 1';
                                                 $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                                             </optgroup>
                                             <optgroup label="Therapists / Counselors">
                                                 <?php
                                                 $condition = 'category_id = 2';
                                                 $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                                             </optgroup>
                                             <optgroup label="Dental">
                                                 <?php
                                                 $condition = 'category_id = 3';
                                                 $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                                             </optgroup>
                                             <optgroup label="Veterinary">
                                                 <?php
                                                 $condition = 'category_id = 4';
                                                 $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                                             </optgroup>
                                         </select>
                                     </span>
                                 </div>

                                 <div class="form-group">
                                    <span class="select">
                                        <select class="insurance_carrier" name="insuranceSelect" id="insuranceSelect">
                                           <option value="">Select Insurance</option>
                                           <?php $scad->listbox('insurance','id','name','`parent_id`=0','`name` ASC',$selected=NULL); ?>
                                       </select>
                                   </span>

                               </div>
                               <div class="form-group">
                                <span class="select">
                                    <select class="insurance_plan" name="subInsuranceSelect" id="subInsuranceSelect"><option value="" selected hidden>Insurance Plan</option></select>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="docName" id="docName" placeholder="Doctor Name" class="form-control">
                            </div>

                        </div>
                        <div class="form-group" style="width:100%">
                            <input type="button" id="findDoctorBtn" class="tg-btn" value="search">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!--************************************
    Search Light Box End
    *************************************-->
    <div class="modal fade tg-doctor-modal" tabindex="-1" role="dialog">
          <!--************************************
    Sign In Sign Up Light Box Start
    *************************************-->
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="row">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 25px;"><span aria-hidden="true">&times;</span></button>
                <ul class="tg-modaltabs-nav" role="tablist">
                    <li role="presentation" class="active"><a href="#tg-signin-doctor-formarea" aria-controls="tg-signin-doctor-formarea" role="tab" data-toggle="tab"><h2 class="modal-title" style="font-size: 25px;">sign in</h2></a></li>
                    <li role="presentation"><a href="#tg-signup-doctor-formarea" aria-controls="tg-signup-doctor-formarea" role="tab" data-toggle="tab"><h2 class="modal-title" style="font-size: 25px">sign up</h2></a></li>
                </ul>
                <div class="tab-content tg-haslayout">
                    <div role="tabpanel" class="tab-pane tg-haslayout active" id="tg-signin-doctor-formarea">
                        <div id="payment_error_doctor" style="margin-top:20px;display:none;" class="alert alert-error">You account has been expired.<a href="<?php echo WEB_ROOT?>index.php/payment_package" >click here</a> to subscribe.</div>
                        <div id="email_error_doctor" style="margin-top:20px;display:none;" class="alert alert-error">Email not verified.</div>
                        <div id="signin_error_doctor" style="margin-top:20px;display:none;" class="alert alert-error">Invalid Login.</div>
                        <form class="tg-form-modal tg-form-signin" id="signin-form-doctor" name="signin-form-doctor">
                            <fieldset>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address" data-type="email" data-trigger="change" data-required="true" name="docEmail"  id="docEmail">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" data-trigger="change" data-required="true" id="docPassword" name="docPassword">
                                </div>
                            </fieldset>
                    <!-- <fieldset>
                    <div class="form-group tg-checkbox">
                        <label>
                            <input type="checkbox" class="form-control">
                            Remember Me
                        </label>
                        <a class="tg-forgot-password" href="#">
                            <i>Forgot Password</i>
                            <i class="fa fa-question-circle"></i>
                        </a>
                    </div>-->
                    <input type="button" class="tg-btn tg-btn-lg" id="signinBtnDoctor" class="findDoctors join jo" name="LOGIN" value="LOGIN">
                    <!--</fieldset>-->
                </form>
            </div>
            <div role="tabpanel" class="tab-pane tg-haslayout" id="tg-signup-doctor-formarea">
                <div id="doc_error" style="margin-top:20px;display:none;" class="alert alert-error">Email Already Exist.</div>
                <div id="doc_success" style="margin-top:20px;display:none;" class="alert alert-success">Registration success .<br/>Please verify your account.(check your mail)</div>
                <form  class="tg-form-modal tg-form-signup do-registration-form" id="doctor-form" name="doctor-form">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="email" id="email" data-type="email" data-trigger="change" data-required="true" value="" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" data-regexp="^[a-zA-Z]+$" data-trigger="change" data-minlength="3" data-required="true" placeholder="First Name" name="firstname" id="firstname"  class="form-control" >      
                        </div>
                        <div class="form-group">
                            <input type="text" data-regexp="^[a-zA-Z]+$" data-trigger="change" data-minlength="3" data-required="true" placeholder="Last Name" name="lastname" id="lastname" class="form-control">
                        </div>
                        <div class="form-group">
                            <input class="date-field-required" type="text" data-trigger="mouseleave" data-required="true" data-beatpicker="true" data-beatpicker-format="['YYYY','MM','DD']" name="dob" id="dob" placeholder="YYYY-MM-DD" /> 
                        </div>  
                        <div class="form-group">
                            <input name="phone" type="text" data-trigger="change" data-maxlength="10" data-minlength="10" data-type='number' data-required="true" placeholder="phone" class="form-control">
                        </div> 
                        <div class="form-group">
                            <input type="text" name="address" id="address" data-trigger="change" data-required="true" value="" placeholder="Address" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="zipcode" id="zipcode" data-trigger="change" data-required="true" value="" placeholder="zipcode" class="form-control">
                        </div>
                        <div class="form-group">
                            <select data-trigger="change" data-required="true"  name="speciality" id="speciality" class="form-control">
                             <option value="">Select Speciality</option>
                             <?php $scad->listbox('speciality','id','name',$condition=NULL,'`name` ASC',$selected=NULL); ?>
                         </select>
                     </div>

                     <div class="clearBoth"></div>
                     <div class="form-group">
                        <input id="male" name="gender" class="form-control" value="1" data-required="true" type="radio" checked="checked"> Male
                        &nbsp;&nbsp;
                        <input id="female" class="form-control" name="gender" value="2" data-required="true" type="radio"> Female
                        <div class="clearBoth"></div>
                    </div>
                    <div class="form-group tg-checkbox">
                        <label>
                            <input data-trigger="change" data-required="true" name="docprivacy" type="checkbox">
                            <a href="<?php echo WEB_ROOT;?>index.php/terms" target="_blank">I agree to the Terms and Conditions</a>
                        </label>
                    </div>
                    <button class="tg-btn tg-btn-lg  do-register-button" type="button" id="doc-continue">Create an Account</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!--************************************
    Sign In Sign Up Light Box End
    *************************************-->
</div>



</body>
</html>