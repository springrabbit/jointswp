<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

	<div class="content">

		<div class="inner-content">

		    <main class="main" role="main">

					<div class="content-starts">

			    <?php

					$q = new WP_Query( 'posts_per_page=12' );

					if ($q->have_posts()) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php echo __( 'Our content', 'jointswp' );?></h1>
							<p><?php echo __( 'Get some fresh updates from our everyday life.', 'jointswp' ); ?></p>
						</header>

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
