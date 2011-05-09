<?php

/**
 * @file
 * Display Suite 1 column stacked on two columns template.
 */
?>
<div class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($header): ?>
    <div class="ds-header<?php print $header_classes; ?>">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($top): ?>
    <div class="ds-top<?php print $top_classes; ?>">
      <?php print $top; ?>
    </div>
  <?php endif; ?>

  <?php if ($left || $right): ?>
    <div class="mrp_1col_2col_stacked">
  <?php endif; ?>

  <?php if ($left): ?>
    <div class="ds-left<?php print $left_classes; ?>">
      <?php print $left; ?>
    </div>
  <?php endif; ?>

  <?php if ($right): ?>
    <div class="ds-right<?php print $right_classes; ?>">
      <?php print $right; ?>
    </div>
  <?php endif; ?>
  
  <?php if ($left || $right): ?>
    </div>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="group-footer<?php print $footer_classes; ?>">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>
</div>
