<?php
/*
* POSTYPE do tipo CINEMA
*/
add_action('init', 'cinema_post_type', 0);
function cinema_post_type() {

    $labels = array(
        'name'                  => _x( 'Cinema', 'Post Type General Name', 'grochfilmes' ),
        'singular_name'         => _x( 'cinema', 'Post Type Singular Name', 'grochfilmes' ),
        'menu_name'             => __( 'Cinema', 'grochfilmes' ),
        'name_admin_bar'        => __( 'Cinema', 'grochfilmes' ),
        'parent_item_colon'     => __( 'Item de Cinema-Pai:', 'grochfilmes' ),
        'all_items'             => __( 'Todos os Itens de Cinema', 'grochfilmes' ),
        'add_new_item'          => __( 'Adicionar Novo Item de Cinema', 'grochfilmes' ),
        'add_new'               => __( 'Adicionar Novo Item de Cinema', 'grochfilmes' ),
        'new_item'              => __( 'Novo Item de Cinema', 'grochfilmes' ),
        'edit_item'             => __( 'Editar Item de Cinema', 'grochfilmes' ),
        'update_item'           => __( 'Atualizar Item de Cinema', 'grochfilmes' ),
        'view_item'             => __( 'Ver Item de Cinema', 'grochfilmes' ),
        'search_items'          => __( 'Buscar Item de Cinema', 'grochfilmes' ),
        'not_found'             => __( 'Nenhum item de cinema encontrado.', 'grochfilmes' ),
        'not_found_in_trash'    => __( 'Nenhum item de cinema encontrado na Lixeira.', 'grochfilmes' ),
        'items_list'            => __( 'Lista Itens de Cinema', 'grochfilmes' ),
        'items_list_navigation' => __( 'Lista Itens de Cinema - Navegação', 'grochfilmes' ),
        'filter_items_list'     => __( 'Filtrar Lista Itens de Cinema', 'grochfilmes' ),
    );
    $args = array(
        'label'                 => __( 'Item de Cinema', 'grochfilmes' ),
        'description'           => __( 'Descrição do Item de Cinema', 'grochfilmes' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail'),
        'taxonomies'            => array( 'cinema_category',  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-video-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('cinema', $args);

}

add_action('after_setup_theme', 'cinema_category', 0);
function cinema_category() {

    $labels = array(
        'name'                       => _x( 'Categorias', 'Taxonomy General Name', 'grochfilmes' ),
        'singular_name'              => _x( 'Categoria', 'Taxonomy Singular Name', 'grochfilmes' ),
        'menu_name'                  => __( 'Categorias de Cinema', 'grochfilmes' ),
        'all_items'                  => __( 'Todas Categorias', 'grochfilmes' ),
        'parent_item'                => __( 'Categoria Pai', 'grochfilmes' ),
        'parent_item_colon'          => __( 'Categoria Pai:', 'grochfilmes' ),
        'new_item_name'              => __( 'Nova Categoria de Item de Cinema', 'grochfilmes' ),
        'add_new_item'               => __( 'Adicionar Categoria de Cinema', 'grochfilmes' ),
        'edit_item'                  => __( 'Editar Categoria de Cinema', 'grochfilmes' ),
        'update_item'                => __( 'Atualizar Categoria de Item de Cinema', 'grochfilmes' ),
        'view_item'                  => __( 'Ver Categoria de Item de Cinema', 'grochfilmes' ),
        'separate_items_with_commas' => __( 'Separe as categoria de item de Cinema por vírgulas', 'grochfilmes' ),
        'add_or_remove_items'        => __( 'Adicionar ou Remover Categorias de Item de Cinema', 'grochfilmes' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'grochfilmes' ),
        'popular_items'              => __( 'Categoria de Item de Cinema Popular', 'grochfilmes' ),
        'search_items'               => __( 'Buscar Categoria de Item de Cinema', 'grochfilmes' ),
        'not_found'                  => __( 'Categoria de Item de Cinema Não Encontrada', 'grochfilmes' ),
        'items_list'                 => __( 'Lista das Categorias de Item de Cinema', 'grochfilmes' ),
        'items_list_navigation'      => __( 'Navegar pela lista das categorias de item de Cinema', 'grochfilmes' ),
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
    register_taxonomy('cinema_category', array('cinema'), $args);

}

?>
