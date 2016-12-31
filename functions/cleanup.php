<?php
add_action('after_setup_theme', 'portfolio_start', 16);
add_filter('post_class', 'remove_sticky_class');

function portfolio_start() {
    add_action('init', 'portfolio_head_cleanup');
    add_filter('wp_head', 'portfolio_remove_wp_widget_recent_comments_style', 1);
    add_action('wp_head', 'portfolio_remove_recent_comments_style', 1);
    add_filter('gallery_style', 'portfolio_gallery_style');
    add_action('widgets_init', 'joints_register_sidebars');
    add_filter('excerpt_more', 'portfolio_excerpt_more');
}

function portfolio_head_cleanup() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link', 10);
    remove_action('wp_head', 'start_post_rel_link', 10);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    remove_action('wp_head', 'wp_generator');
}

function portfolio_remove_wp_widget_recent_comments_style() {
    if (has_filter('wp_head', 'wp_widget_recent_comments_style')) {
        remove_filter('wp_head', 'wp_widget_recent_comments_style');
    }
}

function portfolio_remove_recent_comments_style() {
    global $wp_widget_factory;
    if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
        remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
    }
}

function portfolio_gallery_style($css) {
    return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}

function portfolio_excerpt_more($more) {
    global $post;
    return '<a class="excerpt-read-more" href="' . get_permalink($post->ID) . '" title="' . __('Read', 'jointswp') . get_the_title($post->ID) . '">' . __('... Read more &raquo;', 'jointswp') . '</a>';
}

function remove_sticky_class($classes) {
    if (in_array('sticky', $classes)) {
        $classes = array_diff($classes, array("sticky"));
        $classes[] = 'wp-sticky';
    }

    return $classes;
}

function joints_get_the_author_posts_link() {
    global $authordata;
    if (!is_object($authordata))
        return false;
    $link = sprintf(
        '<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
        get_author_posts_url($authordata->ID, $authordata->user_nicename),
        esc_attr(sprintf(__('Posts by %s', 'jointswp'), get_the_author())), // No further l10n needed, core will take care of this one
        get_the_author()
    );
    return $link;
}