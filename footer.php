		<footer>
			<div class="container text-center">
				
				<?php if (!is_page( 'contato' )) {
					dynamic_sidebar( 'sidebar_3' );					
				} ?>

				<!-- <div class="btn-group social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div> -->
				<p class="copyright"><small><?php echo date('Y') ?> &copy; Juliana Scchneider.</small></p>
			</div>
		</footer>


		<a href="#" class="backtotop" style="background-image: url( '<?php echo get_stylesheet_directory_uri() ?>/images/backtotop_logo.jpg' );">
			<!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/images/backtotop_logo.jpg" alt="Back to top">
			<span><i class="ion-ios-arrow-up fa-3x"></i></span> -->
		</a>		

		<?php wp_footer(); ?>
		<script>console.log( '<?php echo basename( get_page_template() ); ?>' );</script>

	</body>
</html>