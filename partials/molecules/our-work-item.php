<div class="our-works__content__wrapper__item col-4">
<a href="<?php echo get_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"/></a>
    <div class="p-3 blue-bg position-relative">
        <h3><?php the_title(); ?></h3>
        <div class="d-flex justify-content-between align-items-center ">
            <p>Розмір: <span>
<?php
echo $attr_wrap = get_field('prod_attr')['attr_value'][0];
$box_attr = $attr_wrap[0]['attr_value']; ?>
                </span></p>
            <p>Ціна: <span><?php $price_wrap = get_field('our_works');
                    $box_price = $price_wrap['prod_price']; echo $box_price; ?></span></p>
        </div>
        <div class="more-btn-container">
            <a class="more-btn" href="<?php echo get_permalink(); ?>"><?php _e('Дізнатись більше','custom'); ?></a>
        </div>
    </div>

</div>
