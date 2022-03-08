<?php

if (!defined('PATH')) exit;
$logo = get_site_logo('logo_do_site_footer', 'Agência Campana - Marketing Digital', 'mw-100');

?>

<footer class="site-footer">
  <div class="footer-content">
    <div class="container">

      <div class="row align-items-center">

        <div class="col-md-3 d-flex justify-content-center justify-content-md-start mb-4 mb-md-0">
          <figure>
            <a href="<?= site_url() ?>" title="Agência Campana | Marketing Digital">
              <?= $logo ?>
            </a>
          </figure>
        </div>
        <div class="col-md-8 offset-md-1">

          <div class="row align-items-center">
            <div class="col-md-6 col-lg-5 mb-4 mb-md-0">
              <nav class="menu-footer w-100">
                <a href="#" class="toggle-menu" toggle-menu--footer title="Navegue Aqui">
                  Navegue Aqui
                  <?= svg('campana--arrow-down') ?>
                </a>

                <div class="menu-content">
                  <?= menu() ?>
                </div>
                
              </nav>
            </div>
            <div class="col-md-6 col-lg-7 d-flex justify-content-center justify-content-md-end">
              <?php $rs = get_redes_sociais(); ?>
              <ul class="redes-sociais">
                <?php 
                
                  foreach ($rs as $key => $label): 
                    $tm = get_theme_mod(sprintf('rs-%s', $key));
                    if ($tm) {
                      ___(
                        sprintf(
                          '<li>
                            <a href="%s" target="_blank" title="%s">
                              <i class="fa-brands fa-%s"></i>
                            </a>
                          </li>',
                          $tm,
                          $label,
                          $key
                        )
                      );
                    }
                  endforeach;
                
                ?>
              </ul>

            </div>
          </div>

        </div>

      </div>


    </div>
  </div>
  <div class="footer-credits">
    <p class="align-center">© 2022 - Agência Campana. Todos os direitos reservados.</p>
  </div>
</footer>