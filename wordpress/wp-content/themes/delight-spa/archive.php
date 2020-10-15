<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Delight Spa
 */

get_header(); ?>
<main id="maincontent">
    <div class="conatiner">
        <div class="middle-align content_sidebar">
            <div class="row">
                <div class="site-main col-lg-8 col-md-8" id="sitemain">
        			<?php if ( have_posts() ) : ?>
                        <header class="page-header">
                            <?php
            					the_archive_title( '<h1 class="page-title">', '</h1>' );
            					the_archive_description( '<div class="taxonomy-description">', '</div>' );
        				    ?>
                        </header><!-- .page-header -->
        				<?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', get_post_format() ); ?>
                        <?php endwhile; ?>
                        <?php the_posts_pagination(); ?>
                    <?php else : ?>
                        <?php get_template_part( 'no-results', 'archive' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4 col-md-4">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>