<?php
if( is_page( 18 ) ){
    get_template_part("partials/organisms/footer-container");
    get_template_part("partials/molecules/copyright");
}
else {
    get_template_part("partials/organisms/footer-container");
    get_template_part("partials/organisms/gmap");
    get_template_part("partials/molecules/copyright");
}
?>

<!-- Jquery -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/vendors/jquery-3.3.1.js"></script>
<!-- Slick slider -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/vendors/slick.min.js"></script>
<!-- Animate on scroll -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/vendors/aos.js"></script>
<!-- Bootstrap -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/vendors/bootstrap.js"></script>

<script>
    function initMap() {
        var coords = {
            lat: 49.813485,
            lng: 24.063913
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: coords
        });
        var marker = new google.maps.Marker({
            position: coords,
            map: map,
            icon: "<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/gmap-marker.png"
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoLs4jh4_7ZW16LDVDAXDPGISWv9RN-x8&callback=initMap" async
        defer></script>
<!-- Custom script -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/js/script.min.js"></script>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-wrapp">
            <div class="modal-header">
                <div>
                    <h2>Замовлення</h2>
                    <h4>Заповніть особисті дані для успішного замовлення</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="300" title="Замовити" html_class="contact-form-container"]'); ?>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-wrapp">
            <div class="modal-header">
                <div>
                    <h2 class="text-center">Ваше замовлення було успішно відправлено</h2>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--            <a href="javascript:void(0)" class="blue-btn m-auto">Замовити</a>-->
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>