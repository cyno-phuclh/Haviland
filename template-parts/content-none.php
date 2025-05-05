<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package cyno-haviland
 */
?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Nothing Found', 'cyno-haviland'); ?></h1>
    </header>

    <div class="page-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) :
            printf(
                '<p>' . wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                    __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'cyno-haviland'),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );
        elseif (is_search()) :
            ?>
            <div class="alert alert-info">
                <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cyno-haviland'); ?></p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php get_search_form(); ?>
                </div>
            </div>
        <?php
        else :
            ?>
            <div class="alert alert-info">
                <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cyno-haviland'); ?></p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php get_search_form(); ?>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
</section> 