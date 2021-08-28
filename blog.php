<?php
/**
 * Template Name: blog
 *
 * @package WordPress
 * @subpackage donnaRity
 * @since donnaRity
 */
get_header(); ?>

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