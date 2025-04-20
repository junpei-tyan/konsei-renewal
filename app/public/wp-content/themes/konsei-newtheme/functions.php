<?php

  function add_files() {
    wp_enqueue_style("reset", get_template_directory_uri() . "/assets/css/normalize.css", array(), false, "all");
    wp_enqueue_style("style", get_template_directory_uri() . "/assets/css/style.css", array(), false, "all");

    wp_enqueue_script("script",get_template_directory_uri()."/assets/js/script.js",array(),false, true);
  }
  add_action('wp_enqueue_scripts','add_files');

  function add_custom_about_styles() {
    if (is_page_template('page-about.php')) {
      wp_enqueue_style(
        'page-about-style',
        get_template_directory_uri() . '/assets/css/page-about.css',
        array(),
        null
      );
    }
  }
  add_action('wp_enqueue_scripts', 'add_custom_about_styles');
  
?>