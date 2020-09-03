<?php
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="sidebar3" class="sidebar small-12 medium-4 large-4 cell" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar3' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar3' ); ?>

	<?php endif; ?>

</div>
