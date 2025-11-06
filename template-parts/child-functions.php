<?php
// Header Action Function
function keno_child_check_header()
{

    get_template_part('template-parts/header/header');
}
add_action('keno_child_header_style', 'keno_child_check_header', 10);

// Add Bootstrap Classes to WP Menu Items
function keno_bootstrap_nav_classes($classes, $item, $args)
{
    if (isset($args->theme_location) && $args->theme_location === 'menu-1') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'keno_bootstrap_nav_classes', 10, 3);

// Add nav-link class to <a> tags
function keno_add_link_atts($atts, $item, $args)
{
    if (isset($args->theme_location) && $args->theme_location === 'menu-1') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'keno_add_link_atts', 10, 3);

function keno_child_header_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => 'menu-child',
            'menu_class'     => 'navbar-nav mr-auto', // This adds classes to <ul>
            'menu_id'        => 'menu',
            'container'      => false,
        )
    );
}

function my_dynamic_css_for_btn_default()
{

    // 1. Make sure the main stylesheet is enqueued first
    wp_enqueue_style('main-style-handle', get_stylesheet_directory_uri() . '/style.css');

    // 2. Then generate the image URL dynamically
    $image_url = get_stylesheet_directory_uri() . '/assets/img/arrow-secondary.svg';
    $image_url2 = get_stylesheet_directory_uri() . '/assets/img/arrow-accent.svg';

    // 3. Then inject inline CSS
    $custom_css = "
        .btn-default::before {
            background-image: url('{$image_url}');
        }
        .readmore-btn::before  {
            background-image: url('{$image_url2}');
        }
    ";
    wp_add_inline_style('main-style-handle', $custom_css);
}
add_action('wp_enqueue_scripts', 'my_dynamic_css_for_btn_default');


// elementor widget function

function register_child_theme_elementor_widgets()
{
    require_once get_stylesheet_directory() . '/inc/elementor/dora-button-widget.php';
    require_once get_stylesheet_directory() . '/inc/elementor/dora-contact-circle.php';
    require_once get_stylesheet_directory() . '/inc/elementor/dora-service.php';
    require_once get_stylesheet_directory() . '/inc/elementor/dora-case-study.php';
    require_once get_stylesheet_directory() . '/inc/elementor/dora-video-popup.php';
    require_once get_stylesheet_directory() . '/inc/elementor/dora-contact-form.php';
    require_once get_stylesheet_directory() . '/inc/elementor/dora-blog.php';
    require_once get_stylesheet_directory() . '/inc/elementor/dora-testimonial.php';
    require_once get_stylesheet_directory() . '/inc/elementor/header.php';
    require_once get_stylesheet_directory() . '/inc/elementor/dora-portfolio.php';
    require_once get_stylesheet_directory() . '/inc/elementor/hero-banner-slider.php';

    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Button_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Contact_circle_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Service_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Case_Study_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Video_Popup_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Contact_Form_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Blog_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Testimonial_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Header_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Portfolio_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Dora_Hero_Slider_Widget());
}
add_action('elementor/widgets/register', 'register_child_theme_elementor_widgets');

// Function to get all categories
function dora_get_all_categories()
{
    $categories = get_categories([
        'hide_empty' => false,
    ]);

    $category_options = [];
    foreach ($categories as $category) {
        $category_options[$category->term_id] = $category->name;
    }

    return $category_options;
}
