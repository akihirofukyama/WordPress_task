<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="media__header">
    <div class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="../img/estramedia__logo.png">
      </a>
    </div>
    <nav class="header__nav pc">
      <ul class="flex__item">
        <li class="nav__list">
          <a href="https://snowden-light.com/category/html/" class="nav__link">HTML</a>
        </li>
        <li class="nav__list">
          <a href="https://snowden-light.com/category/css/" class="nav__link">CSS</a>
        </li>
        <li class="nav__list">
          <a href="https://snowden-light.com/category/javascript/" class="nav__link">JavaScript</a>
        </li>
        <li class="nav__list">
          <a href="https://snowden-light.com/category/php/" class="nav__link">PHP</a>
        </li>
        <li class="nav__list">
          <a href="https://snowden-light.com/category/mysql/" class="nav__link">MySQL</a>
        </li>
      </ul>
    </nav>
  </header>