<?php
	
	/*
	*
	*	nx Theme Functions
	*	------------------------------------------------
	*	nx Framework v 1.0
	*
	*	nx_custom_styles()
	*	nx_custom_script()
	*	nx_go_to_top()		
	*
	*/

 	/* CUSTOM CSS OUTPUT
 	================================================== */
 	if (!function_exists('idesign_custom_styles')) { 
		function idesign_custom_styles() {
			
			global  $idesign_data;
			$custom_css = "";
			$body_font_size = "13";
			$body_line_height = "24";
			$menu_font_size = "13";
			$primary_color = "#0cb4ce";
			$page_header_type = '0';
			$primary_color = esc_attr(get_theme_mod('primary_color', '#0cb4ce'));
			
			$overlay_grc_1 = esc_attr(get_theme_mod('nxs_bg_color_1', 'rgba(231,14,119,.72)'));
			$overlay_grc_2 = esc_attr(get_theme_mod('nxs_bg_color_2', 'rgba(250,162,20,.72)'));
			$overlay_angle = esc_attr(get_theme_mod('nxs_gradient_angle', 135));			
			
			$tx_body_font = array();
			$tx_title_font = array();
			$tx_body_style = '';
			$tx_title_style = '';
			$tx_body_font['font-family'] = '"Open Sans", Helvetica, sans-serif';
			$tx_body_font['font-size'] = '14px';
			$tx_body_font['line-height']= 1.8;
			$tx_body_font['color'] = '#575757';
			$tx_body_font['variant'] = 400;
			
			$tx_title_font['font-family'] = 'Roboto, Georgia, serif';			

			global $post;	
			$custom_page_color = '';
			
			if ( function_exists( 'rwmb_meta' ) ) {
				$custom_page_color = rwmb_meta('idesign_page_color', '');
				$page_header_type = rwmb_meta('idesign_header_layout');	
			}
			
			if( !empty($custom_page_color) )
			{
				$primary_color = $custom_page_color;
			}
			
			$tx_body_font = get_theme_mod( 'body_font', $tx_body_font );
			$tx_title_font = get_theme_mod( 'title_font', $tx_title_font );
			
			if ( isset( $tx_body_font['font-family'] ) ) {
				$tx_body_style .= 'font-family: '.$tx_body_font['font-family'].'; ';
			}
			if ( isset( $tx_body_font['font-size'] ) ) {
				$tx_body_style .= 'font-size: '.$tx_body_font['font-size'].'px; ';
			}
			if ( isset( $tx_body_font['line-height'] ) ) {
				$tx_body_style .= 'line-height: '.$tx_body_font['line-height'].'; ';
			}
			if ( isset( $tx_body_font['color'] ) ) {
				$tx_body_style .= 'color: '.$tx_body_font['color'].';';
			}
			/*
			if ( isset( $tx_body_font['variant'] ) ) {
				$tx_body_style .= 'font-weight: '.$tx_body_font['variant'].';';
			}
			*/
			
			if ( isset( $tx_title_font['font-family'] ) ) {
				$tx_title_style .= 'font-family: '.$tx_title_font['font-family'].'; ';
			}					

			echo '<style type="text/css">'. "\n";
			
			echo 'body {'.$tx_body_style.'}';
			echo 'h1,h2,h3,h4,h5,h6,.comment-reply-title,.widget .widget-title, .entry-header h1.entry-title {'.$tx_title_style.'}';			
			
			echo '.themecolor {color: '.$primary_color.';}';
			echo '.themebgcolor {background-color: '.$primary_color.';}';
			echo '.themebordercolor {border-color: '.$primary_color.';}';	
			
			echo '.tx-slider .owl-pagination .owl-page > span { background: transparent; border-color: '.$primary_color.';  }';
			echo '.tx-slider .owl-pagination .owl-page.active > span { background-color: '.$primary_color.'; }';
			echo '.tx-slider .owl-controls .owl-buttons .owl-next, .tx-slider .owl-controls .owl-buttons .owl-prev { background-color: '.$primary_color.'; }';									
			
			echo '#ibanner .ibanner.nxs-gradient .nx-slider .da-img:after { background: '.$overlay_grc_1.'; background: linear-gradient('.$overlay_angle.'deg, '.$overlay_grc_1.' 0%, '.$overlay_grc_2.' 100%);}';
			
			echo 'a,a:visited,.blog-columns .comments-link a:hover, .socialicons ul.social li a:hover .socico {color: '.$primary_color.';}';

			echo 'input:focus,textarea:focus {border: 1px solid '.$primary_color.';}';
			
			echo 'button,input[type="submit"],input[type="button"],input[type="reset"],.nav-container .current_page_item > a > span,.nav-container .current_page_ancestor > a > span,.nav-container .current-menu-item > a span,.nav-container .current-menu-ancestor > a > span,.nav-container li a:hover span {background-color: '.$primary_color.';}';

			echo '.nav-container li:hover > a,.nav-container li a:hover {color: '.$primary_color.';}';

			echo '.nav-container .sub-menu,.nav-container .children {border-top: 2px solid '.$primary_color.';}';

			echo '.ibanner,.da-dots span.da-dots-current,.tx-cta a.cta-button, .utilitybar {background-color: '.$primary_color.';}';

			echo '#ft-post .entry-thumbnail:hover > .comments-link,.tx-folio-img .folio-links .folio-linkico,.tx-folio-img .folio-links .folio-zoomico {background-color: '.$primary_color.';}';

			echo '.entry-header h1.entry-title a:hover,.entry-header > .entry-meta a:hover {color: '.$primary_color.';}';

			echo '.featured-area div.entry-summary > p > a.moretag:hover, .nav-container .tx-highlight:after {background-color: '.$primary_color.';}';

			echo '.site-content div.entry-thumbnail .stickyonimg,.site-content div.entry-thumbnail .dateonimg,.site-content div.entry-nothumb .stickyonimg,.site-content div.entry-nothumb .dateonimg {background-color: '.$primary_color.';}';

			echo '.entry-meta a,.entry-content a,.comment-content a,.entry-content a:visited {color: '.$primary_color.';}';

			echo '.format-status .entry-content .page-links a,.format-gallery .entry-content .page-links a,.format-chat .entry-content .page-links a,.format-quote .entry-content .page-links a,.page-links a {background: '.$primary_color.';border: 1px solid '.$primary_color.';color: #ffffff;}';

			echo '.format-gallery .entry-content .page-links a:hover,.format-audio .entry-content .page-links a:hover,.format-status .entry-content .page-links a:hover,.format-video .entry-content .page-links a:hover,.format-chat .entry-content .page-links a:hover,.format-quote .entry-content .page-links a:hover,.page-links a:hover {color: '.$primary_color.';}';

			echo '.iheader.front {background-color: '.$primary_color.';}';

			echo '.navigation a,.tx-post-row .tx-folio-title a:hover,.tx-blog .tx-blog-item h3.tx-post-title a:hover {color: '.$primary_color.';}';

			echo '.paging-navigation div.navigation > ul > li a:hover,.paging-navigation div.navigation > ul > li.active > a {color: '.$primary_color.';	border-color: '.$primary_color.';}';

			echo '.comment-author .fn,.comment-author .url,.comment-reply-link,.comment-reply-login,.comment-body .reply a,.widget a:hover {color: '.$primary_color.';}';

			echo '.widget_calendar a:hover {background-color: '.$primary_color.';	color: #ffffff;	}';

			echo '.widget_calendar td#next a:hover,.widget_calendar td#prev a:hover {background-color: '.$primary_color.';color: #ffffff;}';

			echo '.site-footer div.widget-area .widget a:hover, .nx-fullscreen .site-header:not(.fixeddiv) .nav-container .nav-menu > li > a:hover {color: '.$primary_color.';}';

			echo '.site-main div.widget-area .widget_calendar a:hover,.site-footer div.widget-area .widget_calendar a:hover {	background-color: '.$primary_color.';color: #ffffff;}';
						
			echo '.widget a:visited { color: #373737;}';

			echo '.widget a:hover,.entry-header h1.entry-title a:hover,.error404 .page-title:before,.tx-post-comm:after {color: '.$primary_color.';}';

			echo '.da-dots > span > span, body:not(.max-header) ul.nav-menu > li.nx-highlight:before {background-color: '.$primary_color.';}';

			echo '.iheader,.format-status, .nx-preloader .nx-ispload {background-color: '.$primary_color.';}';
			
			echo '.tx-cta {border-left: 6px solid '.$primary_color.';}';
			
			echo '.paging-navigation #posts-nav > span:hover, .paging-navigation #posts-nav > a:hover, .paging-navigation #posts-nav > span.current, .paging-navigation #posts-nav > a.current, .paging-navigation div.navigation > ul > li a:hover, .paging-navigation div.navigation > ul > li > span.current, .paging-navigation div.navigation > ul > li.active > a {border: 1px solid '.$primary_color.';color: '.$primary_color.';}';
			
			echo '.entry-title a { color: #141412;}';
			
			echo '.nav-container ul.nav-menu > li > ul a:hover { background-color:'.$primary_color.'; color: #FFF; }';
			
			echo '.site-footer .widget-area .widget input[type="submit"],.site .tx-slider .tx-slide-button a,.ibanner .da-slider .owl-item.active .da-link  { background-color: '.$primary_color.'; color: #FFF; }';
			echo '.site-footer .widget-area .widget input[type="submit"]:hover,.site .tx-slider .tx-slide-button a:hover  { background-color: #373737; color: #FFF; }';
			
			echo '.nav-container .sub-menu, .nav-container .children { border-bottom: 4px solid '.$primary_color.';}';
			
			echo '.tx-service .tx-service-icon span {background-color:'.$primary_color.'; color: #FFF; border: 4px solid #e7e7e7;}';
			
			echo '.tx-service .tx-service-icon span i {color: #FFF;}';
			
			echo '.tx-service:hover .tx-service-icon span {background-color: #FFF; color:'.$primary_color.'; border: 4px solid '.$primary_color.';}';
			
			echo '.tx-service:hover .tx-service-icon span i {color: '.$primary_color.';}';
			
			echo '.ibanner .da-slider .owl-controls .owl-page span { border-color:'.$primary_color.'; }';	
			echo '.ibanner .da-slider .owl-controls .owl-page.active span, .ibanner .da-slider .owl-controls.clickable .owl-page:hover span {  background-color: '.$primary_color.'; }';
			echo '.sldprev, .ibanner .da-slider .owl-prev, .sldnext, .ibanner .da-slider .owl-next {  background-color: '.$primary_color.'; }';
			
			echo '.site-footer .widget-area .widget input[type="submit"],.site .tx-slider .tx-slide-button a,.ibanner .da-slider .owl-item.active .da-link  { background-color: '.$primary_color.'; color: #FFF; }';
			echo '.site-footer .widget-area .widget input[type="submit"]:hover,.site .tx-slider .tx-slide-button a:hover  { background-color: #373737; color: #FFF; }';
			
			echo '.colored-drop .nav-container ul ul a, .colored-drop ul.nav-container ul a, .colored-drop ul.nav-container ul, .colored-drop .nav-container ul ul {background-color: '.$primary_color.';}';
			echo '.pagination .nav-links > span:hover, .pagination .nav-links > a:hover, .pagination .nav-links > span.current, .pagination .nav-links > a.current { color: '.$primary_color.'; border-color: '.$primary_color.'; } ';			
		
			echo '.vslider_button, .vslider_button:visited { background-color:'.$primary_color.'!important; }';
			
			echo '.header-iconwrap .header-icons.woocart > a .cart-counts, .woocommerce ul.products li.product .button {background-color:'.$primary_color.';}';
			
			echo '.header-icons.woocart .cartdrop.widget_shopping_cart.nx-animate { border-top-color:'.$primary_color.';}';
			
			echo '.woocommerce ul.products li.product .onsale, .woocommerce span.onsale { background-color: '.$primary_color.'; color: #FFF; }';
			
			echo '.tx-prod-carousel .owl-carousel .owl-controls .owl-buttons .owl-next, .tx-prod-carousel .owl-carousel .owl-controls .owl-buttons .owl-prev { background-color: '.$primary_color.'; color: #FFF; }';			
			
			// Header Style Class
			if( get_theme_mod('header_style', '2') == '2' || $page_header_type == '2' ) {

				echo '.max-header .nav-container > ul > li:hover > a, .max-header .nav-container > ul > li.current-menu-parent > a {	background-color: '.$primary_color.';	}';
				echo '.max-header .nav-container > ul > li.current-menu-item > a, .max-header .nav-container > ul > li.current_page_item > a {	background-color: '.$primary_color.';	}';
				echo '.max-header .nav-container > ul > li.current-menu-parent > a, .max-header .nav-container > ul > li.current-menu-ancestor > a {	background-color: '.$primary_color.';	}';
				echo '.max-header .nav-container > ul > li > a:hover {	background-color: '.$primary_color.';	}';
				
				echo '.max-header .nav-container > ul.menuhovered > li.current-menu-parent:not(:hover) > a,	.max-header .nav-container > ul.menuhovered > li.current-menu-item:not(:hover) > a {	background-color: '.$primary_color.';	}';
				echo '.max-header .nav-container > ul.menuhovered > li.current_page_item:not(:hover) > a, .max-header .nav-container > ul.menuhovered > li.current-menu-parent:not(:hover) > a {	background-color: '.$primary_color.';	}';
				echo '.max-header .nav-container > ul.menuhovered > li.current-menu-ancestor:not(:hover) > a {	background-color: '.$primary_color.';	}';
				
				echo '.max-header .nav-container .current_page_item > a > span, .max-header .nav-container .current_page_ancestor > a > span{	background-color: '.$primary_color.';	}';
				echo '.max-header .nav-container .current-menu-item > a span, .max-header .nav-container .current-menu-ancestor > a > span{	background-color: '.$primary_color.';	}';
				echo '.max-header .nav-container li a:hover span {	background-color: '.$primary_color.';	}';	
				

			}			
			
			if ($custom_css) {
			echo "\n".'/* =============== user styling =============== */'."\n";
			echo $custom_css;
			}
			
			// CLOSE STYLE TAG
			echo "</style>". "\n";
		}
	
		add_action('wp_head', 'idesign_custom_styles');
	}
	
	/* Custom Page CSS
	================================================== */
	function idesign_page_styles() {
		
		global $post;	
		$custom_page_style = "";
			
		if ( function_exists( 'rwmb_meta' ) ) {
			$custom_page_style = rwmb_meta('idesign_page_styles');
		}		
		
		$custom_page_style = wp_filter_nohtml_kses($custom_page_style);
		
		$custom_page_style = str_replace(array('&gt;','\"'),array('>','"'), $custom_page_style);
	
		if(!empty($custom_page_style)) :
			?>
			<style id="nx_page_styles" type="text/css" >
				<?php echo $custom_page_style; ?>
			</style>
			<?php
		endif;
		
	}
	add_action('wp_head', 'idesign_page_styles');