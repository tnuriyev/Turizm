<?php
if(isset($_POST['type'])){
    header("Location:msg.php");
}

require_once('vendor/autoload.php');


$transport = new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl');
$transport->setUsername('noreply@turizmforumu.az');
$transport->setPassword('turizm2019');

$mailer = new Swift_Mailer($transport);


if ($_POST['type'] == 'media'){

    $media_first_name = $_POST['media_first_name'];
    $media_last_name = $_POST['media_last_name'];
    $media_name = $_POST['media_name'];
    $media_city = $_POST['media_city'];
    $media_country = $_POST['media_country'];
    $media_email = $_POST['media_email'];
    $media_phone = $_POST['media_phone'];
    $media_type = $_POST['media_type'];
    $media_publication = $_POST['media_publication'];
    $media_web_address = $_POST['media_web_address'];


    try{
        $message = new Swift_Message('New media registered!');
        $message->setFrom(['noreply@turizmforumu.az' => 'Turizm Forumu'])
            ->setTo('info@turizmforumu.az')
            ->setBody("New media registered! <br><br>
                     <hr>
                     First Name: $media_first_name <br>
                     Last Name: $media_last_name <br>
                     City: $media_city <br>
                     Country: $media_country <br>
                     Email: $media_email <br>
                     Phone: $media_phone <br>
                     Name of Media: $media_name <br>
                     Media Web Address: $media_web_address <br>
                     Type of Medium: $media_type<br>
                     Type of Publication about Forum: $media_publication", 'text/html');
        $result = $mailer->send($message);
    }catch(Exception $e)
    {
        echo "Something went wrong. " . $e->getMessage();
    }

}

?>



<!DOCTYPE html>
<html lang="en-US">

    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NR2R322');</script>
        <!-- End Google Tag Manager -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="mailru-domain" content="lyMVUWkmcNyA2Ccc" />
        <meta name="yandex-verification" content="3522f51566f38260" />
        <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
        <title>Azerbaijan Tourism Forum</title>
        
        
        <!-- styles -->
        
        <link rel="stylesheet" id="contact-form-7-css" href="./style/styles.css" type="text/css" media="all">
        <link rel="stylesheet" id="logo-owl-css" href="./style/owl.carousel.css" type="text/css" media="all">
        <link rel="stylesheet" id="logo-owltheme-css" href="./style/owl.theme.default.css" type="text/css" media="all">
        <link rel="stylesheet" id="lgx-logo-animate-css" href="./style/animate-logo.css" type="text/css" media="all">
        <link rel="stylesheet" id="logo-slider-wp-css" href="./style/logo-slider-public.css" type="text/css" media="all">
        <link rel="stylesheet" id="rs-plugin-settings-css" href="./style/settings.css" type="text/css" media="all">
        <link rel="stylesheet" id="wp-counter-up-css" href="./style/counter-up-public.css" type="text/css" media="all">
        <link rel="stylesheet" id="eplano_bsstyle-css" href="./style/bootstrap.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" crossorigin="anonymous">
        <link rel="stylesheet" id="eplano-main-style-css" href="./style/main-style.css" type="text/css" media="all">
        <link rel="stylesheet" id="eplano-style-css" href="./style/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="./style/index.css" type="text/css" media="all">
        <link rel="stylesheet" id="js_composer_front-css" href="./style/js_composer.min.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="style/component.css" />
        <!-- scripts -->
        <script type="text/javascript" src="./script/507b7.js.download"></script>
        <link crossorigin="anonymous" href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
        <!-- <script type="text/javascript">
            var logosliderwp = {
                "owl_navigationTextL": "http:\/\/httpcoder.com\/demo\/wordpress\/eplano\/wp-content\/plugins\/logo-slider-wp\/public\/assets\/img\/prev.png",
                "owl_navigationTextR": "http:\/\/httpcoder.com\/demo\/wordpress\/eplano\/wp-content\/plugins\/logo-slider-wp\/public\/assets\/img\/next.png"
            };
        </script> -->
        <script type="text/javascript" src="./script/c2d52.js.download"></script>


        <link rel="stylesheet" href="./style/css">
        <noscript>
            <style type="text/css">
                .wpb_animate_when_almost_visible {
                    opacity: 1
                }
            </style>
        </noscript>
    </head>

    
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NR2R322"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div id="csipage" class="csisite">
            <!-- header -->
            <header>
                <div id="csi-header" class="csi-header csi-banner-header ">
                    <div id="csi-header-bottom" class="csi-header-bottom  csi-header-bottom-default">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <nav class="navbar navbar-default csi-navbar">
                                        <div class="csicontainer">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>

                                                <!-- logo -->
                                                <div class="csi-logo">
                                                    <a href="javascript:void(0);" class="csi-scroll">
                                                        <img src="assets/img/icons/Logo ATF png.png" alt="ePlano">
                                                    </a>
                                                </div>
                                                <!-- logo -->
                                            </div>
                                            <div class="collapse navbar-collapse">
                                                <ul id="csi-nav" class="nav navbar-nav csi-nav">
                                                    <li data-scroll="content" id="menu-item-19" class="list menu-item  menu-item-19">
                                                        <a class="active" href="#content">Home
                                                        </a>
                                                    </li>
                                                    <li data-scroll="about" id="menu-item-10" class="list menu-item  menu-item-10">
                                                        <a href="#about">About</a>
                                                    </li>
                                                   
                                                    <li data-scroll="speakers" id="menu-item-23" class="list menu-item  menu-item-23">
                                                        <a href="#speakers">Speakers</a>
                                                    </li>
                                                    <li data-scroll="sponsor" id="menu-item-24" class="list menu-item menu-item-24">
                                                        <a href="#sponsor">Sponsor</a>
                                                    </li>
                                                    
                                                    <li data-scroll="contact" id="menu-item-30" class="list menu-item menu-item-30">
                                                        <a href="#contact">Registration</a>
                                                    </li>

                                                    <li data-scroll="blog" id="menu-item-20" class="list menu-item  menu-item-20">
                                                        <a href="#blog">Gallery</a>
                                                    </li>

                                                     <li  class="list menu-item  menu-item-88">
                                                        <a id="lang" href="index.php">Az</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- header done -->
            <!-- content -->
        <div  class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div id="csi-page-wrapper" class="csi-home-wrapper">
                        <div class="container">
                            <article id="post-1016">
                                <div class="entry-content">
                                    <section id="content" data-anchor="content" data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" data-vc-parallax="1" data-vc-parallax-image="assets/img/shape-9.png"
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1524248457278 vc_row-no-padding vc_general vc_parallax vc_parallax-content-moving"
                                        style="position: relative; left: -89.5px; box-sizing: border-box; width: 1349px;">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <section>
                                                        <div id="csi-banner-particle" class="csi-banner csi-banner-particle">
                                                            <div class="csi-banner-style">
                                                                <div class="csi-inner-df">
                                                                    <div class="container">
                                                                        <div class="csi-banner-content csi-banner-content-center ">
                                                                            <h2 class="csi-title2">Meet the biggest <br>
                                                                                <i> Tourism   Event </i>
                                                                                
                                                                                 <br> Azerbaijan Tourism  Forum
                                                                                <b> 2019 </b>
                                                                            </h2>
                                                                           
                                                                            <p class="date" style="padding-top: 80px;">
                                                                                <b>  </b> Haydar Aliyev Gabala Congress Center
                                                                            </p>
                                                                            <div class="action-area">
                                                                                <a data-modal="modal-14" class="md-trigger csi-btn csi-btn-brand">
                                                                                    <span>Participant Registration</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <canvas class="particles-js-canvas-el" width="1170" height="734" style="width: 100%; height: 100%;"></canvas>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_parallax-inner skrollable skrollable-between" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(assets/img/shape-1.png); top: -31.9791%;"></div>
                                    </section>
                                    <div class="vc_row-full-width"></div>
                                    <div  data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1" data-vc-parallax-image="assets/img/shape-9.png"
                                        class="vc_row wpb_row vc_row-fluid csi-inner vc_custom_1524032960128 vc_general vc_parallax vc_parallax-content-moving"
                                        style="position: relative; left: -89.5px; box-sizing: border-box; width: 1349px; padding-left: 89.5px; padding-right: 89.5px;">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">

                                                <!-- main wrapper -->
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="csi-about">
                                                                        <div class="csi-about-content-area ">
                                                                            <div class="csi-heading">
                                                                                <h2 class="heading">Why Azerbaijan Tourism Forum?</h2>
                                                                                <!-- <h3 class="subheading ">Why User Interface Conference ?</h3> -->
                                                                            </div>
                                                                            <div class="csi-about-content">
                                                                                <p class="text">The Forum is one of the biggest event in tourism industry in Azerbaijan.
                                                                                     All tourism professionals and at the same time tourism related industry
                                                                                      members can attend the Forum and participate actively. 
                                                                                      We discuss the current situation in the tourism industry 
                                                                                      in Azerbaijan and show best practice cases.
                                                                                    </p>
                                                                                <div class="btn-area"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- date to event -->
                                                    <div class="csi-countdown-area csi-countdown-area-inner csi-countdown-area-circle_center ">
                                                        <div class="csi-countdown-area-inner">
                                                            <div id="csi-countdown" class="csi-countdown-section csi-countdown" data-vday2="Days" data-vhour2="Hours" data-vmin2="Minutes"
                                                                data-vsec2="Seconds" data-date2="2019/04/20">
                                                                <span class="csi-days">
                                                                    <i> Days </i>
                                                                </span>
                                                                <span class="csi-hr">
                                                                    <i> Hours</i>
                                                                </span>
                                                                <span class="csi-min">
                                                                    <i> Minutes</i>
                                                                </span>
                                                                <span class="csi-sec">
                                                                    <i> Seconds</i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- date to event -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(assets/img/speaker-bg-black.jpg); top: -50%;"></div>
                                    </div>
                                    <div class="vc_row-full-width"></div>
                                    <section id="speakers" data-anchor="speakers" data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1.5" data-vc-parallax-image="assets/img/speaker-bg-black.jpg"
                                        class="vc_row wpb_row vc_row-fluid csi-inner vc-bg-bottom mobile-bg-white vc_custom_1524676653885 vc_general vc_parallax vc_parallax-content-moving"
                                        style="position: relative; left: -89.5px; box-sizing: border-box; width: 1349px; padding-left: 89.5px; padding-right: 89.5px;">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="csi-heading csi-heading-white ">
                                                                        <h2 class="heading">Our Speakers</h2>
                                                                        <h3 class="subheading">The professionals who makes this event even more exciting!</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="text-transform:uppercase;" class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                    <div class="csi-single-speaker2 csi-single-speaker-default csi-single-speaker-bg-default  ">
                                                                        <figure>
                                                                            <a class="profile-img" href="javascript:void(0);">
                                                                                <img src="http://via.placeholder.com/340x340" alt="Coming Soon">
                                                                            </a>
                                                                            <figcaption>
                                                                                
                                                                                <div class="speaker-info">
                                                                                    <h3 class="title">
                                                                                        <a href="javascript:void(0);">Coming Soon</a>
                                                                                    </h3> 
                                                                                    <h4 class="subtitle">Coming Soon</h4>
                                                                                </div>

                                                                            </figcaption>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="csi-single-speaker2 csi-single-speaker-default csi-single-speaker-bg-default  ">
                                                                        <figure>
                                                                            <a class="profile-img" href="javascript:void(0);">
                                                                                <img src="http://via.placeholder.com/340x340" alt="Coming Soon">
                                                                            </a>
                                                                            <figcaption>
                                                                                <div class="speaker-info">
                                                                                    <h3 class="title">
                                                                                        <a href="javascript:void(0);">Coming Soon</a>
                                                                                    </h3> 
                                                                                    <h4 class="subtitle">Coming Soon</h4>
                                                                                </div>
                                                                            </figcaption>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       

                                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="csi-single-speaker2 csi-single-speaker-default csi-single-speaker-bg-default  ">
                                                                        <figure>
                                                                            <a class="profile-img" href="javascript:void(0);">
                                                                                <img src="http://via.placeholder.com/340x340" alt="Coming Soon">
                                                                            </a>
                                                                            <figcaption>
                                                                                
                                                                                <div class="speaker-info">
                                                                                    <h3 class="title">
                                                                                        <a href="javascript:void(0);">Coming Soon</a>
                                                                                    </h3> 
                                                                                    <h4 class="subtitle">Coming Soon</h4>
                                                                                </div>

                                                                            </figcaption>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="csi-single-speaker2 csi-single-speaker-default csi-single-speaker-bg-default  ">
                                                                        <figure>
                                                                            <a class="profile-img" href="javascript:void(0);">
                                                                                <img src="http://via.placeholder.com/340x340" alt="Coming Soon">
                                                                            </a>
                                                                            <figcaption>
                                                                                
                                                                                <div class="speaker-info">
                                                                                    <h3 class="title">
                                                                                        <a href="javascript:void(0);">Coming Soon</a>
                                                                                    </h3> 
                                                                                    <h4 class="subtitle">Coming Soon</h4>
                                                                                </div>

                                                                            </figcaption>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(assets/img/speakers-bg-black.jpg); top: -50%;"></div>
                                    </section>
                                    <div class="vc_row-full-width"></div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1" data-vc-parallax-image="assets/img/shape-9.png"
                                        class="vc_row wpb_row vc_row-fluid csi-inner vc_custom_1523422098474 vc_general vc_parallax vc_parallax-content-moving"
                                        style="position: relative; left: -89.5px; box-sizing: border-box; width: 1349px; padding-left: 89.5px; padding-right: 89.5px;">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="csi-heading  ">
                                                                        <h2 class="heading">Schedule plan</h2>
                                                                        <h3 class="subheading">Start Your Exciting Journey, Who Makes This remarkable events
                                                                            Possible!</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <section>
                                                                        <div id="csi-schedule" class="csi-schedule">
                                                                            <div class="csi-schedule-inner">
                                                                            <div class="csi-tab">
                                                                                    
                                                                                <div class="tab-content csi-tab-content">
                                                                                    <div id="schedule3" class="tab-pane fade in  active">
                                                                                        <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">10:00</h4>
                                                                                                                    <h3 class="title">Registration</h3>
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">12:30</h4>
                                                                                                                    <h3 class="title">Opening Speech</h3>
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">13:00</h4>
                                                                                                                    <h3 class="title">I Panel</h3>
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">13:00</h4>
                                                                                                                    <h3 class="title">Goydaniz Gahramanov	Director; Spektr Travel	Director</h3>
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>


                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">13:25</h4>
                                                                                                                    <h3 class="title">Orkhan İsayev	Regional Director; HRS	Regional Director</h3>
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">13:40</h4>
                                                                                                                    <h3 class="title">David Khripunov	Founder; Digital Sharks	Director</h3>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">13:55</h4>
                                                                                                                    <h3 class="title">Rivka Khripunova	Distant English Teacher	English Teacher İnstructor</h3>  
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">14:10-14:40	</h4>
                                                                                                                    <h3 class="title">Coffee break</h3>  
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">14:40</h4>
                                                                                                                    <h3 class="title">II Panel</h3>  
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">14:50</h4>
                                                                                                                    <h3 class="title">Daniel Bukhard	General Manager; Chenot Palace Health Wellness Hotel	General Manager</h3>  
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">15:05</h4>
                                                                                                                    <h3 class="title">Azer Mammadzada	Director of Sales and Marketing; Winter Park Hotek Baku	Director of Sales and Marketing</h3>  
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">15:20</h4>
                                                                                                                    <h3 class="title">Niyazi Gasimov	Dİgital Specialist</h3>  
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">15:35</h4>
                                                                                                                    <h3 class="title">Shabnam Farman	Managing Director; Tufandag Winter-Summer Tourism Holiday Complex	Managing Director of Tufandag Mountain Resort</h3>  
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">15:50</h4>
                                                                                                                    <h3 class="title">Seymur Hajiyev	Purchasing Director; Gilan Holding	Director of Procurement</h3>  
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">16:10</h4>
                                                                                                                    <h3 class="title">Closing</h3>  
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>                                                  
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="schedule6" class="tab-pane fade in  ">
                                                                                        <div class="panel-group" id="accordion6" role="tablist" aria-multiselectable="true">
                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne78">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne78">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                <div class="author author-multi">
                                                                                                                    <img src="./assets/img/speaker6-150x150.jpg" alt="Ryan Wilson">
                                                                                                                    <img src="./assets/img/speaker4-150x150.jpg" alt="Laura Rodrigues">
                                                                                                                </div>
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">09:00
                                                                                                                        <span> AM </span>
                                                                                                                        - 10.30
                                                                                                                        <span> AM </span>
                                                                                                                    </h4>
                                                                                                                    <h3 class="title">Conference
                                                                                                                        On User
                                                                                                                        Interface</h3>
                                                                                                                    <h4 class="author-info"> By
                                                                                                                        <span> Ryan
                                                                                                                            Wilson
                                                                                                                            </span>
                                                                                                                        , CEO
                                                                                                                        of ThemeKave.
                                                                                                                        <b>|</b>
                                                                                                                        <span>Laura
                                                                                                                            Rodrigues
                                                                                                                            </span>
                                                                                                                        , CEO
                                                                                                                        of JoomlArk.
                                                                                                                    </h4>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="collapseOne78" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                                                    <div class="panel-body">
                                                                                                        <p class="text"> Meh synth Schlitz, tempor duis single-origin 
                                                                                                            coffee ea next level ethnic fingerstache fanny pack nostrud. 
                                                                                                            Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                                                                                                                Salvia  esse flexitarian Truffaut synth art party deep v chillwave.
                                                                                                            <a class="csi-btn-simple" href="javascript:void(0);">View Details</a>
                                                                                                        </p>
                                                                                                        <h4 class="location">
                                                                                                            <strong>Location:</strong>
                                                                                                            Hall 1, Building
                                                                                                            A , Golden Street
                                                                                                            ,
                                                                                                            <span>Southafrica</span>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                <div class="author ">
                                                                                                                    <img src="./assets/img/speaker5-150x150.jpg" alt="Samuel Gomes">
                                                                                                                </div>
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">11:00
                                                                                                                        <span> AM </span>
                                                                                                                        - 12.30
                                                                                                                        <span> PM </span>
                                                                                                                    </h4>
                                                                                                                    <h3 class="title">Wordpress
                                                                                                                        World
                                                                                                                        Conference
                                                                                                                        2019</h3>
                                                                                                                    <h4 class="author-info"> By
                                                                                                                        <span> Samuel
                                                                                                                            Gomes
                                                                                                                            </span>
                                                                                                                        , CEO
                                                                                                                        of EeventPro.
                                                                                                                    </h4>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="collapseOne79" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                                                                                    <div class="panel-body">
                                                                                                        <p class="text"> Meh synth Schlitz, tempor duis single-origin 
                                                                                                            coffee ea next level ethnic fingerstache fanny pack nostrud. 
                                                                                                            Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                                                                                                                Salvia  esse flexitarian Truffaut synth art party deep v chillwave.
                                                                                                            <a class="csi-btn-simple" href="javascript:void(0);">View Details</a>
                                                                                                        </p>
                                                                                                        <h4 class="location">
                                                                                                            <strong>Location:</strong>
                                                                                                            Hall 1, Building
                                                                                                            A , Golden Street
                                                                                                            ,
                                                                                                            <span>Southafrica</span>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne80">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne80">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                <div class="author ">
                                                                                                                    <img src="./assets/img/speaker1-1-150x150.jpg" alt="Jonathon Doe">
                                                                                                                </div>
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">01:00
                                                                                                                        <span> AM </span>
                                                                                                                        - 02.30
                                                                                                                        <span> PM </span>
                                                                                                                    </h4>
                                                                                                                    <h3 class="title">Advance Joomla
                                                                                                                        World
                                                                                                                        Conference</h3>
                                                                                                                    <h4 class="author-info"> By
                                                                                                                        <span> Jonathon
                                                                                                                            Doe
                                                                                                                            </span>
                                                                                                                        , CEO
                                                                                                                        of EventHub
                                                                                                                    </h4>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="collapseOne80" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                                                                                    <div class="panel-body">
                                                                                                        <p class="text"> Meh synth Schlitz, tempor duis single-origin 
                                                                                                            coffee ea next level ethnic fingerstache fanny pack nostrud. 
                                                                                                            Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                                                                                                                Salvia  esse flexitarian Truffaut synth art party deep v chillwave.
                                                                                                            <a class="csi-btn-simple" href="javascript:void(0);">View Details</a>
                                                                                                        </p>
                                                                                                        <h4 class="location">
                                                                                                            <strong>Location:</strong>
                                                                                                            Hall 1, Building
                                                                                                            A , Golden Street
                                                                                                            ,
                                                                                                            <span>Southafrica</span>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne81">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne81">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                <div class="author ">
                                                                                                                    <img src="./assets/img/speaker3-150x150.jpg" alt="Michael Kitamura">
                                                                                                                </div>
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">03:00
                                                                                                                        <span> AM </span>
                                                                                                                        - 04.30
                                                                                                                        <span> PM </span>
                                                                                                                    </h4>
                                                                                                                    <h3 class="title">Business
                                                                                                                        World
                                                                                                                        Event
                                                                                                                        Introduction</h3>
                                                                                                                    <h4 class="author-info"> By
                                                                                                                        <span> Michael
                                                                                                                            Kitamura
                                                                                                                            </span>
                                                                                                                        , Elite
                                                                                                                        Author,
                                                                                                                        Themeforest.
                                                                                                                    </h4>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="collapseOne81" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                                                                                    <div class="panel-body">
                                                                                                        <p class="text"> Meh synth Schlitz, tempor duis single-origin 
                                                                                                            coffee ea next level ethnic fingerstache fanny pack nostrud. 
                                                                                                            Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                                                                                                                Salvia  esse flexitarian Truffaut synth art party deep v chillwave.
                                                                                                            <a class="csi-btn-simple" href="javascript:void(0);">View Details</a>
                                                                                                        </p>
                                                                                                        <h4 class="location">
                                                                                                            <strong>Location:</strong>
                                                                                                            Hall 1, Building
                                                                                                            A , Golden Street
                                                                                                            ,
                                                                                                            <span>Southafrica</span>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="schedule4" class="tab-pane fade in  ">
                                                                                        <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne79">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne79">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                <div class="author ">
                                                                                                                    <img src="./assets/img/speaker5-150x150.jpg" alt="Samuel Gomes">
                                                                                                                </div>
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">11:00
                                                                                                                        <span> AM </span>
                                                                                                                        - 12.30
                                                                                                                        <span> PM </span>
                                                                                                                    </h4>
                                                                                                                    <h3 class="title">Wordpress
                                                                                                                        World
                                                                                                                        Conference
                                                                                                                        2019</h3>
                                                                                                                    <h4 class="author-info"> By
                                                                                                                        <span> Samuel
                                                                                                                            Gomes
                                                                                                                            </span>
                                                                                                                        , CEO
                                                                                                                        of EeventPro.
                                                                                                                    </h4>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="collapseOne79" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                                                    <div class="panel-body">
                                                                                                        <p class="text"> Meh synth Schlitz, tempor duis single-origin 
                                                                                                            coffee ea next level ethnic fingerstache fanny pack nostrud. 
                                                                                                            Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                                                                                                                Salvia  esse flexitarian Truffaut synth art party deep v chillwave.
                                                                                                            <a class="csi-btn-simple" href="javascript:void(0);">View Details</a>
                                                                                                        </p>
                                                                                                        <h4 class="location">
                                                                                                            <strong>Location:</strong>
                                                                                                            Hall 1, Building
                                                                                                            A , Golden Street
                                                                                                            ,
                                                                                                            <span>Southafrica</span>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne80">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne80">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                <div class="author ">
                                                                                                                    <img src="./assets/img/speaker1-1-150x150.jpg" alt="Jonathon Doe">
                                                                                                                </div>
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">01:00
                                                                                                                        <span> AM </span>
                                                                                                                        - 02.30
                                                                                                                        <span> PM </span>
                                                                                                                    </h4>
                                                                                                                    <h3 class="title">Advance Joomla
                                                                                                                        World
                                                                                                                        Conference</h3>
                                                                                                                    <h4 class="author-info"> By
                                                                                                                        <span> Jonathon
                                                                                                                            Doe
                                                                                                                            </span>
                                                                                                                        , CEO
                                                                                                                        of EventHub
                                                                                                                    </h4>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="collapseOne80" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                                                                                    <div class="panel-body">
                                                                                                        <p class="text"> Meh synth Schlitz, tempor duis single-origin 
                                                                                                            coffee ea next level ethnic fingerstache fanny pack nostrud. 
                                                                                                            Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                                                                                                                Salvia  esse flexitarian Truffaut synth art party deep v chillwave.
                                                                                                            <a class="csi-btn-simple" href="javascript:void(0);">View Details</a>
                                                                                                        </p>
                                                                                                        <h4 class="location">
                                                                                                            <strong>Location:</strong>
                                                                                                            Hall 1, Building
                                                                                                            A , Golden Street
                                                                                                            ,
                                                                                                            <span>Southafrica</span>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne81">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne81">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                <div class="author ">
                                                                                                                    <img src="./assets/img/speaker3-150x150.jpg" alt="Michael Kitamura">
                                                                                                                </div>
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">03:00
                                                                                                                        <span> AM </span>
                                                                                                                        - 04.30
                                                                                                                        <span> PM </span>
                                                                                                                    </h4>
                                                                                                                    <h3 class="title">Business
                                                                                                                        World
                                                                                                                        Event
                                                                                                                        Introduction</h3>
                                                                                                                    <h4 class="author-info"> By
                                                                                                                        <span> Michael
                                                                                                                            Kitamura
                                                                                                                            </span>
                                                                                                                        , Elite
                                                                                                                        Author,
                                                                                                                        Themeforest.
                                                                                                                    </h4>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="collapseOne81" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                                                                                    <div class="panel-body">
                                                                                                        <p class="text"> Meh synth Schlitz, tempor duis single-origin 
                                                                                                            coffee ea next level ethnic fingerstache fanny pack nostrud. 
                                                                                                            Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                                                                                                                Salvia  esse flexitarian Truffaut synth art party deep v chillwave.
                                                                                                            <a class="csi-btn-simple" href="javascript:void(0);">View Details</a>
                                                                                                        </p>
                                                                                                        <h4 class="location">
                                                                                                            <strong>Location:</strong>
                                                                                                            Hall 1, Building
                                                                                                            A , Golden Street
                                                                                                            ,
                                                                                                            <span>Southafrica</span>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="schedule5" class="tab-pane fade in  ">
                                                                                        <div class="panel-group" id="accordion5" role="tablist" aria-multiselectable="true">
                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne77">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne77">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                <div class="author ">
                                                                                                                    <img src="./assets/img/speaker6-150x150.jpg" alt="Ryan Wilson">
                                                                                                                </div>
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">07:00
                                                                                                                        <span> AM </span>
                                                                                                                        - 8.30
                                                                                                                        <span> AM </span>
                                                                                                                    </h4>
                                                                                                                    <h3 class="title">Digital World
                                                                                                                        Event
                                                                                                                        Introduction</h3>
                                                                                                                    <h4 class="author-info">By
                                                                                                                        <span>Ryan
                                                                                                                            Wilson
                                                                                                                            </span>,
                                                                                                                        CEO of
                                                                                                                        ThemeKave.
                                                                                                                    </h4>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="collapseOne77" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                                                    <div class="panel-body">
                                                                                                        <p class="text"> Meh synth Schlitz, tempor duis single-origin 
                                                                                                            coffee ea next level ethnic fingerstache fanny pack nostrud. 
                                                                                                            Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                                                                                                                Salvia  esse flexitarian Truffaut synth art party deep v chillwave.
                                                                                                            <a class="csi-btn-simple" href="javascript:void(0);">View Details</a>
                                                                                                        </p>
                                                                                                        <h4 class="location">
                                                                                                            <strong>Location:</strong>
                                                                                                            Hall 1, Building
                                                                                                            A , Golden Street
                                                                                                            ,
                                                                                                            <span>Southafrica</span>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="panel panel-default csi-panel">
                                                                                                <div class="panel-heading" role="tab" id="headingOne78">
                                                                                                    <div class="panel-title">
                                                                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="javascript:void(0);"
                                                                                                            aria-expanded="true"
                                                                                                            aria-controls="collapseOne78">
                                                                                                            <div class="csi-single-schedule">
                                                                                                                <div class="author author-multi">
                                                                                                                    <img src="./assets/img/speaker6-150x150.jpg" alt="Ryan Wilson">
                                                                                                                    <img src="./assets/img/speaker4-150x150.jpg" alt="Laura Rodrigues">
                                                                                                                </div>
                                                                                                                <div class="schedule-info">
                                                                                                                    <h4 class="time">09:00
                                                                                                                        <span> AM </span>
                                                                                                                        - 10.30
                                                                                                                        <span> AM </span>
                                                                                                                    </h4>
                                                                                                                    <h3 class="title">Conference
                                                                                                                        On User
                                                                                                                        Interface</h3>
                                                                                                                    <h4 class="author-info">By
                                                                                                                        <span>Ryan
                                                                                                                            Wilson
                                                                                                                            </span>,
                                                                                                                        CEO of
                                                                                                                        ThemeKave.
                                                                                                                        <b>|</b>
                                                                                                                        <span>Laura
                                                                                                                            Rodrigues
                                                                                                                            </span>
                                                                                                                        ,CEO
                                                                                                                        of JoomlArk.
                                                                                                                    </h4>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="collapseOne78" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                                                                                    <div class="panel-body">
                                                                                                        <p class="text"> Meh synth Schlitz, tempor duis single-origin 
                                                                                                            coffee ea next level ethnic fingerstache fanny pack nostrud. 
                                                                                                            Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                                                                                                                Salvia  esse flexitarian Truffaut synth art party deep v chillwave.
                                                                                                            <a class="csi-btn-simple" href="javascript:void(0);">View Details</a>
                                                                                                        </p>
                                                                                                        <h4 class="location">
                                                                                                            <strong>Location:</strong>
                                                                                                            Hall 1, Building
                                                                                                            A , Golden Street
                                                                                                            ,
                                                                                                            <span>Southafrica</span>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(assets/img/pattern-parallux2-1.png); top: -50%;"></div>
                                    </div>
                                    <div class="vc_row-full-width"></div>
                                    <section id="sponsor" data-anchor="sponsor" data-vc-full-width="true" data-vc-full-width-init="true" 
                                        class="vc_row wpb_row vc_row-fluid csi-inner mobile-bg-white vc_custom_1524718380820 vc_general vc_parallax vc_parallax-content-moving"
                                        style="position: relative; left: -89.5px; box-sizing: border-box; width: 1349px; padding-left: 89.5px; padding-right: 89.5px;">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="csi-heading  ">
                                                                        <h2 class="heading">Sponsorlar</h2>
                                                                        <h3 class="subheading">Bu əlamətdar hadisələri mümkün edən kimsənin həyəcanlandırıcı səyahətinə başlayın!</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="vcx-sponsored-wrapper vcx-spwrap-shadow-style  vcx-spwrap-item3 ">
                                                                        <div class="vcx-sponsored-title">
                                                                            <h3 class="sponsored-heading first-heading">TƏŞKİLATÇI Sponsor</h3>
                                                                        </div>
                                                                        <div class="sponsors-area">
                                                                            <div class="single single-shadow-style csi-item4">
                                                                                <a class="Gold Sponsors" href="javascript:void(0);" target="_blank">
                                                                                    <img src="./assets/img/logo/Congress-Hall.png" alt="Sponsor">
                                                                                </a>
                                                                            </div>
                                                                            <div class="single single-shadow-style csi-item4">
                                                                                <a class="Gold Sponsors" href="javascript:void(0);" target="_blank">
                                                                                    <img src="./assets/img/logo/aha.png" alt="Sponsor">
                                                                                </a>
                                                                            </div>
                                                                            <div class="single single-shadow-style csi-item4">
                                                                                <a class="Gold Sponsors" href="javascript:void(0);" target="_blank">
                                                                                    <img src="./assets/img/logo/gilan.png" alt="Sponsor">
                                                                                </a>
                                                                            </div>
                                                                            <div class="single single-shadow-style csi-item4">
                                                                                <a class="Gold Sponsors" href="javascript:void(0);" target="_blank">
                                                                                    <img src="./assets/img/logo/qafqaz.png" alt="Sponsor">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1521377133144">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="vcx-sponsored-wrapper vcx-spwrap-shadow-style  vcx-spwrap-item4 ">
                                                                        <div class="vcx-sponsored-title">
                                                                            <h3 class="sponsored-heading first-heading">Sponsorlar</h3>
                                                                        </div>
                                                                        <div class="sponsors-area">
                                                                            <div class="single single-shadow-style csi-item4">
                                                                                <a class="Silver Sponsors" href="https://mondotravel.az/" target="_blank">
                                                                                    <img src="assets/img/logo/mondo.png" alt="Sponsor">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(&quot;http://httpcoder.com/demo/wordpress/eplano/wp-content/uploads/2018/04/shape-1.png&quot;); top: -50%;"></div>
                                    </section>
                                    <div class="vc_row-full-width"></div>
                                    <section id="contact" data-anchor="contact" data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" data-vc-parallax="1" data-vc-parallax-image="assets/img/shape-9.png"
                                        class="vc_row wpb_row vc_row-fluid mobile-bg-black vc_custom_1524718530282 vc_row-no-padding vc_general vc_parallax vc_parallax-content-moving"
                                        style="position: relative; left: -89.5px; box-sizing: border-box; width: 1349px;">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div id="vcx-particle-section" class="vcx-particle-section vcx-particle-default">
                                                                        <div id="vcx-particles-inner" class="vcx-particles-section-wrapper">
                                                                            <div class="vcx-particle-content">
                                                                                <h3 class="csi-pre-title"></h3>
                                                                                <h3 class="heading">What are you waiting for?Get Ready to Start Your
                                                                                    Exciting Journey!</h3>
                                                                                <h2 class="csi-title">The amazing  Tourism World.What are you waiting for?
                                                                                    Get ready to start youre exciting journey.</h2>
                                                                                <p class="csi-content">Get Ready to Start Your Exciting Journey. Our Team
                                                                                    Will Lead You Through the Amazing Tourism world.</p>
                                                                                <div class="action-area">


                                                                                    <a data-modal="modal-13" class="md-trigger csi-btn csi-btn-brand" >
                                                                                        <span>Media Accreditation</span>
                                                                                    </a>

                                                                                    <a data-modal="modal-14" class="md-trigger csi-btn csi-btn-brand">
                                                                                        <span>Participant Registration</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <canvas class="particles-js-canvas-el" width="1170" height="654" style="width: 100%; height: 100%;"></canvas>

                                                                            <!-- modal window -->
                                                                            <div class="md-modal md-effect-13" id="modal-13">
                                                                                <div class="md-content"> 
                                                                                    <div>
                                                                                        <form class="accreditation" id="form" method="POST">
                                                                                            <fieldset>
                                                                                                <label for="first-name">First Name:</label>
                                                                                                <input autocomplete="off" type="text" name="media_first_name" placeholder="First Name">

                                                                                                <label for="city">City:</label>
                                                                                                <input autocomplete="off" type="text" name="media_city" placeholder="City">

                                                                                                <label for="email">Email:</label>
                                                                                                <input autocomplete="off" type="text" name="media_email" placeholder="Email">

                                                                                                <label for="media">Name of Media:</label>
                                                                                                <input autocomplete="off" type="text" name="media_name" placeholder="Name of Media">

                                                                                                <label for="web-adress">Web address of Media:</label>
                                                                                                <input autocomplete="off" type="text" name="media_web_address" placeholder="Web address of Media">
                                                                                            </fieldset>

                                                                                            <fieldset>
                                                                                                <label for="last-name">Last Name:</label>
                                                                                                <input autocomplete="off" type="text" name="media_last_name" placeholder="Last Name">

                                                                                                <label for="country">Country:</label>
                                                                                                <input autocomplete="off" type="text" name="media_country" placeholder="Country">

                                                                                                <label for="mobile">Mobile:</label>
                                                                                                <input autocomplete="off" type="text" name="media_phone" placeholder="Mobile">

                                                                                                <label for="type">Type of Medium:</label>
                                                                                                <input autocomplete="off" type="text" name="media_type" placeholder="Type of Medium">

                                                                                                <label for="publication">Type of Publication about Forum:</label>
                                                                                                <input autocomplete="off" type="text" name="media_publication" placeholder="Type of Publication">
                                                                                            </fieldset>
                                                                                            <input type="hidden" name="type" id="type" value="media">
                                                                                            <button  class="md-close" type="submit">Send info !</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    

                                                                            <div class="md-modal md-effect-14" id="modal-14">
                                                                                <div class="md-content-2"> 
                                                                                    <div>
                                                                                        <form class="media" name="modal-14" id="form" method="POST">
                                                                                            
                                                                                            <fieldset>
                                                                                                <!-- <div class="media-title_m">Registration</div>

                                                                                                <label for="first-name"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" class="first-name" name="first_name" placeholder="First Name">

                                                                                                <label for="last-name"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" class="last-name" name="last_name" placeholder="Last Name"> -->

                                                                                                <!-- <label for="city">City:</label>
                                                                                                <input autocomplete="off" type="text" name="city" placeholder="City"> -->

                                                                                                <!-- <label for="email"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" class="email" name="email" placeholder="Email">

                                                                                                <label for="mobile"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" class="mobile" name="phone" placeholder="Mobile">

                                                                                                <label for="company"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" class="company" name="company" placeholder="Company">

                                                                                                <label for="position"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" class="position" name="position" placeholder="Position"> -->

                                                                                                <iframe  src="https://ticketsetup.events/turizmforumu.az/en" width="100%" height="570px" frameborder="0"></iframe>

                                                                                            </fieldset>

                                                                                            <!-- <fieldset> -->
                                                                                                
                                                                                                <!-- <label for="country">Country:</label>
                                                                                                <input autocomplete="off" type="text" name="country" placeholder="Country"> -->
 
                                                                                            <!-- </fieldset> -->
                                                                                            <!-- <input type="hidden" name="type" value="participant"> -->
                                                                                            <button style="display:none;" class="md-close" type="submit">Submit</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                           
                                                                            

                                                                            <!-- /container -->
                                                                            <div class="md-overlay"></div>
                                                                            <!-- the overlay element -->
                                                                            <!-- -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(assets/img/patt3.png); top: -50%;"></div>
                                    </section>
                                    <div class="vc_row-full-width"></div>
                                   
                                    <section id="blog" data-anchor="blog" data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" data-vc-parallax="1" data-vc-parallax-image="assets/img/shape-9.png"
                                        class="vc_row wpb_row vc_row-fluid csi-inner mobile-bg-black vc_custom_1524718563512 vc_row-no-padding vc_general vc_parallax vc_parallax-content-moving"
                                        style="position: relative; left: -89.5px; box-sizing: border-box; width: 1349px;z-index: 0;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="csi-heading csi-heading-white ">
                                                                                <h2 class="heading">photo gallery</h2>
                                                                                <h3 class="subheading">Start Your Exciting Journey, Who Makes This remarkable
                                                                                    events Possible!</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div id="csi-gallery" class="csi-gallery">
                                                                                <div class="row">
                                                                                    <div class="col-xs-12">
                                                                                        <div class="csi-single-gallery">
                                                                                            <figure>
                                                                                                <img title="Event Gallery Ten" src="./assets/img/gallery/1.png" alt="Event Gallery Ten">
                                                                                                <figcaption class="csi-figcaption">
                                                                                                    <div class="csi-hover-link">
                                                                                                        <div class="csi-vertical">
                                                                                                            <a class="csi-single-photo" title="Event Gallery Ten" href="./assets/img/gallery/1.png">
                                                                                                                <i class="fa fa-search fa-2x"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </figcaption>
                                                                                            </figure>
                                                                                        </div>
                                                                                        <div class="csi-single-gallery">
                                                                                            <figure>
                                                                                                <img title="Event Gallery Eleven" src="./assets/img/gallery/2.png" alt="Event Gallery Eleven">
                                                                                                <figcaption class="csi-figcaption">
                                                                                                    <div class="csi-hover-link">
                                                                                                        <div class="csi-vertical">
                                                                                                            <a class="csi-single-photo" title="Event Gallery Eleven" href="./assets/img/gallery/2.png">
                                                                                                                <i class="fa fa-search fa-2x"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </figcaption>
                                                                                            </figure>
                                                                                        </div>
                                                                                        <div class="csi-single-gallery">
                                                                                            <figure>
                                                                                                <img title="Event Gallery Twelve" src="./assets/img/gallery/3.png" alt="Event Gallery Tweleve">
                                                                                                <figcaption class="csi-figcaption">
                                                                                                    <div class="csi-hover-link">
                                                                                                        <div class="csi-vertical">
                                                                                                            <a class="csi-single-photo" title="Event Gallery Twelve" href="./assets/img/gallery/3.png">
                                                                                                                <i class="fa fa-search fa-2x"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </figcaption>
                                                                                            </figure>
                                                                                        </div>
                                                                                        <div class="csi-single-gallery">
                                                                                            <figure>
                                                                                                <img title="Event Gallery Nine" src="./assets/img/gallery/4.png" alt="Event Gallery Nine">
                                                                                                <figcaption class="csi-figcaption">
                                                                                                    <div class="csi-hover-link">
                                                                                                        <div class="csi-vertical">
                                                                                                            <a class="csi-single-photo" title="Event Gallery Nine" href="./assets/img/gallery/4.png">
                                                                                                                <i class="fa fa-search fa-2x"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </figcaption>
                                                                                            </figure>
                                                                                        </div>
                                                                                        <div class="csi-single-gallery">
                                                                                            <figure>
                                                                                                <img title="Event Gallery Eight" src="./assets/img/gallery/5.png" alt="Event Gallery Eight">
                                                                                                <figcaption class="csi-figcaption">
                                                                                                    <div class="csi-hover-link">
                                                                                                        <div class="csi-vertical">
                                                                                                            <a class="csi-single-photo" title="Event Gallery Eight" href="./assets/img/gallery/5.png">
                                                                                                                <i class="fa fa-search fa-2x"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </figcaption>
                                                                                            </figure>
                                                                                        </div>
                                                                                        <div class="csi-single-gallery">
                                                                                            <figure>
                                                                                                <img title="Event Gallery Seven" src="./assets/img/gallery/6.png" alt="Event Gallery Seven">
                                                                                                <figcaption class="csi-figcaption">
                                                                                                    <div class="csi-hover-link">
                                                                                                        <div class="csi-vertical">
                                                                                                            <a class="csi-single-photo" title="Event Gallery Seven" href="./assets/img/gallery/6.png">
                                                                                                                <i class="fa fa-search fa-2x"></i>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </figcaption>
                                                                                            </figure>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; background-image: url(assets/img/patt3.png); top: -50%;"></div>
                                    </section>
                                    <div class="vc_row-full-width"></div>
                                   

                                    
                                    <div class="vc_row-full-width"></div>

                                    <div id="about" class="about-me">
                                        <div class="about-panel">
                                            <h1>About</h1>
                                            <p>Azerbaijan Tourism Forum focuses on doing tourism 
                                            related events and networking meetings in different parts 
                                            of the country to further boost national tourism. 
                                            It pays particular attention to the relationship between 
                                            local and global tourism trends as well as strategies 
                                            for more sustainable tourism growth in Azerbaijan. 
                                            We gather together all tourism professional, both from
                                             hoteliers and travel agencies, also other tourism related 
                                             companies and discuss the current problems, that we are 
                                             facing nowadays.
                                            Networking is a big key element of this event. 
                                            All tourism professionals can network during our coffee 
                                            breaks and lunch time.
                                        </div>
                                        <div class="list">
                                            <h3>PARTICIPANTS OF THE FORUM</h3>
                                            <ul>
                                                <li>Hotels and other accommodation facilities</li>
                                                <li>Excursion facilities (museums, exhibition centers, galleries and other)</li>
                                                <li>Tour operators from Germany, Austria, Switzerland</li>
                                                <li>İnsurance companies, insuing the tourists traveling abroad</li>
                                                <li>Other organizations functioning in the sphere of tourism and related areas</li>
                                                <li>Airlines</li>
                                                <li>İnformation centers for tourists</li>
                                                <li>Shopping centers, trading houses</li>
                                                <li>Restaurants and other catering facilities</li>
                                            </ul>   
                                        </div>
                                             
                                    </div>
                                    <footer></footer>
                                </div>
                            </article>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <footer>
            <div id="csi-footer" class="csi-footer">
                <div class="csi-inner-bg">
                    <div class="csi-inner">
                        <div class="csi-footer-middle">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="csi-footer-logo">
                                            <a class="logo" href="javascript:void(0);">
                                                <img src="assets/img/icons/Logo ATF png.png" alt="ePlano">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="csi-footer-single-area">
                                            <div class="csi-footer-single">
                                                <h3 class="footer-location_title footer-title">Tourism Forum</h3>
                                                <h4 class="date">20 APRIL, 2019</h4>
                                                <address>Haydar Aliyev GABALA Congress Center</address>
                                                <!-- <a class="map-link" href="javascript:void(0);">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> VIEW MAP LOCATION
                                                </a> -->
                                            </div>
                                            <div class="csi-footer-single">
                                                <!-- <h3 class="footer-title">Social Update</h3>
                                                <p class="text">You should connect social area for Any update</p> -->
                                                <ul class="list-inline csi-social">
                                                    <li>
                                                        <a href="https://www.facebook.com/turizmforumuazerbaycan/?ref=br_rs" target="_blank">
                                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>

        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
       

        <script type="text/javascript" src="./script/6eaeb.js.download"></script>
       
        <script type="text/javascript" src="./script/e143d.js.download"></script>
        
        <script type="text/javascript" src="./script/92f66.js.download"></script>
        
        <script src="script/classie.js"></script>
        <script src="script/modalEffects.js"></script>
    </body>

</html>

