<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<header id="header">
  <hgroup class="logo">
  <?php
	if ($site_title) {
  	print $site_title;
	}
  ?>
  </hgroup>		

	<?php if ($page['headerblock_left'] || $page['headerblock_middle'] || $page['headerblock_right']): ?>
		<div id="header-blocks">
			<?php print render($page['headerblock_left']); ?>
			<?php print render($page['headerblock_middle']); ?>
			<?php print render($page['headerblock_right']); ?>
    </div>
	<?php endif; ?>
	
	<?php if ($breadcrumb): ?>
    <section id="breadcrumb"><?php print $breadcrumb; ?></section>
  <?php endif; ?>
  
	
</header> 
<!-- /header -->		 		



<div id="main">
      

    <?php if ($method == 0 || $method == 2): ?>
      <?php print render($page['sidebar_first']); ?>	       	
    <?php endif; ?>	 					

    <?php if ($method == 2): ?>
      <?php print render($page['sidebar_second']) ?>
    <?php endif; ?>

		<?php if($page['sidebar_first'] || $page['sidebar_second']): ?>
		<section id="center">	
		<?php endif; ?>

				<?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
          <div id="tasks">
            <?php if ($primary_local_tasks): ?>
              <ul class="tabs primary"><?php print render($primary_local_tasks); ?></ul>
            <?php endif; ?>
            <?php if ($secondary_local_tasks): ?>
              <ul class="tabs secondary"><?php print render($secondary_local_tasks); ?></ul>
            <?php endif; ?>
            <?php if ($action_links = render($action_links)): ?>
              <ul class="action-links"><?php print $action_links; ?></ul>
            <?php endif; ?>
          </div>
        <?php endif; ?>

				<?php if ($show_messages && $messages): print $messages; endif; ?>


				<?php print render($page['help']); ?>

				<?php print render($page['content_top']); ?>

				<section id="content">
					<?php if($title): ?><h1 class="page-title"><?php print $title ?></h1><?php endif; ?>
					<?php print render($page['content']); ?>
				</section>

				<?php print render($page['content_bottom']); ?>
				

		<?php if($page['sidebar_first'] || $page['sidebar_second']): ?>
		</section>
		<?php endif; ?>
		    <!-- /center -->					
         
         
    <?php if ($method == 1): ?>
      <?php print render($page['sidebar_first']); ?>
    <?php endif; ?>	 					
         
    <?php if ($method == 0 || $method == 1): ?>
      <?php print render($page['sidebar_second']) ?>
    <?php endif; ?>
          
</div><!-- /main -->	
    		 			
		
<footer id="footer">
		
		<?php print render($page['footer_top']); ?>

		<?php if ($page['footer_left'] || $page['footer_middle_left'] || $page['footer_middle_right'] || $page['footer_right']): ?> 	        
      <div class="footer-block">					
				
				<?php print render($page['footer_left']); ?>
				<?php print render($page['footer_middle-left']); ?>
				<?php print render($page['footer_midle-right']); ?>
				<?php print render($page['footer_right']); ?>

      </div>
		<?php endif; ?>

		<?php print render($page['footer_bottom']); ?> 		
</footer> 
<!-- /footer -->	

