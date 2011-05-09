<?php
function ds_mrp_front_page() {
  return array(
    'label' => t('Front page: Two over Three over Five'),
    'regions' => array(
       'top-left'            => t('Top  Left'),
       'top-right'           => t('Top  Right'),
       'middle-left'         => t('Middle Left'),
       'middle-center'       => t('Middle Center'),
       'middle-right'        => t('Middle Right'),
       'bottom-left'         => t('Bottom Left'),
       'bottom-left-center'  => t('Bottom Left Center'),
       'bottom-center'       => t('Bottom Center'),
       'bottom-right-center' => t('Bottom Right Center'),
       'bottom-right-new'    => t('Bottom Right'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
?>
