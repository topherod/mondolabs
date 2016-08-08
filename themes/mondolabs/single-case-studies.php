<?php
/**
 * The template for displaying Case Studies
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

get_header(); ?>
<?php
	$case_title = get_the_title();
	$case_title_hash = str_replace(" ","_", get_the_title());
?>
<div class="hero" id="hero">
	<?php get_template_part( 'parts/featured-image' ); ?>

	<?php if( have_rows('case_study_sections') ): ?>
		<div class="sections-nav">
			<a href="#<?php echo $case_title_hash; ?>"><?php echo $case_title; ?></a>
		<?php while( have_rows('case_study_sections') ): the_row(); 
			$section_title = get_sub_field('case_study_section_title');
			$section_hash = "#" . str_replace(" ","_", get_sub_field('case_study_section_title'));
		?>
		<?php if( $section_title ): ?>
			<a href="<?php echo $section_hash; ?>"><?php echo $section_title; ?></a>
		<?php endif; ?>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>


<div class="row single-content-area collapse">
	<div class="small-12 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<?php 
				if ( function_exists( 'sharing_display' ) ) {
			    sharing_display( '', true );
				} 
			?>
			<div class="entry-content">
				<div class="row limit-width">
					<div class="columns small-12 medium-8">
						<h1 class="case-study-title" id="<?php echo $case_title_hash; ?>"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					<div class="columns small-12 medium-4">
					<?php if( have_rows('info_box') ): ?>

						<div class="row">

							<?php while( have_rows('info_box') ): the_row(); 
								$info_box_title = get_sub_field('headline');
							?>
							<div class="info-box columns small-6">
								<?php if( $info_box_title ) { ?>
									<p class="info-box-title"><?php echo $info_box_title; ?></p>
								<?php } ?>

								<?php if( have_rows('technologies') ): ?>

									<ul class="info-box">

										<?php while( have_rows('technologies') ): the_row(); 
											$tool = get_sub_field('individual_technology_used');
										?>
											<?php if( $tool ) { ?>
												<li><?php echo $tool; ?></li>
											<?php } ?>
										<?php endwhile; ?>

									</ul>

								<?php endif; ?>
							</div>
							<?php endwhile; ?>

						</div>
					<?php endif; ?>
					</div>
				</div>


				<?php if( have_rows('case_study_sections') ): ?>

					<div class="case-study-sections">

					<?php while( have_rows('case_study_sections') ): the_row(); 

						// vars
						$section_title = get_sub_field('case_study_section_title');
						$section_id = str_replace(" ","_", get_sub_field('case_study_section_title'));
						$section_content = get_sub_field('case_study_section_content');

					?>

						<section>

							<?php if( have_rows('section_images') ): ?>
								<div class="section-images row collapse">
								<?php while( have_rows('section_images') ): the_row(); ?>

								<?php 
									$full_width_image = get_sub_field('full_width_image');
									if( !empty($full_width_image) ) {
								?>
									<div class="columns small-12">
										<div class="full-width-image" style="background-image: url(<?php echo $full_width_image['sizes']['large']; ?>);"></div>
									</div>
								<?php } ?>

								<?php 
									$half_width_image_one = get_sub_field('half_width_image_one');
									if( !empty($half_width_image_one) ) {
								?>
									<div class="columns small-6">
										<div class="full-width-image" style="background-image: url(<?php echo $half_width_image_one['sizes']['large']; ?>" alt="<?php echo $half_width_image_one['alt']; ?>);"></div>
									</div>
								<?php } ?>

								<?php 
									$half_width_image_two = get_sub_field('half_width_image_two');
									if( !empty($half_width_image_two) ) {
								?>
									<div class="columns small-6">
										<div class="full-width-image" style="background-image: url(<?php echo $half_width_image_two['sizes']['large']; ?>" alt="<?php echo $half_width_image_two['alt']; ?>);"></div>
									</div>
								<?php } ?>

								<?php endwhile; ?>
								</div>
							<?php endif; ?>		
							<div class="limit-width">
								<?php if( $section_title ): ?>
									<h2 id="<?php echo $section_id; ?>"><?php echo $section_title; ?></h2>
								<?php endif; ?>
								<?php if( $section_content ): ?>
								<div style="-webkit-column-count: 2; -moz-column-count: 2; column-count: 2;">
									<?php echo $section_content; ?>
								</div>
								<?php endif; ?>
							</div>

						</section>
					<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<div class="limit-width">
					<h2 class="collection-title"><?php the_field('collection_title'); ?></h2>
				</div>
				<?php 
					$gallery_images = get_field('collection_images');
					if( $gallery_images ): 
				?>
				  <div class="gallery">
				    <?php foreach( $gallery_images as $gallery_image ): ?>
				      <a href="<?php echo $gallery_image['url']; ?>" class="gallery-thumbnail-link" target="_blank">
				        <div class="gallery-thumbnail" style="background-image: url(<?php echo $gallery_image['sizes']['medium']; ?>);">
				           
				        </div>
				      </a>
				    <?php endforeach; ?>
				  </div>
				<?php endif; ?>

			</div>


			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

</div>
<script type="text/javascript">
(function($) {
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
})( jQuery );
</script>
<?php get_footer(); ?>