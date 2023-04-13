<?php if (is_archive() || is_home()) {
  $class = 'small-12 medium-6 large-6';
} else {
  $class = 'small-12 medium-6 large-4';
} ?>

<a href="<?php echo get_the_permalink(); ?>" class="<?php echo $class; ?> cell card blog build-in-scale-up-fade-in delay-200">

  <div class="card-inner">
    <h5><?php echo get_the_title(); ?></h5>
  </div>
  <p class="read-more">More <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-right-light.svg" width="60" alt="" /></p>
</a>
