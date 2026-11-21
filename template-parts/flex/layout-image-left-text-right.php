<?php
/**
 * Bild links – Text rechts
 * Felder: image (ID), headline (text), text (wysiwyg)
 */
$img_id   = get_sub_field('image');
$headline = get_sub_field('headline');
$subtitle = get_sub_field('subtitle');
$body     = get_sub_field('text');
?>
<div class="image-text-layout image-text-layout--image-left" data-node-id="5092:4020">
  <div class="image-text-layout__image">
    <?php
    if ($img_id) {
      echo wp_get_attachment_image($img_id, 'large', false, [
        'class'    => 'img-fluid',
        'loading'  => 'lazy',
        'decoding' => 'async',
        'alt'      => '',
      ]);
    }
    ?>
  </div>
  <div class="image-text-layout__content">
    <?php if ($headline): ?><h2><?php echo esc_html($headline); ?></h2><?php endif; ?>
    <?php if ($subtitle): ?><p class="image-text-layout__subtitle"><?php echo esc_html($subtitle); ?></p><?php endif; ?>
    <?php if ($body): ?><div class="rte"><?php echo wp_kses_post($body); ?></div><?php endif; ?>
  </div>
</div>
