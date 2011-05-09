<?php
function ds_mrp_1col_2col_stacked() {
  return array(
    'label' => t('One Column Stacked on Two Columns'),
    'regions' => array(
      'header' => t('Header'),
      'top' => t('Top'),
      'left' => t('Left'),
      'right' => t('Right'),
      'footer' => t('Footer')
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
?>
