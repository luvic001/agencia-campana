<?php

if (!defined('PATH')) exit;

$telefone = get_theme_mod('contato-telefone');
$whatsapp = get_theme_mod('contato-whatsapp');
$email = get_theme_mod('contato-email');
$address = get_theme_mod('contato-address');

$section = (object) [
  'image' => get_field('section-contato-background'),
  'image_mobile' => get_field('section-contato-background_mobile'),
  'title' => get_field('section-contato-title'),
  'subtitle' => get_field('section-contato-subtitle'),
  'title_contato' => get_field('section-contato-title_contato'),
  'title_onde_estamos' => get_field('section-contato-title_onde_estamos'),
  'title_mensagem' => get_field('section-contato-title_mensagem'),
];

?>

<div class="background-contato">
  <style>
    .background-contato {
      background-image: url('<?= get_image('background-contato.png') ?>');
    }
  </style>
</div>

<section class="site-sections section-contato">

  <div class="container">
    
    <?php if ($section->title): ?>
      <div class="section-title color-reverse centerized">
        <h2><?= $section->title ?></h2>
        <?php if ($section->subtitle): ?>
          <p><?= $section->subtitle ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="row">

      <?php if ($address): ?>
        <article class="article-item col-12">
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <?php if ($section->title_onde_estamos): ?>
                <div class="article-title">
                  <h3><?= $section->title_onde_estamos ?></h3>
                </div>
              <?php endif; ?>
            </div>
            <div class="offset-md-1 col-md-7">
              <div class="editor-content">
                <p><?= $address ?></p>
              </div>
            </div>
          </div>
        </article>
      <?php endif; ?>

      <article class="article-item col-12">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <?php if ($section->title_contato): ?>
              <div class="article-title">
                <h3><?= $section->title_contato ?></h3>
              </div>
            <?php endif; ?>
          </div>
          <div class="offset-md-1 col-md-7">
            <div class="editor-content">
              <p>
                
                <?php if ($telefone): foreach ( explode(',', $telefone) as $tel ): ?>
                  <a 
                    href="tel:<?= only_number($tel) ?>" 
                    class="d-block mb-3 dark-link"
                    title="Telefonar">
                    <i class="fa-solid fa-phone"></i>
                    <?= $tel ?>
                  </a>
                <?php endforeach; endif; ?>
                
                <?php if ($whatsapp): foreach ( explode(',', $whatsapp) as $wpp ): ?>
                  <a 
                    href="https://api.whatsapp.com/send?phone=+<?= only_number($wpp) ?>"
                    class="d-block mb-3 dark-link"
                    title="Enviar um WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                    <?= $wpp ?>
                  </a>
                <?php endforeach; endif; ?>
                
                <?php if ($email): foreach ( explode(',', $email) as $mail ): ?>
                  <a 
                    href="mailto:<?= $mail ?>" 
                    class="d-block dark-link"
                    title="Enviar E-mail">
                    <i class="fa-solid fa-envelope"></i>
                    <?= $mail ?>
                  </a>
                <?php endforeach; endif; ?>
                
                
              </p>
            </div>
          </div>
        </div>
      </article>

      <article class="article-item col-12">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <?php if ($section->title_mensagem): ?>
              <div class="article-title">
                <h3><?= $section->title_mensagem ?></h3>
              </div>
            <?php endif; ?>
          </div>
          <div class="offset-md-1 col-md-7">
            <?= do_shortcode('[contact-form-7 id="59" title="Formulário de contato"]') ?>
          </div>
        </div>
      </div>


    </div>

  </div>

</section>