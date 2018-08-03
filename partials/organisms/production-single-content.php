<?php if (have_rows('our_works')): ?>
    <section class="production-single-content">
        <div class="container">
            <?php while (have_rows('our_works')): the_row();
                $prod_attr = get_sub_field('prod_attr');
                $prod_price = get_sub_field('prod_price');
                $images = get_sub_field('prod_gallery'); ?>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h2 class="mob-title-single text-center" data-aos="zoom-in-left" data-aos-duration="250"
                            data-aos-offset="100"><?php the_title(); ?></h2>
                        <div class="slider h-100 main-slider-production">
                            <?php include get_template_directory() . '/partials/molecules/single-slides.php'; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <h2 class="desc-title-single" data-aos="zoom-in-left" data-aos-duration="250"
                            data-aos-offset="100"><?php the_title(); ?></h2>
                        <div class="info-production " data-aos="zoom-in-left" data-aos-duration="250"
                             data-aos-offset="100">
                            <?php if (have_rows('prod_attr')):
                                while (have_rows('prod_attr')): the_row(); ?>
                                    <?php include get_template_directory() . '/partials/molecules/product-variable.php'; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="cart-container d-flex align-items-center">
                                <div class="price-container d-flex align-items-center mr-30">
                                    <strong><?php _e('Ціна:', 'custom'); ?></strong>
                                    <p><?php echo $prod_price; ?></p>
                                </div>
                                <a id="order-btn" href="javascript:void(0)" data-toggle="modal" data-price="<?php echo $prod_price; ?>" data-target="#exampleModalCenter"
                                   class="blue-btn"><?php _e('Замовити', 'custom'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider nav-slider-production mtop-20">
                    <?php include get_template_directory() . '/partials/molecules/single-slides.php'; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
