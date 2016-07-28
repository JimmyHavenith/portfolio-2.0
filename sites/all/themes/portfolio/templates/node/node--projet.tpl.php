<?php $n = node_load($node->nid); ?>
<h2>
  <?php echo strip_tags(render($content['field_project_title'])); ?>
</h2>
<p>
  <?php echo strip_tags(render($content['body'])); ?>
</p>
<p>
  <?php echo strip_tags(render($content['field_project_techno'])); ?>
</p>
<img src="<?php echo file_create_url($content['field_project_images']['#items'][0]['uri']); ?>" alt="Site internet à Liège" />
