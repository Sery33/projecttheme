<?php
/**
 * Hero Image small
 * Fields: image (ID), title (text)
 */
$image_id = get_sub_field('image');
$title = get_sub_field('title');
$image_url = $image_id ? wp_get_attachment_image_url($image_id, 'full') : '';
?>
<div class="hero-image hero-image--small">
  <?php if ($image_url): ?>
    <img
      class="hero-image__background"
      src="<?php echo esc_url($image_url); ?>"
      alt=""
      aria-hidden="true"
      loading="eager"
      decoding="async">
  <?php endif; ?>
  <div class="hero-image__scrim" aria-hidden="true"></div>
  <div class="hero-image__content">
    <?php if ($title): ?>
      <h1 class="hero-image__title"><?php echo esc_html($title); ?></h1>
    <?php endif; ?>
  </div>
</div>
