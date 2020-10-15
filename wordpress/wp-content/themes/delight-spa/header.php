<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Delight Spa
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) )
  {
    wp_body_open();
  }else{
    do_action('wp_body_open');
  }
?>

<header>
  <a class="screen-reader-text skip-link" href="#maincontent" alt="<?php esc_attr_e( 'Skip to content', 'delight-spa' ); ?>"><?php esc_html_e( 'Skip to content', 'delight-spa' ); ?></a> 
    <div class="toggle-menu responsive-menu">
      <button onclick="resMenu_open()"><?php esc_html_e('Menu','delight-spa'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','delight-spa'); ?></span></button>
    </div>
	<div id="header">
    <div class="container">
			<div class="row">
        <div class="col-lg-3 col-md-3">
  				<div class="logo">
  					<?php delight_spa_the_custom_logo(); ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
  					<?php $description = get_bloginfo( 'description', 'display' );
  					if ( $description || is_customize_preview() ) : ?>
  						<p><?php echo esc_html($description); ?></p>
  					<?php endif; ?>
  				</div>
        </div>
        <div class="col-lg-7 col-md-7">
    			<div class="menu-section">
            <div id="sidelong-menu" class="nav sidenav">
              <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'delight-spa' ); ?>">
                <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="resMenu_close()"><?php esc_html_e('Close Menu','delight-spa'); ?><span class="screen-reader-text"><?php esc_html_e('Close Menu','delight-spa'); ?></span></a>
                <?php 
                  wp_nav_menu( array( 
                    'theme_location' => 'primary',
                    'container_class' => 'main-menu-navigation clearfix' ,
                    'menu_class' => 'clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) ); 
                ?>
              </nav>
            </div>
          </div>
        </div>
        <?php if( get_theme_mod( 'button_url','' ) != '') { ?>
          <div class="col-lg-2 col-md-2 appointbtn">
            <a href="<?php echo esc_url( get_theme_mod('button_url','' ) ); ?>"><?php echo esc_html( get_theme_mod('button_text','' )  ); ?><span class="screen-reader-text"><?php esc_html_e( 'Make an appointment','delight-spa' );?></span></a>
          </div>
        <?php }?>
	    </div>
    </div>
	</div>
</header>

      <div class="main-container">
         <?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		 	<div class="content-area">
        <div class="middle-align content_sidebar">
        	<div id="sitemain" class="site-main">
         <?php } ?>