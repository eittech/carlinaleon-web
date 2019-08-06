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
                  <link rel='stylesheet' href='css/media_screen/tecnicas.css'>
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
                                          <a id="logo" href="index.html" title="CarlinaLeon"> <img class="scale-with-grid" src="images/logo_menu.png" alt="CarlinaLeon" />
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
                                 <h1 class="title" style="color:#ffffff;"><?php echo $lang['tecnicas']['content_1']; ?></h1>
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
                                           <hr class="no_line" style="margin: 0 auto 80px;">
                                           <div class="items_group clearfix">
                                            <div class="column one column_fancy_heading">
                                               <div class="fancy_heading fancy_heading_arrows">
                                                  <h2 class="title" style="line-height: 60px;"><i class="icon-right-dir"></i><?php echo $lang['tecnicas']['content_2']; ?><i class="icon-left-dir"></i></h2>
                                               </div>
                                            </div>
                                         </div>
                                          <div class="inside">
                                             <p style="display: inline-block; color: #3F3F3F;  font-size: 22px; line-height: 34px; line-he_letter-spacing: 0.036em; font-weight: 500; margin: -43px 41px 50px !important;font-style: italic;" >
                                                <span ><?php echo $lang['tecnicas']['content_3']; ?></span>
                                             </p>
                                          </div>
                                       </div>
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
                                             <div class="items_group clearfix">
                                            <div class="column one column_fancy_heading">
                                               <div class="fancy_heading fancy_heading_arrows">
                                                  <h2 class="title"><?php echo $lang['tecnicas']['content_4']; ?></h2>
                                               </div>
                                            </div>
                                         </div>
                                              <p style="display: inline-block; color: #FFFFFF; margin: 0;  font-size: 22px; line-height: 34px; line-he_letter-spacing: 0.036em; font-weight: 500; margin: -30px 47px 20px !important;font-style: italic;">
                                                <?php echo $lang['tecnicas']['content_5']; ?>
                                             </p>
                                          </div>
                                       </div>
                                       <div class="wrap mcb-wrap divider  valign-top clearfix">
                                          <div class="mcb-wrap-inner"></div>
                                       </div>
                                    </div>
                                 </div>
                             <!-- One full width row-->
                                 <div class="column one column_fancy_heading">
                                    <div class="section mcb-section mcb-section-13e36fc59 bg-cover" style="padding-top:0px;padding-bottom:0px;background-repeat:no-repeat;background-position:center bottom;">
                                       <div class="fancy_heading fancy_heading_arrows">
                                          
                                           <hr class="no_line" style="margin: 0 auto 80px;">
                                           <div class="items_group clearfix">
                                            <div class="column one column_fancy_heading">
                                               <div class="fancy_heading fancy_heading_arrows">
                                                  <h2 class="title" style="line-height: 60px;"><i class="icon-right-dir"></i><?php echo $lang['tecnicas']['content_6']; ?><i class="icon-left-dir"></i></h2>
                                               </div>
                                            </div>
                                           </div>
                                           </div>
                                    </div>
                                 </div>
                                          <div class="inside">
                                             <?php echo $lang['tecnicas']['content_7']; ?>
                                          </div>
                              
                                           <hr class="no_line" style="margin: 0 auto 80px;">
                                           <!-- One Full Row-->
                                          <div class="column mcb-column one column_column column-margin-20px">
                                             <div class="column_attr">
                                                <p style="font-size: 22px; line-height: 34px; color: #424242; font-weight: 400;">
                                                <?php echo $lang['tecnicas']['content_8']; ?>: <a style="font-size: 20px; font-weight: 600;" href="contact.html">contact info</a>, <?php echo $lang['tecnicas']['content_9']; ?> <a style="font-size: 20px; font-weight: 600;" target="_blank" rel="nofollow" href="https://itherapy.com/counselor/carlina-d-leon/">carlina-d-leon</a>
                                                </p>
                                             </div>
                                          </div>
                                           <div class="column mcb-column one column_column padding-bottom: 60px;s">
                                             <div class="column_attr">
                                                <div style="height: 1px; background: #484a7d;"></div>
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