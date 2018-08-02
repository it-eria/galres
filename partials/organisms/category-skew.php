<section class="category-skew bg-blue">
    <div class="container">
        <?php
        $box_title = get_field('productions_title');
        $box_subtitle = get_field('production_subtitle');
        $custom_class = 'color-white';
        include get_template_directory() . '/partials/molecules/title-h2.php';
        ?>
        <div class="category-wrapper d-lg-flex align-items-start justify-content-center">
            <?php
            $taxonomy = 'products_category';
            $terms = get_terms($taxonomy);
            if ($terms && !is_wp_error($terms)) :
                foreach ($terms as $term) {
                    $skew_name = $term->name;;
                    $skew_url = get_term_link($term->slug, $taxonomy);
                    $skew_img = get_field('cat_img', $term);
                    include get_template_directory() . '/partials/molecules/category-skew-item.php';
                }
            endif; ?>
        </div>
    </div>
</section>