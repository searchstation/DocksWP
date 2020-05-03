<?php
/**
 * The template for displaying all single posts and attachments
 */

//global $wp_query;
//$wp_query->set_404();
//status_header( 404 );
//get_template_part( 404 ); exit();


get_header(); ?>

<div class="grid-container mt30">
	<div class="grid-x grid-margin-x grid-margin-y">
		<div class="large-8 medium-7 small-12 cell cell" id="content">
			
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
