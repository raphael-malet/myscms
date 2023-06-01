<!-- Start from blog -->
<section id="mu-from-blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-from-blog-area">
          <!-- start title -->
          <div class="mu-title">
            <h2><?php echo esc_html(get_theme_mod("edutechstar_blog_Section_Title_Name" , "From Blog"));?></h2>
            <p><?php echo esc_html(get_theme_mod("edutechstar_blog_Section_Subtitle" ,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!"));?></p>
          </div>
          <!-- end title -->  
          <!-- start from blog content   -->
          <div class="mu-from-blog-content">
            <div class="row">
            <?php
                      $post_data = array( 'post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => get_option( 'sticky_posts' ) ); 
                          $post_data = new WP_Query( $post_data );
                          if ( $post_data->have_posts() ) { 
                              $count = 1;
                              while ( $post_data->have_posts() ) : $post_data->the_post(); ?>

                              <div class="col-md-4 col-sm-4">
                              <article class="mu-blog-single-item">
                              <?php if ( has_post_thumbnail() ) { ?>
                                <figure class="mu-blog-single-img">
                                <?php the_post_thumbnail(' ',array('class' => 'img-responsive'));  ?>
                                  <?php } ?>
                                  <figcaption class="mu-blog-caption">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                  </figcaption>                      
                                </figure>
                                <div class="mu-blog-meta">
                                  <a href="<?php echo  esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a>
                                  <a href="#"><i class="fa fa-clock-o"></i><?php the_date(); ?></a>
                                  <span><i class="fa fa-comments"></i><?php comments_number(); ?></span>
                                </div>
                                <div class="mu-blog-description">
                                  <?php the_excerpt(); ?>
                                  <a class="mu-read-more-btn" href="<?php the_permalink() ?>"><?php esc_html_e('Read More','edutechstar')?> </a>
                                </div>
                              </article>
                              </div>
                              <?php endwhile; 
                              wp_reset_postdata(); 
                              }?>
            </div>
          </div>     
          <!-- end from blog content   -->   
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End from blog -->