<?php
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="sidebar2" class="sidebar small-12 medium-4 large-4 cell" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar2' ); ?>

	<?php endif; ?>

</div>
