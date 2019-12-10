<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
