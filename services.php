﻿<?php
/**
 * Template Name: services
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<?php if( have_rows('banner') ):
while( have_rows('banner') ): the_row(); 

$title = get_sub_field('title');
$text = get_sub_field('text');
?>

<section class="inside-banner">
  <div class="container">
    <div class="inside-banner">
      <h1><?=$title?></h1>
      <div>
        <?=$text?>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<section class="services">
  <div class="container">
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
          <p><?=custom_excerpt2(160)?></p>
        </div>
      </a>
      <?php endwhile; ?>
    </div>

    <a 
      href="<?=$alternate_button_link?>" 
      class="cta-whit-yellow" 
    ><?=$alternate_button_name?></a>
  </div>
</section>

<?php get_footer();