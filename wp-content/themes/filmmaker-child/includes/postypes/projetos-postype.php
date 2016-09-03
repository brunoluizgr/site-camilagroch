<?php
/*
* POSTYPE do tipo PROJETO
*/
add_action('init', 'projeto_post_type', 0);
function projeto_post_type() {

    $labels = array(
        'name'                  => _x( 'Projetos', 'Post Type General Name', 'grochfilmes' ),
        'singular_name'         => _x( 'Projeto', 'Post Type Singular Name', 'grochfilmes' ),
        'menu_name'             => __( 'Projetos', 'grochfilmes' ),
        'name_admin_bar'        => __( 'Projeto', 'grochfilmes' ),
        'parent_item_colon'     => __( 'Item de Projeto-Pai:', 'grochfilmes' ),
        'all_items'             => __( 'Todos os Itens de Projeto', 'grochfilmes' ),
        'add_new_item'          => __( 'Adicionar Novo Item de Projeto', 'grochfilmes' ),
        'add_new'               => __( 'Adicionar Novo Item de Projeto', 'grochfilmes' ),
        'new_item'              => __( 'Novo Item de Projeto', 'grochfilmes' ),
        'edit_item'             => __( 'Editar Item de Projeto', 'grochfilmes' ),
        'update_item'           => __( 'Atualizar Item de Projeto', 'grochfilmes' ),
        'view_item'             => __( 'Ver Item de Projeto', 'grochfilmes' ),
        'search_items'          => __( 'Buscar Item de Projeto', 'grochfilmes' ),
        'not_found'             => __( 'Nenhum item de projeto encontrado.', 'grochfilmes' ),
        'not_found_in_trash'    => __( 'Nenhum item de projeto encontrado na Lixeira.', 'grochfilmes' ),
        'items_list'            => __( 'Lista Itens de Projeto', 'grochfilmes' ),
        'items_list_navigation' => __( 'Lista Itens de Projeto - Navegação', 'grochfilmes' ),
        'filter_items_list'     => __( 'Filtrar Lista Itens de Projeto', 'grochfilmes' ),
    );
    $args = array(
        'label'                 => __( 'Item de Projeto', 'grochfilmes' ),
        'description'           => __( 'Descrição do Item de Projeto', 'grochfilmes' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail' ),
        'taxonomies'            => array( 'projeto_category',  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-star-filled',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('projeto', $args);

}

add_action('after_setup_theme', 'projeto_category', 0);
function projeto_category() {

    $labels = array(
        'name'                       => _x( 'Categorias', 'Taxonomy General Name', 'grochfilmes' ),
        'singular_name'              => _x( 'Categoria', 'Taxonomy Singular Name', 'grochfilmes' ),
        'menu_name'                  => __( 'Categorias de Projetos', 'grochfilmes' ),
        'all_items'                  => __( 'Todas Categorias', 'grochfilmes' ),
        'parent_item'                => __( 'Categoria Pai', 'grochfilmes' ),
        'parent_item_colon'          => __( 'Categoria Pai:', 'grochfilmes' ),
        'new_item_name'              => __( 'Nova Categoria de Item de Projeto', 'grochfilmes' ),
        'add_new_item'               => __( 'Adicionar Categoria de Item de Projeto', 'grochfilmes' ),
        'edit_item'                  => __( 'Editar Categoria de Item de Projeto', 'grochfilmes' ),
        'update_item'                => __( 'Atualizar Categoria de Item de Projeto', 'grochfilmes' ),
        'view_item'                  => __( 'Ver Categoria de Item de Projeto', 'grochfilmes' ),
        'separate_items_with_commas' => __( 'Separe as categoria de item de Projeto por vírgulas', 'grochfilmes' ),
        'add_or_remove_items'        => __( 'Adicionar ou Remover Categorias de Item de Projeto', 'grochfilmes' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'grochfilmes' ),
        'popular_items'              => __( 'Categoria de Item de Projeto Popular', 'grochfilmes' ),
        'search_items'               => __( 'Buscar Categoria de Item de Projeto', 'grochfilmes' ),
        'not_found'                  => __( 'Categoria de Item de Projeto Não Encontrada', 'grochfilmes' ),
        'items_list'                 => __( 'Lista das Categorias de Item de Projeto', 'grochfilmes' ),
        'items_list_navigation'      => __( 'Navegar pela lista das categorias de item de Projeto', 'grochfilmes' ),
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
    register_taxonomy( 'projeto_category', array( 'projeto' ), $args );

}

?>
