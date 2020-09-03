<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-page'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
	</header> <!-- end article header -->

    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->
