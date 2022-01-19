<?php
/*
Template Name: ChipTuning
*/
?>

<?php get_header(); ?>
<div class="sixthBlock">
    <img src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block1/sixBG.png'?>" alt="bg" class="sixthBlockBG">
    <div class="sixBlockContent">
        <div class="sixBlockContentHead">
            <div class="ask"><?= pll_e( 'Block4 ask title' ); ?>

            </div>
            <div class="answer"><?= pll_e( 'Block4 ask text' ); ?>

            </div>
        </div>
        <div class="carsWrap">
            <div class="carWrap">
                <img src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block1/car1.png'?>" alt="car">
            </div>
            <div class="carWrap">
                <img src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block1/car2.png'?>" alt="car">
            </div>
            <div class="carWrap">
                <img src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block1/car3.png'?>" alt="car">
            </div>
        </div>
        <div class="smallInfo"><?= pll_e( 'Block4 services title' ); ?>

        </div>
        <div class="blocks4">
            <div class="blocks4Block blocks4Block1">
                <div class="blocks4BlockHead"><?= pll_e( 'Block4 services text1' ); ?>

                </div>
                <div class="blocks4BlockContent"><?= pll_e( 'Block4 services text2' ); ?>

                </div>
            </div>
            <div class="blocks4Block blocks4Block2">
                <div class="blocks4BlockHead"><?= pll_e( 'Block4 services text3' ); ?>

                </div>
            </div>
            <div class="blocks4Block blocks4Block3">
                <div class="blocks4BlockHead"><?= pll_e( 'Block4 services text4' ); ?>

                </div>
            </div>
            <div class="blocks4Block blocks4Block4">
                <div class="blocks4BlockHead"><?= pll_e( 'Block4 services text5' ); ?>

                </div>
            </div>
        </div>
        <div class="blocks2">
            <div class="blocks2Block blocks2Block1">
                <div class="blocks2BlockHead"><?= pll_e( 'Block4 services text6' ); ?>

                </div>
            </div>
            <div class="blocks2Block blocks2Block2">
                <div class="blocks2BlockHead"><?= pll_e( 'Block4 services text7' ); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="block4" class="fifthBlock">
    <div class="fifthBlockHead">
    <?= pll_e( 'Block4 title' ); ?>

    </div>
    <div class="selectsWrap">
        <select name="mark" id="mark" onchange="setModels()">
            <option disabled selected>Марка</option>
        </select>
        <select name="model" id="model" disabled onchange="setYears()">
            <option disabled selected>
    <?= pll_e( 'Block4 model' ); ?></option>
        </select>
        <select name="year" id="year" disabled onchange="setMotors()">
            <option disabled selected>
    <?= pll_e( 'Block4 year' ); ?></option>
        </select>
        <select name="motor" id="motor" disabled onchange="setData()">
            <option disabled selected>
    <?= pll_e( 'Block4 motor' ); ?></option>
        </select>
    </div>
</div>
<div class="fifthBlockSecondary" id="fifthBlockSecondary">
    <div class="fifthBlockSecondaryHead">
        <div class="stages" id="stagesList">
        </div>
        <div class="graphSecondary" id="graphSecondary" onclick="openGraph()">
            <span>
                <img src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block3/graphGrey.svg'?>" alt="graph" class="graphImage" id="graphImage">
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
        <div class="orderInfo"><?= pll_e( 'Block4 order title' ); ?>

        </div>
        <div class="orderButton">
            <a href="#block6" class="redButton">
                <p class="redButtonText"><?= pll_e( 'Block4 order btn' ); ?>

                </p>
            </a>
        </div>
    </div>
</div>
<div class="chip_description">
    <div class="chip_description_inner inner1">
        <img class="chip_description_inner_photo" src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block4/description_photo1.png'?>" alt="">
        <div class="chip_description_inner_text"><?= pll_e( 'Chiptuning description text1' );?></div>
    </div>

    <div class="chip_description_inner inner2">
        <div class="chip_description_inner_text"><?= pll_e( 'Chiptuning description text2' );?></div>
        <img class="chip_description_inner_photo" src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block4/description_photo2.png'?>" alt="">
    </div>
</div>

<!-- <div id="block6" class="chip_eighthBlock">
    <div class="sendForm">
        <img src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block5/Mask.png'?>" alt="gradient" class="eightGradient">

        <div class="formData">
            <div class="sendFormHead">Остались вопросы? Оставьте заявку и наш менеджер наберет вас чтобы проконсультировать</div>
            <button class="redButton" id="formBtn">
                <p class="redButtonText">
                    Оставить заявку
                </p>
            </button>
        </div>
    </div>
</div> -->
<div  class="contacts_block3">
    <div class="sendForm">
        <img src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block5/Mask.png'?>" alt="gradient" class="eightGradient">

        <div class="formData">
            <div class="sendFormHead"><?= pll_e( 'Contacts form text' ); ?></div>
            <button class="redButton" id="formBtn">
                <p class="redButtonText">
                <?= pll_e( 'Contacts form btn' ); ?>
                </p>
            </button>
        </div>
    </div>
</div>

<div class="contacts_popup" id='popup_form' style="display: none">
    <div class="popupBlock">
        <img src="<?= get_template_directory_uri( ).'/assets/images/contacts/popup/close.png'?>" alt="close" class="close" id="formClose">
        <div class="error" id="contactform_response" style="display: none">
            <img class="popupImg" id="response_smile_link" src=""/>
            <div class="popupContent" id='contactform_response_text'>
            </div>
            <div class="popupButton">
                <button class="redButton " id="contactform_response_ok">
                    <p class="redButtonText">
                        ОК
                    </p>
                </button>
            </div>
        </div>

        <div class="leave" id="contactform" >
            <?php
                if (pll_current_language() == 'ru') {
                    echo do_shortcode( '[cf7form cf7key="%d1%80%d1%83%d1%81-%d0%b2%d1%81%d0%bf%d0%bb%d1%8b%d0%b2%d0%b0%d1%8e%d1%89%d0%b0%d1%8f"]' );
                }
                if (pll_current_language() == 'ua') {
                    echo do_shortcode( '[cf7form cf7key="%d1%83%d0%ba%d1%80-%d0%b2%d1%81%d0%bf%d0%bb%d1%8b%d0%b2%d0%b0%d1%8e%d1%89%d0%b0%d1%8f"]');
                }
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>






