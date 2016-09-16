<?php
/*==============================================================================
* CINEMA
==============================================================================*/
  // 0 - INFORMAÇÕES
  register_field_group(array (
      'id' => 'acf_cinema-informacoes_principais',
      'title' => 'Informações do Projeto de Cinema',
      'fields' => array (
          // Especificações Técnicas
          array (
            'key' => 'field_cinema-especificacoes_tecnicas',
            'label' => 'Especificações Técnicas (máx: 100 caracteres - use a vírgula \',\' para separar itens)',
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
              'label' => 'Direção (máx: 90 caracteres - use a barra vertical \'|\' para separar itens)',
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
              'label' => 'Produtora (máx: 100 caracteres - use a barra vertical \'|\' para separar itens)',
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
              'label' => 'Distribuição (máx: 60 caracteres - use a barra vertical \'|\' para separar itens)',
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
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'https://www.youtube.com/watch?v=_8ZmiqLiZbk',
          ),
          // Highlight 1
          array (
              'key' => 'field_cinema-hightlight-1',
              'label' => 'Link de HightLight 1',
              'name' => 'cinema-hightlight-1',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Rio Intl Film Festival 2006 - Melhor Filme',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 2
          array (
              'key' => 'field_cinema-hightlight-2',
              'label' => 'Link de HightLight 2',
              'name' => 'cinema-hightlight-2',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Prêmio Especial Jurí - Melhor Ator',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 3
          array (
              'key' => 'field_cinema-hightlight-3',
              'label' => 'Link de HightLight 3',
              'name' => 'cinema-hightlight-3',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Mostra de Cinema de SP 2006 - Melhor Filme, Prêmio da Crítica',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 4
          array (
              'key' => 'field_cinema-hightlight-4',
              'label' => 'Link de HightLight 4',
              'name' => 'cinema-hightlight-4',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Oscar 2018 - Prêmio de Ator Revelação',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 3
          array (
              'key' => 'field_cinema-hightlight-5',
              'label' => 'Link de HightLight 5',
              'name' => 'cinema-hightlight-5',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Prêmio Locomotiva 2018 - Atores em Construção',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 3
          array (
              'key' => 'field_cinema-hightlight-6',
              'label' => 'Link de HightLight 6',
              'name' => 'cinema-hightlight-6',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Prêmio CineShot - Melhor Longa Sci-Fi',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Ordem Importância
          array (
              'key' => 'field_cinema-ordem_importancia',
              'label' => 'Ordem Importância',
              'name' => 'cinema-ordem_importancia',
              'type' => 'number',
              'placeholder' => '0',
              'prepend' => '',
              'append' => '',
              'min' => '',
              'max' => '',
              'step' => ''
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
  // 0 - INFORMAÇÕES
  register_field_group(array (
      'id' => 'acf_televisao-informacoes_principais',
      'title' => 'Informações do Projeto de Televisão',
      'fields' => array (
          // Especificações Técnicas
          array (
            'key' => 'field_televisao-especificacoes_tecnicas',
            'label' => 'Especificações Técnicas (máx: 100 caracteres - use a vírgula \',\' para separar itens)',
            'name' => 'televisao-especificacoes_tecnicas',
            'type' => 'text',
            'default_value' => null,
            'placeholder' => '1986, Aventura/Drama/Fantasia, Cor, 30min, HD, Estados Unidos',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '100'
          ),
          // Crédito
          array (
            'key' => 'field_televisao-credito',
            'label' => 'Crédito (máx: 100 caracteres)',
            'name' => 'televisao-credito',
            'type' => 'text',
            'default_value' => null,
            'placeholder' => 'Direção Executiva',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '100'
          ),
          // Direção
          array (
              'key' => 'field_televisao-direcao',
              'label' => 'Direção (máx: 90 caracteres - use a barra vertical \'|\' para separar itens)',
              'name' => 'televisao-direcao',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Yudi Tamashiro',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '90'
          ),
          // Produtora
          array (
              'key' => 'field_televisao_produtora',
              'label' => 'Produtora (máx: 90 caracteres - use a barra vertical \'|\' para separar itens)',
              'name' => 'televisao-produtora',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Hanna-Barbera',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '90'
          ),
          // Veiculação
          array (
              'key' => 'field_televisao-veiculacao',
              'label' => 'Veiculação (máx: 60 caracteres - use a barra vertical \'|\' para separar itens)',
              'name' => 'televisao-veiculacao',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'SBT',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '60'
          ),
          // IMDB Link
          array (
              'key' => 'field_televisao-imdb',
              'label' => 'IMDB',
              'name' => 'televisao-imdb',
              'type' => 'url',
              'placeholder' => 'http://www.imdb.com/title/tt0203275',
          ),
          // Vídeo Link
          array (
              'key' => 'field_televisao-video_link',
              'label' => 'Link do Vídeo (Use SOMENTE links do Vimeo ou YouTube)',
              'name' => 'televisao-video_link',
              'type' => 'url',
              'placeholder' => 'https://www.youtube.com/watch?v=Cc_RJEohXOk',
          ),
          // Highlight 1
          array (
              'key' => 'field_televisao-hightlight-1',
              'label' => 'Link de HightLight 1',
              'name' => 'televisao-hightlight-1',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Prêmio Multishow - Melhor Programa Infantil',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 2
          array (
              'key' => 'field_televisao-hightlight-2',
              'label' => 'Link de HightLight 2',
              'name' => 'televisao-hightlight-2',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Prêmio Tangerina - Melhor Programa Culinário',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 3
          array (
              'key' => 'field_televisao-hightlight-3',
              'label' => 'Link de HightLight 3',
              'name' => 'televisao-hightlight-3',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Alura Festival 2050 - Best Talk-Show',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 4
          array (
              'key' => 'field_televisao-hightlight-4',
              'label' => 'Link de HightLight 4',
              'name' => 'televisao-hightlight-4',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Festival Globo - Melhor Pocket-Show',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 5
          array (
              'key' => 'field_televisao-hightlight-5',
              'label' => 'Link de HightLight 5',
              'name' => 'televisao-hightlight-5',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Mostra TVCultura de Televisão - Melhor Programa',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 6
          array (
              'key' => 'field_televisao-hightlight-6',
              'label' => 'Link de HightLight 6',
              'name' => 'televisao-hightlight-6',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Mostra SBT - Melhor Programa de Domingo',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Ordem Importância
          array (
              'key' => 'field_televisao-ordem_importancia',
              'label' => 'Ordem Importância',
              'name' => 'televisao-ordem_importancia',
              'type' => 'number',
              'placeholder' => '0',
              'prepend' => '',
              'append' => '',
              'min' => '',
              'max' => '',
              'step' => ''
          ),
          // Ordem Cronológica
          array (
              'key' => 'field_televisao-ordem_cronologica',
              'label' => 'Ordem Cronológica',
              'name' => 'televisao-ordem_cronologica',
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
      'menu_order' => 0,
  ));

  /*==============================================================================
  * PROJETOS
  ==============================================================================*/
  // 0 - INFORMAÇÕES
  register_field_group(array (
      'id' => 'acf_projetos-informacoes_principais',
      'title' => 'Informações do Projeto',
      'fields' => array (
          // Especificações Técnicas
          array (
            'key' => 'field_projeto-especificacoes_tecnicas',
            'label' => 'Especificações Técnicas (máx: 100 caracteres - use a vírgula \',\' para separar itens)',
            'name' => 'projeto-especificacoes_tecnicas',
            'type' => 'text',
            'default_value' => null,
            'placeholder' => '1983, Aventura/Fantasia, Cor, 24min, HD, Japão',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '100'
          ),
          // Direção
          array (
              'key' => 'field_projeto-direcao',
              'label' => 'Direção (máx: 90 caracteres - use a barra vertical \'|\' para separar itens)',
              'name' => 'projeto-direcao',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Dave Arneson',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '90'
          ),
          // Produtora
          array (
              'key' => 'field_projeto_produtora',
              'label' => 'Produtora (máx: 90 caracteres - use a barra vertical \'|\' para separar itens)',
              'name' => 'projeto-produtora',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Bob Richardson | Karl Geurs',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '90'
          ),
          // Veiculação
          array (
              'key' => 'projeto-distribuicao',
              'label' => 'Distribuição (máx: 60 caracteres - use a barra vertical \'|\' para separar itens)',
              'name' => 'projeto-distribuicao',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Rede Globo',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '60'
          ),
          // Sinopse
          array (
            'key' => 'field_projeto-sinopse',
            'label' => 'Sinopse',
            'name' => 'projeto-sinopse',
            'type' => 'textarea',
            'default_value' => null,
            'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae volutpat enim, ut fermentum nulla. Mauris felis elit, consequat rhoncus enim non, posuere scelerisque nisi. Vestibulum hendrerit pellentesque purus, et mattis dolor sollicitudin nec. Etiam mollis lectus et libero venenatis eleifend. Sed porttitor pharetra tortor nec euismod. Quisque in maximus lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin tristique nulla sed euismod aliquet. Fusce finibus massa sit amet lacus ultrices fermentum. Aenean porta euismod finibus. Cras vitae nunc dolor. Fusce ut tincidunt ligula, ut egestas enim.',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => ''
          ),
          // IMDB Link
          array (
              'key' => 'field_projeto-imdb',
              'label' => 'IMDB',
              'name' => 'projeto-imdb',
              'type' => 'url',
              'placeholder' => 'http://www.imdb.com/title/tt0085011',
          ),
          // Vídeo Link
          array (
              'key' => 'field_projeto-video_link',
              'label' => 'Link do Vídeo (Use SOMENTE links do Vimeo ou YouTube)',
              'name' => 'projeto-video_link',
              'type' => 'url',
              'placeholder' => 'https://www.youtube.com/watch?v=b2ICBJu3PLs',
          ),
          // Highlight 1
          array (
              'key' => 'field_projeto-hightlight-1',
              'label' => 'Link de HightLight 1',
              'name' => 'projeto-hightlight-1',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => '32a Bienal de São Paulo',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 2
          array (
              'key' => 'field_projeto-hightlight-2',
              'label' => 'Link de HightLight 2',
              'name' => 'projeto-hightlight-2',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Ibermedia 2015',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 3
          array (
              'key' => 'field_projeto-hightlight-3',
              'label' => 'Link de HightLight 3',
              'name' => 'projeto-hightlight-3',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => 'Edital de Co-Produção Brasil Argentina 2013 FSA',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 4
          array (
              'key' => 'field_projeto-hightlight-4',
              'label' => 'Link de HightLight 4',
              'name' => 'projeto-hightlight-4',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => '9º Rencontres Internationales du Documentaire de Montréal',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 5
          array (
              'key' => 'field_projeto-hightlight-5',
              'label' => 'Link de HightLight 5',
              'name' => 'projeto-hightlight-5',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => '41º Karlovy Vary International Film Festival',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Highlight 6
          array (
              'key' => 'field_projeto-hightlight-6',
              'label' => 'Link de HightLight 6',
              'name' => 'projeto-hightlight-6',
              'type' => 'text',
              'default_value' => null,
              'placeholder' => '21º Guadalajara International Film Festival',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html'
          ),
          // Ordem Importância
          array (
              'key' => 'field_projeto-ordem_importancia',
              'label' => 'Ordem Importância',
              'name' => 'projeto-ordem_importancia',
              'type' => 'number',
              'placeholder' => '0',
              'prepend' => '',
              'append' => '',
              'min' => '',
              'max' => '',
              'step' => ''
          ),
          // Ordem Cronológica
          array (
              'key' => 'field_projeto-ordem_cronologica',
              'label' => 'Ordem Cronológica',
              'name' => 'projeto-ordem_cronologica',
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
                  'value' => 'projeto',
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
?>
