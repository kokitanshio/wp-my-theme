<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <title>たんしおブログ</title>
  <meta name="description" content="">

  <meta property="og:title" content="tanshioblog">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="tanshioblog">
  <meta property="og:description" content="">
  <meta name="twitter:card" content="summary_large_image">

  <?php wp_head(); ?>
</head>

<body>
  <!--headerここから-->
  <header id="header" class="header">
    <div class="inner">
      <div class="header-inner">
        <div class="header-logo">
          <a href=#>たんしおブログ</a>
        </div>
        <div class="header-subtitle">
          サブタイトルが入りますサブタイトルが入りますサブタイトルが入ります
        </div>
      </div>

      <!--header-navここから-->
      <nav class="header-nav">
        <ul class="header-list">
          <li class="menu-item"><a href="#">カテゴリ名１</a></li>
          <li class="menu-item"><a href="#">カテゴリ名２</a></li>
          <li class="menu-item"><a href="#">カテゴリ名３</a></li>
        </ul>
      </nav>
      <!--header-navここまで-->

      <!--drawerここから-->
      <div class="drawer">
        <div class="drawer-icon" id="drawer-icon">
          <i id="drawer-open" class="fas fa-chevron-down drawer-open drawer-action"></i>
          <i id="drawer-close" class="fas fa-chevron-up drawer-close"></i>
        </div>
        <div class="drawer-content">
          <nav class="drawer-nav">
            <ul class="drawer-list">
              <li class="drawer-item"><a href="#">カテゴリ名１</a></li>
              <li class="drawer-item"><a href="#">カテゴリ名２</a></li>
              <li class="drawer-item"><a href="#">カテゴリ名３</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <!--drawerここまで-->
    </div><!--inner-->
  </header>
  <!--headerここまで-->
