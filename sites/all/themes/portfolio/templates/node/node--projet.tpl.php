<?php $n = node_load($node->nid); ?>
<div class="page-project">
  <div class="project-infos">
    <div class="project-techno">
      <h2><img src="<?php global $base_url; echo $base_url; ?>/sites/all/themes/portfolio/img/computer.png" alt="icône pour les technologies utilisées pour le projet" />Technologies</h2>
      <span><?php echo strip_tags(render($content['field_project_techno'])); ?></span>
    </div>
    <div class="project-client">
      <h2><img src="<?php global $base_url; echo $base_url; ?>/sites/all/themes/portfolio/img/client.png" alt="icône pour le client" />Client</h2>
      <span><?php echo strip_tags(render($content['field_project_client'])); ?></span>
    </div>
    <div class="project-date">
      <h2><img src="<?php global $base_url; echo $base_url; ?>/sites/all/themes/portfolio/img/date.png" alt="icône pour la date de réalisation du projet" />Date du projet</h2>
      <span><?php echo strip_tags(render($content['field_project_date'])); ?></span>
    </div>
  </div>
  <div class="project-images">
    <?php foreach($content['field_project_images']['#items'] as $image) :?>
       <img src="<?php echo file_create_url($image['uri']); ?>" alt="Projet réalisé par Jimmy Havenith intitulé '<?php echo strip_tags(render($content['field_project_title'])); ?>'" />
    <?php endforeach; ?>
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
        <a title="Lien externe vers le projet '<?php echo strip_tags(render($content['field_project_title'])); ?>'" href="<?php echo strip_tags(render($content['field_project_link'])); ?>">Voir le projet</a>
      <?php endif; ?>
    </div>
  </div>
</div>
