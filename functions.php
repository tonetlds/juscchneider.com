<?php 

	/**
	 * 	ENQUEUE STYLES AND SCRIPTS	
	 */
	function juscchneider_scripts() {	    

		/**
		 * 		CSS
		 */
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', array(), null );	    
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null );	    
		wp_enqueue_style( 'fonts', get_template_directory_uri() . '/fonts/stylesheet.css', array(), null );	    
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), null );	    
		wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/ionicons.min.css', array(), null );	    
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/js/assets/owl.carousel.css', array(), null );	    
		wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css', array(), null );	    
		wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/css/responsive.css', array(), null );	    


	    /**
	     * 		JS
	     */
	    // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), null, true );
	    wp_enqueue_script( 'jquery' );
	    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true );
	    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
	    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true );

	}
	add_action( 'wp_enqueue_scripts', 'juscchneider_scripts' );



/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/**
 * Function to register the names of our menus
 * @return [type] [description]
 */
function register_ju_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Menu principal' ),
			'footer-menu' => __( 'Menu rodapé' )
			)
		);
}
add_action( 'init', 'register_ju_menus' );


/**
 * 	SIDEBARS
 */
function ju_sidebars() {

	$args = array(
		'id'            => 'sidebar_1',
		'name'          => __( 'Sidebar', 'ju_scchneider' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle title">',
		'after_title'   => '</h3>'
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'sidebar_2',
		'name'          => __( 'Sidebar alternativa', 'ju_scchneider' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle title">',
		'after_title'   => '</h3>'
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'ju_sidebars' );



// SUPORTE À IMAGEM DESTACADA
add_theme_support('post-thumbnails');


/**
 * POST TYPE SERVIÇO
 */
if ( ! function_exists('juscchneider_service_post_type') ) {

// Register Custom Post Type
function juscchneider_service_post_type() {

	$labels = array(
		'name'                  => _x( 'Serviços', 'Post Type General Name', 'ju_scchneider' ),
		'singular_name'         => _x( 'Serviço', 'Post Type Singular Name', 'ju_scchneider' ),
		'menu_name'             => __( 'Serviços', 'ju_scchneider' ),
		'name_admin_bar'        => __( 'Serviços', 'ju_scchneider' ),
		'archives'              => __( 'Arquivo', 'ju_scchneider' ),
		'parent_item_colon'     => __( 'Serviço pai:', 'ju_scchneider' ),
		'all_items'             => __( 'Todos itens', 'ju_scchneider' ),
		'add_new_item'          => __( 'Adicionar novo serviço', 'ju_scchneider' ),
		'add_new'               => __( 'Adicionar novo', 'ju_scchneider' ),
		'new_item'              => __( 'Novo serviço', 'ju_scchneider' ),
		'edit_item'             => __( 'Editar serviço', 'ju_scchneider' ),
		'update_item'           => __( 'Atualizar serviço', 'ju_scchneider' ),
		'view_item'             => __( 'Ver item', 'ju_scchneider' ),
		'search_items'          => __( 'Procurar item', 'ju_scchneider' ),
		'not_found'             => __( 'Nada encontrado', 'ju_scchneider' ),
		'not_found_in_trash'    => __( 'Nada econtrado na lixeira', 'ju_scchneider' ),
		'featured_image'        => __( 'Imagem em destaque', 'ju_scchneider' ),
		'set_featured_image'    => __( 'Selecione a imagem em destaque', 'ju_scchneider' ),
		'remove_featured_image' => __( 'Remover imagem em destaque', 'ju_scchneider' ),
		'use_featured_image'    => __( 'Usar como imagem em destaque', 'ju_scchneider' ),
		'insert_into_item'      => __( 'Inserir no serviço', 'ju_scchneider' ),
		'uploaded_to_this_item' => __( 'Enviado para este item', 'ju_scchneider' ),
		'items_list'            => __( 'Lista de serviços', 'ju_scchneider' ),
		'items_list_navigation' => __( 'Lista de serviços', 'ju_scchneider' ),
		'filter_items_list'     => __( 'Filtrar lista de serviços', 'ju_scchneider' ),
	);
	$rewrite = array(
		'slug'                  => 'servicos',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Serviço', 'ju_scchneider' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'juscchneider_service_post_type', 0 );

}