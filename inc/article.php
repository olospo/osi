<article class="news_item one-third column">
  <a href="<?php the_permalink(); ?>">
  <div class="image" style="background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url(' <?php the_post_thumbnail_url( 'featured-img' ); ?> ') center center no-repeat; background-size: cover;">
    <div class="content">
      <h3><?php the_title(); ?></h3>
      <span class="date"><?php the_time('j F Y'); ?></span>
    </div>
  </div>
  </a>
  <div class="excerpt">
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="read-more">Read more</a>
  </div>
</article>