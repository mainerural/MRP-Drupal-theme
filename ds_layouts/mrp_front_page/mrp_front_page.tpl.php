<?php
/**
 * @file
 * Display Suite 1 Front page: Two over Three over Five.
 */
?>
<div class="<?php print $classes;?> clearfix">

  <?php 
    $top_left =  $variables['top-left'];
    $top_right = $variables['top-right']; 
    $middle_left         =  $variables['middle-left'];        
    $middle_center       =  $variables['middle-center'];       
    $middle_right        =  $variables['middle-right'];        
?>  

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($header): ?>
    <div class="ds-header<?php print $header_classes; ?>">
      <?php print $header; ?>
    </div>
  <?php endif; ?>



  <?php if ($top_left || $top_right): ?>
    <div class="mrp_front_page_top">
  <?php endif; ?>

  <?php if ($top_left): ?>
    <div class="ds-top-left"<?php print $top_left_classes; ?>">
      <?php print $top_left; ?>
    </div>
  <?php endif; ?>

  <?php if ($top_right): ?>
    <div class="ds-top-right"<?php print $top_right_classes; ?>">
      <?php print $top_right; ?>
    </div>
  <?php endif; ?>

  <?php if ($top_left || $top_right): ?>
    </div>
  <?php endif; ?>

  <?php if ($middle_left || $middle_left || $middle_right): ?>
    <div class="mrp_front_page_middle">
  <?php endif; ?>

  <?php if ($middle_left): ?>
    <div class="ds-middle-left"<?php print $middle_left_classes; ?>">
      <?php print $middle_left; ?>
    </div>
  <?php endif; ?>

  <?php if ($middle_center): ?>
    <div class="ds-middle-center"<?php print $middle_center_classes; ?>">
      <?php print $middle_center; ?>
    </div>
  <?php endif; ?>

  <?php if ($middle_right): ?>
    <div class="ds-middle-right"<?php print $middle_right_classes; ?>">
      <?php print $middle_right; ?>
    </div>
  <?php endif; ?>

  <?php if ($middle_left || $middle_left || $middle_right): ?>
    </div>
  <?php endif; ?>

 <?php if ($footer): ?>
    <div class="group-footer<?php print $footer_classes; ?>">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>
</div>


