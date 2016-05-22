
<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'juscchneider' ); ?></p>
</div>

	<?php return; endif; ?>

<div class="section-header">
	<span class="icon">
		<i class="fa fa-comments fa-2x"></i>
	</span>
	<h1 class="section-title"><?php comments_number('Comentários'); ?></h1>		
</div>

<?php if (have_comments()) : ?>

	<ul class="commentlist">
		<?php wp_list_comments('type=comment&callback=jucomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'juscchneider' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>