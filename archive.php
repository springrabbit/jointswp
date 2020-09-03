<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

	<div class="content">

		<div class="inner-content">

		    <main class="main" role="main">

					<div class="content-starts">

						<?php

						$q = new WP_Query( 'posts_per_page=12' );

						?>

			    	<header class="page-header">
			    		<h1 class="page-title"><?php the_archive_title();?></h1>
							<?php the_archive_description('<p class="taxonomy-description">', '</p>');?>
			    	</header>

			    	<?php if ($q->have_posts()) : ?>

						<div class="blog-grid">

						<?php	while ($q->have_posts()) : $q->the_post(); ?>

						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'archive-grid' ); ?>

					<?php endwhile; ?>

				</div>

						<?php joints_page_navi(); ?>

					<?php else : ?>

						<?php get_template_part( 'parts/content', 'missing' ); ?>

					<?php endif; ?>

				</div>

			</main> <!-- end #main -->

			<?php get_template_part( 'parts/content', 'bottom' ); ?>

	    </div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
