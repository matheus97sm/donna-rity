<?php
/**
 * Template Name: home
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
$button_name = get_sub_field('button_name');
$button_link = get_sub_field('button_link')['url'];
?>

<section class="banner">
  <div class="container">
    <div class="banner-text">
      <h1><?=$title?></h1>
      <p><?=$text?></p>

      <a href="<?=$button_link?>" class="cta cta-yellow"><?=$button_name?></a>
    </div>

    <img 
      class="banner-img"
      src="<?=get_template_directory_URI()?>/img/src/banner.png" 
      alt="Donna Rity Cleaning"
    />
  </div>
 
  <img 
    class="banner-logo" 
    src="<?=get_template_directory_URI()?>/img/src/logo-green.svg" 
    alt="Donna Rity Cleaning" 
  />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('google_review') ):
while( have_rows('google_review') ): the_row(); 

$title = get_sub_field('title');
$text = get_sub_field('text');
$button_name = get_sub_field('button_name');
$button_link = get_sub_field('button_link')['url'];
?>

<section class="google">
  <div class="container">
    <div class="google-img">
      <a href="<?=$button_link?>" target="_blank">
        <img 
          src="<?=get_template_directory_URI()?>/img/src/google-review.png"
          alt="See Donna Rity Cleaning in Google Review" 
        />
      </a>
    </div>

    <div class="google-text">
      <h2 class="title"><?=$title?></h2>
      <p><?=$text?></p>

      <a 
        href="<?=$button_link?>" 
        class="cta cta-yellow" 
        target="_blank"
      ><?=$button_name?></a>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('about_us') ):
while( have_rows('about_us') ): the_row(); 

$title = get_sub_field('title');
$text = get_sub_field('text');
$button_name = get_sub_field('button_name');
$button_link = get_sub_field('button_link')['url'];
$alternate_button_name = get_sub_field('alternate_button_name');
$alternate_button_link = get_sub_field('alternate_button_link')['url'];
?>

<section class="home-about">
  <div class="container">
    <div class="home-about-container">
      <h2 class="title"><?=$title?></h2>

      <div class="home-about-text">
        <?=$text?>
      </div>

      <div class="home-about-buttons">
        <a 
          href="<?=$button_link?>" 
          class="cta cta-green" 
        ><?=$button_name?></a>
        
        <a 
          href="<?=$alternate_button_link?>" 
          class="cta cta-white-green" 
        ><?=$alternate_button_name?></a>
      </div>
    </div>
  </div>

  <img class="home-about-logo" src="<?=get_template_directory_URI()?>/img/src/logo-yellow.svg" alt="Donna Rity Cleaning" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('parallax') ):
while( have_rows('parallax') ): the_row(); 

$image_1 = get_sub_field('image_1');
$image_2 = get_sub_field('image_2');
$image_3 = get_sub_field('image_3');
$image_4 = get_sub_field('image_4');
$image_5 = get_sub_field('image_5');
?>

<section class="home-parallax">
  <?php if ($image_1 != '') { ?>
    <img src="<?=$image_1?>" alt="Parallax Donna Rity" />
  <?php } ?>
  <?php if ($image_2 != '') { ?>
    <img src="<?=$image_2?>" alt="Parallax Donna Rity" />
  <?php } ?>
  <?php if ($image_3 != '') { ?>
    <img src="<?=$image_3?>" alt="Parallax Donna Rity" />
  <?php } ?>
  <?php if ($image_4 != '') { ?>
    <img src="<?=$image_4?>" alt="Parallax Donna Rity" />
  <?php } ?>
  <?php if ($image_5 != '') { ?>
    <img src="<?=$image_5?>" alt="Parallax Donna Rity" />
  <?php } ?>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('services') ):
while( have_rows('services') ): the_row(); 

$title = get_sub_field('title');
$text = get_sub_field('text');
?>

<section class="services home-services">
  <div class="container">
    <div class="home-services-text">
      <h2 class="title"><?=$title?></h2>
      <p><?=$text?></p>
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
          <p><?=custom_excerpt2(160)?></p>
        </div>
      </a>
      <?php endwhile; ?>
    </div>

    <a 
      href="<?=site_url()?>/services" 
      class="cta cta-white-yellow" 
    >see more</a>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php include 'free-estimate-component.php'; ?>

<section class="home-blog">
  <div class="container">
    <h2 class="title">blog</h2>

    <div class="home-blog-card-wrapper">
      <? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '3', 'cat' => '1' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <a class="home-blog-card" href="<?=the_permalink()?>">
        <img src="<?=catch_that_image(2)?>" alt="<?=the_title()?>" />

        <div>
          <h3><?=the_title()?></h3>

          <p><?=the_field('post_resume')?></p>

          <button class="cta cta-white-green">
            read more
          </button>
        </div>
      </a>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <a 
      href="<?=site_url()?>/blog" 
      class="cta cta-yellow" 
    >more posts</a>
  </div>
</section>

<?php get_footer();