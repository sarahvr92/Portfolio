<?php
add_action('after_setup_theme', 'joints_theme_support');

function joints_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array(
            'comment-list',
            'comment-form',
            'search-form',
        )
    );
    add_theme_support('post-formats',
        array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat'
        )
    );
}
