<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

<footer class="footer text-white" role="contentinfo">
  <div class="grid-container">
    <div class="inner-footer grid-x grid-margin-x grid-margin-y text-center large-text-left">
      <div class="small-12 medium-4 large-4 cell">
        <h4 class="mb20">Footer Column 1</h4>
        <p>Some text</p>
      </div>
      <div class="small-12 medium-4 large-4 cell">
        <h4 class="mb20">Footer Column 2</h4>
          <p>Some text</p>
      </div>
      <div class="small-12 medium-4 large-4 cell">
        <h4 class="mb20">Footer Column 3</h4>
          <p>Some text</p>
      </div>


      <div class="small-12 medium-12 large-12 cell text-center text-small mt40">
        <p class="source-org copyright">@<?php echo date('Y'); ?> Copyright All Rights Reserved.<br>
Registered Address: <?php echo str_replace("<br />", " ", get_field('address', 'options')); ?></p>

<p>Built with <img width="12" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/heart.svg"> by <a href="https://searchstation.co.uk/?utm_source=<?php echo site_url(); ?>&amp;utm_medium=website-credit&amp;utm_campaign=referral" title="Search Station">Search Station</a></p>
			</div>
    </div>
  </div>
</footer>

</div>
</div>

<?php wp_footer(); ?>
<div class="cookie"></div>
</body>
</html> <!-- end page -->
