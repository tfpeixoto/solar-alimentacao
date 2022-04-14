<footer>
  <div class="container">
    <div class="row footer">
      <div class="col col-md-3 footer__logo">
        <?php the_custom_logo(); ?>
      </div>

      <div class="col col-md-3 footer__social">
        <ul>
          <li><a href="tel:3133334444">Telefone</a></li>
          <li><a href="wa.me/+553199995555">Whatsapp</a></li>
          <li><a href="https://facebook.com/solaralimentacao">Facebook</a></li>
          <li><a href="https://instagram.com/solaralimentacao">Instagram</a></li>
        </ul>
      </div>

      <?php
      wp_nav_menu(array(
        'theme_location'  => 'footer-menu',
        'depth'           => 1,
        'container'       => 'div',
        'container_class' => 'col col-md-3 footer__menu',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'menu_class'      => 'navbar-nav mr-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
      ));
      ?>

      <div class="col col-md-3 footer__copy">
        <p>© 2022 Copyright. Todos os direitos reservados.
          <a href="">Solar Alimentação</a>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>