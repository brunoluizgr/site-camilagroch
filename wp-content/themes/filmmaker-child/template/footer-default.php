<footer id="grochfilmes-rodape">
  <div class="container-fluid margin-b-2">
    <div class="row box-copyright"></div>
    <div class="row text-center margin-t-1">
      <span class="text-copyright">
          <?php
              if(filmmaker_GetOption('filmmaker-footer-text')){
                   echo filmmaker_GetOption('filmmaker-footer-text');
              }else{
                  esc_html_e(' &#64; 2016 GROCH FILMES. Todos os direitos reservados.','grochfilmes');
              }
          ?>
      </span>
    </div>
  </div>
</div>
