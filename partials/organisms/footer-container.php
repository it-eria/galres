<section class="footer-container">
    <div class="container d-flex justify-content-between align-items-start flex-wrap">
        <div class=" col-lg-6 col-sm-12 ">
            <h1 class="color-white maxw-480"><?php _e('Контакти', 'custom'); ?></h1>
            <div class="footer-container__blocks-wrapp d-sm-flex align-items-start flex-wrap d-block">
                <?php get_template_part("partials/molecules/footer-container-item"); ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12  d-flex justify-content-end flex-wrap">
            <h1 class="color-white maxw-480 text-left"><?php _e('Зворотній звязок', 'custom'); ?></h1>
            <?php echo do_shortcode('[contact-form-7 id="167" title="Зворній звязок" html_class="footer-container__contact-form-container"]'); ?>
        </div>
    </div>
</section>