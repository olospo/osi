<?php /* Button Block Template */

// Load values and assign defaults.
$text = get_field('button_text');
$link = get_field('button_link');
$target = get_field('link_target');

?>

<?php if( have_rows('team_layout') ): ?>
  <div class="teams">
  <?php while( have_rows('team_layout') ): the_row(); ?>
    <?php if( get_row_layout() == 'team_header' ): ?>
      <h2><?php the_sub_field('team_title'); ?></h2>
    <?php elseif( get_row_layout() == 'team_member' ): 
      $image = get_sub_field('photo');
      $size = 'large-thumb';
      $link = get_sub_field('link');
    ?>

    <article class="one-third column">
      <?php if( $link ): ?>
      <a href="<?php echo $link; ?>" target="_blank">
      <?php endif; ?>
      
      <?php if( $image ) { ?><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="logo" /><?php } ?>
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