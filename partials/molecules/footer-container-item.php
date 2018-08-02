<?php if (have_rows('centered_nav_info', 'option')): ?>
    <?php while (have_rows('centered_nav_info', 'option')): the_row();
        $email = get_sub_field('email', 'option');
        $address = get_sub_field('address', 'option');
        $whatsapp_url = get_sub_field('whatsapp_url', 'option');
        $viber_url = get_sub_field('viber_url', 'option');
        $telegram_url = get_sub_field('telegram_url', 'option');
        $phones = get_sub_field('phones', 'option');
        ?>
        <?php if (!empty($address)): ?>
            <div class="footer-container__blocks-wrapp__item">
                <p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/footer-location-icon.png"
                         alt="img"/><strong><?php _e('Адреса:', 'custom'); ?></strong>
                </p>
                <p><?php echo $address; ?></p>
            </div>
        <?php endif; ?>
        <?php if (!empty($phones)): ?>
            <div class="footer-container__blocks-wrapp__item">
                <p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/footer-phone-icon.png"
                         alt="img"/><strong><?php _e('Телефони:', 'custom'); ?></strong>
                    <?php if (!empty($whatsapp_url)): ?>
                        <a href="<?php echo $whatsapp_url; ?>"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/whatsapp-icon.png"/></a>
                    <?php endif; ?>
                    <?php if (!empty($viber_url)): ?>
                        <a href="<?php echo $viber_url; ?>"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/viber-icon.png"/></a>
                    <?php endif; ?>
                    <?php if (!empty($telegram_url)): ?>
                        <a href="<?php echo $telegram_url; ?>"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/telegram-icon.png"/></a>
                    <?php endif; ?>
                </p>
                <?php if (!empty($phones)): ?><p><?php echo $phones; ?></p> <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if (!empty(get_field('time_to_work', 'option'))): ?>
            <div class="footer-container__blocks-wrapp__item">
                <p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/footer-icon-time.png"
                         alt="img"/><strong><?php _e('Режим роботи:', 'custom'); ?></strong>
                </p>
                <p><?php echo get_field('time_to_work', 'option'); ?></p>
            </div>
        <?php endif; ?>

        <div class="footer-container__blocks-wrapp__item">
            <p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/footer-email-icon.png"
                     alt="img"/><strong><?php _e('Електронна пошта:', 'custom'); ?></strong>
            </p>
            <?php if (!empty($email)): ?><a
                href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a> <?php endif; ?>
        </div>
        <?php if (have_rows('social_media', 'option')): ?>
            <div class="footer-container__blocks-wrapp__item">
                <p>
                    <strong><?php _e('Соціальні мережі:', 'custom'); ?></strong>
                </p>
                <?php while (have_rows('social_media', 'option')): the_row();
                    $fb = get_sub_field('facebook', 'option');
                    $insta = get_sub_field('instagram', 'option');
                    ?>
                    <a class="d-block" href="<?php echo $fb; ?>"><span><img class="mr-3"
                                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/footer-icon-fb.png"
                                                                            alt="img"/></span><?php _e('Facebook', 'custom'); ?>
                    </a>

                    <a class="d-block" href="<?php echo $insta; ?>"><span><img class="mr-3"
                                                                               src="<?php echo get_stylesheet_directory_uri(); ?>/html_template/build/assets/img/footer-icon-insta.png"
                                                                               alt="img"/></span><?php _e('Instagram', 'custom'); ?>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>