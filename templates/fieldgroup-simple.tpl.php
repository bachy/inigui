<?php
// $Id: fieldgroup-simple.tpl.php,v 1.1.2.1 2009/02/28 23:56:17 yched Exp $

/**
 * @file fieldgroup-simple.tpl.php
 * Default theme implementation to display the a 'simple-styled' fieldgroup.
 *
 * Available variables:
 * - $group_name - The group name
 * - $group_name_css - The css-compatible group name.
 * - $label - The group label
 * - $description - The group description
 * - $content - The group content
 *
 * @see template_preprocess_fieldgroup_simple()
 */
?>
<?php if ($content) : ?>
<section class="fieldgroup <?php print $group_name_css; ?>">

  <?php if ($label): ?>
	<header>
		<h1><?php print $label; ?></h1>
    <?php if ($description): ?> <p class="description"><?php print $description; ?></p> <?php endif; ?>
	</header>
  <?php endif; ?>

  <div class="content"><?php print $content; ?></div>

</section>
<?php endif; ?>
