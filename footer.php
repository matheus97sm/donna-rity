<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<?php 
wp_reset_query();

if (!is_front_page()) { 
  include 'free-estimate.php';  
} ?>

<footer class="footer">
  <div class="container">
    <p>Copyright © <a href="<?=site_url()?>">www.ritycleaning.com</a> 2021. All rights reserved.</p>
  </div>
</footer>

<div style="display: none;">
  <?php include 'svg.php'; ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js"></script>

<?php wp_footer(); ?>

</body>
</html>
