

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
                  <link rel='stylesheet' href='css/global.css'>
                  <link rel='stylesheet' href='css/structure-copywriter.css'>
                  <link rel='stylesheet' href='css/copywriter.css'>
                  <link rel='stylesheet' href='css/custom.css'>
                  <link rel='stylesheet' href='css/media_screen/contact.css'>
               </head>
               <body class="style-simple layout-full-width mobile-tb-left button-stroke no-content-padding header-classic minimalist-header sticky-header sticky-white ab-hide subheader-title-left menuo-right menuo-no-borders footer-sliding footer-copy-center">
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
                                       <!-- Header Searchform area-->
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
                        </header>
                        <!--Subheader area - only for certain pages -->
                        <div id="Subheader" style="padding:90px 0 70px;">
                           <div class="container">
                              <div class="column one">
                                 <h1 class="title" style="color:#ffffff;"><?php echo $lang['contact']['content_1']; ?></h1>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Main Content -->
                     <div id="Content">
                        <div class="content_wrapper clearfix">
                           <div class="sections_group">
                              <div class="entry-content">
                                 <div class="section mcb-section sections_style_3">
                                    <div class="section_wrapper mcb-section-inner">
                                       <div class="wrap mcb-wrap one clearfix">
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column column-margin-20px">
                                             <div class="column_attr">
                                                <h2 style="display: inline-block; font-size: 49px; line-height: 55px; font-weight: 600; margin-right: 15px;"><?php echo $lang['contact']['content_2']; ?></h2>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="wrap mcb-wrap divider clearfix"></div>
                                       <!-- One Second (1/2) Column -->
                                       <div class="wrap mcb-wrap one-second clearfix">
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column">
                                             <div class="column_attr">
                                                <div style="height: 2px; background: #484a7d;"></div>
                                             </div>
                                          </div>
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column">
                                             <div class="column_attr">
                                                <p style="font-size: 20px; line-height: 33px; font-weight: 500;">
                                                   <?php echo $lang['contact']['content_3']; ?>
                                                   <br>
                                                   <a target="_blank" rel="nofollow" href="https://itherapy.com/counselor/carlina-d-leon/">https://itherapy.com/counselor/carlina-d-leon</a>
                                                </p>
                                                <br>
                                                <h4 style="font-weight: 500;font-size: 22px;"><?php echo $lang['contact']['content_4']; ?>: recoveryjourney@itherapymail.com </h4>
                                                <h4 style="font-weight: 500;font-size: 22px;"><?php echo $lang['contact']['content_4']; ?>: info@carlinaleon.com </h4>
                                                <h4 style="font-weight: 500;font-size: 22px;"><?php echo $lang['contact']['content_5']; ?>: (212) 683-7327 </h4>
                                                <h4 style="font-weight: 500;font-size: 22px;"><?php echo $lang['contact']['content_6']; ?>: (212) 683-7327  </h4>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- One Second (1/2) Column -->
                                       <div class="wrap mcb-wrap one-second clearfix">
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column">
                                             <div class="column_attr">
                                                <div style="height: 1px; background: #484a7d;"></div>
                                             </div>
                                          </div>
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column">
                                             <div class="column_attr">
                                                <h3><?php echo $lang['contact']['content_7']; ?></h3>
                                                <hr class="no_line hrmargin_b_30" />
                                                <div role="form" class="wpcf7" id="wpcf7-f2314-p2294-o1" lang="en-US" dir="ltr">
                                                   <div class="screen-reader-response"></div>
                                                   <div id="contactWrapper">
                                                      <form id="contactform">
                                                         <!-- One Second (1/2) Column -->
                                                         <div class="column one-second">
                                                            <input placeholder="<?php echo $lang['contact']['content_8']; ?>" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                         </div>
                                                         <!-- One Second (1/2) Column -->
                                                         <div class="column one-second">
                                                            <input placeholder="<?php echo $lang['contact']['content_9']; ?>" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                         </div>
                                                         <div class="column one">
                                                            <input placeholder="<?php echo $lang['contact']['content_10']; ?>" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                         </div>
                                                         <div class="column one">
                                                            <textarea placeholder="<?php echo $lang['contact']['content_11']; ?>" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                         </div>
                                                         <div class="column one">
                                                            <input type="button" value="<?php echo $lang['contact']['content_12']; ?>" id="submit" onClick="return check_values();">
                                                         </div>
                                                      </form>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="section mcb-section " style="padding-top:0px; padding-bottom:20px; ">
                                    <div class="section_wrapper mcb-section-inner">
                                       <div class="wrap mcb-wrap one clearfix">
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column column-margin-20px">
                                             <div class="column_attr">
                                                <h2 style="display: inline-block; font-size: 49px; line-height: 55px; font-weight: 600; margin-right: 15px;"><?php echo $lang['contact']['content_13']; ?></h2>
                                                <h4 style="display: inline-block;"><?php echo $lang['contact']['content_14']; ?></h4>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="wrap mcb-wrap divider clearfix"></div>
                                       <div class="wrap mcb-wrap three-fifth clearfix">
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column">
                                             <div class="column_attr">
                                                <div style="height: 2px; background: #484a7d;"></div>
                                             </div>
                                          </div>
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_map ">
                                             <!-- Google map area -->
                                             <div class="google-map-wrapper no_border">
                                                <!--<div class="google-map" id="google-map-area-5638c5a0b0187" style="width:100%; height:450px;">-->
                                                <div style="width:100%;">
                                                   <!--&nbsp;-->
                                                   <img class="scale-with-grid" src="images/maps.jpg" style="height: 450px !important;width: 717.35px !important;" alt="CarlinaLeon" />
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="wrap mcb-wrap two-fifth clearfix">
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column">
                                             <div class="column_attr">
                                                <div style="height: 1px; background: #484a7d;"></div>
                                             </div>
                                          </div>
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column">
                                             <div class="column_attr" style=" padding:0 5%;">
                                                <h3><?php echo $lang['contact']['content_15']; ?>
                                                </h3>
                                                <p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 22px; line-height: 34px; line-he_letter-spacing: 0.036em; font-weight: 500;">
                                                   <?php echo $lang['contact']['content_16']; ?>
                                                </p>
                                                <p>&nbsp;</p>
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
                  <!--<script src="http://maps.google.com/maps/api/js?sensor=false&ver=5.9"></script> API anteriormente usada -->
                  <script src="js/email.js"></script>
                  <script async defer
                     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwp9dDgxhTasxOm_7BBfTtKmPrpK0xTic&callback=initMap"></script>
                  <!--<script>
                     function initMap() {
                       var uluru = {lat: 40.7358938, lng: -73.9962813};
                       var map = new google.maps.Map(document.getElementById('google-map-area-5638c5a0b0187'), {
                         zoom: 14,
                         center: uluru
                       });
                       var marker = new google.maps.Marker({
                         position: uluru,
                         map: map
                       });
                     }
                  </script>-->
                  <script>
                     jQuery(window).load(function() {
                         var retina = window.devicePixelRatio > 1 ? true : false;
                         if (retina) {
                             var retinaEl = jQuery("#logo img.logo-main");
                             var retinaLogoW = retinaEl.width();
                             var retinaLogoH = retinaEl.height();
                             retinaEl.attr("src", "images/retina-copywriter1.png").width(retinaLogoW).height(retinaLogoH);
                             var stickyEl = jQuery("#logo img.logo-sticky");
                             var stickyLogoW = stickyEl.width();
                             var stickyLogoH = stickyEl.height();
                             stickyEl.attr("src", "images/retina-copywriter1.png").width(stickyLogoW).height(stickyLogoH);
                             var mobileEl = jQuery("#logo img.logo-mobile");
                             var mobileLogoW = mobileEl.width();
                             var mobileLogoH = mobileEl.height();
                             mobileEl.attr("src", "images/retina-copywriter1.png").width(mobileLogoW).height(mobileLogoH);
                         }
                     });
                  </script>
               </body>
            </html>

