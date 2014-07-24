<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package wpfoundation
 */
?>

	</div><!-- #content -->
	<div class="row">
	<div class="large-12 columns">
		<div class="panel">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'wpfoundation_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wpfoundation' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wpfoundation' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'wpfoundation' ), 'wpfoundation', '<a href="http://jaff.es/" rel="designer">jaff.es</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- panel -->
	</div>
</div><!-- row -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>