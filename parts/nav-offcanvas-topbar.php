<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 */
?>

<div class="grid-container fluid nav-wrapper mw1300">
	<div class="grid-container">
		<div class="grid-x  align-middle">
			<div class="large-4 medium-6 small-6 cell">
				<ul class="dropdown menu align-middle" data-dropdown-menu style="z-index:1000;">
					<li><a href="<?php echo home_url(); ?>" class="alignleft" style="padding-left:0px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/docks-logo.svg" width="200" /></a></li>

					</ul>
				</div>
				<div class="large-8 medium-6 small-6 cell flex-container align-right align-middle">
					<ul class="dropdown menu show-for-large" data-dropdown-menu>
						<?php docks_top_nav(); ?>
					</ul>
					<span class="h6 mb0 text-medium show-for-medium text-white" style="margin-right:10px;margin-left:0.7rem;"><?php the_field('phone', 'options'); ?></span>
						<a href="<?php echo site_url(); ?>/contact" class="button mb0 show-for-large">Contact</a>
					<div>
						<button class="hamburger hamburger--slider hide-for-large" type="button" style="margin-top:8px;" data-toggle="off-canvas">
  						<span class="hamburger-box">
    					<span class="hamburger-inner"></span>
  						</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
