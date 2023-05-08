<!-- Modal -->
<div class="modal fade" id="myModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content modalcta">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-4 modalcta__title">
            <h3>Está precisando dos nossos produtos e serviços?</h3>
            <img src="<?= get_template_directory_uri(); ?>/images/salgadinhos.png" alt="Eventos Corporativos" />
          </div>

          <div class="col-12 col-lg-8 modalcta__content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="modalcta__form">
              <p>Solicite um orçamento. <strong>Em até 48 horas entraremos em contato</strong>.</p>

              <?= do_shortcode('[contact-form-7 id="44" title="Formulário de contato"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>