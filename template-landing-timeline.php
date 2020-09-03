<?php

/*
Template Name: Timeline Landing Page
*/

get_header( 'timeline' ); ?>

	<div class="content">

    <div class="inner-content">

      <main class="main" role="main">

        <?php get_template_part( 'parts/loop', 'timeline' ); ?>

      </main>

    </div>

  </div>

<?php
get_footer( 'timeline' );

?>
