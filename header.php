<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PE_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preload" as="image" href="/wp-content/themes/pe-theme-child/images/logo.svg">
	<link rel="preload" href="/wp-content/themes/pe-theme-child/scss/fonts/sora-v10-latin-500.woff" as="font" crossorigin="anonymous" />
	<link rel="preload" href="/wp-content/themes/pe-theme-child/scss/fonts/sora-v10-latin-500.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="/wp-content/themes/pe-theme-child/scss/fonts/sora-v10-latin-600.woff.woff" as="font" crossorigin="anonymous" />
	<link rel="preload" href="/wp-content/themes/pe-theme-child/scss/fonts/sora-v10-latin-600.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="/wp-content/themes/pe-theme-child/scss/fonts/sora-v10-latin-700.woff" as="font" crossorigin="anonymous" />
	<link rel="preload" href="/wp-content/themes/pe-theme-child/scss/fonts/sora-v10-latin-700.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="/wp-content/themes/pe-theme-child/scss/fonts/sora-v10-latin-regular.woff" as="font" crossorigin="anonymous" />
	<link rel="preload" href="/wp-content/themes/pe-theme-child/scss/fonts/sora-v10-latin-regular.woff2" as="font" crossorigin="anonymous" />

	<link type="text/css" rel="stylesheet" href="/wp-content/themes/pe-theme-child/scss/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="/wp-content/themes/pe-theme-child/scss/style.scss">

	
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pe-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12 col-sm-4">
					<div class="site-branding">
					<a href="<?php echo get_site_url(); ?>">
						<img src="/wp-content/themes/pe-theme-child/images/logo.svg" alt="Logo Heartcare" loading="false">	
					</a>
					</div>
				</div>
				<div class="col-md-8 col-xs-12 col-sm-8">
					<!-- <nav id="site-navigation" class="main-navigation">
						 <?php
						// wp_nav_menu(
						// 	array(
						// 		'theme_location' => 'menu-1',
						// 		'menu_id'        => 'primary-menu',
						// 	)
						// );
						?> 
					</nav>#site-navigation -->

					<nav class="navbar navbar-inverse" id="top-menu" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">	
            	  <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collapse navigation -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
            	<li class="sub-menu">
                	<div class="menu">
                    	<a href="#">Menu one</a>
                    	<div class="dropdown-menu">
                        	<ul>
                                <li><a href="#">All Gift Cards</a></li>
                                <li><a href="#">Pottery Barn</a></li>
                                <li><a href="#">Pottery Barn</a></li>
                                <li><a href="#">Pizza Hut</a></li>
                                <li><a href="#">Fandango</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="sub-menu">
                	<div class="menu">
                	   <a href="#">Menu Two</a>
                    	<div class="dropdown-menu">
                        	<ul>
                            	<li><a href="#">All Hotels</a></li>
                                <li><a href="#">United States</a></li>
                                <li><a href="#">Caribbean</a></li>
                                <li><a href="#">Mexico</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    <!-- End container-fluid -->
    </nav>
				</div>
			</div>
			
			
		</div>
	</header><!-- #masthead -->
