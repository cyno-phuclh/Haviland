<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package cyno-haviland
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="card-img-top">
            <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
        </div>
    <?php endif; ?>

    <div class="card-body">
        <header class="entry-header mb-4">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>

        <div class="entry-content">
            <?php
            the_content();

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'cyno-haviland'),
                'after'  => '</div>',
            ));
            ?>
        </div>

        <?php if (get_edit_post_link()) : ?>
            <footer class="entry-footer mt-4">
                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post */
                            __('Edit <span class="screen-reader-text">%s</span>', 'cyno-haviland'),
                            array('span' => array('class' => array()))
                        ),
                        wp_kses_post(get_the_title())
                    ),
                    '<span class="edit-link btn btn-secondary btn-sm">',
                    '</span>'
                );
                ?>
            </footer>
        <?php endif; ?>
    </div>
</article> 