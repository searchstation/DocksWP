<?php
/**
 * The sidebar containing the main widget area
 */
 ?>

 <aside class="large-4 small-12 cell">

   <?php if (is_singular('post') || is_home() || is_archive()) : ?>

    <p class="margin-left-1"><b>Categories</b></p>
      <ul class="menu vertical sidebar-menu margin-bottom-2">
        <li><a href="<?php echo get_the_permalink(39); ?>">All Articles</a></li>
        <?php wp_list_categories(array('hide_title_if_empty' => true, 'title_li'=> '')); ?>
      </ul>

   <?php else :

   $anchors = get_field('anchors');
   if ($anchors) : ?>
     <p class="margin-left-1"><b>On this page:</b></p>
         <ul class="menu vertical sidebar-menu" data-smooth-scroll>
         <?php foreach ($anchors as $a) : ?>
           <li><a href="#<?php echo $a['anchor_id']; ?>"><?php echo $a['menu_item_name']; ?></a></li>
         <?php endforeach; ?>
         </ul>
  <?php endif; ?>

  <?php endif; ?>

  <a href="<?php echo get_the_permalink(37); ?>" class="button warning expanded">Contact us</a>

  <p class="h3 text-center body-font-family"><?php the_field('phone', 'options'); ?></p>

 </aside>
