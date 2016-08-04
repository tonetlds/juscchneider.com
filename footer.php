		<footer>
			<div class="container text-center">
				
				<?php if (!is_page( 'contato' ) && !is_page( 'eu' )) {
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

		<!-- PINTEREST -->
		<script>
		    // window.pAsyncInit = function() {
		    //     PDK.init({
		    //         appId: "4836511563040965584",
		    //         cookie: true
		    //     });
		    // };

		    // (function(d, s, id){
		    //     var js, pjs = d.getElementsByTagName(s)[0];
		    //     if (d.getElementById(id)) {return;}
		    //     js = d.createElement(s); js.id = id;
		    //     js.src = "//assets.pinterest.com/sdk/sdk.js";
		    //     pjs.parentNode.insertBefore(js, pjs);
		    // }(document, 'script', 'pinterest-jssdk'));
		</script>
		<!-- /PINTEREST -->

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-78284119-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
		<!-- <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-78257359-1', 'auto');
		  ga('send', 'pageview');

		</script> -->

	</body>
</html>