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
