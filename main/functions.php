<?php

//       *   add scripts and styles
// *==========================================================================

    add_action( 'after_setup_theme', 'myMenu' );
    add_action( 'wp_enqueue_scripts','add_scripts_and_styles');
    add_theme_support( 'custom-logo');


    function myMenu(){
        register_nav_menu( 'headerMenu', 'menu in header' );
    }
    function add_scripts_and_styles(){
        // *external scripts
        //*========================
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' ,false, null, false );
        wp_enqueue_script('jquery');


        wp_enqueue_script( 'slickslider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js' ,array('jquery'), null, 'footer' );

        // *libs scripts
        //*========================

        wp_enqueue_script('jqueryLazyMin', get_template_directory_uri(  ).'/assets/js/libs/lazy/jquery.lazy.js', array('jquery'), null, false);
        wp_enqueue_script('jqueryLazyPluginsMin', get_template_directory_uri(  ).'/assets/js/libs/lazy/jquery.lazy.plugins.js', array('jquery','jqueryLazyMin'), null,false);

        // *developer scripts
        //*========================
        wp_enqueue_script('global', get_template_directory_uri(  ).'/assets/js/script_global.js', array('jquery'), null, 'footer');
        if(is_front_page()) {
            wp_enqueue_script('script', get_template_directory_uri(  ).'/assets/js/main/script.js', array('jquery'), null, 'footer');
        }
        if(is_page_template('chiptuning.php')){
            wp_enqueue_script('chiptuning', get_template_directory_uri(  ).'/assets/js/chiptuning/chip.js', array('jquery'), null, 'footer');
        }
        // if(is_page_template('tuning.php')){
        //     wp_enqueue_script('tuning', get_template_directory_uri(  ).'/assets/js/tuning/tuning.js', array('jquery'), null, 'footer');
        // }
        if(is_page_template('service.php')){
            wp_enqueue_script('service', get_template_directory_uri(  ).'/assets/js/service/service.js', array('jquery'), null, 'footer');
        }
        if(is_page_template('works.php')){
            wp_enqueue_script('works', get_template_directory_uri(  ).'/assets/js/works/works.js', array('jquery'), null, 'footer');
        }
        if(is_page_template('contacts.php')){
            wp_enqueue_script('contacts', get_template_directory_uri(  ).'/assets/js/contacts/contacts.js', array('jquery'), null, 'footer');
        }

        // *external styles
        //*========================
        wp_enqueue_style( 'slicksliderCSS', get_template_directory_uri(  ).'/assets/css/slickslider.css', array());
        wp_enqueue_style( 'slicksliderthemeCSS', get_template_directory_uri(  ).'/assets/css/slicksliderTheme.css', array());
        // *developer styles
        //*========================

        // wp_enqueue_style( 'style', get_stylesheet_uri(), array(), rand(111,9999), 'all' );
        wp_enqueue_style( 'style', get_template_directory_uri(  ).'/style.min.css',  array(), rand(111,9999), 'all');
        // wp_enqueue_style( 'style', get_stylesheet_uri(), array(), rand(111,9999), 'all' );
    }



