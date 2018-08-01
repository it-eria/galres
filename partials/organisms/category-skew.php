<section class="category-skew bg-blue">
    <div class="container">
        <?php
        $box_title = get_field('productions_title');
        $box_subtitle = get_field('production_subtitle');
        $custom_class = 'color-white';
        include get_template_directory() . '/partials/molecules/title-h2.php';
        ?>
        <div class="category-wrapper d-lg-flex align-items-start justify-content-center">
            <?php   include get_template_directory() . '/partials/molecules/category-skew-item.php';?>
        </div>
    </div>
</section>