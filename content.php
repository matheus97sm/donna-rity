<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<? if (is_single()) { ?>

<section class="inside-banner">
  <div class="container">
    <div class="inside-banner">
      <h1><?=the_title()?></h1>
      <div>
				<?=the_field('post_resume')?>
      </div>
    </div>
  </div>
</section>

<section class="inside-parallax">
  <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
</section>

<div class="inside-content">
	<div class="container">
		<?=the_content()?>
	</div>
</div>

<? } else { ?>

<a class="blog-card" href="<?=the_permalink()?>">
	<div class="blog-card-img">
		<img src="<?=catch_that_image(2)?>" alt="<?=the_title()?>" />
	</div>

	<div class="blog-card-text">
		<h3><?=the_title()?></h3>
		<p><?=the_field('post_resume')?></p>
		<h4>read more</h4>
	</div>
</a>
    
<? } ?>