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
