<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Keno
 */

get_header();
$keno_child_breadcrumb_image = get_theme_mod('keno_child_breadcrumb_image');
?>

<?php if (!is_front_page()) : ?>

    <!-- Page Header Start -->
    <div class="page-header bg-section" style="background-image: url(<?php echo esc_url($keno_child_breadcrumb_image); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <?php
                        // Check if it's a blog page (posts page) or a specific page
                        if (is_home()) {
                            // Get the title of the page assigned to display posts
                            $title = get_the_title(get_option('page_for_posts', true));
                        } elseif (is_archive()) {
                            // Get the title for archive pages (like categories, tags, or custom post types)
                            $title = get_the_archive_title();
                        } elseif (is_search()) {
                            // Get the title for the search results page
                            $title = 'Search Results for: <span>' . get_search_query() . '</span>';
                        } else {
                            // Default to the current page/post title
                            $title = get_the_title();
                        }
                        ?>

                        <h1 class="text-anime-style-2" data-cursor="-opaque"><?php echo $title; ?></h1>

                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">home</a></li>

                                <?php
                                // Check if it's a regular page and not the front page
                                if (is_page() && ! is_front_page()) :
                                    // If the page has a parent, show the parent link
                                    if ($post->post_parent) {
                                        $ancestors = get_post_ancestors($post->ID);
                                        $ancestors = array_reverse($ancestors);
                                        foreach ($ancestors as $ancestor) {
                                            echo '<li class="breadcrumb-item"><a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a></li>';
                                        }
                                    }
                                ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html(get_the_title()); ?></li>

                                <?php
                                // Check if it's the blog posts page
                                elseif (is_home()) :
                                ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html(get_the_title(get_option('page_for_posts', true))); ?></li>

                                <?php
                                // Check if it's an archive page (category, tag, etc.)
                                elseif (is_archive()) :
                                ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_archive_title(); ?></li>

                                <?php
                                // Check if it's a single post (blog post)
                                elseif (is_singular('post')) :
                                    // You could add category links here if you want
                                ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html(get_the_title()); ?></li>

                                <?php
                                // Check if it's a search results page
                                elseif (is_search()) :
                                ?>
                                    <li class="breadcrumb-item active" aria-current="page">Search Results</li>

                                <?php
                                // Fallback for other types of pages (like single custom post types)
                                elseif (is_singular()) :
                                ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html(get_the_title()); ?></li>

                                <?php endif; ?>

                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<?php endif; ?>





<div class="container keno-page">
    <main id="primary" class="site-main">

        <?php
        if (have_posts()):
            while (have_posts()): the_post();
                get_template_part('template-parts/content', 'page');
            endwhile;
        else:
            get_template_part('template-parts/content', 'none');
        endif;
        ?>

    </main><!-- #main -->
</div>

<?php

get_footer();
