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
            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" class="btn">
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
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.9346500784322!2d-43.9133072!3d-19.9271585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699854f5e3e51%3A0x515467e10a77697c!2sRua%20Maestro%20Del%C3%AA%20Andrade%2C%20942%20-%20Santa%20Efig%C3%AAnia%2C%20Belo%20Horizonte%20-%20MG%2C%2030240-590!5e0!3m2!1spt-BR!2sbr!4v1652225530901!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <div class="container">
    <div class="row">
      <div class="col col-md-5 map__box">
        <h3>Visite nossa cozinha</h3>
        <p>Rua Maestro Delê Andrade, 942- Santa Efigênia<br />
          Belo Horizonte/MG, CEP 30240-590<br />
          <a href="https://www.google.com/maps/place/Rua+Maestro+Del%C3%AA+Andrade,+942+-+Santa+Efig%C3%AAnia,+Belo+Horizonte+-+MG,+30240-590/@-19.9271585,-43.9133072,17z/data=!3m1!4b1!4m5!3m4!1s0xa699854f5e3e51:0x515467e10a77697c!8m2!3d-19.9271585!4d-43.9133072" target="_blank">Ver mapa</a>
        </p>

        <h3>Horário de funcionamento</h3>
        <p>Segunda a sexta de 8h às 18h</p>

        <ul>
          <li>
            <a href="https://wa.me/+553196067876" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" class="header__icon" viewBox="0 0 448 512">
                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
              </svg>
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
        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" class="btn">Solicite um orçamento</a>
      </div>
    </div>
  </div>
</section>

<?php
require_once("footer.php");
?>