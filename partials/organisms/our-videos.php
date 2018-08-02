<?php if (have_rows('video_list')): ?>
    <section class="our-videos">
        <div class="container">
            <div class="title-h2  pb-40 pt-40" data-aos="zoom-out-up" data-aos-offset="100">
                <div class="container d-flex justify-content-center align-items-center flex-column ">
                    <h2 class="text-center"><?php _e('Відео наших робіт', 'custom'); ?></h2>
                </div>
            </div>
            <div class="our-videos__wrapper d-block d-lg-flex align-items-start">
                <?php while (have_rows('video_list')): the_row(); ?>
                    <?php include get_template_directory() . '/partials/molecules/our-videos-item.php'; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>