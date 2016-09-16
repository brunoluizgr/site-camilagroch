<?php
/*
* Template Name: [GrochFilmes] Projetos
*/
  get_header();
?>

<section id="grochfilmes-projetos" class="container-fluid conteudo-site">

  <div id="grochfilmes-projetos-titulo" class="container">
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

  <div class="row col-lg-12">
    <div id="projetos-col-1" class="col-sm-6 col-lg-6">
      <?php
        for($i=1; $i<=5; $i++)
        {
        $post = get_posts(array(
          'numberposts'	=> 1,
          'post_status'      => 'publish',
          'post_type'		=> 'projeto',
          'meta_key'		=> 'projeto-ordem_importancia',
          'meta_value'	=> $i
        ));
        if($post):
          $bg = 'url('.wp_get_attachment_url(get_post_thumbnail_id($post[0]->ID)).')';
          $slug = basename(get_permalink($post[0]->ID));
          $title = get_the_title($post[0]->ID);
          $direcao = get_field('projeto-direcao', $post[0]->ID);
        endif;
        if($i<=3):
      ?>
        <a class="link-projeto-<?php echo($slug) ?>" href="<?php echo(get_post_permalink($post[0]->ID)); ?>" target="_self">
          <div id="projetos-row-img-<?php echo($i) ?>" class="row img-projeto" style="background-image: <?php echo($bg) ?>">
            <div id="projetos-row-title-<?php echo($i) ?>" class="title-projeto">
              <?php echo($title); ?>
              <span id="projetos-row-direcao-<?php echo($i) ?>" class="direcao-projeto">
                <?php _e('Direção: ', 'grochfilmes')?><?php echo($direcao); ?>
              </span>
            </div>
          </div>
        </a>
      <?php
        endif;
        if($i>3):
      ?>
    </div>
    <div id="projetos-col-2" class="col-sm-6 col-lg-6">
        <a class="link-projeto-<?php echo($slug) ?>" href="<?php echo(get_post_permalink($post[0]->ID)); ?>" target="_self">
          <div id="projetos-row-img-<?php echo($i) ?>" class="row img-projeto" style="background-image: <?php echo($bg) ?>">
            <div id="projetos-row-title-<?php echo($i) ?>" class="title-projeto">
              <?php echo($title); ?>
              <span id="projetos-row-direcao-<?php echo($i) ?>" class="direcao-projeto">
                <?php _e('Direção: ', 'grochfilmes')?><?php echo($direcao); ?>
              </span>
            </div>
          </div>
        </a>
      <?php
        endif;
      }
      ?>
    </div>
  </div>
</section>
<?php wp_reset_postdata();
    get_footer();
?>
