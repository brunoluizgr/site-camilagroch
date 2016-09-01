<div class="clearfix"
  style="<?php
    if(is_page_template('template/template-bio.php'))
      echo('display:none;');
    elseif(is_page_template('template/template-contato.php'))
      echo('display:none;');
  ?>"
></div>
<?php
  if (!function_exists('filmmaker_pagination')) {
    wp_link_pages(array('before' => '<div class="pagination"><strong>'.__('Pages', 'filmmaker').'</strong> : ', 'after' => '</div>', 'next_or_number' => 'number'));
  }
  wp_reset_postdata();
?>

<?php
  if(is_page() || is_single()){
?>
<div class="edit-link"
  style="<?php
    if(is_page_template('template/template-bio.php'))
      echo('display:none;');
    elseif(is_page_template('template/template-contato.php'))
      echo('display:none;');
  ?>"
><?php edit_post_link(esc_html__('Edit','filmmaker').get_post_type(), '<p>', '</p>'); ?>
</div>
<?php
  }
?>
<footer>
<?php
    if (!is_404()) {
        $footer='noop';
        $footer_page   = get_post_meta(get_the_ID(), '_beautheme_footer_custom', TRUE );
        if (filmmaker_GetOption('footer-layouts') != NULL) {
            $footer = filmmaker_GetOption('footer-layouts');
        }
        if ($footer_page) {
            $footer = $footer_page;
        }
        get_template_part( 'template/footer',$footer );
    }
?>
</footer>
<script>
    (function($){
        'use strict';
        new WOW().init();
    })(jQuery);
</script>
<?php wp_footer();?>
</body>
</html>
