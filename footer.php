<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Whimsical Love
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( esc_html__( 'Powered by %1$s', 'whimsical-love' ), '<a href="http://wordpress.org/">WordPress</a>' ); ?>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'whimsical-love' ), 'Whimsical Love', '<a href="http://malevolentbunny.com/whimsical-love/" rel="designer">Malevolent Bunny</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>