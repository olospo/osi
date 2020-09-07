<?php /* Search */
get_header(); ?>

<section class="post no_hero">
  <div class="container">
    <div class="ten columns offset-by-one">
      <div class="content">
        <h1><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="ten columns offset-by-one">
      <div class="content">
        <?php if ( have_posts() ) : // Show search results ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article class="search_item standard twelve columns">
          <div class="item_content">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="content">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
      </div>
      <?php numeric_posts_nav(); ?>
      
      <?php else : // No search results found ?>
      <article class="search_item">
        <h2>No Results Found</h1>
        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords and/or search criteria.</p>
      </article>
      <?php endif; wp_reset_query(); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>