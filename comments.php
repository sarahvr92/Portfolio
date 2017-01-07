<?php if (post_password_required()) {
    return;
} ?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php printf( // WPCS: XSS OK.
                esc_html(_nx('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title')),
                number_format_i18n(get_comments_number()),
                '<span>' . get_the_title() . '</span>'
            ); ?>
        </h2>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php _e('Comment navigation'); ?></h2>

                <div class="nav-links">
                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments')); ?></div>
                </div>
            </nav>
        <?php endif; ?>

        <ol class="commentlist">
            <?php wp_list_comments('type=comment&callback=joints_comments'); ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php _e('Comment navigation'); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments')); ?></div>

                </div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php if (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments"><?php _e('Comments are closed.'); ?></p>
    <?php endif; ?>

    <?php comment_form(array('class_submit' => 'button')); ?>
</div>