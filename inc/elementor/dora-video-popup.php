<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Video_Popup_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-video-popup';
    }

    public function get_title()
    {
        return __('Dora Video Popup', 'your-textdomain');
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
            'dora_popup_video_wrap',
            [
                'label' => __('Video URL', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_popup_video_url',
            [
                'label' => esc_html__('URL', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('https://www.youtube.com/watch?v=Y-x0efG1seA', 'textdomain'),
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
        $dora_popup_video_url = $settings['dora_popup_video_url'];

?>
        <div class="dora-popup">
            <a href="<?php echo esc_url($dora_popup_video_url); ?>" class="popup-video"></a>
        </div>



<?php


    }
}
