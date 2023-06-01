<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alturas
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
  <article class="mu-blog-single-item">
    <?php if (has_post_thumbnail()) { ?>
      <figure class="mu-blog-single-img">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(' ', array('class' => 'img-responsive'));  ?>
        <?php } ?>
      </figure>
      <div class="mu-blog-description"> <?php the_content();
        wp_link_pages(
          array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'edutechstar'),
            'after'  => '</div>',
          )
        );
        ?>
      </div>
  </article>
</div>