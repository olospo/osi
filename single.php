<?php /* Single Post */
get_header();

while ( have_posts() ) : the_post(); ?>

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
  <div class="container">
    <div class="content ten columns offset-by-one">
      <?php the_content(); ?>
      <?php $posttags = get_the_tags(); if ($posttags) { ?>
      <h4>Tags:</h4>
      <ul class="tags">
        <?php foreach($posttags as $tag) { ?>
          <li><a href="<?php echo get_tag_link( $tag->term_id ); ?>"><?php echo $tag->name . ' '; ?></a></li>
        <?php } ?>
      </ul>
      <?php } ?>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>