<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
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

				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
					<div class="mb30"></div>
			<?php endif; ?>
				<?php the_content(); ?>

			<?php endwhile; endif; ?>


		</div>
		<?php get_sidebar(); ?>
	</div>


</div>

<?php get_footer(); ?>