// *         polylang register strings
// *=================================================================================================================


    // *==========   HEADER FOOTER ====================================
    //          * group: header
    // =========================================
    pll_register_string(
        'header_aboutus',
        'Header AboutUs',
        'Header',
        false
    );
    pll_register_string(
        'Header_Logo',
        'Header Logo',
        'Header',
        false
    );
    pll_register_string(
        'header_ChipTuning',
        'Header ChipTuning',
        'Header',
        false
    );
    pll_register_string(
        'header_works',
        'Header Works',
        'Header',
        false
    );
    pll_register_string(
        'header_contacts',
        'Header Contacts',
        'Header',
        false
    );
    pll_register_string(
        'header_AutoPower',
        'Header AutoPower',
        'Header',
        false
    );

    //          * group: header
    // =========================================
    pll_register_string(
        'Contacts',
        'Contacts',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_title',
        'Contacts title',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_social',
        'Contacts social',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_adress',
        'Contacts adress',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_phone1',
        'Contacts phone1',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_phone2',
        'Contacts phone2',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_worktime',
        'Contacts worktime',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_mail',
        'Contacts mail',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_insta',
        'Contacts insta',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_tiktok',
        'Contacts tiktok',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_telegram',
        'Contacts telegram',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_facebook',
        'Contacts facebook',
        'Contacts',
        false
    );
    pll_register_string(
        'Contacts_ChatBot',
        'Contacts ChatBot',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_form_text',
        'Contacts form text',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_form_btn',
        'Contacts form btn',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_title_main',
        'Contacts ukraine title main',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_title_dealers',
        'Contacts ukraine title dealers',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block1_adress',
        'Contacts ukraine block1 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block1_worktime',
        'Contacts ukraine block1 worktime',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block1_mail',
        'Contacts ukraine block1 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block1_phone',
        'Contacts ukraine block1 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block2_adress',
        'Contacts ukraine block2 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block2_phone',
        'Contacts ukraine block2 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block3_adress',
        'Contacts ukraine block3 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block3_phone',
        'Contacts ukraine block3 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block4_adress',
        'Contacts ukraine block4 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block4_phone',
        'Contacts ukraine block4 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block5_adress',
        'Contacts ukraine block5 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_ukraine_block5_phone',
        'Contacts ukraine block5 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_title_main',
        'Contacts other title main',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block1_adress',
        'Contacts other block1 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block1_mail',
        'Contacts other block1 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block1_phone',
        'Contacts other block1 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block2_adress',
        'Contacts other block2 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block2_mail',
        'Contacts other block2 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block2_phone',
        'Contacts other block2 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block3_adress',
        'Contacts other block3 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block3_mail',
        'Contacts other block3 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block3_phone',
        'Contacts other block3 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block4_adress',
        'Contacts other block4 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block4_mail',
        'Contacts other block4 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block4_phone',
        'Contacts other block4 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block5_adress',
        'Contacts other block5 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block5_mail',
        'Contacts other block5 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block5_phone',
        'Contacts other block5 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block6_adress',
        'Contacts other block6 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block6_mail',
        'Contacts other block6 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block6_phone',
        'Contacts other block6 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block7_adress',
        'Contacts other block7 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block7_mail',
        'Contacts other block7 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_block7_phone',
        'Contacts other block7 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_other_subtitle',
        'Contacts other subtitle',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_title_main',
        'Contacts russia title main',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block1_adress',
        'Contacts russia block1 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block1_mail',
        'Contacts russia block1 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block1_phone',
        'Contacts russia block1 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block2_adress',
        'Contacts russia block2 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block2_mail',
        'Contacts russia block2 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block2_phone',
        'Contacts russia block2 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block3_adress',
        'Contacts russia block3 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block3_mail',
        'Contacts russia block3 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block3_phone',
        'Contacts russia block3 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block4_adress',
        'Contacts russia block4 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block4_mail',
        'Contacts russia block4 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block4_phone',
        'Contacts russia block4 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block5_adress',
        'Contacts russia block5 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block5_mail',
        'Contacts russia block5 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block5_phone',
        'Contacts russia block5 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block6_adress',
        'Contacts russia block6 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block6_mail',
        'Contacts russia block6 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block6_phone',
        'Contacts russia block6 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block7_adress',
        'Contacts russia block7 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block7_mail',
        'Contacts russia block7 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block7_phone',
        'Contacts russia block7 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block8_adress',
        'Contacts russia block8 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block8_mail',
        'Contacts russia block8 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block8_phone',
        'Contacts russia block8 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block9_adress',
        'Contacts russia block9 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block9_mail',
        'Contacts russia block9 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block9_phone',
        'Contacts russia block9 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block10_adress',
        'Contacts russia block10 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block10_mail',
        'Contacts russia block10 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block10_phone',
        'Contacts russia block10 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block11_adress',
        'Contacts russia block11 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block11_mail',
        'Contacts russia block11 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block11_phone',
        'Contacts russia block11 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block12_adress',
        'Contacts russia block12 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block12_mail',
        'Contacts russia block12 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block12_phone',
        'Contacts russia block12 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block13_adress',
        'Contacts russia block13 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block13_mail',
        'Contacts russia block13 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block13_phone',
        'Contacts russia block13 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block14_adress',
        'Contacts russia block14 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block14_mail',
        'Contacts russia block14 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block14_phone',
        'Contacts russia block14 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block15_adress',
        'Contacts russia block15 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block15_mail',
        'Contacts russia block15 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block15_phone',
        'Contacts russia block15 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block16_adress',
        'Contacts russia block16 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block16_mail',
        'Contacts russia block16 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block16_phone',
        'Contacts russia block16 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block17_adress',
        'Contacts russia block17 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block17_mail',
        'Contacts russia block17 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block17_phone',
        'Contacts russia block17 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block18_adress',
        'Contacts russia block18 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block18_mail',
        'Contacts russia block18 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block18_phone',
        'Contacts russia block18 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block19_adress',
        'Contacts russia block19 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block19_mail',
        'Contacts russia block19 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block19_phone',
        'Contacts russia block19 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block20_adress',
        'Contacts russia block20 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block20_mail',
        'Contacts russia block20 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block20_phone',
        'Contacts russia block20 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block21_adress',
        'Contacts russia block21 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block21_mail',
        'Contacts russia block21 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block21_phone',
        'Contacts russia block21 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block22_adress',
        'Contacts russia block22 adress',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block22_mail',
        'Contacts russia block22 mail',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_block22_phone',
        'Contacts russia block22 phone',
        'Contacts',
        true
    );
    pll_register_string(
        'Contacts_russia_subtitle',
        'Contacts russia subtitle',
        'Contacts',
        true
    );
    // *==========   Main ====================================
    //          * group: metrics
    // =========================================

    pll_register_string(
        'Metrics_kmh',
        'Metrics kmh',
        'Metrics',
        true
    );
    pll_register_string(
        'Metrics_mil',
        'Metrics mil',
        'Metrics',
        true
    );
    pll_register_string(
        'Metrics_s',
        'Metrics s',
        'Metrics',
        false
    );
    pll_register_string(
        'Metrics_m',
        'Metrics m',
        'Metrics',
        false
    );
    pll_register_string(
        'Metrics_ft',
        'Metrics ft',
        'Metrics',
        false
    );

    pll_register_string(
        'Metrics_stock',
        'Metrics stock',
        'Metrics',
        false
    );
    pll_register_string(
        'Metrics_speed_kmh',
        'Metrics speed kmh',
        'Metrics',
        false
    );
    pll_register_string(
        'Metrics_height_m',
        'Metrics height m',
        'Metrics',
        false
    );
    pll_register_string(
        'Metrics_Acceleration_g',
        'Metrics Acceleration g',
        'Metrics',
        false
    );
    pll_register_string(
        'Metrics_Distance_m',
        'Metrics Distance m',
        'Metrics',
        false
    );
    pll_register_string(
        'Metrics_Distance_ft',
        'Metrics Distance ft',
        'Metrics',
        false
    );
    pll_register_string(
        'Metrics_slope',
        'Metrics slope',
        'Metrics',
        false
    );
    pll_register_string(
        'Metrics_stage2',
        'Metrics stage2',
        'Metrics',
        false
    );


    // *==========   Main ====================================
    //          * group: block1
    // =========================================

    pll_register_string(
        'Intro_call',
        'Intro call',
        'Intro',
        false
    );
    pll_register_string(
        'Block1_text1',
        'Block1 text1',
        'Block1',
        false
    );
    pll_register_string(
        'Block1_text2',
        'Block1 text2',
        'Block1',
        false
    );
