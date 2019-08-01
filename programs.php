

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
                  <link rel='stylesheet' href='css/media_screen/programs.css'>
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
                                 <h1 class="title" style="color:#ffffff;"><?php echo $lang['programs']['content_1']; ?></h1>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Main Content -->
                     <div id="Content">
                        <div class="content_wrapper clearfix">
                           <div class="sections_group">




















                           





















                              <div class="entry-content">
                                 <div class="section mcb-section " style="padding-top:80px; padding-bottom:10px; background-color:#f0f1f2">
                                 <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box">
                                        <!-- Animated area -->
                                        <div>
                                            <div class="icon_box icon_position_top has_border">
                                                <a class="scroll" href="#thematic-websites">
                                                    <div class="icon_wrapper">
                                                        <div class="icon">
                                                            <i class="icon-lightbulb-line"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                      <div class="column_attr " style="margin-top: -120px !important;">
                                                         <?php echo $lang['programs']['content_2']; ?>
                                                      </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box">
                                        <!-- Animated area -->
                                        <div>
                                            <div class="icon_box icon_position_top has_border">
                                                <a href="#">
                                                    <div class="icon_wrapper">
                                                        <div class="icon">
                                                            <i class="icon-beaker-line"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                      <div class="column_attr " style="margin-top: -120px !important;">
                                                            <?php echo $lang['programs']['content_3']; ?>
                                                      </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box">
                                        <!-- Animated area -->
                                        <div>
                                            <div class="icon_box icon_position_top no_border">
                                                <a href="http://support.BeantownThemes.com" target="_blank">
                                                    <div class="icon_wrapper">
                                                        <div class="icon">
                                                            <i class="icon-comment-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="column_attr " style="margin-top: -120px !important;">
                                                            <?php echo $lang['programs']['content_4']; ?>
                                                      </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                 </div>
                                 <div class="section mcb-section mcb-section-jlo4hi97l dark equal-height-wrap" style="padding-top:0px; padding-bottom:80px;">
                                    <div class="section-decoration top" style="background-image:url(images/separador-linea.png);height:135px">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr class="no_line hrmargin_b_30" />
                        <hr class="no_line hrmargin_b_30" />
                        <hr class="no_line hrmargin_b_30" />
                        <div class="section_wrapper mcb-section-inner">
                           <div class="section mcb-section " style="padding-top:0px; padding-bottom:20px; ">
                              <div class="section_wrapper mcb-section-inner">
                                 <div class="wrap mcb-wrap mcb-wrap-e655bh0wn one-third valign-top clearfix" style="padding:0 1%">
                                    <div class="mcb-wrap-inner">
                                       <div class="column mcb-column mcb-item-dc5qvgmdl one column_column">
                                          <div class="column_attr clearfix align_center" style=" background-color:rgba(255,255,255,0.6); padding:50px 50px 35px; border-radius: 8px;">
                                             <?php echo $lang['programs']['content_6']; ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wrap mcb-wrap mcb-wrap-tfjf9p4ux one-third valign-top clearfix" style="padding:0 1%">
                                    <div class="mcb-wrap-inner">
                                       <div class="column mcb-column mcb-item-m83lbkvew one column_column">
                                          <div class="column_attr clearfix align_center" style=" background-color:#fff; padding:50px 50px 35px; border-radius: 8px;">
                                             <?php echo $lang['programs']['content_7']; ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wrap mcb-wrap mcb-wrap-hsolinufz one-third valign-top clearfix" style="padding:0 1%">
                                    <div class="mcb-wrap-inner">
                                       <div class="column mcb-column mcb-item-dl9h7hae6 one column_column">
                                          <div class="column_attr clearfix align_center" style=" background-color:rgba(255,255,255,0.6); padding:50px 50px 35px; border-radius: 8px;">
                                             <?php echo $lang['programs']['content_8']; ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div style="height: 2px; background: #484a7d;"></div>
                              <hr class="no_line hrmargin_b_30" />
                              <hr class="no_line hrmargin_b_30" />
                              <hr class="no_line hrmargin_b_30" />
                              <div class="wrap mcb-wrap one clearfix">
                                 <div class="wrap mcb-wrap one clearfix">
                                    <!-- One Full Row-->
                                    <div class="column mcb-column one column_column">
                                       <div class="column_attr"></div>
                                    </div>
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_column">
                                       <div class="icon_box icon_position_left no_border">
                                          <div class="icon_wrapper">
                                             <div class="icon">
                                                <i class="icon-comment-empty-fa"></i>
                                             </div>
                                          </div>
                                          <div class="column_attr">
                                             <li class="big" style="color: #5b268d">
                                                <span style="font-size: 20px"; style="font-weight: 600;"><?php echo $lang['programs']['content_9']; ?>:</span>
                                             </li>
                                             <br>
                                             <li class="big" style="color: #5b268d">
                                                <span style="font-size: 20px"; style="font-weight: 600;">
                                                   <?php echo $lang['programs']['content_10']; ?>
                                                   <br>  <br>
                                             <li class="big" style="color: #5b268d">
                                             <span style="font-size: 20px"; style="font-weight: 800;"><?php echo $lang['programs']['content_11']; ?></span>
                                             </li>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_column">
                                    <div class="column_attr ">
                                    <div class="post-excerpt">
                                    <span style="font-size: 18px"; style="font-weight: 300; line-height: 90px; color: #747474;">
                                       <?php echo $lang['programs']['content_12']; ?>
                                    </span>
                                    </div>
                                    <br>
                                    </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr class="no_line hrmargin_b_30" />
                           <div class="section flv_sections_4">
                           <div class="section_wrapper clearfix">
                           <div class="items_group clearfix">
                           <!-- Page Title-->
                           <!-- One full width row-->
                           <div class="column one column_fancy_heading">
                           <div class="fancy_heading fancy_heading_icon">
                           <!-- Animated area -->
                           <div class="animate zoomInLeftLarge" data-anim-type="zoomInLeftLarge">
                           <span class="icon_top"><i class="icon-paper-plane-line"></i></span>
                           <h2 class="title"><a target="_blank" rel="nofollow" href="https://www.linkedin.com/in/carlinaleon/">carlinaleon</h2>
                           </div>
                           <div class="inside">
                           <span  color:" #747474"; class="big"><?php echo $lang['programs']['content_13']; ?></span>
                           </div>
                           </div>
                           </div>
                           </div>
                           </div>
                           </div>
                        </div>
                        <hr class="no_line hrmargin_b_30" />
                        <hr class="no_line hrmargin_b_30" />
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
               </body>
            </html>

