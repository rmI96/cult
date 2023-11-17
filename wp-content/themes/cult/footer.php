<!--footer-->
<!-- COMMENTS -->

<div class="main-comments-block block-98723">
    <form class="form-group main-comments-block__form">
        <div class="input-wrapper input-valid_wrapper sp-mb-20">
            <label class="input-label">Name</label><br>
            <input name="name" type="text" class="input input-valid" placeholder="Your name" required>
        </div>
        <div class="input-wrapper input-valid_wrapper sp-mb-20">
            <label class="input-label">Comment</label><br>
            <textarea name="comment" class="input input-valid" placeholder="Your text" required></textarea>
        </div>
        <button class="btn btn-primary main-comments-block__submit" type="button">Send</button>
    </form>
</div>

<div class="container-cs"><button class="btn btn-primary" onclick="send()">ok</button></div>
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
                                                <li><a href="<?php the_sub_field('page'); ?>"><?php the_sub_field('name'); ?></a></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>

            </div>
            <div class="footer_bt">
                <div class="footer__block">
                    <div class="title">Language:</div>
                    <ul class="menu type2">
                        <?php pll_the_languages(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--/footer-->

</div>

<?php wp_footer(); ?>

<script>
    function send () {
        const $form = document.querySelector('.main-comments-block__form')
        const data = new FormData($form)
        jQuery.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'text',
            data: {
                action: 'wpdiscuz_form_bottom',
                isMainForm: 'main',
                currentUser: 'name',
                commentsCount: 333,
                uniqueId: 23

            },
            success: function(res) {
                console.log(res)
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError)
            }
        })
    }
</script>

</body>
</html>
