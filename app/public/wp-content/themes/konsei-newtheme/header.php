<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php echo bloginfo('name'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Serif+JP:wght@200..900&family=Pacifico&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Pacifico&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <a href="<?php echo home_url() ?>" class="header-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="logo-image" class="header-logo-image">
    </a>
    <div class="header-nav-container">
      <nav>
        <ul class="header-nav">
          <li><a href="">絞りについて</a></li>
          <li><a href="#">体験紹介</a></li>
          <li><a href="#">ワークショップ</a></li>
          <li><a href="#">活動実績</a></li>
          <li><a href="#">会社概要</a></li>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
      </nav>
    </div>
    <div class="sns-icons">
      <a href="https://www.facebook.com/people/%E6%9C%89%E3%81%93%E3%82%93%E3%81%9B%E3%81%84/100057582454245/">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/facebook-icon.svg" alt="facebook-icon">
      </a>
      <a href="https://www.instagram.com/konsei_shibori/">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/instagram-icon.svg" alt="instagram-icon">
      </a>
    </div>
    <div class="header-lang-switcher">
      <button>JP / EN</button>
    </div>
  </header>