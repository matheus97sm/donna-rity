<?php
/**
 * Template Name: free estimate
 *
 * @package WordPress
 * @subpackage donnaRity
 * @since donnaRity
 */
get_header(); ?>

<section class="free-estimate">
  <div class="container">
    <div class="form-wrapper">
      <h2>
        <span>Free estimate</span>
      </h2>

      <?php echo do_shortcode('[contact-form-7 id="22" title="Free Estimate"]'); ?>
    </div>
  </div>
</section>

<?php get_footer();