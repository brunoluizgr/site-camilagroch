<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
  <?php
    global $post;

    $tipo = get_post_type($post->id);
    $categorias = get_the_terms($post->id, 'projeto_category');
    $bg = 'url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).')';
  ?>
<section id="grochfilmes-<?php echo($tipo) ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 margin-t-7 margin-b-4">
        <h1 class="projeto-titulo"><?php the_title();?></h1>
        <?php if(get_field('projeto-especificacoes_tecnicas') != '')
          {
        ?>
        <h4 class="projeto-especificacoes-tecnicas">
          <?php echo(get_field('projeto-especificacoes_tecnicas')); ?>
        </h4>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="projeto-slider">
        <?php
          $slider = 'interna-projeto-'.$post->post_name;
          if(masterslider($slider)){
            masterslider($slider);
          }
          else {
            $img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            echo('<img style="display:none;" class="col-lg-12 img-responsive" src="'.$img.'"></img>');
          }
        ?>
      </div>
    </div>
  </div>
  <div class="container margin-t-4">
    <div class="row margin-b-4">
      <!-- Inicio da Seção Crédito -->
      <?php if(get_field('projeto-credito') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="projeto-credito">
          <?php echo(get_field('projeto-credito')); ?>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Crédito -->
      <!-- Inicio da Seção Direção -->
      <?php if(get_field('projeto-direcao') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="projeto-direcao">
          <span class="projeto-campo-titulo"><?php _e('Direção | ', 'grochfilmes'); ?></span>
          <span class="projeto-campo-resposta"><?php echo(get_field('projeto-direcao')); ?></span>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Direção -->
      <!-- Inicio da Seção Produtora -->
      <?php if(get_field('projeto-produtora') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="projeto-produtora">
          <span class="projeto-campo-titulo"><?php _e('Produtora | ', 'grochfilmes'); ?></span>
          <span class="projeto-campo-resposta"><?php echo(get_field('projeto-produtora')); ?></span>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Produtora -->
      <!-- Inicio da Seção Distribuição -->
      <?php if(get_field('projeto-distribuicao') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="projeto-distribuicao">
          <span class="projeto-campo-titulo"><?php _e('Distribuidora | ', 'grochfilmes'); ?></span>
          <span class="projeto-campo-resposta"><?php echo(get_field('projeto-distribuicao')); ?></span>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Distribuição -->
      <!-- Inicio da Seção SINOPSE -->
      <?php if(get_field('projeto-sinopse') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="projeto-sinopse">
          <span class="projeto-campo-titulo"><?php _e('Sinopse | ', 'grochfilmes'); ?></span>
          <span class="projeto-campo-resposta"><?php echo(get_field('projeto-sinopse')); ?></span>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Sinopse -->
      <!-- Inicio da Seção IMDB -->
      <?php if(get_field('projeto-imdb') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="projeto-imdb">
          <span class="projeto-campo-titulo"><?php _e('IMDB | ', 'grochfilmes'); ?></span>
          <span class="projeto-link">
            <a href="<?php echo(get_field('projeto-imdb')) ?>" target="_blank" alt="<?php the_title() . _e(' no IMDB', 'grochfilmes');?>" title="<?php the_title() . _e(' no IMDB', 'grochfilmes')?>">
              <?php the_title();?>
            </a>
          </span>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção IMDB -->
      <!-- Inicio da Seção HIGHLIGHTS -->
      <?php
        if(get_field('projeto-hightlight-1') != '' || get_field('projeto-hightlight-2') != '' || get_field('projeto-hightlight-3') != '' || get_field('projeto-hightlight-4') != '' || get_field('projeto-hightlight-5') != '' || get_field('projeto-hightlight-6') != '')
        {
      ?>
      <div class="col-lg-12">
        <?php/*
        <p class="projeto-hightlights">
          <span class="projeto-campo-titulo"><?php _e('Hightlights', 'grochfilmes'); ?></span>
        </p>
        */?>
        <p class="hightlight">
          <?php echo(get_field('projeto-hightlight-1')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('projeto-hightlight-2')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('projeto-hightlight-3')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('projeto-hightlight-4')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('projeto-hightlight-5')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('projeto-hightlight-6')) ?>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção HIGHLIGHTS -->
    </div>
    <!-- Seção Link de Retorno -->
    <div class="row margin-t-2">
      <div class="col-lg-12">
        <a href="<?php echo(site_url('/projetos/')) ?>" target="_self">
          <span class="projeto-link-retorno">
            <?php _e('<< PROJETOS', 'grochfilmes' )?>
          </span>
        </a>
      </div>
    </div>
    <!-- Fim da Seção Link de Retorno -->
  </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
