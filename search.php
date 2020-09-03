<?php
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

	<div class="content">

		<div class="inner-content">

			<main class="main" role="main">

        <div class="content-starts">

				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Search Results for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
				</header>

				<?php if (have_posts()) : ?>

          <div class="blog-grid">

          <?php while (have_posts()) : the_post(); ?>

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
