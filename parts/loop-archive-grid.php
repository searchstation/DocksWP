<?php
/**
 * The template part for displaying a grid of posts
 *
 */

// Adjust the amount of rows in the grid
?>

  <div class="small-6 medium-4 large-4 cell panel">
    <div class="service-box">
        <a href="<?php echo get_the_permalink(); ?>" title="<?php the_title();?>">
          <div class="panel-image" style="height:0;padding-bottom:60%;background-image:url('<?php echo get_the_post_thumbnail_url($query->ID,'thumbnail'); ?>');"></div>
        </a>
          <div class="content">
            <h4><a href="<?php echo get_the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h4>
            <?php get_template_part( 'parts/content', 'byline' ); ?>
            <?php the_excerpt(); ?>
          </div>
      </div>
  </div>
