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
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/images/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/images/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/images/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/images/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/images/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon-16x16.png">
		

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
						<img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="Smoovemove" class="main-logo">
					</a>
				</div>

				<div class="visible-lg">
					<?php wp_bootstrap_main_nav(); // Desktop Nav ?>
				</div>
				
				<div class="overlay-logo hidden-lg">
					
				</div>
				<div class="button hidden-lg">
				    <!-- <a class="btn-open" href="#"></a> -->
				    <span class="hamburger-icon" title="Menu">
						<span class="line line-1"></span>
						<span class="line line-2"></span>
						<span class="line line-3"></span>
					</span>
				</div>

				<div class="overlay">
					<div class="wrap">
						<div class="row">
							<div class="col-sm-12">
								<div class="nav-wrap dis-ta">
									<div class="inner-nav dis-cell align-middle">
										<?php wp_bootstrap_main_nav(); // Overlay Nav ?>
										<div class="bottom clearfix row">
								            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
								            <?php endif; ?>
								        </div>
									</div>
								</div>
							</div><!-- /.col-sm-12 -->
						</div><!-- /.row -->
					</div><!-- /.wrap -->
				</div><!-- /.overlay -->

			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->
		
