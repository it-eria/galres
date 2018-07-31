<section class="our-works">
    <div class="container">
        <div class="title-h2  pb-40 pt-40" data-aos="zoom-out-up" data-aos-offset="200">
            <div class="container d-flex justify-content-center align-items-center flex-column">
                <h2 class="text-center"><?php _e('Наші вироби','custom'); ?></h2>
                <span></span>
            </div>
        </div>
        <?php
        $args = array(
            'post_status' => 'publish',
            'post_type' => 'productions'
        );
        ?>
        <?php $wp_query = null;
        $wp_query = new WP_Query($args); ?>
        <?php if ($wp_query->have_posts()) : ?>
        <div class="our-works__content d-flex justify-content-between align-items-start">
            <div class="our-works__content__sidebar" data-aos="fade-right" data-aos-duration="300" data-aos-offset="200">
<?php  include get_template_directory() . '/partials/molecules/work-sidebar.php';?>
            </div>
            <div class="our-works__content__wrapper" >

                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <?php include get_template_directory() . '/partials/molecules/our-work-item.php'; ?>
                    <?php endwhile; ?>

            </div>
        </div>
        <a class="show-more-button mt-5" href="<?php echo get_page_link(12); ?>"><?php _e('Побачити більше', 'custom'); ?></a>
        <?php endif; ?>
    </div>
</section>

<?php wp_reset_query(); ?>