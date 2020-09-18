<?php /* Template Name: Home */
get_header();

while ( have_posts() ) : the_post(); ?>




<section class="cats">
  <div class="container">
    <div class="cat_study one-third column">
      <img src="<?php bloginfo('template_directory'); ?>/img/icats.png" alt="My-Cats" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="<?php echo get_site_url(); ?>/icats" class="button primary">Find out more</a>
    </div>
    <div class="cat_study one-third column">
      <img src="<?php bloginfo('template_directory'); ?>/img/my-cats.png" alt="My-Cats" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="<?php echo get_site_url(); ?>/my-cats" class="button primary">Find out more</a>
    </div>
    <div class="cat_study one-third column">
      <img src="<?php bloginfo('template_directory'); ?>/img/co-cat.png" alt="Co-Cat" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="<?php echo get_site_url(); ?>/co-cat" class="button primary">Find out more</a>
    </div>
  </div>
</section>

<section class="what">
  <div class="container">
    <div class="eight columns">
      <h2>Online Support and Intervention for Child Anxiety</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="cta four columns">
      <a href="#" class="button secondary">Find out more</a>
    </div>
  </div> 
</section>

<section class="updates">
  <div class="container">
    <div class="twelve columns">
      <h3>Updates</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>