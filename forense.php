

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
                  <link rel='stylesheet' href='css/popup.css'>
                  <link rel='stylesheet' href='css/media_screen/forense.css'>
                  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
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
                                 <h1 class="title" style="color:#ffffff; font-size: 55px;line-height: 60px;letter-spacing: 0em;text-align:center;"><?php echo $lang['forense']['content_1']; ?> 
                                    <br>
                                    <?php echo $lang['forense']['content_2']; ?>
                                 </h1>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Main Content -->
                     <div id="Content">
                        <div class="content_wrapper clearfix">
                           <div class="sections_group">
                              <div class="entry-content">
                                 <div class="section mcb-section" style="padding-top:50px; padding-bottom:30px; background-color: #f0f1f2;">
                                    <div class="section_wrapper mcb-section-inner">
                                       <div class="wrap mcb-wrap divider clearfix"></div>
                                       <div class="wrap mcb-wrap two-fifth clearfix">
                                          <!-- One Full Row-->
                                          <div class="column mcb-column one column_column">
                                             <div class="column_attr">
                                                <p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 0px 10px !important;">
                                                   <?php echo $lang['forense']['content_3']; ?>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="section mcb-section mcb-section-jlo4hi97l dark equal-height-wrap" style="padding-top:60px; padding-bottom:80px;">
                                    <div class="section-decoration top" style="background-image:url(images/separador-linea.png);height:135px">
                                    </div>
                                 </div>
                                 <div class="wrap mcb-wrap three-fifth clearfix">
                                    <!-- One Full Row-->
                                    <div class="column mcb-column one column_blog ">
                                       <div class="column_filters">
                                          <div class="blog_wrapper isotope_wrapper clearfix">
                                             <div class="posts_group lm_wrapper col-3 classic">
                                                <div class="post-item isotope-item clearfix no-img post-2275 post  format-standard  category-center category-uncategorized  tag-grid ">
                                                   <div class="post-desc-wrapper">
                                                      <div class="post-desc">
                                                         <div class="post-title" style="width: 124% !important;text-align: center !important;margin-left: 19% !important;">
                                                            <h2 style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 30px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 62px 10px !important;">
                                                               <?php echo $lang['forense']['content_4']; ?>:
                                                            </h2>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <table role="table" style="border-collapse: separate;border-spacing: 57px 5px;">
                                    <tbody role="rowgroup">
                                       <tr role="row">
                                          <td class='td-hover'  role="cell">
                                             <a data-fancybox="popup_1" data-src="#popup_1" style="cursor:pointer;display: inline-block; color: #5b258f; margin: 0;  font-size: 30px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 600;">
                                             <?php echo $lang['forense']['content_5']; ?>
                                             </a>
                                          </td>
                                          <td class='td-hover' class='td-over' role="cell">
                                             <a data-fancybox="popup_2" data-src="#popup_2" style="cursor:pointer;display: inline-block; color: #5b258f; margin: 0;  font-size: 30px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 600;">
                                             <?php echo $lang['forense']['content_9.2']; ?>
                                             </a>
                                          </td>
                                          <td class='td-hover' role="cell">
                                             <a data-fancybox="popup_3" data-src="#popup_3" style="cursor:pointer;display: inline-block; color: #5b258f; margin: 0;  font-size: 30px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 600;">
                                             <?php echo $lang['forense']['content_9.3']; ?>
                                             </a>
                                          </td>
                                          <td class='td-hover' role="cell">
                                             <a data-fancybox="popup_4" data-src="#popup_4" style="cursor:pointer;display: inline-block; color: #5b258f; margin: 0;  font-size: 30px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 600;">
                                             <?php echo $lang['forense']['content_7']; ?>
                                             </a>
                                          </td>
                                       </tr>
                                       <tr role="row">
                                          <td class='td-hover'  role="cell">
                                             <a data-fancybox="popup_5" data-src="#popup_5" style="cursor:pointer;display: inline-block; color: #5b258f; margin: 0;  font-size: 30px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 600;">
                                             <?php echo $lang['forense']['content_6']; ?>
                                             </a>
                                          </td>
                                          <td class='td-hover' class='td-over' role="cell">
                                             <a data-fancybox="popup_6" data-src="#popup_6" style="cursor:pointer;display: inline-block; color: #5b258f; margin: 0;  font-size: 30px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 600;">
                                             <?php echo $lang['forense']['content_9']; ?>
                                             </a>
                                          </td>
                                          <td class='td-hover' role="cell">
                                             <a data-fancybox="popup_7" data-src="#popup_7" style="cursor:pointer;display: inline-block; color: #5b258f; margin: 0;  font-size: 30px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 600;">
                                             <?php echo $lang['forense']['content_8']; ?>
                                             </a>
                                          </td>
                                          <td class='td-hover' role="cell">
                                             <a data-fancybox="popup_8" data-src="#popup_8" style="cursor:pointer;display: inline-block; color: #5b258f; margin: 0;  font-size: 30px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 600;">
                                             <?php echo $lang['forense']['content_9.1']; ?>
                                             </a>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 
                                 <div id="popup_1" style="display: none;width:100%;max-width:660px;">
                                    <p class="mb-0 text-right" style='display: inline-block; color: #0d09aa; margin: 0;  font-size: 23px; line-height: 31px; line-he_letter-spacing: 0.036em; font-weight: 500;font-style: italic;letter-spacing: 0em;'>
                                       <?php echo $lang['forense']['content_10']; ?>
                                    </p>
                                 </div>
                                 <div id="popup_2" style="display: none;width:100%;max-width:660px;">
                                    <p class="mb-0 text-right" style='display: inline-block; color: #0d09aa; margin: 0;  font-size: 23px; line-height: 31px; line-he_letter-spacing: 0.036em; font-weight: 500;font-style: italic;letter-spacing: 0em;'>
                                       <?php echo $lang['forense']['content_12']; ?>
                                    </p>
                                 </div>
                                 <div id="popup_3" style="display: none;width:100%;max-width:660px;">
                                    <p class="mb-0 text-right" style='display: inline-block; color: #0d09aa; margin: 0;  font-size: 23px; line-height: 31px; line-he_letter-spacing: 0.036em; font-weight: 500;font-style: italic;letter-spacing: 0em;'>
                                       <?php echo $lang['forense']['content_13']; ?>
                                    </p>
                                 </div>
                                 <div id="popup_4" style="display: none;width:100%;max-width:660px;">
                                    <p class="mb-0 text-right" style='display: inline-block; color: #0d09aa; margin: 0;  font-size: 23px; line-height: 31px; line-he_letter-spacing: 0.036em; font-weight: 500;font-style: italic;letter-spacing: 0em;'>
                                       <?php echo $lang['forense']['content_14']; ?>
                                    </p>
                                 </div>
                                 <div id="popup_5" style="display: none;width:100%;max-width:660px;">
                                    <p class="mb-0 text-right" style='display: inline-block; color: #0d09aa; margin: 0;  font-size: 23px; line-height: 31px; line-he_letter-spacing: 0.036em; font-weight: 500;font-style: italic;letter-spacing: 0em;'>
                                       <?php echo $lang['forense']['content_14.1']; ?>
                                    </p>
                                 </div>
                                 <div id="popup_6" style="display: none;width:100%;max-width:660px;">
                                    <p class="mb-0 text-right" style='display: inline-block; color: #0d09aa; margin: 0;  font-size: 23px; line-height: 31px; line-he_letter-spacing: 0.036em; font-weight: 500;font-style: italic;letter-spacing: 0em;'>
                                       <?php echo $lang['forense']['content_14.2']; ?>
                                    </p>
                                 </div>
                                 <div id="popup_7" style="display: none;width:100%;max-width:660px;">
                                    <p class="mb-0 text-right" style='display: inline-block; color: #0d09aa; margin: 0;  font-size: 23px; line-height: 31px; line-he_letter-spacing: 0.036em; font-weight: 500;font-style: italic;letter-spacing: 0em;'>
                                       <?php echo $lang['forense']['content_14.3']; ?>
                                    </p>
                                 </div>
                                 <div id="popup_8" style="display: none;width:100%;max-width:660px;">
                                    <p class="mb-0 text-right" style='display: inline-block; color: #0d09aa; margin: 0;  font-size: 23px; line-height: 31px; line-he_letter-spacing: 0.036em; font-weight: 500;font-style: italic;letter-spacing: 0em;'>
                                       <?php echo $lang['forense']['content_14.4']; ?>
                                    </p>
                                 </div>
                                 </br>
                                 </br>
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
                                                            <div class="inside" style="text-align: center;">
                                                               <p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                                  <?php echo $lang['forense']['content_15']; ?>
                                                               </p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             </br>
                                             <div class="column mcb-column one column_column" style="padding-top:95px; padding-bottom:0px; background-image:url(images/section-md.png.old); background-repeat:no-repeat; background-position:right top">
                                                <div class="column_attr clearfix align_center">
                                                   <h2 style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 30px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                      <?php echo $lang['forense']['content_16']; ?>
                                                   </h2>
                                                   <hr class="no_line" style="margin: 0 auto 10px;">
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="column mcb-column one column_column" style="padding-top:10px; padding-bottom:0px; background-image:url(images/section-md.png.old); background-repeat:no-repeat; background-position:right top">
                                                <div class="column_attr clearfix align_center" style="color: #6a6a6a margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                    <?php echo $lang['forense']['content_17']; ?>
                                                </div>
                                                <br/>
                                                <div class="column_attr clearfix align_center" style="color: #6a6a6a margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                    <?php echo $lang['forense']['content_18']; ?>
                                                </div>
                                                <br/>
                                                <div class="column_attr clearfix align_center" style="color: #6a6a6a margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                    <?php echo $lang['forense']['content_19']; ?>
                                                </div>
                                                <br/>
                                                <div class="column_attr clearfix align_center" style="color: #6a6a6a margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                    <?php echo $lang['forense']['content_20']; ?>
                                                </div>
                                                <br/>
                                                <div class="column_attr clearfix align_center" style="color: #6a6a6a margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                    <?php echo $lang['forense']['content_21']; ?>
                                                </div>
                                            </div>
                                            
                                            
                                            <!--
                                            <div class="column_attr clearfix align_left">
                                                <span style="display: inline-block; color: #6a6a6a margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                    <?php echo $lang['forense']['content_17']; ?>
                                                </span>
                                                <hr class="no_line" style="margin: 0 auto 10px;">
                                            </div>
                                            <div class="column_attr clearfix align_left">
                                                <span style="display: inline-block; color: #6a6a6a margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                    <?php echo $lang['forense']['content_18']; ?>
                                                </span>
                                                <hr class="no_line" style="margin: 0 auto 10px;">
                                            </div>
                                            <div class="column_attr clearfix align_left">
                                                <span style="display: inline-block; color: #6a6a6a margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                    <?php echo $lang['forense']['content_19']; ?>
                                                </span>
                                                <hr class="no_line" style="margin: 0 auto 10px;">
                                            </div>
                                            <div class="column_attr clearfix align_left">
                                                <span style="display: inline-block; color: #6a6a6a margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                    <?php echo $lang['forense']['content_20']; ?>
                                                </span>
                                                <hr class="no_line" style="margin: 0 auto 10px;">
                                            </div>
                                            <div class="column_attr clearfix align_left">
                                                <span style="display: inline-block; color: #6a6a6a margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                    <?php echo $lang['forense']['content_21']; ?>
                                                </span>
                                                <hr class="no_line" style="margin: 0 auto 10px;">
                                            </div>-->
                                            

                                            <br/>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div hidden class="section mcb-section dark bg-contain" style="padding-top:90px; padding-bottom:100px; background-color:#5b268d;">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-sm">
                                          <div class="section_wrapper">
                                             <div class="inside" style="text-align: center;">
                                                <p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                <h2><?php echo $lang['forense']['content_23']; ?></h2>
                                                </p>
                                                <br>
                                                <br>
                                                <!--<p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                   <?php echo $lang['forense']['content_24']; ?>
                                                   </p>
                                                   <br>
                                                   <br>
                                                   <p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                   <?php echo $lang['forense']['content_25']; ?>
                                                   </p>-->
                                                <table role="table">
                                                   <tbody role="rowgroup">
                                                      <tr role="row">
                                                         <td role="cell">
                                                            <p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                               <?php echo $lang['forense']['content_24']; ?>
                                                            </p>
                                                         </td>
                                                         <td role="cell">
                                                            <p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                                               <?php echo $lang['forense']['content_25']; ?>
                                                            </p>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div hidden class="section_wrapper mcb-section-inner">
                                 <div class="wrap mcb-wrap one clearfix">
                                    <!-- One Full Row-->
                                 </div>
                                 <!-- One Second (1/2) Column -->
                                 <div class="wrap mcb-wrap one-second clearfix">
                                    <!-- One Full Row-->
                                    <div class="column mcb-column one column_column">
                                       <span style="color:#5b268d !important;display: inline-block; font-size: 25px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 500;text-align:center;">
                                       <?php echo $lang['forense']['content_26']; ?>
                                       </span>
                                       <br>
                                       <br>
                                       <p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                          <?php echo $lang['forense']['content_28']; ?>
                                       </p>
                                    </div>
                                 </div>
                                 <!-- One Second (1/2) Column -->
                                 <div class="wrap mcb-wrap one-second clearfix">
                                    <!-- One Full Row-->
                                    <div class="column mcb-column one column_column">
                                       <span style="color:#5b268d !important;display: inline-block; font-size: 25px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 500;text-align:center;">
                                       <?php echo $lang['forense']['content_27']; ?>
                                       </span>
                                       <br>
                                       <br>
                                       <p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                          <?php echo $lang['forense']['content_29']; ?>
                                       </p>
                                       <br>
                                       <br>
                                       <br>
                                       <br>
                                       <br>
                                       <span style="color:#5b268d !important;display: inline-block; font-size: 25px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 500;text-align:center;">
                                       <?php echo $lang['forense']['content_30']; ?>
                                       </span>
                                       <br>
                                       <br>
                                       <p style="display: inline-block; color: #E1DEDE margin: 0;  font-size: 20px; line-height: 34px; line-he_letter-spacing: 0.027em; font-weight: 500; margin: 0 35px 10px !important;">
                                          <?php echo $lang['forense']['content_31']; ?>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <br>
                              <div class="column mcb-column one column_column" style="padding-top:10px; padding-bottom:0px; background-image:url(images/section-md.png.old); background-repeat:no-repeat; background-position:right top">
                                 <div class="column_attr clearfix align_center">
                                    <?php echo $lang['forense']['content_22']; ?>
                                    <hr class="no_line" style="margin: 0 auto 10px;">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr class="no_line" style="margin: 0 auto 20px;">
                        <!-- testimonial -->
                        <?php include "testimonial.php"; ?>
                        <!-- Cierre testimonial -->
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
                  <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>-->
                  <script src="js/jquery-2.1.4.min.js"></script>
                  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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
                     $(document).ready(function() {
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
                     
                         $('#buttons a').click(function(e) {
                             //slide the item
                     
                             if (container.is(':animated')) {
                                 return false;
                             }
                             if (e.target.id == previous) {
                                 container.stop().animate({
                                     'left': 0
                                 }, 8000, function() {
                                     container.find(elm + ':first').before(container.find(elm + ':last'));
                                     resetSlides();
                                 });
                             }
                     
                             if (e.target.id == next) {
                                 container.stop().animate({
                                     'left': item_width * -2
                                 }, 1500, function() {
                                     container.find(elm + ':last').after(container.find(elm + ':first'));
                                     resetSlides();
                                 });
                             }
                     
                             //cancel the link behavior            
                             return false;
                     
                         });
                     
                         //if mouse hover, pause the auto rotation, otherwise rotate it    
                         container.parent().mouseenter(function() {
                             clearInterval(run);
                         }).mouseleave(function() {
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

