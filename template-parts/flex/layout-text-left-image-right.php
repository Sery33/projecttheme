<?php
$headline = get_sub_field('headline');
$subtitle = get_sub_field('subtitle');
$text     = get_sub_field('text');
$image_id = get_sub_field('image');
?>
<div class="image-text-layout image-text-layout--text-left" data-node-id="5092:4024">
  <div class="image-text-layout__content">
    <?php if ($headline): ?><h2><?php echo esc_html($headline); ?></h2><?php endif; ?>
    <?php if ($subtitle): ?><p class="image-text-layout__subtitle"><?php echo esc_html($subtitle); ?></p><?php endif; ?>
    <?php if ($text): ?><div class="rte"><?php echo wp_kses_post($text); ?></div><?php endif; ?>
  </div>
  <div class="image-text-layout__image">
    <?php if ($image_id): ?>
      <?php echo wp_get_attachment_image($image_id, 'large', false, ['class' => 'img-fluid', 'alt' => '']); ?>
    <?php endif; ?>
  </div>
</div>