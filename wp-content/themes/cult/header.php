<?php
    global $wp;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>

    <!--
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700&display=swap" rel="stylesheet">
    -->

    <?php wp_head(); ?>

</head>

<body>
<!--
<div id="loader-wrapper"></div>
-->

<div id="content-block" class="header-sp">

    <header class="header">
        <div class="container-cs">
            <div class="header__inner">
                <a class="logo" href="<?php echo get_home_url(); ?>">
                    <img src="<?php the_field('logo', 'option'); ?>" alt="Logo" />
                </a>
                <nav class="nav">
                    <ul class="menu">
                        <?php while( have_rows('menu', 'option') ): the_row(); ?>
                            <li><a href="#"><?php the_sub_field('title'); ?></a>

                                <?php if( have_rows('items') ): ?>
                                    <ul class="sub-menu">
                                        <?php while( have_rows('items') ): the_row(); ?>
                                            <li>
                                                <a class="<?php if( home_url($wp->request) . '/' == get_sub_field('page') ): ?>active<?php endif; ?>" href="<?php the_sub_field('page'); ?>"><?php the_sub_field('name'); ?></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>

                            </li>
                        <?php endwhile; ?>
                        <li class="menu__with-icon">
                            <a href="#"><span class="icon"><img src="/wp-content/polylang/<?php echo pll_current_language('locale'); ?>.png" alt=""> </span> <?php echo pll_current_language('name'); ?></a>
                            <ul class="sub-menu">
                                <?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 1 ) ); ?>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="header__burger">
                    <div class="open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="close">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
