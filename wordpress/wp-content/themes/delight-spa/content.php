<?php
/**
 * @package Delight Spa
 */
?>
<div class="blog-post-repeat">
    <div class="row">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <div class="col-lg-8 col-md-8">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
                    <?php if ( 'post' == get_post_type() ) : ?>
                        <div class="postmeta">
                            <div class="post-date"><?php echo get_the_date(); ?></div><!-- post-date -->
                            <div class="post-comment"> | <a href="<?php comments_link(); ?>"><?php comments_number(); ?><span class="screen-reader-text"><?php comments_link(); ?></span></a></div>
                            <div class="post-categories"> | <?php the_category( __( ', ', 'delight-spa' ));?></div>
                            <div class="clear"></div>
                        </div><!-- postmeta -->
                    <?php endif; ?>
        	        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
        	            <div class="post-thumb"><?php the_post_thumbnail('medium', array('class' => 'alignleft') );?>
                        </div>
        	        <?php else : ?>
        	            <div class="post-thumb"><?php the_post_thumbnail();?>
        	               <?php endif; ?>
                        </div>
                </div><!-- post-thumb -->
            </header><!-- .entry-header -->
        
            <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                    <p class="read-more"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More &raquo;','delight-spa'); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></p>
                </div><!-- .entry-summary -->
            <?php else : ?>
                <div class="entry-content">
                    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'delight-spa' ) ); ?>
                    <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'delight-spa' ),
                            'after'  => '</div>',
                        ) );
                    ?>
                </div><!-- .entry-content -->
            <?php endif; ?>
        
            <footer class="entry-meta" style="display:none;">
                <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                    <?php
                        /* translators: used between list items, there is a space after the comma */
                        $categories_list = get_the_category_list( __( ', ', 'delight-spa' ) );
                        if ( $categories_list && delight_spa_categorized_blog() ) :
                    ?>
                    <span class="cat-links">
                        <?php 
                        /* translators: used between list items, there is a space after the comma */
                        printf( esc_html(__( 'Posted in %1$s', 'delight-spa' ), $categories_list )); ?>
                    </span>
                    <?php endif; // End if categories ?>
        
                    <?php
                        /* translators: used between list items, there is a space after the comma */
                        $tags_list = get_the_tag_list( '', __( ', ', 'delight-spa' ) );
                        if ( $tags_list ) :
                    ?>
                    <span class="tags-links">
                        <?php 
                        /* translators: used between list items, there is a space after the comma */
                        printf( esc_html(__( 'Tagged %1$s', 'delight-spa' ), $tags_list )); ?>
                    </span>
                    <?php endif; // End if $tags_list ?>
                <?php endif; // End if 'post' == get_post_type() ?>
        
                <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'delight-spa' ), __( '1 Comment', 'delight-spa' ), __( '% Comments', 'delight-spa' ) ); ?></span>
                <?php endif; ?>
        
                <?php edit_post_link( __( 'Edit', 'delight-spa' ), '<span class="edit-link">', '</span>' ); ?>
            </footer><!-- .entry-meta -->
        </article><!-- #post-## -->
    <div class="spacer20"></div>
    </div><!-- blog-post-repeat -->