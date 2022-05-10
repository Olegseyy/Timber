<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
<div class="container">
	<?php
	if ( have_comments() ) :
		?>
		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>
		<?php
		the_comments_navigation();
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'timber' ); ?></p>
			<?php
		endif;
	endif; 
	comment_form();
	?>
</div>
</div>
