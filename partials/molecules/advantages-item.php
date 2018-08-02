<?php if (have_rows('company_advantages', 8)): ?>
        <?php while (have_rows('company_advantages', 8)): the_row();
            $advantages_icon = get_sub_field('advantages_icon', 8);
            $advantages_icons_title = get_sub_field('advantages_icons_title', 8);
            ?>
            <?php if ($advantages_icon): ?>
                <div class="advantages__wrapper__item" data-aos="zoom-out" data-aos-offset="100">
                    <?php if ($advantages_icons_title): ?><p><?php echo $advantages_icons_title; ?></p><?php endif; ?>
                    <div class="minw-100 text-center">
                        <img src="<?php echo $advantages_icon; ?>" alt="img"/>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>

<?php endif; ?>