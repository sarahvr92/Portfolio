<?php
require_once(get_template_directory() . '/functions/theme-support.php');
require_once(get_template_directory() . '/functions/cleanup.php');
require_once(get_template_directory() . '/functions/enqueue-scripts.php');
require_once(get_template_directory() . '/functions/admin.php');
require_once(get_template_directory() . '/functions/login.php');
require_once(get_template_directory() . '/functions/theme-options.php');
require_once(get_template_directory() . '/functions/menu.php');

require_once(get_template_directory() . '/assets/functions/sidebar.php');
require_once(get_template_directory() . '/assets/functions/comments.php');
require_once(get_template_directory() . '/assets/functions/page-navi.php');

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php');

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