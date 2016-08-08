<?php
/**
 * The template for displaying Client Mockup pages
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

get_header(); ?>

<div class="client-mockups-color-background"></div>

<div class="row">
	<div class="small-12 columns mockup-post" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">

			<?php
				if ( post_password_required() ) {
		      echo get_the_password_form();
				}
		  	else {
			?>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="row">
					<div class="column">
						<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if( have_rows('page') ): ?>

				<ul class="pages">

				<?php while( have_rows('page') ): the_row(); 

					$section_title = get_sub_field('page_name');
					$mockup = get_sub_field('mockup');

					?>

					<li class="page">

						<?php if( $section_title ): ?>
							<h2><?php echo $section_title; ?></h2>
						<?php endif; ?>

						<?php if( have_rows('mockup') ): ?>
							<ul class="mockups row">

							<?php while( have_rows('mockup') ): the_row(); 

							$mockup_title = get_sub_field('mockup_title');
							$mockup_description = get_sub_field('mockup_description');
							$mockup_image = get_sub_field('mockup_image');

							?>

							<li class="mockup small-12 medium-6 large-4 columns">

								<?php if( $mockup_image ): ?>
									<a href="<?php echo $mockup_image['url']; ?>" target="_blank" class="mockup-image"><img src="<?php echo $mockup_image['sizes']['medium']; ?>" alt="<?php echo $mockup_image['alt'] ?>" /></a>
								<?php endif; ?>

								<?php if( $mockup_title ): ?>
									<h3><?php echo $mockup_title; ?></h3>
								<?php endif; ?>

								<?php if( $mockup_description ): ?>
									<?php echo $mockup_description; ?>
								<?php endif; ?>

							</li>

							<?php endwhile; ?>

							</ul>
						<?php endif; ?>

					</li>

				<?php endwhile; ?>

				</ul>

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
		<?php } ?>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
</div>
<?php get_footer(); ?>