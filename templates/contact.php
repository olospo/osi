<?php /* Template Name: Contact */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php if ( has_post_thumbnail() ) { ?>
<section class="hero single">
  <div class="background" style="background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center no-repeat; background-size: cover;">
    <div class="container">
      <div class="content eight columns">
      <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="post">
<?php } else { ?>
<section class="post no_hero">
<?php } ?>
  <div class="container flex">
    <div class="content ten columns offset-by-one">
      <?php the_content(); ?>
      <?php echo do_shortcode('[ninja_form id=1]'); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>