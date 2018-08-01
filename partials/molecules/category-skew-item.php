<?php
$taxonomy = 'products_category';
$terms = get_terms($taxonomy); ?>
<?php if ($terms && !is_wp_error($terms)) :
    ?>
    <?php foreach ($terms as $term) { ?>
    <div class="category-wrapper__item">
        <a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><img src="<?php the_field('cat_img', $term); ?>"
                                                                            alt="img"/></a>
        <a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><p><?php echo $term->name; ?></p></a></li>
    </div>
<?php } ?>
<?php endif; ?>

