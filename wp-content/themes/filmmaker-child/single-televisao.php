<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
  <?php
    global $post;

    $tipo = get_post_type($post->id);
    $categorias = get_the_terms($post->id, 'televisao_category');
    $bg = 'url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).')';
  ?>
<section id="grochfilmes-service-<?php echo($tipo) ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 margin-t-7 margin-b-4">
        <h1 class="televisao-titulo"><?php the_title();?></h1>
        <?php
          if(get_field('televisao-especificacoes_tecnicas') != '')
          {
        ?>
        <h4 class="televisao-especificacoes-tecnicas">
          <?php echo(get_field('televisao-especificacoes_tecnicas')); ?>
        </h4>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="televisao-slider">
        <?php
          $slider = 'interna-televisao-'.$post->post_name;
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
        if(get_field('televisao-credito') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="televisao-credito">
          <?php echo(get_field('televisao-credito')); ?>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Crédito -->
      <!-- Inicio da Seção Direção -->
      <?php
        if(get_field('televisao-veiculacao') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="televisao-veiculacao">
          <span class="televisao-campo-titulo"><?php _e('Veiculação | ', 'grochfilmes'); ?></span>
          <span class="televisao-campo-resposta"><?php echo(get_field('televisao-veiculacao')); ?></span>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Direção -->
      <!-- Inicio da Seção Produtora -->
      <?php
        if(get_field('televisao-produtora') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="televisao-produtora">
          <span class="televisao-campo-titulo"><?php _e('Produtora | ', 'grochfilmes'); ?></span>
          <span class="televisao-campo-resposta"><?php echo(get_field('televisao-produtora')); ?></span>
        </p>
      </div>
      <?php
        }
      ?>
      <!-- Fim da Seção Produtora -->
      <!-- Inicio da Seção IMDB -->
      <?php
        if(get_field('televisao-imdb') != '')
        {
      ?>
      <div class="col-lg-12">
        <p class="televisao-imdb">
          <span class="televisao-campo-titulo"><?php _e('IMDB | ', 'grochfilmes'); ?></span>
          <span class="televisao-link">
            <a href="<?php echo(get_field('televisao-imdb')) ?>" target="_blank" alt="<?php the_title() . _e(' no IMDB', 'grochfilmes');?>" title="<?php the_title() . _e(' no IMDB', 'grochfilmes')?>">
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
        if(get_field('televisao-hightlight-1') != '' || get_field('televisao-hightlight-2') != '' || get_field('televisao-hightlight-3') != '')
        {
      ?>
      <div class="col-lg-12">
        <?php/*
        <p class="televisao-hightlights">
          <span class="televisao-campo-titulo"><?php _e('Hightlights', 'grochfilmes'); ?></span>
        </p>
        */?>
        <p class="hightlight">
          <?php echo(get_field('televisao-hightlight-1')) ?>
        </p>

        <p class="hightlight">
          <?php echo(get_field('televisao-hightlight-2')) ?>
        </p>
        <p class="hightlight">
          <?php echo(get_field('televisao-hightlight-3')) ?>
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
          <span class="televisao-link-retorno">
            <?php _e('<< SERVICES', 'grochfilmes' )?>
          </span>
        </a>
      </div>
    </div>
    <!-- Fim da Seção Link de Retorno -->
    </div>
  </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
