
<!--footer-->
<footer class="footer">
    <div class="container-cs md">
        <div class="text-center sp-mb-50"><button class="btn btn-primary mn-300 type4 popup-open" data-rel="pop-up-01"><?php the_field('footer_btn_popup', 'option'); ?></button></div>
        <div class="footer__inner">
            <div class="footer__col footer__col--01">
                <div class="footer__email"><a class="btn-link type2" href="mailto:<?php the_field('footer_email', 'option'); ?>"><?php the_field('footer_email', 'option'); ?></a></div>
                <div class="text-center footer__terms_use"><a class="btn btn-link" href="<?php the_field('footer_terms_url', 'option'); ?>"><?php the_field('footer_terms_text', 'option'); ?></a></div>
                <div class="footer__copyright"><?php the_field('footer_copyright', 'option'); ?></div>
            </div>
            <div class="footer__col footer__col--02">
                <div class="title"><?php the_field('footer_requisites_title', 'option'); ?></div>
                <div class="content"><?php the_field('footer_requisites', 'option'); ?></div>
            </div>
            <div class="footer__col footer__col--03">
                <div class="title"><?php the_field('footer_payments_title', 'option'); ?></div>
                <?php if( have_rows('footer_payments_items', 'option') ): ?>
                    <div class="footer__payments">
                        <?php while( have_rows('footer_payments_items', 'option') ): the_row(); ?>
                            <div class="item"><img src="<?php the_sub_field('icon'); ?>" alt="image"></div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer__under">
            <div class="footer__under__col footer__under__col--01"><a class="btn btn-link" href="<?php the_field('footer_terms_url', 'option'); ?>"><?php the_field('footer_terms_text', 'option'); ?></a></div>
            <div class="footer__under__col footer__under__col--02">
                <?php if( have_rows('social_links_items', 'option') ): ?>
                    <div class="footer__social">
                        <?php while( have_rows('social_links_items', 'option') ): the_row(); ?>
                            <a href="<?php the_sub_field('url'); ?>"><img src="<?php the_sub_field('icon'); ?>" alt="icon"></a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="footer__under__col footer__under__col--03">
                <a class="btn btn-link orange" href="#top"><?php the_field('footer_btn_top', 'option'); ?></a>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->

</div>

<!--popup-->
<div class="popup-wrapper">
    <div class="popup-overlay"></div>
    <div class="popup-conteiner size-a" data-rel="pop-up-01">
        <button class="btn btn-close popup-close"></button>
        <div class="popup-content">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-8">
                    <div class="text-center">
                        <div class="h4-1 fw-bold ff-2 sp-mb-5"><?php the_field('popup_subtitle', 'option'); ?></div>
                        <div class="text-decor h3-2 fw-bold"><?php the_field('popup_title', 'option'); ?></div>
                        <hr class="hr-separator">

                        <!--
                        <form class="sp-mb-50">
                            <div class="input-wrapper sp-mb-25">
                                <input class="input" type="text" placeholder="Введите ваш эл. адрес">
                            </div>
                            <div class="input-wrapper sp-mb-25">
                                <input class="input" type="text" placeholder="Введите ваше имя">
                            </div>
                            <div class="input-wrapper sp-mb-35">
                                <input class="input" type="text" placeholder="Введите ваш телефон">
                            </div>
                            <button class="btn btn-type3"><?php the_field('popup_button_text', 'option'); ?></button>
                        </form>
                        <label class="global-confirm-checkbox-block"><input type="checkbox"> <span class="checkbox-text"><?php the_field('popup_consent', 'option'); ?></span></label>
                        -->

                        <?php echo do_shortcode( '[contact-form-7 id="8253cb7" title="From (popup)"]' );  ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/popup-->

<?php wp_footer(); ?>

</body>
</html>
