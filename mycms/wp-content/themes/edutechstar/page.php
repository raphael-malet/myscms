<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edutechstar
*/

get_header(); ?>
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
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                    <?php if (have_posts()) :
                      while (have_posts()) : the_post(); 
                        get_template_part( 'template-parts/content', 'page' );  
                        if ( comments_open() || get_comments_number() ) :
                          comments_template();
                        endif;
                      endwhile;
                    endif; ?>
                  </div>
                </div>
                <!-- end course content container -->
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
    </div>
  </section>
</div>
<?php get_footer(); ?>