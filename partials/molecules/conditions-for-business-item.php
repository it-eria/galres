<?php if (have_rows('conditions_for_business')): ?>
    <?php while (have_rows('conditions_for_business')): the_row();
        $condition_icon = get_sub_field('condition_icon');
        $condition_title = get_sub_field('condition_title');
        ?>
        <?php if ($condition_icon): ?>
            <div class="conditions-for-business__wrapper__item col-3 d-flex flex-column text-center "
                 data-aos="flip-left" data-aos-offset="100">
            <div class="sides-line-style img-cont">
                <img src="<?php echo $condition_icon; ?>" alt="img"/>
            </div>
            <?php if ($condition_title): ?><p><?php echo $condition_title; ?></p><?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


