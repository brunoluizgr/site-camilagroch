<?php
  /*
  * Template Name: [GrochFilmes] Contato
  */
  get_header();
?>

<section id="grochfilmes-contato" class="conteudo-site container-fluid">
  <div class="row">
    <div id="contato-redes-sociais" class="row margin-b-2">
      <div class="col-lg-6 text-right">
        <a id="redes-sociais-linkedin" class="hvr-pulse-grow" href="https://www.linkedin.com/profile/view?id=4235324" target="_blank" alt="LinkedIn" title="LinkedIn">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x texto-verde-primario"></i>
            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </div>
      <div class="col-lg-6 text-left">
        <a id="redes-sociais-skype" class="hvr-pulse-grow" href="skype:camigroch?call" target="_self" alt="Skype" title="Skype">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x texto-verde-primario"></i>
            <i class="fa fa-skype fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </div>
    </div>
    <div id="contato-campos" class="row">
      <div class="col-lg-offset-3 col-lg-6">
        <?php echo(do_shortcode('[contact-form-7 id="30" title="Groch Filmes - Contato"]')); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
