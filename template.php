<?php

/**
 * @file
 * Contains theme override functions and preprocess functions for the MRP theme.
 */

/**
 * Changes generic menu rendering to be display as an ordered list
 * (not unordered).
 */
function mrp_menu_tree($variables) {
  return '<ol class="menu">' . $variables['tree'] . '</ol>';
}

/**
 * Simplifies textarea markup to remove non-native resizing and wrapper div.
 */
function mrp_textarea($variables) {
  $element = $variables['element'];
  element_set_attributes($element, array('id', 'name', 'cols', 'rows'));
  _form_set_class($element, array('form-textarea'));
  return '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
}
