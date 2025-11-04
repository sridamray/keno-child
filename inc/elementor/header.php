<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Header_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-header';
    }

    public function get_title()
    {
        return __('Dora Header', 'your-textdomain');
    }

    public function get_icon()
    {
        return 'eicon-button';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'dora_header_wrapper',
            [
                'label' => __('Button', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_header_logo',
            [
                'label' => esc_html__('Logo Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'dora_header_btn_text',
            [
                'label' => esc_html__('Button', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Button Text', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'dora_header_btn_url',
            [
                'label' => esc_html__('Button URL', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('#', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );







        $this->end_controls_section();

        $this->start_controls_section(
            'dora_header_style_section',
            [
                'label' => __('Style', 'your-textdomain'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'header_bg_color',
            [
                'label' => esc_html__('Header Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} header.elementor.main-header.bg-section' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'header_logo_width',
            [
                'label' => esc_html__('Width', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} a.navbar-brand img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );



        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $dora_header_logo = $settings['dora_header_logo']['url'];
        $dora_header_btn_text = $settings['dora_header_btn_text'];
        $keno_general_btn_url = $settings['dora_header_btn_url'];

?>

        <!-- Header Start -->
        <header class="elementor main-header bg-section">
            <div class="header-sticky">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <!-- Logo Start -->
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url($dora_header_logo); ?>" alt="Logo">
                        </a>
                        <!-- Logo End -->

                        <!-- Main Menu Start -->
                        <div class="collapse navbar-collapse main-menu">
                            <div class="nav-menu-wrapper">
                                <?php keno_child_header_menu(); ?>

                            </div>

                            <!-- Header Btn Start -->
                            <div class="header-btn">
                                <a href="<?php echo esc_url($keno_general_btn_url); ?>" class="btn-default btn-highlighted"><?php echo esc_html($dora_header_btn_text); ?></a>
                            </div>
                            <!-- Header Btn End -->
                        </div>
                        <!-- Main Menu End -->
                        <div class="navbar-toggle"></div>
                    </div>
                </nav>
                <div class="responsive-menu"></div>
            </div>
        </header>
        <!-- Header End -->




<?php


    }
}
