<?php

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
         print_r($result);die;
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
        <title>Azərbaycan Turizm Forumu</title>
        
        
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
        <link rel="stylesheet" type="text/css" href="style/fonts.css" />
        <!-- scripts -->
        <!-- <link crossorigin="anonymous" href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
        <script type="text/javascript" src="./script/507b7.js.download"></script>
        <link crossorigin="anonymous" href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
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
                                                        <a class="active" href="#content">ANA SƏHİFƏ
                                                        </a>
                                                    </li>
                                                    <li data-scroll="about" id="menu-item-10" class="list menu-item  menu-item-10">
                                                        <a href="#about">HAQQIMIZDA</a>
                                                    </li>
                                                   
                                                    <li data-scroll="speakers" id="menu-item-23" class="list menu-item  menu-item-23">
                                                        <a href="#speakers">SPİKERLƏR</a>
                                                    </li>
                                                    <li data-scroll="sponsor" id="menu-item-24" class="list menu-item menu-item-24">
                                                        <a href="#sponsor">SPONSORLAR</a>
                                                    </li>
                                                    
                                                    <li data-scroll="contact" id="menu-item-30" class="list menu-item menu-item-30">
                                                        <a href="#contact">QEYDİYYAT</a>
                                                    </li>

                                                    <li data-scroll="blog" id="menu-item-20" class="list menu-item  menu-item-20">
                                                        <a href="#blog">QALEREYA</a>
                                                    </li>

                                                     <li  class="list menu-item  menu-item-88">
                                                        <a id="lang" href="main.php">EN</a>
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
                                                                            <h2 class="csi-title2">Ən böyük <br>
                                                                                <i> Turizm tədbirinə </i>
                                                                                
                                                                                 <br> sən də qoşul
                                                                                <b> 2019 </b>
                                                                            </h2>
                                                                            <p class="date">
                                                                                
                                                                            </p>
                                                                            <p class="date" style="padding-top: 80px;">
                                                                                <b>  </b> H.Əliyev adına  Qəbələ Konqres Mərkəzi <br>
                                                                            </p>
                                                                            <div class="action-area">
                                                                                <a data-modal="modal-14" class="md-trigger csi-btn csi-btn-brand">
                                                                                    <span>İştirakçı Qeydiyyatı</span>
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
                                                                                <h2 class="heading">Niyə Azərbaycan Turizm Forumu?</h2>
                                                                                <!-- <h3 class="subheading ">Why User Interface Conference ?</h3> -->
                                                                            </div>
                                                                            <div class="csi-about-content">
                                                                                <p class="text">Turizm Forumu Azərbaycan turizm sənayesinin ən böyük tədbirlərindən biridir. 
                                                                                                Turizm mütəxəssisləri və bu sahəyə marağı olan istənilən 
                                                                                                kəs Forumda iştirak edə bilər. Biz hazırki turizm sənayesini müzakirə
                                                                                                edirik və ən yaxşı nümunələri ortaya qoyaraq müzakirə edirik. 
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
                                                            <div style="text-transform:none !important;" id="csi-countdown" class="csi-countdown-section csi-countdown" data-vday2="Gün" data-vhour2="Saat" data-vmin2="DƏQİQƏ"
                                                                data-vsec2="SANİYƏ" data-date2="2019/04/20">
                                                                <span class="csi-days">
                                                                    <i> Gün </i>
                                                                </span>
                                                                <span class="csi-hr">
                                                                    <i> Saat </i>
                                                                </span>
                                                                <span class="csi-min">
                                                                    <i> DƏQİQƏ </i>
                                                                </span>
                                                                <span class="csi-sec">
                                                                    <i> SANİYə </i>
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
                                    <section id="speakers" data-anchor="speakers" data-vc-full-width="true" data-vc-full-width-init="true" 
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
                                                                        <h2 class="heading">Spikerlərimiz</h2>
                                                                        <h3 class="subheading">Bu tədbiri daha həyəcanverici edən professional mütəxəssislər!</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        
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
                                                                                        <a href="javascript:void(0);">TEZLİKLƏ</a>
                                                                                    </h3> 
                                                                                    <h4 class="subtitle">Tezliklə</h4>
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
                                                                                        <a href="javascript:void(0);">TEZLİKLƏ</a>
                                                                                    </h3> 
                                                                                    <h4 class="subtitle">Tezliklə</h4>
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
                                                                                        <a href="javascript:void(0);">TEZLİKLƏ</a>
                                                                                    </h3> 
                                                                                    <h4 class="subtitle">Tezliklə</h4>
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
                                                                                            <a href="javascript:void(0);">TEZLİKLƏ</a>
                                                                                        </h3> 
                                                                                        <h4 class="subtitle">Tezliklə</h4>
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
                                                                        <h2 class="heading">TƏDBİRİN PLANI</h2>
                                                                        <h3 class="subheading">Bu əlamətdar hadisələri mümkün edən turizmin həyəcanlandırıcı səyahətinə başlayın!
                                                                        </h3>
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
                                                                                <div class="csi-tab  ">
                                                                                    
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
                                                                                                                        <h3 class="title">Qeydiyyat</h3>
                                                                                                                        
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
                                                                                                                        <h3 class="title">Açılış nitqi</h3>
                                                                                                                        
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
                                                                                                                        <h3 class="title">Göydəniz Qəhrəmanov Direktor, Spektr Travel Direktor</h3>
                                                                                                                        
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
                                                                                                                        <h3 class="title">Orxan İsayev	Regional Direktor, HRS</h3>
                                                                                                                        
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
                                                                                                                        <h3 class="title">David Xripunov	Təsisçi, Digital Sharks	Direktor</h3>
                                                                                                                        
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
                                                                                                                        <h3 class="title">Rivka Xripunova	İngilis dili üzrə Distant təhsil	İngilis dili müəllimi</h3>  
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
                                                                                                                        <h3 class="title">Çay fasiləsi</h3>  
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
                                                                                                                        <h3 class="title">Daniel Bukhard	Baş Menecer, Chenot Palace Health Wellness Hotel	Baş Menecer</h3>  
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
                                                                                                                        <h3 class="title">Azər Məmmədzadə	Satış və Marketinq üzrə Direktor, Winter Park Hotek Baku	Satış və marketinq Şöbəsinin direktoru</h3>  
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
                                                                                                                        <h3 class="title">Niyazi Qasımov   Digital Mütəxəssis</h3>  
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
                                                                                                                        <h3 class="title">Şəbnəm Fərman	İdarəedici Direktor, Tufandag Winter-Summer Tourism Holiday Complex	Tufandağ Resort otelinin baş direktoru</h3>  
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
                                                                                                                        <h3 class="title">Seymur Haciyev	Satınalma üzrə Direktor, Gilan Holding	Satınalma üzrə direktor</h3>  
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
                                                                                                                        <h3 class="title">Bağlanış</h3>  
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
                                                                                <h3 class="heading">Nə gözləyirsiniz? Həyəcanverici səfərə başlamağa hazır olun!</h3>
                                                                                <h2 class="csi-title">Gözəl turizm dünyası. 
                                                                                Nə gözləyirsiniz? Sizin maraqlı səfərinizə başlamaq üçün hazır olun.</h2>
                                                                                <p class="csi-content">Həyəcan verən səyahətə başlamaq üçün hazır olun. Bizim komanda sizi  İnanılmaz Turizm dünyasına götürəcək.</p>
                                                                                <div class="action-area">


                                                                                    <a data-modal="modal-13" class="md-trigger csi-btn csi-btn-brand" >
                                                                                        <span>Media Akkreditasiyası</span>
                                                                                    </a>

                                                                                    <a data-modal="modal-14" class="md-trigger csi-btn csi-btn-brand">
                                                                                        <span>İştirakçı Qeydiyyatı</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <canvas class="particles-js-canvas-el" width="1170" height="654" style="width: 100%; height: 100%;"></canvas>

                                                                            <!-- modal window -->
                                                                            <div class="md-modal md-effect-13" id="modal-13">
                                                                                <div class="md-content"> 
                                                                                    <div>
                                                                                        <form class="accreditation" id="form" method="POST" action="/">
                                                                                            <fieldset>
                                                                                                <label for="first-name">Ad:</label>
                                                                                                <input autocomplete="off" type="text" name="media_first_name" placeholder="Ad">

                                                                                                <label for="city">Şəhər:</label>
                                                                                                <input autocomplete="off" type="text" name="media_city" placeholder="Şəhər">

                                                                                                <label for="email">Email:</label>
                                                                                                <input autocomplete="off" type="text" name="media_email" placeholder="Email">

                                                                                                <label for="media">Medianın adı:</label>
                                                                                                <input autocomplete="off" type="text" name="media_name" placeholder="Medianın adı">

                                                                                                <label for="web-adress">Media saytının Linki:</label>
                                                                                                <input autocomplete="off" type="text" name="media_web_address" placeholder="Media saytının Linki">
                                                                                            </fieldset>

                                                                                            <fieldset>
                                                                                                <label for="last-name">Soyad:</label>
                                                                                                <input autocomplete="off" type="text" name="media_last_name" placeholder="Soyad">

                                                                                                <label for="country">Şəhər:</label>
                                                                                                <input autocomplete="off" type="text" name="media_country" placeholder="Şəhər">

                                                                                                <label for="mobile">Mobil:</label>
                                                                                                <input autocomplete="off" type="text" name="media_phone" placeholder="Mobil">

                                                                                                <label for="type">Medianın növü:</label>
                                                                                                <input autocomplete="off" type="text" name="media_type" placeholder="Medianın növü">

                                                                                                <label for="publication">Forum haqqında paylaşım növü:</label>
                                                                                                <input autocomplete="off" type="text" name="media_publication" placeholder="Forum haqqında paylaşım növü">
                                                                                            </fieldset>
                                                                                            <input type="hidden" name="type" value="media">
                                                                                            <button class="md-close" type="submit">Göndər !</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="md-modal md-effect-14" id="modal-14">
                                                                                <div class="md-content-2"> 
                                                                                    <div>
                                                                                        <form class="media" name="modal-14" id="form" method="POST">
                                                                                            <fieldset>
                                                                                                <!-- <div class="media-title_m">Qeydiyyat</div>

                                                                                                <label for="first-name"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" name="first_name" placeholder="Ad">

                                                                                                <label for="last-name"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" name="last_name" placeholder="Soyad">

                                                                                                <label for="email"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" name="email" placeholder="Email">

                                                                                                <label for="mobile"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" name="phone" placeholder="Mobil">

                                                                                                <label for="company"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" name="company" placeholder="Şirkət">

                                                                                                <label for="position"></label>
                                                                                                <input oninput="formValidation();" autocomplete="off" type="text" name="position" placeholder="Vəzifə"> -->

                                                                                                <iframe src="https://ticketsetup.events/turizmforumu.az/" width="100%" height="570px" frameborder="0"></iframe>
                                                                                            </fieldset>

                                                                                            <!-- <input type="hidden" name="type" value="participant"> -->
                                                                                            <button style="display:none;" class="md-close" type="submit">TƏSDİQ Et</button>
                                                    
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
                                                                                <h2 class="heading">Qalereya</h2>
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
                                        <div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;" style="height: 150%; top: -50%;"></div>
                                    </section>
                                    <div class="vc_row-full-width"></div>
                                   

                                    
                                    <div class="vc_row-full-width"></div>

                                    <div id="about" class="about-me">
                                        <div class="about-panel">
                                            <h1>Haqqımızda</h1>
                                            <p>Azərbaycan Turizm Forumu turizm istiqamətində 2016-cı
                                             ildən bəri müxtəlif layihələr və forumlar təşkil edir.
                                              Bütün bu tədbirlər milli turizmin ən yaxşı nümunələrini 
                                              ortaya qoyaraq, turizmin inkişafı və həlləri üçün müxtəlif
                                               yolların axtarışına iştirakçılarla birlikdə başlamışıq. 
                                               Forum Azərbaycanda bu istiqamətdə yaradılmış ilk və yeganə 
                                               platformadır ki, burada nəinki turizm sənayesinin mütəxəssislərini,
                                                həmçinin fərqli sənayeni və turizmdə yeni biznes qurmaq istəyən 
                                                hər kəs üçün açıqdır. Əlaqələr yaratmaq
                                                 Forumun əsas istiqamətlərindən biridir.
                                        </div>
                                        <div class="list">
                                            <h3>FORUMUN İŞTİRAKÇILARI</h3>
                                            <ul>
                                                <li>Otellər  və digər yerləşmə obyektlərinin əməkdaşları</li>
                                                <li>Ekskursiya əməkdaşları</li>
                                                <li>Almaniya, Avstriya, İsveçrə tur operatorları</li>
                                                <li>Sığorta şirkətləri</li>
                                                <li>Turizm sahəsinə maraqlı olan digər şirkətlər</li>
                                                <li>Hava yolu şirkətləri</li>
                                                <li>Turizm informasiya mərkəzləri</li>
                                                <li>Ticarət mərkəzləri</li>
                                                <li>Restoran və digər keyterinq şirkətləri</li>

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
                                                <h3 class="footer-location_title footer-title">Turizm Forumu</h3>
                                                <h4 class="date">20 APREL, 2019</h4>
                                                <address>H.Əliyev adına  Qəbələ Konqres Mərkəzi</address>
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

