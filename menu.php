<?php

    $idiom_active = $_GET['lang'];

    $segment = $_SERVER['PHP_SELF'];
    $segment = explode("/", $segment);
    $segment = $segment[2];
    $segment = explode(".", $segment);
    $segment_url = $segment[0];
    
    //$current_page_item = "";
    if($segment_url == "index"){
        $current_page_item_1 = "current_page_item";
    }else if($segment_url == "about"){
        $current_page_item_2 = "current_page_item";
    }else if($segment_url == "work-with-me"){
        $current_page_item_3 = "current_page_item";
    }else if($segment_url == "programs"){
        $current_page_item_4 = "current_page_item";
    }else if($segment_url == "forense"){
        $current_page_item_5 = "current_page_item";
    }else if($segment_url == "contact"){
        $current_page_item_6 = "current_page_item";
    }


    // Activaciones
    $active_index = $config['config']['menu']['index']['active'];
    $active_about = $config['config']['menu']['about']['active'];
    $active_work_with_me = $config['config']['menu']['work-with-me']['active'];
    $active_programs = $config['config']['menu']['programs']['active'];
    $active_forense = $config['config']['menu']['forense']['active'];
    $active_contact = $config['config']['menu']['contact']['active'];

    if($active_index == 1 OR $active_about == 1 OR $active_work_with_me == 1 OR $active_programs == 1 OR $active_forense == 1 OR $active_contact == 1){
        $tags_menu = "hidden";
    }



?>
<style>
    li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 5px;
  text-decoration: none;
  display: block;
  text-align: left;
  width:100% !important;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<div class="menu_wrapper">
    <nav id="menu" class="menu-main-menu-container">
        <ul id="menu-main-menu" class="menu">
            <li class="<?php echo $current_page_item_1; ?>">
                <a href="index.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['url_1']; ?></span></a>
            </li>
            <li class="<?php echo $current_page_item_2; ?>">
                <a href="about.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['url_2']; ?></span></a>
            </li>
            <li class="<?php echo $current_page_item_3; ?>">
                <a href="work-with-me.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['url_3']; ?></span></a>
            </li>
            <li class="<?php echo $current_page_item_4; ?>">
                <a href="programs.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['url_4']; ?></span></a>
            </li>
            <li class="<?php echo $current_page_item_5; ?>">
                <a href="forense.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['url_5']; ?></span></a>
            </li>
            <li class="<?php echo $current_page_item_6; ?>">
                <a href="contact.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['url_6']; ?></span></a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"><i class="icon-language"></i></a>
                <div class="dropdown-content">
                    <a class="nav-link smooth-scroll" href="index.php?lang=en" style="color:#9a9aa3 !important;font-size: 10px !important;">
                        <b>English</b>
                    </a>
                    <a class="nav-link smooth-scroll" href="index.php?lang=es" style="color:#9a9aa3 !important;font-size: 10px !important;">
                        <b>Spanish</b>
                    </a>
                </div>
            </li>
            <li class="divider last-item"></li>
            <!-- Menu de idioma -->
                <!--<li style="display:block;" class="nav-item dropdown hidden-xs hidden-sm submenu last" id="li_language">
                    <a class="nav-link smooth-scroll dropdown-toggle count-info page-scroll" data-toggle="dropdown" href="#" title="Idioma">
                        
                        <span class="label label-warning" id="span_num_respuestas"><i class="icon-language"></i></span>
                    </a>
                    <ul class="dropdown-menu" style="background-color: rgb(93, 104, 174) !important; color: rgb(255, 255, 255) !important; display: none;">
                        <li hidden <?php if($idiom_active == "pt"){ echo "hidden"; } ?>>
                            <a class="nav-link smooth-scroll" href="index.php?lang=pt" style="color:#f2f2f2 !important">
                                <div>
                                    <b>Portugues</b>
                                </div>
                            </a>
                        </li>
                        <li <?php if($idiom_active == "en" or $idiom_active == ""){ echo "hidden"; } ?>>
                            <a class="nav-link smooth-scroll" href="index.php?lang=en" style="color:#f2f2f2 !important">
                                <div>
                                    <b>English</b>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li <?php if($idiom_active == "es"){ echo "hidden"; } ?>>
                            <a class="nav-link smooth-scroll" href="index.php?lang=es" style="color:#f2f2f2 !important">
                                <div>
                                    <b>Spanish</b>
                                </div>
                            </a>
                        </li>
                        <li class="divider last-item"></li>
                    </ul>
                    <span class="menu-toggle"></span>
                </li>-->
            </ul>
            <span class="menu-toggle"></span>
        
    </nav>
    <a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
</div>
