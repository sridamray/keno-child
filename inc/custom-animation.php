<?php

use Elementor\Controls_Manager;

class CustomToolkitContainer
{
    public function __construct()
    {
        /**
         * Add Wow Animation controls
         * → Apply to sections, columns, containers, and all common widgets
         */
        add_action('elementor/element/common/_section_style/after_section_end', [$this, 'register_animation_controls']);
        add_action('elementor/element/column/section_advanced/after_section_end', [$this, 'register_animation_controls']);
        add_action('elementor/element/section/section_advanced/after_section_end', [$this, 'register_animation_controls']);
        add_action('elementor/element/container/section_layout/after_section_end', [$this, 'register_animation_controls']);

        /**
         * Add Custom Image Effect control
         * → Only for the default Elementor Image widget
         */
        add_action('elementor/element/image/section_style_image/after_section_end', [$this, 'register_image_effect_controls']);

        add_action('elementor/element/heading/section_title/after_section_end', [$this, 'register_heading_class_control']);


        // Render hook
        add_action('elementor/frontend/before_render', [$this, 'before_render'], 1);
    }

    /**
     * Register Wow Animation controls
     */
    public function register_animation_controls($element)
    {
        $element->start_controls_section(
            'data_fade_from_wrapper',
            [
                'label' => __('Wow Animation', 'gorent-toolkit'),
                'tab'   => Controls_Manager::TAB_ADVANCED,
            ]
        );

        $element->add_control(
            'data_fade_from',
            [
                'label'   => __('Motion Effect', 'gorent-toolkit'),
                'type'    => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''                   => __('None', 'gorent-toolkit'),
                    'wow fadeInUp'       => __('fadeInUp', 'gorent-toolkit'),
                    'wow fadeInLeft'     => __('fadeInLeft', 'gorent-toolkit'),
                    'wow fadeInRight'    => __('fadeInRight', 'gorent-toolkit'),
                    'wow slideInLeft'    => __('slideInLeft', 'gorent-toolkit'),
                    'wow slideInRight'    => __('slideInRight', 'gorent-toolkit'),
                ],
            ]
        );

        $element->add_control(
            'data_delay',
            [
                'label'       => __('Animation Wow Delay', 'gorent-toolkit'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('0s', 'gorent-toolkit'),
                'description' => __('Enter delay (e.g. 0.4s).', 'gorent-toolkit'),
            ]
        );

        $element->add_control(
            'data_delay_duration',
            [
                'label'       => __('Animation Wow Duration', 'gorent-toolkit'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('0s', 'gorent-toolkit'),
                'description' => __('Enter duration (e.g. 1000ms).', 'gorent-toolkit'),
            ]
        );

        $element->end_controls_section();
    }

    /**
     * Register Custom Image Effect controls (only on Image widget)
     */
    public function register_image_effect_controls($element)
    {
        $element->start_controls_section(
            'custom_image_effects_section',
            [
                'label' => __('Custom Image Effect', 'gorent-toolkit'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $element->add_control(
            'custom_image_anime',
            [
                'label'   => __('Image Anime', 'gorent-toolkit'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'   => __('None', 'gorent-toolkit'),
                    'image-anime' => __('Image Anime', 'gorent-toolkit'),
                ],
            ]
        );
        $element->add_control(
            'custom_image_effect',
            [
                'label'   => __('Image Effect', 'gorent-toolkit'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'   => __('None', 'gorent-toolkit'),
                    'reveal' => __('Reveal', 'gorent-toolkit'),
                ],
            ]
        );

        $element->end_controls_section();
    }


    public function register_heading_class_control($element)
    {
        $element->start_controls_section(
            'custom_heading_class_section',
            [
                'label' => __('Custom Title Class', 'gorent-toolkit'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $element->add_control(
            'custom_heading_class',
            [
                'label'   => __('Select Title Class', 'gorent-toolkit'),
                'type'    => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''            => __('None', 'gorent-toolkit'),
                    'text-anime-style-1'   => __('Animation 1', 'gorent-toolkit'),
                    'text-anime-style-2'   => __('Animation 2', 'gorent-toolkit'),
                ],
            ]
        );

        $element->end_controls_section();
    }


    /**
     * Apply attributes before rendering frontend
     */
    public function before_render($element)
    {
        $settings = $element->get_settings_for_display();

        // Animation delay
        if (!empty($settings['data_delay'])) {
            $element->add_render_attribute('_wrapper', 'data-wow-delay', $settings['data_delay']);
        }



        // Animation class
        if (!empty($settings['data_fade_from'])) {
            $element->add_render_attribute('_wrapper', 'class', $settings['data_fade_from']);
        }

        // Image effect class (only when added on Image widget)
        if (!empty($settings['custom_image_effect']) && $settings['custom_image_effect'] !== 'none') {
            $element->add_render_attribute('_wrapper', 'class', '' . $settings['custom_image_effect']);
        }
        if (!empty($settings['custom_image_anime']) && $settings['custom_image_anime'] !== 'none') {
            $element->add_render_attribute('_wrapper', 'class', '' . $settings['custom_image_anime']);
        }


        // ✅ Apply Custom Class to <h2> (Only for Heading widget)
        if ('heading' === $element->get_name() && !empty($settings['custom_heading_class'])) {
            $element->add_render_attribute('title', 'class', $settings['custom_heading_class']);
        }
    }
}



new CustomToolkitContainer();
