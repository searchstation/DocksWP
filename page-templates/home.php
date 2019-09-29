<?php // Template Name: Home Page


get_header(); ?>

<div class="grid-container medium-no-padding">
  <div class="grid-x">
    <div class="medium-7 cell relative medium-order-2 panel-image">
      <div class="hero-fade"></div>
      <div class="show-for-large"><div class="mt50"></div></div>
      <div class="padded-content relative text-white">
        <h1>Staggered Content Heading</h1>
        <p>Sub heading.</p>
        <a href="" class="button secondary" title="">Button Secondary</a>
      </div>
      <div class="show-for-large"><div class="mb50"></div></div>
    </div>
    <div class="medium-5 cell hide-for-medium">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/" alt=""/>
    </div>
    <div class="medium-5 cell medium-order-1 panel-image show-for-medium" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/');background-position: right top; background-size: 620px!important;">
    </div>
    </div>

</div>

<div class="show-for-large mt30"></div>

<div class="grid-container">
  <div class="grid-x grid-margin-x align-middle">
    <div class="large-7 cell large-order-2">
      <div class="padded-content">
      <h2>Heading</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <h3>Heading</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    </div>
    <div class="large-5 cell large-order-1">
      <div class="padded-content grey-background text-white">
        <h2 class="mb30">Feature Heading</h2>
        <p class="mb30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Call us today or <a href="<?php echo site_url(); ?>/contact" title=""><u>click here to contact us</u></a>.</p>
        <h2 class="mb0"><?php the_field('phone', 'options'); ?></h2>
      </div>
    </div>

  </div>
</div>

<?php get_template_part('/parts/loop-service'); ?>

<?php get_template_part('/parts/content-testimonial-slider'); ?>

<?php get_template_part('/parts/loop-portfolio'); ?>


<?php get_footer(); ?>
