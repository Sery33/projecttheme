<?php
$title = get_sub_field('title');
$cards = get_sub_field('cards') ?: [];
?>

<div class="card-grid-image" data-node-id="5092:4083">
  <?php if ($title): ?>
    <h2 class="card-grid-image__title"><?php echo esc_html($title); ?></h2>
  <?php endif; ?>

  <?php if (!empty($cards)): ?>
    <div class="card-grid-image__grid">
      <?php foreach ($cards as $card):
        $image_id = $card['image'] ?? 0;
        $card_title = $card['title'] ?? '';
        $card_subtitle = $card['subtitle'] ?? '';
        $card_text = $card['text'] ?? '';
      ?>
        <article class="card-grid-image__card">
          <div class="card-grid-image__image">
            <?php if ($image_id): ?>
              <?php echo wp_get_attachment_image($image_id, 'large', false, [
                'class'    => 'card-grid-image__image-element',
                'loading'  => 'lazy',
                'decoding' => 'async',
              ]); ?>
            <?php endif; ?>
          </div>
          <div class="card-grid-image__body">
            <?php if ($card_title): ?>
              <h3 class="card-grid-image__card-title"><?php echo esc_html($card_title); ?></h3>
            <?php endif; ?>
            <?php if ($card_subtitle): ?>
              <p class="card-grid-image__subtitle"><?php echo esc_html($card_subtitle); ?></p>
            <?php endif; ?>
            <?php if ($card_text): ?>
              <div class="card-grid-image__text rte"><?php echo wp_kses_post($card_text); ?></div>
            <?php endif; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</div>
