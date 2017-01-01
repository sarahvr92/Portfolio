<?php

class portfolio_theme_options {
    private $key = 'portfolio_options';
    private $metabox_id = 'portfolio_option_metabox';
    protected $title = '';
    protected $options_page = '';
    private static $instance = null;

    private function __construct() {
        $this->title = __('Theme Options');
    }

    public static function get_instance() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
            self::$instance->hooks();
        }
        return self::$instance;
    }

    public function hooks() {
        add_action('admin_init', array($this, 'init'));
        add_action('admin_menu', array($this, 'add_options_page'));
        add_action('cmb2_admin_init', array($this, 'add_options_page_metabox'));
    }

    public function init() {
        register_setting($this->key, $this->key);
    }

    public function add_options_page() {
        $this->options_page = add_menu_page($this->title, $this->title, 'manage_options', $this->key, array($this, 'admin_page_display'));
        add_action("admin_print_styles-{$this->options_page}", array('CMB2_hookup', 'enqueue_cmb_css'));
    }

    public function admin_page_display() {
        ?>
        <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
            <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
            <?php cmb2_metabox_form($this->metabox_id, $this->key); ?>
        </div>
        <?php
    }

    function add_options_page_metabox() {
        add_action("cmb2_save_options-page_fields_{$this->metabox_id}", array($this, 'settings_notices'), 10, 2);
        $prefix = '_theme_';

        $portfolio_theme_options = new_cmb2_box(array(
            'id'         => $this->metabox_id,
            'hookup'     => false,
            'cmb_styles' => false,
            'show_on'    => array(
                'key'   => 'options-page',
                'value' => array($this->key,)
            ),
        ));

        $portfolio_theme_options->add_field(
            array(
                'name' => __('Social Media'),
                'id'   => $prefix . 'social_title',
                'type' => 'title'
            )
        );

        $portfolio_theme_options->add_field(
            array(
                'name'    => __('Dribbble'),
                'id'      => $prefix . 'dribbble',
                'type'    => 'text_url',
            )
        );

        $portfolio_theme_options->add_field(
            array(
                'name'    => __('Github'),
                'id'      => $prefix . 'github',
                'type'    => 'text_url',
            )
        );

        $portfolio_theme_options->add_field(
            array(
                'name'    => __('LinkedIn'),
                'id'      => $prefix . 'linkedin',
                'type'    => 'text_url',
            )
        );

        $portfolio_theme_options->add_field(
            array(
                'name'    => __('Twitter'),
                'id'      => $prefix . 'twitter',
                'type'    => 'text_url',
            )
        );
    }

    public function settings_notices($object_id, $updated) {
        if ($object_id !== $this->key || empty($updated)) {
            return;
        }
        add_settings_error($this->key . '-notices', '', __('Settings updated.'), 'updated');
        settings_errors($this->key . '-notices');
    }

    public function __get($field) {
        if (in_array($field, array('key', 'metabox_id', 'title', 'options_page'), true)) {
            return $this->{$field};
        }
        throw new Exception('Invalid property: ' . $field);
    }
}

function myprefix_admin() {
    return portfolio_theme_options::get_instance();
}

function myprefix_get_option($key = '') {
    return cmb2_get_option(myprefix_admin()->key, $key);
}

myprefix_admin();