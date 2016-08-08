<?php
/*
Template Name: Contact
*/
get_header(); ?>

<section role="banner" class="main-banner banner" id="contact-banner">
	
	<div class="row contain-to-grid vertical-align-table">
		<div class="splash main-splash">
			<h1><?php the_title(); ?></h1>
			<?php the_field('main_splash_content'); ?>
		</div>
	</div>

	<a class="cta-main" href="<?php the_field('cta_url'); ?>"><?php the_field('cta_text'); ?><div class="arrow fa fa-arrow-right"></div></a>
</section>


<section class="banner google-map" id="contactMap">
	<div class="row contain-to-grid vertical-align-table">
		<div class="splash contact-form-splash">
			<h4><?php the_field('map_title'); ?></h4>
			<div class="google-map-shortcode">
				<?php the_field('google_map_shortcode'); ?>
			</div>
			<div class="office-locations">

				<?php $office_locations = new WP_QUERY(array(
					'post_type' => 'location',
					'orderby'=>'menu_order',
					'order'=>'ASC'
				)); ?>
				<ul class="location-list">
					<?php while ($office_locations->have_posts()) : $office_locations->the_post(); ?>
						<li class="location-list-item">
							<h4><?php the_title(); ?></h4>
							<p><?php the_field('address_line_one'); ?></p>
							<p><?php the_field('address_line_two'); ?></p>
							<p><?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip_code'); ?></p>
							<p><?php the_field('phone_number'); ?></p>
						</li>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>

			</div>
		</div>
	</div>
</section>


<section class="banner mondolabs-contact-form" id="contactForm">

	<div class="row contain-to-grid vertical-align-table">
		<div class="splash contact-form-splash">
			<h4><?php the_field('contact_form_title'); ?></h4>
			<?php the_field('contact_page_form'); ?>
		</div>
	</div>

</section>

<?php get_footer(); ?>
