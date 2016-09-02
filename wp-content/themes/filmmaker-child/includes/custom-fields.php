<?php
/*==============================================================================
* CINEMA
==============================================================================*/
  // 0 - INFORMAÇÕES
  register_field_group(array (
      'id' => 'acf_cinema-especificacoes-tecnicas',
      'title' => 'Informações do Projeto de Cinema',
      'fields' => array (
          // Especificações Técnicas
          array (
            'key' => 'field_cinema-especificacoes_tecnicas',
            'label' => 'Especificações Técnicas (máx: 100 caracteres)',
            'name' => 'cinema-especificacoes_tecnicas',
            'type' => 'text',
            'default_value' => null,
            'placeholder' => '1986, Fantasia, Cor, 101min, 16/35mm, Full HD, Reino Unido',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '100'
          ),
          // Crédito
          array (
            'key' => 'field_cinema-credito',
            'label' => 'Crédito (máx: 100 caracteres)',
            'name' => 'cinema-credito',
            'type' => 'text',
            'default_value' => null,
            'placeholder' => 'Direção de Produção',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '100'
          ),
          // Direção
          array (
              'key' => 'field_cinema-direcao',
              'label' => 'Direção (máx: 90 caracteres - use a barra vertical | para separar itens)',
              'name' => 'cinema-direcao',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Jim Henson',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '90'
          ),
          // Produtora
          array (
              'key' => 'field_cinema-produtora',
              'label' => 'Produtora (máx: 100 caracteres - use a barra vertical | para separar itens)',
              'name' => 'cinema-produtora',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Henson Associates, Inc. | Lucasfilm Ltd.',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '100'
          ),
          // Distribuição
          array (
              'key' => 'field_cinema-distribuicao',
              'label' => 'Distribuição (máx: 60 caracteres - use a barra vertical | para separar itens)',
              'name' => 'cinema-distribuicao',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'TriStar Pictures',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '60'
          ),
          // IMDB Link
          array (
              'key' => 'field_cinema-imdb',
              'label' => 'IMDB',
              'name' => 'cinema-imdb',
              'type' => 'url',
              'placeholder' => 'http://www.imdb.com/title/tt0091369',
          ),
          // Vídeo Link
          array (
              'key' => 'field_cinema-video_link',
              'label' => 'Link do Vídeo (Use SOMENTE links do Vimeo ou YouTube)',
              'name' => 'cinema-video_link',
              'type' => 'url',
              'placeholder' => 'https://www.youtube.com/watch?v=_8ZmiqLiZbk',
          ),
          // Highlight 1
          array (
              'key' => 'field_cinema-hightlight-1',
              'label' => 'Link de HightLight 1',
              'name' => 'cinema-hightlight-1',
              'type' => 'url',
              'placeholder' => 'http://www.sundance.org/festivals/sundance-film-festival/link-de-hightlight-1',
          ),
          // Highlight 2
          array (
              'key' => 'field_cinema-hightlight-2',
              'label' => 'Link de HightLight 2',
              'name' => 'cinema-hightlight-2',
              'type' => 'url',
              'placeholder' => 'https://www.canneslions.com/link-de-hightlight-2',
          ),
          // Highlight 3
          array (
              'key' => 'field_cinema-hightlight-3',
              'label' => 'Link de HightLight 3',
              'name' => 'cinema-hightlight-3',
              'type' => 'url',
              'placeholder' => 'https://www.sxsw.com/link-de-hightlight-3',
          ),
          // Ordem Cronológica
          array (
              'key' => 'field_cinema-ordem_cronologica',
              'label' => 'Ordem Cronológica',
              'name' => 'cinema-ordem_cronologica',
              'type' => 'number',
              'placeholder' => '0',
              'prepend' => '',
              'append' => '',
              'min' => '',
              'max' => '',
              'step' => ''
          )
        ),
      'location' => array (
          array (
              array (
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'cinema',
                  'order_no' => 0,
                  'group_no' => 0,
              ),
          ),
      ),
      'options' => array (
          'position' => 'normal',
          'layout' => 'default',
          'hide_on_screen' => array (
          ),
      ),
      'menu_order' => 0,
  ));

  /*==============================================================================
  * TELEVISÃO
  ==============================================================================*/
  // 0 - ESPECIFICAÇÕES TÉCNICAS
  register_field_group(array (
      'id' => 'acf_televisao-especificacoes-tecnicas',
      'title' => 'Especificações Técnicas',
      'fields' => array (
          // Ano [4]
          array (
              'key' => 'field_ano',
              'label' => 'Ano',
              'name' => 'televisao_ano',
              'type' => 'text',
              'default_value' => '',
              'placeholder' => '1986',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '4'
          ),
          // Tipo [48]
          array (
              'key' => 'field_tipo',
              'label' => 'Tipo',
              'name' => 'televisao_tipo',
              'type' => 'text',
              'default_value' => '',
              'placeholder' => 'Aventura/Drama/Fantasia',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '48'
          ),
          // Cor [10]
          array (
              'key' => 'field_cor',
              'label' => 'Cor',
              'name' => 'televisao_cor',
              'type' => 'text',
              'default_value' => '',
              'placeholder' => 'Cor',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '10'
          ),
          // Duração [6]
          array (
              'key' => 'field_duracao',
              'label' => 'Duração',
              'name' => 'televisao_duracao',
              'type' => 'text',
              'default_value' => '',
              'placeholder' => '30min',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '6'
          ),
          // Câmera [26]
          array (
              'key' => 'field_camera',
              'label' => 'Câmera',
              'name' => 'televisao_camera',
              'type' => 'text',
              'default_value' => '',
              'placeholder' => 'N/A',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '26'
          ),
          // Qualidade [40]
          array (
              'key' => 'field_qualidade',
              'label' => 'Qualidade',
              'name' => 'televisao_qualidade',
              'type' => 'text',
              'default_value' => '',
              'placeholder' => 'HD',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '40'
          ),
          // País [40]
          array (
              'key' => 'field_pais',
              'label' => 'País',
              'name' => 'televisao_pais',
              'type' => 'text',
              'default_value' => '',
              'placeholder' => 'Estados Unidos',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '40'
          )
      ),
      'location' => array (
          array (
              array (
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'televisao',
                  'order_no' => 0,
                  'group_no' => 0,
              ),
          ),
      ),
      'options' => array (
          'position' => 'normal',
          'layout' => 'default',
          'hide_on_screen' => array (
          ),
      ),
      'menu_order' => 0,
  ));
  // 1 - CRÉDITO
  register_field_group(array (
      'id' => 'acf_televisao-credito',
      'title' => 'Crédito',
      'fields' => array (
          // Ano [4]
          array (
              'key' => 'field_credito',
              'label' => 'Crédito',
              'name' => 'credito_credito',
              'type' => 'select',
              'choices' => array(
                'atendimento' => 'Atendimento',
                'direcao' => 'Direção',
                'direcao_prod' => 'Direção de Produção',
                'executiva_local' => 'Executiva Local',
                'prod_exec' => 'Produção Executiva',
                'prod_frentes' => 'Produção de Frentes'
              ),
              'allow_null' => 0,
              'multiple' => 1,
              'ui' => 0,
              'ajax' => 0,
              'placeholder' => 'Crédito',
          )
      ),
      'location' => array (
          array (
              array (
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'televisao',
                  'order_no' => 0,
                  'group_no' => 0,
              ),
          ),
      ),
      'options' => array (
          'position' => 'normal',
          'layout' => 'default',
          'hide_on_screen' => array (
          ),
      ),
      'menu_order' => 1,
  ));
  // 2 - PRODUTORA
  register_field_group(array (
      'id' => 'acf_televisao-produtora',
      'title' => 'Produtora',
      'fields' => array (
          // Produtora [60]
          array (
              'key' => 'field_produtora',
              'label' => 'Produtora',
              'name' => 'produtora_produtora',
              'type' => 'text',
              'default_value' => '',
              'placeholder' => 'Hanna-Barbera',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '60'
          )
      ),
      'location' => array (
          array (
              array (
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'televisao',
                  'order_no' => 0,
                  'group_no' => 0,
              ),
          ),
      ),
      'options' => array (
          'position' => 'normal',
          'layout' => 'default',
          'hide_on_screen' => array (
          ),
      ),
      'menu_order' => 2,
  ));
  // 3 - VEICULAÇÃO
  register_field_group(array (
      'id' => 'acf_televisao-veiculacao',
      'title' => 'Veiculação',
      'fields' => array (
          // Produtora [60]
          array (
              'key' => 'field_veiculacao',
              'label' => 'Veiculação',
              'name' => 'veiculacao_veiculacao',
              'type' => 'text',
              'default_value' => '',
              'placeholder' => 'SBT',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '60'
          )
      ),
      'location' => array (
          array (
              array (
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'televisao',
                  'order_no' => 0,
                  'group_no' => 0,
              ),
          ),
      ),
      'options' => array (
          'position' => 'normal',
          'layout' => 'default',
          'hide_on_screen' => array (
          ),
      ),
      'menu_order' => 3,
  ));
  // 4 - IMDB
  register_field_group(array (
      'id' => 'acf_televisao-imdb',
      'title' => 'IMDB',
      'fields' => array (
          // Link IMDB
          array (
              'key' => 'field_imdb',
              'label' => 'IMDB',
              'name' => 'imdb_imdb',
              'type' => 'url',
              'placeholder' => 'http://www.imdb.com/title/tt0203275/',
          )
      ),
      'location' => array (
          array (
              array (
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'televisao',
                  'order_no' => 0,
                  'group_no' => 0,
              ),
          ),
      ),
      'options' => array (
          'position' => 'normal',
          'layout' => 'default',
          'hide_on_screen' => array (
          ),
      ),
      'menu_order' => 4,
  ));
  // 5 - Video Link
  register_field_group(array (
      'id' => 'acf_televisao-video_link',
      'title' => 'Link do Vídeo',
      'fields' => array (
          // Link IMDB
          array (
              'key' => 'field_video_link',
              'label' => 'Link',
              'name' => 'video_link_video_link',
              'type' => 'url',
              'placeholder' => 'https://www.youtube.com/watch?v=Cc_RJEohXOk',
          )
      ),
      'location' => array (
          array (
              array (
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'televisao',
                  'order_no' => 0,
                  'group_no' => 0,
              ),
          ),
      ),
      'options' => array (
          'position' => 'normal',
          'layout' => 'default',
          'hide_on_screen' => array (
          ),
      ),
      'menu_order' => 5,
  ));
  // 6 - Ordem Cronológica
  register_field_group(array (
      'id' => 'acf_televisao-ordem_cronologica',
      'title' => 'Ordem Cronológica',
      'fields' => array (
          // Ordem Cronológica
          array (
              'key' => 'field_ordem_cronologica',
              'label' => 'Ordem Cronológica',
              'name' => 'ordem_cronologica_ordem_cronologica',
              'type' => 'number',
              'placeholder' => '0',
              'prepend' => '',
              'append' => '',
              'min' => '',
              'max' => '',
              'step' => ''
          )
      ),
      'location' => array (
          array (
              array (
                  'param' => 'post_type',
                  'operator' => '==',
                  'value' => 'televisao',
                  'order_no' => 0,
                  'group_no' => 0,
              ),
          ),
      ),
      'options' => array (
          'position' => 'normal',
          'layout' => 'default',
          'hide_on_screen' => array (
          ),
      ),
      'menu_order' => 6,
  ));

  /*==============================================================================
  * PROJETOS
  ==============================================================================*/

?>
