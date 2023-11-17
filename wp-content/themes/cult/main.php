<?php
/*
Template Name: main
*/
?>

<?php get_header() ?>

<div class="container-cs">

    <!-- CONTENT -->
    <div class="sp-pt-60 sp-pb-60 sp-pt-lg-40 sp-pb-lg-40">
        <div class="h2 sp-mb-20 sp-mb-lg-15"><?php the_field('main_title') ?></div>
        <div class="text sp-mb-40 sp-mb-lg-20">
            <?php the_field('main_top_text') ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <?php the_field('main_calculator') ?>
            </div>
        </div>
        <div class="text sp-pt-40 sp-pt-lg-20">
            <?php the_field('main_bottom_text') ?>
        </div>
    </div>

    <!-- COMMENTS -->
    <div class="comments-container__wpDiscuz">
        <?php comments_template() ?>
    </div>
    
</div>

<?php the_field('main_scripts') ?>

<?php get_footer(); ?>
