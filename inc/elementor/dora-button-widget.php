<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Button_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-button';
    }

    public function get_title()
    {
        return __('Dora Button', 'your-textdomain');
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
            'dora_btn_wrap',
            [
                'label' => __('Button', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_button_text',
            [
                'label' => __('Button Text', 'your-textdomain'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Button Text', 'your-textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'dora_button_link',
            [
                'label' => __('Link', 'your-textdomain'),
                'type' => Controls_Manager::URL,
                'default' => ['url' => '#'],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'dora_button_style',
            [
                'label' => __('Style', 'your-textdomain'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'dora_button_color',
            [
                'label' => __('Text Color', 'your-textdomain'),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn-default' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'dora_button_hover_color',
            [
                'label' => __('Text Hover Color', 'your-textdomain'),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn-default:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'dora_button_bg',
            [
                'label' => __('BG Color', 'your-textdomain'),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn-default' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'dora_button_hover_bg',
            [
                'label' => __('BG Hover Color', 'your-textdomain'),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn-default.btn-highlighted::after' => 'background-color: {{VALUE}};',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'dora_button_border',
                'selector' => '{{WRAPPER}} .btn-default',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'label' => __('Border Hover', 'your-textdomain'),
                'name' => 'dora_button_border_hover',
                'selector' => '{{WRAPPER}} .btn-default:hover',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $dora_button_text = $settings['dora_button_text'];
        $dora_button_link = $settings['dora_button_link'];

?>


        <a href="<?php echo esc_url($dora_button_link['url']); ?>" class="btn-default btn-highlighted"><?php echo esc_html($dora_button_text); ?></a>


<?php


    }
}
