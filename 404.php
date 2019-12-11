<?php
/**
 * The 404 page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Smallis
 * @since 1.0.0
 */

get_header();
?>
		<div class="page-title-container">
			<div class="smallis-container">					
				<h3><?php _e( "This page doesn't exist", 'smallis' ); ?></h3>
			</div><!-- smallis container -->
		</div><!-- page title container -->	
		<section id="primary" class="content-area">
			<main id="main" class="site-main">

				<div class="smallis-container">
					<div class="smallis-center-content">
						<div class="smallis-404-info">
							<p><?php _e( "We can't find what you're looking for", 'smallis' ); ?></p>
							<p class="smallis-meh">
								¯\_(ツ)_/¯
							</p>	
						</div>	
						<div class="smallis-search-container">
							<p><?php _e( 'Try searching:', 'smallis' ); ?></p>
							<?php get_search_form(); ?>
						</div>
					</div>		
				</div>
					
			</main><!-- .site-main -->
		</section><!-- .content-area -->
		
<?php
get_footer();
