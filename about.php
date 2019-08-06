

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
                  <link rel='stylesheet' href='css/media_screen/about.css'>
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
                                 <h1 class="title" style="color:#ffffff;"><?php echo $lang['about']['content_1']; ?></h1>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Main Content -->
                     <div id="Content">
                        <div class="content_wrapper clearfix">
                           <div class="sections_group">
                              <div class="entry-content">
                                 <!-- One full width row-->
                                 <div class="column one column_fancy_heading">
                                    <div class="section mcb-section mcb-section-13e36fc59 bg-cover" style="padding-top:0px;padding-bottom:0px;background-image:url(images/section-md.png);background-repeat:no-repeat;background-position:center bottom;">
                                       <div class="fancy_heading fancy_heading_arrows">
                                          <!-- One Third (1/3) Column -->
                                          <div class="column one-third column_column">
                                             <div class="column_attr "></div>
                                          </div>
                                          <!-- One Third (1/3) Column -->
                                          <div class="column one-third column_image; ">
                                             <div class="animate fadeInUp" data-anim-type="fadeInUp">
                                                <div class="icon_box icon_position_top no_border">
                                                   <a class="scroll" href="#faq">
                                                      <div class="image_wrapper"><img src="images/about_perfil.png" class="scale-with-grid">
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="inside">
                                             <p style="display: inline-block; color: #5b268d;  font-size: 22px; line-height: 34px; line-he_letter-spacing: 0.036em; font-weight: 500; margin: -43px 80px 50px !important;font-style: italic;" >
                                                <span ><?php echo $lang['about']['content_2']; ?></span>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <hr class="no_line" style="margin: 0 auto 5px;">
                                 <div class="section mcb-section dark bg-contain" style="padding-top:60px; padding-bottom:60px; background-color:#512a8a;">
                                    <div class="section_wrapper mcb-section-inner">
                                       <div class="fancy_heading fancy_heading_arrows">
                                          <!-- One Third (1/3) Column -->
                                          <div class="column one-third column_column">
                                             <div class="column_attr "></div>
                                          </div>
                                          <div class="inside">
                                             <?php echo $lang['about']['content_3']; ?>
                                          </div>
                                       </div>
                                       <div class="wrap mcb-wrap divider  valign-top clearfix">
                                          <div class="mcb-wrap-inner"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="section mcb-section mcb-section-13e36fc59 bg-cover" style="padding-top:20px;padding-bottom:90px;background-image:url(images/section-at.png);background-repeat:no-repeat;background-position:center bottom;">
                                    <div class="section_wrapper mcb-section-inner">
                                       <div class="wrap mcb-wrap one clearfix">
                                          <div class="wrap mcb-wrap mcb-wrap-f3ryvcdfj one valign-top clearfix">
                                             <div class="mcb-wrap-inner">
                                                <div class="column mcb-column mcb-item-0yw35vror one column_divider">
                                                   <hr class="no_line" style="margin: 0 auto 90px;">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="column_attr clearfix align_center">
                                             <?php echo $lang['about']['content_4']; ?>
                                             <hr class="no_line" style="margin: 0 auto 10px;">
                                          </div>
                                          <!-- 1 parte-->
                                          <div class="wrap mcb-wrap mcb-wrap-jrqjq5x41 one-second  valign-top move-up clearfix" style="margin-top:60px" data-mobile="no-up">
                                             <div class="mcb-wrap-inner">
                                                <div class="column mcb-column mcb-item-tnniyhmy8 one column_column">
                                                   <div class="column_attr clearfix align_center bg-cover" style="background-image:url('images/iconos-emociones-1.png');background-repeat:no-repeat;background-position:center;padding:80px 40px 95px;">
                                                   </div>
                                                </div>
                                                <div class="column mcb-column mcb-item-j3kyk57zv one column_column">
                                                   <div class="column_attr clearfix align_center" style="padding:0 10%;">
                                                      <?php echo $lang['about']['content_5']; ?>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- 2 parte-->
                                          <div class="wrap mcb-wrap mcb-wrap-ymioo8m52 one-second  valign-top move-up clearfix" style="margin-top:60px" data-mobile="no-up">
                                             <div class="mcb-wrap-inner">
                                                <div class="column mcb-column mcb-item-4imtx2pfa one column_column">
                                                   <div class="column_attr clearfix align_center bg-cover" style="background-image:url('images/iconos-emociones-2.png');background-repeat:no-repeat;background-position:center;padding:80px 40px 95px;">
                                                   </div>
                                                </div>
                                                <div class="column mcb-column mcb-item-j3kyk57zv one column_column">
                                                   <div class="column_attr clearfix align_center" style="padding:0 10%;">
                                                      <?php echo $lang['about']['content_6']; ?>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- 3 parte-->
                                          <div class="wrap mcb-wrap mcb-wrap-jrqjq5x41 one-second  valign-top move-up clearfix" style="margin-top:60px" data-mobile="no-up">
                                             <div class="mcb-wrap-inner">
                                                <div class="column mcb-column mcb-item-tnniyhmy8 one column_column">
                                                   <div class="column_attr clearfix align_center bg-cover" style="background-image:url('images/iconos-emociones-3.png');background-repeat:no-repeat;background-position:center;padding:80px 40px 95px;">
                                                   </div>
                                                </div>
                                                <div class="column mcb-column mcb-item-j3kyk57zv one column_column">
                                                   <div class="column_attr clearfix align_center" style="padding:0 10%;">
                                                      <?php echo $lang['about']['content_7']; ?>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- 4 parte-->
                                          <div class="wrap mcb-wrap mcb-wrap-ymioo8m52 one-second  valign-top move-up clearfix" style="margin-top:60px" data-mobile="no-up">
                                             <div class="mcb-wrap-inner">
                                                <div class="column mcb-column mcb-item-4imtx2pfa one column_column">
                                                   <div class="column_attr clearfix align_center bg-cover" style="background-image:url('images/iconos-emociones-4.png');background-repeat:no-repeat;background-position:center;padding:80px 40px 95px;">
                                                   </div>
                                                </div>
                                                <div class="column mcb-column mcb-item-j3kyk57zv one column_column">
                                                   <div class="column_attr clearfix align_center" style="padding:0 10%;">
                                                      <?php echo $lang['about']['content_8']; ?>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <hr class="no_line" style="margin: 0 auto 10px;">
                                 <div class="section mcb-section mcb-section-jlo4hi97l dark equal-height-wrap" style="padding-top:150px; padding-bottom:150px; background-color:#53a2bd">
                                    <div class="section-decoration top" style="background-image:url(images/bottom-decor-up.png);height:135px"></div>
                                    <div class="section_wrapper mcb-section-inner">
                                       <div class="wrap mcb-wrap mcb-wrap-iwcu2qu5v one-second valign-middle clearfix" style="height: 425px;">
                                          <div class="mcb-wrap-inner">
                                             <div class="column mcb-column mcb-item-0vl948hfw four-fifth column_column">
                                                <div class="column_attr clearfix">
                                                   <?php echo $lang['about']['content_9']; ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="wrap mcb-wrap mcb-wrap-bzgkrle49 one-second valign-middle clearfix" style="height: 800px;">
                                          <div class="mcb-wrap-inner">
                                             <div class="column mcb-column mcb-item-lp9c0thc7 one column_image">
                                                <div class="animate fadeInUp" data-anim-type="fadeInUp">
                                                   <div class="image_frame image_item no_link scale-with-grid no_border">
                                                      <div class="image_wrapper"><img class="scale-with-grid" src="images/about_perfil2.png">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="column_attr clearfix align_center">
                                       <h2 style="font-size: 46px;line-height: 58px;letter-spacing: 0.019em; font-weight: 600; style=padding-top:0px; padding-bottom:50px; padding-top: 40px;">
                                          <?php echo $lang['about']['content_10']; ?>
                                       </h2>
                                    </div>
                                    <div class="section mcb-section " style="padding-top:0px; padding-bottom:20px; ">
                                       <div class="section_wrapper mcb-section-inner">
                                          <div class="wrap mcb-wrap two-third clearfix">
                                             <!-- One Full Row-->
                                             <div class="column mcb-column one column_column column-margin-20px">
                                                <div class="column_attr">
                                                </div>
                                             </div>
                                             <!-- One Second (1/2) Column -->
                                             <div class="column mcb-column one-second column_column">
                                                <div class="column_attr" style=" padding:0 5% 0 0;">
                                                   <?php echo $lang['about']['content_11']; ?>
                                                </div>
                                             </div>
                                             <!-- One Second (1/2) Column -->
                                             <div class="column mcb-column one-second column_column">
                                                <div class="column_attr" style=" padding:0 5% 0 0;">
                                                   <?php echo $lang['about']['content_12']; ?>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- One Third (1/3) Column -->
                                          <div class="wrap mcb-wrap one-third clearfix">
                                             <!-- One Full Row-->
                                             <div class="column mcb-column one column_column column-margin-20px">
                                                <div class="column_attr">
                                                </div>
                                             </div>
                                             <!-- One Full Row-->
                                             <div class="column mcb-column one column_column">
                                                <div class="column_attr" style=" padding:0 5% 0 0;">
                                                   <?php echo $lang['about']['content_13']; ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="section-decoration bottom" style="background-image:url(images/bottom-decor-down.png);height:126px"></div>
                                 </div>
                                 <hr class="no_line" style="margin: 0 auto 80px;">
                                 <div class="items_group clearfix">
                                    <div class="column one column_fancy_heading">
                                       <div class="fancy_heading fancy_heading_arrows">
                                          <h2 class="title"><i class="icon-right-dir"></i><?php echo $lang['about']['content_14']; ?><i class="icon-left-dir"></i></h2>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Page devider -->
                                 <!-- One full width row-->
                                 <div class="column one column_divider">
                                    <hr class="no_line flv_style_5">
                                 </div>
                                 <div class="section flv_sections_6" id="start">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box">
                                        <!-- Animated area -->
                                        <div class="animate fadeInLeftLarge" data-anim-type="fadeInLeftLarge">
                                            <div class="icon_box icon_position_top has_border">
                                                <a class="scroll" href="#thematic-websites">
                                                    <div class="icon_wrapper">
                                                        <div class="icon">
                                                            <img src="images/datos-interesantes1.png" alt="Curabitur ipsum" class="scale-with-grid">
                                                        </div>
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <div class="desc" style="font-size: 18px;line-height: 30px;text-align: left !important;">
                                                            <?php echo $lang['about']['content_15']; ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box">
                                        <!-- Animated area -->
                                        <div class="animate zoomIn" data-anim-type="zoomIn">
                                            <div class="icon_box icon_position_top has_border">
                                                <a href="#">
                                                    <div class="icon_wrapper">
                                                        <div class="icon">
                                                            <img src="images/datos-interesantes2.png" alt="Curabitur ipsum" class="scale-with-grid">
                                                        </div>
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <div class="desc" style="font-size: 18px;line-height: 30px;text-align: left !important;">
                                                            <?php echo $lang['about']['content_16']; ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box">
                                        <!-- Animated area -->
                                        <div class="animate fadeInRightLarge" data-anim-type="fadeInRightLarge">
                                            <div class="icon_box icon_position_top no_border">
                                                <a href="http://support.BeantownThemes.com" target="_blank">
                                                    <div class="icon_wrapper">
                                                        <div class="icon">
                                                            <img src="images/datos-interesantes3.png" alt="Curabitur ipsum" class="scale-with-grid">
                                                        </div>
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <div class="desc" style="font-size: 18px;line-height: 30px;">
                                                            <?php echo $lang['about']['content_17']; ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                 <!-- One Third (1/3) Column -->
                                 <!--<div class="column one-third column_icon_box">
                                    <div class="icon_box icon_position_left has_border" style="padding-left: 130px;">
                                       <div class="image_wrapper"><img src="images/datos-interesantes1.png" alt="Curabitur ipsum" class="scale-with-grid">
                                       </div>
                                       <div class="desc_wrapper">
                                          <div class="desc" style="font-size: 18px;line-height: 30px;">
                                             <?php echo $lang['about']['content_15']; ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                                 <div class="column one-third column_icon_box">
                                    <div class="icon_box icon_position_left has_border" style="padding-left: 130px;">
                                       <div class="image_wrapper"><img src="images/datos-interesantes2.png" alt="Aliquam eratur" class="scale-with-grid">
                                       </div>
                                       <div class="desc_wrapper">
                                          <div class="desc" style="font-size: 16px;line-height: 29px;">
                                             <?php echo $lang['about']['content_16']; ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                                 <div class="column one-third column_icon_box">
                                    <div class="icon_box icon_position_left no_border" style="padding-left: 130px;">
                                       <div class="image_wrapper"><img src="images/datos-interesantes3.png" alt="Integer aliquam" class="scale-with-grid">
                                       </div>
                                       <div class="desc_wrapper">
                                          <div class="desc" style="font-size: 18px;line-height: 30px;">
                                             <?php echo $lang['about']['content_17']; ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>-->
                              <hr class="no_line" style="margin: 0 auto 20px;">
                                 <!-- Apertura Menu -->
                                 <?php include "testimonial.php"; ?>
                                 <!-- Cierre Menu -->
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

