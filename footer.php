<?php /* Footer */ 
$twitter = get_field('twitter_url','option');
$facebook = get_field('facebook_url','option');
$instagram = get_field('instagram_url','option');
$youtube = get_field('youtube_url','option');
?>

</div> <!-- End Main div -->
<footer>
  <div class="container">
    <div class="copyright eight columns">
      <strong>&copy; <?php echo date("Y"); ?> OSI</strong>
    </div>
    <div class="social four columns">
      <?php if( $twitter ): ?>
      <a href="<?php echo $twitter; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twitter_icon.svg" class="social_icon"></a>
      <?php endif; ?>
      <?php if( $facebook ): ?>
      <a href="<?php echo $facebook; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/facebook_icon.svg" class="social_icon"></a>
      <?php endif; ?>
      <?php if( $instagram ): ?>
      <a href="<?php echo $instagram; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/instagram_icon.svg" class="social_icon"></a>
      <?php endif; ?>
      <?php if( $youtube ): ?>
      <a href="<?php echo $youtube; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/youtube_icon.svg" class="social_icon"></a>
      <?php endif; ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
