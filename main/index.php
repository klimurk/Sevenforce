<?php
/*
Template Name: Main
*/
?>

<?php get_header(); ?>
<div class="headerContacts">
    <div class="geo">
        <span>
            <img src="<?= get_template_directory_uri( ).'/assets/images/main/headerContacts/geo.svg'?>" alt="geo">
        </span>
        <a href="https://www.google.com/maps?ll=50.483443,30.503114&z=17&t=m&hl=ru&gl=CZ&mapclient=embed&q=%D1%83%D0%BB.+%D0%AD%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%B8%D0%BA%D0%BE%D0%B2,+12+%D0%9A%D0%B8%D0%B5%D0%B2+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0+02000"
            target="_blank"><?= pll_e( 'Contacts adress' ); ?></a>
    </div>
    <div class="phone">
        <span>
            <img src="<?= get_template_directory_uri( ).'/assets/images/main/headerContacts/phone.svg'?>" alt="phone">
        </span>
        <div class="phone__links">
            <a href="tel:+380501526645" target="_blank">
                <?= pll_e( 'Contacts phone1' ); ?>
            </a>
            <a href="tel:+380675826066" target="_blank">
                <?= pll_e( 'Contacts phone2' ); ?>
            </a>
        </div>
    </div>
    <div class="clock">
        <span>
            <img src="<?= get_template_directory_uri( ).'/assets/images/main/headerContacts/clock.svg'?>" alt="clock">
        </span>
        <?= pll_e( 'Contacts worktime' ); ?>
    </div>
    <a class="chatbotBtn" href="https://button.amocrm.ru/zctdw" target="_blank">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/headerContacts/android.svg'?>" alt="link">
        <span><?= pll_e( 'Block7 ChatBot' ); ?></span>
    </a>
    <div class="socialLinks">

        <a href="https://www.instagram.com/seven_force_kiev" target="_blank" class="instagram">
            <img class="header_icon" src="<?= get_template_directory_uri( ).'/assets/images/main/headerContacts/instagramGrey.png'?>" alt="instagramGrey">
            <img class="header_icon_hover" src="<?= get_template_directory_uri( ).'/assets/images/main/headerContacts/instagramRed.png'?>" alt="instagramRed">
        </a>

        <a href="https://www.facebook.com/sevenforcekiev" target="_blank" class="facebook">
            <img class="header_icon" src="<?= get_template_directory_uri( ).'/assets/images/main/headerContacts/facebookGrey.png'?>" alt="facebookGrey">
            <img class="header_icon_hover" src="<?= get_template_directory_uri( ).'/assets/images/main/headerContacts/facebookRed.png'?>" alt="facebookRed">
        </a>
    </div>
</div>

<div id="block1" class="firstBlock">
    <div  class="intro_slider_bigImage">
        <div>
            <div class="intro_slider_big_inner">
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/block1/audi.png'?>" alt="audiBg" class="audiBg">
            </div>
        </div>
        <div>
            <div class="intro_slider_big_inner">
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/block1/slider2.png'?>" alt="audiBg" class="audiBg">
            </div>
        </div>
        <div>
            <div class="intro_slider_big_inner">
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/block1/slider3.png'?>" alt="audiBg" class="audiBg">
            </div>
        </div>
    </div>
    <div  class="intro_slider_smallImage">
        <div>
            <div class="intro_slider_small_inner">
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/block1/slider2.png'?>" alt="audiBg" class="audiBg">
            </div>
        </div>
        <div>
            <div class="intro_slider_small_inner">
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/block1/slider3.png'?>" alt="audiBg" class="audiBg">
            </div>
        </div>
        <div>
            <div class="intro_slider_small_inner">
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/block1/audi.png'?>" alt="audiBg" class="audiBg">
            </div>
        </div>
    </div>
    <div class="intro_slideButtons">
        <div class="slideLeft" >
            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/slideLeft.png'?>" alt="slideLeft" class="intro_slideLeftImg">
        </div>
        <div class="slideRight" >
            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/slideRight.png'?>" alt="slideRight" class="intro_slideRightImg">
        </div>
    </div>
    <div class="faster">
        <p class="fasterText"><?= pll_e( 'Block1 text1' ); ?></p>
        <a href="#block6" class="redButton">
            <div class="redButtonText"><?= pll_e( 'Block1 text2' ); ?></div>
        </a>
    </div>

