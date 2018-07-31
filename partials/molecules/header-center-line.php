<?php if (have_rows('centered_nav_info', 'option')): ?>
    <div class="center-line-container-desc">
        <div class="container d-flex justify-content-between align-items-center">
            <?php while (have_rows('centered_nav_info', 'option')): the_row();
                $email = get_sub_field('email', 'option');
                $address = get_sub_field('address', 'option');
                $whatsapp_url = get_sub_field('whatsapp_url', 'option');
                $viber_url = get_sub_field('viber_url', 'option');
                $telegram_url = get_sub_field('telegram_url', 'option');
                $phones = get_sub_field('phones', 'option');
                ?>
                <?php if (!empty($email)): ?>
                    <div class="center-line-container-desc__left-side-info d-flex align-items-center">
                        <a href="mailto:<?php echo $email; ?>" class="mr-60"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/email-icon.png"
                                    alt="img"/><?php echo $email; ?></a>
                        <?php if (!empty($address)): ?><p><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/location-icon.png"
                            alt="img"/><?php echo $address; ?></p><?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="center-line-container-desc__right-side-info d-flex align-items-center">
                    <?php if (!empty($telegram_url)): ?>
                        <div class="socials mr-15">
                        <?php if (!empty($whatsapp_url)): ?><a href="<?php echo $whatsapp_url; ?>"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/whatsapp-icon.png"/>
                            </a><?php endif; ?>
                        <?php if (!empty($viber_url)): ?><a href="<?php echo $viber_url; ?>"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/viber-icon.png"/>
                            </a><?php endif; ?>
                        <a href="<?php echo $telegram_url; ?>"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/telegram-icon.png"/>
                        </a>
                        </div><?php endif; ?>
                    <?php if (!empty($phones)): ?>
                        <div class="phone-info">
                        <p>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/phone-icon.png"
                                 alt="img"/><?php echo $phones; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>