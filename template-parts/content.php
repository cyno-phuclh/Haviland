<?php
/**
 * Template part for displaying posts
 *
 * @package cyno-haviland
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card h-100 mb-4'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="card-img-top">
            <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
        </div>
    <?php endif; ?>

    <div class="card-body">
        <header class="entry-header">
            <?php
            if (is_singular()) :
                the_title('<h1 class="entry-title">', '</h1>');
            else :
                the_title(sprintf('<h2 class="card-title h5"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
            endif;

            if ('post' === get_post_type()) : ?>
                <div class="entry-meta text-muted small mb-2">
                    <?php
                    echo sprintf(
                        /* translators: %s: post date */
                        esc_html__('Posted on %s', 'cyno-haviland'),
                        esc_html(get_the_date())
                    );
                    
                    $categories_list = get_the_category_list(', ');
                    if ($categories_list) {
                        echo ' - ';
                        /* translators: %s: list of categories */
                        printf(esc_html__('Categories: %s', 'cyno-haviland'), $categories_list);
                    }
                    ?>
                </div>
            <?php endif; ?>
        </header>

        <div class="entry-content">
            <?php
            if (is_singular()) :
                the_content();
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'cyno-haviland'),
                    'after'  => '</div>',
                ));
            else :
                the_excerpt();
                ?>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-primary btn-sm">
                    <?php esc_html_e('Read More', 'cyno-haviland'); ?>
                </a>
            <?php endif; ?>
        </div>

        <?php if (is_singular() && get_edit_post_link()) : ?>
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