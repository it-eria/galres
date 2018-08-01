<?php
$box_title = get_field('about_title');
$box_subtitle = get_field('about_subtitle');
$custom_class = '';
include get_template_directory() . '/partials/molecules/title-h2.php';
?>
<?php if( get_field('about_main_img' )): ?>
<section class="about-header-img-container">
    <img src="<?php the_field('about_main_img'); ?>" alt="img" />
</section>
<?php endif; ?>

