<div class="col-12 col-md-6 col-lg-3 gallery-content__wrapper__item">
    <div class="position-relative">
        <a data-rel="lightbox-gallery-<?php echo get_the_ID(); ?>"
           data-lightbox-gallery="lightbox-gallery-<?php echo get_the_ID(); ?>" href="<?php echo $image['url']; ?>"
           class="gallery-mask">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/zoom-icon.png"
                 alt="img"/>
        </a>
        <img src="<?php echo $image['url']; ?>" alt="img"/>
    </div>
    <p class="mt-2 text-center"><?php echo $image['title']; ?></p>
</div>
