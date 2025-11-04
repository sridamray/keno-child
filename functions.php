<?php
// Exit if accessed directly.
if (! defined('ABSPATH')) exit;

/**
 * Enqueue Parent & Child Theme Styles and Scripts
 */
function keno_child_enqueue_assets()
{



    // Load Parent Theme CSS
    wp_enqueue_style(
        'keno-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'keno-child-animate',
        get_stylesheet_directory_uri() . '/assets/css/animate.css',
        array(),
        '1.0.0' // ← use null or '1.0.0' if filemtime causes issue
    );

    // Load Child Theme Main CSS

    wp_enqueue_style(
        'keno-child-slicknav',
        get_stylesheet_directory_uri() . '/assets/css/slicknav.min.css',
        array(),
        '1.0.0' // ← use null or '1.0.0' if filemtime causes issue
    );
    wp_enqueue_style(
        'keno-child-swiper',
        get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css',
        array(),
        '1.0.0' // ← use null or '1.0.0' if filemtime causes issue
    );
    wp_enqueue_style(
        'keno-child-magnific-popup',
        get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css',
        array(),
        '1.0.0' // ← use null or '1.0.0' if filemtime causes issue
    );


    wp_enqueue_style(
        'keno-child-main-style',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0' // ← use null or '1.0.0' if filemtime causes issue
    );
    wp_enqueue_style(
        'keno-child-wp-fix',
        get_stylesheet_directory_uri() . '/assets/css/wp-fix.css',
        array(),
        '1.0.0' // ← use null or '1.0.0' if filemtime causes issue
    );
    wp_enqueue_style(
        'keno-child-widgets-fix',
        get_stylesheet_directory_uri() . '/assets/css/widgets-style.css',
        array(),
        '1.0.0' // ← use null or '1.0.0' if filemtime causes issue
    );
    wp_enqueue_style(
        'keno-child-custom-spa-fix',
        get_stylesheet_directory_uri() . '/assets/css/custom-spa.css',
        array(),
        '1.0.0' // ← use null or '1.0.0' if filemtime causes issue
    );

    // Load Child Theme JS

    wp_enqueue_script(
        'slicknav',
        get_stylesheet_directory_uri() . '/assets/js/jquery.slicknav.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'keno-child-swipper',
        get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'magnific-popup',
        get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'gsap',
        get_stylesheet_directory_uri() . '/assets/js/gsap.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'split-text',
        get_stylesheet_directory_uri() . '/assets/js/splittext.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'keno-child-scrolltrigger-js',
        get_stylesheet_directory_uri() . '/assets/js/scrolltrigger.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'keno-child-wow-js',
        get_stylesheet_directory_uri() . '/assets/js/wow.min.js',
        array('jquery'),
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'keno-child-main-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'keno_child_enqueue_assets');

$template_parts = array(
    'template-parts/child-functions.php',
);

foreach ($template_parts as $tparts) {
    $filepath = get_stylesheet_directory() . '/' . $tparts;
    if (file_exists($filepath)) {
        require_once $filepath;
    }
}
$inc_parts = array(
    'inc/customizer.php',
    'inc/custom-animation.php',
);

foreach ($inc_parts as $incpart) {
    $filepaths = get_stylesheet_directory() . '/' . $incpart;
    if (file_exists($filepaths)) {
        require_once $filepaths;
    }
}

register_nav_menus(
    array(
        'menu-child' => esc_html__('Main Menu', 'keno'),
    )
);
