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
          <div class="col-12 col-md-5 hero__puv">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal" class="btn">
              Solicite um orçamento
              <svg xmlns="http://www.w3.org/2000/svg" class="header__button-icon" viewBox="0 0 512 512">
                <path d="M502.6 278.6l-128 128c-12.51 12.51-32.76 12.49-45.25 0c-12.5-12.5-12.5-32.75 0-45.25L402.8 288H32C14.31 288 0 273.7 0 255.1S14.31 224 32 224h370.8l-73.38-73.38c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l128 128C515.1 245.9 515.1 266.1 502.6 278.6z" />
              </svg>
            </a>
          </div>

          <div class="col-12 col-md-7">
            <?php the_post_thumbnail('hero__image', ['class' => 'hero__image']); ?>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<section id="services" class="services">
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

          <div class="col-12 col-md-4 services__box">
            <?php the_post_thumbnail('services__images', ['class' => 'services__images']); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<section id="clients" class="clients">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-3 clients__title">
        <h2>Clientes</h2>
      </div>

      <div class="col-12 col-md-9">
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

<section id="institucional" class="institucional">
  <div class="container">
    <div class="row">
      <?php
      $args = array(
        'page_id' => 24,
      );
      $institucional = new WP_Query($args);

      if ($institucional->have_posts()) : while ($institucional->have_posts()) : $institucional->the_post(); ?>

          <div class="col-12 col-md-6">
            <?php the_post_thumbnail('institucional__image', ['class' => 'institucional__image']); ?>
          </div>

          <div class="col-12 col-md-5 institucional__text">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<section class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5304.194552748809!2d-43.92278799876989!3d-19.93990925011419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699bc77a62d2d%3A0xf8358afdb0df6f3e!2sSerra%2C%20Belo%20Horizonte%20-%20MG!5e0!3m2!1spt-BR!2sbr!4v1651540909557!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
          <li>
            <a href="tel:3133334444">
              <svg xmlns="http://www.w3.org/2000/svg" class="header__icon" viewBox="0 0 512 512">
                <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
              </svg>
              (31) 3333.4444</a>
          </li>
          <li>
            <a href="wa.me/+553196067876">
              <svg xmlns="http://www.w3.org/2000/svg" class="header__icon" viewBox="0 0 448 512">
                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" /></svg>
                (31) 9606.7876</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="cta">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 cta__phrase">
        <p>Solicite um orçamento sem compromisso agora mesmo, responderemos o mais breve possível.</p>
      </div>

      <div class="col-12 col-md-4 cta__button">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modal" class="btn">Solicite um orçamento</a>
      </div>
    </div>
  </div>
</section>

<?php
get_template_part("template-parts", "modal");
require_once("footer.php");
?>