<?php if (have_rows('faq')): ?>
    <section class="faq">
        <div class="container">
            <div class="title-h2  pb-40 pt-40" data-aos="zoom-out-up" data-aos-offset="200">
                <div class="container d-flex justify-content-center align-items-center flex-column ">
                    <h2 class="text-center"><?php _e('Поширені запитання','custom'); ?></h2>
                </div>
            </div>
            <div class="wrapper accordion js-accordion">
                <?php while (have_rows('faq')): the_row();
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
                    ?>
                    <?php include get_template_directory() . '/partials/molecules/faq-item.php'; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('faq')): ?>
    <?php while (have_rows('faq')): the_row();
        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
        ?>
    <?php endwhile; ?>
<?php endif; ?>