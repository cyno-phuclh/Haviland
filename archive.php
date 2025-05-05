<?php
/**
 * The template for displaying archive pages
 *  
 * @package cyno-haviland
 */


<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <main id="primary" class="site-main">
                <?php if (have_posts()) : ?>
                    <header class="page-header mb-4">
                        <?php
                        the_archive_title('<h1 class="page-title">', '</h1>');
                        the_archive_description('<div class="archive-description">', '</div>');
                        ?>
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
