<?php
/**
 * Template Name: contact
 *
 * @package WordPress
 * @subpackage donnaRity
 * @since donnaRity
 */
get_header(); ?>

<section class="contact">
  <div class="container">
    <div class="drop-message form-wrapper">
      <h2>
        <span>Free Estimate</span>
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#mail"></use>
        </svg>
      </h2>

      <?php echo do_shortcode('[contact-form-7 id="22" title="Free Estimate"]'); ?>
    </div>
    
    <?php if( have_rows('contact_info') ):
    while( have_rows('contact_info') ): the_row(); 

    $title = get_sub_field('title');
    $mail = get_sub_field('mail');
    $phone_number = get_sub_field('phone_number');
    $address = get_sub_field('address');
    $address_link = get_sub_field('address_link');
    $instagram = get_sub_field('instagram');
    $facebook = get_sub_field('facebook');
    ?>

    <div class="contact-info">
      <h2><?=$title?></h2>

      <div class="contact-info-itens">
        <a href="mailto:<?=$mail?>" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#mail"></use>
          </svg>

          <span><?=$mail?></span>
        </a>
        
        <a href="tel:<?=$phone_number?>" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#phone"></use>
          </svg>

          <span><?=$phone_number?></span>          
        </a>
        
        <a href="<?=$address_link?>" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#pin"></use>
          </svg>

          <span><?=$address?></span>          
        </a>

        <div class="social-media">
          <a href="<?=$instagram?>" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#instagram"></use>
            </svg>       
          </a>
          
          <a href="<?=$facebook?>" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#facebook"></use>
            </svg>       
          </a>
        </div>
      </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();