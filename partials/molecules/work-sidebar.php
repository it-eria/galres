<div class="sidebar-wrapp">
    <h2><?php _e('Каталог','custom'); ?></h2>
    <?php
    $taxonomy = 'products_category';
    $terms = get_terms($taxonomy);

    if ( $terms && !is_wp_error( $terms ) ) :
        ?>
        <ul>
            <?php foreach ( $terms as $term ) { ?>
                <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
            <?php } ?>
        </ul>
    <?php endif;?>
</div>