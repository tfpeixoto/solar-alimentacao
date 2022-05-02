<?php

/**
 * Template name: Home
 */
$estiloPagina = "style.css";
require_once("header.php");
?>

<section class="hero">
  <div class="container">
    <div class="row">
      <?php
      $args = array(
        'page_id' => 2,
      );
      $home = new WP_Query($args);

      if ($home->have_posts()) : while ($home->have_posts()) : $home->the_post(); ?>
          <div class="col col-md-5 hero__puv">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <a href="#" class="btn">Solicite um orçamento</a>
          </div>

          <div class="col col-md-7 hero__image">
            <?php the_post_thumbnail(); ?>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<section class="services">
  <div class="container">
    <div class="row">
      <div class="col col-md-12">
        <h2 class="services__title">Serviços</h2>
      </div>
    </div>

    <div class="row">
      <?php
      $args = array(
        'post_type' => 'servicos',
        'post_per_page' => 4,
      );
      $services = new WP_Query($args);

      if ($services->have_posts()) : while ($services->have_posts()) : $services->the_post(); ?>

          <div class="col col-md-4 services__box">
            <?php the_post_thumbnail('services__images', ['class' => 'services__images']); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<section class="clients">
  <div class="container">
    <div class="row">
      <div class="col col-md-3 clients__title">
        <h2>Clientes</h2>
      </div>

      <div class="col col-md-9">
        <ul class="clients__brands">
          <?php
          $args = array(
            'post_type' => 'clientes',
            'post_per_page' => 4,
          );
          $clients = new WP_Query($args);

          if ($clients->have_posts()) : while ($clients->have_posts()) : $clients->the_post(); ?>

              <li class="clients__item"><?php the_post_thumbnail('clients__images', ['class' => 'clients__images']); ?></li>

          <?php endwhile;
          endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="institucional">
  <div class="container">
    <div class="row">
      <?php
      $args = array(
        'page_id' => 24,
      );
      $institucional = new WP_Query($args);

      if ($institucional->have_posts()) : while ($institucional->have_posts()) : $institucional->the_post(); ?>

          <div class="col col-md-6">
            <?php the_post_thumbnail('institucional__image', ['class' => 'institucional__image']); ?>
          </div>

          <div class="col col-md-5 institucional__text">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<section class="map">
  <div class="container">
    <div class="row">
      <div class="col col-md-5 map__box">
        <h3>Visite nossa cozinha</h3>
        <p>Av. Tereza Cristina, 5.600 . Serra<br />
          Belo Horizonte/MG, CEP 30516-120<br />
          <a href="#">Ver mapa</a>
        </p>

        <h3>Horário de funcionamento</h3>
        <p>Segunda a sexta de 8h às 18h
          Sábado de 8h às 12h</p>

        <ul>
          <li><a href="tel:3133334444">(31) 3333.4444</a></li>
          <li><a href="wa.me/+553196067876">(31) 9606.7876</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="cta">
  <div class="container">
    <div class="row">
      <div class="col col-md-8 cta__phrase">
        <p>Solicite um orçamento sem compromisso agora mesmo, responderemos o mais breve possível.</p>
      </div>

      <div class="col col-md-4 cta__button">
        <a href="#" class="btn">Solicite um orçamento</a>
      </div>
    </div>
  </div>
</section>

<?php
get_template_part("template-parts/modal");
require_once("footer.php");
?>