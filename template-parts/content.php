<?php
/**
 * Template part for displaying posts
 *
 * @package HAVILAND
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
            <div class="entry-meta">
                <?php
                cyno_haviland_posted_on();
                cyno_haviland_posted_by();
                ?>
            </div>
        <?php endif; ?>
    </header>

    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        if (is_singular()) :
            the_content();
        else :
            the_excerpt();
            ?>
            <a href="<?php echo esc_url(get_permalink()); ?>" class="read-more">
                <?php esc_html_e('Đọc thêm', 'cyno-haviland'); ?>
            </a>
        <?php endif; ?>
    </div>

    <footer class="entry-footer">
        <?php cyno_haviland_entry_footer(); ?>
    </footer>
</article> 