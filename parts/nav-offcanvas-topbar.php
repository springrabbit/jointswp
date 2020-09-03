<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<?php echo get_custom_logo(); ?>
		<a href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>
	</div>
	<div class="top-bar-right-icon show-for-small-only">
		<ul class="menu">
			<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
		</ul>
	</div>
</div>
