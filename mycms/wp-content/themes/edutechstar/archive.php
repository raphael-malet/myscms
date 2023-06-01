<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edutechstar
*/

get_header(); ?>

<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2><?php the_title(); ?></h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End breadcrumb -->
<div id="content" class="site-content">
<section id="mu-course-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-course-content-area">
          <div class="row">
            <div class="col-md-9">
              <!-- start course content container -->
              <div class="mu-course-container mu-blog-archive">
                <div class="row">
                  <?php
                  if (have_posts()) {

                    while (have_posts()) :
                      the_post(); ?>

                      <div class="col-md-6 col-sm-6">
                        <div id="post-<?php the_ID(); ?>" <?php post_class('package-one blog-box'); ?>>
                          <article class="mu-blog-single-item">
                            <?php if (has_post_thumbnail()) { ?>
                              <figure class="mu-blog-single-img">
                                <?php the_post_thumbnail(' ', array('class' => 'img-responsive'));  ?>
                              <?php } ?>
                              <figcaption class="mu-blog-caption">
                                <h3><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h3>
                              </figcaption>
                              </figure>
                              <div class="mu-blog-meta">
                                <a href="<?php echo  esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a></li>
                                <a href="<?php the_permalink(); ?>"><i class="far fa-calendar-alt"></i> <?php the_date(); ?></a>
                                <span><i class="fa fa-comments"></i></i><?php comments_number(); ?></span>
                              </div>
                              <div class="mu-blog-description">
                                <?php the_excerpt(); ?>
                                <a class="mu-read-more-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'edutechstar') ?> </a>
                              </div>
                          </article>
                        </div>
                      </div>
                      <!-- end course pagination -->
                  <?php endwhile; ?>
                        
                 <?php } else {
                    get_template_part('template-parts/content', 'none');
                  } ?>
                </div>
                <nav>
                 <ul class="pagination comments-pagination">
                    <?php // Previous/next page navigation.
                      the_posts_pagination( array(
                      'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
                      'next_text'          => '<i class="fa fa-angle-double-right"></i>',
                      ) ); ?>
              </ul>
              </nav>
              </div>
              <!-- end course content container -->
            </div>
            <div class="col-md-3">
              <!-- start sidebar -->
              <aside class="mu-sidebar">
                <!-- start single sidebar -->
                <div class="mu-single-sidebar">
                  <?php get_sidebar(); ?>
                  <!-- / end sidebar -->
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
</div>
<?php get_footer(); ?>