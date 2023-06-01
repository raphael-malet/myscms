<?php
/**
 * Template part for displaying results in single page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edutechstar
 */
?>
<article id =" post-<?php the_ID(); ?>"  class="mu-blog-single-item">
  <?php if (has_post_thumbnail()) { ?>
    <figure class="mu-blog-single-img">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(' ', array('class' => 'img-responsive'));  ?>
      <?php } ?>
      <figcaption class="mu-blog-caption">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      </figcaption>
    </figure>
    <div class="mu-blog-meta">
      <a href="<?php echo  esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"><i class="fa fa-user"></i> <?php echo esc_html(get_the_author()) ?></a></li>
      <a href="<?php echo esc_url(get_permalink()) ?>"><i class="fa fa-clock-o"></i> <?php the_date();  ?></a>
      <span><i class="fa fa-comments"></i></i><?php comments_number(); ?></span>
    </div>
    <div class="mu-blog-description"> <?php the_content(); ?> </div>
    <!-- start blog post tags -->
    <?php if (get_the_tag_list() != '') { ?>
      <div class="mu-blog-tags">
        <?php the_tags(); ?>
      </div>
    <?php } ?>
    <!-- End blog post tags -->
</article>
<div class="row">
<div class="col-md-12">
<div id="respond">
<?php (comments_template('', true)); ?>
</div>
</div>
</div>