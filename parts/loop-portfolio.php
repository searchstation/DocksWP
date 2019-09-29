<div class="grid-container mt50">
  <div class="grid-x grid-margin-x">
		<div class="cell large-12 text-center mb20">
			<h2>Portfolio</h2>
      <?php if (is_archive('portfolio')) : ?>
      Browse our recent projects below.
      <?php else : ?>
			<p>A selection of our most recent projects, <a href="<?php echo site_url(); ?>/portfolio" title="">click here to view more projects</a>.</p>
      <?php endif; ?>
		</div><!-- end .columns -->



		<?php if (is_archive('portfolio')) {
      $post_to_show = -1;
      } else {
      $post_to_show = 6;
      }

		$args = array(
			'post_type'              => array( 'portfolio' ),
			'order'                  => 'ASC',
			'orderby'                => 'title',
      'posts_per_page'         => $post_to_show

		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post(); ?>
        <div class="large-4 medium-6 cell service-box-container mb30">
        <div class="service-box">
          <a href="<?php echo get_the_permalink(); ?>" title="<?php the_title();?>">
            <div class="panel-image" style="height:0;padding-bottom:60%;background-image:url('<?php echo get_the_post_thumbnail_url($query->ID,'thumbnail'); ?>');"></div>
          </a>
            <div class="content">
              <h4><a href="<?php echo get_the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h4>
              <p class="mb0">  <?php the_field('snippet'); ?></p>
            </div>
        </div>
        <a href="<?php echo get_the_permalink(); ?>" title="<?php the_title();?>" class="button expanded box-button">Find out more</a>
        </div>
		<?php	}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata(); ?>

</div>
</div>
