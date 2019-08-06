<link rel='stylesheet' href='css/media_screen/testimonial.css'>
<style>
    .slider {
        width: 95%;
        margin: auto;
        overflow: hidden;
    }

    .slider ul {
        display: flex;
        padding: 0;
        width: 400%;
        
        animation: cambio 20s infinite alternate linear;
    }

    .slider li {
        width: 100%;
        list-style: none;
    }

    .slider img {
        width: 100%;
    }

    @keyframes cambio {
        0% {margin-left: 0;}
        20% {margin-left: 0;}
        
        25% {margin-left: -100%;}
        45% {margin-left: -100%;}
        
        50% {margin-left: -200%;}
        70% {margin-left: -200%;}
        
        75% {margin-left: -300%;}
        100% {margin-left: -300%;}
    }

    .content
    {
    text-align: center;
    }
    .inner
    {
    display:inline-block;
    }

</style>

<div class="container section mcb-section " style="padding-top:40px; padding-bottom:0px; background-color:#f0f1f2">
    <div class="row section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one clearfix">
            <div class="section mcb-section" style="padding-top:30px; padding-bottom:50px; background-repeat:no-repeat;">
                <div class="column mcb-column one column_column">
                <div class="column_attr align_center">
                    <h2><?php echo $lang['home']['content_test_1']; ?></h2>
                    <hr class="hr_narrow hr_color">
                </div>
                </div>
            </div>
            <div class="slider">
                <ul>
                    <li>
                        <div class="desc" style="font-size: 18px;line-height: 25px;">
                            <?php echo $lang['home']['content_test_2']; ?>
                        </div>
                        <br>
                        <br/>
                        <div class="content">
                            <div class="inner">
                                <span class="date">
                                    <span style="font-size: 24px;font-weight: 600; color: #5b258f;text-align:center;">Margaret Della</span>
                                </span>
                                <br>
                                <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;">
                                    <?php echo $lang['home']['content_test_10']; ?>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="desc" style="font-size: 18px;line-height: 25px;">
                            <?php echo $lang['home']['content_test_3']; ?>
                        </div>
                        <br>
                        <br/>
                        <div class="content">
                            <div class="inner">
                                <span class="date">
                                    <span style="font-size: 24px;font-weight: 600; color: #5b258f;text-align:center;">Karina Aybar</span>
                                </span>
                                <br>
                                <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;">
                                    <?php echo $lang['home']['content_test_4']; ?>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="desc" style="font-size: 18px;line-height: 25px;">
                            <?php echo $lang['home']['content_test_5']; ?>
                        </div>
                        <br>
                        <br/>
                        <div class="content">
                            <div class="inner">
                                <span class="date">
                                    <span style="font-size: 24px;font-weight: 600; color: #5b258f;text-align:center;">Ireen Ninonuevo</span>
                                </span>
                                <br>
                                <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;">
                                    <?php echo $lang['home']['content_test_6']; ?>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="desc" style="font-size: 18px;line-height: 25px;">
                            <?php echo $lang['home']['content_test_7']; ?>
                        </div>
                        <br>
                        <br/>
                        <div class="content">
                            <div class="inner">
                                <span class="date">
                                    <span style="font-size: 24px;font-weight: 600; color: #5b258f;text-align:center;">Karina Bernabe</span>
                                </span>
                                <br>
                                <span style="font-size: 16px;font-weight: 400;line-height: 23px;line-height: 41px;font-style: italic;">
                                    <?php echo $lang['home']['content_test_8']; ?>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
		    </div>

            <hr class="no_line" style="margin: 0 auto 80px;">
            <!-- One Full Row-->
            <div class="column mcb-column one column_column column-margin-20px">
                <div class="column_attr">
                <?php echo $lang['home']['content_test_9']; ?>
                </div>
            </div>
            <div class="column mcb-column one column_column padding-bottom: 60px;">
                <div class="column_attr">
                <div style="height: 1px; background: #484a7d;"></div>
                </div>
            </div>
        </div>
    </div>
</div>