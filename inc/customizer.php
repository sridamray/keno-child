<?php

add_action(
    'init',
    function () {
        if (class_exists('Kirki')) {

            new \Kirki\Panel(
                'keno_child_customizer_panel',
                [
                    'priority'    => 10,
                    'title'       => esc_html__('Keno Child Customizer', 'keno-child'),
                    'description' => esc_html__('Keno Customizer Panel', 'keno-child'),
                ]
            );

            new \Kirki\Section(
                'keno_general_child_general',
                [
                    'title'       => esc_html__('General Settings', 'keno-child'),
                    'panel'       => 'keno_child_customizer_panel',
                    'priority'    => 160,
                ]
            );

            new \Kirki\Field\Text(
                [
                    'settings' => 'keno_general_btn_text',
                    'label'    => esc_html__('BTN Text', 'kirki'),
                    'section'  => 'keno_general_child_general',
                    'default'  => esc_html__('book appointment', 'kirki'),
                    'priority' => 10,
                ]
            );
            new \Kirki\Field\Text(
                [
                    'settings' => 'keno_general_btn_url',
                    'label'    => esc_html__('BTN URL', 'kirki'),
                    'section'  => 'keno_general_child_general',
                    'default'  => esc_html__('#', 'kirki'),
                    'priority' => 10,
                ]
            );




            new \Kirki\Section(
                'keno_general_child_prloader',
                [
                    'title'       => esc_html__('Preloader Settings', 'keno-child'),
                    'panel'       => 'keno_child_customizer_panel',
                    'priority'    => 160,
                ]
            );

            new \Kirki\Field\Image(
                [
                    'settings'    => 'keno_child_prloader_image',
                    'label'       => esc_html__('Image Control (URL)', 'keno-child'),
                    'section'     => 'keno_general_child_prloader',
                    'default'     => '',
                ]
            );


            new \Kirki\Section(
                'keno_general_child_logo',
                [
                    'title'       => esc_html__('Logo', 'keno-child'),
                    'panel'       => 'keno_child_customizer_panel',
                    'priority'    => 160,
                ]
            );

            new \Kirki\Field\Image(
                [
                    'settings'    => 'keno_child_logo',
                    'label'       => esc_html__('Image Control (URL)', 'keno-child'),
                    'section'     => 'keno_general_child_logo',
                    'default'     => '',
                ]
            );
            new \Kirki\Section(
                'keno_general_child_breadcrumb',
                [
                    'title'       => esc_html__('Breadcrumb', 'keno-child'),
                    'panel'       => 'keno_child_customizer_panel',
                    'priority'    => 160,
                ]
            );

            new \Kirki\Field\Image(
                [
                    'settings'    => 'keno_child_breadcrumb_image',
                    'label'       => esc_html__('Image Control (URL)', 'keno-child'),
                    'section'     => 'keno_general_child_breadcrumb',
                    'default'     => '',
                ]
            );
        }
    }
);
