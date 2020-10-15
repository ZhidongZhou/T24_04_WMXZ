<?php
/**
 * Template Name: Custom home page
 */

get_header(); ?>

<main id="maincontent">
    <?php if( get_theme_mod( 'hide_slider') != '') { ?>
        <?php for($sld=7; $sld<10; $sld++) { ?>
          <?php if( get_theme_mod('page-setting'.$sld)) { ?>
          <?php $slidequery = new WP_query('page_id='.get_theme_mod('page-setting'.$sld,true)); ?>
          <?php while( $slidequery->have_posts() ) : $slidequery->the_post();
              $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
              $img_arr[] = $image;
              $id_arr[] = $post->ID;
            endwhile;
          }
        }
      ?>
      <?php if(!empty($id_arr)){ ?>
        <div id="slider" class="nivoSlider">
          <?php 
          $i=1;
          foreach($img_arr as $url){ ?>
          <?php if(!empty($url)){ ?>
          <img src="<?php echo esc_html($url); ?>" title="#slidecaption<?php echo esc_html($i); ?>" alt="<?php the_title(); ?> post thumbnail image"/>
          <?php }else{ ?>
          <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/default-slide.jpg" title="#slidecaption<?php echo esc_html($i); ?>" alt="<?php the_title(); ?> post thumbnail image"/>
          <?php } ?>
          <?php $i++; }  ?>
        </div>   
      <?php 
      $i=1;
        foreach($id_arr as $id){ 
        $title = get_the_title( $id ); 
        $post = get_post($id); 
        setup_postdata( $post );
        $content = substr(strip_tags(get_the_content()), 0, 150); 
    ?>                 
    <div id="slidecaption<?php echo esc_html($i); ?>" class="nivo-html-caption">
      <div class="top-bar">
        <div class="desc">
          <h4><?php echo esc_html($title); ?></h4>
          <hr class="slide-hr">
          <p><?php echo esc_html($content); ?></p>
          </div>  
        <a class="read-more" href="<?php the_permalink();?>"><?php esc_html_e('Read More', 'delight-spa');?><span class="screen-reader-text"><?php esc_html_e( 'Read More','delight-spa' );?></span></a>
      </div>
    </div>      
  <?php $i++; } ?>
  <?php } else { ?>
  <?php } }?>

  <section id="startup">
    <div class="container">
      <div class="video-post">
        <?php
          $args = array( 'name' => get_theme_mod('about_post',''));
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="row">
                <div class="col-md-6 col-sm-6">                  
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
                  <hr class="slide-hr">
                    <p><?php the_excerpt(); ?></p>
                      <a class="read-more" href="<?php the_permalink(); ?>"></i><?php esc_html_e('Read More','delight-spa'); ?><span class="screen-reader-text"><?php esc_html_e( 'Read More','delight-spa' );?></span></a>
                </div> 
                <div class="col-md-6 col-sm-6">
                  <?php
                    $content = apply_filters( 'the_content', get_the_content() );
                    $video = false;

                    // Only get video from the content if a playlist isn't present.
                    if ( false === strpos( $content, 'wp-playlist-script' ) ) {
                      $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
                    }
                  ?>
                  <div class="box-image animated fadeInDown">
                     <?php
                        if ( ! is_single() ) {
                          // If not a single post, highlight the video file.
                          if ( ! empty( $video ) ) {
                            foreach ( $video as $video_html ) {
                              echo '<div class="entry-video">';
                                echo $video_html;
                              echo '</div>';
                            }
                          }
                          elseif(has_post_thumbnail()) { 
                            the_post_thumbnail(); 
                          } 
                        }; 
                      ?>
                  </div>
                </div>
              </div>
            <?php endwhile; 
            wp_reset_postdata();?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php
        endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>