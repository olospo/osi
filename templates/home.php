<?php /* Template Name: Home */
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="cats">
  <div class="container">
    <div class="cat_study one-third column">
      <img src="<?php bloginfo('template_directory'); ?>/img/my_cats.png" alt="My-Cats" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="#" class="button primary">Find out more</a>
    </div>
    <div class="cat_study one-third column">
      <img src="<?php bloginfo('template_directory'); ?>/img/my_cats.png" alt="My-Cats" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="#" class="button primary">Find out more</a>
    </div>
    <div class="cat_study one-third column">
      <img src="<?php bloginfo('template_directory'); ?>/img/co_cat.png" alt="Co-Cat" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="#" class="button primary">Find out more</a>
    </div>
  </div>
</section>

<section class="what">
  <div class="container">
    <div class="eight columns offset-by-two">
      <h2>Online Support and Intervention for Child Anxiety</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="#" class="button secondary">Find out more</a>
  </div> 
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>