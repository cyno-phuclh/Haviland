<?php
/**
 * Theme initialization class
 *
 * @package HAVILAND
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Main theme class
 */
class Cyno_Haviland_Init {
    /**
     * Instance of this class
     */
    private static $instance = null;

    /**
     * Get instance of this class
     */
    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->init_hooks();
    }

    /**
     * Initialize hooks
     */
    private function init_hooks() {
        // Add theme support
        add_action('after_setup_theme', array($this, 'setup_theme'));
        
        // Register widget areas
        add_action('widgets_init', array($this, 'register_widget_areas'));
        
        // Add custom image sizes
        add_action('after_setup_theme', array($this, 'add_image_sizes'));
    }

    /**
     * Theme setup
     */
    public function setup_theme() {
        // Add theme support
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');
        add_theme_support('align-wide');
        add_theme_support('editor-styles');
        add_theme_support('wp-block-styles');
    }

    /**
     * Register widget areas
     */
    public function register_widget_areas() {
        register_sidebar(array(
            'name'          => esc_html__('Sidebar', 'cyno-haviland'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'cyno-haviland'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
    }

    /**
     * Add custom image sizes
     */
    public function add_image_sizes() {
        add_image_size('cyno-haviland-featured', 1200, 600, true);
        add_image_size('cyno-haviland-thumbnail', 300, 200, true);
    }
}

// Initialize the theme
Cyno_Haviland_Init::get_instance(); 