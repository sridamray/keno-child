<?php
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
}
