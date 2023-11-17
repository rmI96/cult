<?php
/*
Template Name: home
*/
?>

<?php get_header() ?>

<div class="section banner">
    <div class="bg" style="background-image: url('<?php the_field('main_banner_background') ?>')"></div>
    <div class="container-cs md">
        <div class="banner__inner">
            <div class="banner__content">
                <div class="h1 title color-white fw-bold sp-mb-38 text-center-sm sp-mb-sm-20"><?php the_field('main_banner_title') ?></div>
                <div class="banner__content__bt">
                    <div class="color-white text-lg sp-mb-100 sp-mb-xl-20 text-center-sm sp-mb-sm-40"><?php the_field('main_banner_subtitle') ?></div>
                    <div class="sp-mb-76 sp-mb-xl-38 d-none-sm">
                        <button class="btn btn-primary xl type2 btn-block mx-560 popup-open" data-rel="pop-up-01"><?php the_field('main_banner_btn_text') ?></button>
                    </div>
                    <?php if( have_rows('main_banner_options') ): ?>
                        <div class="banner__advantages ff-2">
                            <?php while( have_rows('main_banner_options') ): the_row(); ?>
                                <div class="item">
                                    <div class="subtitle"><?php the_sub_field('subtitle'); ?></div>
                                    <div class="title"><?php the_sub_field('title'); ?></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <div class="sp-mb-76 sp-mb-xl-38 d-none d-block-sm">
                        <button class="btn btn-primary xl type2 btn-block mx-560 popup-open" data-rel="pop-up-01">Принять участие</button>
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
        <?php if( have_rows('for_whom_suitable_items') ): ?>
            <div class="sp-mb-50 sp-mb-lg-40 sp-mb-sm-30">
                <div class="row row-80 row-30-xl thumbnail-01__wrapper">
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
        <?php endif; ?>
        <div class="text-center">
            <button class="btn btn-primary popup-open" data-rel="pop-up-01"><?php the_field('for_whom_suitable_btn') ?></button>
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
            <button class="btn btn-primary popup-open" data-rel="pop-up-01"><?php the_field('my_way_button') ?></button>
        </div>
    </div>
</div>
<div class="section dark sp-pt-60 sp-pb-50">
    <div class="container-cs sm">
        <div class="h2 color-white text-center fw-bold ff-2 sp-mb-76 sp-mb-lg-40 sp-mb-sm-30"><?php the_field('after_course_title') ?></div>
        <?php if( have_rows('after_course_items') ): ?>
            <div class="sp-mb-76 sp-mb-lg-40 sp-mb-sm-30">
                <div class="row row-40 thumbnail-02__wrapper">
                    <?php while( have_rows('after_course_items') ): the_row(); ?>
                        <div class="col-lg-6">
                            <div class="thumbnail-02">
                                <div class="icon"><img src="<?php the_sub_field('icon'); ?>" alt="icon"></div>
                                <div class="content">
                                    <div class="title"><?php the_sub_field('title'); ?></div>
                                    <div class="text-in"><?php the_sub_field('description'); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="text-center">
            <button class="btn btn-primary type3 popup-open" data-rel="pop-up-01"><?php the_field('after_course_btn') ?></button>
        </div>
    </div>
