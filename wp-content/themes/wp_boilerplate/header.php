<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>

	<style type="text/css">
		@media (max-width: 500px) {
			#linkhome{
				display: none;
			}

			input[type="text"], input[type="email"], input[type="tel"] {
				 width: 80%;
				 overflow: scroll;
			}


		}
	</style>
</head>
<body class="main-bcolor-2 main-font">

	<header>
		
		<!-- REDES SOCIALES -->
		<nav class="navbar navbar-default">
			 <div class="container-fluid main-bcolor-1">
			   <div class="navbar-header">
				     <a class="navbar-brand" href="#">
				     	<i class="fa fa-facebook fa-2" aria-hidden="true"></i>
				     </a>
				     <a class="navbar-brand" href="#">
				       <i class="fa fa-instagram fa-2" aria-hidden="true"></i>
				     </a>
				     <a class="navbar-brand" href="#">
				       <i class="fa fa-twitter fa-2" aria-hidden="true"></i>
				     </a>
			   </div>
			   <ul class="nav navbar-nav navbar-right" id="linkhome">
			   		<li><a href="#">lelu.cl</a></li>
       			</ul>
			 </div>
		</nav>

		<!-- LOGO -->
		<div class="container">
			<div class="jumbotron" id='up-block'>
				<img id='img-logo' class="img-responsive center-block" src=<?php echo get_parent_theme_file_uri('assets/images/logo.jpg')  ?>>
			</div>
		</div>

		<!-- BARRA NAVEGACION --> 

		<ul class="nav nav-tabs nav-justified main-bcolor-1" id="navigation">
		  <li role="presentation" class="font-size-m"><a href=<?php echo get_parent_theme_file_uri('sobre-nosotros')  ?>>Sobre Nosotros</a></li>
		  <li role="presentation" class="font-size-m"><a href=<?php echo get_parent_theme_file_uri('menus')  ?>>Menú de Hoy</a></li>
		  <li role="presentation" class="font-size-m"><a href=<?php echo get_parent_theme_file_uri('pedidos')  ?>>Pedidos</a></li>
		  <li role="presentation" class="font-size-m"><a href=<?php echo get_parent_theme_file_uri('blog')  ?>>Blog</a></li>
		</ul>

	</header>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>