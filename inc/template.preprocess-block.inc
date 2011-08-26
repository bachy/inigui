<?php 

// 

	$vars['attributes']['class']='block block-'. $vars['block']->module .' '. (isset($vars['skinr']) ? $vars['skinr'] : '');
	$vars['attributes']['id'] = 'block-'. $vars['block']->module .'-'. $vars['block']->delta;