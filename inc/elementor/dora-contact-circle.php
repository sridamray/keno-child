<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Contact_circle_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-contact-circle';
    }

    public function get_title()
    {
        return __('Dora Contact Circle', 'your-textdomain');
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
            'dora_contact_circle_wrap',
            [
                'label' => __('Contact Circle', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_contact_circle_image',
            [
                'label' => esc_html__('Choose Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'dora_contact_circle_url',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('#', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
                'label_block' => true,
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
        $dora_contact_circle_image = $settings['dora_contact_circle_image'];
        $dora_contact_circle_url = $settings['dora_contact_circle_url'];

?>


        <div class="contact-us-circle">
            <a href="<?php echo esc_url($dora_contact_circle_url); ?>">
                <img src="<?php echo esc_url($dora_contact_circle_image['url']); ?>" alt="">
            </a>
        </div>

<?php


    }
}
