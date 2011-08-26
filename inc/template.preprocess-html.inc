<?php 

if (module_exists('rdf')) {
  $vars['doctype'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML+RDFa 1.1//EN">' . "\n";
  $vars['rdf_profile'] = ' profile="' . $vars['grddl_profile'] . '"';
}
else {
  $vars['doctype'] = '<!DOCTYPE html>' . "\n";
  $vars['rdf_profile'] = '';
}


# Add mobile meta tags to $head ADD this to your subtheme
$heads = array();

$heads['HandheldFriendly'] = array(
  '#tag' => 'meta',
  '#attributes' => array(
    'name' => 'HandheldFriendly', 
    'content' => 'true',
  ),
);



#  Mobile Viewport Fix
# j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
# device-width : Occupy full width of the screen in its current orientation
# initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
# maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width

$heads['viewport'] = array(
  '#tag' => 'meta',
  '#attributes' => array(
    'name' => 'viewport', 
    'content' => 'width=device-width,initial-scale=1',
  ),
);



# Add these icons links to your sub theme
# or Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references

// $head[] = '<link rel="apple-touch-icon" sizes="72x72" href="'. base_path() . path_to_theme() .'/touch-icon-ipad.png'.'"/>' . "\n";
// $head[] = '<link rel="apple-touch-icon" sizes="114x114" href="'. base_path() . path_to_theme() .'/touch-icon-iphone4.png'.'"/>' . "\n";

$heads['icon'] = array(
  '#tag' => 'link',
  '#attributes' => array(
    'href' => base_path() . path_to_theme() .'/icon.png', 
    'rel' => 'shortcut icon',
    'type' => 'image/png',
  ),
);

$heads['apple-touch-icon'] = array(
  '#tag' => 'link',
  '#attributes' => array(
    'href' => base_path() . path_to_theme() .'/apple-touch-icon.png', 
    'rel' => 'apple-touch-icon',
  ),
);

foreach ($heads as $type=>$head)
	drupal_add_html_head($head, $type);



// $vars['head'] = implode('', $head);


# add body classes
if(isset($vars['node'])){
	
	# from taxonomy
	foreach ($vars['node']->taxonomy as $tid => $term) {
		$vars['classes_array'][] = 'term-vid-'. $term->vid .' term-tid-'. $tid;
	}
	
	# from menu
	$mlid = db_result(db_query("SELECT mlid FROM {menu_links} WHERE link_path = '%s'", 'node/'. $vars['node']->nid));
  // Now get the menu related information.
  if (!empty($mlid) || !empty($node->menu['mlid']) || !empty($node->menu['plid'])) {
    $menu_link = menu_link_load($mlid);
		// krumo($menu_link);
		$vars['classes_array'][] = ' mlid-'. $menu_link['mlid'] .' plid-'. $menu_link['plid'];
	}
}


# theme layout settings

if(isset($vars['page']['sidebar_first']) && isset($vars['page']['sidebar_second'])){
	$layout = 'two-sidebars';	
}else if(isset($vars['page']['sidebar_first']) || isset($vars['page']['sidebar_second'])){
	$layout = isset($vars['page']['sidebar_first']) ? 'sidebar-first' : 'sidebar-second';
}else{
	$layout = 'no-sidebar';
}
$vars['classes_array'][] = $layout;

if (theme_get_setting('layout_enable_settings') == 'on') {
  $method = theme_get_setting('layout_method');	
	$vars['method'] = $method;
	$vars['classes_array'][] .= ' layout-method-'.$method;
	
}
