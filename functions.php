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