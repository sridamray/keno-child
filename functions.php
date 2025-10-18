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

    // Load Child Theme Main CSS
    wp_enqueue_style(
        'keno-child-main-style',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        array('keno-parent-style'), // Make sure it loads after parent
        filemtime(get_stylesheet_directory() . '/assets/css/main.css')
    );

    // Load Child Theme JS
    wp_enqueue_script(
        'keno-child-main-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array('jquery'), // dependencies
        filemtime(get_stylesheet_directory() . '/assets/js/main.js'),
        true // Load in footer
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
);

foreach ($inc_parts as $incpart) {
    $filepaths = get_stylesheet_directory() . '/' . $incpart;
    if (file_exists($filepaths)) {
        require_once $filepaths;
    }
}
