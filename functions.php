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

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/bower_components/font-awesome/css/font-awesome.min.css', array(), null );

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
	wp_enqueue_script( 'instafeedjs', get_template_directory_uri() . '/bower_components/instafeed.js/instafeed.min.js', array('jquery'), null, true );
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
		'id'            => 'colunistas',
		'name'          => __( 'Colunistas', 'ju_scchneider' ),
		'description'   => 'Seção para colunistas - Página inicial',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle title">',
		'after_title'   => '</h3>'
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'sidebar_home_1',
		'name'          => __( 'Home - Espaço para anúncio 01', 'ju_scchneider' ),
		'description'   => 'Página inicial, ao lado direito',
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => ''
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'sidebar_home_2',
		'name'          => __( 'Home - Espaço para anúncio 02', 'ju_scchneider' ),
		'description'   => 'Visível na página inicial, seção inferior 1 de 3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle title">',
		'after_title'   => '</h3>'
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'sidebar_home_3',
		'name'          => __( 'Home - Espaço para anúncio 03', 'ju_scchneider' ),
		'description'   => 'Visível na página inicial, seção inferior 2 de 3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle title">',
		'after_title'   => '</h3>'
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'sidebar_home_4',
		'name'          => __( 'Home - Espaço para anúncio 04', 'ju_scchneider' ),
		'description'   => 'Visível na página inicial, seção inferior 3 de 3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle title">',
		'after_title'   => '</h3>'
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'sidebar_home_5',
		'name'          => __( 'Anúncio 960x280', 'ju_scchneider' ),
		'description'   => 'Anúncio grande na página inicial',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle title">',
		'after_title'   => '</h3>'
	);
	register_sidebar( $args );


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

	$args = array(
		'id'            => 'sidebar_contato',
		'name'          => __( 'Contato', 'ju_scchneider' ),
		'description'   => 'Visível apenas na página "contato", no lado direito',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle title">',
		'after_title'   => '</h3>'
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'sidebar_3',
		'name'          => __( 'Rodapé', 'ju_scchneider' ),
		'description'   => 'Visível no rodapé de todas as páginas, exceto na página "contato"',
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
// Suporte à resumos em Páginas
add_post_type_support( 'page', 'excerpt' );


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

			'show_in_rest'          => true,
			'rest_base'             => 'services',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
		);
		register_post_type( 'service', $args );

	}
	add_action( 'init', 'juscchneider_service_post_type', 0 );

}





class JuOptionsPage
{
	/**
	* Holds the values to be used in the fields callbacks
	*/
	private $options;

	/**
	* Start up
	*/
	public function __construct()
	{
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );
		add_action( 'admin_init', array( $this, 'page_init' ) );
	}

	/**
	* Add options page
	*/
	public function add_options_page()
	{
		// This page will be under "Settings"
		add_menu_page(
		'Settings Admin',
		'Opções',
		'manage_options',
		'ju-options',
		array( $this, 'create_admin_page' )
	);
}

/**
* Options page callback
*/
public function create_admin_page()
{
	// Set class property
	$this->options = get_option( 'social_networks' );
	?>
	<div class="wrap">
		<h2>Opções</h2>
		<form method="post" action="options.php">
			<?php
			// This prints out all hidden setting fields
			settings_fields( 'ju_options' );
			do_settings_sections( 'ju-options' );
			submit_button();
			?>
		</form>
	</div>
	<?php
}

/**
* Register and add settings
*/
public function page_init()
{
	register_setting(
	'ju_options', // Option group
	'social_networks', // Option name
	array( $this, 'sanitize' ) // Sanitize
);

add_settings_section(
'social_networks_section', // ID
'Redes Sociais', // Title
array( $this, 'print_section_info' ), // Callback
'ju-options' // Page
);

add_settings_field(
'facebook',
'Facebook',
array( $this, 'facebook_callback' ),
'ju-options',
'social_networks_section'
);

add_settings_field(
'instagram',
'Instagram',
array( $this, 'instagram_callback' ),
'ju-options',
'social_networks_section'
);

add_settings_field(
'pinterest', // ID
'Pinterest', // Title
array( $this, 'pinterest_callback' ), // Callback
'ju-options', // Page
'social_networks_section' // Section
);

add_settings_field(
'twitter', // ID
'Twitter', // Title
array( $this, 'twitter_callback' ), // Callback
'ju-options', // Page
'social_networks_section' // Section
);
}

/**
* Sanitize each setting field as needed
*
* @param array $input Contains all settings fields as array keys
*/
public function sanitize( $input )
{
	$new_input = $input;

	if( isset( $input['id_number'] ) )
	$new_input['id_number'] = absint( $input['id_number'] );

	if( isset( $input['facebook'] ) )
	$new_input['facebook'] = sanitize_text_field( $input['facebook'] );

	return $new_input;
}

/**
* Print the Section text
*/
public function print_section_info()
{
	print 'Informe o seu nome de usuário para cada rede social';
}


/**
* Get the settings option array and print one of its values
*/
public function facebook_callback()
{

	printf(
	'http://www.facebook.com/<input type="text" id="facebook" name="social_networks[facebook]" value="%s" />',
	isset( $this->options['facebook'] ) ? esc_attr( $this->options['facebook']) : ''
);

}

public function instagram_callback()
{

	printf(
	'http://instagram.com/<input type="text" id="instagram" name="social_networks[instagram]" value="%s" />',
	isset( $this->options['instagram'] ) ? esc_attr( $this->options['instagram']) : ''
);

}

public function pinterest_callback()
{

	printf(
	'http://pinterest.com/<input type="text" id="pinterest" name="social_networks[pinterest]" value="%s" />',
	isset( $this->options['pinterest'] ) ? esc_attr( $this->options['pinterest']) : ''
);

}

public function twitter_callback()
{
	printf(
	'http://twitter.com/<input type="text" id="twitter" name="social_networks[twitter]" value="%s" />',
	isset( $this->options['twitter'] ) ? esc_attr( $this->options['twitter']) : ''
);
}
}

if( is_admin() )
$ju_options_page = new JuOptionsPage();


// Custom Comments Callback
function jucomments($comment, $args, $depth)
{

	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
	?>
	<!-- heads up: starting < for the html tag (li or div) in the next line: -->
	<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-author vcard">
			<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment ); ?>
			<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
		</div>
		<?php if ($comment->comment_approved == '0') : ?>
			<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
			<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
			?>
		</div>

		<?php comment_text() ?>

		<div class="reply">
			<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
	<?php endif; ?>
	<?php }
