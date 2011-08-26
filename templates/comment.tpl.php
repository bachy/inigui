<section class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status; print ' '. $zebra; ?>">
	
	<header>
		<hgroup>
			<h1 class="comment-title"><?php print $title ?></h1>
	  	<?php if ($comment->new) : ?> <h2 class="new"><?php print drupal_ucfirst($new) ?></h2> <?php endif; ?>		
		</hgroup>
		
		<?php if ($picture) {print $picture;}?>


	</header>
	
	<article>
    <?php if ($submitted): ?>
    	<div class="submitted"><?php print $submitted; ?></div>
    <?php endif; ?>
    
    <?php print $content; ?>

    <?php if ($signature) print $signature; ?>
	</article>
	
  
   <nav>
   	<?php if ($links): ?> <nav class="commentlinks"><?php print $links ?></nav> <?php endif; ?>
   </nav>
	  
  
</section>