<?php
$attr_title = get_sub_field('attr_title');
$attr_value = get_sub_field('attr_value');
?>
<div class="d-flex align-items-start mt-3 mb-3 flex-lg-nowrap flex-wrap">
    <strong><?php echo $attr_title; ?></strong>
    <span><?php echo $attr_value; ?></span>
</div>