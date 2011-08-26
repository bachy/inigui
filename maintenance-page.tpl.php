<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="<?php print $language->language ?>" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php print $language->language ?>" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php print $language->language ?>" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php print $language->language ?>" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php print $language->language ?>" class="no-js"> <!--<![endif]-->


  <head>  
	
	  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
	       Remove this if you use the .htaccess -->
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
    <title>
      <?php print $head_title; ?>
    </title> 

    <?php print $head; ?>  

		<meta charset="utf-8">
		
		
		<!--  Mobile Viewport Fix
	        j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	  device-width : Occupy full width of the screen in its current orientation
	  initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	  maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	  -->
	  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	  

	  <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
	  <link rel="shortcut icon" href="<?php print $base_path . path_to_theme() ?>/favicon.ico">
	  <link rel="apple-touch-icon" href="<?php print $base_path . path_to_theme() ?>/apple-touch-icon.png">

		
		<?php print $styles; ?>
    

	  <!-- For the less-enabled mobile browsers like Opera Mini -->
	  <link rel="stylesheet" media="handheld" href="<?php print $base_path . path_to_theme() ?>/css/handheld.css?v=1">


	  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	  <script src="<?php print $base_path . path_to_theme() ?>/js/modernizr-1.6.min.js"></script>    
  </head>

	<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

		<body class="<?php print $body_classes; ?>">
    
    <?php if ($header): print '<div id="header-region-wrapper"><div id="header-region">'.$header.'</div></div>'; endif; ?>
    
    <div id="container">		 		
      
      <header id="header">
        <div class="region-content">
        <?php
				if ($logo || $site_title) {
        	print '<h1><a href="'. check_url($front_page) .'" title="'. $site_title .'">';
        	if ($logo) {
          	print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo" title="Home" />';
        	}
        	print ($logo ? '' : $site_title_html) .'</a></h1>';
      	}
        ?>
        </div>		

				<?php if ($headerblock_left || $headerblock_middle || $headerblock_right): ?>
					<div id="header-blocks">
	          <?php if ($headerblock_left): ?>
	            <div id="headerblock-left" class="headerblock-block">
	              <?php print $headerblock_left ?>
	            </div>
	          <?php endif; ?>

	          <?php if ($headerblock_middle): ?>
	            <div id="headerblock-middle" class="headerblock-block">
	              <?php print $headerblock_middle?>
	            </div>
	          <?php endif; ?>

	          <?php if ($headerblock_right): ?>
	            <div id="headerblock-right" class="headerblock-block">
	              <?php print $headerblock_right ?>
	            </div>
	          <?php endif; ?>
	        </div>
				<?php endif; ?>
				
      </header> 
      <!-- /header -->		 		


       <main id="main">
          
         <section id="center">	

           <?php if ($tabs) { ?><div class="tabs"><?php print $tabs ?></div><?php } ?>
           <?php if ($show_messages && $messages): print $messages; endif; ?>
           <?php if ($help): print $help; endif; ?>
           
						<?php if ($content_top): ?>
            <section id="content-top">				
             <?php print $content_bottom; ?>
            </section>	
						<?php endif; ?>
						
						<section id="content">
             <?php if ($title) { ?><h1 class="pagetitle"><?php print $title ?></h1><?php } ?>
             <?php print $content; ?>
						</section>

						<?php if ($content_bottom): ?>
            <section id="content-bottom">				
             <?php print $content_bottom; ?>
            </section>	
						<?php endif; ?>

         </section>
         <!-- /center -->					
              
              
         <?php if ($left): ?>	        
         <section id="sidebar-left" class="sidebar">
           <?php print $left ?>	       	
         </section> 
         <!-- /sidebar-left -->	      	
         <?php endif; ?>	 					
              
         <?php if ($right): ?> 	        
         <section id="sidebar-right" class="sidebar">	          
           <?php if ($search_box): ?><div class="block block-theme" id="searchbox"><?php print $search_box ?></div><?php endif; ?>
           <?php print $right ?>	        
         </section> 
         <!-- /sidebar-right -->	      	
         <?php endif; ?>
              
       </div><!-- /main -->	
        		 			
  	 		
      <footer id="footer">
      
         		<?php if ($footer_top): ?> 	        
                <div id="footer-top-wrapper">
                  <div id="footer-top">	          
                    <?php print $footer_top ?>	        
                  </div>
                </div>     	
            <?php endif; ?>	 	
            	
						<?php if ($footer_left || $footer_middle_left || $footer_middle_right || $footer_right): ?> 	        
	            <div class="footer-block">					
              
	              <?php if ($footer_left): ?> 	        
	                <div id="footer-left" class="footer-block">	          
	                  <?php print $footer_left ?>	        
	                </div>
	              <?php endif; ?>	 	
              
	              <?php if ($footer_middle_left): ?> 	        
	                <div id="footer-middle-left" class="footer-block">	          
	                  <?php print $footer_middle_left ?>	        
	                </div>
	              <?php endif; ?>
              
	              <?php if ($footer_middle_right): ?> 	        
	                <div id="footer-middle-right" class="footer-block">	          
	                  <?php print $footer_middle_right ?>	        
	                </div>
	              <?php endif; ?>
              
	              <?php if ($footer_right): ?> 	        
	                <div id="footer-right" class="footer-block">	          
	                  <?php print $footer_right ?>	        
	                </div>
	              <?php endif; ?>
              </div>
						<?php endif; ?>
						
						<?php if($footer_message): ?>
            <div id="footer-message">
            	<p><?php print $footer_message ?></p>
            </div>
            <?php endif; ?>
      </footer> 
      <!-- /footer -->	
    
    </div> 
    <!-- /container -->	
		
	  <!-- Javascript at the bottom for fast page loading -->

    <?php print $scripts; ?>


	  <!-- yui profiler and profileviewer - remove for production -->
	  <script src="<?php print $base_path . path_to_theme() ?>/js/profiling/yahoo-profiling.min.js?v=1"></script>
	  <script src="<?php print $base_path . path_to_theme() ?>/js/profiling/config.js?v=1"></script>
	  <!-- end profiling code -->


	  <!--[if lt IE 7 ]>
	    <script src="<?php print $base_path . path_to_theme() ?>/js/libs/dd_belatedpng.js"></script>
	    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
	  <![endif]-->


    <?php print $closure ?>
  </body>
</html>
