<div class="accordion__item js-accordion-item">
    <?php if( $question ): ?><div class="accordion-header js-accordion-header"><?php echo $question; ?></div><?php endif; ?>
    <?php if( $answer ): ?><div class="accordion-body js-accordion-body">
        <div class="accordion-body__contents"><?php echo $answer; ?></div>
    </div>
    <?php endif; ?>
</div>