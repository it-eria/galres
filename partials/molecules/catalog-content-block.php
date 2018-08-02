<?php if ($description): ?>
    <div data-aos="flip-up" data-aos-duration="350" data-aos-offset="200"
         class="catalog-content__info-container__item mb-80 d-flex align-items-center clearfix">
        <div class="col-lg-6 col-12 clearfix p-0 ">
            <div class="separator mb-3 mt-3 mt-lg-3 d-lg-block d-none"></div>
            <?php if ($img): ?><img src="<?php echo $img; ?>" alt="picture"
                                    class="about-img img-fluid d-block d-lg-none mb-3" /><?php endif; ?>
            <div class="catalog-content__info-container__item__description descr clearfix">
                <?php echo $description; ?>
            </div>
            <div class="separator mb-3 mt-3 mt-lg-3"></div>
        </div>
        <?php if ($img): ?>
            <div class="col-lg-6 col-12 p-0">
                <img src="<?php echo $img; ?>" alt="picture" class="catalog-img img-fluid d-none d-lg-block">
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
