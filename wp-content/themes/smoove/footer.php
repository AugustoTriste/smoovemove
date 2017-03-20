			
		<footer role="contentinfo" class="bottom">

			<div class="container">
			
				<div id="inner-footer" class="clearfix">

		          <div class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <div class="col-lg-4">
		            	<nav class="clearfix">
							<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
						</nav>
					
		            </div>
		          </div>
					
				</div> <!-- end #inner-footer -->

			</div> <!-- end #container -->		
		
		</footer> <!-- end footer -->
		
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>


		<script src="//localhost:35729/livereload.js"></script>


		<script>
			new WOW().init();
		</script>

	</body>

</html>