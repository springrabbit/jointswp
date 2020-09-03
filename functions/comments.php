<?php
// Comment Layout
function joints_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('panel'); ?>>
		<div class="card comment-card">
			<div class="card-section">
				<article id="comment-<?php comment_ID(); ?>">
          <section class="comment-avatar">
            <?php echo get_avatar( $comment, 128 ); ?>
          </section>
					<section class="comment_content clearfix">
            <header class="comment-author">
  						<?php
  							// create variable
  							$bgauthemail = get_comment_author_email();
  						?>
  						<?php printf(__('%s', 'jointswp'), get_comment_author_link()) ?> on
  						<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__(' F jS, Y - g:ia', 'jointswp')); ?> </a></time>
  						<?php edit_comment_link(__('(Edit)', 'jointswp'),'  ','') ?>
  					</header>
  					<?php if ($comment->comment_approved == '0') : ?>
  						<div class="alert alert-info">
  							<p><?php _e('Your comment is awaiting moderation.', 'jointswp') ?></p>
  						</div>
  					<?php endif; ?>
						<?php comment_text(); ?>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
					</section>
				</article>
			</div>
		</div>
	<!-- </li> is added by WordPress automatically -->
<?php
}
