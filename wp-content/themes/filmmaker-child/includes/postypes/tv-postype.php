<?php
/*
* POSTYPE do tipo TV
*/
add_action('init', 'tv_post_type', 0);
function tv_post_type() {

    $labels = array(
        'name'                  => _x( 'Televisão', 'Post Type General Name', 'grochfilmes' ),
        'singular_name'         => _x( 'Televisão', 'Post Type Singular Name', 'grochfilmes' ),
        'menu_name'             => __( 'Televisão', 'grochfilmes' ),
        'name_admin_bar'        => __( 'Televisão', 'grochfilmes' ),
        'parent_item_colon'     => __( 'Item de Televisão-Pai:', 'grochfilmes' ),
        'all_items'             => __( 'Todos os Itens de Televisão', 'grochfilmes' ),
        'add_new_item'          => __( 'Adicionar Novo Item de Televisão', 'grochfilmes' ),
        'add_new'               => __( 'Adicionar Novo Item de Televisão', 'grochfilmes' ),
        'new_item'              => __( 'Novo Item de Televisão', 'grochfilmes' ),
        'edit_item'             => __( 'Editar Item de Televisão', 'grochfilmes' ),
        'update_item'           => __( 'Atualizar Item de Televisão', 'grochfilmes' ),
        'view_item'             => __( 'Ver Item de Televisão', 'grochfilmes' ),
        'search_items'          => __( 'Buscar Item de Televisão', 'grochfilmes' ),
        'not_found'             => __( 'Item de Televisão Não Encontrado', 'grochfilmes' ),
        'not_found_in_trash'    => __( 'Item de Televisão Não Encontrado na Lixeira', 'grochfilmes' ),
        'items_list'            => __( 'Lista Itens de Televisão', 'grochfilmes' ),
        'items_list_navigation' => __( 'Lista Itens de Televisão - Navegação', 'grochfilmes' ),
        'filter_items_list'     => __( 'Filtrar Lista Itens de Televisão', 'grochfilmes' ),
    );
    $args = array(
        'label'                 => __( 'Item de Televisão', 'grochfilmes' ),
        'description'           => __( 'Descrição do Item de Televisão', 'grochfilmes' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'author', 'thumbnail', 'page-attributes', 'editor','featured-post' ),
        'taxonomies'            => array( 'tv_category',  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-format-video',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'tv', $args );

}

add_action( 'after_setup_theme', 'tv_category', 0 );
function tv_category() {

    $labels = array(
        'name'                       => _x( 'Categorias', 'Taxonomy General Name', 'grochfilmes' ),
        'singular_name'              => _x( 'Categoria', 'Taxonomy Singular Name', 'grochfilmes' ),
        'menu_name'                  => __( 'Categorias de Televisão', 'grochfilmes' ),
        'all_items'                  => __( 'Todas Categorias', 'grochfilmes' ),
        'parent_item'                => __( 'Categoria Pai', 'grochfilmes' ),
        'parent_item_colon'          => __( 'Categoria Pai:', 'grochfilmes' ),
        'new_item_name'              => __( 'Nova Categoria de Item de Televisão', 'grochfilmes' ),
        'add_new_item'               => __( 'Adicionar Categoria de Item de Televisão', 'grochfilmes' ),
        'edit_item'                  => __( 'Editar Categoria de Item de Televisão', 'grochfilmes' ),
        'update_item'                => __( 'Atualizar Categoria de Item de Televisão', 'grochfilmes' ),
        'view_item'                  => __( 'Ver Categoria de Item de Televisão', 'grochfilmes' ),
        'separate_items_with_commas' => __( 'Separe as categoria de item de Televisão por vírgulas', 'grochfilmes' ),
        'add_or_remove_items'        => __( 'Adicionar ou Remover Categorias de Item de Televisão', 'grochfilmes' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'grochfilmes' ),
        'popular_items'              => __( 'Categoria de Item de Televisão Popular', 'grochfilmes' ),
        'search_items'               => __( 'Buscar Categoria de Item de Televisão', 'grochfilmes' ),
        'not_found'                  => __( 'Categoria de Item de Televisão Não Encontrada', 'grochfilmes' ),
        'items_list'                 => __( 'Lista das Categorias de Item de Televisão', 'grochfilmes' ),
        'items_list_navigation'      => __( 'Navegar pela lista das categorias de item de Televisão', 'grochfilmes' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('tv_category', array('tv'), $args);

}

?>