</div>
<div id="block2" class="secondBlock">
    <div class="about">
        <p class="aboutLeft"><?= pll_e( 'Block2 title' ); ?></p>
        <p class="aboutRight">
            <span><?= pll_e( 'Block2 text1' ); ?></span>
            <?= pll_e( 'Block2 text2' ); ?>
            <br>
            <br>
            <span> <?= pll_e( 'Block2 text3' ); ?></span>
            <?= pll_e( 'Block2 text4' ); ?>
        </p>
    </div>
</div>
<div id="block4" class="fifthBlock">
    <div class="fifthBlockHead"><?= pll_e( 'Block4 title' ); ?></div>
    <div class="selectsWrap">
        <select name="mark" id="mark" onchange="setModels()">
            <option disabled selected>Марка</option>
        </select>
        <select name="model" id="model" disabled onchange="setYears()">
            <option disabled selected><?= pll_e( 'Block4 model' ); ?></option>
        </select>
        <select name="year" id="year" disabled onchange="setMotors()">
            <option disabled selected><?= pll_e( 'Block4 year' ); ?></option>
        </select>
        <select name="motor" id="motor" disabled onchange="setData()">
            <option disabled selected><?= pll_e( 'Block4 motor' ); ?></option>
        </select>
    </div>
</div>
<div class="fifthBlockSecondary" id="fifthBlockSecondary">
    <div class="fifthBlockSecondaryHead">
        <div class="stages" id="stagesList"></div>
        <div class="graphSecondary" id="graphSecondary" onclick="openGraph()">
            <span>
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/block5_2/graphGrey.svg'?>" alt="graph" class="graphImage"id="graphImage">
            </span>
            <?= pll_e( 'Block4 graphic' ); ?>
        </div>
    </div>
    <div class="fifthBlockSecondaryTable">
        <div class="numbers" id="numbers">
            <div class="fifthBlockSecondaryTableHead">
                <p><?= pll_e( 'Block4 numbers parameter' ); ?></p>
                <p><?= pll_e( 'Block4 numbers factory' ); ?></p>
                <p><?= pll_e( 'Block4 numbers afterTun' ); ?></p>
                <p><?= pll_e( 'Block4 numbers difference' ); ?></p>
            </div>
            <div class="fifthBlockSecondaryTableLine">
                <p><?= pll_e( 'Block4 numbers motor' ); ?></p>
                <p id="1">123123</p>
                <p id="2">123123</p>
                <p id="3" class="fifthBlockSecondaryTableLineDifference">321321</p>
            </div>
            <div class="fifthBlockSecondaryTableLine">
                <p><?= pll_e( 'Block4 numbers power' ); ?></p>
                <p id="4">123123</p>
                <p id="5">123123</p>
                <p id="6" class="fifthBlockSecondaryTableLineDifference">321321</p>
            </div>
            <div class="fifthBlockSecondaryTableLine">
                <p><?= pll_e( 'Block4 numbers moment' ); ?></p>
                <p id="7">123123</p>
                <p id="8">123123</p>
                <p id="9" class="fifthBlockSecondaryTableLineDifference">321321</p>
            </div>
            <div class="fifthBlockSecondaryTableLine">
                <p>0-100 <?= pll_e( 'Metrics kmh' ); ?></p>
                <p id="10">123123</p>
                <p id="11">123123</p>
                <p id="12" class="fifthBlockSecondaryTableLineDifference">321321</p>
            </div>
            <div id="shredLine1" class="fifthBlockSecondaryTableLine">
                <p>100-200 <?= pll_e( 'Metrics kmh' ); ?></p>
                <p id="13">123123</p>
                <p id="14">123123</p>
                <p id="15" class="fifthBlockSecondaryTableLineDifference">321321</p>
            </div>
            <div id="shredLine2" class="fifthBlockSecondaryTableLine">
                <p>1/4 <?= pll_e( 'Metrics mil' ); ?></p>
                <p id="16">123123</p>
                <p id="17">123123</p>
                <p id="18" class="fifthBlockSecondaryTableLineDifference">321321</p>
            </div>
        </div>
        <div class="graphPage" id="graphPage">
            <img src="<?= get_template_directory_uri( )?>" alt="graph" id="graphPageImage">
        </div>
    </div>
