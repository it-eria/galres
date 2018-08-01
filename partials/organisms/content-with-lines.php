<?php if (have_rows('short_description_about_our_wagons')): ?>
    <section class="content-with-lines" data-aos="fade-down" data-aos-duration="400" data-aos-offset="200">
        <div class="container">
            <div class="clearfix">
                <?php while (have_rows('short_description_about_our_wagons')): the_row();
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    ?>
                    <div class="title-about">
                        <h2><?php echo $title; ?></h2>
                    </div>
                    <div class="separator mb-3 mt-3 mt-lg-3 float-left"></div>
                    <div class="description-about d-inline-block">
                        <?php echo $description; ?>
                    </div>
                    <div class="separator mb-3 mt-3 mt-lg-3 float-left"></div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>