<?php while (have_rows('centered_nav_info', 'option')): the_row();
$email = get_sub_field('email', 'option');
$address = get_sub_field('address', 'option');
$whatsapp_url = get_sub_field('whatsapp_url', 'option');
$viber_url = get_sub_field('viber_url', 'option');
$telegram_url = get_sub_field('telegram_url', 'option');
$phones = get_sub_field('phones', 'option');
?>
<div class="header-contacts-info-mob">
    <div class="container">
        <p></p>
        <?php if (!empty($phones)): ?><p><img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/footer-phone-icon-white.png" alt="img" /><?php echo $phones; ?></p><?php endif; ?>
        <?php if (!empty($email)): ?><p>
            <a href="mailto:<?php echo $email; ?>" class="mr-60"><img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/footer-email-icon-white.png" alt="img"/><?php echo $email; ?>
                    </a>
        </p><?php endif; ?>
        <?php if (!empty($address)): ?><p><img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/footer-location-icon-white.png" alt="img" /><?php echo $address; ?></p><?php endif; ?>
    </div>
</div>
<?php endwhile; ?>