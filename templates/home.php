<?php /* Template Name: Home */
get_header();

while ( have_posts() ) : the_post(); ?>

<?php get_template_part('inc/hero'); ?>

<section class="what">
  <div class="container">
    <div class="six columns offset-by-three">
      <h2><?php the_field('what_title'); ?></h2>
      <?php the_field('what_content'); ?>
      <a href="<?php the_field('what_button_link'); ?>" class="button secondary"><?php the_field('what_button_text'); ?></a>
  </div> 
</section>

<section class="why">
  <div class="container">
    <div class="six columns offset-by-three">
      <h2><?php the_field('why_title'); ?></h2>
    </div>
    
    <?php if( have_rows('why_reasons') ): ?>
    <div class="row">
    <?php while( have_rows('why_reasons') ) : the_row();
      $icon = get_sub_field('reason_icon');
      $text = get_sub_field('reason_text'); 
    ?>
      <div class="icon four columns">
        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
        <p><?php echo $text; ?></p>
      </div>
    <?php endwhile; else : ?>
    </div> 
    <?php endif; ?>

    <div class="six columns offset-by-three">
      <a href="<?php the_field('why_button_link'); ?>" class="button primary"><?php the_field('why_button_text'); ?></a>
    </div>
  </div> 
</section>

<section class="who">
  <div class="container">
    <?php if( have_rows('who_content') ): ?>
      <?php while( have_rows('who_content') ): the_row(); ?>
        <?php if( get_row_layout() == 'who_title' ): ?>
          <h3><?php the_sub_field('title'); ?></h3>
        <?php elseif( get_row_layout() == 'who_text' ): ?>
          <?php the_sub_field('text_area'); ?>
        <?php elseif( get_row_layout() == 'who_logos' ): ?>
          <?php if( have_rows('logo') ): ?>
            <ul class="logos">
            <?php while( have_rows('logo') ): the_row(); ?>
            <?php $image = get_sub_field('logo_image'); ?>
              <li><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></li>
            <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
