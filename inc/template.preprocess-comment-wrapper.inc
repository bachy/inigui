<?php

/**
 * @file template.preprocess-comment-wrapper.inc
 */

global $theme;

$classes = array();

# Add support for Skinr module classes http://drupal.org/project/skinr
if (function_exists('node_skinr_data') && !empty($vars['skinr'])) {
  $classes[] = $vars['skinr'];
}
 
# Class for content types: "forum-comments", "blog-comments", etc.
$vars['classes'] .= ' '. $vars['node']->type .'-comments';
