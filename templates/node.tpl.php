<!-- start article.node -->
  <article id="node-<?php print $node->nid; ?>" class="node type-<?php print $node->type; ?><?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " unpublished"; } ?>">

    <?php if ($page == 0): ?>
    <a href="<?php print $node_url?>"><h1 class="nodetitle"><?php print $title?></h1></a>
    <?php endif; ?>
    
    <section class="content">
      <?php print $content?>
    </section>
    
    <?php if ($submitted): ?>
    <aside class="submitted">
    <?php print $submitted?>
    </aside>
    <?php endif; ?>

    <nav class="nav">
    <?php if ($links): ?><section class="postlinks"><?php print $links?></section><?php endif; ?>
    <?php if ($terms): ?><section class="taxonomy">Tags: <?php print $terms?></section><?php endif; ?>
    </nav>
  
  </article>
<!-- end article.node -->
