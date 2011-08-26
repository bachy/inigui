<?php

/**
 * @file template.php
 * 
 */

/**
 * Implementation of hook_theme
 */
function inigui_theme() {
	$path = drupal_get_path('theme', 'inigui');
	# Register theme function for the system_settings_form.
  return array(
    'system_settings_form' => array(
      'arguments' => array('form' => NULL, 'key' => 'inigui'),
    ),
  );

  # Include the theme settings.
  include($path .'/inc/template.theme-settings.inc');
}

/**
 * Implementation of hook_preprocess()
 *
 * This function checks to see if a hook has a preprocess file associated with
 * it, and if so, loads it.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered.
 */
function inigui_preprocess(&$vars, $hook) {
	global $theme, $theme_info, $user, $language;
	
  $vars['is_admin'] = in_array('admin', $user->roles);
  $vars['logged_in'] = ($user->uid > 0) ? TRUE : FALSE;
  $vars['theme_path'] = base_path() . path_to_theme() .'/';

	// $vars['classes_array'][] = $hook.' '.$hook.'-'.$vars['zebra'];

  # Include preprocess functions if and when required.
	$path = drupal_get_path('theme', 'inigui');
	$file = $path .'/inc/template.preprocess-'. str_replace('_', '-', $hook) .'.inc';
  if (is_file($file)) {
    include($file);
  }
}

$path = drupal_get_path('theme', 'inigui');

# Include custom functions.
include_once($path .'/inc/template.custom-functions.inc');

# Include theme overrides.
include_once($path .'/inc/template.theme-overrides.inc');

# Include some jQuery.
//  include_once(drupal_get_path('theme', 'inigui') .'/inc/template.theme-js.inc');
