<section class="about-company">
    <div class="container">
        <?php
        $box_title = get_the_title();
        $box_subtitle = '';
        $custom_class = '';
        include get_template_directory() . '/partials/molecules/title-h2.php';
        ?>
        <?php if (have_rows('description_about_company')): ?>
            <div class=" justify-content-between d-block align-items-start d-lg-flex pb-5">
                <?php while (have_rows('description_about_company')): the_row();
                    $left_description_about = get_sub_field('left_description_about');
                    $right_description_about = get_sub_field('right_description_about');
                    ?>
                    <?php if ($left_description_about): ?>
                        <div class="col-lg-6 col-sm-12 col-md-12 clearfix mt-4 " data-aos="fade-right"
                             data-aos-duration="400" data-aos-offset="200">
                            <div class="separator mb-3 mt-3 mt-lg-3"></div>
                            <div class="description-about">
                                <?php echo $left_description_about; ?>
                            </div>
                            <div class="separator float-left mt-3"></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($right_description_about): ?>
                        <div class="col-lg-6 col-sm-12 col-md-12 mt-5 clearfix " data-aos="fade-left"
                             data-aos-duration="400" data-aos-offset="200">
                            <div class="separator mb-3 mt-3 mt-lg-3 float-right d-none d-lg-block"></div>
                            <div class="description-about d-inline-block ">
                                <?php echo $right_description_about; ?>
                            </div>
                            <div class="separator  mt-3 float-right"></div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>