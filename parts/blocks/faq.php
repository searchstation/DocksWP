<?php

/**
 * FAQ Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'faq-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
} ?>

<?php
$faqs = get_field('faq');
?>

<ul class="accordion margin-top list" data-accordion data-allow-all-closed="true">
  <?php foreach( $faqs as $post ):
    setup_postdata($post); ?>
  <li class="accordion-item" data-accordion-item >
    <a class="accordion-title"><?php echo get_the_title($post); ?></a>
    <div class="accordion-content" data-tab-content>
      <?php echo the_content(); ?>
    </div>
  </li>
<?php endforeach;  wp_reset_postdata(); ?>
</ul>
