<?php
  /*
  * Template Name: [GrochFilmes] Biografia
  */
  get_header();
?>

<section id="grochfilmes-biografia" class="conteudo-site container-fluid margin-t-4">
  <div class="row">
    <div id="biografia-imagem" class="row col-sm-5 col-lg-4">
      <img class="img-responsive" src="<?php echo(get_stylesheet_directory_uri().'/assets/images/png/biografia-grochfilmes.png'); ?>" alt="" title=""/>
    </div>
    <div id="biografia-texto" class="col-xs-12 col-sm-7 col-lg-6 col-lg-offset-1">
      <div class="texto-titulo text-center">
        <h1 class="titulo-camilagroch hvr-pulse">Camila Groch</h1>
        <h4 class="titulo-nascimento">Brasil, 1977</h4>
      </div>
      <div class="texto-conteudo text-center">
        <?php
          while (have_posts()): the_post();
            the_content();
          endwhile;
          wp_reset_query();
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
