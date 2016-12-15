<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage codepamoja
 * @since codepamoja 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
	
		<h3 class="comments-title">Comments</h3>	
		<!-- 	<div></div> -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

			<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'codepamoja' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'codepamoja' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'codepamoja' ) ); ?></div>
			</nav><!-- #comment-nav-above -->

		<?php endif; // Check for comment navigation. ?>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'li',
					'short_ping'  => true,
					'avatar_size' => 34,
				) );
			?>
		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'codepamoja' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'codepamoja' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'codepamoja' ) ); ?></div>
			</nav><!-- #comment-nav-below -->

		<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() ) : ?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'codepamoja' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>
	
	
	<?php comment_form(); ?>

</div><!-- #comments -->