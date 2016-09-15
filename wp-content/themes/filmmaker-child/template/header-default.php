<?php
    $logo = $logo_url = '';
    $logo_page_setting = get_post_meta( get_the_ID(), '_beautheme_header_main_logo', TRUE );
    $logo_url= get_stylesheet_directory_uri().'/assets/images/svg/logotipo-grochfilmes.svg';

    if ($logo_page_setting) {
        $logo_url = $logo_page_setting;
    }
?>
<nav id="menu-grochfilmes" class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="menu-olay"></div>
    <div id="secao-logo" class="row">
      <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-2">
        <a href="<?php echo esc_url(home_url('/')) ?>" title="<?php printf('%s', bloginfo('name'))?>" alt="<?php esc_html_e('LOGO GROCH FILMES','grochfilmes'); ?>">
            <img class="img-responsive" src="<?php echo($logo_url) ?>"/>
        </a>
      </div>
      <div class="hidden-xs hidden-sm col-lg-offset-7 col-lg-1">
        <div class="text-right">
          <?php echo('<div class="searchbox">');
            if (filmmaker_GetOption('enable_searchbar')) {
                echo(get_search_form());
            }
          echo('</div>');
          ?>
        </div>
      </div>
    </div>

    <div id="secao-navs" class="container-fluid">
        <div class="menu-default">
          <div id="menu-navegacao" class="row">
            <nav class="col-sm-6 col-sm-offset-3 col-lg-offset-3 col-lg-6">
                <?php
                    $nav_menu = 'main-menu';
                    if (has_nav_menu($nav_menu)) {
                      wp_nav_menu(
                        array(
                            'theme_location' => $nav_menu,
                            'depth'          => 3,
                            'menu_class'     => 'active-menu-default',
                            'menu_id'        => 'main-nav',
                            'container'      => '',
                        )
                      );
                    }else{
                      wp_nav_menu(
                        array(
                            'depth'          => 3,
                            'menu'           => 'main-menu',
                            'menu_class'     => 'active-menu-default',
                            'menu_id'        => 'main-nav',
                            'container'      => '',
                        )
                      );
                    }
                ?>
              </nav>
          </div>
        </div>
    </div>
  </div>
</nav>
