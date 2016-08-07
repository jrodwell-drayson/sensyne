<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sensyne
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sensyne' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'sensyne' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'sensyne' ), 'sensyne', '<a href="http://www.bashthekeyboard.co.uk/" rel="designer">John Rodwell</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
    </div><!-- #page -->
</div><!-- .container -->

<?php wp_footer(); ?>

</body>
</html>
