<?php
/**
 * Template Name: contact
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

<section class="contact">
  <div class="container">
    <div class="drop-message">
      <h2>Drop a message</h2>

      <?php echo do_shortcode('[contact-form-7 id="22" title="Free Estimate"]'); ?>
    </div>

    
    <?php if( have_rows('contact_info') ):
    while( have_rows('contact_info') ): the_row(); 

    $title = get_sub_field('title');
    $mail = get_sub_field('mail');
    $phone_number = get_sub_field('phone_number');
    $address = get_sub_field('address');
    $address_link = get_sub_field('address_link');
    ?>

    <div class="contact-info">
      <h2><?=$title?></h2>

      <div class="contact-info-itens">
        <a href="mailto:<?=$mail?>" target="_blank">
          <span><?=$mail?></span>
          
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#mail"></use>
          </svg>
        </a>
        
        <a href="tel:<?=$phone_number?>" target="_blank">
          <span><?=$phone_number?></span>
          
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#tel"></use>
          </svg>
        </a>
        
        <a href="<?=$address_link?>" target="_blank">
          <span><?=$address?></span>
          
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#pin"></use>
          </svg>
        </a>
      </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();