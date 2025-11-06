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
