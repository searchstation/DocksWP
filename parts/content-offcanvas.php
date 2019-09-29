<?php
/**
 * The template part for displaying offcanvas content
 *
 */
?>

<div class="off-canvas position-right text-white text-center pt40" id="off-canvas" data-off-canvas>
	<?php docks_off_canvas_nav(); ?>
  <h3 class="mb0 mt30">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/phone.svg" width="25" alt="Phone icon" style="padding:0.4rem 0rem 0.4rem 0rem;margin:0rem 0.2rem 0rem 0.2rem;"/><?php the_field('phone', 'options'); ?>
	</h3>

</div>
