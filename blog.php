<?php
/**
 * Template Name: blog
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

<section class="blog">
  <div class="container">
    <? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '3', 'cat' => '1' ) );  ?>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();