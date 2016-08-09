<?php $n = node_load($node->nid); ?>
<div class="page-about">
  <div class="about-image">
    <img src="<?php echo file_create_url($content['field_photo']['#items'][0]['uri']); ?>" alt="" />
  </div>
  <div class="about-desc">
    <div class="about-desc-div">
      <h2><?php echo strip_tags(render($content['field_name'])); ?></h2>
      <div class="about-body">
        <p>
          <?php echo strip_tags(render($content['body'])); ?>
        </p>
      </div>
      <div class="about-skills">
        <ul>
          <li><span></span>Photoshop</li>
          <li><span></span>Illustrator</li>
          <li><span></span>InDesign</li>
          <li><span></span>Première</li>
          <li><span></span>HTML</li>
          <li><span></span>CSS</li>
          <li><span></span>JS</li>
          <li><span></span>PHP</li>
          <li><span></span>jQuery</li>
          <li><span></span>Laravel</li>
          <li><span></span>Drupal</li>
          <li><span></span>Wordpress</li>
        </ul>
      </div>
    </div>
  </div>
</div>
