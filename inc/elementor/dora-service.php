<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Service_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-service';
    }

    public function get_title()
    {
        return __('Dora Service', 'your-textdomain');
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
            'dora_service_wrap',
            [
                'label' => __('Services', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_service_icon',
            [
                'label' => esc_html__('Icon Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'dora_service_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Therapeutic Massage', 'textdomain'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'dora_service_description',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Description', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'dora_service_list_item1',
            [
                'label' => esc_html__('List Item 1', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Skin Soul Shine', 'textdomain'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'dora_service_list_item2',
            [
                'label' => esc_html__('List Item 2', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Your skin, only better.', 'textdomain'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'dora_service_button_text1',
            [
                'label' => esc_html__('Button Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('View More', 'textdomain'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'dora_service_button_url',
            [
                'label' => esc_html__('Button URL', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('#', 'textdomain'),
                'label_block' => true,
            ]
        );






        $this->end_controls_section();

        $this->start_controls_section(
            'dora_service_style',
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
        $dora_service_title = $settings['dora_service_title'];
        $dora_service_description = $settings['dora_service_description'];
        $dora_service_list_item1 = $settings['dora_service_list_item1'];
        $dora_service_list_item2 = $settings['dora_service_list_item2'];
        $dora_service_button_text1 = $settings['dora_service_button_text1'];
        $dora_service_button_url = $settings['dora_service_button_url'];
        $dora_service_icon = $settings['dora_service_icon'];

?>

        <div class="service-item">
            <div class="icon-box">
                <img src="<?php echo esc_url($dora_service_icon['url']); ?>" alt="">
            </div>
            <div class="service-content">
                <h3><a href="<?php echo esc_url($dora_service_button_url); ?>"><?php echo esc_html($dora_service_title); ?></a></h3>
                <p><?php echo esc_html($dora_service_description); ?></p>
            </div>
            <div class="service-item-list">
                <ul>
                    <li><?php echo esc_html($dora_service_list_item1); ?></li>
                    <li><?php echo esc_html($dora_service_list_item2); ?></li>
                </ul>
            </div>
            <div class="service-btn">
                <a href="<?php echo esc_url($dora_service_button_url); ?>" class="readmore-btn"><?php echo esc_html($dora_service_button_text1); ?></a>
            </div>
        </div>




<?php


    }
}
