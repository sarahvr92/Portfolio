<?php
add_action('cmb2_admin_init', 'portfolio_register_split_page_meta');

function portfolio_register_split_page_meta() {
    $prefix = '_split_page_';

    $metabox = new_cmb2_box(
        array(
            'id'           => $prefix . 'metabox',
            'title'        => 'Split Page Options',
            'object_types' => array('page'),
            'context'      => 'normal',
            'priority'     => 'high',
            'show_names'   => true,
        )
    );
    $metabox->add_field(
        array(
            'name' => 'Page Title (Subheader)',
            'id'   => $prefix . 'subtitle',
            'type' => 'text',
        )
    );
    $metabox->add_field(
        array(
            'name' => 'Page Title',
            'id'   => $prefix . 'title',
            'type' => 'text',
        )
    );
}