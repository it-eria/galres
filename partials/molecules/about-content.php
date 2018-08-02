<?php
$args = array(
    'page_id' => '10'
);
?>
<?php $wp_query = null;
$wp_query = new WP_Query($args); ?>
<?php if ($wp_query->have_posts()) : ?>
    <div class="row">
        <div class="col-12 col-lg-6"><?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="title-about">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="separator mb-3 mt-3 mt-lg-3"></div>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="picture"
                     class="about-img img-fluid d-block d-lg-none mb-3"/>
                <div class="description-about">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
            <div class="d-flex justify-content-between mt-3">
                <div class="separator d-none d-lg-block mt-5"></div>
                <a href="<?php the_permalink(); ?>" class="about-btn">Дізнатись більше</a>
            </div>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center ">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="picture" class="about-img img-fluid d-none d-lg-block">
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>
