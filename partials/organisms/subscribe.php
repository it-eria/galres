<?php if (have_rows('subscribe')):
    while (have_rows('subscribe')): the_row();
        $image = get_sub_field('bg');
        ?>
        <section class="subscribe" style="background-image: url( <?php echo $image; ?>); background-repeat: no-repeat;">
            <div class="container mw-1180 bg-white">
                <?php
                $subscribe_title = get_field('subscribe');
                $subscribe_subtitle = get_field('subscribe');
                $box_title = $subscribe_title['title'];
                $box_subtitle = $subscribe_subtitle['subtitle'];
                $custom_class = '';
                include get_template_directory() . '/partials/molecules/title-h2.php';
                ?>
                <?php echo do_shortcode('[contact-form-7 id="141" title="Залиште заявку" html_class="d-flex justify-content-between align-items-center"]'); ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>