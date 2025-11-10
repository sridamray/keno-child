<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Hero_Slider_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-hero-slider';
    }

    public function get_title()
    {
        return __('Dora Hero Slider', 'your-textdomain');
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
            'dora_hero_slider_wrap',
            [
                'label' => __('Hero Slider', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_hero_slider_list',
            [
                'label' => esc_html__('Slider List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [

                    [
                        'name' => 'hero_slider_bg_img',
                        'label' => esc_html__('BG Image', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                        'label_block' => true,
                    ],
                    [
                        'name' => 'hero_title',
                        'label' => esc_html__('Title', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Discover Your Oasis', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'hero__description',
                        'label' => esc_html__('Description', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('Lorem Ipsutm', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'hero_btn_text1',
                        'label' => esc_html__('BTN Text1', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('Purchase', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'hero_btn_url1',
                        'label' => esc_html__('BTN URL1', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('#', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'hero_btn_text2',
                        'label' => esc_html__('BTN Text2', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('Contact Us', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'hero_btn_url2',
                        'label' => esc_html__('BTN URL2', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('#', 'textdomain'),
                        'label_block' => true,
                    ],
                ],
                'default' => [
                    [
                        'hero_title' => esc_html__('Discover Your Oasis', 'textdomain'),
                    ],
                    [
                        'hero_title' => esc_html__('For Body and Mind', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ hero_title }}}',
            ]
        );







        $this->end_controls_section();

        $this->start_controls_section(
            'dora_hero_banner_style',
            [
                'label' => __('Style', 'your-textdomain'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'dora_hero_banner_title_heading',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'dora_hero_banner_title_color',
            [
                'label' => esc_html__('Title Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-content h1' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'dora_hero_banner_title_typography',
                'selector' => '{{WRAPPER}} .hero-slider-content h1',
            ]
        );

        $this->add_responsive_control(
            'dora_hero_banner_title_margin',
            [
                'label' => __('Title Margin', 'your-textdomain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-content h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'dora_hero_banner_title_padding',
            [
                'label' => __('Title Padding', 'your-textdomain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-content h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'dora_hero_banner_description_heading',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'dora_hero_banner_description_color',
            [
                'label' => esc_html__('Description Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-content p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'dora_hero_banner_description_typography',
                'selector' => '{{WRAPPER}} .hero-slider-content p',
            ]
        );


        $this->add_responsive_control(
            'dora_hero_banner_description_margin',
            [
                'label' => __('Description Margin', 'your-textdomain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'dora_hero_banner_description_padding',
            [
                'label' => __('Description Padding', 'your-textdomain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->add_control(
            'dora_hero_banner_button_heading',
            [
                'label' => esc_html__('Button', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->start_controls_tabs(
            'dora_hero_banner_button_style_tabs'
        );

        // normal

        $this->start_controls_tab(
            'dora_hero_banner_button_normal_tab',
            [
                'label' => esc_html__('Normal', 'textdomain'),
            ]
        );

        $this->add_control(
            'dora_hero_banner_button_color',
            [
                'label' => esc_html__('BTN Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'dora_hero_banner_button_bgcolor',
            [
                'label' => esc_html__('BTN BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'dora_hero_banner_button_bordercolor',
            [
                'label' => esc_html__('Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn' => 'border-color: {{VALUE}}',
                ],
            ]
        );




        $this->add_control(
            'dora_hero_banner_button2_color',
            [
                'label' => esc_html__('BTN 2 Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn.btn-secondary' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'dora_hero_banner_button2_bgcolor',
            [
                'label' => esc_html__('BTN 2 BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn.btn-secondary' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'dora_hero_banner_button2_bordercolor',
            [
                'label' => esc_html__('Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn.btn-secondary' => 'border-color: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_tab();

        // hover

        $this->start_controls_tab(
            'dora_hero_banner_button_hover_tab',
            [
                'label' => esc_html__('Hover', 'textdomain'),
            ]
        );

        $this->add_control(
            'dora_hero_banner_button_hover_color',
            [
                'label' => esc_html__('BTN Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'dora_hero_banner_button_hover_bgcolor',
            [
                'label' => esc_html__('BTN BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'dora_hero_banner_button_hover_bordercolor',
            [
                'label' => esc_html__('Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );



        $this->add_control(
            'dora_hero_banner_button2_hover_color',
            [
                'label' => esc_html__('BTN 2 Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn.btn-secondary:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'dora_hero_banner_button2_hover_bgcolor',
            [
                'label' => esc_html__('BTN 2 BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn.btn-secondary:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'dora_hero_banner_button2_hover_bordercolor',
            [
                'label' => esc_html__('Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn.btn-secondary:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );


        $this->end_controls_tab();

        $this->end_controls_tabs();





        $this->add_responsive_control(
            'dora_hero_banner_btn_margin',
            [
                'label' => __('BTN Margin', 'your-textdomain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'dora_hero_banner_btn_padding',
            [
                'label' => __('BTN Padding', 'your-textdomain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'dora_hero_banner_btn_typography',
                'selector' => '{{WRAPPER}} .hero-slider-btns a.btn',
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'dora_hero_banner_btn_border',
                'selector' => '{{WRAPPER}} .hero-slider-btns a.btn',
            ]
        );

        $this->add_responsive_control(
            'dora_hero_banner_btn_border_radius',
            [
                'label' => __('Border Radius', 'your-textdomain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-slider-btns a.btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );




        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $dora_hero_slider_list = $settings['dora_hero_slider_list'];

?>


        <div class="hero-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial Slide Start -->
                    <?php foreach ($dora_hero_slider_list as $single_hero_slider_list):
                        $hero_slider_bg_img = $single_hero_slider_list['hero_slider_bg_img']['url'];
                    ?>
                        <div class="swiper-slide">
                            <div class="hero-slider-item" style="background-image: url(<?php echo esc_url($hero_slider_bg_img); ?>);">
                                <div class="hero-slider-content">
                                    <h1 class="hero-slider-title"><?php echo esc_html($single_hero_slider_list['hero_title']); ?></h1>
                                    <p class="hero-slider-description"><?php echo esc_html($single_hero_slider_list['hero__description']); ?></p>
                                    <div class="hero-slider-btns">
                                        <a href="<?php echo esc_url($single_hero_slider_list['hero_btn_url1']); ?>" class="btn btn-primary"><?php echo esc_html($single_hero_slider_list['hero_btn_text1']); ?></a>
                                        <a href="<?php echo esc_url($single_hero_slider_list['hero_btn_url2']); ?>" class="btn btn-secondary"><?php echo esc_html($single_hero_slider_list['hero_btn_text2']); ?></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- Testimonial Slide End -->
                </div>
                <div class="hero-btn">
                    <div class="hero-button-prev"></div>
                    <div class="hero-button-next"></div>
                </div>
            </div>
        </div>



<?php


    }
}
