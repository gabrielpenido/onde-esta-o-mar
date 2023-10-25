<?php
/**
 * onde_esta_o_mar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage onde_esta_o_mar
 * @since onde_esta_o_mar 1.0
 */

function onde_esta_o_mar_theme_support() {

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

// Custom background color.
add_theme_support(
    'custom-background',
    array(
        'default-color' => 'f5efe0',
    )
);

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support( 'post-thumbnails' );

// Set post thumbnail size.
set_post_thumbnail_size( 1200, 9999 );

// Add custom image size used in Cover Template.
add_image_size( 'onde_esta_o_mar-fullscreen', 1980, 9999 );

add_theme_support(
    'custom-logo',
    array(
        'height'      => $logo_height,
        'width'       => $logo_width,
        'flex-height' => true,
        'flex-width'  => true,
    )
);

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
        'navigation-widgets',
    )
);

/*
 * Make theme available for translation.
 * Translations can be filed in the /languages/ directory.
 * If you're building a theme based on Twenty Twenty, use a find and replace
 * to change 'onde_esta_o_mar' to the name of your theme in all the template files.
 */
load_theme_textdomain( 'onde_esta_o_mar' );

// Add support for full and wide align images.
add_theme_support( 'align-wide' );

// Add support for responsive embeds.
add_theme_support( 'responsive-embeds' );



// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

/*
 * Adds `async` and `defer` support for scripts registered or enqueued
 * by the theme.
 */
$loader = new onde_esta_o_mar_Script_Loader();
add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';

    return $path;
}

function cc_mime_types( $mimes ) {
    $mimes['jpg|jpeg|jpe'] = 'image/jpeg';
    $mimes['gif'] = 'image/gif';
    $mimes['png'] = 'image/png';
    $mimes['bmp'] = 'image/bmp';
    $mimes['tiff|tif'] = 'image/tiff';
    $mimes['ico'] = 'image/x-icon';
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'application/x-gzip';
    $mimes['doc']  = 'application/msword';
    $mimes['webp'] = 'image/webp';
    $types['csv'] = 'text/csv';
    $mimes['ttf'] = 'font/ttf';
    $mimes['woff'] = 'font/woff';
    $mimes['woff2'] = 'font/woff2';

    // unset( $mimes['exe'] );

    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');



function admin_reset_stylesheet() {?>
        
        <style type="text/css">
            @media (min-width: 782px) {
                body.wp-admin.is-fullscreen-mode #adminmenumain, 
                body.wp-admin.is-fullscreen-mode #wpadminbar{
                    display: block !important;
                }
                body.wp-admin.is-fullscreen-mode #adminmenu{
                    margin: 44px 0 12px !important;
                }
                body.wp-admin.is-fullscreen-mode div.edit-post-layout{
                    top: 30px !important;
                    left: 160px !important;
                }
                body.wp-admin.is-fullscreen-mode div.edit-post-layout .editor-post-publish-panel{
                    top: 32px !important;
                }
            }
        </style> <?php 
    }
    add_action( 'admin_head', 'admin_reset_stylesheet' );


