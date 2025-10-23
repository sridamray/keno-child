<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) exit;

class Dora_Blog_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'dora-blog';
    }

    public function get_title()
    {
        return __('Dora Blog', 'your-textdomain');
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
            'dora_blog_wrap',
            [
                'label' => __('Blog', 'your-textdomain'),
            ]
        );

        $this->add_control(
            'dora_blog_post_per_page',
            [
                'label' => esc_html__('Post Per Page', 'gorent-toolkit'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('3', 'gorent-toolkit'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'dora_category_select',
            [
                'label' => esc_html__('Select Post Category', 'gorent-toolkit'),
                'type' => Controls_Manager::SELECT2,
                'label_block' => true,
                'multiple' => true,
                'options' => dora_get_all_categories(), // Custom function to get categories
            ]
        );

        $this->add_control(
            'dora_blog_post_orderby',
            [
                'label' => esc_html__('Order', 'gorent-toolkit'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => [
                    'DESC' => esc_html__('DESC', 'gorent-toolkit'),
                    'ASC' => esc_html__('ASC', 'gorent-toolkit'),
                ],
            ]
        );



        $this->add_control(
            'dora_blog_section_blog_btn',
            [
                'label' => esc_html__('Blog Button Text', 'gorent-toolkit'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Read More', 'gorent-toolkit'),
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

        $dora_blog_post_per_page = $settings['dora_blog_post_per_page'];
        $dora_category_select = $settings['dora_category_select'];
        $dora_blog_post_orderby = $settings['dora_blog_post_orderby'];
        $dora_blog_section_blog_btn = $settings['dora_blog_section_blog_btn'];

        // Post Query

        // Check if category is selected
        if (!empty($dora_category_select)) {
            // If categories are selected, add tax_query
            $args = array(
                'post_type'      => 'post', // Fetch blog posts
                'posts_per_page' => $dora_blog_post_per_page, // Number of posts to display
                'order'          => $dora_blog_post_orderby, // Order of posts
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'category', // Taxonomy to filter by
                        'field'    => 'term_id',  // Field type ('term_id', 'slug', or 'name')
                        'terms'    => $dora_category_select, // Selected category IDs (single or multiple)
                        'operator' => 'IN', // Show posts matching any of the selected categories
                    ),
                ),
            );
        } else {
            // If no category is selected, show all posts
            $args = array(
                'post_type'      => 'post', // Fetch blog posts
                'posts_per_page' => $dora_blog_post_per_page, // Number of posts to display
                'order'          => $dora_blog_post_orderby, // Order of posts
            );
        }


        $blog_query = new \WP_Query($args);

?>


        <!-- Our Blog Section Start -->
        <div class="our-blog">
            <div class="container">
                <div class="row">
                    <?php



                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) : $blog_query->the_post();

                    ?>
                            <div class="col-lg-4 col-md-6">
                                <!-- Post Item Start -->
                                <div class="post-item wow fadeInUp">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <!-- Post Featured Image Start-->
                                        <div class="post-featured-image">
                                            <a href="<?php the_permalink(); ?>">
                                                <figure class="image-anime">
                                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Post Featured Image End -->
                                    <?php endif; ?>

                                    <!-- Post Item Body Start -->
                                    <div class="post-item-body">
                                        <!-- Post Item Content Start -->
                                        <div class="post-item-content">
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        </div>
                                        <!-- Post Item Content End -->

                                        <!-- Post Item Readmore Button Start-->
                                        <div class="post-item-btn">
                                            <a href="<?php the_permalink(); ?>" class="readmore-btn"><?php echo esc_html($dora_blog_section_blog_btn); ?></a>
                                        </div>
                                        <!-- Post Item Readmore Button End-->
                                    </div>
                                    <!-- Post Item Body End -->
                                </div>
                                <!-- Post Item End -->
                            </div>

                    <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>
        <!-- Our Blog Section End -->




<?php


    }
}
