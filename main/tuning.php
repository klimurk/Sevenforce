<?php
/*
Template Name: Tuning
*/
?>

<?php get_header(); ?>

<!-- <img src="<?= get_template_directory_uri( ).'/images/waves.png'?>" alt="waves" class="wavesPc">
<img src="<?= get_template_directory_uri( ).'/images/wavesMobile.png'?>" alt="waves" class="wavesMobile"> -->


<div class="tuning_block1">
    <img class="mainBg only_desktop" src="<?= get_template_directory_uri( ).'/assets/images/tuning/block1/mainBg.png'?>" alt="main" >
    <img class="mainBg only_mobile" src="<?= get_template_directory_uri( ).'/assets/images/tuning/block1/mainBG_mobile.png'?>" alt="main" >

    <div class="block1Title"><?= pll_e( 'Tuning Block1 title' ); ?></div>
    <svg class="svg_circle" viewBox="0 0 234 482">
        <circle cx="104.26" cy="229.281" r="4" transform="rotate(90 104.26 229.281)" fill="#4D4D4D"/>
        <circle cx="79.9584" cy="311.387" r="4" transform="rotate(135 79.9584 311.387)" fill="#4D4D4D"/>
        <circle cx="4.7168" cy="352.26" r="4" transform="rotate(-180 4.7168 352.26)" fill="#4D4D4D"/>
        <circle cx="63.3867" cy="154.04" r="4" transform="rotate(45 63.3867 154.04)" fill="#4D4D4D"/>
        <circle cx="107.842" cy="109.587" r="3.5" transform="rotate(45 107.842 109.587)" stroke="#4D4D4D"/>
        <circle cx="149.392" cy="163.539" r="3.5" transform="rotate(67.5 149.392 163.539)" stroke="#4D4D4D"/>
        <circle cx="167.129" cy="229.283" r="3.5" transform="rotate(90 167.129 229.283)" stroke="#4D4D4D"/>
        <circle cx="158.36" cy="296.811" r="3.5" transform="rotate(112.5 158.36 296.811)" stroke="#4D4D4D"/>
        <circle cx="124.413" cy="355.844" r="3.5" transform="rotate(135 124.413 355.844)" stroke="#4D4D4D"/>
        <circle cx="70.4613" cy="397.392" r="3.5" transform="rotate(157.5 70.4613 397.392)" stroke="#4D4D4D"/>
        <circle cx="4.7168" cy="415.129" r="3.5" transform="rotate(180 4.7168 415.129)" stroke="#4D4D4D"/>
        <circle cx="48.8113" cy="75.6423" r="3.5" transform="rotate(22.5 48.8113 75.6423)" stroke="#4D4D4D"/>
        <circle cx="101.353" cy="29.8938" r="4" transform="rotate(30 101.353 29.8938)" fill="#4D4D4D"/>
        <circle cx="152.299" cy="65.1295" r="4" transform="rotate(45 152.299 65.1295)" fill="#4D4D4D"/>
        <circle cx="192.389" cy="112.353" r="4" transform="rotate(60 192.389 112.353)" fill="#4D4D4D"/>
        <circle cx="218.892" cy="168.34" r="4" transform="rotate(75 218.892 168.34)" fill="#4D4D4D"/>
        <circle cx="230" cy="229.283" r="4" transform="rotate(90 230 229.283)" fill="#4D4D4D"/>
        <circle cx="224.956" cy="291.022" r="4" transform="rotate(105 224.956 291.022)" fill="#4D4D4D"/>
        <circle cx="204.106" cy="349.353" r="4" transform="rotate(120 204.106 349.353)" fill="#4D4D4D"/>
        <circle cx="168.87" cy="400.299" r="4" transform="rotate(135 168.87 400.299)" fill="#4D4D4D"/>
        <circle cx="121.647" cy="440.389" r="4" transform="rotate(150 121.647 440.389)" fill="#4D4D4D"/>
        <circle cx="65.6577" cy="466.892" r="4" transform="rotate(165 65.6577 466.892)" fill="#4D4D4D"/>
        <circle cx="4.7168" cy="478" r="4" transform="rotate(180 4.7168 478)" fill="#4D4D4D"/>
        <circle cx="43.0218" cy="9.04351" r="4" transform="rotate(15 43.0218 9.04351)" fill="#4D4D4D"/>
    </svg>

    <div class="block1_description">
        <div class="block1_description__photo only_desktop">
            <img src="<?= get_template_directory_uri( ).'/assets/images/tuning/block1/info1.png'?>" alt="info1.png">
            <img src="<?= get_template_directory_uri( ).'/assets/images/tuning/block1/info2.png'?>" alt="info2.png">
            <img src="<?= get_template_directory_uri( ).'/assets/images/tuning/block1/info3.png'?>" alt="info3.png">
        </div>
        <div class="block1_description__text">
            <p><?= pll_e( 'Tuning Block1 text1' ); ?></p>
            <br/>
            <p><?= pll_e( 'Tuning Block1 text2' ); ?></p>
            <br/>
            <p><?= pll_e( 'Tuning Block1 text3' ); ?></p>
            <br/>

            <p>
                <svg width="18" height="16" >
                    <path d="M1.20583 7.0129L6.29666 13.6863L17.0162 0.766503" stroke="white" stroke-width="2"/>
                </svg>
                <?= pll_e( 'Tuning Block1 text4' ); ?>
            </p>
            <br/>
            <p>
                <svg width="18" height="16" >
                    <path d="M1.20583 7.0129L6.29666 13.6863L17.0162 0.766503" stroke="white" stroke-width="2"/>
                </svg>
                <?= pll_e( 'Tuning Block1 text5' ); ?>
            </p>
            <br/>
            <p>
                <svg width="18" height="16" >
                    <path d="M1.20583 7.0129L6.29666 13.6863L17.0162 0.766503" stroke="white" stroke-width="2"/>
                </svg>
                <?= pll_e( 'Tuning Block1 text6' ); ?>
            </p>
        </div>

    </div>

