<?php if (have_rows('materials_and_ production')):
    while (have_rows('materials_and_ production')): the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $image = get_sub_field('image');
        ?>
        <section class="about-materials " data-aos-duration="400" data-aos-offset="100" data-aos="zoom-in">
            <div class="container">
                <div class="materials-block d-lg-flex d-block justify-content-between align-items-center">
                    <div class="col-lg-6 col-12 clearfix">
                        <div class="title-about">
                            <h2><?php echo $title; ?></h2>
                        </div>
                        <div class="separator mb-3 mt-3 mt-lg-3 float-right"></div>
                        <img src="<?php echo $image; ?>" alt="picture"
                             class="about-img img-fluid d-block d-lg-none mb-3">
                        <div class="description-about d-inline-block">
                            <?php echo $description; ?>
                        </div>
                        <div class="separator mb-3 mt-3 mt-lg-3 float-right"></div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <img src="<?php echo $image; ?>" alt="picture" class="about-img img-fluid d-none d-lg-block">
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>