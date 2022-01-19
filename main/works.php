<?php
/*
Template Name: Works
*/
?>

<?php get_header(); ?>

<div class="works_block1">
    <div class="works_block1_headline"><?= pll_e( 'Works title' ); ?></div>
    <?php
        $loop = CFS()->get('works_cards');
        foreach ($loop as $element){
            ?>
        <div class="works_block1_item">
            <div class="works_block1_item_firstcol">
                <div class="works_block1_item_name"><?= $element['works_auto_name'] ?></div>
                <div class="works_block1_item_text "><?= $element['works_auto_firstcol'] ?></div>
                <?php
                    if(!$element['stock_stage_position']){
                        $loop_stock = $element['stock'];
                        $loop_stage = $element['stage'];
                        if(!empty($loop_stage)&& !empty($loop_stock)){
                        ?>
                        <div class="works_block1_item_stockstage">
                            <div class="works_block1_item_stockstage_text">
                                STOCK
                            </div>
                            <div class="works_block1_item_stockstage_inputs">
                            <?php

                                foreach($loop_stock as $element_stock){ ?>
                                    <div class="works_block1_item_stockstage_inputs_row"><?= $element_stock['stock_row'] ?></div>
                                <?php }
                            ?>
                            </div>
                            <div class="works_block1_item_stockstage_text">
                                Stage 1
                            </div>
                            <div class="works_block1_item_stockstage_inputs">
                            <?php
                                foreach($loop_stage as $element_stage){ ?>
                                    <div class="works_block1_item_stockstage_inputs_row"><?= $element_stage['stage_row'] ?></div>
                                <?php }
                            ?>
                            </div>

                        </div>
                    <?php
                        }
                }?>
            </div>
            <div class="works_block1_item_secondcol">
                <div class="works_block1_item_text"><?= $element['works_auto_text'] ?></div>
                <?php
                    if($element['stock_stage_position']){
                        $loop_stock = $element['stock'];
                        $loop_stage = $element['stage'];
                        if(!empty($loop_stage)&& !empty($loop_stock)){
                        ?>
                        <div class="works_block1_item_stockstage">
                            <div class="works_block1_item_stockstage_text">
                                STOCK
                            </div>
                            <div class="works_block1_item_stockstage_inputs">
                            <?php
                                foreach($loop_stock as $element_stock){ ?>
                                    <div class="works_block1_item_stockstage_inputs_row"><?= $element_stock['stock_row'] ?></div>
                                <?php }
                            ?>
                            </div>
                            <div class="works_block1_item_stockstage_text">
                                Stage 1
                            </div>
                            <div class="works_block1_item_stockstage_inputs">
                            <?php
                                foreach($loop_stage as $element_stage){ ?>
                                    <div class="works_block1_item_stockstage_inputs_row"><?= $element_stage['stage_row'] ?></div>
                                <?php }
                            ?>
                            </div>

                        </div>
                        <?php
                        }
                }?>
            </div>
            <?php
                $loop_video = $element['works_auto_video_array'];
                if(!empty($loop_video)){
                    foreach($loop_video as $element_video){
            ?>
                <div class="works_block1_item_video" style="width:<?= $element_video['works_video_width'].'%'?>">
                    <iframe src="<?= $element_video['works_auto_video_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php
                }
            }
            ?>
            <?php
                $loop_photo = $element['works_auto_photo_array'];
                if(!empty($loop_photo)){
                    foreach($loop_photo as $element_photo){
            ?>
                <div class="works_block1_item_img <?php
                if($element_photo['works_photo_width_small'])
                { echo 'works_img_small'; }
                ?>" style="width:<?= $element_photo['works_photo_width'].'%'?>">
                    <img class="works_block1_item_img_obj" src="<?= $element_photo['works_photo'] ?>"/>
                </div>
                <?php
                }
            }
            ?>
        </div>
            <?php
        }
    ?>
</div>
<?php get_footer(); ?>