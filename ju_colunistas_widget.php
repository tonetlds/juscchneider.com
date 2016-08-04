<?php
/*
Plugin Name: Ju Scchneider Widgets Backup
Plugin URI: http://mydomain.com
Description: Widgets for Ju Scchneider blog
Author: Luciano Tonet
Version: 1.0
Author URI: http://lucianotonet.com
*/

// Block direct requests
if ( !defined('ABSPATH') ){
	die('-1');
};


add_action( 'widgets_init', function(){
     register_widget( 'Ju_Widget' );
     register_widget( 'Ju_About_Widget' );
     register_widget( 'Ju_Social_Widget' );
     register_widget( 'Colunista_Widget' );
});

/**
 * Adds Ju_Widget widget.
 */
class Ju_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Ju_Widget', // Base ID
			__('Ju Scchneider Widget', 'ju_scchneider'), // Name
			array( 'description' => __( '', 'ju_scchneider' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {

     	echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
		echo __( 'Hello, World!', 'ju_scchneider' );
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'ju_scchneider' );
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Ju_Widget



/**
 * Adds My_Widget widget.
 */
class Ju_About_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Ju_About_Widget', // Base ID
			__('Sobre mim', 'ju_scchneider'), // Name
			array('description' => __( '', 'ju_scchneider' ),) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {

		// get the excerpt of the required story
		if ( $instance['post_id'] == 0 ) {

			$gp_args = array(
				'posts_per_page' => 1,
				'post_type' => 'page',
				'orderby' => 'post_date',
				'order' => 'desc',
				'post_status' => 'publish'
			);
			$posts = get_posts( $gp_args );

			if ( $posts ) {
				$post = $post[0];
			} else {
				$post = null;
			}

		} else {

			$post = get_post( $instance['post_id'] );

		}

		if ( array_key_exists('before_widget', $args) ) echo $args['before_widget'];

		if ( $post ) {

			echo '<a href="' . get_permalink( $post->ID ) . '" title="Leia mais sobre ' . $post->post_title . '">'.get_the_post_thumbnail( $post->ID, 'full', array('class'=>'post_featured_img img-responsive') ).'</a>';
			echo '<img src="'.get_stylesheet_directory_uri().'/images/logo_widget.jpg" class="img-responsive" alt="">';
			echo '<br/>';
			echo '<p class="post_widget_excerpt"><a href="' . get_permalink( $post->ID ) . '" title="Leia mais sobre ' . $post->post_title . '">' . $post->post_excerpt . '</a></p>';
			// echo '<p class="post_widget_readmore text-right"><a href="' . get_permalink( $post->ID ) . '" title="Leia mais sobre ' . $post->post_title . '">Mais...</a></p>';

		} else {

			echo __( 'No recent story found.', 'ju_scchneider' );
		}

		if ( array_key_exists('after_widget', $args) ) echo $args['after_widget'];
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {

		if ( isset( $instance[ 'post_id' ] ) ) {
			$post_id = $instance[ 'post_id' ];
		}
		else {
			$post_id = 0;
		}
		?>

		<p>
			Resumo da página:
		</p>
		<p>
			<select id="<?php echo $this->get_field_id( 'post_id' ); ?>" name="<?php echo $this->get_field_name( 'post_id' ); ?>">
				<option>-- Selecione uma página --</option>
		<?php
		// get the exceprt of the most recent story
		$gp_args = array(
			'posts_per_page' => -1,
			'post_type' => 'page',
			'orderby' => 'post_date',
			'order' => 'desc',
			'post_status' => 'publish'
		);

		$posts = get_posts( $gp_args );
			foreach( $posts as $post ) {

				$selected = ( $post->ID == $post_id ) ? 'selected' : '';

				if ( strlen($post->post_title) > 30 ) {
					$title = substr($post->post_title, 0, 27) . '...';
				} else {
					$title = $post->post_title;
				}
				echo '<option value="' . $post->ID . '" ' . $selected . '>' . $title . '</option>';
			}
		?>
			</select>
		</p>
		<?php
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = array();
		$instance['post_id'] = ( ! empty( $new_instance['post_id'] ) ) ? strip_tags( $new_instance['post_id'] ) : '';
		return $instance;
	}
} // class My_Widget



/**
 * Adds My_Widget widget.
 */
class Ju_Social_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Ju_Social_Widget', // Base ID
			__('Redes sociais', 'ju_scchneider'), // Name
			array('description' => __( 'Ícones com links para as redes sociais', 'ju_scchneider' ),) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {

		$options = get_option( 'social_networks' );

		// print_r($options);
		// exit;

		if ( array_key_exists('before_widget', $args) ) echo $args['before_widget'];

		foreach ($options as $key => $value) {
			if( $value ) {
				switch ($key) {
					case 'facebook':
						echo '<a href="http://facebook.com/'.$value.'"><i class="fa fa-facebook"></i></a>';
						break;

					case 'instagram':
						echo '<a href="http://instagram.com/'.$value.'"><i class="fa fa-instagram"></i></a>';
						break;

					case 'pinterest':
						echo '<a href="http://pinterest.com/'.$value.'"><i class="fa fa-pinterest"></i></a>';
						break;

					case 'twitter':
						echo '<a href="http://twitter.com/'.$value.'"><i class="fa fa-twitter"></i></a>';
						break;

					default:
						# code...
						break;
				}
			}
		}

		if ( array_key_exists('after_widget', $args) ) echo $args['after_widget'];


	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {

		if ( isset( $instance[ 'post_id' ] ) ) {
			$post_id = $instance[ 'post_id' ];
		}
		else {
			$post_id = 0;
		}
		?>
			<p></p>
		<?php
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = array();
		$instance['post_id'] = ( ! empty( $new_instance['post_id'] ) ) ? strip_tags( $new_instance['post_id'] ) : '';
		return $instance;
	}
} // class My_Widget


/**
 * Adds My_Widget widget.
 */
class Colunista_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Colunista_Widget', // Base ID
			__('Coluna', 'ju_scchneider'), // Name
			array('description' => __( '', 'ju_scchneider' ),) // Args
		);


		add_filter('dynamic_sidebar_params', array($this, 'cosmos_bottom_sidebar_params') );

	}

	public function cosmos_bottom_sidebar_params($params) {

	    $sidebar_id = $params[0]['id'];

	    if ( $sidebar_id == 'colunistas' ) {

	        $total_widgets = wp_get_sidebars_widgets();
	        $sidebar_widgets = count($total_widgets[$sidebar_id]);

	        $params[0]['before_widget'] = str_replace('class="', 'class="col-md-' . floor(12 / $sidebar_widgets) . ' ', $params[0]['before_widget']);
	    }

	    return $params;
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {



		$gp_args = array(
			// 'author'      => $instance['author_id'],
		    'orderby'        => 'post_date',
		    'order'          => 'ASC',
		    'posts_per_page' => 1,
			'post_status'    => 'publish',
			'tax_query'      => array(
				array(
					'taxonomy'         => 'category',
					'field'            => 'id',
					'terms'            => $instance['term_id'], // Where term_id of Term 1 is "1".
					'include_children' => false
				)
			)
		);
		$posts = get_posts( $gp_args );

		if ( $posts ) {
			$post = $posts[0];
		} else {
			$post = null;
		}



		switch ($instance['size']) {
			case 1:
				// echo "<div class='col-md-3'>";
				break;

			case 3:
				// echo "<div class='col-md-9'>";
				break;

			case 4:
				// echo "<div class='col-md-12'>";
				break;

			default:
				# 2
				// echo "<div class='col-md-6'>";
				break;
		}
		if ( array_key_exists('before_widget', $args) ) echo $args['before_widget'];
		if ( $post ) {

			?>
			<article class="parceiro-post">

				<h2 class="title font-alt">
					<a href="<?php echo get_author_posts_url( $post->post_author ); ?>">
						<?php echo the_author_meta( 'user_nicename', $post->post_author ); ?>
					</a>

				</h2>
		 		<?php // if (has_post_thumbnail()) {?>
		 			<a href="<?php echo get_permalink( $post->ID ) ?>">
		 				<div class="grid">
						<figure class="effect-ju">
							<?php print_r($post->ID) ?>
							<?php if (has_post_thumbnail($post->ID)) {?>
								<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
						 	<?php }else{ ?>
								<img src="http://placehold.it/960x690" class="img-responsive" alt="Image">
						 	<?php } ?>

						</figure>
						</div>
					</a>
			 	<?php // } ?>
		 		<h3 class="title"><a href="<?php echo get_permalink( $post->ID ) ?>"><?php echo $post->post_title; ?></a></h3>
				<p><?php echo $post->post_excerpt; ?></p>
		 		<a href="<?php echo get_permalink( $post->ID ) ?>" class="btn btn-sm pull-right read-more" title="Continue lendo..." ><i class="ion-ios-plus-empty"></i></a>
			</article>
			<?php

			// echo '<a href="' . get_permalink( $post->ID ) . '" title="Leia mais sobre ' . $post->post_title . '">'.get_the_post_thumbnail( $post->ID, 'full', array('class'=>'post_featured_img img-responsive') ).'</a>';
			// echo '<img src="'.get_stylesheet_directory_uri().'/images/logo_widget.jpg" class="img-responsive" alt="">';
			// echo '<br/>';
			// echo '<p class="post_widget_excerpt"><a href="' . get_permalink( $post->ID ) . '" title="Leia mais sobre ' . $post->post_title . '">' . $post->post_excerpt . '</a></p>';
			// echo '<p class="post_widget_readmore text-right"><a href="' . get_permalink( $post->ID ) . '" title="Leia mais sobre ' . $post->post_title . '">Mais...</a></p>';

		} else {

			echo __( 'Nada encontrado.', 'ju_scchneider' );
		}
		if ( array_key_exists('after_widget', $args) ) echo $args['after_widget'];
		// echo '</div>';

	}





	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {

		$author_id = ( isset( $instance[ 'term_id' ] ) ) ? $instance[ 'term_id' ] : 0;
		$size      = ( isset( $instance[ 'size' ] ) ) ? $instance[ 'size' ] : 1;

		?>

		<p>
			Autor da coluna:
		</p>
		<p>
			<select id="<?php echo $this->get_field_id( 'term_id' ); ?>" name="<?php echo $this->get_field_name( 'term_id' ); ?>">
				<option>-- Selecione uma categoria --</option>
				<?php
					$categories = get_categories( array(
						'orderby' => 'name',
						'parent'  => 0
					) );

					foreach ( $categories as $category ) { ?>

						<option value="<?php echo $category->term_id ?>"><?php echo esc_html( $category->name ) ?></option>

						<?php
					}
				?>


				<?php
				// get the exceprt of the most recent story

					// $blogusers = get_users( 'blog_id=1&orderby=nicename&role=author' );
						// print_r($blogusers);

					// Array of WP_User objects.
					// foreach ( $blogusers as $user ) {
					// 	$selected = ( $user->ID == $author_id ) ? 'selected' : '';
					// 	echo '<option value="' . $user->ID . '" ' . $selected . '>' . esc_html($user->display_name) . '</option>';
					// }

				?>
			</select>
		</p>

		<?php /** <p>
			Tamanho da coluna:
		</p>
		<p>
			<input id="<?php echo $this->get_field_id( 'size' ); ?>" type="number" name="<?php echo $this->get_field_name( 'size' ); ?>" class="form-control" min="1" max="4" step="1" required="required" title="" value="<?php echo $size ?>">

		</p> */ ?>

		<?php
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = array();
		$instance['author_id'] = ( ! empty( $new_instance['author_id'] ) ) ? strip_tags( $new_instance['author_id'] ) : '';
		$instance['size'] = ( ! empty( $new_instance['size'] ) ) ? strip_tags( $new_instance['size'] ) : 2;
		return $instance;
	}
} // class My_Widget
