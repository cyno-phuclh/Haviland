<?php
/**
 * The template for displaying archive pages
 *
 * @package HAVILAND
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container py-5">
        <?php if (have_posts()) : ?>
            <header class="page-header mb-4">
                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>');
                ?>
            </header>

            <div class="row">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', get_post_type());
                endwhile;
                ?>
            </div>

            <?php
            the_posts_pagination(array(
                'prev_text' => '<span class="nav-prev">' . esc_html__('Trước', 'cyno-haviland') . '</span>',
                'next_text' => '<span class="nav-next">' . esc_html__('Sau', 'cyno-haviland') . '</span>',
            ));
            ?>

        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
</main>


<?php
get_sidebar();
get_footer();
