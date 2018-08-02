<section class="gallery-header" data-aos="zoom-in" data-aos-duration="350" data-aos-offset="200">
    <div class="container">
        <?php
        $current_id = get_the_ID();
        $box_title = __('Виробництво та продаж каркасних мобільних споруд','custom');
        $box_subtitle = __('Якісно! Недорого! Швидко!','custom');
        $custom_class = 'color-white';
        include get_template_directory() . '/partials/molecules/title-h2.php';
        ?>
        <div class="category-wrapper d-lg-flex align-items-start justify-content-center">
            <?php
            $args = array(
                'post_status' => 'publish',
                'post_type' => 'gallery'
            );
            $wp_query = null;
            $wp_query = new WP_Query($args);


            if ($wp_query->have_posts()) :
                while ($wp_query->have_posts()) : $wp_query->the_post();
                    $skew_name = get_the_title();
                    $skew_url = get_the_permalink();
                    $skew_img = get_the_post_thumbnail_url();
                    include get_template_directory() . '/partials/molecules/category-skew-item.php';
                endwhile;
            endif;
            ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

