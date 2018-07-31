<div>
    <?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $image = get_sub_field('image');
    $what_you_need_title = $title;
    $box_title = $what_you_need_title;
    $custom_class = 'color-white';
    include get_template_directory() . '/partials/molecules/title-h2.php'; ?>
    <div class="advantages-slider__wrapper__item d-flex align-items-center justify-content-between">
        <?php if ($description): ?>
            <div class="advantages-slider__wrapper__item__info col-6">
                <?php echo $description; ?>
            </div>
        <?php endif; ?>
        <?php if ($image): ?>
            <div class="advantages-slider__wrapper__item__img col-6">
                <img src="<?php echo $image; ?>" alt="img"/>
            </div>
        <?php endif; ?>
    </div>
</div>
