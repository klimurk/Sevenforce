<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Sevenforce ChipTuning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(86116263, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/86116263" style="position:absolute; left:-9999px;" alt="" />
    </div>
</noscript>
<!-- /Yandex.Metrika counter -->
    <?php wp_head(); ?>

</head>
<body>


<script>

    var instanceImg;
    var instanceVid;
    var lazy_imageStorage;
    lazy_imageStorage = "<?= get_template_directory_uri( ).'/assets/images/' ?>";
        instanceImg = $('img').lazy({
            effect: "fadeIn",
            effectTime: 100,
            threshold: 0,
            enableThrottle: true,
            throttle: 250,
            imageBase: "<?= get_template_directory_uri( ).'/assets/images/' ?>",
            combined: true,
            delay: 5000
        });
        instanceVid = $('video').lazy({

            threshold: 0,
            enableThrottle: true,
            throttle: 250,

            combined: true,
            delay: 5000

        });
</script>

<header class="navBarWrap">
<div class="navBar">
        <a href="<?= get_home_url(); ?>" id="logo_mobile" class="logoWrap">
            <!-- <a href="<?= get_home_url(); ?>"> -->
                <img  class="only_mobile" src="<?= get_template_directory_uri( ).'/assets/images/header/navLogo.png'?>" alt="logo"/>
            <!-- </a> -->
            <!-- <a href="<?= get_home_url(); ?>"> -->
                <img class="only_desktop" src="<?= get_template_directory_uri( ).'/assets/images/header/Logo.png'?>" alt="logoLetters"/>
            <!-- </a> -->
            <p class="logoWord only_desktop">
                <?= pll_e( 'Header Logo' ); ?>
            </p>
        </a>
        <div class="linksWrap only_desktop">
        <?php
                $menu_name = 'headerMenu';
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                foreach ($menuitems as $item) {
                $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
                $title = wp_get_nav_menu_object($id);
                $page = get_page( $id );
                $link = get_page_link( $id );
                ?>
                <div class="menu__btn">
                        <a href=" <?= $item->url; ?>"  >
                                <div>
                                <?= $item->title; ?>
                                </div>
                        </a>
                </div>
                <?php
                }
        ?>
        </div>
        <div id="lang_mobile" class="languageWrap only_desktop">
            <?php
                $translations = pll_the_languages(array('raw'=>1));
                foreach ($translations as $item) : ?>
                <a  class="languageItem <?= ($item['current_lang']) ? 'activeLanguage' : '' ?>" href="<?= $item['url'] ?>">
                    <?= $item['name']; ?>
                </a>
            <?php  endforeach; ?>
        </div>
        <a id='btn_menu_call' class="menu_btn only_mobile"></a>
    </div>
</header>
<div id='menu_mobile' class="menu only_mobile">
            <?php
                $menu_name = 'headerMenu';
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                foreach ($menuitems as $item) {
                $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
                $title = wp_get_nav_menu_object($id);
                $page = get_page( $id );
                $link = get_page_link( $id );
                ?>
                <div class="menu__btn">
                        <a href=" <?= $item->url; ?>"  >
                                <div>
                                <?= $item->title; ?>
                                </div>
                        </a>
                </div>
                <?php
                }
        ?>
</div>
<div class="content">

