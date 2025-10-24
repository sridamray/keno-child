<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Testimonial_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-testimonial';
    }

    public function get_title()
    {
        return __('Dora Testimonial', 'your-textdomain');
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
            'dora_testimonial_wrap',
            [
                'label' => __('Testimonial', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_testimonial_list',
            [
                'label' => esc_html__('Testimonial List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'testimonial_name',
                        'label' => esc_html__('Name', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Jenny Wilson', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'testimonial_designation',
                        'label' => esc_html__('Designation', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Senior Staff', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'testimonial_media',
                        'label' => esc_html__('Author Image', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                        'label_block' => true,
                    ],
                    [
                        'name' => 'testimonial_description',
                        'label' => esc_html__('Description', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('Description', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'testimonial_icon',
                        'label' => esc_html__('Icon Image', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                        'label_block' => true,
                    ],
                ],
                'default' => [
                    [
                        'testimonial_name' => esc_html__('Jenny Wilson', 'textdomain'),
                    ],
                    [
                        'testimonial_name' => esc_html__('William Smith', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ testimonial_name }}}',
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
        $dora_testimonial_list = $settings['dora_testimonial_list'];

?>


        <div class="testimonial-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial Slide Start -->
                    <?php foreach ($dora_testimonial_list as $single_test_item):
                        $testimonial_media = $single_test_item['testimonial_media']['url'];
                        $testimonial_icon = $single_test_item['testimonial_icon']['url'];
                    ?>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="testimonial-header">
                                    <div class="testimonial-company-logo">
                                        <img src="<?php echo esc_url($testimonial_icon); ?>" alt="">
                                    </div>
                                    <div class="testimonial-quote">
                                        <img src="images/testimonial-quote.svg" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <p><?php echo esc_html($single_test_item['testimonial_description']); ?></p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-image">
                                        <figure class="image-anime">
                                            <img src="<?php echo esc_url($testimonial_media); ?>" alt="">
                                        </figure>
                                    </div>
                                    <div class="author-content">
                                        <h3><?php echo esc_html($single_test_item['testimonial_name']); ?></h3>
                                        <p><?php echo esc_html($single_test_item['testimonial_designation']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- Testimonial Slide End -->
                </div>
                <div class="testimonial-btn">
                    <div class="testimonial-button-prev"></div>
                    <div class="testimonial-button-next"></div>
                </div>
            </div>
        </div>



<?php


    }
}
