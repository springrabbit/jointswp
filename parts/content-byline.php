<?php
/**
 * The template part for displaying an author byline
 */
?>

<p class="byline">
	<?php
	printf( __( 'By %1$s on %2$s', 'jointswp' ),
		get_the_author_posts_link(),
		get_the_time( __('F j, Y', 'jointswp') )
	);
	?>
</p>
