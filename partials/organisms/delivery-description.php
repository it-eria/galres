<?php
$box_title = __('Виробництво та продаж каркасних мобільних споруд', 'custom');
$box_subtitle = __('Якісно! Недорого! Швидко!', 'custom');
$custom_class = '';
include get_template_directory() . '/partials/molecules/title-h2.php';
?>
<img class="w-100" src="<?php the_field('main_image'); ?>" alt="img"/>
<section class="delivery-description">
    <div class="container d-lg-flex d-block align-items-start justify-content-between">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2 class="h2-default text-center text-lg-left"><?php the_field('title_for_delivery_description'); ?></h2>
                <div data-aos="fade-right" data-aos-duration="350" data-aos-offset="100">
                    <div class="clearfix">
                        <div class="separator float-left mb-3 mt-3 mt-lg-3"></div>
                        <div class="pl-lg-5  d-inline-block ">
                            <?php the_field('appeal_delivery_description'); ?>
                        </div>
                        <div class="separator float-left mb-3 mt-3 mt-lg-3"></div>
                    </div>
                    <?php the_field('delivery_description'); ?>
                </div>
            </div>
            <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-duration="400" data-aos-offset="100"
                 style="background-image: url(<?php the_field('img_for_delivery_description'); ?>); background-size: cover; background-repeat: no-repeat; min-height: 200px;">
            </div>
        </div>
    </div>
</section>