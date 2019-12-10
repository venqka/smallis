<?php
/**
 * The page templatefile
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
?>
					<div class="page-title-container">
						<div class="smallis-container">					
							<?php echo the_title(); ?>
						</div><!-- smallis container -->
					</div><!-- page title container -->
					<div class="smallis-container">
<?php
						echo the_content();
?>
					</div><!-- smallis container -->
<?php				
				}
			} 
			
			?>

			</main><!-- .site-main -->
		</section><!-- .content-area -->
		
<?php
get_footer();
