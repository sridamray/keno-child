<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Keno
 */

?>





<?php if (is_single()) : ?>




    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox-item'); ?>>
        <?php if (has_post_thumbnail()): ?>
            <div class="post-image">
                <figure class="image-anime reveal">
                    <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                </figure>
            </div>
        <?php endif; ?>
        <div class="post-content">
            <!-- Post Entry Start -->
            <div class="post-entry">
                <?php the_content(); ?>
            </div>
            <!-- Post Entry End -->
        </div>



    </article>

<?php else: ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-6 format-standard'); ?>>
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
                    <a href="<?php the_permalink(); ?>" class="readmore-btn">Read More</a>
                </div>
                <!-- Post Item Readmore Button End-->
            </div>
            <!-- Post Item Body End -->
        </div>
        <!-- Post Item End -->
    </article>



<?php endif; ?>