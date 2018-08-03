<section class="related-products" data-aos="fade-up" data-aos-duration="300" data-aos-offset="100">
    <div class="container">
        <?php
        $box_title = 'Схожі товари';
        $custom_class = '';
        include get_template_directory() . '/partials/molecules/title-h2.php';
        ?>
        <div class="related-products__wrapper d-flex flex-wrap align-items-start">
            <?php
            $terms = wp_get_post_terms($post->ID, 'products_category');
            $terms_ids = [];
            foreach ($terms as $term) {
                $terms_ids[] = $term->term_id;
            }
            $currentID = get_the_ID();
            $args = array(
                'post_type' => 'productions',
              'post__not_in' => array($currentID),
                'posts_per_page' => 4,


                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'products_category',
                        'field' => 'term_id',
                        'terms' => $terms_ids,

                    )
                ),
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    include get_template_directory() . '/partials/molecules/our-work-item.php';
                }
            } ?>
        </div>
    </div>
</section>
<?php wp_reset_query(); ?>