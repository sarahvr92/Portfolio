<?php
register_nav_menus(
    array(
        'main-nav' => 'Main Navigation'
    )
);

function portfolio_main_nav() {
    wp_nav_menu(array(
        'container'       => 'nav',
        'container_class' => 'header-navigation',
        'theme_location'  => 'main-nav',
        'depth'           => 1,
        'fallback_cb'     => false
    ));
}

// Add Foundation active class to menu
function required_active_nav_class($classes, $item) {
    if ($item->current == 1 || $item->current_item_ancestor == true) {
        $classes[] = 'active';
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'required_active_nav_class', 10, 2);