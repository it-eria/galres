<section class="conditions-for-business bg-blue">
    <div class="container">
        <?php
        $box_title = get_field('conditions_business_title');
        $box_subtitle = get_field('conditions_business_subtitle');
        $custom_class = 'color-white';
        include get_template_directory() . '/partials/molecules/title-h2.php';
        ?>
        <div class="conditions-for-business__wrapper d-flex align-items-start justify-content-center">
            <?php include get_template_directory() . '/partials/molecules/conditions-for-business-item.php';?>
        </div>
    </div>
</section>