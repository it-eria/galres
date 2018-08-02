<?php if ($icon): ?>
    <div class="what-you-need__information__wrapper__items col-4 justify-content-center text-center align-items-start"
         data-aos="zoom-in-up" data-aos-duration="400" data-aos-offset="100">
    <img src="<?php echo $icon; ?>" alt="img"/>
    <?php if ($title): ?><p><?php echo $title; ?></p><?php endif; ?>
    </div><?php endif; ?>