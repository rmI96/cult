<?php
/*
Template Name: WBN youtube trends
*/
?>

<?php get_header() ?>

<div class="section banner type2">
    <div class="bg" style="background-image: url('<?php the_field('main_banner_background') ?>')"></div>
    <div class="container-cs md">
        <div class="banner__inner">
            <div class="banner__content">
                <div class="text-lg-0 subtitle color-white sp-mb-38 sp-mb-sm-20">11 <?php the_field('main_banner_text_top') ?></div>
                <div class="h1 title color-white fw-bold sp-mb-38 sp-mb-sm-20"><?php the_field('main_banner_title') ?></div>
                <div class="banner__content__bt">
                    <div class="description color-white text-lg sp-mb-100 sp-mb-xl-20 sp-mb-sm-40"><?php the_field('main_banner_subtitle') ?></div>
                    <div class="banner__form">
                        <div class="banner__form__img">
                            <div class="image-wrapper">
                                <img src="<?php the_field('main_banner_image') ?>" alt="image">
                            </div>
                        </div>
                        <!--
                        <form action="#" class="sp-mb-25">
                            <div class="sp-mb-25">
                                <div class="row row-5">
                                    <div class="col-lg-6">
                                        <div class="input-wrapper sp-mb-lg-10">
                                            <input class="input type2" type="text" placeholder="Введите ваше имя">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-wrapper">
                                            <input class="input type2" type="text" placeholder="Введите ваш эл. адрес">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block"><?php the_field('main_banner_btn_text') ?></button>
                        </form>
                        <label class="global-confirm-checkbox-block color-white"><input type="checkbox"> <span class="checkbox-text"><?php the_field('main_banner_agreement') ?></span></label>
                        -->
                        <?php echo do_shortcode( '[contact-form-7 id="d727b67" title="Form (banner)"]' );  ?>
                    </div>
                </div>
            </div>
            <div class="banner__img">
                <div class="image-wrapper">
                    <img src="<?php the_field('main_banner_image') ?>" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section dark sp-pt-20 sp-pb-20">
    <div class="container-cs md">
        <div class="text-center color-white fw-medium ff-2 text-lg-0 sp-mb-10"><?php the_field('partners_title') ?></div>
        <?php if( have_rows('partners_logos') ): ?>
            <div class="partners-block">
                <?php while( have_rows('partners_logos') ): the_row(); ?>
                    <div class="item"><img src="<?php the_sub_field('image'); ?>" alt="logo"></div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="section sp-pt-60 sp-pt-sm-50">
    <div class="container-cs md">
        <div class="h2 color-dark text-center fw-bold ff-2 sp-mb-50 sp-mb-lg-40 sp-mb-sm-30"><?php the_field('for_whom_suitable_title') ?></div>
        <div class="sp-mb-50 sp-mb-lg-40 sp-mb-sm-30">
            <div class="row justify-content-center row-80 row-30-xl thumbnail-01__wrapper">
                <?php while( have_rows('for_whom_suitable_items') ): the_row(); ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="thumbnail-01">
                            <div class="image">
                                <img src="<?php the_sub_field('image'); ?>" alt="image">
                            </div>
                            <div class="title"><?php the_sub_field('title'); ?></div>
                            <div class="content"><?php the_sub_field('text'); ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="text-center">
            <a href="#form" class="btn btn-primary mn-400 anchor-link"><?php the_field('for_whom_suitable_btn') ?></a>
        </div>
    </div>
