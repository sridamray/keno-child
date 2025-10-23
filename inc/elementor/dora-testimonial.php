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

?>


        <div class="testimonial-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial Slide Start -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="testimonial-header">
                                <div class="testimonial-company-logo">
                                    <img src="images/company-logo-white-1.svg" alt="">
                                </div>
                                <div class="testimonial-quote">
                                    <img src="images/testimonial-quote.svg" alt="">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>My experience at Logoipsum was nothing short of incredible. From the moment I walked through the doors, I was greeted with warmth and professionalism. The atmosphere was serene and calming, making me feel relaxed even before my treatments began. I booked a full spa day, including a massage, facial, and body wrap.</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <figure class="image-anime">
                                        <img src="images/author-1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="author-content">
                                    <h3>Jenny Wilson</h3>
                                    <p>Senior Esthetician</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slide End -->

                    <!-- Testimonial Slide Start -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="testimonial-header">
                                <div class="testimonial-company-logo">
                                    <img src="images/company-logo-white-1.svg" alt="">
                                </div>
                                <div class="testimonial-quote">
                                    <img src="images/testimonial-quote.svg" alt="">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>My experience at Logoipsum was nothing short of incredible. From the moment I walked through the doors, I was greeted with warmth and professionalism. The atmosphere was serene and calming, making me feel relaxed even before my treatments began. I booked a full spa day, including a massage, facial, and body wrap.</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <figure class="image-anime">
                                        <img src="images/author-2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="author-content">
                                    <h3>Juliana Silva</h3>
                                    <p>Wellness Coach</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slide End -->

                    <!-- Testimonial Slide Start -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="testimonial-header">
                                <div class="testimonial-company-logo">
                                    <img src="images/company-logo-white-1.svg" alt="">
                                </div>
                                <div class="testimonial-quote">
                                    <img src="images/testimonial-quote.svg" alt="">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>My experience at Logoipsum was nothing short of incredible. From the moment I walked through the doors, I was greeted with warmth and professionalism. The atmosphere was serene and calming, making me feel relaxed even before my treatments began. I booked a full spa day, including a massage, facial, and body wrap.</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <figure class="image-anime">
                                        <img src="images/author-3.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="author-content">
                                    <h3>Nicky Waode</h3>
                                    <p>Facial Expert</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
