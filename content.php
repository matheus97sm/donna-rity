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

<section class="inside-parallax">
  <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
</section>

<div class="inside-content">
	<div class="container">
		<?=the_content()?>
	</div>
</div>

<? } else { ?>
	<?php if( have_rows('banner') ):
while( have_rows('banner') ): the_row(); 

$title = get_sub_field('title');
$text = get_sub_field('text');
?>

<a class="blog-card" href="<?=the_permalink()?>">
	<div class="blog-card-img">
		<img src="<?=catch_that_image(2)?>" alt="<?=the_title()?>" />
	</div>

	<div class="blog-card-text">
		<div>
			<span class="date">
				<svg width="32" height="32" viewBox="0 0 32 32">
					<use xlink:href="#clock"></use>
				</svg>
				<?=the_date('y-M-d')?>
			</span>
		</div>
		<h3><?=$title?></h3>
		<p><?=$text?></p>
	</div>
</a>

<?php endwhile; ?>
<?php endif; ?>
    
<? } ?>