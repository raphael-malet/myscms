<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edutechstar
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 col-sm-6'); ?>>
    <div class='package-one blog-box' >
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
                 <a href="<?php echo esc_url(get_permalink()) ?>"><i class="far fa-calendar-alt"></i> <?php the_date();  ?></a>
                 <span><i class="fa fa-comments"></i></i><?php comments_number(); ?></span>
               </div>
                <div class="mu-blog-description">
              <?php the_excerpt(); ?>
              <a class="mu-read-more-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'edutechstar') ?> </a>
            </div>
        </article>
    </div>
</div>