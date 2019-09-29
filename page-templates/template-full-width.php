<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>

	<div class="grid-container">

		<div class="inner-content grid-x grid-margin-x">

		    <main class="main small-12 medium-12 large-12 cell" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> 

<?php get_footer(); ?>
