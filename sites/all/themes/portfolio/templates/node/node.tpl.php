<div id="node-<?php echo $node->nid; ?>" class="<?php echo $classes; ?> clearfix"<?php echo $attributes; ?>>
  <?php if ((!$page && !empty($title)) || !empty($title_prefix) || !empty($title_suffix) || $display_submitted): ?>
    <?php echo render($title_prefix); ?>
    <?php if (!$page && !empty($title)): ?>
    <h2<?php echo $title_attributes; ?>><a href="<?php echo $node_url; ?>"><?php echo $title; ?></a></h2>
    <?php endif; ?>
    <?php echo render($title_suffix); ?>
  <?php endif; ?>
  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    //raspberry_encode_email
    $render = render($content);
    $render = preg_replace(
    	'/([a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+)/',
    	'&#105;&#110;&#102;&#111;&#064;&#114;&#097;&#115;&#112;&#098;&#101;&#114;&#114;&#121;&#100;&#101;&#115;&#105;&#103;&#110;&#046;&#098;&#101;',
    	$render);
    echo $render;
  ?>
</div>
