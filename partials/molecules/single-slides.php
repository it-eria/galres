<?php if ($images): ?>
    <?php foreach ($images as $image): ?>
        <div style="background-image: url(<?php echo $image['url']; ?>);"></div>
    <?php endforeach; ?>
<?php endif; ?>