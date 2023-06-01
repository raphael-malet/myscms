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
                      the_post(); 
                        get_template_part( 'template-parts/content', get_post_type() );
                   endwhile; ?>
                 <?php } else {
                    get_template_part('template-parts/content', 'none');
                  } ?>
                </div>
                 <nav>
                   <ul class="pagination comments-pagination">
                     <?php 
                          the_posts_pagination( array(
                          'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
                          'next_text'          => '<i class="fa fa-angle-double-right"></i>',
                          ) ); ?>
                     </ul>
                  </nav>
              </div>
             </div>
            <div class="col-md-3">
              <aside class="mu-sidebar">
                <div class="mu-single-sidebar">
                  <?php get_sidebar(); ?>
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