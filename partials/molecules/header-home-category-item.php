
    <div class="vagonchiki__item view view-first">
        <div class="vagonchiki__item__title">
            <h3><?php echo $term->name; ?></h3>
        </div>
        <div class="vagonchiki__item__image" style="background-image: url(<?php the_field('cat_img', 'products_category_' . $term->term_id);?>);">
            <div class="mask"></div>
            <div class="content-vagonchiki ">
                <p><?php echo $term->description; ?></p>
                <div class="vagonchiki-price d-flex justify-content-between align-items-center">
                    <p>Ціна від <span><?php the_field('cat_price', 'products_category_' . $term->term_id);?> грн.</span></p>
                    <a href="<?php echo get_term_link($term); ?>" class="info">Дізнатись більше</a>
                </div>

            </div>
        </div>
    </div>
