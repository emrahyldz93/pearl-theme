<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pearl
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
<div class="yorumYap col-lg-12 blog-comment-form mb25">
	<div class="mb-15px">
		
		<?php $num = get_comments_number();
		if ($num > 0) : ?>
		<?php endif; ?>

		<?php if (have_comments()) : ?>



			<h2 class="sectionTitle mt52"> <?php comments_number('No Comment', 'One Comment', '% Comment'); ?></h2>
			<ol class="comment_list">
				<?php foreach ($comments as $comment) : ?>

					<li>
						<div class="single-comment">
							<?php echo get_avatar($comment->comment_author, 111); ?>
							<div class="authorDetails">
								<h5><?php comment_author() ?></h5>
								<span><?php comment_date('F jS, Y') ?></span>
							</div>
							<div class="comment">
								<?php echo $comment->comment_content; ?> </p>
							</div>
							<a class="comment-reply-link" href="<?php comment_reply_link($args, $comment, $post); ?>">Reply</a>
						</div>
					</li>

					<?php
					/* Changes every other comment to a different class */
					$oddcomment = (empty($oddcomment)) ? 'class="comments-alt" ' : '';
					?>

				<?php endforeach; /* end for each comment */ ?>

			</ol>

		<?php else : ?>
			<?php if (comments_open()) : ?>
			<?php else : ?>

				<p class="nocomments">This article is closed for comments.</p>

			<?php endif; ?>
		<?php endif; ?>

		<?php ?>
		<?php global $trackbacks; ?>
		<?php if ($trackbacks) : ?>
			<?php $comments = $trackbacks; ?>

			<div id="pingback-trackback">

				<h3 id="trackbacks">feedbacks: <?php echo sizeof($trackbacks); ?></h3>

				<?php foreach ($comments as $comment) : ?>
					<!-- Geriizleme ba??lang???? -->
					<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
						<cite><?php comment_author_link() ?></cite>
						<?php if ($comment->comment_approved == '0') : ?>
							<em>Yorumunuz denetim i??in bekliyor.</em>
						<?php endif; ?>
					</li>
					<!-- Geriizleme biti?? -->
					<?php $oddcomment = (empty($oddcomment)) ? 'class="alt" ' : ''; ?>
				<?php endforeach; ?>

			</div>



			<div class="yorum-sayfalama">
				<?php paginate_comments_links(); ?>
			</div>



		<?php endif; ?>
		<?php ?>

	</div>
</div>
<div class="yorumYap col-lg-12 blog-comment-form mb25">

	<?php

	if (comments_open()) : ?>
	<h2 class="sectionTitle mt30">Leave a Comment</h2>
		<div id="respond" class="mb25">
			<strong>
				<?php comment_form_title('', 'You are currently replying to %s comment.'); ?>
				<span class="cancel-comment-reply">
					<small><?php cancel_comment_reply_link(); ?></small>
				</span>
			</strong>
			<?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
			<?php else : ?>
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comforms">
					<div class="row">
						<?php if (is_user_logged_in()) : ?>
						<?php else : ?>
							<div class="col-lg-4 col-md-12">
								<input type="text" name="author" class="com_inputa" placeholder="Name *">
							</div>
							<div class="col-lg-4 col-md-12">
								<input type="text" name="email" class="com_inputa" placeholder="Email *">
							</div>
							<div class="col-lg-4 col-md-12">
								<input type="text" name="url" class="com_inputa" placeholder="Website">
							</div>
						<?php endif; ?>
						<div class="<?php if (is_user_logged_in()) {
										echo 'yorumText2 p-0 col-lg-12';
									} else {
										echo 'p-0 yorumText2 col-lg-12';
									} ?>">
							<div class="col-lg-12 col-md-12">
								<textarea class="com_textarea" name="comment" placeholder="Comment"></textarea>
							</div>
							<?php comment_id_fields(); ?>
							<?php do_action('comment_form', $post->ID); ?>
						</div>

						<div class="col-lg-12 col-md-12">
							<button type="submit" name="submit" class="btt_btn"><span><i class="icon icon-MessageRight"></i>Post Comment</span></button>
						</div>
					</div>
				</form>
		
			
			<?php endif; ?>
		</div>
	<?php endif; ?>

</div>
