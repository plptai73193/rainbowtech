<?php

// Post Type Infomation
function fcv_cpt_info($cptname,$cptslug,$cpticon,$nocat=false) {
    $labels = array(
        'name'               => _x( $cptname, 'post type general name', 'fcv' ),
        'singular_name'      => _x( $cptname, 'post type singular name', 'fcv' ),
        'menu_name'          => _x( $cptname, 'admin menu', 'fcv' ),
        'name_admin_bar'     => _x( $cptname, 'add new on admin bar', 'fcv' ),
        'add_new'            => _x( '新規追加', $cptname, 'fcv' ),
        'add_new_item'       => __( '新規追加 '.$cptname, 'fcv' ),
        'new_item'           => __( '新しい  '.$cptname, 'fcv' ),
        'edit_item'          => __( '編集  '.$cptname, 'fcv' ),
        'view_item'          => __( '表示  '.$cptname, 'fcv' ),
        'all_items'          => __( 'すべて  '.$cptname, 'fcv' ),
        'search_items'       => __( 'サーチ  '.$cptname, 'fcv' ),
        'parent_item_colon'  => __( '親  '.$cptname.':', 'fcv' ),
        'not_found'          => __( 'No '.$cptname.' found.', 'fcv' ),
        'not_found_in_trash' => __( 'No '.$cptname.' found in Trash.', 'fcv' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( '説明.', 'fcv' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => $cptslug  ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 6,
        'menu_icon'          => $cpticon,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes','post-formats' )
    );

    register_post_type( $cptslug , $args );

    $category_name = $cptname.' カテゴリー'; 
    $category_slug = $cptslug.'-category'; 

    if($nocat!=false) {
        $labels = array(
            'name'              => _x( $category_name, 'taxonomy general name' ),
            'singular_name'     => _x( $category_name, 'taxonomy singular name' ),
            'search_items'      => __( 'サーチ '.$category_name ),
            'all_items'         => __( 'すべて  '.$category_name ),
            'parent_item'       => __( '親  '.$category_name ),
            'parent_item_colon' => __( '親  '.$category_name.':' ),
            'edit_item'         => __( '編集  '.$category_name ),
            'update_item'       => __( '更新  '.$category_name ),
            'add_new_item'      => __( '新規追加  '.$category_name ),
            'new_item_name'     => __( '新しい '.$category_name.' 名' ),
            'menu_name'         => __( $category_name ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => true,
            '_builtin'          => false,
            'show_in_nav_menus' => true,
            'sort' => true
        );

        register_taxonomy( $category_slug, array($cptslug), $args );
    }
    
}

// Register Post Type
function fcv_post_init() {
    $fcv_dashicons = get_template_directory_uri().'/backend/images/cpt.png';
    // fcv_cpt_info(__('Dịch vụ','fcv'), 'dich-vu', $fcv_dashicons, true);
}
add_action( 'init', 'fcv_post_init' );