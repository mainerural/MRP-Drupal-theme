<?php
function ds_mrp_front_page() {
  return array(
    'label' => t('Front page: Two over Three'),
    'regions' => array(
       'top-left'            => t('Feature Left'),
       'top-right'           => t('Feature Right'),
       'middle-left'         => t('Program Left'),
       'middle-center'       => t('Program Center'),
       'middle-right'        => t('Program Right'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
?>
