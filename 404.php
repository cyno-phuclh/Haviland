<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package cyno-haviland
 */

get_header(); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center py-5">
            <h1 class="display-1 text-muted mb-4">404</h1>
            <h2 class="h4 mb-4"><?php esc_html_e('Oops! That page can\'t be found.', 'cyno-haviland'); ?></h2>
            
            <div class="mb-4">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'cyno-haviland'); ?></p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php get_search_form(); ?>
                </div>
            </div>

            <div class="mt-5">
                <h3 class="h5 mb-3"><?php esc_html_e('You might also try:', 'cyno-haviland'); ?></h3>
                <ul class="list-unstyled">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Go to Homepage', 'cyno-haviland'); ?></a></li>
                    <?php
                    // Display recent posts
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 5,
                        'post_status' => 'publish'
                    ));
                    
                    if ($recent_posts) :
                        echo '<li class="mt-3"><strong>' . esc_html__('Recent Posts:', 'cyno-haviland') . '</strong></li>';
                        foreach ($recent_posts as $recent) {
                            echo '<li><a href="' . get_permalink($recent['ID']) . '">' . $recent['post_title'] . '</a></li>';
                        }
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?> 