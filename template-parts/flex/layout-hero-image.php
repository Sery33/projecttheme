<?php
/**
 * Hero Image
 * Fields: image (ID), title (text), subtitle (text)
 */
$image_id = get_sub_field('image');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$image_url = $image_id ? wp_get_attachment_image_url($image_id, 'full') : '';
?>
<div class="hero-image">
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
    <?php if ($subtitle): ?>
      <p class="hero-image__subtitle"><?php echo esc_html($subtitle); ?></p>
    <?php endif; ?>
  </div>
</div>
