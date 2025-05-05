<?php
/**
 * Custom Post Types
 *
 * @package HAVILAND
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Custom Post Types
 */
function cyno_haviland_register_post_types() {
    // Đặt phòng
    register_post_type('datphong', array(
        'labels' => array(
            'name' => __('Đặt phòng', 'cyno-haviland'),
            'singular_name' => __('Đặt phòng', 'cyno-haviland'),
            'add_new' => __('Thêm mới', 'cyno-haviland'),
            'add_new_item' => __('Thêm đặt phòng mới', 'cyno-haviland'),
            'edit_item' => __('Sửa đặt phòng', 'cyno-haviland'),
            'new_item' => __('Đặt phòng mới', 'cyno-haviland'),
            'view_item' => __('Xem đặt phòng', 'cyno-haviland'),
            'search_items' => __('Tìm đặt phòng', 'cyno-haviland'),
            'not_found' => __('Không tìm thấy đặt phòng nào', 'cyno-haviland'),
            'not_found_in_trash' => __('Không tìm thấy đặt phòng nào trong thùng rác', 'cyno-haviland'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'datphong'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-calendar-alt',
        'show_in_rest' => true,
    ));

    // Căn hộ dài hạn
    register_post_type('canhodaihan', array(
        'labels' => array(
            'name' => __('Căn hộ dài hạn', 'cyno-haviland'),
            'singular_name' => __('Căn hộ dài hạn', 'cyno-haviland'),
            'add_new' => __('Thêm mới', 'cyno-haviland'),
            'add_new_item' => __('Thêm căn hộ mới', 'cyno-haviland'),
            'edit_item' => __('Sửa căn hộ', 'cyno-haviland'),
            'new_item' => __('Căn hộ mới', 'cyno-haviland'),
            'view_item' => __('Xem căn hộ', 'cyno-haviland'),
            'search_items' => __('Tìm căn hộ', 'cyno-haviland'),
            'not_found' => __('Không tìm thấy căn hộ nào', 'cyno-haviland'),
            'not_found_in_trash' => __('Không tìm thấy căn hộ nào trong thùng rác', 'cyno-haviland'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'canhodaihan'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-building',
        'show_in_rest' => true,
    ));
}
add_action('init', 'cyno_haviland_register_post_types'); 