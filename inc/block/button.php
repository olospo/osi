<?php /* Button Block Template */

// Load values and assign defaults.
$text = get_field('button_text');
$link = get_field('button_link');
$target = get_field('link_target');

?>

<a href="<?php echo $link; ?>" class="button primary" <?php if( $target == '1' ) { ?>target="_blank"<?php } ?>><?php echo $text; ?></a>