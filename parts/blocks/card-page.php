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
$id = 'card-page-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
} ?>

<?php if (have_rows('card_page')) : ?>
  <div class="grid-x grid-margin-x grid-margin-y">
  <?php while ( have_rows('card_page') ) : the_row();
  $post = get_sub_field('page');
  $text = get_sub_field('text');
  $thumnail = get_the_post_thumbnail($post, 'medium', array('class' => 'radius-large'));
  ?>
    <a href="<?php echo get_the_permalink($post); ?>" class="small-6 medium-4 large-6 cell card service" title="<?php echo get_the_title($post); ?>">
      <?php if ($thumnail) : ?>
      <div class="image-swap-container">
        <?php echo $thumnail; ?>
      </div>
      <?php endif; ?>
      <div class="card-inner">
        <h5><?php echo get_the_title($post); ?></h5>
        <?php if ($text) {
          echo $text;
        } ?>
      </div>
      <p class="read-more">More <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-right.svg" width="60" alt="" /></p>
    </a>
  <?php endwhile; ?>
</div>
<?php endif; ?>
