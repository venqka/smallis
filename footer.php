<?php
/**
 * Footer
 *
 *
 * @package WordPress
 * @subpackage Smallis
 * @since 1.0.0
 */
?>


		<footer>
			<div class="smallis-container">
				<div class="smallis-footer-columns smallis-grid-container">

					<div class="smallis-footer-column smallis-grid-child-1">
						<?php dynamic_sidebar( 'footer1-sidebar' ); ?>
					</div><!-- smallis footer column -->
					
					<div class="smallis-footer-column smallis-grid-child-1">
						<?php dynamic_sidebar( 'footer2-sidebar' ); ?>
					</div><!-- smallis footer column -->

					<div class="smallis-footer-column smallis-grid-child-1">
						<?php dynamic_sidebar( 'footer3-sidebar' ); ?>
					</div><!-- smallis footer column -->

				</div><!-- smallis footer columns -->
				<div class="smallis-footer-copyright smallis-grid-container">

					<div class="smallis-footer-copyright-left smallis-grid-child-1">
						<p>Prowdly Powered by Wordpress</p>
					</div><!-- smallis footer copyright left-->
					
					<div class="smallis-footer-copyright-right smallis-grid-child-1">
						<p>Here be copyright text</p>
					</div><!-- smallis footer copyright right-->

				</div><!-- smallis footer copyright -->	
			</div><!-- smallis container -->
		</footer>

		<?php wp_footer(); ?>

	</body>

</html>