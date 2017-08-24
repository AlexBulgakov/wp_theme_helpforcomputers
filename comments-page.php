<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Help4Apple
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>


<?php 
function mytheme_comment($comment, $args, $depth){
   $GLOBALS['comment'] = $comment; ?>
		<li style="list-style: none;" id="comment-<?php comment_ID(); ?>">
		  <h4>Отзывы</h4>
		  
				<p><?php comment_text() ?></p>
				<div class="user">
					<p><span><?php comment_author() ?></span></p>
					<p><span><?php comment_author_email() ?></span></p>
					<p><span><?php comment_date() ?></span></p>
				</div>
<?php
}
?>
<?php if ($comment->comment_approved == '0') : ?>
	<em>Ваш комментарий ожидает проверки.</em>
	<br />
<?php endif; ?>

<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>