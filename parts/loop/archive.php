<div class="grid-container section-spacer" id="content-container">
  <div class="grid-x" id="sticky-anchor">

    <div class="large-8 cell" id="the_content">
      <div class="grid-x grid-margin-x align-middle">

       <?php

       if (have_posts()) : while (have_posts()) : the_post();
       get_template_part('/parts/loop/panel-blog');
       endwhile;
       wp_reset_postdata();
       endif;

        ?>
      </div>
    </div>

    <div class="large-3 cell large-offset-1 " data-sticky-container>
      <div class="sticky padding-top-2" data-sticky data-anchor="sticky-anchor" data-sticky-on="large">
        <?php get_sidebar(); ?>
      </div>
    </div>

  </div>
</div>
