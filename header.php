<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Keno
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <?php keno_back_to_top();

    $keno_child_prloader_image = get_theme_mod('keno_child_prloader_image');


    ?>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="<?php echo esc_url($keno_child_prloader_image, 'keno-child'); ?>" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->


    <?php keno_back_to_top(); ?>

    <div id="keno-main" class="keno-main">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'keno'); ?></a>

        <?php keno_child_check_header(); ?>