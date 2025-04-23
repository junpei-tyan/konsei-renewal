<?php

  function add_files() {
    wp_enqueue_style("reset", get_template_directory_uri() . "/assets/css/normalize.css", array(), false, "all");
    wp_enqueue_style("style", get_template_directory_uri() . "/assets/css/style.css", array(), false, "all");
  }
  add_action("wp_enqueue_scripts","add_files");

  function mytheme_enqueue_scripts() {
    $theme_uri = get_template_directory_uri();

    wp_enqueue_script(
        "lang-toggle",
        $theme_uri . "/script.js",
        array(),
        null,
        true
    );
  }
  add_action("wp_enqueue_scripts", "mytheme_enqueue_scripts");


  // FAQ カスタム投稿タイプ登録
  // function create_faq_post_type() {
  //   register_post_type('faq',
  //       array(
  //           'labels' => array(
  //               'name' => 'よくある質問',
  //               'singular_name' => 'FAQ'
  //           ),
  //           'public' => true,
  //           'has_archive' => false,
  //           'menu_position' => 5,
  //           'menu_icon' => 'dashicons-editor-help',
  //           'supports' => array('title', 'editor'),
  //           'show_in_rest' => true, // ブロックエディター対応
  //       )
  //   );
  // }
  // add_action('init', 'create_faq_post_type');

  // // FAQ 投稿にカテゴリーを追加
  // function add_faq_categories() {
  //   register_taxonomy_for_object_type('category', 'faq');
  // }
  // add_action('init', 'add_faq_categories');

?>