<?php
/**
 * Template Name: services inside
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="inside-parallax">
  <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
</section>

<section class="inside-content">
  <div class="container">
    <?=the_content()?>
  </div>
</section>

<?php get_footer();