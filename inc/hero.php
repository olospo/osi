<?php // Hero
  $title = get_field('title');
  $image = get_field('background_image');
  $buttonText = get_field('button_text');
  $buttonLink = get_field('button_link');
?>

<section class="hero">
  <div class="background" style="background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url(' <?php echo $image['url']; ?> ') center center no-repeat; background-size: cover;">
    <div class="container">
      <div class="content eight columns">
      <h1><?php echo $title; ?></h1>
      <?php if ( $buttonText ): ?>
        <a href="<?php echo $buttonLink; ?>" class="button primary"><?php echo $buttonText; ?></a> 
      <?php endif; ?>
      </div>
    </div>
  </div>
</section>
