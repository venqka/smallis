<?php
/**
 * The single template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Smallis
 * @since 1.0.0
 */

get_header();
?>
	
		<section id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();

					if( has_post_thumbnail() ) {
						get_template_part( 'template-parts/post-title', 'thumbnail' );
					} else {
						get_template_part( 'template-parts/post-title' );
					}
?>
					
					<div class="smallis-container">
						<div class="smallis-grid-container smallis-post-container justify-space-between">
							<div class="post-content smallis-grid-child-2">
<?php
								echo the_content();
?>
							</div>
							<div class="post-sidebar smallis-grid-child-1">
<?php							
								dynamic_sidebar( 'main-sidebar' );
?>
							</div>
						</div>
					</div><!-- smallis container -->
<?php				
				}
			} 
			
			?>

			</main><!-- .site-main -->
		</section><!-- .content-area -->
		
<?php
get_footer();
