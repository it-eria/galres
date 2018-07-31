<?php if (!empty('where_we_work')): ?>
    <div class="first-line-container-desc d-flex align-items-center blue-bg">
        <div class="container d-flex justify-content-between">
            <p><?php the_field('where_we_work', 'option'); ?></p>
            <?php if (!empty('work_time')): ?><p><?php the_field('work_time', 'option'); ?></p><?php endif; ?>
        </div>
    </div>
<?php endif; ?>
