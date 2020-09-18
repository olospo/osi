<?php /* Template Name: Contact */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="hero single">
  <div class="background" style="border-bottom: 30px solid #342854; background: #493972">
    <div class="container">
      <div class="content eight columns">
      <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<section class="post">
  <div class="container flex">
    <div class="content ten columns offset-by-one">
      <?php the_content(); ?>
      <?php echo do_shortcode('[ninja_form id=1]'); ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>