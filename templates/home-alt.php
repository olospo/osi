<?php /* Template Name: Home Alt */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="cats">
  <div class="container">
    
    <?php if( have_rows('study') ): ?>
      <?php while( have_rows('study') ): the_row(); 
        // Fields
        $cat = get_sub_field('cat_image');
        $studyLogo = get_sub_field('study_logo');
        $studyText = get_sub_field('study_text');
        $studyButtonText = get_sub_field('study_button_text');
        $studyButtonLink = get_sub_field('study_button_link');
      ?>
      <div class="cat_study one-third column">
        <img src="<?php echo esc_url($cat['url']); ?>" alt="<?php echo esc_attr($cat['alt']); ?>" class="cat" />
        <img src="<?php echo esc_url($studyLogo['url']); ?>" alt="<?php echo esc_attr($studyLogo['alt']); ?>" class="logo" />
        <?php echo $studyText; ?>
        <a href="<?php echo $studyButtonLink; ?>" class="button primary"><?php echo $studyButtonText; ?></a>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>

<?php 
  // About/What Section 
  $title = get_field('title');
  $content = get_field('content');
  $buttonText = get_field('button_text');
  $buttonLink = get_field('button_link');
?>
<section class="what">
  <div class="container">
    <div class="ten columns offset-by-one">
      <h2><?php echo $title; ?></h2>
      <?php echo $content; ?>
      <a href="<?php echo $buttonLink; ?>" class="button secondary"><?php echo $buttonText; ?></a>
    </div>
  </div> 
</section>

<?php 
  // Logo/Funded Section 
  $logo = get_sub_field('logo_image');
?>

<section class="funded">
  <div class="container">
    <div class="twelve columns">
      <div class="funding_logos">
        <?php if( have_rows('logo') ): ?>
          <ul>
          <?php while( have_rows('logo') ): the_row(); 
              $logo = get_sub_field('logo_image');
              ?>
              <li>
                  <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="logo" />
              </li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>