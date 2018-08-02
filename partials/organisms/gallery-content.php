<?php $images = get_field('gallery_wagons');
if ($images): ?>
    <section class="gallery-content" data-aos="zoom-in" data-aos-duration="350" data-aos-offset="100">
        <?php
        $box_title = get_the_title();
        $custom_class = '';
        include get_template_directory() . '/partials/molecules/title-h2.php';
        ?>
        <div class="container">
            <div class="gallery-content__wrapper flex-wrap ">
                <?php foreach ($images as $image):
                    include get_template_directory() . '/partials/molecules/gallery-content-item.php';
                endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>