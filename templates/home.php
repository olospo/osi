<?php /* Template Name: Home */
get_header();

while ( have_posts() ) : the_post(); ?>




<section class="cats">
  <div class="container">
    <div class="cat_study one-third column">
      <img src="<?php bloginfo('template_directory'); ?>/img/icats_cat.png" alt="iCats Cat" class="cat" />
      <img src="<?php bloginfo('template_directory'); ?>/img/icats.png" alt="iCats" class="logo" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="<?php echo get_site_url(); ?>/icats" class="button primary">Find out more</a>
    </div>
    <div class="cat_study one-third column">
      <img src="<?php bloginfo('template_directory'); ?>/img/my-cats_cat.png" alt="My-Cats Cat" class="cat" />
      <img src="<?php bloginfo('template_directory'); ?>/img/my-cats.png" alt="My-Cats" class="logo" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="<?php echo get_site_url(); ?>/my-cats" class="button primary">Find out more</a>
    </div>
    <div class="cat_study one-third column">
      <img src="<?php bloginfo('template_directory'); ?>/img/co-cat_cat.png" alt="Co-Cats Cat"  class="cat" />
      <img src="<?php bloginfo('template_directory'); ?>/img/co-cat.png" alt="Co-Cat" class="logo" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="<?php echo get_site_url(); ?>/co-cat" class="button primary">Find out more</a>
    </div>
  </div>
</section>

<section class="what">
  <div class="container">
    <div class="ten columns offset-by-one">
      <h2>Online Support and Intervention for Child Anxiety</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
      <a href="#" class="button secondary">Find out more</a>
    </div>
  </div> 
</section>

<section class="funded">
  <div class="container">
    <div class="twelve columns">
      <div class="funding_logos">
        <ul>
          <li><img src="<?php bloginfo('template_directory'); ?>/img/nhs_logo.jpg" alt="NHS Oxford Health" class="logo" /></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/img/ep_logo.jpg" alt="Experimental Phychology" class="logo" /></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/img/nihr_logo.png" alt="National Insitutre for Health Research" class="logo" /></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/img/oxforduni_logo.png" alt="Oxford University" class="logo" /></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>