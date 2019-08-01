

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
                  <link rel='stylesheet' href='css/media_screen/work-with-me.css'>
                  <style>
                     .background-content{
                     background-color: #f0f1f2 !important;
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
                              <spam class="title" style="color:#ffffff; text-align: center !important;"><?php echo $lang['work-with-me']['content_1']; ?></spam>
                           </div>
                        </div>
                     </div>
                     <!-- Main Content -->
                     <div id="Content">
                        <div class="content_wrapper clearfix">
                           <div class="sections_group">
                              <div class="entry-content">
                                 <div class="section mcb-section sections_style_2"></div>
                                 <div class="section_wrapper mcb-section-inner">
                                    <div class="wrap mcb-wrap two-fifth clearfix">
                                       <!-- One Full Row-->
                                       <div class="column mcb-column one column_column column-margin-20px">
                                          <div class="column_attr">
                                             <h2 style="display: inline-block; font-size: 40px; line-height: 50px; font-weight: 600; margin-right: 15px;"><?php echo $lang['work-with-me']['content_2']; ?></h2>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wrap mcb-wrap two-fifth clearfix">
                                       <!-- One Full Row-->
                                       <div class="column mcb-column two column_column ">
                                          <div class="column_attr">
                                             <h2 style="display: inline-block; font-size: 40px; line-height: 50px; font-weight: 600; margin-right: 15px;"><?php echo $lang['work-with-me']['content_3']; ?>:  </h2>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wrap mcb-wrap divider clearfix"></div>
                                    <div class="wrap mcb-wrap two-fifth clearfix">
                                       <!-- One Full Row-->
                                       <div class="column mcb-column one column_column">
                                          <div class="column_attr">
                                             <div style="height: 2px; background: #484a7d;"></div>
                                          </div>
                                       </div>
                                       <!-- One Full Row-->
                                       <div class="column mcb-column one column_column">
                                          <div class="column_attr">
                                             <li class="big" style="font-size: 18px;font-weight: 400;line-height: 31px;">
                                                <span style="font-weight: 700; font-size: 20px; color: #512a8a;"><?php echo $lang['work-with-me']['content_4']; ?>: </span>
                                                <br>
                                                <?php echo $lang['work-with-me']['content_5']; ?>
                                             </li>
                                             <hr class="no_line hrmargin_b_30" />
                                             <li class="big" style="font-size: 17px;line-height: 28px;">
                                                <?php echo $lang['work-with-me']['content_6']; ?>:
                                                <br>
                                                <span style="font-weight: 700; font-size: 20px; color: #512a8a;"> <?php echo $lang['work-with-me']['content_7']; ?>:</span>
                                                <br>
                                                <?php echo $lang['work-with-me']['content_8']; ?>
                                             </li>
                                             <br>
                                             <div class="post-links"><i class="icon-doc-text"></i>
                                                <a href="programs.php<?php echo $idiom; ?>" class="post-more"><?php echo $lang['work-with-me']['content_9']; ?></a>
                                             </div>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wrap mcb-wrap three-fifth clearfix">
                                       <!-- One Full Row-->
                                       <div class="column mcb-column one column_column">
                                          <div class="column_attr">
                                             <div style="height: 1px; background: #484a7d;"></div>
                                          </div>
                                       </div>
                                       <!-- One Full Row-->
                                       <div class="column mcb-column one column_blog ">
                                          <div class="column_filters">
                                             <div class="blog_wrapper isotope_wrapper clearfix">
                                                <div class="post-item isotope-item clearfix no-img post-2275 post  format-standard  category-center category-uncategorized  tag-grid ">
                                                   <div class="image_frame post-photo-wrapper scale-with-grid">
                                                      <div class="image_wrapper"></div>
                                                   </div>
                                                   <div class="post-desc-wrapper">
                                                      <div class="post-desc">
                                                         <div class="post-title">
                                                            <li class="entry-title" style="font-weight: 700; font-size: 20px; color: #512a8a;"><?php echo $lang['work-with-me']['content_10']; ?>: 
                                                            </li>
                                                         </div>
                                                         <br>
                                                         <div class="post-excerpt">
                                                            <p class="big" style="font-size: 17px;line-height: 25px;">
                                                               <?php echo $lang['work-with-me']['content_11']; ?>
                                                            </p>
                                                         </div>
                                                      </div>
                                                      <div class="post-footer">
                                                         <div class="post-links">
                                                            <i class="icon-doc-text"></i><a href="programs.php<?php echo $idiom; ?>" class="post-more"><?php echo $lang['work-with-me']['content_link']; ?></a>
                                                         </div>
                                                         </div
                                                      </div>
                                                   </div>
                                                   <hr class="no_line hrmargin_b_30" />
                                                   <div class="post-item isotope-item clearfix no-img post-2275 post  format-standard  category-center category-uncategorized  tag-grid ">
                                                      <div class="image_frame post-photo-wrapper scale-with-grid">
                                                         <div class="image_wrapper"></div>
                                                      </div>
                                                      <div class="post-desc-wrapper">
                                                         <div class="post-desc">
                                                            <div class="post-title">
                                                               <li class="entry-title" style="font-weight: 700; font-size: 20px; color: #512a8a;"><?php echo $lang['work-with-me']['content_12']; ?>
                                                               </li>
                                                            </div>
                                                            <br>
                                                            <div class="post-excerpt">
                                                               <p class="big" style="font-size: 18px;line-height: 27px;">
                                                                  <?php echo $lang['work-with-me']['content_13']; ?>
                                                               </p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="post-footer">
                                                         <div class="post-links">
                                                            <i class="icon-doc-text"></i><a href="programs.php<?php echo $idiom; ?>" class="post-more"><?php echo $lang['work-with-me']['content_link']; ?></a>
                                                         </div>
                                                         </div
                                                      </div>
                                                   </div>
                                                   <div class="post-item isotope-item clearfix no-img post-2275 post  format-standard  category-center category-uncategorized  tag-grid ">
                                                      <div class="post-desc-wrapper">
                                                         <div class="post-desc">
                                                            <div class="post-title">
                                                               <li class="entry-title" style="font-weight: 700; font-size: 20px; color: #512a8a;"><?php echo $lang['work-with-me']['content_14']; ?>: 
                                                               </li>
                                                            </div>
                                                            <br>
                                                            <div class="post-excerpt">
                                                               <p class="big" style="font-size: 18px;line-height: 27px;">
                                                                  <?php echo $lang['work-with-me']['content_15']; ?>
                                                               </p>
                                                               <div class="post-footer">
                                                                  <div class="post-links">
                                                                     <i class="icon-doc-text"></i><a href="programs.php<?php echo $idiom; ?>" class="post-more"><?php echo $lang['work-with-me']['content_link']; ?></a>
                                                                  </div>
                                                               </div>
                                                               <p class="big" style="font-size: 18px;line-height: 27px;">
                                                                  <br>
                                                                  <?php echo $lang['work-with-me']['content_16']; ?>
                                                               </p>
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
                        <div class="section mcb-section mcb-section-jlo4hi97l dark equal-height-wrap" style="padding-top:0px; padding-bottom:130px;">
                           <div class="section-decoration top" style="background-image:url(images/separador-linea-sinfondo2.png);height:135px">
                           </div>
                        </div>
                        <div class="section_wrapper mcb-section-inner">
                           <div class="wrap mcb-wrap one clearfix">
                              <!-- One Full Row-->
                              <div class="column mcb-column one column_column column-margin-20px">
                                 <div class="column_attr">
                                    <h2 style="display: inline-block; font-size: 50px; line-height: 60px; font-weight: 600; margin-right: 15px;"><?php echo $lang['work-with-me']['content_17']; ?></h2>
                                 </div>
                              </div>
                           </div>
                           <div class="wrap mcb-wrap one clearfix">
                              <!-- One Full Row-->
                           </div>
                           <!-- One Second (1/2) Column -->
                           <div class="wrap mcb-wrap one-second clearfix">
                              <!-- One Full Row-->
                              <div class="column mcb-column one column_column">
                                 <div class="column_attr" style=" padding:0 5% 0 0;">
                                    <p style="font-size: 16px;line-height: 26px;">
                                       <?php echo $lang['work-with-me']['content_18']; ?>
                                    </p>
                                    <hr class="no_line hrmargin_b_30" />
                                 </div>
                                 <p class="big" style="font-size: 16px;line-height: 26px;">
                                    <?php echo $lang['work-with-me']['content_19']; ?>
                                 </p>
                                 <p class="big" style="font-size: 16px;line-height: 26px;">
                                    <?php echo $lang['work-with-me']['content_20']; ?>
                                 </p>
                              </div>
                           </div>
                           <div class="wrap mcb-wrap one-fourth clearfix">
                              <!-- One Full Row-->
                              <div class="column mcb-column one column_chart ">
                                 <div class="chart_box">
                                    <div class="chart" data-percent="100" data-color="#484a7d">
                                       <div class="icon">
                                          <i class="icon-cc-by"></i>
                                       </div>
                                    </div>
                                    <p>
                                    </p>
                                 </div>
                              </div>
                              <!-- One Full Row-->
                              <div class="column mcb-column one column_column">
                                 <div class="column_attr">
                                    <?php echo $lang['work-with-me']['content_21']; ?>
                                 </div>
                              </div>
                           </div>
                           <div class="wrap mcb-wrap one-fourth clearfix">
                              <!-- One Full Row-->
                              <div class="column mcb-column one column_chart ">
                                 <div class="chart_box">
                                    <div class="chart" data-percent="100" data-color="#484a7d">
                                       <div class="icon">
                                          <i class="icon-heart-line"></i>
                                       </div>
                                    </div>
                                    <p>
                                    </p>
                                 </div>
                              </div>
                              <!-- One Full Row-->
                              <div class="column mcb-column one column_column">
                                 <div class="column_attr">
                                    <?php echo $lang['work-with-me']['content_22']; ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr class="no_line" style="margin: 0 auto 20px;">
                        <!-- testimonial -->
                        <?php include "testimonial.php"; ?>
                        <!-- Cierre testimonial -->
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

