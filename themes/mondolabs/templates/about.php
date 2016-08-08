<?php
/*
Template Name: About
*/
get_header(); ?>

<section role="banner" class="main-banner banner" id="about-banner">
	
	<div class="row contain-to-grid vertical-align-table">
		<div class="splash main-splash">
			<h1><?php the_title(); ?></h1>
			<?php the_field('main_splash_content'); ?>
		</div>
	</div>

	<a class="cta-main" href="<?php the_field('cta_url'); ?>"><?php the_field('cta_text'); ?><div class="arrow fa fa-arrow-right"></div></a>
</section>

<section class="banner experience" id="aboutExperience">

	<div class="row contain-to-grid vertical-align-table">
		<div class="row">
			<h4><?php the_field('about_section_title'); ?></h4>
		</div>
		<div class="small-12 medium-6 columns">
			<h5 class="subtitle"><?php the_field('about_section_subtitle_one'); ?></h5>
			<?php the_field('about_description'); ?>
		</div>
		<div class="small-12 medium-6 columns">
			<h5 class="subtitle"><?php the_field('about_section_subtitle_two'); ?></h5>
			<?php $client_list = new WP_QUERY(array(
				'post_type' => 'notable-clients',
				'orderby'=>'menu_order',
				'order'=>'ASC'
			)); ?>
			<ul class="client-list">
				<?php while ($client_list->have_posts()) : $client_list->the_post(); ?>
					<?php if( get_field('show_on_about') ) { ?>
						<li class="hp-client-list-item">
							<?php the_title(); ?>
						</li>
					<?php } ?>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
	</div>

</section>

<section class="banner leadership" id="leadership">

	<div class="row contain-to-grid vertical-align-table">
		<div class="splash leadership-splash">

			<h4><?php the_field('leadership_title'); ?></h4>

			<div class="leadership-list">
				<?php $leadership_list = new WP_QUERY(array(
					'post_type' => 'leadership',
					'orderby'=>'menu_order',
					'order'=>'ASC'
				)); ?>
				<?php while ($leadership_list->have_posts()) : $leadership_list->the_post(); ?>
					<div class="leader">
						<div class="leader-image-area">
							<?php if( get_field('leadership_main_photo') ) { ?>
							<img src="<?php the_field('leadership_main_photo'); ?>" alt="<?php the_field('leadership_name'); ?>">
							<?php } else { ?>
							<img src="http://placehold.it/200x200" alt="MondoLabs">
							<?php } ?>
							<div class="leader-hover-info"></div>
						</div>
						<h4><?php the_field('leadership_name'); ?></h4>
						<h5><?php the_field('leadership_title'); ?></h5>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>


			</div>

		</div>
	</div>

</section>


<?php get_footer(); ?>
