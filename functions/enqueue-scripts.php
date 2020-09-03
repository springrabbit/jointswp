<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Register scripts && styles
    wp_register_style( 'comments-css', get_template_directory_uri() . '/assets/styles/comment-form.css', array() );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

    // Register Google Fonts
    wp_enqueue_style( 'google-fonts-css',
      "https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap",
      array() );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

    // Comments script
    if ( is_singular() AND comments_open() ) {
      wp_enqueue_style( 'comments-css' );
    }

    if( is_page_template( 'template-landing.php' ) ){

      wp_enqueue_style( 'landing', get_template_directory_uri() . '/assets/styles/landing.css', array() );

    }

    if( is_page_template( 'template-landing-timeline.php' ) ){

      wp_enqueue_style( 'landing-timeline', get_template_directory_uri() . '/assets/styles/timeline.css', array() );

      wp_enqueue_script( 'hammer', get_template_directory_uri() . '/assets/scripts/timeline/vendor/hammer-2.0.8.js', array() );

      wp_enqueue_script( 'landing-timeline', get_template_directory_uri() . '/assets/scripts/timeline.js', array( 'hammer' ) );

    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
