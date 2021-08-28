<?php if( have_rows('banner') ):
while( have_rows('banner') ): the_row(); 

$title = get_sub_field('title');
$text = get_sub_field('text');
?>

<section class="inside-banner">
  <div class="container">
    <h1 class="title"><?=$title?></h1>
    <?=$text?>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>
