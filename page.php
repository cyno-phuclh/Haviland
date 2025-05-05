<?php
/**
 * The template for displaying all pages
 *
 * @package cyno-haviland
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <main id="primary" class="site-main">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', 'page');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                endwhile;
                ?>
            </main>
        </div>
        
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
