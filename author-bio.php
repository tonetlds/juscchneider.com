<section class="author-info">
	<div class="author-avatar">
		<?php		
		echo get_avatar( get_the_author_meta( 'user_email' ));
		?>
	</div><!-- .author-avatar -->

	<div class="author-description">
		<small class="author-heading"><?php _e( 'Postado por', 'juscchneider' ); ?></small>
		<h3 class="author-title"><?php echo get_the_author(); ?></h3>
		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php printf( __( 'Ver todos artigos de %s', 'juscchneider' ), get_the_author() ); ?>
			</a>
		</p><!-- .author-bio -->

	</div><!-- .author-description -->
</section><!-- .author-info -->
