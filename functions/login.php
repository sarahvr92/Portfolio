<?php
add_action('login_enqueue_scripts', 'portfolio_login_css', 10);
add_filter('login_headerurl', 'portfolio_login_url');
add_filter('login_headertitle', 'portfolio_login_title');

function portfolio_login_css() {
    wp_enqueue_style('joints_login_css', get_template_directory_uri() . '/assets/css/login.min.css', false);
}

function portfolio_login_url() {
    return home_url();
}

function portfolio_login_title() {
    return get_option('blogname');
}
