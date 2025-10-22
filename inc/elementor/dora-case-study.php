<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Case_Study_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-case-study';
    }

    public function get_title()
    {
        return __('Dora Case Study', 'your-textdomain');
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
            'dora_case_study_wrap',
            [
                'label' => __('Case Study', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_case_study_thumb',
            [
                'label' => esc_html__('Thumb Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'dora_case_study_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Luxurious Relaxation Ritual', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'dora_case_study_url',
            [
                'label' => esc_html__('URL', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('#', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'dora_case_study_icon_img',
            [
                'label' => esc_html__('Icon Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'dora_contact_cirlce_style',
            [
                'label' => __('Style', 'your-textdomain'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );



        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $dora_case_study_thumb = $settings['dora_case_study_thumb']['url'];
        $dora_case_study_title = $settings['dora_case_study_title'];
        $dora_case_study_url = $settings['dora_case_study_url'];
        $dora_case_study_icon_img = $settings['dora_case_study_icon_img']['url'];

?>

        <div class="case-study-item ">
            <!-- Case Study Image Start -->
            <div class="case-study-image">
                <a href="<?php echo esc_url($dora_case_study_url); ?>">
                    <figure class="image-anime">
                        <img src="<?php echo esc_url($dora_case_study_thumb); ?>" alt="">
                    </figure>
                </a>
            </div>
            <!-- Case Study Image End -->

            <!-- Case Study Body Start -->
            <div class="case-study-body">
                <!-- Case Study Content Start -->
                <div class="case-study-item-content">
                    <h3><a href="<?php echo esc_url($dora_case_study_url); ?>"><?php echo esc_html($dora_case_study_title); ?></a></h3>
                </div>
                <!-- Case Study Content End -->

                <!-- Case Study Readmore Button Start -->
                <div class="case-study-readmore-btn">
                    <a href="<?php echo esc_url($dora_case_study_url); ?>"><img src="<?php echo esc_url($dora_case_study_icon_img); ?>" alt=""></a>
                </div>
                <!-- Case Study Readmore Button End -->
            </div>
            <!-- Case Study Body End -->
        </div>




<?php


    }
}
