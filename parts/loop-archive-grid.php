<?php
/**
 * The template part for displaying a grid of posts
 *
 * For more info: http://jointswp.com/docs/grid-archive/
 */

?>

<div class="blog-grid-item" data-equalizer> <!--Begin Grid-->

		<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

			<section class="featured-image" itemprop="text">
				<?php the_post_thumbnail('full'); ?>
			</section> <!-- end article section -->

			<header class="article-header">
				<?php get_template_part( 'parts/content', 'byline-top' ); ?>
				<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

			</header> <!-- end article header -->

			<section class="entry-content" itemprop="text">

				<?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
        <?php echo wp_trim_words( get_the_content(), 10, '...' ); ?>
			</section> <!-- end article section -->

			<footer class="article-footer">
				<?php get_template_part( 'parts/content', 'byline' ); ?>
			</footer>

		</article> <!-- end article -->

</div>  <!--End Grid -->
