<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>

	<div class="content mt100">

		<div class="inner-content grid-x grid-margin-x grid-padding-x text-center">

			<main class="main small-12 medium-12 large-12 cell" role="main">

				<article class="content-not-found">

					<header class="article-header">
						<h1><?php _e( 'Error 404 - Page Not Found', 'dockswp' ); ?></h1>
					</header> <!-- end article header -->

					<section class="entry-content">
						<p><?php _e( 'The page you were looking for was not found.', 'docks' ); ?></p>
					</section> <!-- end article section -->



				</article> <!-- end article -->

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