// Register Custom Post Type
function siteContent_cpt() {
    $labels = array(
        'name' => _x( 'siteContent', 'Post Type General Name', 'onde_esta_o_mar' ),
        'singular_name' => _x( 'Site content', 'Post Type Singular Name', 'onde_esta_o_mar' ),
        'menu_name' => __( 'Site Content', 'onde_esta_o_mar' ),
        'name_admin_bar' => __( 'Site Content', 'onde_esta_o_mar' ),
        'archives' => __( 'Arquivos de Site content', 'onde_esta_o_mar' ),
        'attributes' => __( 'Atributos de Site content', 'onde_esta_o_mar' ),
        'parent_item_colon' => __( 'Site content Pai:', 'onde_esta_o_mar' ),
        'all_items' => __( 'Todo o site', 'onde_esta_o_mar' ),
        'add_new_item' => __( 'Adicionar Site content', 'onde_esta_o_mar' ),
        'add_new' => __( 'Adicionar nova', 'onde_esta_o_mar' ),
        'new_item' => __( 'Nova Site content', 'onde_esta_o_mar' ),
        'edit_item' => __( 'Editar Site content', 'onde_esta_o_mar' ),
        'update_item' => __( 'Atualizar Site content', 'onde_esta_o_mar' ),
        'view_item' => __( 'Ver Site content', 'onde_esta_o_mar' ),
        'view_items' => __( 'Ver Site Content', 'onde_esta_o_mar' ),
        'search_items' => __( 'Buscar Site Content', 'onde_esta_o_mar' ),
        'not_found' => __( 'Site content não encontrada', 'onde_esta_o_mar' ),
        'not_found_in_trash' => __( 'Site content não encontrada na lixeira', 'onde_esta_o_mar' ),
        'featured_image' => __( 'Imagem em destaque', 'onde_esta_o_mar' ),
        'set_featured_image' => __( 'Setando imagem em destaque', 'onde_esta_o_mar' ),
        'remove_featured_image' => __( 'Remover imagem em destaque', 'onde_esta_o_mar' ),
        'use_featured_image' => __( 'Use como imagem em destaque', 'onde_esta_o_mar' ),
        'insert_into_item' => __( 'Inserir na Site content', 'onde_esta_o_mar' ),
        'uploaded_to_this_item' => __( 'Carregado para esta Site content', 'onde_esta_o_mar' ),
        'items_list' => __( 'Lista do Site Content', 'onde_esta_o_mar' ),
        'items_list_navigation' => __( 'Navegação na lista de Site Content', 'onde_esta_o_mar' ),
        'filter_items_list' => __( 'Filtrar lista de Site Content', 'onde_esta_o_mar' ),
    );
    $args = array(
        'label' => __( 'Site content', 'onde_esta_o_mar' ),
        'description' => __( 'Site content', 'onde_esta_o_mar' ),
        'labels' => $labels,
        'taxonomies' => array(),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 11,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'query_var' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'noticias','with_front' => true),
        'show_in_rest' => true,

        'supports' => array(
            'title',
            'custom-fields',
        ),
        'menu_icon' => 'dashicons-admin-site-alt3',
    );

    register_post_type( 'siteContent', $args );
    
    
    // CATEGORY
    register_taxonomy(
        'siteContent_category',
        'siteContent',
        array(
            'labels' => array(
                'name' => _x( 'Categorias', 'Taxonomy General Name', 'onde_esta_o_mar' ),
                'singular_name' => _x( 'Categoria', 'Taxonomy Singular Name', 'onde_esta_o_mar' ),
                'menu_name' => __( 'Categorias', 'onde_esta_o_mar' ),
                'all_items' => __( 'Todas as Categorias', 'onde_esta_o_mar' ),
                'parent_item' => __( 'Categoria Pai', 'onde_esta_o_mar' ),
                'parent_item_colon' => __( 'Categoria pai (dois pontos)', 'onde_esta_o_mar' ),
                'new_item_name' => __( 'Nome da nova Categoria', 'onde_esta_o_mar' ),
                'add_new_item' => __( 'Adicionar nova Categoria', 'onde_esta_o_mar' ),
                'edit_item' => __( 'Editar Categoria', 'onde_esta_o_mar' ),
                'update_item' => __( 'Atualizar Categoria', 'onde_esta_o_mar' ),
                'view_item' => __( 'Ver Categoria', 'onde_esta_o_mar' ),
                'separate_items_with_commas' => __( 'Separe Categorias com vírgulas', 'onde_esta_o_mar' ),
                'add_or_remove_items' => __( 'Adicionar ou remover Categoria', 'onde_esta_o_mar' ),
                'choose_from_most_used' => __( 'Escolha entre as Categorias mais usadas', 'onde_esta_o_mar' ),
                'popular_items' => __( 'Categoria popular', 'onde_esta_o_mar' ),
                'search_items' => __( 'Buscar Categoria', 'onde_esta_o_mar' ),
                'not_found' => __( 'Categoria não encontrada', 'onde_esta_o_mar' ),
                'no_terms' => __( 'Sem Categoria', 'onde_esta_o_mar' ),
                'items_list' => __( 'Lista de Categorias', 'onde_esta_o_mar' ),
                'items_list_navigation' => __( 'Navegação na lista de Categorias', 'onde_esta_o_mar' ),
            ),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'categoria', 'with_front' => true ),
            'show_in_rest' => true,

            'supports' => array(
                'title',
                'editor',
                'custom-fields',
                'page-attributes',
                'thumbnail',
                'excerpt',
                'post-formats'
            ),
        )
    );
    
    
    // TAG
    register_taxonomy(
        'siteContent_tag',
        'siteContent',
        array(
            'labels' => array(
                'name' => _x( 'Tags', 'Taxonomy General Name', 'onde_esta_o_mar' ),
                'singular_name' => _x( 'Tag', 'Taxonomy Singular Name', 'onde_esta_o_mar' ),
                'menu_name' => __( 'Tags', 'onde_esta_o_mar' ),
                'all_items' => __( 'Todas as Tags', 'onde_esta_o_mar' ),
                'parent_item' => __( 'Tag Pai', 'onde_esta_o_mar' ),
                'parent_item_colon' => __( 'Tag pai (dois pontos)', 'onde_esta_o_mar' ),
                'new_item_name' => __( 'Nome da nova Tag', 'onde_esta_o_mar' ),
                'add_new_item' => __( 'Adicionar nova Tag', 'onde_esta_o_mar' ),
                'edit_item' => __( 'Editar Tag', 'onde_esta_o_mar' ),
                'update_item' => __( 'Atualizar Tag', 'onde_esta_o_mar' ),
                'view_item' => __( 'Ver Tag', 'onde_esta_o_mar' ),
                'separate_items_with_commas' => __( 'Separe Tags com vírgulas', 'onde_esta_o_mar' ),
                'add_or_remove_items' => __( 'Adicionar ou remover Tag', 'onde_esta_o_mar' ),
                'choose_from_most_used' => __( 'Escolha entre as Tags mais usadas', 'onde_esta_o_mar' ),
                'popular_items' => __( 'Tag popular', 'onde_esta_o_mar' ),
                'search_items' => __( 'Buscar Tag', 'onde_esta_o_mar' ),
                'not_found' => __( 'Tag não encontrada', 'onde_esta_o_mar' ),
                'no_terms' => __( 'Sem Tag', 'onde_esta_o_mar' ),
                'items_list' => __( 'Lista de Tags', 'onde_esta_o_mar' ),
                'items_list_navigation' => __( 'Navegação na lista de Tags', 'onde_esta_o_mar' ),
            ),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'tag', 'with_front' => true ),
            'show_in_rest' => true,

            'supports' => array(
                'title',
                'editor',
                'custom-fields',
                'page-attributes',
                'thumbnail',
                'excerpt',
                'post-formats'
            ),
        )
    );
}  
add_action( 'init', 'siteContent_cpt', 0 );
    
function enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_styles');