</div>
<div class="orderBlock" id="orderBlock">
    <div class="orderBlockWrap">
        <div class="orderInfo"><?= pll_e( 'Block4 order title' ); ?></div>
        <div class="orderButton">
            <a href="#block6" class="redButton">
                <p class="redButtonText"><?= pll_e( 'Block4 order btn' ); ?></p>
            </a>
        </div>
    </div>
</div>
<div class="thirdBlock">
    <div class="thirdblock_head"><?= pll_e( 'Block2 headline' ); ?></div>
    <div class="thirdBlock_inner">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/halfCircle.svg'?>" alt="circle" class="halfCircle">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/rekt1.png'?>" alt="rekt" class="rekt1 only_desktop">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/rekt2.png'?>" alt="rekt" class="rekt2 only_desktop">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/rekt3.png'?>" alt="rekt" class="rekt3 only_desktop">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/rekt4.png'?>" alt="rekt" class="rekt4 only_desktop">

        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/rekt1_mob.png'?>" alt="rekt" class="rekt1 only_mobile">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/rekt2_mob.png'?>" alt="rekt" class="rekt2 only_mobile">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/rekt3_mob.png'?>" alt="rekt" class="rekt3 only_mobile">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/rekt4_mob.png'?>" alt="rekt" class="rekt4 only_mobile">
        <div class="wordsWrap">
            <div class="team">

                <p class="thirdBlockHead">
                    <span>
                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/team.svg'?>" alt="team"
                            class="teamImg">
                        </span>
                    <?= pll_e( 'Block2 team title' ); ?>
                </p>
                <pre class="curveText"><?= pll_e( 'Block2 team text' ); ?></pre>
            </div>
            <div class="prof">

                <p class="thirdBlockHead">
                    <span>
                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/prof.svg'?>" alt="prof"
                            class="profImg">
                    </span>
                    <?= pll_e( 'Block2 prof title' ); ?>
                </p>
                <pre class="curveText"><?= pll_e( 'Block2 prof text' ); ?></pre>
            </div>
            <div class="unic">
                <p class="thirdBlockHead">
                    <span>
                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/unic.svg'?>" alt="unic"
                            class="unicImg">
                        </span>
                    <?= pll_e( 'Block2 unic title' ); ?>
                </p>
                <pre class="curveText"><?= pll_e( 'Block2 unic text' ); ?></pre>
            </div>
            <div class="result">
                <p class="thirdBlockHead">
                    <span>
                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block2/result.svg'?>" alt="result"
                            class="resultImg">
                        </span>
                    <?= pll_e( 'Block2 result title' ); ?>
                </p>
                <pre class="curveText"><?= pll_e( 'Block2 result text' ); ?></pre>
            </div>
        </div>
    </div>
