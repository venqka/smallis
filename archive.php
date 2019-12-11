<?php
/**
 * The page template file
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
				<div class="archive-title-container">
					<div class="smallis-container">					
						<?php echo __( 'Archive for ', 'smallis' ) . single_cat_title( '', false ); ?>
					</div><!-- smallis container -->
				</div><!-- page title container -->
			<?php
			if ( have_posts() ) {
?>
				<div class="smallis-container">
					<div class="smallis-posts-container smallis-grid-container justify-space-between grid-wrap">
<?php
					while ( have_posts() ) {
						the_post();
?>
						<div class="smallis-post smallis-grid-child-1">
							<a href="<?php echo get_the_permalink(); ?>" title="<?php echo the_title(); ?>">
								<div class="smallis-post-image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
								</div>
								<div class="smallis-post-title-container">
									<?php echo the_title( '<h3>', '</h3>' ); ?>
								</div>
								<div class="smallis-post-exceprt-container">	
<?php
									echo the_excerpt();
?>
								</div>
								</a>
						</div><!-- smallis post -->
<?php				
				}
?>
					</div>
				</div><!-- smallis container -->	
<?php				
			} 
			
			?>

			</main><!-- .site-main -->
		</section><!-- .content-area -->
		
<?php
get_footer();
