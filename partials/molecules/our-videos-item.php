<div class="our-videos__wrapper__item justify-content-center d-flex">
    <?php
    $iframe = get_sub_field('video');
    preg_match('/src="(.+?)"/', $iframe, $matches);
    $src = $matches[1];
    $params = array(
        'controls' => 0,
        'hd' => 1,
        'autohide' => 1
    );
    $new_src = add_query_arg($params, $src);
    $iframe = str_replace($src, $new_src, $iframe);
    $attributes = 'frameborder="0"';
    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
    echo $iframe;
    ?>
</div>