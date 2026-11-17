<?php
$left = get_sub_field('left');
$right_title_1 = get_sub_field('right_title_1');
$right_1 = get_sub_field('right_1');
$right_title_2 = get_sub_field('right_title_2');
$right_2 = get_sub_field('right_2');
?>
<div class="text-2col-colored">
  <div class="text-2col-colored__left">
    <?php echo wp_kses_post($left); ?>
  </div>
  <div class="text-2col-colored__right">
    <div class="text-2col-colored__column">
      <?php if ($right_title_1): ?><h2><?php echo esc_html($right_title_1); ?></h2><?php endif; ?>
      <?php echo wp_kses_post($right_1); ?>
    </div>
    <div class="text-2col-colored__column">
      <?php if ($right_title_2): ?><h2><?php echo esc_html($right_title_2); ?></h2><?php endif; ?>
      <?php echo wp_kses_post($right_2); ?>
    </div>
  </div>
</div>
