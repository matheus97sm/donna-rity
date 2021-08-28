<?php
/**
 * Template Name: services inside
 *
 * @package WordPress
 * @subpackage donnaRity
 * @since donnaRity
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

<section class="services home-services">
  <div class="container">
    <div class="home-services-text">
      <h2 class="title">Services</h2>
    </div>

    <div class="services-items-wrapper">
      <?php
        $args = array(
          'post_parent' => 12,
          'post_type' => 'page',
          'orderby' => 'menu_order'
        );

        $child_query = new WP_Query( $args );
      ?>

      <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
      <a class="services-item" href="<?=the_permalink()?>">
        <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
        
        <div>
          <h3><?=the_title()?></h3>
        </div>
      </a>
      <?php endwhile; ?>
    </div>
</section>

<?php get_footer();