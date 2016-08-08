<?php
/*
Template Name: Services
*/
get_header(); ?>

<section role="banner" class="main-banner banner" id="servicesLanding">
	
	<div class="row contain-to-grid vertical-align-table">
		<div class="splash main-splash">
			<h1><?php the_title(); ?></h1>
			<?php the_field('main_splash_content'); ?>
		</div>
	</div>

	<a class="cta-main" href="<?php the_field('cta_url'); ?>"><?php the_field('cta_text'); ?><div class="arrow fa fa-arrow-right"></div></a>
</section>

<section class="banner services" id="servicesListing">

	<div class="row contain-to-grid vertical-align-table">

		<div class="splash services-splash">
			<h5><?php the_field('services_section_title'); ?></h5>
			<?php the_field('services_description'); ?>
		</div>

		<?php $service_posts = new WP_QUERY(array(
			'post_type' => 'service',
			'orderby'=>'menu_order',
			'order'=>'ASC'
		)); ?>
		<ol class="services-list">
			<?php while ($service_posts->have_posts()) : $service_posts->the_post(); ?>
				<li class="<?php the_field('service_background_color'); ?> service-list-item">
					<h5><?php the_title(); ?><i class="fa fa-long-arrow-right service-arrow"></i></h5>
					<div class="service-expand">
						<?php the_content(); ?>
						<h6><?php the_field('service_subhead'); ?></h6>
						<!-- <a class="read-more" href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">Read more <i class="fa fa-arrow-right"></i></a> -->
					</div>
				</li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ol>

		<div class="services-cta-buttons">
			<a href="<?php the_field('cta_service_url'); ?>" class="hp-service-cta button"><?php the_field('cta_service'); ?></a>
		</div>

	</div>

</section>


<?php get_footer(); ?>
