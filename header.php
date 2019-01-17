<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	
	</head>

<body <?php body_class(); ?>>
<div class="wrapper">
	<div class="header-container">
	
	<!--HEADER-->
	<header class="site-header flex">
		
			<div class="logo flex1">
				<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
				<h5><?php bloginfo('description'); ?></h5>
			</div>
			<div class="flex2 top-nav clearfix">
				<span class="menu-trigger">MENU</span>
				<nav class="nav-menu">
					
					<?php
					$args = array(
						'theme_location' => 'primary', 
						'depth' => 2,
				    	'container' => false,
					);
					?>
		
					<?php wp_nav_menu( $args ); ?>
				</nav>
			</div>
		
		

		

	</header><!--/header-->
</div><!--/header-container-->
