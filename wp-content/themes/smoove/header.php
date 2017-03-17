<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
				
			<div id="navbar-scroll" class="navbar">
          
				<div class="navbar-header">
					<a class="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
					</a>
				</div>

				<div class="visible-lg">
					<?php wp_bootstrap_main_nav(); // Desktop Nav ?>
				</div>
				
				<div class="overlay-logo hidden-lg">
					
				</div>
				<div class="button hidden-lg">
				    <a class="btn-open" href="#"></a>
				</div>

				<div class="overlay">
					<div class="wrap">
						<img class="overlay-logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
						<div class="row">
							<div class="col-sm-12">
								<div class="nav-wrap dis-ta">
									<div class="inner-nav dis-cell align-middle">
										<?php wp_bootstrap_main_nav(); // Overlay Nav ?>
										<div class="bottom clearfix row">
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
									</div>
								</div>
							</div><!-- /.col-sm-12 -->
						</div><!-- /.row -->
					</div><!-- /.wrap -->
				</div><!-- /.overlay -->

			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->
		
