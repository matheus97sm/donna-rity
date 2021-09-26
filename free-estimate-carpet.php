<?php
/**
 * Template Name: free estimate carpet
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
        <span>Free estimate - Carpet</span>
      </h2>

      <?php echo do_shortcode('[contact-form-7 id="177" title="Free Estimate - Carpet"]'); ?>
    </div>
  </div>
</section>

<?php get_footer();