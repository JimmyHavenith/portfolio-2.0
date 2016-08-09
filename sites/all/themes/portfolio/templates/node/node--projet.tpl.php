<?php $n = node_load($node->nid); ?>
<div class="page-project">
  <div class="project-infos">
    <div class="project-techno">
      <h2><img src="<?php global $base_url; echo $base_url; ?>/sites/all/themes/portfolio/img/computer.png" alt="Logo de Jimmy Havenith" />Technologies utilisées</h2>
      <span><?php echo strip_tags(render($content['field_project_techno'])); ?></span>
    </div>
    <div class="project-client">
      <h2><img src="<?php global $base_url; echo $base_url; ?>/sites/all/themes/portfolio/img/client.png" alt="Logo de Jimmy Havenith" />Client</h2>
      <span><?php echo strip_tags(render($content['field_project_client'])); ?></span>
    </div>
    <div class="project-date">
      <h2><img src="<?php global $base_url; echo $base_url; ?>/sites/all/themes/portfolio/img/date.png" alt="Logo de Jimmy Havenith" />Date du projet</h2>
      <span><?php echo strip_tags(render($content['field_project_date'])); ?></span>
    </div>
  </div>
  <div class="project-images">
    <img src="<?php echo file_create_url($content['field_project_images']['#items'][0]['uri']); ?>" alt="Site internet à Liège" />
  </div>
  <div class="project-description">
    <div class="project-desc-div">
      <h2><?php echo strip_tags(render($content['field_project_title'])); ?></h2>
      <p>
        <?php echo strip_tags(render($content['body'])); ?>
      </p>
    </div>
    <div class="project-link-extern">
      <?php $link = field_get_items('node', $node, 'field_project_link'); ?>
      <?php if($link): ?>
        <a href="<?php echo strip_tags(render($content['field_project_link'])); ?>">Voir le projet</a>
      <?php endif; ?>
    </div>
  </div>
</div>
