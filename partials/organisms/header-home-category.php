<?php
$box_title = get_field('site_slug', 'option');
$box_subtitle = get_field('site_sub_slug', 'option');
$custom_class = '';
include get_template_directory() . '/partials/molecules/title-h2.php';
?>
    <section class="vagonchiki" data-aos="zoom-in" data-aos-offset="250">
        <?php
        $terms = get_terms('products_category', array(
            'hide_empty' => false,
        ));
        foreach ($terms as $term) {
            include get_template_directory() . '/partials/molecules/header-home-category-item.php';
        }
        ?>
    </section>
<?php get_template_part('partials/molecules/mob-contacts-info-main'); ?>
<?php wp_reset_query(); ?>
