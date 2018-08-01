<?php
$images = get_field('about_gallery');
$size = 'full';
if ($images): ?>
    <section class="gallery-container">
        <div class="container">
            <?php
            $box_title = __('Галерея', 'custom');
            $box_subtitle = get_field('site_sub_slug');
            $custom_class = 'color-white';
            include get_template_directory() . '/partials/molecules/title-h2.php';
            ?>
            <div class="gallery-container__wrapper d-md-flex align-items-start justify-content-center">
                <?php foreach ($images as $image): ?>
                    <div class="gallery-container__wrapper__item">
                        <?php echo wp_get_attachment_image($image['ID'], $size); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <a href="<?php the_permalink(14); ?>"
               class="about-btn m-auto pt-2 pb-2 justify-content-center"><?php _e('Побачити більше', 'custom'); ?></a>
        </div>
    </section>
<?php endif; ?>