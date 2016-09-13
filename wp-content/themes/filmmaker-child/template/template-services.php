<?php
/*
* Template Name: [GrochFilmes] Services
*/
  get_header();
?>
<section id="grochfilmes-services" class="container-fluid conteudo-site">

  <div id="grochfilmes-services-titulo" class="container">
    <div class="row">
      <div class="col-lg-offset-1 col-lg-10 margin-t-2 margin-b-4 text-center">
        <?php
          while (have_posts()): the_post();
            the_content();
          endwhile;
          wp_reset_query();
        ?>
      </div>
    </div>
  </div>

  <div id="grochfilmes-services-slides" class="container-fluid">
    <?php
      if(CAMIGROCH_AMBIENTE === 'dev')
      {
    ?>
    <div class="row">
      <div id="services-slide-1" class="row col-lg-12 margin-b-1">
        <?php masterslider("services-slide") ?>
      </div>
    </div>
    <?php
      }
      else
      {
        for($i=1; $i<=7; $i++)
        {
    ?>
    <div id="services-cinema" class="row">
      <div id="services-slide-<?php echo($i) ?>" class="row col-lg-12 margin-b-1">
        <?php
          $post = get_posts(array(
            'numberposts'	=> 1,
            'post_status'      => 'publish',
            'post_type'		=> 'cinema',
            'meta_key'		=> 'cinema-ordem_importancia',
            'meta_value'	=> $i
          ));
          if($post):
            $slug = basename(get_permalink($post[0]->ID));
            $var_list = "services-slide-".$slug;
            masterslider($var_list);
          endif;
        ?>
      </div>
      <div id="services-info-<?php echo($i) ?>" class="container-fluid">
        <div class"row">
          <div class="col-lg-12">
            <a href="<?php echo(get_post_permalink($post[0]->ID)); ?>" target="_self">
              <div class="services-info-detalhes">
                <div class="info-nome" style="display:none;">
                  <?php
                    if($post):
                      echo(mb_strtoupper(get_the_title($post[0]->ID)));
                    endif;
                  ?>
                </div>
                <div class="info-barra" style="display:none;">
                  <?php
                    if($post):
                      echo('|');
                    endif;
                  ?>
                </div>
                <div class="info-especificacoes-tecnicas" style="display:none;">
                  <?php
                    if($post):
                      $especificacoes_tecnicas = get_post_custom_values('cinema-especificacoes_tecnicas', $post[0]->ID);
                      echo($especificacoes_tecnicas[0]);
                    endif;
                  ?>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
        wp_reset_query();
        }
        for($i=1; $i<=6; $i++)
        {
    ?>
    <div id="services-televisao" class="row">
      <div id="services-slide-<?php echo($i) ?>" class="row col-lg-12 margin-b-1">
        <?php
          $post = get_posts(array(
            'numberposts'	=> 1,
            'post_status'      => 'publish',
            'post_type'		=> 'televisao',
            'meta_key'		=> 'televisao-ordem_importancia',
            'meta_value'	=> $i
          ));
          if($post):
            $slug = basename(get_permalink($post[0]->ID));
            $var_list = "services-slide-".$slug;
            masterslider($var_list);
          endif;
        ?>
      </div>
      <div id="services-info-<?php echo($i) ?>" class="container-fluid">
        <div class"row">
          <div class="col-lg-12">
            <a href="<?php echo(get_post_permalink($post[0]->ID)); ?>" target="_self">
              <div class="services-info-detalhes">
                <div class="info-nome" style="display:none;">
                  <?php
                    if($post):
                      echo(mb_strtoupper(get_the_title($post[0]->ID)));
                    endif;
                  ?>
                </div>
                <div class="info-barra" style="display:none;">
                  <?php
                    if($post):
                      echo('|');
                    endif;
                  ?>
                </div>
                <div class="info-especificacoes-tecnicas" style="display:none;">
                  <?php
                    if($post):
                      $especificacoes_tecnicas = get_post_custom_values('televisao-especificacoes_tecnicas', $post[0]->ID);
                      echo($especificacoes_tecnicas[0]);
                    endif;
                  ?>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
        wp_reset_query();
        }
      }
    ?>

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
