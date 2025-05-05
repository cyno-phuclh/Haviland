<?php
/**
 * Theme functions and definitions 
 *
 * @package HAVILAND
 */

if (!defined('ABSPATH')) {
    exit; // out nếu truy cập truc tiep 
}

// Define theme constants
    define('CYNO_HAVILAND_VERSION', '1.0.0');
    define('CYNO_HAVILAND_DIR', get_template_directory());
    define('CYNO_HAVILAND_URL', get_template_directory_uri());
    define('CYNO_HAVILAND_INCLUDES_DIR', CYNO_HAVILAND_DIR . '/includes');
    define('CYNO_HAVILAND_ASSETS_URL', CYNO_HAVILAND_URL . '/assets');
    define('CYNO_HAVILAND_VENDOR_URL', CYNO_HAVILAND_URL . '/vendor');

// Load theme initialization class

require_once CYNO_HAVILAND_INCLUDES_DIR . '/class-cyno-haviland-init.php';

// Enqueue theme styles and scripts
function cyno_haviland_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('cyno-haviland-style', get_stylesheet_uri(), array(), CYNO_HAVILAND_VERSION);
    
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0');
    
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
}
add_action('wp_enqueue_scripts', 'cyno_haviland_enqueue_scripts');

// Đăng ký custom post type Đặt phòng
function create_posttype_datphong() {
    register_post_type('datphong',
        array(
            'labels' => array(
                'name' => __('Đặt phòng'),
                'singular_name' => __('Đặt phòng')
            ),
            'public' => true,
            'has_archive' => true, // Quan trọng để có archive!
            'rewrite' => array('slug' => 'datphong'), // Đường dẫn sẽ là /datphong/
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
        )
    );
}
add_action('init', 'create_posttype_datphong');
