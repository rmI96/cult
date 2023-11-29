<?php
/*
Template Name: home
*/
?>

<?php get_header() ?>

<div class="banner">
	<div class="banner-inner">

		<div class="wr-hd">
			<div class='move-objects' data-scalar-x="4" data-scalar-y="3">
				<div class="layer bg style-2" data-depth="0.8" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-08.jpg')"></div>
			</div>
		</div>

		<div class="container-cs">
			<div class="text-center banner-text small">
				<div class="width-limited">

					<h1 class="h1 color-white">
                        <?php the_field('home_title_of__banner'); ?>
					</h1>

				</div>
			</div>
		</div>

		<a href="#first-section" class="btn btn-scrolling on-scroll"><span class="icon" style="font-size: 0; color: rgba(1,1,1,0);"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mouse.svg" alt="icon scroll">Scroll</span></a>
	</div>
</div>

<div class="container-cs">
    <div class="sp-pt-100 sp-pt-lg-40" id="first-section">
        <div class="calculatorS">
            <div id="calculator__in-put"></div>
            <div id="calculator__out-put"></div>
            <div class="calculatorS__inner">
                <div class="calculatorS__col-l">
                    <div><span onclick="calculatorFunctions.calculator('sin')" class="calculatorS__btn">sin</span><span onclick="calculatorFunctions.calculator('cos')" class="calculatorS__btn">cos</span><span onclick="calculatorFunctions.calculator('tan')" class="calculatorS__btn">tan</span><span class="scird"><label for="scirdsettingd"><input id="scirdsettingd" type="radio" name="scirdsetting" value="deg" onclick="cnDegreeRadians='degree';" checked="">Deg</label><label for="scirdsettingr"><input id="scirdsettingr" type="radio" name="scirdsetting" value="rad" onclick="cnDegreeRadians='radians';">Rad</label></span></div>
                    <div><span onclick="calculatorFunctions.calculator('asin')" class="calculatorS__btn">sin<sup>-1</sup></span><span onclick="calculatorFunctions.calculator('acos')" class="calculatorS__btn">cos<sup>-1</sup></span><span onclick="calculatorFunctions.calculator('atan')" class="calculatorS__btn">tan<sup>-1</sup></span><span onclick="calculatorFunctions.calculator('pi')" class="calculatorS__btn">π</span><span onclick="calculatorFunctions.calculator('e')" class="calculatorS__btn">e</span></div>
                    <div><span onclick="calculatorFunctions.calculator('pow')" class="calculatorS__btn">x<sup>y</sup></span><span onclick="calculatorFunctions.calculator('x3')" class="calculatorS__btn">x<sup>3</sup></span><span onclick="calculatorFunctions.calculator('x2')" class="calculatorS__btn">x<sup>2</sup></span><span onclick="calculatorFunctions.calculator('ex')" class="calculatorS__btn">e<sup>x</sup></span><span onclick="calculatorFunctions.calculator('10x')" class="calculatorS__btn">10<sup>x</sup></span></div>
                    <div><span onclick="calculatorFunctions.calculator('apow')" class="calculatorS__btn"><sup>y</sup>√x</span><span onclick="calculatorFunctions.calculator('3x')" class="calculatorS__btn"><sup>3</sup>√x</span><span onclick="calculatorFunctions.calculator('sqrt')" class="calculatorS__btn">√x</span><span onclick="calculatorFunctions.calculator('ln')" class="calculatorS__btn">ln</span><span onclick="calculatorFunctions.calculator('log')" class="calculatorS__btn">log</span></div>
                    <div><span onclick="calculatorFunctions.calculator('(')" class="calculatorS__btn">(</span><span onclick="calculatorFunctions.calculator(')')" class="calculatorS__btn">)</span><span onclick="calculatorFunctions.calculator('1/x')" class="calculatorS__btn">1/x</span><span onclick="calculatorFunctions.calculator('pc')" class="calculatorS__btn">%</span><span onclick="calculatorFunctions.calculator('n!')" class="calculatorS__btn">n!</span></div>
                </div>
                <div class="calculatorS__col-r">
                    <div><span onclick="calculatorFunctions.calculator(7)" class="calculatorS__btn2">7</span><span onclick="calculatorFunctions.calculator(8)" class="calculatorS__btn2">8</span><span onclick="calculatorFunctions.calculator(9)" class="calculatorS__btn2">9</span><span onclick="calculatorFunctions.calculator('+')" class="calculatorS__btn">+</span><span onclick="calculatorFunctions.calculator('bk')" class="calculatorS__btn">Back</span></div>
                    <div><span onclick="calculatorFunctions.calculator(4)" class="calculatorS__btn2">4</span><span onclick="calculatorFunctions.calculator(5)" class="calculatorS__btn2">5</span><span onclick="calculatorFunctions.calculator(6)" class="calculatorS__btn2">6</span><span onclick="calculatorFunctions.calculator('-')" class="calculatorS__btn">–</span><span onclick="calculatorFunctions.calculator('ans')" class="calculatorS__btn">Ans</span></div>
                    <div><span onclick="calculatorFunctions.calculator(1)" class="calculatorS__btn2">1</span><span onclick="calculatorFunctions.calculator(2)" class="calculatorS__btn2">2</span><span onclick="calculatorFunctions.calculator(3)" class="calculatorS__btn2">3</span><span onclick="calculatorFunctions.calculator('*')" class="calculatorS__btn">×</span><span onclick="calculatorFunctions.calculator('M+')" class="calculatorS__btn">M+</span></div>
                    <div><span onclick="calculatorFunctions.calculator(0)" class="calculatorS__btn2">0</span><span onclick="calculatorFunctions.calculator('.')" class="calculatorS__btn2">.</span><span onclick="calculatorFunctions.calculator('EXP')" class="calculatorS__btn">EXP</span><span onclick="calculatorFunctions.calculator('/')" class="calculatorS__btn">/</span><span onclick="calculatorFunctions.calculator('M-')" class="calculatorS__btn">M-</span></div>
                    <div><span onclick="calculatorFunctions.calculator('+/-')" class="calculatorS__btn">±</span><span onclick="calculatorFunctions.calculator('RND')" class="calculatorS__btn">RND</span><span onclick="calculatorFunctions.calculator('C')" class="calculatorS__btn2">AC</span><span onclick="calculatorFunctions.calculator('=')" class="calculatorS__btn2">=</span><span onclick="calculatorFunctions.calculator('MR')" class="calculatorS__btn" id="scimrc">MR</span></div>
                </div>
            </div>
            <div id="calculator__history"></div>
        </div>
    </div>
    <div class="sp-pt-60 sp-pt-lg-40">
        <div class="block-98723">
            <div class="block-98723__title h3 fw-bold sp-mb-20"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-012.png" alt="icon"></span><h2 class="in-text"><?php the_field('home_title_of_catalog'); ?></h2></div>
            <ul class="block-98723__list">
                <?php while( have_rows('home_catalog', ) ): the_row(); ?>
                    <li><a href="/category/<?php get_category_link( the_sub_field('url') ); ?>"><h3 class="inline-block"><?php the_sub_field('name'); ?></h3></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="sp-pt-60 sp-pt-lg-40 text-center">
        <?php get_search_form(); ?>
    </div>
    <div class="sp-pt-60 sp-pb-60 sp-pt-lg-40 sp-pb-lg-40">
        <h2 class="h2 sp-mb-20 sp-mb-lg-15"><?php the_field('home_title'); ?></h2>
        <div class="text">
            <?php the_field('home_content'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
