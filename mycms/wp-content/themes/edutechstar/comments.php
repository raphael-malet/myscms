<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edutechstar
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}
?>

<div id="comments" class="col-md-12 comment-box post-comment-section gray-bg">
	<?php
	// You can start editing here -- including this comment!
	if (have_comments()) : ?>
		<h3 class="comments-title">
			<?php
			printf( // WPCS: XSS OK.
				esc_html(_nx(' Comment (%2$s)', ' Comments (%1$s)', get_comments_number(), 'comments title', 'edutechstar')),
				number_format_i18n(get_comments_number()),
				'<span>' . get_the_title() . '</span>'
			);
			?>
		</h3>

		<ul class="media-list">
			<?php
			wp_list_comments(array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size' => 77,
			));
			?>
		</ul><!-- .comment-list -->

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? 
		?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php _e('Comment navigation', 'edutechstar'); ?></h2>
				<div class="nav-links">

					<div class="nav-previous"><?php previous_comments_link(__('Older Comments', 'edutechstar')); ?></div>
					<div class="nav-next"><?php next_comments_link(__('Newer Comments', 'edutechstar')); ?></div>

				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-below -->
	<?php
		endif; // Check for comment navigation.
	endif; // Check for have_comments().
	?>
</div><!-- #comments -->
<?php
// If comments are closed and there are comments, let's leave a little note, shall we?
if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
	<p class="no-comments"><?php esc_html_e('Comments are closed.', 'edutechstar'); ?></p>
<?php
endif;
comment_form();
?>