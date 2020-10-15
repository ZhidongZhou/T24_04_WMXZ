<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Delight Spa
 */
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <?php if ( is_active_sidebar( 'footer-1' ) ){
                            dynamic_sidebar('footer-1');
                        } ?>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php if ( is_active_sidebar( 'footer-2' ) ){
                            dynamic_sidebar('footer-2');
                        } ?>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php if ( is_active_sidebar( 'footer-3' ) ){
                            dynamic_sidebar('footer-3');
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright-wrapper">
    	<div class="inner">
            <div class="copyright">
                <p><a href="<?php echo esc_url( __( 'https://www.unboxthemes.com/wp-themes/free-spa-wordpress-theme/', 'delight-spa' ) ); 
                    ?>"><?php printf( esc_html__( 'Spa WordPress Theme', 'delight-spa' ) ); ?> </a><?php echo esc_html(get_theme_mod('delight_spa_copyright',__('By Unbox Themes','delight-spa'))); ?>
                </p>
            </div><div class="clear"></div>
        </div>
    </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>