<?php
/**
 * The template for displaying search results pages
 *
 * @package cyno-haviland
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <main id="primary" class="site-main">
                <?php if (have_posts()) : ?>
                    <header class="page-header mb-4">
                        <h1 class="page-title">
                            <?php
                            printf(
                                /* translators: %s: search query */
                                esc_html__('Search Results for: %s', 'cyno-haviland'),
                                '<span class="text-primary">' . get_search_query() . '</span>'
                            );
                            ?>
                        </h1>
                    </header>

                    <div class="row">
                        <?php
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();
                            ?>
                            <div class="col-md-6">
                                <?php get_template_part('template-parts/content', get_post_type()); ?>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>

                    <?php
                    // Bootstrap 5 pagination
                    echo '<div class="mt-4">';
                    the_posts_pagination(array(
                        'class' => 'pagination justify-content-center',
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                        'screen_reader_text' => __('Posts navigation', 'cyno-haviland'),
                    ));
                    echo '</div>';

                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
            </main>
        </div>

        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