</div>
<div class="tuning_block2">
    <div class="tuning_block2_headline"> <?= pll_e( 'Tuning Block2 title' ); ?> </div>
    <div class="tuning_block2__block reverse">
        <img class="tuning_block2__block_img" src="<?= get_template_directory_uri( ).'/assets/images/tuning/block2/block1.png'?>" alt="">
        <div class="tuning_block2__block__text">
            <div class="tuning_block2__block__text_title"><?= pll_e( 'Tuning Block2 Block1 title' ); ?> </div>
            <div class="tuning_block2__block__text_text"><?= pll_e( 'Tuning Block2 Block1 text' ); ?> </div>
        </div>
    </div>
    <div class="tuning_block2__block twice ">
        <img class="tuning_block2__block_img" src="<?= get_template_directory_uri( ).'/assets/images/tuning/block2/block2_1.png'?>" alt="">
        <div class="tuning_block2__block__text">
            <div class="tuning_block2__block__text_title"><?= pll_e( 'Tuning Block2 Block2 title1' ); ?> </div>
            <div class="tuning_block2__block__text_text"><?= pll_e( 'Tuning Block2 Block2 text1' ); ?> </div>
        </div>
    </div>
    <div class="tuning_block2__block twice ">
        <img class="tuning_block2__block_img" src="<?= get_template_directory_uri( ).'/assets/images/tuning/block2/block2_2.png'?>" alt="">
        <div class="tuning_block2__block__text">
            <div class="tuning_block2__block__text_title"><?= pll_e( 'Tuning Block2 Block2 title2' ); ?> </div>
            <div class="tuning_block2__block__text_text"><?= pll_e( 'Tuning Block2 Block2 text2' ); ?> </div>
        </div>
    </div>
    <div class="tuning_block2__block ">
        <img class="tuning_block2__block_img" src="<?= get_template_directory_uri( ).'/assets/images/tuning/block2/block3.png'?>" alt="">
        <div class="tuning_block2__block__text">
            <div class="tuning_block2__block__text_title"><?= pll_e( 'Tuning Block2 Block3 title' ); ?> </div>
            <div class="tuning_block2__block__text_text"><?= pll_e( 'Tuning Block2 Block3 text' ); ?> </div>
        </div>
    </div>
    <div class="tuning_block2__block reverse">
        <img class="tuning_block2__block_img" src="<?= get_template_directory_uri( ).'/assets/images/tuning/block2/block4.png'?>" alt="">
        <div class="tuning_block2__block__text">
            <div class="tuning_block2__block__text_title"><?= pll_e( 'Tuning Block2 Block4 title' ); ?> </div>
            <div class="tuning_block2__block__text_text"><?= pll_e( 'Tuning Block2 Block4 text' ); ?> </div>
        </div>
    </div>
    <div class="tuning_block2__block twice ">
        <img class="tuning_block2__block_img" src="<?= get_template_directory_uri( ).'/assets/images/tuning/block2/block5_1.png'?>" alt="">
        <div class="tuning_block2__block__text">
            <div class="tuning_block2__block__text_title"><?= pll_e( 'Tuning Block2 Block5 title1' ); ?> </div>
            <div class="tuning_block2__block__text_text"><?= pll_e( 'Tuning Block2 Block5 text1' ); ?> </div>
        </div>
    </div>
    <div class="tuning_block2__block twice ">
        <img class="tuning_block2__block_img" src="<?= get_template_directory_uri( ).'/assets/images/tuning/block2/block5_2.png'?>" alt="">
        <div class="tuning_block2__block__text">
            <div class="tuning_block2__block__text_title"><?= pll_e( 'Tuning Block2 Block5 title2' ); ?> </div>
            <div class="tuning_block2__block__text_text"><?= pll_e( 'Tuning Block2 Block5 text2' ); ?> </div>
        </div>
    </div>

</div>

<div class="tuning_block3">
    <div class="sendForm">
        <!-- <img src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block5/Mask.png'?>" alt="gradient" class="eightGradient"> -->

            <?php
                if (pll_current_language() == 'ru') {
                    echo do_shortcode( '[cf7form cf7key="%d1%80%d1%83%d1%81-%d0%bf%d0%be%d0%b4%d1%81%d1%82%d1%80%d0%b0%d0%bd%d0%b8%d1%86%d1%8b-%d1%83%d0%bf%d1%80%d0%be%d1%89%d0%b5%d0%bd%d0%bd%d0%b0%d1%8f"]' );
                }
                if (pll_current_language() == 'ua') {
                    echo do_shortcode( '[cf7form cf7key="%d0%b1%d0%b5%d0%b7-%d0%bd%d0%b0%d0%b7%d0%b2%d0%b0%d0%bd%d0%b8%d1%8f"]');
                }
            ?>

    </div>
</div>

<?php get_footer(); ?>