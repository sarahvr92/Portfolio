<?php
require_once(get_template_directory() . '/functions/theme-support.php');
require_once(get_template_directory() . '/functions/cleanup.php');
require_once(get_template_directory() . '/functions/enqueue-scripts.php');
require_once(get_template_directory() . '/functions/admin.php');
require_once(get_template_directory() . '/functions/login.php');
require_once(get_template_directory() . '/functions/theme-options.php');
require_once(get_template_directory() . '/functions/menu.php');
require_once(get_template_directory() . '/functions/metaboxes.php');
require_once(get_template_directory() . '/functions/disable-emoji.php');

require_once(get_template_directory() . '/assets/functions/sidebar.php');
require_once(get_template_directory() . '/assets/functions/comments.php');
require_once(get_template_directory() . '/assets/functions/page-navi.php');

add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);

function remove_width_attribute($html) {
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}

// Remove All Yoast HTML Comments
if (defined('WPSEO_VERSION')) {
    add_action('get_header', function () {
        ob_start(function ($o) {
            return preg_replace('/\n?<.*?yoast.*?>/mi', '', $o);
        });
    });

    add_action('wp_head', function () {
        ob_end_flush();
    }, 999);
}