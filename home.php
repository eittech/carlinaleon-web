

<?php
   // Cargamos el archivo de fijación de idioma
   include "lang.php";
   // Obtiene el nombre de la página actual
   include "check_url.php";
   // Cargamos archivo de configuraciones globales
   include "config.php";
   ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 ">
   <![endif]-->
   <!--[if IE 7]>
   <html class="no-js lt-ie10 lt-ie9 lt-ie8">
      <![endif]-->
      <!--[if IE 8]>
      <html class="no-js lt-ie10 lt-ie9">
         <![endif]-->
         <!--[if IE 9]>
         <html class="no-js lt-ie10">
            <![endif]-->
            <!--[if gt IE 8]><!-->
            <html class="no-js">
               <!--<![endif]-->
               <head>
                  <!-- Basic Page Needs -->
                  <meta charset="utf-8">
                  <title>Carlina Leon</title>
                  <meta name="description" content="">
                  <meta name="author" content="">
                  <!-- Mobile Specific Metas -->
                  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                  <!-- Favicons -->
                  <link rel="shortcut icon" href="images/favicon1.ico">
                  <!-- FONTS -->
                  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
                  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
                  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway:400,400italic,600,700,900'>
                  <!-- CSS -->
                  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                  <link rel='stylesheet' href='css/global.css'>
                  <link rel='stylesheet' href='css/structure-copywriter.css'>
                  <link rel='stylesheet' href='css/copywriter.css'>
                  <link rel='stylesheet' href='css/custom.css'>
                  <style>
                     #Top_bar #logo {
                     display: block;
                     height: 88px;
                     line-height: 65px;
                     padding: 14px 0px;
                     }
                  </style>
                  <style>
                     #carousel {
                     position: relative;
                     width: 100%;
                     margin: 0 auto;
                     }
                     #slides {
                     overflow: hidden;
                     position: relative;
                     width: 100%;
                     height: 250px;
                     }
                     #slides ul {
                     list-style: none;
                     width: 100%;
                     height: 250px;
                     margin: 0;
                     padding: 0;
                     position: relative;
                     }
                     #slides li {
                     width: 100%;
                     height: 250px;
                     float: left;
                     text-align: center;
                     position: relative;
                     font-family: lato, sans-serif;
                     }
                  </style>
                  <!-- Revolution Slider -->
                  <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">
               </head>
               <body class="home template-slider style-simple layout-full-width mobile-tb-left button-stroke no-content-padding header-classic minimalist-header sticky-header sticky-white ab-hide subheader-title-left menuo-right menuo-no-borders footer-sliding footer-copy-center">
                  <!-- Main Theme Wrapper -->
                  <div id="Wrapper">
                     <!-- Header Wrapper -->
                     <div id="Header_wrapper">
                        <!-- Header -->
                        <header id="Header">
                           <!-- Header -  Logo and Menu area -->
                           <div id="Top_bar">
                              <div class="container">
                                 <div class="column one">
                                    <div class="top_bar_left clearfix">
                                       <!-- Logo-->
                                       <div class="logo">
                                          <a id="logo" href="index.php" title="CarlinaLeon"> <img class="scale-with-grid" src="images/logo_menu.png" alt="CarlinaLeon" />
                                          </a>
                                       </div>
                                       <!-- Apertura Menu -->
                                       <?php include "menu.php"; ?>
                                       <!-- Cierre Menu -->
                                       <!-- Secondary menu area - only for certain pages -->
                                       <div class="secondary_menu_wrapper"></div>
                                       <!-- Banner area - only for certain pages-->
                                       <div class="banner_wrapper"></div>
                                       <!-- Header Searchform area -->
                                       <div class="search_wrapper">
                                          <form method="get" id="searchform" action="#">
                                             <input type="text" class="field" name="s" id="s" placeholder="Enter your search" />
                                             <input type="submit" class="submit flv_disp_none" value="" />
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Revolution slider area-->
                           <div class="section mcb-section mcb-section-1d2bf82id" style="padding-top:220px; padding-bottom:120px; background-image:url(images/home-slider.png); background-repeat:no-repeat; background-position:center bottom;">
                              <div class="section_wrapper mcb-section-inner">
                                 <div class="wrap mcb-wrap mcb-wrap-0cejiz4z0 one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                       <div class="column mcb-column mcb-item-gb8yux6pn one-second column_column">
                                          <div class="column_attr clearfix" style="">
                                             <h2 style="color: #e7f4ff; line-height: 40px;font-size: 31px;"><?php echo $lang['home']['content_1']; ?></h2>
                                          </div>
                                          <div class="column_attr clearfix" style="">
                                             <h2 style="color: #e7f4ff; line-height: 30px;font-size: 19px;font-weight: 500;font-style: italic;"><?php echo $lang['home']['content_2']; ?></h2>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </header>
                     </div>
                     <!-- Main Content -->
                     <div id="Content">
                        <div class="content_wrapper clearfix">
                           <div class="sections_group">
                              <div class="entry-content">
                                 <div class="section mcb-section no-margin section-border-bottom " style="padding-top:0px; padding-bottom:0px; background-color:#7530B6">
                                    <div class="section_wrapper mcb-section-inner">
                                       <div class="wrap mcb-wrap one clearfix">
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_hover_color ">
                                             <div class="hover_color" style="background:#5b258f;">
                                                <div class="hover_color_bg" style="background:#7530B6;">
                                                   <a href="about.php">
                                                      <div class="hover_color_wrapper">
                                                         <div style="text-align: right; font-size: 20px; color: #ffffff; font-weight: 600;">
                                                            <i style="margin-right: 7px;" class="icon icon-right-circled"></i><?php echo $lang['home']['content_3']; ?>
                                                         </div>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="section mcb-section " style="padding-top:0px; padding-bottom:0px; background-color:#f0f1f2">
                                    <div class="section mcb-section sections_style_3 padding-top: 60px; padding-bottom: 0px;">
                                       <div class="section_wrapper mcb-section-inner">
                                          <div class="wrap mcb-wrap one clearfix">
                                             <!-- One Full Row-->
                                             <div class="column mcb-column one column_column column-margin-20px">
                                                <!-- Animación inicio-->                
                                                <div class="section mcb-section mcb-section-k2ltyjcfv equal-height-wrap" style="padding-top:0px; padding-bottom:0px; background-color:">
                                                   <div class="section_wrapper mcb-section-inner">
                                                      <div class="wrap mcb-wrap mcb-wrap-39msmiso4 one-second valign-middle clearfix" style="padding: 0px 7% 0px 0px; height: 651px; background-image:url(images/section-md.png);background-repeat:no-repeat;background-position:center bottom;">
                                                         <div class="mcb-wrap-inner">
                                                            <div class="column mcb-column mcb-item-uotdverad one column_column ">
                                                               <div class="column_attr clearfix align_right">
                                                                  <h3 style="display: inline-block; font-size: 40px; line-height: 45px; font-weight: 600; margin-right: 30px;letter-spacing: 2px;"><?php echo $lang['home']['content_4']; ?></h3>
                                                                  <hr class="no_line" style="margin: 0 auto 0px;">
                                                                  <div style="height: 1px; background: #484a7d;"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="wrap mcb-wrap mcb-wrap-6b1iu7pgo one-second valign-middle clearfix" style="height: 651px; padding-top: 0px;">
                                                         <div class="mcb-wrap-inner">
                                                            <div class="column mcb-column mcb-item-lam3v9tjy one column_image">
                                                               <div class="animate zoomIn" data-anim-type="zoomIn">
                                                                  <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                                     <div class="image_wrapper"><img class="scale-with-grid" src="images/home-chat1.png">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="section mcb-section mcb-section-pqbrkbu49 equal-height-wrap" style="padding-top:0px; padding-bottom:0px; background-color:">
                                                   <div class="section_wrapper mcb-section-inner">
                                                      <div class="wrap mcb-wrap mcb-wrap-14smfs44a one-second valign-middle clearfix" style="height: 578px; ">
                                                         <div class="mcb-wrap-inner">
                                                            <div class="column mcb-column mcb-item-opqw5qzjt one column_image">
                                                               <div class="animate zoomIn" data-anim-type="zoomIn">
                                                                  <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                                     <div class="image_wrapper"><img class="scale-with-grid" src="images/home-chat2.png">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="wrap mcb-wrap mcb-wrap-4tsfulhuh one-second valign-middle clearfix" style="padding: 0px 0px 0px 7%; height: 578px; background-image:url(images/section-md.png);background-repeat:no-repeat;background-position:center bottom;">
                                                         <div class="mcb-wrap-inner">
                                                            <div class="column mcb-column mcb-item-7h50ch4pv one column_column">
                                                               <div class="column_attr clearfix">
                                                                  <h3 style="display: inline-block; font-size: 37px; line-height: 45px; font-weight: 600; margin-right: 30px;letter-spacing: 1px;"><?php echo $lang['home']['content_5']; ?></h3>
                                                                  <hr class="no_line" style="margin: 0 auto 0px;">
                                                                  <div style="height: 1px; background: #484a7d;"></div>
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
                                 <div class="section mcb-section mcb-section-jlo4hi97l dark equal-height-wrap" style="padding-top:0px; padding-bottom:110px;">
                                    <div class="section-decoration top" style="background-image:url(images/separador-linea.png);height:135px">
                                    </div>
                                 </div>
                                 <div class="section mcb-section" style="padding-top:95px; padding-bottom:60px; background-image:url(images/section-md.png); background-repeat:no-repeat; background-position:right top">
                                    <div class="wrap mcb-wrap mcb-wrap-f3ryvcdfj one valign-top clearfix">
                                       <div class="mcb-wrap-inner">
                                          <div class="column mcb-column mcb-item-0yw35vror one column_divider">
                                             <hr class="no_line" style="margin: -33 auto 90px;">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="column_attr clearfix align_center">
                                       <h2 style="font-size: 48px;line-height: 80px;letter-spacing: 0.123em;font-style: italic; ">
                                          <?php echo $lang['home']['content_6']; ?>
                                       </h2>
                                       <hr class="no_line" style="margin: -200 auto 10px;">
                                    </div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-sm">
                                             <div class="animate fadeInLeft" data-anim-type="fadeInLeft">
                                                <div class="icon_box icon_position_top no_border">
                                                   <div class="image_wrapper"><img src="images/iconos-emociones-1.png" class="scale-with-grid">
                                                   </div>
                                                   <div class="desc_wrapper">
                                                      <p class="title"></p>
                                                      <div class="desc">
                                                         <?php echo $lang['home']['content_7']; ?>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm">
                                             <div class="animate fadeInRight" data-anim-type="fadeInRight">
                                                <div class="icon_box icon_position_top no_border">
                                                   <div class="image_wrapper"><img src="images/iconos-emociones-2.png" class="scale-with-grid">
                                                   </div>
                                                   <div class="desc_wrapper">
                                                      <p class="title"></p>
                                                      <div class="desc">
                                                         <?php echo $lang['home']['content_8']; ?>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm">
                                             <div class="animate fadeInRight" data-anim-type="fadeInRight">
                                                <div class="icon_box icon_position_top no_border">
                                                   <div class="image_wrapper"><img src="images/iconos-emociones-3.png" class="scale-with-grid">
                                                   </div>
                                                   <div class="desc_wrapper">
                                                      <p class="title"></p>
                                                      <div class="desc">
                                                         <?php echo $lang['home']['content_9']; ?>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="container">
                                             <div class="row">
                                                <div class="col-sm">
                                                   <div class="animate fadeInLeft" data-anim-type="fadeInLeft">
                                                      <div class="icon_box icon_position_top no_border">
                                                         <div class="image_wrapper"><img src="images/iconos-emociones-4.png" class="scale-with-grid">
                                                         </div>
                                                         <div class="desc_wrapper">
                                                            <p class="title"></p>
                                                            <div class="desc">
                                                               <?php echo $lang['home']['content_10']; ?>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm">
                                                   <div class="animate fadeInLeft" data-anim-type="fadeInLeft">
                                                      <div class="icon_box icon_position_top no_border">
                                                         <div class="image_wrapper"><img src="images/iconos-emociones-5.png" class="scale-with-grid">
                                                         </div>
                                                         <div class="desc_wrapper">
                                                            <p class="title"></p>
                                                            <div class="desc">
                                                               <?php echo $lang['home']['content_11']; ?>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm">
                                                   <div class="animate fadeInRight" data-anim-type="fadeInRight">
                                                      <div class="icon_box icon_position_top no_border">
                                                         <div class="image_wrapper"><img src="images/iconos-emociones-6.png" class="scale-with-grid">
                                                         </div>
                                                         <div class="desc_wrapper">
                                                            <p class="title"></p>
                                                            <div class="desc">
                                                               <?php echo $lang['home']['content_12']; ?>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="container">
                                                   <div class="row">
                                                      <div class="col-sm">
                                                         <div class="animate fadeInLeft" data-anim-type="fadeInLeft">
                                                            <div class="icon_box icon_position_top no_border">
                                                               <div class="image_wrapper"><img src="images/iconos-emociones-7.png" class="scale-with-grid">
                                                               </div>
                                                               <div class="desc_wrapper">
                                                                  <p class="title"></p>
                                                                  <div class="desc">
                                                                     <?php echo $lang['home']['content_13']; ?>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm">
                                                         <div class="animate fadeInRight" data-anim-type="fadeInRight">
                                                            <div class="icon_box icon_position_top no_border">
                                                               <div class="image_wrapper"><img src="images/iconos-emociones-8.png" class="scale-with-grid">
                                                               </div>
                                                               <div class="desc_wrapper">
                                                                  <p class="title"></p>
                                                                  <div class="desc">
                                                                     <?php echo $lang['home']['content_14']; ?>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm">
                                                         <div class="animate fadeInRight" data-anim-type="fadeInRight">
                                                            <div class="icon_box icon_position_top no_border">
                                                               <div class="image_wrapper"><img src="images/iconos-emociones-6.png" class="scale-with-grid">
                                                               </div>
                                                               <div class="desc_wrapper">
                                                                  <p class="title"></p>
                                                                  <div class="desc">
                                                                     <?php echo $lang['home']['content_15']; ?>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="container">
                                                         <div class="row">
                                                            <div class="col-sm">
                                                               <div class="animate fadeInUp" data-anim-type="fadeInUp">
                                                                  <div class="icon_box icon_position_top no_border">
                                                                     <div class="image_wrapper"><img src="images/iconos-emociones-9.png" class="scale-with-grid">
                                                                     </div>
                                                                     <div class="desc_wrapper">
                                                                        <p class="title"></p>
                                                                        <div class="desc">
                                                                           <?php echo $lang['home']['content_16']; ?>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-sm">
                                                               <div class="animate fadeInUp" data-anim-type="fadeInUp">
                                                                  <div class="icon_box icon_position_top no_border">
                                                                     <div class="image_wrapper"><img src="images/iconos-emociones-10.png" class="scale-with-grid">
                                                                     </div>
                                                                     <div class="desc_wrapper">
                                                                        <p class="title"></p>
                                                                        <div class="desc">
                                                                           <?php echo $lang['home']['content_17']; ?>
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
                                 </div>
                                 <hr class="no_line" style="margin: 0 auto 10px;">
                                 <div id="Content">
                                    <div class="content_wrapper clearfix">
                                       <div class="sections_group">
                                          <div class="entry-content">
                                             <div class="section mcb-section dark bg-contain" style="padding-top:90px; padding-bottom:100px; background-color:#5b268d;">
                                                <div class="container">
                                                   <div class="row">
                                                      <div class="col-sm">
                                                         <div class="section_wrapper">
                                                            <div class="fancy_heading fancy_heading_arrows">
                                                               <h2 class="title font-size: 48px; line-height: 50px"><i class="revicon-right-open-1"></i><?php echo $lang['home']['content_18_1']; ?>...<i class="revicon-left-open-1"></i></h2>
                                                               <div class="inside">
                                                                  <?php echo $lang['home']['content_18_2']; ?>
                                                               </div>
                                                            </div>
                                                            <div class="wrap mcb-wrap divider  valign-top clearfix">
                                                               <div class="mcb-wrap-inner"></div>
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
                                 <hr class="no_line" style="margin: 0 auto 80px;">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-sm">
                                          <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                             <div class="image_wrapper"><img class="scale-with-grid" src="images/iconos-doble-1.png" alt="home_herbal_product1" width="600" height="250"></div>
                                          </div>
                                          <?php echo $lang['home']['content_19']; ?>
                                          <a href="suscribete-1.php"  target="_blank" rel="nofollow">   
                                          <button data-hover="Suscribete" class="mfn-link mfn-link-5" style="margin: 10% 33% !important;">
                                          Suscribete
                                          </button>
                                          </a>
                                       </div>
                                       <div class="col-sm">
                                          <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                             <div class="image_wrapper"><img class="scale-with-grid" src="images/iconos-doble-2.png" alt="home_herbal_product1" width="600" height="250"></div>
                                          </div>
                                          <?php echo $lang['home']['content_20']; ?>
                                          <a href="suscribete-1.php"  target="_blank" rel="nofollow">   
                                          <button data-hover="Suscribete" class="mfn-link mfn-link-5" style="margin: 10% 33% !important;">
                                          Suscribete
                                          </button>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="section mcb-section " style="padding-top:40px; padding-bottom:0px; background-color:#f0f1f2">
                                    <div class="section_wrapper mcb-section-inner">
                                       <div class="wrap mcb-wrap one clearfix">
                                          <div class="section mcb-section" style="padding-top:30px; padding-bottom:50px; background-repeat:no-repeat;">
                                             <div class="column mcb-column one column_column">
                                                <div class="column_attr align_center">
                                                   <h2><?php echo $lang['home']['content_21']; ?></h2>
                                                   <hr class="hr_narrow hr_color">
                                                </div>
                                             </div>
                                          </div>
                                          <div id="carousel">
                                             <div class="btn-bar">
                                                <div id="buttons"><a id="prev" href="#"></a><a id="next" href="#"></a></div>
                                             </div>
                                             <div id="slides">
                                                <ul>
                                                   <li class="slide">
                                                      <p class="carousel-caption">
                                                      <div class="idea_box">
                                                         <div class="icon">
                                                            <i class="icon-quote"></i>
                                                         </div>
                                                         <div class="desc" style="font-size: 18px;line-height: 25px;">
                                                            <?php echo $lang['home']['content_22']; ?>
                                                         </div>
                                                         <br/>
                                                         <span class="date"><span style="font-size: 24px;font-weight: 600; color: #5b258f;">Margaret Della</span></span>
                                                         <br>
                                                         <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;"> Directora ejecutiva - Kingsbridge Heights Community Center.</span>
                                                         </p>
                                                      </div>
                                                   </li>
                                                   <li class="slide">
                                                      <p class="carousel-caption">
                                                      <div class="idea_box">
                                                         <div class="icon">
                                                            <i class="icon-quote"></i>
                                                         </div>
                                                         <div class="desc" style="font-size: 17.5px;line-height: 25px;">
                                                            <?php echo $lang['home']['content_23']; ?>
                                                         </div>
                                                         <br/>
                                                         <span class="date"><span style="font-size: 24px;font-weight: 600; color: #5b258f;">Karina Aybar</span></span>
                                                         <br>
                                                         <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;"> <?php echo $lang['home']['content_24']; ?></span>
                                                         </p>
                                                      </div>
                                                   </li>
                                                   <li class="slide">
                                                      <p class="carousel-caption">
                                                      <div class="idea_box">
                                                         <div class="icon">
                                                            <i class="icon-quote"></i>
                                                         </div>
                                                         <div class="desc" style="font-size: 18px;line-height: 25px;">
                                                            <?php echo $lang['home']['content_25']; ?>
                                                         </div>
                                                         <br/>
                                                         <span class="date"><span style="font-size: 24px;font-weight: 600; color: #5b258f;">Ireen Ninonuevo</span></span>
                                                         <br>
                                                         <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;">  <?php echo $lang['home']['content_26']; ?></span>
                                                         </p>
                                                      </div>
                                                   </li>
                                                   <li class="slide">
                                                      <p class="carousel-caption">
                                                      <div class="idea_box">
                                                         <div class="icon">
                                                            <i class="icon-quote"></i>
                                                         </div>
                                                         <div class="desc" style="font-size: 18px;line-height: 25px;">
                                                            <?php echo $lang['home']['content_27']; ?>
                                                         </div>
                                                         <br/>
                                                         <span class="date"><span style="font-size: 24px;font-weight: 600;color: #5b258f;"> Karina Bernabe</span></span>
                                                         <br>
                                                         <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;">  <?php echo $lang['home']['content_28']; ?></span>
                                                         </p>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <hr class="no_line" style="margin: 0 auto 80px;">
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column column-margin-20px">
                                             <div class="column_attr">
                                                <?php echo $lang['home']['content_29']; ?>
                                             </div>
                                          </div>
                                          <div class="column mcb-column one column_column padding-bottom: 60px;s">
                                             <div class="column_attr">
                                                <div style="height: 1px; background: #484a7d;"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="section the_content no_content">
                                    <div class="section_wrapper">
                                       <div class="the_content_wrapper"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Apertura Footer -->
                     <?php include "footer.php"; ?>
                     <!-- Cierre Footer -->
                  </div>
                  <!-- JS -->
                  <script src="js/jquery-2.1.4.min.js"></script>
                  <script src="js/mfn.menu.js"></script>
                  <script src="js/jquery.plugins.js"></script>
                  <script src="js/jquery.jplayer.min.js"></script>
                  <script src="js/animations/animations.js"></script>
                  <script src="js/scripts.js"></script>
                  <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
                  <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
                  <script src="plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
                  <script src="plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
                  <script src="plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
                  <script src="plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
                  <script src="plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
                  <script src="plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
                  <script src="plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
                  <script src="plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
                  <script>
                     function revslider_showDoubleJqueryError(sliderID) {
                         var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
                         errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
                         errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option: <strong><b>Put JS Includes To Body</b></strong> option to true.";
                         errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
                         errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>"
                         jQuery(sliderID).show().html(errorMessage);
                     }
                     
                     var tpj = jQuery;
                     var revapi1;
                     tpj(document).ready(function() {
                         if (tpj("#rev_slider_1_2").revolution == undefined) {
                             revslider_showDoubleJqueryError("#rev_slider_1_2");
                         } else {
                             revapi1 = tpj("#rev_slider_1_2").show().revolution({
                                 sliderType: "hero",
                                 sliderLayout: "fullwidth",
                                 dottedOverlay: "none",
                                 delay: 9000,
                                 navigation: {},
                                 gridwidth: 1240,
                                 gridheight: 650,
                                 lazyType: "smart",
                                 parallax: {
                                     type: "mouse",
                                     origo: "slidercenter",
                                     speed: 2000,
                                     levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                                 },
                                 shadow: 0,
                                 spinner: "off",
                                 autoHeight: "off",
                                 disableProgressBar: "on",
                                 hideThumbsOnMobile: "on",
                                 hideSliderAtLimit: 0,
                                 hideCaptionAtLimit: 0,
                                 hideAllCaptionAtLilmit: 0,
                                 debugMode: false,
                                 fallbacks: {
                                     simplifyAll: "off",
                                     disableFocusListener: false,
                                 }
                             });
                         }
                     });
                     /*]]>*/
                  </script>
                  <script>
                     jQuery(window).load(function() {
                         var retina = window.devicePixelRatio > 1 ? true : false;
                         if (retina) {
                             var retinaEl = jQuery("#logo img.logo-main");
                             var retinaLogoW = retinaEl.width();
                             var retinaLogoH = retinaEl.height();
                             retinaEl.attr("src", "content/copywriter/images/retina-copywriter1.png").width(retinaLogoW).height(retinaLogoH);
                             var stickyEl = jQuery("#logo img.logo-sticky");
                             var stickyLogoW = stickyEl.width();
                             var stickyLogoH = stickyEl.height();
                             stickyEl.attr("src", "content/copywriter/images/retina-copywriter1.png").width(stickyLogoW).height(stickyLogoH);
                             var mobileEl = jQuery("#logo img.logo-mobile");
                             var mobileLogoW = mobileEl.width();
                             var mobileLogoH = mobileEl.height();
                             mobileEl.attr("src", "content/copywriter/images/retina-copywriter1.png").width(mobileLogoW).height(mobileLogoH);
                         }
                     });
                  </script>
                  <script>
                     $(document).ready(function () {
                         //rotation speed and timer
                         var speed = 9000;
                         
                         var run = setInterval(rotate, speed);
                         var slides = $('.slide');
                         var container = $('#slides ul');
                         var elm = container.find(':first-child').prop("tagName");
                         var item_width = container.width();
                         var previous = 'prev'; //id of previous button
                         var next = 'next'; //id of next button
                         slides.width(item_width); //set the slides to the correct pixel width
                         container.parent().width(item_width);
                         container.width(slides.length * item_width); //set the slides container to the correct total width
                         container.find(elm + ':first').before(container.find(elm + ':last'));
                         resetSlides();
                         
                         
                         //if user clicked on prev button
                         
                         $('#buttons a').click(function (e) {
                             //slide the item
                             
                             if (container.is(':animated')) {
                                 return false;
                             }
                             if (e.target.id == previous) {
                                 container.stop().animate({
                                     'left': 0
                                 }, 8000, function () {
                                     container.find(elm + ':first').before(container.find(elm + ':last'));
                                     resetSlides();
                                 });
                             }
                             
                             if (e.target.id == next) {
                                 container.stop().animate({
                                     'left': item_width * -2
                                 }, 1500, function () {
                                     container.find(elm + ':last').after(container.find(elm + ':first'));
                                     resetSlides();
                                 });
                             }
                             
                             //cancel the link behavior            
                             return false;
                             
                         });
                         
                         //if mouse hover, pause the auto rotation, otherwise rotate it    
                         container.parent().mouseenter(function () {
                             clearInterval(run);
                         }).mouseleave(function () {
                             run = setInterval(rotate, speed);
                         });
                         
                         
                         function resetSlides() {
                             //and adjust the container so current is in the frame
                             container.css({
                                 'left': -1 * item_width
                             });
                         }
                         
                     });
                     //a simple function to click next link
                     //a timer will call this function, and the rotation will begin
                     
                     function rotate() {
                         $('#next').click();
                     }
                  </script>
               </body>
            </html>

