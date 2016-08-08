<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>

</section>
<footer class="footer">
	<div class="row">
		<?php foundationpress_top_bar(); ?>
	</div>
	<div class="row copyright">
		© Copyright <a href="<?php echo home_url(); ?>" class="logo-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mondolabs-logo-white-1.png" class="logo" alt="MondoLabs"></a> <?php echo date('Y'); ?>, All&nbsp;Rights&nbsp;Reserved
	</div>
</footer>

	<?php do_action( 'foundationpress_layout_end' ); ?>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>