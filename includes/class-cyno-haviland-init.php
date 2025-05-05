<?php 
/**
 * 
 *
 */
/** Kiểm Tra bảo mật ngăn truy cập URL  */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class  cyno_haviland_init {
    /**
     * Instance 
     * Khai báo lớp haviland để quản lý việc khởi tạo theme. */
    private static $instance = null;

    /** 
     * constructor 
     * Thiết lập các hooks(mốc nối ) của wp
     * tự động đăng ký hook tích hợp wp 
     */

     public function __construct() {
        $this->init_hooks();
    }
    /**tiết kiệm tài nguyên khi trung instance */
    public static function instance() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function init_hooks() {
        add_action('after_setup_theme', array($this, 'setup')); /** gọi setup() thiết lập tính năng theme */
        add_action('wp_enqueue_scripts', array($this, 'register_scripts'));/** đăng ký scripts/style */
        add_action('wp_enqueue_scripts', array($this, 'register_styles'));/**... */
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));/**... */
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        add_filter('nav_menu_css_class', array($this, 'nav_menu_css_class'), 10, 2);/**tùy chỉnh css cho menu */
        add_filter('nav_menu_link_attributes', array($this, 'nav_menu_link_attributes'), 10, 3);/** tùy chỉnh thuộc tính của liên kết menu */
    }
    /**theme setup */
    public function setup() {
        /** thêm liên kết rss feed vào head */
        add_theme_support('automatic-feed-links');
        /**kích hoạt hỗ trợ hình ảnh nổi bật  */
        add_theme_support('post-thumbnails');
        /**hỗ trợ video tự resp */
        add_theme_support('responsive-embeds');
        /**đăng ký hai vị trí menu */
        register_nav_menus(array(
            /**menu chính  */
            'primary' => esc_html__('Primary Menu', 'cyno_haviland'),
            /**menu ở footer 
             * hàm esc_html đảm bảo các chuỗi được dịch an toàn với text
            */
            'footer' => esc_html__('Footer Menu', 'cyno_haviland'),
          /**hỗ trợ logo tùy chỉnh  */  
        ));
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));
    }
    /** đăng ký scripts */
    public function register_scripts() {
        $scripts = apply_filters('cyno_haviland_register_scripts', array(
            'bootstrap-bundle' => array(
                'src'     => CYNO_HAVILAND_VENDOR_URL . '/bootstrap/js/bootstrap.bundle.min.js',
                'deps'    => array('jquery'),
                'version' => '5.3.0',
                'in_footer' => true,
            ),
            'cyno-bs-script' => array(
                'src'     => CYNO_HAVILAND_ASSETS_URL . '/js/frontend.js',
                'deps'    => array('jquery', 'bootstrap-bundle'),
                'version' => CYNO_HAVILAND_VERSION,
                'in_footer' => true,
            ),
        ));

        foreach ($scripts as $handle => $script) {
            wp_register_script(
                $handle,
                $script['src'],
                isset($script['deps']) ? $script['deps'] : array(),
                $script['version'],
                $script['in_footer']
            );
        }
    }
    /** đăng ký style */
    public function register_styles() {
        $styles = apply_filters('cyno_haviland_register_styles', array(
            'bootstrap' => array(
                'src'     => CYNO_HAVILAND_VENDOR_URL . '/bootstrap/css/bootstrap.min.css',
                'deps'    => array(),
                'version' => '5.3.0',
                'media'   => 'all',
            ),
            'cyno-bs-style' => array(
                'src'     => CYNO_HAVILAND_ASSETS_URL . '/css/frontend.css',
                'deps'    => array('bootstrap'),
                'version' => CYNO_HAVILAND_VERSION,
                'media'   => 'all',
            ),
        ));
    
        foreach ($styles as $handle => $style) {
            wp_register_style(
                $handle,
                $style['src'],
                isset($style['deps']) ? $style['deps'] : array(),
                $style['version'],
                $style['media']
            );
        }
    }
    /**download scripts */
    public function enqueue_scripts() {
        wp_enqueue_script('jquery');
        
        $scripts = apply_filters('cyno_haviland_enqueue_scripts', array(
            'bootstrap-bundle',
            'cyno-bs-script',
        ));

        foreach ($scripts as $handle) {
            wp_enqueue_script($handle);
        }

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
    /**download style */
    public function enqueue_styles() {
        $styles = apply_filters('cyno_haviland_enqueue_styles', array(
            'bootstrap',
            'cyno-bs-style',
        ));
    
        foreach ($styles as $handle) {
            wp_enqueue_style($handle);
        }
    }
    /**theem css cho menu  */
    public function nav_menu_css_class($classes, $item) {
        $classes[] = 'nav-item';
        return $classes;
    }
    /** them css lien ket menu  */
    public function nav_menu_link_attributes($atts, $item, $args) {
        $atts['class'] = 'nav-link';
        return $atts;
    }
    /**khởi tạo theme */
    
}
function cyno_haviland_init() {
    return cyno_haviland_init::instance();
}
/*** chạy themes */
/*** chạy themes */
cyno_haviland_init();