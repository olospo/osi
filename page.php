<?php /* Page */
get_header(); 

$parent_title = get_the_title($post->post_parent);
$post_data = get_post($post->post_parent);
$parent_slug = $post_data->post_name;

while ( have_posts() ) : the_post(); ?>

<section class="hero single">
  <div class="background" style="border-bottom: 20px solid #342854; background: #493972">
    <div class="container">
      <div class="content ten columns">
      <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="post">
  <div class="container flex">
    <div class="content seven columns offset-by-one">
      <?php the_content(); ?>
    </div>
    <aside class="three columns">
      
      <?php if (is_tree(73)) { // Co-Cat ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/co-cat.png" alt="Co-CAT" class="aside_title">
      <?php } elseif (is_tree(69)) { // iCATS ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/icats.png" alt="iCATs" class="aside_title">
      <?php } elseif (is_tree(71)) { // MY-CATS ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/my-cats.png" alt="MY-CATS" class="aside_title">
      <?php } elseif (is_tree(59)) { // OSI / About ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/osi.png" alt="OSI" class="aside_title">
      <?php } ?>

      <div class="aside_menu <?php echo $parent_slug; ?>">

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
          <?php wp_list_pages("post_type=page&sort_column=menu_order&title_li=&depth=2&child_of=".$parent); ?>
        </ul>
      </div>
    </aside>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>