<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Delight Spa
 */

get_header(); ?>
<main id="maincontent">
    <div class="content-area">
        <div class="middle-align">
            <div class="error-404 not-found" id="sitefull">
                <header class="page-header">
                    <h1 class="title-404"><?php esc_html_e( '404 Not Found', 'delight-spa' ); ?></h1>
                </header>
                <div class="page-content">
                    <p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn..... Don\'t worry... it happens to the best of us.', 'delight-spa' ); ?></p>                
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>