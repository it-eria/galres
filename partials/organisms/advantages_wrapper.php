<div class="advantages">
    <div class="container sides-line-style ">
        <div class="title-h2  pb-40 pt-40" data-aos="zoom-out-up" data-aos-offset="200">
            <div class="container d-flex justify-content-center align-items-center flex-column ">
                <h2 class="text-center"><?php the_field("advantages_title"); ?></h2>
            </div>
        </div>
        <div class="center-logotype-adv ">
            <h3 class="advantages-logo"><?php _e('ГалРес','custom'); ?></h3>
        </div>
        <div class="advantages__wrapper ">
            <?php include get_template_directory() . '/partials/molecules/advantages-item.php';?>
        </div>
    </div>
    <div class="container mtop-50">
        <?php
        $box_title = get_field('advantages_title_bottom');
        $box_subtitle = get_field('advantages_subtitle_bottom');
        $custom_class = '';
        include get_template_directory() . '/partials/molecules/title-h2.php';
        ?>
    </div>
</div>