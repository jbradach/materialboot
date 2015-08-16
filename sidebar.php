<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Material Boot
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-4 well well-sm">
  <div id="secondary" class="widget-area" role="complementary">
  	<?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div><!-- #secondary -->
</div>