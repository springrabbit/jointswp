<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

	<div class="content">

		<div class="inner-content">

			<main class="main" role="main">

				<div class="content-starts">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; else : ?>

			   		<?php get_template_part( 'parts/content', 'missing' ); ?>

			    <?php endif; ?>

				</div>

			</main> <!-- end #main -->

			<?php get_template_part( 'parts/content', 'bottom' ); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
