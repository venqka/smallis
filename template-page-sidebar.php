<?php
/* Template name: Page with sidebar */

get_header();
?>
	
		<section id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();
?>
					<div class="page-title-container">
						<div class="smallis-container">					
							<?php echo the_title(); ?>
						</div><!-- smallis container -->
					</div><!-- page title container -->
					<div class="smallis-container">
						<div class="smallis-grid-container smallis-page-container justify-space-between">
							<div class="page-content smallis-grid-child-2">
<?php
								echo the_content();
?>
							</div>
							<div class="page-sidebar smallis-grid-child-1">
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
