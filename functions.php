<?php
/**
 * Theme functions and definitions
 *
 * @package HAVILAND
 */

if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
define('CYNO_HAVILAND_VERSION', '1.0.0');
define('CYNO_HAVILAND_DIR', get_template_directory());
define('CYNO_HAVILAND_URL', get_template_directory_uri());
define('CYNO_HAVILAND_INC_DIR', CYNO_HAVILAND_DIR . '/inc');
define('CYNO_HAVILAND_ASSETS_URL', CYNO_HAVILAND_URL . '/assets');
define('CYNO_HAVILAND_IMAGES_URL', CYNO_HAVILAND_URL . '/image');
define('CYNO_HAVILAND_CSS_URL', CYNO_HAVILAND_ASSETS_URL . '/css');
define('CYNO_HAVILAND_JS_URL', CYNO_HAVILAND_ASSETS_URL . '/js');
define('CYNO_HAVILAND_VENDOR_URL', CYNO_HAVILAND_ASSETS_URL . '/vendor');

// Load theme initialization
require_once CYNO_HAVILAND_INC_DIR . '/class-cyno-haviland-init.php';

// Load custom post types
require_once CYNO_HAVILAND_INC_DIR . '/custom-post-types.php';

// Load template functions
require_once CYNO_HAVILAND_INC_DIR . '/template-functions.php';

/**
 * Enqueue scripts and styles
 */
function cyno_haviland_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('cyno-haviland-style', get_stylesheet_uri(), array(), CYNO_HAVILAND_VERSION);
    
    // Enqueue custom CSS
    wp_enqueue_style('cyno-haviland-main', CYNO_HAVILAND_ASSETS_URL . '/css/style.css', array(), CYNO_HAVILAND_VERSION);
    wp_enqueue_style('cyno-haviland-responsive', CYNO_HAVILAND_ASSETS_URL . '/css/responsive.css', array(), CYNO_HAVILAND_VERSION);
    
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', CYNO_HAVILAND_ASSETS_URL . '/vendor/bootstrap/css/bootstrap.min.css', array(), '5.3.0');
    
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap', CYNO_HAVILAND_ASSETS_URL . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
    
    // Enqueue custom JS
    wp_enqueue_script('cyno-haviland-main', CYNO_HAVILAND_ASSETS_URL . '/js/main.js', array('jquery'), CYNO_HAVILAND_VERSION, true);
}
add_action('wp_enqueue_scripts', 'cyno_haviland_scripts');

/**
 * Theme setup
 */
function cyno_haviland_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'cyno-haviland'),
        'footer' => esc_html__('Footer Menu', 'cyno-haviland'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'cyno_haviland_setup');

// Đăng ký custom post type Hotel
function register_hotel_post_type() {
    register_post_type('hotel', array(
        'labels' => array(
            'name' => 'Khách sạn',
            'singular_name' => 'Khách sạn'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'hotel'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-building',
    ));
}
add_action('init', 'register_hotel_post_type');

// Đăng ký custom post type Place
function register_place_post_type() {
    register_post_type('place', array(
        'labels' => array(
            'name' => 'Địa điểm cho thuê',
            'singular_name' => 'Địa điểm'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'place'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-location-alt',
    ));
}
add_action('init', 'register_place_post_type');
