<article class="one-third column" style="background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url(' <?php the_field('report_illustration'); ?> ') bottom center no-repeat; background-size: cover;">
  <div class="content">
    <span class="week"><?php the_field('week_number'); ?> <span class="new">Latest</span></span>
    <h3><?php the_title(); ?></h3>
    <a href="<?php the_permalink(); ?>" class="button secondary">Find out more</a>
  </div>
</article>
