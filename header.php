<?php /* Header */  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title( '|', true, 'left' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimal-ui" />
<?php wp_head(); ?>
 <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;700;900&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png"/>
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/img/favicon-32x32.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/img/favicon-16x16.png"/>

<?php if( get_field('social_metadata', 'options') ): the_field('social_metadata', 'options'); endif; // Social Metadata ?>
<?php if( get_field('google_analytics', 'options') ): the_field('google_analytics', 'options'); endif; // Google Analytics Code ?>

</head>
<body <?php body_class(); ?>>
<a class="skip-to-content-link" href="#main">
  Skip to content
</a>
<header>
  <div class="container">
    <div class="logo three columns">  
      <p class="site-title">
      <a href="<?php echo get_site_url(); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/img/co-space-logo.svg" alt="Co-Space Logo" />
      </a>
      </p>
    </div>
    <nav class="desktop nine columns">
      <?php wp_nav_menu( array( 'theme_location' => 'main', 'container'=> false, 'menu_class'=> false ) ); ?>
    </nav>
  </div>
  <a class="menu-toggle" aria-controls="primary-menu">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </a>
  <nav class="mobile">
    <div class="content">
      <?php wp_nav_menu( array( 'theme_location' => 'main', 'container'=> false, 'menu_class'=> false ) ); ?>
    </div>
  </nav>
</header>
<div id="main">