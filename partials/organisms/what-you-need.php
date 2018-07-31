<section class="what-you-need">
    <div class="container">
        <?php
        $what_you_need_title = get_field('what_you_need');
        $what_you_need_subtitle = get_field('what_you_need');
        $box_title = $what_you_need_title['title'];
        $box_subtitle = $what_you_need_subtitle['subtitle'];
        $custom_class = '';
        include get_template_directory() . '/partials/molecules/title-h2.php';
        ?>
        <?php if (have_rows('what_you_need')): ?>
            <div class="what-you-need__information d-flex justify-content-between align-items-center">
                <div class="what-you-need__information__description" data-aos="fade-down-right" data-aos-duration="700"
                     data-aos-offset="200">
                    <?php while (have_rows('what_you_need')): the_row();
                        $short_description = get_sub_field('short_description');
                        ?>
                        <p><?php echo $short_description; ?></p>
                    <?php endwhile; ?>
                </div>
                <div class="what-you-need__information__wrapper d-flex align-items-start flex-wrap">
                    <?php if (have_rows('what_you_need_items')): ?>
                        <?php while (have_rows('what_you_need_items')): the_row();
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            ?>
                            <?php include get_template_directory() . '/partials/molecules/what-you-need-item.php'; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>