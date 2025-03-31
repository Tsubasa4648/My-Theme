<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>

<!-- ヘッダー（ロゴ＋ナビ） -->
<header class="site-header">
  <div class="header-inner">
    <div class="site-title">
      <h1><?php bloginfo('name'); ?></h1>
    </div>
    <nav class="main-nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'menu_class' => 'nav-list',
        ));
      ?>
    </nav>
  </div>
</header>
