<section class="catalog-content">
    <div class="container">
        <?php
        $term = get_queried_object();
        $box_title = $term->name;
        $thumbnail = get_field('cat_img', $term->taxonomy . '_' . $term->term_id);
        $box_subtitle = __('Якісно! Недорого! Швидко!', 'custom');
        include get_template_directory() . '/partials/molecules/title-h2.php'; ?>
        <img class="header-main-img d-lg-block d-none" src="<?php echo $thumbnail; ?>" alt="img"/>
        <div class="catalog-content__wrapper d-flex flex-wrap">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    get_template_part('partials/molecules/our-work-item');
                endwhile;
            else : echo "Нажаль немає товарів";
            endif; ?>
        </div>
        <?php if (have_rows('block_with_cat_description', $term)): ?>
            <div class="catalog-content__info-container  pt-80">
                <h2 class="h2-default"><?php echo $term->name; ?></h2>
                <?php while (have_rows('block_with_cat_description', $term)): the_row();
                    $description = get_sub_field('description', $term);
                    $img = get_sub_field('img', $term);
                    ?>
                    <?php include get_template_directory() . '/partials/molecules/catalog-content-block.php'; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php wp_reset_query(); ?>