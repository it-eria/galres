<?php if (have_rows('delivery_price')): ?>
    <section class="delivery-price">
        <div class="container">
            <div class="title-h2  pb-40 pt-40" data-aos="zoom-out-up" data-aos-offset="200">
                <div class="container d-flex justify-content-center align-items-center flex-column color-white">
                    <h2 class="text-center">Орієнтовна вартість доставки</h2>
                </div>
            </div>
            <?php
            $prod_type_string = '<p>';
            $state_delivery_string = '<p>';
            $state_delivery_outside_string = '<p>';
            while (have_rows('delivery_price')): the_row();
                $prod_type = get_sub_field('prod_type');
                $prod_type_string = $prod_type_string . '</p><p>' . $prod_type;
                $state_delivery = get_sub_field('state_delivery');
                $state_delivery_string = $state_delivery_string . '</p><p>' . $state_delivery;
                $state_delivery_outside = get_sub_field('state_delivery_outside');
                $state_delivery_outside_string = $state_delivery_outside_string . '</p><p>' . $state_delivery_outside;
            endwhile;
            $prod_type_string = $prod_type_string . '</p>';
            $state_delivery_string = $state_delivery_string . '</p>';
            $state_delivery_outside_string = $state_delivery_outside_string . '</p>';
            ?>
            <div class="delivery-price__wrapper d-md-flex justify-content-md-center align-items-start flex-column flex-lg-row">
                <div class="delivery-price__wrapper__item col-md-4 col-12 justify-content-md-center flex-column d-md-flex">
                    <span class="delivery-price__wrapper__item__title"><?php _e('Тип товару','custom');?></span>
                    <?php echo $prod_type_string; ?>
                </div>
                <div class="delivery-price__wrapper__item col-md-3 col-12 justify-content-md-center flex-column d-md-flex">
                    <span class="delivery-price__wrapper__item__title"><?php _e('Доставка по місту','custom');?></span>
                    <?php echo $state_delivery_string; ?>
                </div>
                <div class="delivery-price__wrapper__item col-md-4 col-12 justify-content-md-center flex-column d-md-flex">
                    <span class="delivery-price__wrapper__item__title"><?php _e('Доставка за межі міста','custom');?></span>
                    <?php echo $state_delivery_outside_string; ?>
                </div>
                <?php
                while (have_rows('delivery_price')): the_row();
                    $prod_type = get_sub_field('prod_type');
                    $state_delivery = get_sub_field('state_delivery');
                    $state_delivery_outside = get_sub_field('state_delivery_outside');
                    ?>
                    <div class="delivery-price__wrapper__mob-item">
                        <div class="left-blue-line">
                            <?php
                            if ($prod_type) {
                                echo '<span class="delivery-price__wrapper__item__title">' . __('Тип товару', 'custom') . '</span>';
                                echo '<p>' . $prod_type . '</p>';
                            }
                            if ($state_delivery) {
                                echo '<span class="delivery-price__wrapper__item__title">' . __('Доставка по місту', 'custom') . '</span>';
                                echo '<p>' . $state_delivery . '</p>';
                            }
                            if ($state_delivery_outside) {
                                echo '<span class="delivery-price__wrapper__item__title">' . __('Доставка за межі міста', 'custom') . '</span>';
                                echo '<p>' . $state_delivery_outside . '</p>';
                            }
                            ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <div class="container">
        <h2 class="h2-default text-center pb-5 pt-5"><?php the_field('title_after_description'); ?></h2>
    </div>
<?php endif; ?>