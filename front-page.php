<?php
/**
 * The front page template file
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
			do_action( 'smallis_home_before_content' );
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();
?>
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