</div>
<div class="section sp-pt-90 sp-pt-lg-80 sp-pt-sm-60">
    <div class="container-cs sm">
        <div class="h2 color-dark text-center fw-bold ff-2 sp-mb-15 sp-mb-lg-40 sp-mb-sm-30"><?php the_field('why_important_title') ?></div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7">
                <div class="text text-lg-0 ff-2 mx-500">
                    <?php the_field('why_important_text') ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="slide-image">
                    <div class="slide-image__inner">
                        <div class="swiper-entry st-default">
                            <div class="swiper-container swiper-container-free-mode" data-options='{ "loop":true, "autoplay": { "delay": 3000 }, "autoHeight": true, "spaceBetween": 20 }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slide-image__item">
                                            <div class="bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/an-photo-01.webp')"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slide-image__item">
                                            <div class="bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/an-photo-02.webp')"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slide-image__item">
                                            <div class="bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/an-photo-03.webp')"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section sp-pt-90 sp-pt-lg-80 sp-pt-sm-60">
    <div class="container-cs md">
        <div class="h2 color-dark text-center fw-bold ff-2 sp-mb-60 sp-mb-lg-40 sp-mb-sm-30"><?php the_field('webinar_you_will_title') ?></div>
        <?php if( have_rows('webinar_you_will_items') ): ?>
            <div class="sp-mb-80 sp-mb-lg-40 sp-mb-sm-30">
                <div class="row row-40 justify-content-between thumbnail-06__wrapper">
                    <?php while( have_rows('webinar_you_will_items') ): the_row(); ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="thumbnail-06">
                                <div class="number"><?php the_sub_field('number'); ?></div>
                                <div class="content"><?php the_sub_field('text'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="text-center">
            <a href="#form" class="btn btn-primary mn-400 anchor-link"><?php the_field('webinar_you_will_btn') ?></a>
        </div>
    </div>
</div>
<div class="section sp-pt-100 sp-pt-lg-80 sp-pb-50 sp-pt-sm-60">
    <div class="container-cs md">
        <div class="sp-mb-80 sp-mb-lg-40 sp-mb-sm-30">
            <div class="row">
                <div class="col-lg-5">
                    <div class="h3 color-dark fw-bold ff-2 sp-mb-20"><?php the_field('my_way_title') ?></div>
                    <div class="text-lg-1 fw-semibold sp-mb-10"><?php the_field('my_way_subtitle') ?></div>
                    <div class="text text-lg-0 sp-mb-20">
                        <?php the_field('my_way_text') ?>
                    </div>
                    <div class="text text-lg-0 d-none-lg">
                        <?php the_field('my_way_text2') ?>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-wrapper st0 sp-mb-lg-20">
                        <img src="<?php the_field('my_way_image') ?>" alt="image">
                    </div>
                    <div class="text text-lg-0 d-none d-block-lg">
                        <?php the_field('my_way_text2') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#form" class="btn btn-primary mn-400 anchor-link"><?php the_field('my_way_button') ?></a>
        </div>
    </div>
</div>
<div class="section container-cs md">
    <div class="result-bl type2">
        <div class="h2-1 color-white fw-bold text-center sp-mb-50 sp-mb-lg-40 sp-mb-sm-30"><?php the_field('main_result_title') ?></div>
        <?php if( have_rows('main_result_items') ): ?>
            <div class="row row-100 justify-content-center row-30-xl thumbnail-05__wrapper">
                <?php while( have_rows('main_result_items') ): the_row(); ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="thumbnail-05">
                            <div class="image"><img src="<?php the_sub_field('image'); ?>" alt="image"></div>
                            <div class="content">
                                <?php the_sub_field('text'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<!--
<div class="section sp-pt-100 sp-pt-lg-80 sp-pt-sm-60">
    <div class="container-cs md">
        <div class="row">
            <div class="col-lg-4">
                <div class="h2 color-dark fw-bold ff-2 sp-mb-60"><?php the_field('reviews_title') ?></div>
                <a href="#form" class="btn btn-primary mn-400 anchor-link"><?php the_field('reviews_btn') ?></a>
            </div>
            <div class="col-lg-8">

            </div>
        </div>
    </div>
</div>
-->

<div class="section sp-pt-100 sp-pt-lg-80 sp-pt-sm-60">
    <div class="container-cs md">
        <div class="h2 color-dark fw-bold ff-2 text-center sp-mb-60 sp-mb-lg-40 sp-mb-sm-30"><?php the_field('reviews_title') ?></div>
        <div class="sp-mb-35">
            <div class="swiper-entry style-02">
                <div class="swiper-container swiper-container-free-mode" data-options='{ "slidesPerView": 3, "autoHeight": true, "loop":true, "spaceBetween": 80, "breakpoints": {"575": { "slidesPerView": 1, "spaceBetween": 20 }, "980": { "slidesPerView": 2, "spaceBetween": 40 } } }'>
                    <div class="swiper-wrapper">
                        <?php while( have_rows('reviews_items') ): the_row(); ?>
                            <div class="swiper-slide">
                                <div class="thumbnail-07">
                                    <a href="<?php the_sub_field('url'); ?>" class="image"><div class="bg" style="background-image: url('<?php the_sub_field('image'); ?>')"></div></a>
                                    <div class="info">
                                        <a href="<?php the_sub_field('url'); ?>" class="name"><?php the_sub_field('name'); ?> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" xml:space="preserve"><circle cx="50" cy="50" r="40" fill="#606060"/><path d="M47.3 66.4 73.7 40c1.8-1.8 1.8-4.6 0-6.4-1.8-1.8-4.6-1.8-6.4 0L44.1 56.8 32.7 45.4c-1.8-1.8-4.6-1.8-6.4 0-1.8 1.8-1.8 4.6 0 6.4l14.6 14.6c.9.9 2 1.3 3.2 1.3s2.3-.5 3.2-1.3z" fill="#fff"/></svg></span></a>
                                        <a href="<?php the_sub_field('url'); ?>" class="channel text-md fw-medium"><?php the_sub_field('nickname'); ?></a>
                                    </div>
                                    <div class="text-md fw-medium"><?php the_sub_field('info'); ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="swiper-controls">
                    <div class="swiper-button-prev">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)"><path d="M10 20a10 10 0 1 0 0-20 10 10 0 0 0 0 20Zm1.289-15.7 1.422 1.4-4.3 4.344 4.289 4.245-1.4 1.422-5.714-5.648L11.289 4.3Z" fill="#000"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h20v20H0z"/></clipPath></defs></svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)"><path d="M10 20a10 10 0 1 0 0-20 10 10 0 0 0 0 20ZM8.711 4.3l5.7 5.766L8.7 15.711l-1.4-1.422 4.289-4.242-4.3-4.347 1.422-1.4Z" fill="#000"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h20v20H0z"/></clipPath></defs></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-primary mn-300" href="#form"><?php the_field('reviews_btn') ?></a>
        </div>
    </div>
</div>

<div id="form" class="section sp-pt-100 sp-pt-lg-80 sp-pt-sm-60">
    <div class="container-cs sm">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5">
                <div class="h2 color-dark fw-bold ff-2 sp-mb-45 sp-mb-lg-20"><?php the_field('form_title') ?></div>
                <div class="text-lg-0 sp-mb-lg-28"><?php the_field('form_subtitle') ?></div>
            </div>
            <div class="col-lg-6">
                <form action="#" class="sp-mb-25">
                    <div class="sp-mb-25">
                        <div class="input-wrapper sp-mb-25">
                            <input class="input type2" type="text" placeholder="Введите ваше имя">
                        </div>
                        <div class="input-wrapper">
                            <input class="input type2" type="text" placeholder="Введите ваш эл. адрес">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block"><?php the_field('form_btn') ?></button>
                </form>
                <label class="global-confirm-checkbox-block"><input type="checkbox"> <span class="checkbox-text"><?php the_field('form_agreement') ?></span></label>
            </div>
        </div>
    </div>
</div>
<div class="section position-relative overflow-hidden sp-pt-120 sp-pt-lg-60 sp-pt-sm-50 sp-pb-50 sp-pb-lg-0">
    <div class="decor-wrapper">
        <div class="decor ps-01"><img src="<?php the_field('author_course_image') ?>" alt="image"></div>
    </div>
    <div class="container-cs">
        <div class="h2 color-dark text-center fw-bold ff-2 sp-mb-76 sp-mb-lg-40 sp-mb-sm-30"><?php the_field('author_course_title') ?></div>
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="text-lg-1 fw-bold color-dark sp-mb-28 sp-mb-sm-20"><?php the_field('author_course_name') ?></div>
                <div class="text-md fw-bold color-dark sp-mb-28 sp-mb-sm-20"><?php the_field('author_course_profession') ?></div>
                <div class="text-md color-dark st-list-tp1">
                    <?php the_field('author_course_text') ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="author-advantages__wrapper">
                    <?php if( have_rows('author_course_achievement') ): ?>
                        <div class="author-advantages">
                            <?php while( have_rows('author_course_achievement') ): the_row(); ?>
                                <div class="author-advantages__item">
                                    <a class="title" href="#">
                                        <span class="icon"><img src="<?php the_sub_field('icon'); ?>" alt="icon"></span>
                                        <?php the_sub_field('title'); ?>
                                    </a>
                                    <div class="description"><?php the_sub_field('description'); ?></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <div class="author-advantages__image">
                        <div class="image-wrapper"><img src="<?php the_field('author_course_image') ?>" alt="image"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>
