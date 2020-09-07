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

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>