<?php

$h1_override = null;
$page_intro = null;
$thumbnail = null;
$marginBottom = "margin-bottom-3";

if (is_archive()) {
  $term = get_queried_object();
  $page_title = '<p class="text-small margin-bottom-0">'.get_the_title(55).'</p><h1 class="margin-bottom-0">'.$term->name.'</h1>';
} else if (is_home()) {
  $page_title = '<h1 class="margin-bottom-0">'.get_the_title(55).'</h1>';
} else {
  global $post;
  $h1_override = get_field('h1_override');
  $page_intro = get_field('page_intro');
  $thumbnail = get_the_post_thumbnail($post, 'medium', array('class' => 'radius-large page-thumb'));
  if ($thumbnail) {
    $marginBottom = "margin-bottom-6";
  }
  if ($h1_override == true) {
    $page_title = '<h2 class="margin-bottom-0">'.get_the_title().'</h2>';
  } else {
    $page_title = '<h1 class="margin-bottom-0">'.get_the_title().'</h1>';
  }
}

?>

<div class="grid-container <?php echo $marginBottom; ?>">
  <div class="grid-x grid-margin-x align-middle">
    <div class="large-auto cell padding-vertical-2 text-center large-text-left">
      <?php echo $page_title; ?>
      <?php if ($page_intro) : ?>
      <?php echo $page_intro; ?>
      <?php endif; ?>
    </div>

    <?php if ($thumbnail) : ?>
    <div class="large-6 cell large-offset-1 text-center">
      <?php echo $thumbnail; ?>
    </div>
    <?php endif; ?>

  </div>

</div>
