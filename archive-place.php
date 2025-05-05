<?php get_header();?>
<div class="container py-5">
    <h1>Danh sách căn hộ dài hạn</h1>
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'canhodaihan',
            'posts_per_page' => -1, 
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>

</div>
            
<?php get_footer(); ?> 