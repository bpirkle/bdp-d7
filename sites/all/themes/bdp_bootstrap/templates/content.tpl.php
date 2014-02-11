<section<?php print $content_column_class; ?>>
  <a id="main-content"></a>
  
  <?php print render($title_prefix); ?>

  <?php if (!empty($title)): ?>
    <h1 class="page-header"><?php print $title; ?></h1>
  <?php endif; ?>

  <?php print render($title_suffix); ?>

  <?php print $messages; ?>
  <?php if (!empty($tabs)): ?>
    <ul class="nav nav-pills active"><?php print render($tabs); ?></ul>
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <?php print render($page['help']); ?>
  <?php endif; ?>

  <?php if (!empty($action_links)): ?>
    <ul class="action-links"><?php print render($action_links); ?></ul>
  <?php endif; ?>

  <?php if (!empty($page['content_tabs'])): ?>
    <div class="region region-content_tabs">
      <?php print render($page['content_tabs']); ?>
    </div>
  <?php endif; ?>

  <?php print render($page['content']); ?>
</section>