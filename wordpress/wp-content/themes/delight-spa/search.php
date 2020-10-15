<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Delight Spa
 */

get_header(); ?>
<main id="maincontent">
    <div class="container">
        <div class="middle-align content_sidebar">
            <div class="row">
                <div class="site-main col-lg-8 col-md-8" id="sitemain">
        			<?php if ( have_posts() ) : ?>
                        <header>
                            <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s', 'delight-spa' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        </header>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', 'search' ); ?>
                        <?php endwhile; ?>
                        <?php the_posts_pagination(); ?>
                    <?php else : ?>
                        <?php get_template_part( 'no-results', 'search' ); ?>
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