<?php
  /*
  * Template Name: [GrochFilmes] Contato
  */
  get_header();
?>

<section id="grochfilmes-contato" class="conteudo-site container-fluid">
  <div class="row row-eq-height">
    <div class="row hidden-xs col-sm-6 col-md-5 col-lg-5">
      <div id="contato-mapa" class="row">
        <div id="mapa-endereco" class="row margin-b-1 text-center">
          <!--span class="row endereco-1">
            <?php// _e('Endereço', 'grochfilmes') ?>
          </span-->
          <span class="row endereco-2">
            <?php _e('Rua Dona Maria Paula, 78 / 10º andar - Bela Vista', 'grochfilmes') ?>
          </span>
          <span class="row endereco-3">
            <?php _e('CEP 01319-000 - São Paulo/SP - Brasil', 'grochfilmes') ?>
          </span>
        </div>
        <div id="mapa-gmaps" class="row">
          <?php
          if(CAMIGROCH_AMBIENTE === 'dev')
            echo(do_shortcode('[wpgmza id="1"]'));
          else
            echo(do_shortcode('[wpgmza id="1"]'));
          ?>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
      <div id="contato-redes-sociais" class="row margin-b-2">
        <div class="col-xs-6 col-sm-6 col-lg-6 text-right">
          <a id="redes-sociais-linkedin" class="hvr-pulse-grow" href="https://linkedin.com/in/camila-groch-bb85021" target="_blank" alt="LinkedIn" title="LinkedIn">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x texto-verde-primario"></i>
              <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-6 text-left">
          <a id="redes-sociais-skype" class="hvr-pulse-grow" href="skype:camigroch?call" target="_self" alt="Skype" title="Skype">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x texto-verde-primario"></i>
              <i class="fa fa-skype fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </div>
      </div>
      <div id="contato-campos" class="row">
        <div class="col-xs-10 col-xs-offset-2 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
          <?php
          if(CAMIGROCH_AMBIENTE === 'dev')
            echo(do_shortcode('[contact-form-7 id="7" title="Groch Filmes - Contato"]'));
          else
            echo(do_shortcode('[contact-form-7 id="684" title="Groch Filmes - Contato"]'));
          ?>
        </div>
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>
