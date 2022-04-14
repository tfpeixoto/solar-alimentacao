<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/' . $estiloPagina ?>" onload="this.media='all'; this.onload=null;">
</head>

<body <?php body_class(); ?>>

  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand header__brand" href="<?php get_home_url(); ?>"><?php the_custom_logo(); ?></a>

        <button class="navbar-toggler header__mobile" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="header__contact">
          <ul>
            <li><a href="tel:3133334444">(31) 3333.4444</a></li>
            <li><a href="wa.me/+553196067876">(31) 9606.7876</a></li>
          </ul>
        </div>

        <?php
        wp_nav_menu(array(
          'theme_location'  => 'main-menu',
          'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse header__menu',
          'container_id'    => 'bs-example-navbar-collapse-1',
          'menu_class'      => 'navbar-nav mr-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));
        ?>

        <div class="header__cta">
          <a href="#" class="btn">Solicite um orçamento</a>
        </div>
      </div>
    </nav>
  </header>