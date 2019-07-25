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
                                 <h1 class="title" style="color:#ffffff;">Acerca de mí</h1>
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
                                                <span >Hola! Soy Carlina, consejera licenciada en salud mental, life coach (facilitadora de procesos vitales) y activista de postura firme por la recuperación de sobrevivientes de delitos relacionados con el género y el sexo. He dedicado mi vida a trabajar con sobrevivientes, proporcionando herramientas, facilitando el proceso de recuperación y apoyando la legalización del estado de inmigración</span>
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
                                             <p style="display: inline-block; color: #8F8F8F; margin: 0;  font-size: 22px; line-height: 34px; line-he_letter-spacing: 0.036em; font-weight: 500; margin: -30px 100px 20px !important;font-style: italic;">
                                                <spam style="color: #ffffff;">" Si sientes que recuperarte</spam>
                                                y lidiar con el trauma 
                                                <spam style="color: #ffffff;">es como un trabajo de tiempo completo</spam>
                                                , puedo ayudarte. Si sientes que te gustaría
                                                <spam style="color: #ffffff;"> tener el control de tus respuestas emocionales</spam>
                                                , puedo ayudarte. Si sientes que 
                                                <spam style="color: #ffffff;">no sabes a quién recurrir</spam>
                                                , para ayudarte a explicar lo que te sucedió de una manera que se pueda relacionar y entender, puedo ayudarte." 
                                                <br>
                                                 -Carlina Leon- 
                                             </p>
                                          </div>
                                       </div>
                                       <div class="wrap mcb-wrap divider  valign-top clearfix">
                                          <div class="mcb-wrap-inner"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="section mcb-section mcb-section-13e36fc59 bg-cover" style="padding-top:20px;padding-bottom:30px;background-image:url(images/section-at.png);background-repeat:no-repeat;background-position:center bottom;">
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
                                             <h2 style="font-size: 46px;line-height: 58px;letter-spacing: 0.019em; font-weight: 600; ">
                                                Con todo este peso en tu espalda,
                                                <br>
                                                estoy segura que sientes:
                                             </h2>
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
                                                      <p style="display: inline-block; color: #6b7a6b; margin: 0;  font-size: 19px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 500;">
                                                         <spam style="color: #02252d">Vergüenza </spam>
                                                         por las personas a tu alrededor dicen: “Debes poner el pasado en el pasado y dejarlo ir”.
                                                      </p>
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
                                                      <p style="display: inline-block; color: #6b7a6b; margin: 0;  font-size: 19px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 500;">
                                                         Que 
                                                         <spam style="color: #02252d">no puedes ser quien realmente eres</spam>
                                                         porque la sociedad te avergonzará, pensará 
                                                         <spam style="color: #02252d">que no hay solución</spam>
                                                         para ti e incluso te culpará.
                                                      </p>
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
                                                      <p style="display: inline-block; color: #6b7a6b; margin: 0;  font-size: 19px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 500;">
                                                         <spam style="color: #02252d">Agotamiento, temor</spam>
                                                         de que más crisis tengan lugar y de fracasar.
                                                      </p>
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
                                                      <p style="display: inline-block; color: #6b7a6b; margin: 0;  font-size: 19px; line-height: 30px; line-he_letter-spacing: 0.036em; font-weight: 500;">
                                                         <spam style="color: #02252d"> Desesperada/desesperado</spam>
                                                         contigo misma/mismo debido a tu incapacidad de “perdonar y olvidar”.
                                                      </p>
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
                                                   <h2>Déjame ser tu familia escogida en este proceso</h2>
                                                   <hr class="no_line" style="margin: 0 auto 10px;">
                                                   <p style="display: inline-block; color: #ffffff; margin: 30px 0px 0px 20px !important;  font-size: 18.5px; line-height: 35px; line-he_letter-spacing: -0.012em; font-weight: 500;">
                                                      Mi foco se encuentra en conseguir los resultados que deseas para su vida y en encontrar las herramientas y estrategias más efectivas para ayudarte a prosperar. Estoy aquí para crear
                                                      un protocolo de tratamiento diseñado ÚNICAMENTE para ti. Es hora de que el mundo vea tu verdadero yo, y no el “tú” que creaste para sentirte y estar a salvo.
                                                   </p>
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
                                       Tu voz merece ser escuchada
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
                                                <p style="font-size: 16px;line-height: 26px;font-weight: 400;">
                                                   <spam style="color: #5b268d"> Me apasiona</spam>
                                                   ayudar a las y los sobrevivientes porque puedo presenciar de primera mano la increíble capacidad de recuperación. Creo que el milagro de convertirnos en quienes queremos ser es posible.
                                                   <br><br>
                                                   <spam style="color: #5b268d">Creo -genuinamente- que no importa en absoluto de dónde vienes</spam>
                                                   o, mejor aún, por lo que has pasado, tu te puedes recuperar.
                                                   <br>
                                                   <br>
                                                </p>
                                             </div>
                                          </div>
                                          <!-- One Second (1/2) Column -->
                                          <div class="column mcb-column one-second column_column">
                                             <div class="column_attr" style=" padding:0 5% 0 0;">
                                                <p style="font-size: 16px;line-height: 26px;font-weight: 400;">
                                                   No significa que el camino sea igual para todas y todos.
                                                   <br>
                                                   <br>
                                                   Algunas y algunos de ustedes tendrán un camino más desafiante y difícil por delante, pero la capacidad de recuperación está presente para cada quien.
                                                   <br>
                                                   <spam style="color: #5b268d">¿Por que me decidí a realizar este trabajo con esta comunidad?</spam>
                                                </p>
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
                                                <p style="font-size: 16px;line-height: 26px;font-weight: 400;"> 
                                                   Este es mi compromiso: diseñar un protocolo de tratamiento creado exclusivamente para tus necesidades y objetivos, con los RESULTADOS que siempre soñaste para ti y para tu vida.
                                                   <br>
                                                   <br>
                                                   Establezco que mi propósito en todo momento es ser una bendición y dejar todo y todos en mejores condiciones que como las encontré.
                                                </p>
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
                                          <h2 class="title"><i class="icon-right-dir"></i>Tres datos interesantes acerca de mí<i class="icon-left-dir"></i></h2>
                                       </div>
                                    </div>
                                 </div>
                                  <!-- Page devider -->
                                    <!-- One full width row-->
                                    <div class="column one column_divider">
                                        <hr class="no_line flv_style_5">
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box">
                                        <div class="icon_box icon_position_left has_border" style="padding-left: 130px;">
                                            
                                                <div class="image_wrapper"><img src="images/datos-interesantes1.png" alt="Curabitur ipsum" class="scale-with-grid">
                                                </div>
                                                <div class="desc_wrapper">
                                                    <div class="desc" style="font-size: 18px;line-height: 30px;">
                                                       Mis amigas, amigos y familiares me comparan constantemente con Wendy de Bob El constructor porque me encanta el trabajo de construcción.
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box">
                                        <div class="icon_box icon_position_left has_border" style="padding-left: 130px;">
                                            
                                                <div class="image_wrapper"><img src="images/datos-interesantes2.png" alt="Aliquam eratur" class="scale-with-grid">
                                                </div>
                                                <div class="desc_wrapper">
                                                    <div class="desc" style="font-size: 16px;line-height: 29px;">
                                                        Puedo encontrar espacio donde la mayoría de la gente diría que no hay. En realidad me causa gracia ver a la gente sorprendida cuando se cuenta que ese espacio se encuentra disponible si hay compromiso, fe, esperanza y un montón de creatividad.
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_icon_box">
                                        <div class="icon_box icon_position_left no_border" style="padding-left: 130px;">
                                            
                                                <div class="image_wrapper"><img src="images/datos-interesantes3.png" alt="Integer aliquam" class="scale-with-grid">
                                                </div>
                                                <div class="desc_wrapper">
                                                    <div class="desc" style="font-size: 18px;line-height: 30px;">
                                                        Soy un cerebrito - me la paso con un libro en las manos.
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <hr class="no_line" style="margin: 0 auto 20px;">
                               
                                   <div class="section mcb-section " style="padding-top:40px; padding-bottom:0px; background-color:#f0f1f2">
                                    <div class="section_wrapper mcb-section-inner">
                                       <div class="wrap mcb-wrap one clearfix">
                            <div class="section mcb-section" style="padding-top:30px; padding-bottom:50px; background-repeat:no-repeat;">
                               <div class="column mcb-column one column_column">
                                   <div class="column_attr align_center">
                                       <h2>La gente habla</h2>
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
                                                           Carlina tiene una habilidad maravillosa para identificar desafíos complicados, trazar soluciones y lograr resultados designados que sirvieron para que los proyectos despegaran. Si bien es una pensadora crítica y un miembro del equipo orientado a la acción, Carlina también puede cambiar para ayudar a los equipos a procesar, crecer y aprender del trauma, el dolor y la marginación.
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
                                                           Carlina es una profesional dedicada y apasionada, que va más allá del deber. Tuve el placer de trabajar en estrecha colaboración con Carlina en un entorno sin fines de lucro, y puedo dar fe de su verdadero compromiso para garantizar el mejor interés si los que prestan servicios. Ella es culturalmente competente, sensible y altamente conocedora en el campo de la salud mental y servicios informados sobre traumas.
                                                    </div>
                                                    <br/>
                                                    <span class="date"><span style="font-size: 24px;font-weight: 600; color: #5b258f;">Karina Aybar</span></span>
                                                        <br>
                                                       <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;"> Profesional en Practica Privada. Ex-comisionada de la Oficina de Derechos Humanos de la Ciudad de Nueva York.</span>
                                                        
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
                                                           Carlina es honesta, confiable e increíblemente trabajadora. Más allá de eso, tiene una impresionante ética de trabajo que siempre es tranquilizadora. Su conocimiento del trauma psicológico y la perspectiva de género y la experiencia en el cambio cultural fue una gran ventaja para nuestro programa.
                                                    </div>
                                                    <br/>
                                                    <span class="date"><span style="font-size: 24px;font-weight: 600; color: #5b258f;">Ireen Ninonuevo</span></span>
                                                        <br>
                                                       <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;">  Profesional en Practica Privada. Ex-Directora del Programa Cambiando Futuros - Kingsbridge Heights Community Center.</span>
                                                        
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
                                                          Carlina L. demostró una comprensión del trabajo comunitario realizado en el programa Nuevo Amanecer a través de su capacidad para incorporar las implicaciones psicológicas, culturales, económicas, sociales y legales que afectan a nuestra población.
                                                    </div>
                                                    <br/>
                                                    <span class="date"><span style="font-size: 24px;font-weight: 600;color: #5b258f;"> Karina Bernabe</span></span>
                                                        <br>
                                                       <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;">  Directora del Programa de Violencia Domestica. Centro del Desarrollo de la Mujer Dominicana.</span>
                                                        
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
                                                <p style="font-size: 22px; line-height: 34px; color: #424242; font-weight: 400;">
                                                   Encuentrame: <a style="font-size: 20px; font-weight: 600;" href="contact.html">contact info</a>, o reserva una cita aquí <a style="font-size: 20px; font-weight: 600;" target="_blank" rel="nofollow" href="https://itherapy.com/counselor/carlina-d-leon/">carlina-d-leon</a>
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