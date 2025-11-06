<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Portfolio_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-portfolio';
    }

    public function get_title()
    {
        return __('Dora Portfolio', 'your-textdomain');
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
            'dora_portfolio_wrap',
            [
                'label' => __('Portfolio', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_portfolio_thumb_img',
            [
                'label' => esc_html__('Background Image Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'dora_portfolio_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Daily Pleasure', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'dora_portfolio_subtitle',
            [
                'label' => esc_html__('Sub Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Spa Treatments', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'dora_portfolio_url',
            [
                'label' => esc_html__('URL', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('#', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );





        $this->end_controls_section();

        $this->start_controls_section(
            'dora_portfolio_style',
            [
                'label' => __('Style', 'your-textdomain'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'dora_portfolio_title_color',
            [
                'label' => esc_html__('Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dora-elementor-portfolio .mkdf-pli-text .mkdf-pli-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'dora_portfolio_title_hover_color',
            [
                'label' => esc_html__('Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dora-elementor-portfolio .mkdf-pli-text .mkdf-pli-title a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $dora_portfolio_thumb_img = $settings['dora_portfolio_thumb_img']['url'];
        $dora_portfolio_title = $settings['dora_portfolio_title'];
        $dora_portfolio_subtitle = $settings['dora_portfolio_subtitle'];
        $dora_portfolio_url = $settings['dora_portfolio_url'];

?>

        <article class="dora-elementor-portfolio mkdf-pl-item">
            <div class="mkdf-pl-item-inner">
                <div class="mkdf-pli-image">
                    <img src="<?php echo esc_url($dora_portfolio_thumb_img); ?>" alt="">
                </div>
                <div class="mkdf-pli-text-holder">
                    <div class="mkdf-pli-text-wrapper">
                        <div class="mkdf-pli-text">
                            <h3 itemprop="name" class="mkdf-pli-title entry-title" style="text-transform: uppercase">
                                <a itemprop="url" class="mkdf-block-drag-link" href="<?php echo esc_url($dora_portfolio_url); ?>" target="_self">
                                    <?php echo esc_html($dora_portfolio_title); ?> </a>
                            </h3>

                            <div class="mkdf-pli-category-holder">
                                <a itemprop="url" class="mkdf-pli-category" href="<?php echo esc_url($dora_portfolio_url); ?>"><?php echo esc_html($dora_portfolio_subtitle); ?></a>
                            </div>

                        </div>
                    </div>
                </div>
                <a itemprop="url" class="mkdf-pli-link mkdf-block-drag-link" href="<?php echo esc_url($dora_portfolio_url); ?>" target="_self"></a>
            </div>
        </article>



<?php


    }
}
