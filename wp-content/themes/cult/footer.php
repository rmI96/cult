<?php
    global $wp;
?>
<!--footer-->
<footer class="footer">
    <div class="container-cs">
        <div class="footer__inner">
            <div class="footer__tp">
                <?php if( have_rows('menu', 'option') ): ?>
                    <div class="row">
                        <?php while( have_rows('menu', 'option') ): the_row(); ?>
                            <div class="col-lg-3">
                                <div class="footer__block">
                                    <div class="title"><?php the_sub_field('title'); ?></div>
                                    <?php if( have_rows('items') ): ?>
                                        <ul class="menu">
                                            <?php while( have_rows('items') ): the_row(); ?>
                                                <li>
                                                    <a class="<?php if( home_url($wp->request) . '/' == get_sub_field('page') ): ?>active<?php endif; ?>" href="<?php the_sub_field('page'); ?>"><?php the_sub_field('name'); ?></a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="footer_bt sp-mb-50">
                <div class="footer__block">
                    <div class="title"><?php the_field('footer_languages_title', 'option'); ?></div>
                    <ul class="menu type2">
                        <?php pll_the_languages(); ?>
                    </ul>
                </div>
            </div>
            <div class="footer__copyright">© 2023 pi-cult.com</div>
        </div>
    </div>
</footer>
<!--/footer-->

</div>

<style>
    #loader-wrapper{
        display: none!important;
        z-index: -999999;
        visibility: hidden;
    }
</style>

<?php wp_footer(); ?>

</body>
</html>
