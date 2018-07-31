<?php if (have_rows('company_advantages')): ?>
        <?php while (have_rows('company_advantages')): the_row();
            $advantages_icon = get_sub_field('advantages_icon');
            $advantages_icons_title = get_sub_field('advantages_icons_title');
            ?>
            <?php if ($advantages_icon): ?>
                <div class="advantages__wrapper__item" data-aos="zoom-out" data-aos-offset="200">
                    <?php if ($advantages_icons_title): ?><p><?php echo $advantages_icons_title; ?></p><?php endif; ?>
                    <div class="minw-100 text-center">
                        <img src="<?php echo $advantages_icon; ?>" alt="img"/>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>

<?php endif; ?>