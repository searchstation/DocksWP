<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 */
?>

<div class="grid-container fluid bg-primary padding-vertical-1">
		<div class="grid-x align-middle">
			<div class="large-4 medium-6 small-6 cell">
				<a href="<?php echo home_url(); ?>" >
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/docks-logo.svg" width="200" />
				</a>
				</div>
				<div class="large-8 medium-6 small-6 cell flex-container align-right align-middle">
					<ul class="dropdown menu show-for-large" data-dropdown-menu>
						<?php docks_top_nav(); ?>
					</ul>
					<div>
						<button class="hamburger hamburger--slider hide-for-large" type="button" data-toggle="off-canvas">
  						<span class="hamburger-box">
    					<span class="hamburger-inner"></span>
  						</span>
						</button>
					</div>
				</div>
			</div>
	</div>
