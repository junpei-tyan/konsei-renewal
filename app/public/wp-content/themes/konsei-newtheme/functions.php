<?php

  function add_files() {
    wp_enqueue_style("reset", get_template_directory_uri() . "/assets/css/normalize.css", array(), false, "all");
    wp_enqueue_style("style", get_template_directory_uri() . "/assets/css/style.css", array(), false, "all");
  }
  add_action('wp_enqueue_scripts','add_files');

?>