//          * group: block2
    // =========================================
    pll_register_string(
        'Block2_title',
        'Block2 title',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_headline',
        'Block2 headline',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_text1',
        'Block2 text1',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_text2',
        'Block2 text2',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_text3',
        'Block2 text3',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_text4',
        'Block2 text4',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_team_title',
        'Block2 team title',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_team_text',
        'Block2 team text',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_prof_title',
        'Block2 prof title',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_prof_text',
        'Block2 prof text',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_unic_title',
        'Block2 unic title',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_unic_text',
        'Block2 unic text',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_result_title',
        'Block2 result title',
        'Block2',
        true
    );
    pll_register_string(
        'Block2_result_text',
        'Block2 result text',
        'Block2',
        true
    );
//          * group: block3
    // =========================================
    pll_register_string(
        'Block3_title',
        'Block3 title',
        'Block3',
        false
    );
    pll_register_string(
        'Block3_slider_car1',
        'Block3 slider car1',
        'Block3',
        false
    );
    pll_register_string(
        'Block3_slider_car2',
        'Block3 slider car2',
        'Block3',
        false
    );
    pll_register_string(
        'Block3_slider_car3',
        'Block3 slider car3',
        'Block3',
        false
    );
    pll_register_string(
        'Block3_slider_car4',
        'Block3 slider car4',
        'Block3',
        false
    );
    //          * group: block4
    // =========================================
    pll_register_string(
        'Block4_title',
        'Block4 title',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_mark',
        'Block4 mark',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_model',
        'Block4 model',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_year',
        'Block4 year',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_motor',
        'Block4 motor',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_numbers_parameter',
        'Block4 numbers parameter',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_numbers_factory',
        'Block4 numbers factory',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_numbers_afterTun',
        'Block4 numbers afterTun',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_numbers_difference',
        'Block4 numbers difference',
        'Block4',
        false
    );

    pll_register_string(
        'Block4_numbers_power',
        'Block4 numbers power',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_numbers_motor',
        'Block4 numbers motor',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_numbers_moment',
        'Block4 numbers moment',
        'Block4',
        false
    );

    pll_register_string(
        'Block4_order_title',
        'Block4 order title',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_order_btn',
        'Block4 order btn',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_ask_title',
        'Block4 ask title',
        'Block4',
        false
    );
    pll_register_string(
        'Block4_ask_text',
        'Block4 ask text',
        'Block4',
        true
    );
    pll_register_string(
        'Block4_services_title',
        'Block4 services title',
        'Block4',
        true
    );
    pll_register_string(
        'Block4_services_text1',
        'Block4 services text1',
        'Block4',
        true
    );
    pll_register_string(
        'Block4_services_text2',
        'Block4 services text2',
        'Block4',
        true
    );
    pll_register_string(
        'Block4_services_text3',
        'Block4 services text3',
        'Block4',
        true
    );
    pll_register_string(
        'Block4_services_text4',
        'Block4 services text4',
        'Block4',
        true
    );
    pll_register_string(
        'Block4_services_text5',
        'Block4 services text5',
        'Block4',
        true
    );
    pll_register_string(
        'Block4_services_text6',
        'Block4 services text6',
        'Block4',
        true
    );
    pll_register_string(
        'Block4_services_text7',
        'Block4 services text7',
        'Block4',
        true
    );
    pll_register_string(
        'Block4_graphic',
        'Block4 graphic',
        'Block4',
        false
    );

        //          * group: block5
    // =========================================
    pll_register_string(
        'Block5_title',
        'Block5 title',
        'Block5',
        false
    );
    pll_register_string(
        'Block5_bmwinfo_title',
        'Block5 bmwinfo title',
        'Block5',
        false
    );
    pll_register_string(
        'Block5_bmwinfo_before',
        'Block5 bmwinfo before',
        'Block5',
        false
    );
    pll_register_string(
        'Block5_bmwinfo_stock',
        'Block5 bmwinfo stock',
        'Block5',
        false
    );
    pll_register_string(
        'Block5_bmwinfo_moment1',
        'Block5 bmwinfo moment1',
        'Block5',
        false
    );
    pll_register_string(
        'Block5_bmwinfo_stage2',
        'Block5 bmwinfo stage2',
        'Block5',
        false
    );
    pll_register_string(
        'Block5_bmwinfo_moment2',
        'Block5 bmwinfo moment2',
        'Block5',
        false
    );
    pll_register_string(
        'Block5_bmwinfo_after',
        'Block5 bmwinfo after',
        'Block5',
        false
    );
    pll_register_string(
        'Block5_mostfast_title',
        'Block5 mostfast title',
        'Block5',
        true
    );
    pll_register_string(
        'Block5_mostfast_text',
        'Block5 mostfast text',
        'Block5',
        true
    );
    pll_register_string(
        'Block7_ChatBot',
        'Block7 ChatBot',
        'Block7',
        true
    );
        //          * group: FOOTER
    // =========================================
    pll_register_string(
        'Footer_Link_Chip',
        'Footer Link Chip',
        'Footer',
        false
    );
    pll_register_string(
        'Footer_Link_Service',
        'Footer Link Service',
        'Footer',
        false
    );
    pll_register_string(
        'Footer_Link_Tuning',
        'Footer Link Tuning',
        'Footer',
        false
    );
    pll_register_string(
        'Footer_Link_Works',
        'Footer Link Works',
        'Footer',
        false
    );
    pll_register_string(
        'Footer_Link_Contacts',
        'Footer Link Contacts',
        'Footer',
        false
    );

            //          * group: Chiptuning description
    // =========================================
    pll_register_string(
        'Chiptuning_description_text1',
        'Chiptuning description text1',
        'Chiptuning',
        true
    );
    pll_register_string(
        'Chiptuning_description_text2',
        'Chiptuning description text2',
        'Chiptuning',
        true
    );


            //          * group: Service description
    // =========================================
    pll_register_string(
        'Service_Block1_text1',
        'Service Block1 text1',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block2_title1',
        'Service Block2 title1',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block2_title2',
        'Service Block2 title2',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block2_text1',
        'Service Block2 text1',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block2_text2',
        'Service Block2 text2',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_title',
        'Service Block3 title',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_open',
        'Service Block3 open',
        'Service',
        false
    );
    pll_register_string(
        'Service_Block3_close',
        'Service Block3 close',
        'Service',
        false
    );
    pll_register_string(
        'Service_Block3_service1',
        'Service Block3 service1',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service2',
        'Service Block3 service2',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service3',
        'Service Block3 service3',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service4',
        'Service Block3 service4',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service5',
        'Service Block3 service5',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service6',
        'Service Block3 service6',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service7',
        'Service Block3 service7',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service8',
        'Service Block3 service8',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service9',
        'Service Block3 service9',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service10',
        'Service Block3 service10',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service11',
        'Service Block3 service11',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service12',
        'Service Block3 service12',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service13',
        'Service Block3 service13',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service14',
        'Service Block3 service14',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service15',
        'Service Block3 service15',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service16',
        'Service Block3 service16',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service17',
        'Service Block3 service17',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service18',
        'Service Block3 service18',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service19',
        'Service Block3 service19',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service20',
        'Service Block3 service20',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service21',
        'Service Block3 service21',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service22',
        'Service Block3 service22',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service23',
        'Service Block3 service23',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service24',
        'Service Block3 service24',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service25',
        'Service Block3 service25',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service26',
        'Service Block3 service26',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service27',
        'Service Block3 service27',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service28',
        'Service Block3 service28',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service29',
        'Service Block3 service29',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service30',
        'Service Block3 service30',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service31',
        'Service Block3 service31',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service1_text',
        'Service Block3 service1_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service2_text',
        'Service Block3 service2_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service3_text',
        'Service Block3 service3_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service4_text',
        'Service Block3 service4_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service5_text',
        'Service Block3 service5_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service6_text',
        'Service Block3 service6_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service7_text',
        'Service Block3 service7_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service8_text',
        'Service Block3 service8_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service9_text',
        'Service Block3 service9_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service10_text',
        'Service Block3 service10_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service11_text',
        'Service Block3 service11_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service12_text',
        'Service Block3 service12_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service13_text',
        'Service Block3 service13_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service14_text',
        'Service Block3 service14_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service15_text',
        'Service Block3 service15_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service16_text',
        'Service Block3 service16_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service17_text',
        'Service Block3 service17_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service18_text',
        'Service Block3 service18_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service19_text',
        'Service Block3 service19_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service20_text',
        'Service Block3 service20_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service21_text',
        'Service Block3 service21_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service22_text',
        'Service Block3 service22_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service23_text',
        'Service Block3 service23_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service24_text',
        'Service Block3 service24_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service25_text',
        'Service Block3 service25_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service26_text',
        'Service Block3 service26_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service27_text',
        'Service Block3 service27_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service28_text',
        'Service Block3 service28_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service29_text',
        'Service Block3 service29_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service30_text',
        'Service Block3 service30_text',
        'Service',
        true
    );
    pll_register_string(
        'Service_Block3_service31_text',
        'Service Block3 service31_text',
        'Service',
        true
    );


               //          * group: Tuning
    // =========================================
    pll_register_string(
        'Tuning_Block1_title',
        'Tuning Block1 title',
        'Tuning',
        true
    );

    pll_register_string(
        'Tuning_Block1_text1',
        'Tuning Block1 text1',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block1_text2',
        'Tuning Block1 text2',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block1_text3',
        'Tuning Block1 text3',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block1_text4',
        'Tuning Block1 text4',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block1_text5',
        'Tuning Block1 text5',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block1_text6',
        'Tuning Block1 text6',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block1_text7',
        'Tuning Block1 text7',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_title',
        'Tuning Block2 title',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_title',
        'Tuning Block2 title',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block1_title',
        'Tuning Block2 Block1 title',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block1_text',
        'Tuning Block2 Block1 text',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block2_title1',
        'Tuning Block2 Block2 title1',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block2_text1',
        'Tuning Block2 Block2 text1',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block2_title2',
        'Tuning Block2 Block2 title2',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block2_text2',
        'Tuning Block2 Block2 text2',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block3_title',
        'Tuning Block2 Block3 title',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block3_text',
        'Tuning Block2 Block3 text',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block4_title',
        'Tuning Block2 Block4 title',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block4_text',
        'Tuning Block2 Block4 text',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block5_title1',
        'Tuning Block2 Block5 title1',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block5_text1',
        'Tuning Block2 Block5 text1',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block5_title2',
        'Tuning Block2 Block5 title2',
        'Tuning',
        true
    );
    pll_register_string(
        'Tuning_Block2_Block5_text2',
        'Tuning Block2 Block5 text2',
        'Tuning',
        true
    );
    pll_register_string(
        'Works_title',
        'Works title',
        'Works',
        true
    );