</div>
<div class="section sp-pt-90 sp-pt-lg-80 sp-pt-sm-60">
    <div class="container-cs sm">
        <div class="h2 color-dark text-center fw-bold ff-2 sp-mb-15"><?php the_field('course_program_title') ?></div>
        <div class="text-md ff-2 text-center sp-mb-80 sp-mb-lg-20 "><?php the_field('course_program_subtitle') ?></div>
        <div class="program__wrapper">
            <?php if( have_rows('course_program_items') ): ?>
                <div class="program__inner">
                    <?php while( have_rows('course_program_items') ): the_row(); ?>
                        <div class="program__item">
                            <div class="title"><span class="number"><?php the_sub_field('number'); ?></span> <span class="h4 fw-semibold"><?php the_sub_field('title'); ?></span></div>
                            <div class="program__item__row">
                                <div class="program__item__lf">
                                    <div class="title text-lg-1 fw-semibold color-dark sp-mb-5"><?php the_field('course_program_lesson') ?></div>
                                    <div class="content text color-dark text-md-1">
                                        <?php the_sub_field('lesson'); ?>
                                    </div>
                                </div>
                                <div class="program__item__rg">
                                    <div class="title text-lg-1 fw-semibold color-dark sp-mb-5"><?php the_field('course_program_result') ?></div>
                                    <div class="content text color-dark text-md-1">
                                        <?php the_sub_field('result'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php if( have_rows('course_program_items_hidden') ): ?>
                <div class="program__hidden">
                    <?php while( have_rows('course_program_items_hidden') ): the_row(); ?>
                        <div class="program__item">
                            <div class="title"><span class="number"><?php the_sub_field('number'); ?></span> <span class="h4 fw-semibold"><?php the_sub_field('title'); ?></span></div>
                            <div class="program__item__row">
                                <div class="program__item__lf">
                                    <div class="title text-lg-1 fw-semibold color-dark sp-mb-5"><?php the_field('course_program_lesson') ?></div>
                                    <div class="content text color-dark text-md-1">
                                        <?php the_sub_field('lesson'); ?>
                                    </div>
                                </div>
                                <div class="program__item__rg">
                                    <div class="title text-lg-1 fw-semibold color-dark sp-mb-5"><?php the_field('course_program_result') ?></div>
                                    <div class="content text color-dark text-md-1">
                                        <?php the_sub_field('result'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php if( have_rows('course_program_items_hidden') ): ?>
                <div class="text-center sp-mb-20">
                    <button class="btn btn-secondary program__btn-show-more"><span class="btn-secondary__e"></span><?php the_field('course_program_btn_show_more') ?></button>
                </div>
            <?php endif; ?>
        </div>
        <div class="text-center">
            <button class="btn btn-primary mn-400 popup-open" data-rel="pop-up-01"><?php the_field('course_program_btn') ?></button>
        </div>
    </div>
</div>
<div class="section sp-pt-150 sp-pb-120 sp-pb-lg-80 sp-pb-sm-60 sp-pt-lg-80 sp-pt-sm-60">
    <div class="container-cs md">
        <div class="sp-mb-100 sp-mb-lg-40 sp-mb-sm-30">
            <div class="row row-160 row-60-lg benefits-course">
                <div class="col-sm-6">
                    <div class="h3-1 fw-bold ff-3 text-center sp-mb-38 sp-mb-sm-30"><?php the_field('benefits_course_left_title') ?></div>
                    <?php if( have_rows('benefits_course_items_left') ): ?>
                        <div class="thumbnail-03__wrapper">
                            <?php while( have_rows('benefits_course_items_left') ): the_row(); ?>
                                <div class="thumbnail-03">
                                    <div class="image">
                                        <img src="<?php the_sub_field('image'); ?>" alt="image">
                                    </div>
                                    <div class="content"><?php the_sub_field('text'); ?></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <div class="h3-1 fw-bold ff-3 text-center sp-mb-38"><?php the_field('benefits_course_right_title') ?></div>
                    <?php if( have_rows('benefits_course_items_right') ): ?>
                        <div class="row row-40 thumbnail-04__wrapper">
                            <?php while( have_rows('benefits_course_items_right') ): the_row(); ?>
                                <div class="col-lg-6">
                                    <div class="thumbnail-04">
                                        <div class="image">
                                            <img src="<?php the_sub_field('image'); ?>" alt="image">
                                        </div>
                                        <div class="content"><?php the_sub_field('text'); ?></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary mn-400 popup-open" data-rel="pop-up-01"><?php the_field('benefits_course_btn') ?></button>
        </div>
    </div>
</div>
<div class="section container-cs md">
    <div class="result-bl">
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
<div class="sp-pt-100 sp-pt-lg-80 sp-pt-sm-60"></div>
<!--
<div class="section sp-pt-100 sp-pb-100 sp-pt-lg-80 sp-pb-lg-80 sp-pt-sm-60 sp-pb-sm-60">
    <div class="container-cs md">
        <div class="row">
            <div class="col-lg-4">
                <div class="h2 color-dark fw-bold ff-2 sp-mb-60"><?php the_field('reviews_title') ?></div>
                <button class="btn btn-primary mn-300 popup-open" data-rel="pop-up-01"><?php the_field('reviews_btn') ?></button>
            </div>
            <div class="col-lg-8"></div>
        </div>
    </div>
</div>
-->
<div class="section sp-pt-100 sp-pb-100 sp-pt-lg-80 sp-pb-lg-80 sp-pt-sm-60 sp-pb-sm-60">
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
            <button class="btn btn-primary mn-300 popup-open" data-rel="pop-up-01"><?php the_field('reviews_btn') ?></button>
        </div>
    </div>
</div>

<div class="section">
    <div class="container-cs md">
        <?php if( have_rows('reviews_slider_items') ): ?>
            <div class="swiper-entry style-01">
                <div class="swiper-container swiper-container-free-mode" data-options='{ "autoHeight": true, "loop":true, "effect": "fade", "autoHeight": true, "spaceBetween": 20 }'>
                    <div class="swiper-wrapper">
                        <?php while( have_rows('reviews_slider_items') ): the_row(); ?>
                            <div class="swiper-slide">
                                <div class="sc--reviews__item">
                                    <div class="sc--reviews__item__bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/image-bg-rv-0234234.jpg')"></div>
                                    <div class="sc--reviews__item__cn">
                                        <div class="sc--reviews__item__user">
                                            <div class="sc--reviews__item__image">
                                                <div class="image"><img src="<?php the_sub_field('image'); ?>" alt="image"></div>
                                            </div>
                                            <div class="sc--reviews__item__name"><?php the_sub_field('name'); ?></div>
                                            <div class="sc--reviews__item__profession"><?php the_sub_field('profession'); ?></div>
                                        </div>
                                        <div class="sc--reviews__item__content">
                                            <?php the_sub_field('text'); ?>
                                        </div>
                                    </div>
                                    <div class="sc--reviews__item__bt">
                                        <div class="title"><?php the_field('reviews_slider_title') ?></div>
                                        <div class="decor"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="swiper-controls">
                    <div class="swiper-button-prev">
                        <svg style="display: block" viewBox="0 0 9.3 17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <desc>Left</desc>
                            <polyline fill="none" stroke="#e80000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 8.5,8.5 0.5,16.5"></polyline>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg style="display: block" viewBox="0 0 9.3 17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <desc>Right</desc>
                            <polyline fill="none" stroke="#e80000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 8.5,8.5 0.5,16.5"></polyline>
                        </svg>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="section sp-pt-120 sp-pt-lg-80 sp-pt-sm-60">
    <div class="container-cs">
        <div class="h2 color-dark text-center fw-bold ff-2 sp-mb-20"><?php the_field('questions_title') ?></div>
        <?php if( have_rows('questions_items') ): ?>
            <div class="accordion">
                <?php while( have_rows('questions_items') ): the_row(); ?>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <?php the_sub_field('title'); ?>
                            <span class="icon"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g stroke="#fff" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"><path d="M1 12h22M12 1v22"/></g></svg></span>
                        </div>
                        <div class="accordion-content" style="display: none;">
                            <div class="text-md-1">
                                <?php the_sub_field('text'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
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
