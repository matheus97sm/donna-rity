<?php
/**
 * Template Name: about
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<?php if( have_rows('history') ):
while( have_rows('history') ): the_row(); 

$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
?>

<section class="about about-history">
  <div class="container">
    <div class="about-history-img">
      <img src="<?=$image?>" alt="History Donna Rity" />
    </div>

    <div class="about-history-text">
      <h2><?=$title?></h2>

      <div>
        <?=$text?>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('mission') ):
while( have_rows('mission') ): the_row(); 

$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
?>

<section class="about about-mission">
  <div class="container">
    <div class="about-mission-text">
      <h2><?=$title?></h2>

      <div>
        <?=$text?>
      </div>
    </div>

    <div class="about-mission-img">
      <img src="<?=$image?>" alt="Mission Donna Rity" />
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();