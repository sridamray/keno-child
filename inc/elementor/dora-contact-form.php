<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Contact_Form_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-contact-form';
    }

    public function get_title()
    {
        return __('Dora Contact Form 7', 'your-textdomain');
    }

    public function get_icon()
    {
        return 'eicon-button';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    // Contact 7
    public function get_dora_contact_form()
    {
        if (! class_exists('WPCF7')) {
            return;
        }
        $od_cfa         = array();
        $od_cf_args     = array('posts_per_page' => -1, 'post_type' => 'wpcf7_contact_form');
        $od_forms       = get_posts($od_cf_args);
        $od_cfa         = ['0' => esc_html__('Select Form', 'odcore')];
        if ($od_forms) {
            foreach ($od_forms as $od_form) {
                $od_cfa[$od_form->ID] = $od_form->post_title;
            }
        } else {
            $od_cfa[esc_html__('No contact form found', 'odcore')] = 0;
        }
        return $od_cfa;
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'dora_contact_form_7_wrap',
            [
                'label' => __('Contact Form', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_contact_form_list',
            [
                'label' => esc_html__('Select Form', 'odcore'),
                'type' => Controls_Manager::SELECT,
                'default' => '0',
                'options' => $this->get_dora_contact_form(),
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
        $dora_contact_form_list = $settings['dora_contact_form_list'];

?>

        <div class="dora-contact-form-7">
            <?php echo do_shortcode('[contact-form-7  id="' . $dora_contact_form_list . '"]'); ?>
        </div>


<?php


    }
}
