<?php
/*
* Template Name: [GrochFilmes] Services
*/
  get_header();
?>

<section id="grochfilmes-services" class="container conteudo-site">
  <div class="row">
    <div class="col-lg-12">
      <p class="text-center">
        <?php esc_html_e('Os projetos desta área foram feitos por renomadas companhias e diretores do Brasil, para os quais tivemos o prazer de prestar serviços de produção executiva e/ou direção de produção. Sem propriedade, através de Camila Groch como produtora freelancer, mas com o mesmo compromisso e envolvimento dedicados aos projetos próprios!','grochfilmes') ?>
      </p>
    </div>
  </div>
</section>
 <?php while(have_posts()) : the_post();
    the_content();
endwhile;
?>
<?php wp_reset_postdata();
    get_footer();
?>
