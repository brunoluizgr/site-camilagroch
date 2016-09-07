<?php
/*
* Template Name: [GrochFilmes] Services
*/
  get_header();
?>
<section id="grochfilmes-services" class="container-fluid conteudo-site">

  <div id="grochfilmes-services-titulo" class="container">
    <div class="row">
      <div class="col-lg-offset-1 col-lg-10 margin-b-2 text-center">
        <?php
          while (have_posts()): the_post();
            the_content();
          endwhile;
          wp_reset_query();
        ?>
      </div>
    </div>
  <div>

  <div id="grochfilmes-services-slides" class="container-fluid">
    <div class="row">
      <div id="services-slide-01" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-01") ?>
      </div>
      <div id="services-slide-02" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-02") ?>
      </div>
      <div id="services-slide-03" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-03") ?>
      </div>
      <div id="services-slide-04" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-04") ?>
      </div>
      <div id="services-slide-05" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-05") ?>
      </div>
      <div id="services-slide-06" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-06") ?>
      </div>
      <div id="services-slide-07" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-07") ?>
      </div>
      <div id="services-slide-08" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-08") ?>
      </div>
      <div id="services-slide-09" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-09") ?>
      </div>
      <div id="services-slide-10" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-10") ?>
      </div>
      <div id="services-slide-11" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-11") ?>
      </div>
      <div id="services-slide-12" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-12") ?>
      </div>
      <div id="services-slide-13" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide-13") ?>
      </div>
    </div>
  </div>

  <div id="grochfilmes-services-link-retorno" class="container">
    <!-- Seção Link de Retorno -->
    <div class="row margin-t-2">
      <div class="col-lg-12">
        <div class="col-lg-12">
          <a href="<?php echo(site_url()) ?>" target="_self">
            <span class="services-link-retorno">
              <?php _e('<< HOME', 'grochfilmes' )?>
            </span>
          </a>
        </div>
      </div>
    </div>
    <!-- Fim da Seção Link de Retorno -->
  </div>

</section>
<?php wp_reset_postdata();
    get_footer();
?>
