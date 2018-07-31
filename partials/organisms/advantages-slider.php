<?php if (have_rows('advantages_slider')): ?>
    <section class="advantages-slider blue-bg">
        <div class="container">
            <div class="advantages-slider__wrapper ">
                <?php while (have_rows('advantages_slider')): the_row(); ?>
                    <?php include get_template_directory() . '/partials/molecules/advantages-slider-item.php'; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php wp_reset_query(); ?>
