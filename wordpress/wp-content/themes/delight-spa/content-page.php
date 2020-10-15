<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Delight Spa
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="entry-content">
			<div class="row">
				<div class="content-page col-lg-8 col-md-8">
					<header class="entry-header">
						<h1 class="entry-title"><?php if(the_title( '', '', false ) !='') the_title(); else esc_html_e('Untitled','delight-spa');?></h1>
					</header>
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<?php
                    //If comments are open or we have at least one comment, load up the comment template
                    	if ( comments_open() || '0' != get_comments_number() )
                        	comments_template();
                    ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'delight-spa' ),
							'after'  => '</div>',
						) );
					?>
					<?php edit_post_link(esc_html__( 'Edit', 'delight-spa' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
				</div>
				<div class="page-sidebar col-lg-4 col-md-4">
					<div id="sidebar">
						<?php dynamic_sidebar('sidebar-1'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>