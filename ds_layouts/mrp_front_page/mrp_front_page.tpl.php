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
                                                     
    $bottom_left         =  $variables['bottom-left'];         
    $bottom_left_center  =  $variables['bottom-left-center'];  
    $bottom_center       =  $variables['bottom-center'];          
    $bottom_right_center =  $variables['bottom-right-center']; 
    $bottom_right        =  $variables['bottom-right-new'];       
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


  <?php if ($bottom_left || $bottom_left_center || $bottom_center || $bottom_right_center || $bottom_right ): ?>
    <div class="mrp_front_page_bottom">
  <?php endif; ?>

  <?php if ($bottom_left): ?>
    <div class="ds-bottom-left"<?php print $bottom_left_classes; ?>">
      <?php print $bottom_left; ?>
    </div>
  <?php endif; ?>

  <?php if ($bottom_left_center): ?>
    <div class="ds-bottom-left-center"<?php print $bottom_left_center_classes; ?>">
      <?php print $bottom_left_center; ?>
    </div>
  <?php endif; ?>

  <?php if ($bottom_center): ?>
    <div class="ds-bottom-center"<?php print $bottom_center_classes; ?>">
      <?php print $bottom_center; ?>
    </div>
  <?php endif; ?>

  <?php if ($bottom_right_center): ?>
    <div class="ds-bottom-right-center"<?php print $bottom_right_center_classes; ?>">
      <?php print $bottom_right_center; ?>
    </div>
  <?php endif; ?>

  <?php if ($bottom_right): ?>
    <div class="ds-bottom-right"<?php print $bottom_right_classes; ?>">
      <?php print $bottom_right; ?>
    </div>
  <?php endif; ?>

  <?php if ($bottom_left || $bottom_left_center || $bottom_center || $bottom_right_center || $bottom_right ): ?>
    </div>
  <?php endif; ?>

 <?php if ($footer): ?>
    <div class="group-footer<?php print $footer_classes; ?>">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>
</div>


