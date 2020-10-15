<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Delight Spa
 */

get_header(); ?>
<main id="maincontent">
    <div class="container">
        <div class="middle-align content_sidebar">
            <div class="row">
                <div class="site-main col-lg-8 col-md-8" id="sitemain">
        			<?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'single' ); ?>
                        <?php delight_spa_content_nav( 'nav-below' ); ?>
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() )
                            comments_template();
                        ?>
                    <?php endwhile; // end of the loop. ?>
                </div>
                <div class="col-lg-4 col-md-4">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>