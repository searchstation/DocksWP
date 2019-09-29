<div class="grid-container text-center mt50">
  <div class="grid-x">

	<div class="large-12 cell">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/google-reviews.svg" width="300">
		<p class="mt30">A few kind words from some of our happy customers.</p>
		<hr class="mw600" />

<div class="testimonial-slider">

<?php
$args = array(
	'post_type'              => array( 'testimonial' ),
	'nopaging'               => true,
	'posts_per_page'         => '10',
	'orderby'                => 'rand',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) :
	while ( $query->have_posts() ) :
		$query->the_post(); ?>
		<div class="relative">

      <div class="testimonial-text" itemprop="name">
      <?php echo wp_trim_words( get_field('testimonial_text' ), $num_words = 30, $more = '...' ); ?>
      <p><strong><span itemprop="name"><?php the_title(); ?></span></strong></p>
      <div class="star-rating">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/star.svg" width="30"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/star.svg" width="30"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/star.svg" width="30"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/star.svg" width="30"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/star.svg" width="30">
      </div><!-- end .star-rating -->
    </div><!-- end .testimonial-text -->
  </div><!-- end div -->

	<?php endwhile; endif; wp_reset_postdata(); ?>

</div><!-- end .testimonial-slider -->

</div>
</div>
</div>
