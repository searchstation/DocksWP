<?php
/*
Template Name: Testimonials
*/

get_header(); ?>

<div class="grid-container mt30">
	<div class="grid-x grid-margin-x grid-margin-y">
		<div class="large-8 medium-7 small-12 cell cell" id="content">
			<div class="breadcrumbs text-small">
				<?php $parents = get_post_ancestors($post);
				echo '<a href="'.site_url().'">Home</a>';
				foreach ($parents as $parent) {
					echo ' > <a href="'.get_the_permalink($parent).'">'.get_the_title($parent).'</a>';
				}
				echo ' > '; the_title(); ?>
			</div>
			<h1><?php the_title(); ?></h1>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; endif; ?>

			<?php // WP_Query arguments
				$args = array(
					'post_type'              => array( 'testimonial' ),
					'post_status'            => array( 'publish' ),
					'order'                  => 'DESC',
					'orderby'                => 'date',
				);

				// The Query
				$query = new WP_Query( $args );

				// The Loop
				if ( $query->have_posts() ) :

					while ( $query->have_posts() ) :
						$query->the_post(); ?>

						<div class="testimonialPanel">
							<p><i>"<?php the_field('testimonial_text'); ?>"</i></p>
							<p class="mb0"><strong><?php the_title(); ?></strong></p>
						</div>

					<?php endwhile; endif; wp_reset_postdata(); ?>


		</div>
		<div class="large-4 medium-5 small-12 cell cell">
			<ul class="menu vertical sidebar" id="menu">
				<?php docks_menu(3); ?>
			</ul>
			<div data-sticky-container>
			<div class="sticky" data-sticky data-top-anchor="menu:bottom" data-btm-anchor="content:bottom">
			<div class="blue-background text-white service-box">
				<h4>Get in touch</h4>
				<p class="mb10">Contact us today to discuss your fire protection and security needs.</p>
				<a href="<?php echo site_url(); ?>/contact" class="button secondary">Contact us</a>
				<h3 class="mb0">01452 712021</h3>
				</div>
			</div>
			</div>
		</div>
	</div>


</div>

<?php get_footer(); ?>
