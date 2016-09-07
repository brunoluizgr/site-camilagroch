<?php
/*
* Template Name: [GrochFilmes] Projetos
*/
  get_header();
?>

<section id="grochfilmes-projetos" class="container-fluid conteudo-site">
  <div class="row">
    <div class="col-lg-offset-1 col-lg-10">
      <p class="text-center">
        <?php
          while (have_posts()): the_post();
            the_content();
          endwhile;
          wp_reset_query();
        ?>
      </p>
    </div>
    <div class="row col-lg-12">

    </div>
  </div>
</section>
<?php wp_reset_postdata();
    get_footer();
?>
