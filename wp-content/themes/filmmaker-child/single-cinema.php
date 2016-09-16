<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
  <?php
    global $post;

    $tipo = get_post_type($post->id);
    $categorias = get_the_terms($post->id, 'cinema_category');
    $bg = 'url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).')';
  ?>
<section id="grochfilmes-service-<?php echo($tipo) ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 margin-t-7 margin-b-4">
        <h1 class="cinema-titulo"><?php the_title();?></h1>
        <?php
          if(get_field('cinema-especificacoes_tecnicas') != '')
          {
        ?>
        <h4 class="cinema-especificacoes-tecnicas">
          <?php echo(get_field('cinema-especificacoes_tecnicas')); ?>
        </h4>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="cinema-slider">
        <?php
          $slider = 'interna-cinema-'.$post->post_name;
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
      <?php
        if(get_field('cinema-credito') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="cinema-credito">
          <?php echo(get_field('cinema-credito')); ?>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Crédito -->
      <!-- Inicio da Seção Direção -->
      <?php
        if(get_field('cinema-direcao') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="cinema-direcao">
          <span class="cinema-campo-titulo"><?php _e('Direção | ', 'grochfilmes'); ?></span>
          <span class="cinema-campo-resposta"><?php echo(get_field('cinema-direcao')); ?></span>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Direção -->
      <!-- Inicio da Seção Produtora -->
      <?php
        if(get_field('cinema-produtora') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="cinema-produtora">
          <span class="cinema-campo-titulo"><?php _e('Produtora | ', 'grochfilmes'); ?></span>
          <span class="cinema-campo-resposta"><?php echo(get_field('cinema-produtora')); ?></span>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Produtora -->
      <!-- Inicio da Seção Distribuição -->
      <?php
        if(get_field('cinema-distribuicao') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="cinema-distribuicao">
          <span class="cinema-campo-titulo"><?php _e('Distribuidora | ', 'grochfilmes'); ?></span>
          <span class="cinema-campo-resposta"><?php echo(get_field('cinema-distribuicao')); ?></span>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Distribuição -->
      <!-- Inicio da Seção IMDB -->
      <?php
        if(get_field('cinema-imdb') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="cinema-imdb">
          <span class="cinema-campo-titulo"><?php _e('IMDB | ', 'grochfilmes'); ?></span>
          <span class="cinema-link">
            <a href="<?php echo(get_field('cinema-imdb')) ?>" target="_blank" alt="<?php the_title() . _e(' no IMDB', 'grochfilmes');?>" title="<?php the_title() . _e(' no IMDB', 'grochfilmes')?>">
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
        if(get_field('cinema-hightlight-1') != '' || get_field('cinema-hightlight-2') != '' || get_field('cinema-hightlight-3') != '' || get_field('cinema-hightlight-4') != '' || get_field('cinema-hightlight-5') != '' || get_field('cinema-hightlight-6') != '')
        {
      ?>
      <div class="col-lg-12">
        <?php/*
        <p class="cinema-highlights">
          <span class="cinema-campo-titulo"><?php _e('Hightlights', 'grochfilmes'); ?></span>
        </p>
        */?>
        <p class="hightlight">
          <?php echo(get_field('cinema-hightlight-1')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('cinema-hightlight-2')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('cinema-hightlight-3')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('cinema-hightlight-4')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('cinema-hightlight-5')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('cinema-hightlight-6')) ?>
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
        <a href="<?php echo(site_url('/services/')) ?>" target="_self">
          <span class="cinema-link-retorno">
            <?php _e('<< SERVICES', 'grochfilmes' )?>
          </span>
        </a>
      </div>
    </div>
    <!-- Fim da Seção Link de Retorno -->
  </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
