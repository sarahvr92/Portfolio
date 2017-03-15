<?php
add_action('wp_enqueue_scripts', 'portfolio_site_scripts', 999);

function portfolio_site_scripts() {
    global $wp_styles;

    wp_enqueue_style('site', get_template_directory_uri() . '/assets/css/style.min.css', array(), '', 'all');

    wp_enqueue_script('foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array('jquery'), '6.2.3', true);
    wp_enqueue_script('site-js', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), '', true);

    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
    }
}
