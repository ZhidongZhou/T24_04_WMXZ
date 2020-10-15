<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Delight Spa
 */

get_header(); ?>
<main id="maincontent">
    <div class="content-area">
        <div class="middle-align content_sidebar">
            <div class="site-main" id="sitemain">
    			<?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'page' ); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>