<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
              <div class="mu-course-container mu-blog-single">
                <div class="row">
                  <div class="col-md-12">
                    <?php
                    while (have_posts()) : the_post();
                      get_template_part('template-parts/content', 'single'); ?>
                    <?php endwhile; ?>
                   </div>
                  </div>
                 </div>
                </div>
              <div class="col-md-3">
              <aside class="mu-sidebar" style="margin-left:15px">
                <?php get_sidebar(); ?>
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