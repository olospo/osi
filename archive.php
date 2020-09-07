<?php /* Archive */
get_header(); ?>

<section class="hero single">
  <div class="background" style="background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url(' <?php bloginfo('template_directory'); ?>/img/news.png ') center center no-repeat; background-size: cover;">
    <div class="container">
      <div class="content eight columns">
      <h1><?php the_archive_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<section class="news">
  <div class="container">
    <div class="twelve columns">
      <div class="main_content">
        <div class="twelve columns">
          <?php if ( have_posts() ) : while (have_posts()) : the_post();  ?>
            <?php get_template_part('inc/article'); ?>
          <?php endwhile; ?>

        <?php numeric_posts_nav(); ?>
        </div>
        <?php else : ?>
        <!-- No posts found -->
        <?php endif; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();  ?>