<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

get_header(); ?>

<div class="hero" id="hero">
	<?php get_template_part( 'parts/featured-image' ); ?>
	<?php
	if( is_home() && get_option('page_for_posts') ) {
		$blog_page_id = get_option('page_for_posts');
		echo '<h1 class="hero-title">'.get_page($blog_page_id)->post_title.'</h1>';
	}
	else { ?>
	<h1 class="hero-title"><?php the_title(); ?></h1>
	<?php }	?>
</div>

<div class="row single-content-area">
	<div class="small-12 columns" role="main">

	<?php if ( have_posts() ) : ?>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'foundationpress_before_pagination' ); ?>

	<?php endif;?>



	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

</div>
<?php get_footer(); ?>