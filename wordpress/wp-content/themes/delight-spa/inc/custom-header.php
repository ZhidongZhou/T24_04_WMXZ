<?php
/**
 * @package Delight Spa
 * Setup the WordPress core custom header feature.
 *
 * @uses delight_spa_header_style()

 */
function delight_spa_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'delight_spa_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header_textcolor'		=> false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'delight_spa_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'delight_spa_custom_header_setup' );

if ( ! function_exists( 'delight_spa_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see delight_spa_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'delight_spa_header_style' );
function delight_spa_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'delight-spa-basic-style', $custom_css );
	endif;
}
endif;