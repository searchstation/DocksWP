<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

 //global $wp_query;
 //$wp_query->set_404();
 //status_header( 404 );
 //get_template_part( 404 ); exit();

get_header(); ?>

	<div class="content grid-container mt30">
		<div class="grid-x grid-margin-x">
      <main class="main inner-content small-12 medium-8 large-8 cell" role="main">
        <div class="breadcrumbs text-small">
          <?php $parents = get_post_ancestors($post);
          echo '<a href="'.site_url().'">Home</a>';
          foreach ($parents as $parent) {
            echo ' > <a href="'.get_the_permalink($parent).'">'.get_the_title($parent).'</a>';
          }
          echo ' > News'; ?>
        </div>
        <h1><?php the_archive_title();?></h1>
        <?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
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
