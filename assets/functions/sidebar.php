<?php
function joints_register_sidebars() {
    register_sidebar(array(
        'id' => 'sidebar1',
        'name' => __('Sidebar 1', 'jointswp'),
        'description' => __('The first (primary) sidebar.', 'jointswp'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'offcanvas',
        'name' => __('Offcanvas', 'jointswp'),
        'description' => __('The offcanvas sidebar.', 'jointswp'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}