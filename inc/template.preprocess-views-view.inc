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

# add support for skinr classes
if(isset($vars['skinr'])){
	$vars['classes_array'][] = $vars['skinr'];
	$vars['classes'] .= ' '. $vars['skinr'];
}
