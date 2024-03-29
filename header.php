<?php
/**
 * Header
 *
 *
 * @package WordPress
 * @subpackage Smallis
 * @since 1.0.0
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<?php wp_head(); ?>

		<title><?php bloginfo( 'name' ); ?></title>

	</head>

	<body <?php body_class(); ?>>

		<header>

			<div class="smallis-container">
				<div class="smallis-header-wrap smallis-grid-container justify-space-between">

					<div class="smallis-site-info align-baseline">

						<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
					</div><!-- smallis site info -->
					
					<div class="smallis-navigation-wrap align-baseline smallis-desktop-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</div><!-- smallis navigation wrap -->
					<div class="smallis-mobile-menu align-baseline">
						<span class="smallis-menu-toggle"><i class="icon-menu"></i></span>
							<div class="smallis-navigation-wrap">
								<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
							</div>	
					</div><!-- smallis navigation wrap -->
					</div>	
				</div><!-- smallis header wrap-->
			</div><!-- smallis-container-->			
		</header>