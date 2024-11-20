<?php
$imageUrl = $attributes['imageUrl'] ?? '';
$title = $attributes['title'] ?? '';
$subtitle = $attributes['subtitle'] ?? '';
$description = $attributes['description'] ?? '';

?>
<div class="custom-block">
  <?php if ($imageUrl): ?>
    <div class="custom-block__image">
      <img src="<?php echo esc_url($imageUrl); ?>" alt="Block Image">
    </div>
  <?php endif; ?>

  <div class="custom-block__content">
    <?php if ($title): ?>
      <h2><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
    <?php if ($subtitle): ?>
      <h4><?php echo esc_html($subtitle); ?></h4>
    <?php endif; ?>
    <?php if ($description): ?>
      <p><?php echo esc_html($description); ?></p>
    <?php endif; ?>
  </div>
</div>
