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
            $current_id = get_the_ID();
            include get_template_directory() . '/partials/molecules/title-h2.php';
            ?>
            <div class="gallery-container__wrapper d-md-flex align-items-start justify-content-center">
                <?php foreach ($images as $image): ?>
                    <div class="gallery-container__wrapper__item">

                        <a data-rel="lightbox-gallery-<?php echo $current_id; ?>" data-lightbox-gallery="lightbox-gallery-<?php echo $current_id; ?>" href="<?php echo $image['url']; ?>">
                            <img  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <a href="<?php the_permalink(252); ?>"
               class="about-btn m-auto pt-2 pb-2 justify-content-center"><?php _e('Побачити більше', 'custom'); ?></a>
        </div>
    </section>
<?php endif; ?>