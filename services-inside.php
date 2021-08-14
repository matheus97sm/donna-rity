<?php
/**
 * Template Name: services inside
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

<section class="inside-parallax">
  <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
</section>

<section class="inside-content">
  <div class="container">
    <?=the_content()?>
  </div>
</section>

<?php get_footer();