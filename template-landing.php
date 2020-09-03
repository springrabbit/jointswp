<?php
/*
Template Name: Home Landing Page
*/


get_header( 'landing' ); ?>

	<div class="content">

    <div class="inner-content">

      <main class="main" role="main">

        <?php get_template_part( 'parts/loop', 'landing' ); ?>

      </main>

    </div>

  </div>

<?php
get_footer();

?>
