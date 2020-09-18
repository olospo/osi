<?php /* Template Name: About */
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
  <div class="container">
    <div class="content ten columns offset-by-one">
      <?php the_content(); ?>
      <?php if( have_rows('team_layout') ): ?>
        <div class="teams">
        <?php while( have_rows('team_layout') ): the_row(); ?>
          <?php if( get_row_layout() == 'team_header' ): ?>
            <h3><?php the_sub_field('team_title'); ?></h3>
          <?php elseif( get_row_layout() == 'team_member' ): 
            $image = get_sub_field('photo');
            $size = 'large-thumb';
            $link = get_sub_field('link');
          ?>

          <article class="one-third column">
            <?php if( $link ): ?>
            <a href="<?php echo $link; ?>" target="_blank">
            <?php endif; ?>
            <?php if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
            <div class="content">
              <strong><?php the_sub_field('name'); ?></strong>
              <span class="job_title"><?php the_sub_field('job_title'); ?></span>
            </div>
            <?php if( $link ): ?>
            </a>
            <?php endif; ?>
          </article>
  
          <?php endif; ?>
        <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
  
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
