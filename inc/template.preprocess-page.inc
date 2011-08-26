<?php 

/**
 * @file template.preprocess-page.inc
 */

/**
 * Override or insert variables into page templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 * @param $hook
 *   The name of the theme function being called.
 */




# set variables for the logo and slogan (from Deco drupal 6.x theme)
$site_fields = array();
if ($vars['site_name']) {
  $site_fields[] = check_plain($vars['site_name']);
}
// if ($vars['site_slogan']) {
//   $site_fields[] = check_plain($vars['site_slogan']);
// }

$vars['site_title'] = '<h1>'. implode(' ', $site_fields) .'</h1>';



if (theme_get_setting('layout_enable_settings') == 'on')
	$vars['method'] = theme_get_setting('layout_method');


$vars['primary_local_tasks'] = menu_primary_local_tasks();
$vars['secondary_local_tasks'] = menu_secondary_local_tasks();
