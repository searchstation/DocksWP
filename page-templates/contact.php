<?php
/*
Template Name: Contact
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
		<hr />
			<div class="grid-x grid-margin-x">
				<div class="large-6 cell">
					<?php gravity_form(1, false, false, false, '', true, 12); ?>
				</div>
				<div class="large-6 cell">
					<h3>Phone</h3>
					<p><?php the_field('phone', 'options'); ?></p>
					<h3 class="mt20">Mobile</h3>
					<p><?php the_field('mobile', 'options'); ?></p>
					<h3>Email</h3>
					<p><?php the_field('email', 'options'); ?></p>
					<h3>Address</h3>
					<p><?php the_field('address', 'options'); ?></p>
				</div>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
