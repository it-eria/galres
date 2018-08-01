<?php if (have_rows('about_our_wagons')): ?>
    <section class="about-our-wagons" data-aos="fade-up" data-aos-duration="400" data-aos-offset="200">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <?php while (have_rows('about_our_wagons')): the_row();
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $image = get_sub_field('image');
                        ?>
                        <div class="title-about">
                            <h2><?php echo $title; ?></h2>
                        </div>
                        <div class="separator mb-3 mt-3 mt-lg-3"></div>
                        <img src="<?php echo $image; ?>" alt="picture"
                             class="about-img img-fluid d-block d-lg-none mb-3"/>
                        <div class="description-about">
                            <?php echo $description; ?>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="separator d-none d-lg-block mt-5"></div>
                            <a href="<?php the_permalink(12); ?>"
                               class="about-btn"><?php _e('Дізнатись більше', 'custom'); ?></a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center ">
                    <img src="<?php echo $image; ?>" alt="picture" class="about-img img-fluid d-none d-lg-block">
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>