<?php /* Page */
get_header(); 

$parent_title = get_the_title($post->post_parent);
$post_data = get_post($post->post_parent);
$parent_slug = $post_data->post_name;

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
  <div class="container flex">
    <div class="content nine columns">
      <?php the_content(); ?>
    </div>
    <aside class="three columns">
      <div class="aside__menu <?php echo $parent_slug; ?>">
        <h3><?php echo $parent_title; ?></h3>
        <?php
          if ($post->post_parent)	{
          	$ancestors=get_post_ancestors($post->ID);
          	$root=count($ancestors)-1;
          	$parent = $ancestors[$root];
          } else {
          	$parent = $post->ID;
          } 
        ?>
        <ul>
          <?php wp_list_pages("post_type=page&sort_column=menu_order&title_li=&depth=1&child_of=".$parent); ?>
        </ul>
      </div>
    </aside>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>