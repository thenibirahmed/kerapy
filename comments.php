<?php
if (post_password_required()) {
	return;
}
?>
<?php $protocol = is_ssl() ? 'https://' : 'http://'; ?>

<?php if (have_comments() || comments_open()) { ?>
	<div id="comment-list">
		<div itemscope itemtype="<?php echo esc_attr($protocol); ?>schema.org/Comment" id="comments-div" class="post-comments comments-area style-1 clearfix">
			<?php if (have_comments()) { ?>
                <h3 class="comments-title pb-4">
                    <?php
                    $comments_number = get_comments_number();
                    if ('1' === $comments_number) {
                        esc_attr_e('1 Comment', 'kerapy');
                    } else {
                        echo esc_html__('Comments', 'kerapy') . ' (0' . number_format_i18n($comments_number) . ')';
                    }
                    ?>
                </h3>

				<div id="comment">
                    <!-- comment list STARTS -->
                    <ol class="comment-list">
                        <?php
                        wp_list_comments(array(
                            'style'       => 'ol',
                            'short_ping'  => true,
                            'avatar_size' => 60
                        ));
                        ?>

                    </ol>
                    <!-- comment list END -->

					<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
						<nav class="navigation comment-navigation clearfix" role="navigation">
							<h1 class="screen-reader-text section-heading"><?php esc_html_e('Comment navigation', 'kerapy'); ?></h1>
							<div class="nav-previous pull-left"><?php previous_comments_link(esc_html__('&larr; Older Comments', 'kerapy')); ?></div>
							<div class="nav-next pull-right"><?php next_comments_link(esc_html__('Newer Comments &rarr;', 'kerapy')); ?></div>
						</nav>
						<!-- .comment-navigation -->
					<?php endif; /* Check for comment navigation */ ?>

					<?php if (!comments_open() && get_comments_number()) : ?>
						<p class="no-comments">
							<?php esc_html_e('Comments are closed.', 'kerapy'); ?>
						</p>
					<?php endif; ?>
				</div>
			<?php } ?>

			<!-- Form Start -->
			<?php
			if (comments_open()) :
				comment_form();
			endif;
			?>
			<!-- Form END -->
		</div>
	</div><!-- #comments -->
<?php } ?>