</div>
<div id="block3" class="forthBlock">
    <p class="forthBlockHead"><?= pll_e( 'Block3 title' ); ?></p>
    <div class="forthBlock__inner">
        <div id='cars_works' class="works_slider">
            <div>
                <div id="slide5" class="slideContent">
                    <div class="slideContentName">BMW M8 F9x Competition</div>
                    <div class="slideContentLeft">
                        <div class="slideActiveImage">
                            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/slideActiveImageBG.png'?>" alt="slideActiveImageBG"class="slideActiveImageBG">
                            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/bmw_m8.png'?>" alt="mercedes"class="mercedesImage">
                        </div>
                    </div>
                    <div class="slideContentRight">
                        <div class="stock">

                            <div class="stockContent">
                                <div class="slideContentRightHead"><?= pll_e( 'Metrics stock' ); ?></div>

                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            52.01<?= pll_e( 'Metrics m' ); ?>
                                        </p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            3.41<?= pll_e( 'Metrics s' ); ?>
                                        </p>
                                        <p class="showGraphItemBot">
                                            100-200 <?= pll_e( 'Metrics kmh' ); ?>
                                        </p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">0.96%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            329.29<?= pll_e( 'Metrics m' ); ?>
                                        </p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            7.56<?= pll_e( 'Metrics s' ); ?>
                                        </p>
                                        <p class="showGraphItemBot">
                                            100-200 <?= pll_e( 'Metrics kmh' ); ?>
                                        </p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">-0.30%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            1320<?= pll_e( 'Metrics ft' ); ?>
                                        </p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance ft' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            11.16<?= pll_e( 'Metrics s' ); ?>
                                        </p>
                                        <p class="showGraphItemBot">
                                            1/4 <?= pll_e( 'Metrics mil' ); ?>
                                        </p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">0.32%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="stage1">
                            <div class="stageContent">
                                <div class="slideContentRightHead"><?= pll_e( 'Metrics stage2' ); ?></div>

                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            45.12<?= pll_e( 'Metrics m' ); ?>
                                        </p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            3.00<?= pll_e( 'Metrics s' ); ?>
                                        </p>
                                        <p class="showGraphItemBot">
                                            100-200 <?= pll_e( 'Metrics kmh' ); ?>
                                        </p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">-0.66%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            259.10<?= pll_e( 'Metrics m' ); ?>
                                        </p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            5.93<?= pll_e( 'Metrics s' ); ?>
                                        </p>
                                        <p class="showGraphItemBot">
                                            100-200 <?= pll_e( 'Metrics kmh' ); ?>
                                        </p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">-0.02%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            1320<?= pll_e( 'Metrics ft' ); ?>
                                        </p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance ft' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            10.48<?= pll_e( 'Metrics s' ); ?>
                                        </p>
                                        <p class="showGraphItemBot">
                                            1/4 <?= pll_e( 'Metrics mil' ); ?>
                                        </p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">-0.67%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="slide1" class="slideContent" style="display: flex">
                    <div class="slideContentName">BMW 8 Series Coupe</div>
                    <div class="slideContentLeft">
                        <div class="slideActiveImage">
                            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/slideActiveImageBG.png'?>" alt="slideActiveImageBG"class="slideActiveImageBG">
                            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/bmw.png'?>" alt="mercedes" class="mercedesImage">
                        </div>
                    </div>
                    <div class="slideContentRight">
                        <div class="stock">

                            <div class="stockContent">
                                <div class="slideContentRightHead"><?= pll_e( 'Metrics stock' ); ?></div>
                                <div class="pokaz">
                                    <div class="pokazItem">
                                        <div class="circleRed"></div>
                                        <?= pll_e( 'Metrics speed kmh' ); ?>

                                    </div>
                                    <div class="pokazItem">
                                        <div class="circleBlue"></div>
                                        <?= pll_e( 'Metrics height m' ); ?>

                                    </div>
                                    <div class="pokazItem">
                                        <div class="circleWhite"></div>
                                        <?= pll_e( 'Metrics Acceleration g' ); ?>

                                    </div>
                                </div>
                                <div class="graph">
                                    <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/bGStock.svg'?>" alt="stock">
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            391.30
                                            <?= pll_e( 'Metrics m' ); ?>
                                        </p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            9.97 <?= pll_e( 'Metrics s' ); ?>
                                        </p>
                                        <p class="showGraphItemBot">100-200 <?= pll_e( 'Metrics kmh' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">-0.69%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="pokazNumbers">
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-110
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">0.56 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-160
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">4.44 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-120
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">1.18 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-170
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                5.46 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-130
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">1.93 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-180
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">6.54 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-140
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">2.70 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-190
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">7.71 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-150
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                3.53 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-200
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">8.97 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="stage1">
                            <div class="stageContent">
                                <div class="slideContentRightHead"><?= pll_e( 'Metrics stage2' ); ?></div>
                                <div class="pokaz">
                                    <div class="pokazItem">
                                        <div class="circleRed"></div>
                                        <?= pll_e( 'Metrics speed kmh' ); ?>

                                    </div>
                                    <div class="pokazItem">
                                        <div class="circleBlue"></div>
                                        <?= pll_e( 'Metrics height m' ); ?>

                                    </div>
                                    <div class="pokazItem">
                                        <div class="circleWhite"></div>
                                        <?= pll_e( 'Metrics Acceleration g' ); ?>

                                    </div>
                                </div>
                                <div class="graph">
                                    <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/bGStage.svg'?>" alt="stock">
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">315.82 <?= pll_e( 'Metrics m' ); ?></p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">7.28<?= pll_e( 'Metrics s' ); ?></p>
                                        <p class="showGraphItemBot">100-200 <?= pll_e( 'Metrics kmh' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">-0.44%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="pokazNumbers">
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-110
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                0.49 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-160
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                3.67 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-120
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">1.01 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-170
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">4.52 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-130
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                1.63 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-180
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                5.40 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-140
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                2.37 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-190
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                6.30 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-150
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">2.95 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-200
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">7.28 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="slide2" class="slideContent">
                    <div class="slideContentName">Mercedes - AMG C43</div>
                    <div class="slideContentLeft">
                        <div class="slideActiveImage">
                            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/slideActiveImageBG.png'?>" alt="slideActiveImageBG"
                                class="slideActiveImageBG">
                            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/mercedes.png'?>" alt="mercedes"class="mercedesImage">
                        </div>
                    </div>
                    <div class="slideContentRight">
                        <div class="stock">
                            <div class="stockContent">
                                <div class="slideContentRightHead"><?= pll_e( 'Metrics stock' ); ?></div>
                                <div class="pokaz">
                                    <div class="pokazItem">
                                        <div class="circleRed"></div>
                                        <?= pll_e( 'Metrics speed kmh' ); ?>

                                    </div>
                                    <div class="pokazItem">
                                        <div class="circleBlue"></div>
                                        <?= pll_e( 'Metrics height m' ); ?>

                                    </div>
                                    <div class="pokazItem">
                                        <div class="circleWhite"></div><?= pll_e( 'Metrics Acceleration g' ); ?></div>
                                </div>
                                <div class="graph">
                                    <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/mGStock.svg'?>" alt="stock">
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">81.43<?= pll_e( 'Metrics m' ); ?></p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">5.41<?= pll_e( 'Metrics s' ); ?></p>
                                        <p class="showGraphItemBot">100-200 <?= pll_e( 'Metrics kmh' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">-0.49%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="pokazNumbers">
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-110
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">0.37 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-160
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">2.90 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-120
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">0.91 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-170
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                3.41 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-130
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                1.43 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-180
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">4.08 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-140
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">1.89 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-190
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">4.70 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-150
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">2.41 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-200
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">5.41 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                0-100 (1ft)
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">5.61 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="stage1">
                            <div class="stageContent">
                                <div class="slideContentRightHead"><?= pll_e( 'Metrics stage2' ); ?></div>
                                <div class="pokaz">
                                    <div class="pokazItem">
                                        <div class="circleRed"></div>
                                        <?= pll_e( 'Metrics speed kmh' ); ?>

                                    </div>
                                    <div class="pokazItem">
                                        <div class="circleBlue"></div>
                                        <?= pll_e( 'Metrics height m' ); ?>

                                    </div>
                                    <div class="pokazItem">
                                        <div class="circleWhite"></div>
                                        <?= pll_e( 'Metrics Acceleration g' ); ?>

                                    </div>
                                </div>
                                <div class="graph">
                                    <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/mGStage.svg'?>" alt="stock">
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">67.93<?= pll_e( 'Metrics m' ); ?></p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">4.54<?= pll_e( 'Metrics s' ); ?></p>
                                        <p class="showGraphItemBot">100-200 <?= pll_e( 'Metrics kmh' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">1.47%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="pokazNumbers">
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-110
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">0.37 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-160
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                2.90 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-120
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                0.91 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-170
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                3.41 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-130
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                1.43 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-180
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                4.08 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-140
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                1.89 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-190
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                4.70 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-150
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                2.41 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-200
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                5.41 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                0-100 (1ft)
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                5.61 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="slide3" class="slideContent">
                    <div class="slideContentName">Volkswagen Golf GTI 220 Hp</div>
                    <div class="slideContentLeft">
                        <div class="slideActiveImage">
                            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/slideActiveImageBG.png'?>" alt="slideActiveImageBG"class="slideActiveImageBG">
                            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/volkswagen.png'?>" alt="mercedes"class="mercedesImage">
                        </div>

                    </div>
                    <div class="slideContentRight">
                        <div class="stock">

                            <div class="stockContent">
                                <div class="slideContentRightHead"><?= pll_e( 'Metrics stock' ); ?></div>
                                <div class="pokaz">
                                    <div class="pokazItem">
                                        <div class="circleRed"></div><?= pll_e( 'Metrics speed kmh' ); ?></div>
                                    <div class="pokazItem">
                                        <div class="circleBlue"></div><?= pll_e( 'Metrics height m' ); ?></div>
                                    <div class="pokazItem">
                                        <div class="circleWhite"></div><?= pll_e( 'Metrics Acceleration g' ); ?></div>
                                </div>
                                <div class="graph">
                                    <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/vGStock.svg'?>" alt="stock">
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            545.21<?= pll_e( 'Metrics m' ); ?>
                                        </p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            12.32<?= pll_e( 'Metrics s' ); ?>
                                        </p>
                                        <p class="showGraphItemBot">
                                            100-200 <?= pll_e( 'Metrics kmh' ); ?>
                                        </p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">0.44%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="pokazNumbers">
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-110
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                0.74 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-160
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                5.71 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-120
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                1.52 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-170
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                7.01 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-130
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                2.38 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-180
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                8.46 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-140
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                3.42 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-190
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                10.23 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-150
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                4.48 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-200
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                12.32 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="stage1">
                            <div class="stageContent">
                                <div class="slideContentRightHead"><?= pll_e( 'Metrics stage2' ); ?></div>
                                <div class="pokaz">
                                    <div class="pokazItem">
                                        <div class="circleRed"></div><?= pll_e( 'Metrics speed kmh' ); ?></div>
                                    <div class="pokazItem">
                                        <div class="circleBlue"></div><?= pll_e( 'Metrics height m' ); ?></div>
                                    <div class="pokazItem">
                                        <div class="circleWhite"></div><?= pll_e( 'Metrics Acceleration g' ); ?></div>
                                </div>
                                <div class="graph">
                                    <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/vGStage.svg'?>" alt="stock">
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">493.64<?= pll_e( 'Metrics m' ); ?></p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">11.21<?= pll_e( 'Metrics s' ); ?></p>
                                        <p class="showGraphItemBot">100-200 <?= pll_e( 'Metrics kmh' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">0.43%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="pokazNumbers">
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-110
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                0.72 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-160
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">5.30 <?= pll_e( 'Metrics s' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-120
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                1.50 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-170
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                6.47 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-130
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                2.27 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-180
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                7.88 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-140
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                3.15 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-190
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                9.44 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-150
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                4.21 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-200
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                11.21 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="slide4" class="slideContent">
                    <div class="slideContentName">Porsche Panamera GTS</div>
                    <div class="slideContentLeft">
                        <div class="slideActiveImage">
                            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/slideActiveImageBG.png'?>" alt="slideActiveImageBG"class="slideActiveImageBG">
                            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/porche.png'?>" alt="mercedes"class="mercedesImage">
                        </div>
                    </div>
                    <div class="slideContentRight">
                        <div class="stock">

                            <div class="stockContent">
                                <div class="slideContentRightHead"><?= pll_e( 'Metrics stock' ); ?></div>
                                <div class="pokaz">
                                    <div class="pokazItem">
                                        <div class="circleRed"></div><?= pll_e( 'Metrics speed kmh' ); ?></div>
                                    <div class="pokazItem">
                                        <div class="circleBlue"></div><?= pll_e( 'Metrics height m' ); ?></div>
                                    <div class="pokazItem">
                                        <div class="circleWhite"></div><?= pll_e( 'Metrics Acceleration g' ); ?></div>
                                </div>
                                <div class="graph">
                                    <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/pGStock.svg'?>" alt="stock">
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            508.24<?= pll_e( 'Metrics m' ); ?>
                                        </p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            11.57<?= pll_e( 'Metrics s' ); ?>
                                        </p>
                                        <p class="showGraphItemBot">
                                            100-200 <?= pll_e( 'Metrics kmh' ); ?>
                                        </p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">-0.47%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="pokazNumbers">
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-110
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                0.70 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-160
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                5.60 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-120
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                1.49 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-170
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                6.84 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-130
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                2.35 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-180
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                8.23 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-140
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                3.37 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-190
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                9.79 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-150
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                4.42 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-200
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                11.57<?= pll_e( 'Metrics s' ); ?> s
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="stage1">
                            <div class="stageContent">
                                <div class="slideContentRightHead"><?= pll_e( 'Metrics stage2' ); ?></div>
                                <div class="pokaz">
                                    <div class="pokazItem">
                                        <div class="circleRed"></div><?= pll_e( 'Metrics speed kmh' ); ?></div>
                                    <div class="pokazItem">
                                        <div class="circleBlue"></div><?= pll_e( 'Metrics height m' ); ?></div>
                                    <div class="pokazItem">
                                        <div class="circleWhite"></div><?= pll_e( 'Metrics Acceleration g' ); ?>

                                    </div>
                                </div>
                                <div class="graph">
                                    <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/pGStage.svg'?>" alt="stock">
                                </div>
                                <div class="showGraph">
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item1.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            324.50<?= pll_e( 'Metrics m' ); ?>
                                        </p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics Distance m' ); ?></p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item2.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">
                                            7.45<?= pll_e( 'Metrics s' ); ?>
                                        </p>
                                        <p class="showGraphItemBot">
                                            100-200 <?= pll_e( 'Metrics kmh' ); ?>
                                        </p>
                                    </div>
                                    <div class="showGraphItem">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/item3.png'?>" alt="showItem">
                                        <p class="showGraphItemTop">-0.31%</p>
                                        <p class="showGraphItemBot"><?= pll_e( 'Metrics slope' ); ?></p>
                                    </div>
                                </div>
                                <div class="pokazNumbers">
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-110
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                0.51 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-160
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                3.77 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-120
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                1.02 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-170
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                4.56 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-130
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                1.62 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-180
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                5.37 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-140
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                2.30 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-190
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                6.36 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pokazNumbersLine">
                                        <div class="item1">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-150
                                            </p>
                                        </div>
                                        <div class="item2">
                                            <p class="pokazInfo">
                                                3.03 <?= pll_e( 'Metrics s' ); ?>
                                            </p>
                                        </div>
                                        <div class="item3">
                                            <p class="pokazInfo">
                                                <span class="whiteCircle"></span>
                                                100-200
                                            </p>
                                        </div>
                                        <div class="item4">
                                            <p class="pokazInfo">
                                                7.45 <?= pll_e( 'Metrics s' ); ?>
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
        <div class="slideButtons">
            <div class="slideLeft" >
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/slideLeft.png'?>" alt="slideLeft" class="slideLeftImg">
            </div>
            <div class="worksScroll">
                <div class="here" id="here_works">01</div>
                <div class="divider">
                    <div class="activePos" id="activePos_works"></div>
                </div>
                <div class="total" id="total_works">04</div>
            </div>
            <div class="slideRight" >
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/block3/slideRight.png'?>" alt="slideRight" class="slideRightImg">
            </div>
        </div>
    </div>
</div>



<div id="block5" class="sevenBlock">
    <div class="sevenBlockHead only_desktop"><?= pll_e( 'Block5 bmwinfo title' ); ?></div>
    <img src="<?= get_template_directory_uri( ).'/assets/images/main/block7/sevenGradient.svg'?>" alt="sevenGradient" class="sevenGradient">
    <div class="carsContentWrap">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block7/carBig.png'?>" alt="car" class="carBig">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block7/carsTripple.png'?>" alt="cars" class="carsTriple">
        <div class="bmwInfoWrap">
            <div class="bmwInfoHead only_mobile"><?= pll_e( 'Block5 bmwinfo title' ); ?></div>
            <div class="before">
                <div class="word"><?= pll_e( 'Block5 bmwinfo before' ); ?></div>
                <div class="block1">
                    <div class="blockHead"><?= pll_e( 'Block5 bmwinfo stock' ); ?></div>
                    <div class="blockContent"><?= pll_e( 'Block5 bmwinfo moment1' ); ?></div>
                </div>
                <div class="block2">
                    <div class="blockHead"><?= pll_e( 'Block5 bmwinfo stage2' ); ?></div>
                    <div class="blockContent"><?= pll_e( 'Block5 bmwinfo moment2' ); ?></div>
                </div>
            </div>
            <div class="after">
                <div class="word"><?= pll_e( 'Block5 bmwinfo after' ); ?></div>
                <div class="block1">
                    <div class="blockHead"><?= pll_e( 'Block5 bmwinfo stock' ); ?></div>
                    <div class="blockContent">
                        <p>
                            <span class="whiteCircle"></span>
                            0-100........3,3 <?= pll_e( 'Metrics s' ); ?>
                        </p>
                        <p>
                            <span class="whiteCircle"></span>
                            100-200....7,4 <?= pll_e( 'Metrics s' ); ?>
                        </p>
                        <p>
                            <span class="whiteCircle"></span>
                            402............11 <?= pll_e( 'Metrics s' ); ?>
                        </p>
                    </div>
                </div>
                <div class="block2">
                    <div class="blockHead">
                        <?= pll_e( 'Block5 bmwinfo stage2' ); ?>
                    </div>
                    <div class="blockContent">
                        <p>
                            <span class="whiteCircle"></span>
                            0-100.......2,7-2,8 <?= pll_e( 'Metrics s' ); ?>
                        </p>
                        <p>
                            <span class="whiteCircle"></span>
                            100-200...5,3-5,5 <?= pll_e( 'Metrics s' ); ?>
                        </p>
                        <p>
                            <span class="whiteCircle"></span>
                            402......10,1-10,2 <?= pll_e( 'Metrics s' ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mostFast">
        <div class="mostFastLeft">
            <div class="mostFastLeftHead"><?= pll_e( 'Block5 mostfast title' ); ?></div>
            <div class="mostFastLeftInfo"><?= pll_e( 'Block5 mostfast text' ); ?></div>
        </div>
        <div class="mostFastRight">
            <img src="<?= get_template_directory_uri( ).'/assets/images/main/block7/star.svg'?>" alt="star" class="starImage">
            <iframe class="video" src="https://www.youtube.com/embed/DCWhlCnK5DQ" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>
<div id="block6" class="eighthBlock">
    <img src="<?= get_template_directory_uri( ).'/assets/images/main/block8/eightGradient.svg'?>" alt="gradient" class="eightGradient">
    <div class="sendForm">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/block8/formBg.svg'?>" alt="formBg" class="formBg">
        <div class="formData">
            <?php
                if (pll_current_language() == 'ru') {
                    echo do_shortcode( '[cf7form cf7key="%d0%b1%d0%b5%d0%b7-%d0%bd%d0%b0%d0%b7%d0%b2%d0%b0%d0%bd%d0%b8%d1%8f-3"]' );
                }
                if (pll_current_language() == 'ua') {
                    echo do_shortcode( '[cf7form cf7key="%d1%83%d0%ba%d1%80-%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b"]');
                }
            ?>
        </div>
    </div>
</div>


<!-- <div class="showScroll">
    <div class="here" id="here">01</div>
    <div class="divider">
        <div class="activePos" id="activePos"></div>
    </div>
    <div class="total" id="total">06</div>
</div> -->
<!-- <div class="popups" style="display: none">
    <div class="popupBlock">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/popups/popupBg.png'?>" alt="popBg" class="popBg">
        <img src="<?= get_template_directory_uri( ).'/assets/images/main/popups/close.svg'?>" alt="close" class="close">

        <div class="success" style="display: none">
            <div class="popupImg">
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/popups/success.png'?>" alt="success">
            </div>
            <div class="popupContent">
                Заявка принята,
                <br>
                в ближайшее время
                <br>
                менеджер свяжется с вами
            </div>
            <div class="popupButton">
                <button class="redButton">
                    <p class="redButtonText">ОК</p>
                </button>
            </div>
        </div>

        <div class="error" style="display: none">
            <div class="popupImg">
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/popups/error.png'?>" alt="error">
            </div>
            <div class="popupContent">
                Пожалуйста, внесите
                <br>
                корректные данные
            </div>
            <div class="popupButton">
                <button class="redButton">
                    <p class="redButtonText">ОК</p>
                </button>
            </div>
        </div>

        <div class="leave">
            <div class="popupHead">
                ОСТАВЬТЕ ЗАЯВКУ, ЧТОБЫ МЫ ПОДОБРАЛИ НАИЛУЧШЕЕ РЕШЕНИЕ
                <br>
                ДЛЯ ВАШЕГО АВТО И ПРОСЧИТАЛИ СТОИМОСТЬ РАБОТ
            </div>

            <div class="popupContent">
                <input type="text" placeholder="Имя">
                <input type="text" placeholder="Телефон">
            </div>

            <div class="popupButton">
                <button class="redButton">
                    <p class="redButtonText">ОТПРАВИТЬ</p>
                </button>
            </div>
        </div>

    </div>
</div> -->
<?php get_footer(); ?>