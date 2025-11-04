<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Header_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-header';
    }

    public function get_title()
    {
        return __('Dora Header', 'your-textdomain');
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
                'label' => __('Button', 'your-textdomain'),
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


        <header class="mkdf-page-header">


            <div class="mkdf-menu-area mkdf-menu-center">


                <div class="mkdf-vertical-align-containers">
                    <div class="mkdf-position-left"><!--
                 -->
                        <div class="mkdf-position-left-inner">


                            <div class="mkdf-logo-wrapper">
                                <a itemprop="url" href="https://aviana.qodeinteractive.com/" style="height: 37px;">
                                    <img itemprop="image" class="mkdf-normal-logo" src="https://aviana.qodeinteractive.com/wp-content/uploads/2017/10/logo-default.png" width="336" height="74" alt="logo">
                                    <img itemprop="image" class="mkdf-dark-logo" src="https://aviana.qodeinteractive.com/wp-content/uploads/2017/10/logo-default.png" width="336" height="74" alt="dark logo"> <img itemprop="image" class="mkdf-light-logo" src="https://aviana.qodeinteractive.com/wp-content/uploads/2017/10/logo-light.png" width="336" height="74" alt="light logo"> </a>
                            </div>

                        </div>
                    </div>
                    <div class="mkdf-position-center"><!--
                     -->
                        <div class="mkdf-position-center-inner">

                            <nav class="mkdf-main-menu mkdf-drop-down mkdf-default-nav">
                                <?php keno_child_header_menu(); ?>
                            </nav>

                        </div>
                    </div>
                    <div class="mkdf-position-right"><!--
                 -->
                        <div class="mkdf-position-right-inner">

                            <a class="mkdf-search-opener mkdf-icon-has-hover" href="javascript:void(0)">
                                <span class="mkdf-search-opener-wrapper">
                                    <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-magnifier "></span> </span>
                            </a>

                            <a class="mkdf-side-menu-button-opener mkdf-icon-has-hover" href="javascript:void(0)">
                                <span class="mkdf-side-menu-lines lnr lnr-menu"></span>
                            </a>
                            <div class="mkdf-shopping-cart-holder">
                                <div class="mkdf-shopping-cart-inner">
                                    <a itemprop="url" class="mkdf-header-cart" href="https://aviana.qodeinteractive.com/cart/">
                                        <span class="mkdf-cart-icon">
                                            <img class="mkdf-icon-dark" src="https://aviana.qodeinteractive.com/wp-content/themes/aviana/assets/img/shop.png">
                                            <img class="mkdf-icon-white" src="https://aviana.qodeinteractive.com/wp-content/themes/aviana/assets/img/shop-white.png">
                                            <span class="mkdf-cart-number">0</span>
                                        </span>
                                    </a>
                                    <div class="mkdf-shopping-cart-dropdown">
                                        <ul>
                                            <li class="mkdf-empty-cart">No products in the cart.</li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="mkdf-sticky-header">
                <div class="mkdf-sticky-holder">
                    <div class=" mkdf-vertical-align-containers">
                        <div class="mkdf-position-left"><!--
                 -->
                            <div class="mkdf-position-left-inner">


                                <div class="mkdf-logo-wrapper">
                                    <a itemprop="url" href="https://aviana.qodeinteractive.com/" style="height: 37px;">
                                        <img itemprop="image" class="mkdf-normal-logo" src="https://aviana.qodeinteractive.com/wp-content/uploads/2017/10/logo-default.png" width="336" height="74" alt="logo">
                                        <img itemprop="image" class="mkdf-dark-logo" src="https://aviana.qodeinteractive.com/wp-content/uploads/2017/10/logo-default.png" width="336" height="74" alt="dark logo"> <img itemprop="image" class="mkdf-light-logo" src="https://aviana.qodeinteractive.com/wp-content/uploads/2017/10/logo-light.png" width="336" height="74" alt="light logo"> </a>
                                </div>

                            </div>
                        </div>
                        <div class="mkdf-position-right"><!--
                 -->
                            <div class="mkdf-position-right-inner">

                                <nav class="mkdf-main-menu mkdf-drop-down mkdf-sticky-nav">
                                    <ul id="menu-main-menu-1" class="clearfix">
                                        <li id="sticky-nav-menu-item-135" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mkdf-active-item has_sub narrow"><a href="#" class=" current "><span class="item_outer"><span class="item_text">Home</span><span class="plus"></span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                            <div class="second" style="height: 0px;">
                                                <div class="inner">
                                                    <ul>
                                                        <li id="sticky-nav-menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home "><a href="https://aviana.qodeinteractive.com/" class=""><span class="item_outer"><span class="item_text">Main Home</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-347" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-163 current_page_item "><a href="https://aviana.qodeinteractive.com/spa-resort/" class=""><span class="item_outer"><span class="item_text">Spa Resort</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/nutritionist/" class=""><span class="item_outer"><span class="item_text">Nutritionist</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-425" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/left-menu-home/" class=""><span class="item_outer"><span class="item_text">Left Menu Home</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-426" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/yoga-studio/" class=""><span class="item_outer"><span class="item_text">Yoga Studio</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-768" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/shop-home/" class=""><span class="item_outer"><span class="item_text">Shop Home</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/life-coach/" class=""><span class="item_outer"><span class="item_text">Life Coach</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-557" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/fullscreen-showcase/" class=""><span class="item_outer"><span class="item_text">Fullscreen Showcase</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-517" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/split-screen-slider/" class=""><span class="item_outer"><span class="item_text">Split Screen Slider</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-1819" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/landing/" class=""><span class="item_outer"><span class="item_text">Landing</span><span class="plus"></span></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li id="sticky-nav-menu-item-136" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="#" class=""><span class="item_outer"><span class="item_text">Pages</span><span class="plus"></span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                            <div class="second" style="height: 0px;">
                                                <div class="inner">
                                                    <ul>
                                                        <li id="sticky-nav-menu-item-662" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/about-me/" class=""><span class="item_outer"><span class="item_text">About Me</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-536" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/our-team/" class=""><span class="item_outer"><span class="item_text">Our Team</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-1964" class="menu-item menu-item-type-post_type menu-item-object-team-member "><a href="https://aviana.qodeinteractive.com/team-member/olivia-allison/" class=""><span class="item_outer"><span class="item_text">Team Member</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-648" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/pricing-plans/" class=""><span class="item_outer"><span class="item_text">Pricing Plans</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-595" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/contact-us/" class=""><span class="item_outer"><span class="item_text">Contact Us</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-1446" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/coming-soon/" class=""><span class="item_outer"><span class="item_text">Coming Soon</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-848" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="https://aviana.qodeinteractive.com/error-page" class=""><span class="item_outer"><span class="item_text">404 Error Page</span><span class="plus"></span></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li id="sticky-nav-menu-item-137" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="#" class=""><span class="item_outer"><span class="item_text">Blog</span><span class="plus"></span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                            <div class="second" style="height: 0px;">
                                                <div class="inner">
                                                    <ul>
                                                        <li id="sticky-nav-menu-item-1215" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/blog/masonry/" class=""><span class="item_outer"><span class="item_text">Masonry</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-1259" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Standard</span><span class="plus"></span></span></a>
                                                            <ul>
                                                                <li id="sticky-nav-menu-item-1216" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/blog/standard-right-sidebar/" class=""><span class="item_outer"><span class="item_text">Right Sidebar</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1242" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/blog/standard-left-sidebar/" class=""><span class="item_outer"><span class="item_text">Left Sidebar</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1243" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/blog/standard-without-sidebar/" class=""><span class="item_outer"><span class="item_text">Without Sidebar</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="sticky-nav-menu-item-1222" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Post Types</span><span class="plus"></span></span></a>
                                                            <ul>
                                                                <li id="sticky-nav-menu-item-1217" class="menu-item menu-item-type-post_type menu-item-object-post "><a href="https://aviana.qodeinteractive.com/we-have-heart/" class=""><span class="item_outer"><span class="item_text">Standard</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1246" class="menu-item menu-item-type-post_type menu-item-object-post "><a href="https://aviana.qodeinteractive.com/massage-treatment/" class=""><span class="item_outer"><span class="item_text">Gallery</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1220" class="menu-item menu-item-type-post_type menu-item-object-post "><a href="https://aviana.qodeinteractive.com/wellness-quotes/" class=""><span class="item_outer"><span class="item_text">Quote</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1219" class="menu-item menu-item-type-post_type menu-item-object-post "><a href="https://aviana.qodeinteractive.com/let-us-be-about-setting-high-standards-for-life-love-creativity-and-wisdom-it-makes-every-day-worth/" class=""><span class="item_outer"><span class="item_text">Link</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1218" class="menu-item menu-item-type-post_type menu-item-object-post "><a href="https://aviana.qodeinteractive.com/because-it-matters/" class=""><span class="item_outer"><span class="item_text">Audio</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1221" class="menu-item menu-item-type-post_type menu-item-object-post "><a href="https://aviana.qodeinteractive.com/experience-the-peace/" class=""><span class="item_outer"><span class="item_text">Video</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li id="sticky-nav-menu-item-2364" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="#" class=""><span class="item_outer"><span class="item_text">Portfolio</span><span class="plus"></span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                            <div class="second" style="height: 0px;">
                                                <div class="inner">
                                                    <ul>
                                                        <li id="sticky-nav-menu-item-2371" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Standard</span><span class="plus"></span></span></a>
                                                            <ul>
                                                                <li id="sticky-nav-menu-item-1391" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/standard-three-columns-grid/" class=""><span class="item_outer"><span class="item_text">Three Col. Grid</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2397" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/standard-three-columns-wide/" class=""><span class="item_outer"><span class="item_text">Three Col. Wide</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2398" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/standard-four-columns-grid/" class=""><span class="item_outer"><span class="item_text">Four Col. Grid</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1407" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/standard-four-columns-wide/" class=""><span class="item_outer"><span class="item_text">Four Col. Wide</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2396" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/standard-five-columns-wide/" class=""><span class="item_outer"><span class="item_text">Five Col. Wide</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="sticky-nav-menu-item-2100" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Gallery</span><span class="plus"></span></span></a>
                                                            <ul>
                                                                <li id="sticky-nav-menu-item-2045" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/gallery-grid/" class=""><span class="item_outer"><span class="item_text">Grid</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2376" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/gallery-joined-grid/" class=""><span class="item_outer"><span class="item_text">Joined Grid</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2046" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/gallery-wide/" class=""><span class="item_outer"><span class="item_text">Wide</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2375" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/gallery-joined-wide/" class=""><span class="item_outer"><span class="item_text">Joined Wide</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="sticky-nav-menu-item-2372" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Masonry</span><span class="plus"></span></span></a>
                                                            <ul>
                                                                <li id="sticky-nav-menu-item-1432" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/masonry-joined-grid/" class=""><span class="item_outer"><span class="item_text">Grid</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2378" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/masonry-joined-grid/" class=""><span class="item_outer"><span class="item_text">Joined Grid</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2401" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/masonry-wide/" class=""><span class="item_outer"><span class="item_text">Wide</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2377" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/portfolio/masonry-joined-wide/" class=""><span class="item_outer"><span class="item_text">Joined Wide</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="sticky-nav-menu-item-2374" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Single Types</span><span class="plus"></span></span></a>
                                                            <ul>
                                                                <li id="sticky-nav-menu-item-2379" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://aviana.qodeinteractive.com/portfolio-item/daily-pleasure/" class=""><span class="item_outer"><span class="item_text">Small Images</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2383" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://aviana.qodeinteractive.com/portfolio-item/revitalize-beauty/" class=""><span class="item_outer"><span class="item_text">Images</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2381" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://aviana.qodeinteractive.com/portfolio-item/mind-relaxation/" class=""><span class="item_outer"><span class="item_text">Full Width Images</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2380" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://aviana.qodeinteractive.com/portfolio-item/essential-balance/" class=""><span class="item_outer"><span class="item_text">Small Slider</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2382" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://aviana.qodeinteractive.com/portfolio-item/natural-health/" class=""><span class="item_outer"><span class="item_text">Slider</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2390" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://aviana.qodeinteractive.com/portfolio-item/personal-healing/" class=""><span class="item_outer"><span class="item_text">Small Gallery</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2384" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://aviana.qodeinteractive.com/portfolio-item/tranquil-setting/" class=""><span class="item_outer"><span class="item_text">Gallery</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2393" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://aviana.qodeinteractive.com/portfolio-item/relaxing-massages/" class=""><span class="item_outer"><span class="item_text">Small Masonry</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-2392" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://aviana.qodeinteractive.com/portfolio-item/attention-to-detail/" class=""><span class="item_outer"><span class="item_text">Masonry</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li id="sticky-nav-menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="#" class=""><span class="item_outer"><span class="item_text">Shop</span><span class="plus"></span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                            <div class="second right" style="height: 0px;">
                                                <div class="inner">
                                                    <ul class="right">
                                                        <li id="sticky-nav-menu-item-839" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/shop/" class=""><span class="item_outer"><span class="item_text">Shop List</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-840" class="menu-item menu-item-type-post_type menu-item-object-product "><a href="https://aviana.qodeinteractive.com/product/parsley-powder/" class=""><span class="item_outer"><span class="item_text">Product Single</span><span class="plus"></span></span></a></li>
                                                        <li id="sticky-nav-menu-item-1165" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Layouts</span><span class="plus"></span></span></a>
                                                            <ul class="right">
                                                                <li id="sticky-nav-menu-item-1166" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/shop/three-columns-grid/" class=""><span class="item_outer"><span class="item_text">Three Col. Grid</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1173" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/shop/three-columns-wide/" class=""><span class="item_outer"><span class="item_text">Three Col. Wide</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1178" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/shop/four-columns-grid/" class=""><span class="item_outer"><span class="item_text">Four Col. Grid</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1181" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/shop/four-columns-wide/" class=""><span class="item_outer"><span class="item_text">Four Col. Wide</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1188" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/shop/five-columns-wide/" class=""><span class="item_outer"><span class="item_text">Five Col. Wide</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="sticky-nav-menu-item-841" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Pages</span><span class="plus"></span></span></a>
                                                            <ul class="right">
                                                                <li id="sticky-nav-menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/my-account/" class=""><span class="item_outer"><span class="item_text">My account</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-842" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/cart/" class=""><span class="item_outer"><span class="item_text">Cart</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-843" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/checkout/" class=""><span class="item_outer"><span class="item_text">Checkout</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li id="sticky-nav-menu-item-140" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide"><a href="#" class=""><span class="item_outer"><span class="item_text">Elements</span><span class="plus"></span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
                                            <div class="second" style="height: 0px; left: -1629.89px; width: 1905px;">
                                                <div class="inner">
                                                    <ul>
                                                        <li id="sticky-nav-menu-item-853" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 279.297px;"><a href="#" class=""><span class="item_outer"><span class="item_text">Presentation</span><span class="plus"></span></span></a>
                                                            <ul>
                                                                <li id="sticky-nav-menu-item-980" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/team/" class=""><span class="item_outer"><span class="item_text">Team</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/price-list/" class=""><span class="item_outer"><span class="item_text">Price List</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-897" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/pricing-table/" class=""><span class="item_outer"><span class="item_text">Pricing Table</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-928" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/client-carousel/" class=""><span class="item_outer"><span class="item_text">Client Carousel</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1004" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/interactive-banner/" class=""><span class="item_outer"><span class="item_text">Interactive Banner</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1017" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/image-with-text/" class=""><span class="item_outer"><span class="item_text">Image with Text</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-994" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/testimonials/" class=""><span class="item_outer"><span class="item_text">Testimonials</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="sticky-nav-menu-item-852" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 279.297px;"><a href="#" class=""><span class="item_outer"><span class="item_text">Infographic</span><span class="plus"></span></span></a>
                                                            <ul>
                                                                <li id="sticky-nav-menu-item-936" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/counters/" class=""><span class="item_outer"><span class="item_text">Counter</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1039" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/countdown/" class=""><span class="item_outer"><span class="item_text">Countdown</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-923" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/pie-charts/" class=""><span class="item_outer"><span class="item_text">Pie Charts</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1149" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/image-gallery/" class=""><span class="item_outer"><span class="item_text">Image Gallery</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/video-button/" class=""><span class="item_outer"><span class="item_text">Video Button</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-916" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/process/" class=""><span class="item_outer"><span class="item_text">Process</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-942" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/progress-bar/" class=""><span class="item_outer"><span class="item_text">Progress Bar</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="sticky-nav-menu-item-851" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 279.297px;"><a href="#" class=""><span class="item_outer"><span class="item_text">Classic</span><span class="plus"></span></span></a>
                                                            <ul>
                                                                <li id="sticky-nav-menu-item-901" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/accordions-toggles/" class=""><span class="item_outer"><span class="item_text">Accordions &amp; Toggles</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-900" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/blockquote/" class=""><span class="item_outer"><span class="item_text">Blockquote</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-902" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/buttons/" class=""><span class="item_outer"><span class="item_text">Buttons</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/contact-form/" class=""><span class="item_outer"><span class="item_text">Contact Form</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-909" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/google-map/" class=""><span class="item_outer"><span class="item_text">Google Map</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-903" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/separators/" class=""><span class="item_outer"><span class="item_text">Separators</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-947" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/tabs/" class=""><span class="item_outer"><span class="item_text">Tabs</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="sticky-nav-menu-item-854" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style="height: 279.297px;"><a href="#" class=""><span class="item_outer"><span class="item_text">Typographic</span><span class="plus"></span></span></a>
                                                            <ul>
                                                                <li id="sticky-nav-menu-item-951" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/headings/" class=""><span class="item_outer"><span class="item_text">Headings</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-956" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/columns/" class=""><span class="item_outer"><span class="item_text">Columns</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-963" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/custom-font/" class=""><span class="item_outer"><span class="item_text">Custom Font</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1032" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/dropcaps/" class=""><span class="item_outer"><span class="item_text">Dropcaps</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1024" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/highlights/" class=""><span class="item_outer"><span class="item_text">Highlights</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-1018" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/icon-with-text/" class=""><span class="item_outer"><span class="item_text">Icon with Text</span><span class="plus"></span></span></a></li>
                                                                <li id="sticky-nav-menu-item-972" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://aviana.qodeinteractive.com/elements/title-subtitle/" class=""><span class="item_outer"><span class="item_text">Title &amp; Subtitle</span><span class="plus"></span></span></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>


                                <a class="mkdf-search-opener mkdf-icon-has-hover" href="javascript:void(0)">
                                    <span class="mkdf-search-opener-wrapper">
                                        <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-magnifier "></span> </span>
                                </a>

                                <a class="mkdf-side-menu-button-opener mkdf-icon-has-hover" href="javascript:void(0)">
                                    <span class="mkdf-side-menu-lines lnr lnr-menu"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </header>




<?php


    }
}
