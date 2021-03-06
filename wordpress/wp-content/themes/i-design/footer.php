<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package i-design
 * @since i-design 1.0
 */
 
$no_footer = "";
if ( function_exists( 'rwmb_meta' ) ) {
	$no_footer = rwmb_meta('idesign_no_footer');
} 
?>

		</div><!-- #main -->
        <div class="tx-footer-filler"></div>
		<footer id="colophon" class="site-footer" role="contentinfo">
        <?php if( $no_footer != 1 ) : ?>
        	<div class="footer-bg clearfix">
                <div class="widget-wrap">
                    <?php get_sidebar( 'main' ); ?>
                </div>
			</div>
		<?php endif; ?>
        	<div class="site-info">
                <div class="copyright">
                	<?php esc_html_e( 'Copyright &copy;', 'i-design' ); ?>  <?php bloginfo( 'name' ); ?>
                </div>            
            	<div class="credit-info">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'i-design' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'i-design' ); ?>">
						<?php printf( __( 'Powered by %s', 'i-design' ), 'WordPress' ); ?>
                    </a>
                    <?php printf( __( ', Theme', 'i-design' )); ?>
                    <a href="<?php echo esc_url( __( 'http://www.templatesnext.org/i-design/', 'i-design' ) ); ?>" title="<?php esc_attr_e( 'Multipurpose WordPress Theme', 'i-design' ); ?>" rel="designer">
                   		<?php printf( __( 'i-design', 'i-design' ) ); ?>
					</a>
					<?php printf( __( ' by TemplatesNext.', 'i-design' )); ?> 
                </div>

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>