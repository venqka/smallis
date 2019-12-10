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

			<div class="smallis-header-wrap">

				<div class="smallis-site-info">

					<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				</div><!-- smallis site info -->
				
				<div class="smallis-navigation-wrap">

				</div><!-- smallis navigation wrap -->	
			</div><!-- smallis header wrap-->		
		</header>