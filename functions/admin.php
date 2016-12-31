<?php
add_action('admin_menu', 'disable_default_dashboard_widgets');

function disable_default_dashboard_widgets() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
}
