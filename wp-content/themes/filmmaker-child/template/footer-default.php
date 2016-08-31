<footer id="grochfilmes-rodape">
  <div class="footer-landing f-home1">
      <?php if (filmmaker_GetOption('footer-subcrible') == 2){ ?>
      <div class="subcribe">
          <div class="ft-subcri2">
              <form id="beau-subcribe" action="#"  method="get">
                  <input type="text" class="control-form" name="email" id="email" value="" placeholder="<?php echo filmmaker_GetOption('subcribe-footer'); ?>">
                  <button class="btn btn-default" type="submit" >
                      <i class="fa fa-paper-plane"></i></button>
              </form>
          </div>
          <div class="clearfix"></div>

          <div class="col-lg-8 col-lg-offset-2 col-sm-12">
              <span class="subcribe-message"></span>
              <div class="txtletter sub-text">
                  <?php echo filmmaker_GetOption('sub-footer-text'); ?>
              </div>
          </div>
      </div>
      <?php } ?>
      <div class="bottom-footer">
          <div class="container">
              <div class="landing-social-author">
                  <?php get_template_part('template/social','author' );?>
              </div>
          </div>
          <div class="container-fluid">
            <div class="row text-center">
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
  </div>
</div>
