<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

<div class="content grid-container mt30">

	<div class=" grid-x grid-margin-x ">

		    <main class="main inner-content small-12 medium-8 large-8 cell" role="main">
					<div class="breadcrumbs text-small">
						<?php $parents = get_post_ancestors($post);
						echo '<a href="'.site_url().'">Home</a>';
						foreach ($parents as $parent) {
							echo ' > <a href="'.get_the_permalink($parent).'">'.get_the_title($parent).'</a>';
						}
						echo ' > News'; ?>
					</div>
					<h1>News</h1>

					<?php if (have_posts()) : ?>

            <div class="grid-x grid-margin-x">
            <?php while (have_posts()) : the_post(); ?>
					     <?php get_template_part( 'parts/loop', 'archive-grid' ); ?>
				     <?php endwhile; ?>
           </div>
					<?php docks_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

		    </main> <!-- end #main -->

		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
