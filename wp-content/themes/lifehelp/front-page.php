<?php get_header() ?>

<div class="body__wrapper">
	<div class="page-slider" style="background-image: url(<?php echo get_field('main_image')['url']; ?>);">
		<div class="page-slider__opacity"></div>
		<div class="container">
			<div class="page-slider__row">
				<div class="page-slider__information">
					<h1 class="page-slider__title"><?php echo get_post_meta(get_the_ID(), 'title_site', true); ?></h1>
					<?php the_ID(); ?>
                    <p class="page-slider__subtitle"><?php echo get_post_meta(get_the_ID(),'description_site', true); ?></p>
				</div>
			</div>
		</div>
	</div>
    <?php $global_var = $post; ?>
	<div class="section-main">
		<div class="container">
			<div class="main-top">
				<h2 class="main-top__title"><?php echo get_field('title_content'); ?></h2>
				<p class="main-top__subtitle"><?php echo get_field('description_content'); ?></p>
				<div class="main-top-images">

                    <?php
                        $query = new WP_Query(
                            'post_type=problems'
                        );
                        while ($query->have_posts()){
                            $query->the_post();
                    ?>
                            <div class="main-top-images__item">
                                <img src="<?php echo get_field('background_image')['url']; ?>" alt="">
                                <div class="main-top-images__item__content">
                                    <div class="main-top-images__item-start">
                                        <div class="main-top-images__title"><?php the_field('title_point'); ?></div>
                                        <ul class="list-categories">
                                            <?php
                                                foreach (get_field('repeater') as $item) {
                                                     echo "<li>" . $item['title'] . "</li>";
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
				</div>
			</div>
		</div>
	</div>
    <?php $post = $global_var; ?>

	<div class="section-works">
		<div class="container">
			<div class="works-top">
				<h2 class="main-top__title"><?php echo get_field('how_it_works'); ?></h2>
				<div class="main-top__subtitle subtitle-max-width"><?php echo get_field('how_it_works_desctiption'); ?></div>
				<div class="works-top__container">

                    <?php
                        $arr = get_field('How_it_works_repeat');
                        if (is_array($arr)){
                            foreach ($arr as $item) {
                    ?>
                                <div class="works-top__container__item">
                                    <img src="<?php echo $item['image']['url'] ?>" alt="">
                                    <div class="works-top__container__item__text">
                                        <?php echo $item['description']; ?>
                                    </div>
                                </div>
                    <?php

                            }
                        }
                    ?>
				</div>
			</div>
		</div>
	</div>
	<div class="section-therapy">
		<div class="therapy-bg" style="background-image: url(<?php echo get_field('footer_iimage')['url']; ?>);"></div>
		<div class="therapy-main">
			<h2 class="therapy-main__title"><?php echo get_field('title_footer'); ?></h2>
			<div class="therapy-main__text">
				<?php echo get_field('description_footer'); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
