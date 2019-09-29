<?php
/**
 * The sidebar containing the main widget area
 */
 ?>

 <div class="large-4 medium-5 small-12 cell cell">
   <ul class="menu vertical sidebar" id="menu">
     <?php docks_menu(3); ?>
   </ul>
   <div data-sticky-container>
   <div class="sticky" data-sticky data-top-anchor="menu:bottom" data-btm-anchor="content:bottom">
   <?php get_template_part('/parts/content-sidebar'); ?>
   </div>
   </div>
 </div>
