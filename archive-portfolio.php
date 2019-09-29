<?php get_header(); ?>

<div class="grid-container mt30" style="margin-bottom:-50px;">
	<div class="grid-x grid-margin-x">
		<div class="large-6 cell">
			<div class="breadcrumbs text-small">
				<?php
				echo '<a href="'.site_url().'">Home</a>';
				echo ' > Portfolio'; ?>
			</div>
		</div>
	</div>
</div>

<?php get_template_part('/parts/loop-portfolio'); ?>

<?php get_footer(); ?>
