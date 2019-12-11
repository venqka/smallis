<?php
/**
 * The search results page template file
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
				<h3><?php echo __( 'Search results for: ', 'smallis' ) . get_search_query(); ?></h3>
			</div><!-- smallis container -->
		</div><!-- page title container -->	
		<section id="primary" class="content-area">
			<main id="main" class="site-main">

				<div class="smallis-container">
<?php
					if ( have_posts() ) {
?>
						<div class="smallis-search-results smallis-grid-container justify-space-between grid-wrap">
<?php						
							while ( have_posts() ) {
								the_post();
?>	
								<div class="smallis-search-result smallis-grid-child-1">
									<a href="<?php the_permalink(); ?>">
										<div class="page-title-container">
											<?php echo the_title(); ?>
										</div><!-- page title container -->
										<div class="smallis-excerpt">
<?php
											echo the_excerpt();
?>
										</div><!-- smallis container -->
									</a>	
								</div>	
<?php				
							}
?>	
						</div>					
<?php					
					} 
			
			?>	
				</div>
					
			</main><!-- .site-main -->
		</section><!-- .content-area -->
		
<?php
get_footer();
