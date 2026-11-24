<?php
$title       = get_sub_field('title');
$image_id    = get_sub_field('image');
$layout      = get_sub_field('layout') ?: 'image-right';
$items       = get_sub_field('items');
$title_tag   = $title ? '<h2 class="news-events__title">' . esc_html($title) . '</h2>' : '';
$image_first = $layout === 'image-left';
$background  = $image_first ? 'blog-bg.jpg' : 'news-and-events-bg.jpg';
?>

<div class="news-events news-events--<?php echo esc_attr($image_first ? 'image-left' : 'image-right'); ?>">
  <img
    class="news-events__background"
    src="<?php echo esc_url(get_theme_file_uri('/assets/images/' . $background)); ?>"
    alt=""
    aria-hidden="true"
    loading="lazy"
    decoding="async"
  >

  <?php if ($image_first): ?>
    <div class="news-events__image">
      <?php if ($image_id): ?>
        <?php echo wp_get_attachment_image($image_id, 'large', false, [
          'class'    => 'news-events__image-element',
          'loading'  => 'lazy',
          'decoding' => 'async',
        ]); ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <div class="news-events__content">
    <?php echo $title_tag; ?>

    <?php if (!empty($items)): ?>
      <div class="news-events__items">
        <?php foreach ($items as $item): ?>
          <?php
          $item_title = $item['title'] ?? '';
          $item_meta  = $item['meta'] ?? '';
          $item_text  = $item['text'] ?? '';
          $item_link  = $item['link'] ?? null;
          ?>
          <article class="news-events__item">
            <?php if ($item_title): ?>
              <h3 class="news-events__item-title">
                <?php echo esc_html($item_title); ?>
                <?php if ($item_meta): ?>
                  <span class="news-events__item-meta"> - <?php echo esc_html($item_meta); ?></span>
                <?php endif; ?>
              </h3>
            <?php elseif ($item_meta): ?>
              <h3 class="news-events__item-title"><?php echo esc_html($item_meta); ?></h3>
            <?php endif; ?>

            <?php if ($item_text): ?>
              <div class="news-events__item-text rte"><?php echo wp_kses_post($item_text); ?></div>
            <?php endif; ?>

            <?php if (!empty($item_link['url'])): ?>
              <a class="btn btn-primary news-events__button"
                 href="<?php echo esc_url($item_link['url']); ?>"
                 target="<?php echo esc_attr($item_link['target'] ?: '_self'); ?>">
                <?php echo esc_html($item_link['title'] ?: __('Read More', 'projecttheme')); ?>
              </a>
            <?php endif; ?>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if (!$image_first): ?>
    <div class="news-events__image">
      <?php if ($image_id): ?>
        <?php echo wp_get_attachment_image($image_id, 'large', false, [
          'class'    => 'news-events__image-element',
          'loading'  => 'lazy',
          'decoding' => 'async',
        ]); ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div>
