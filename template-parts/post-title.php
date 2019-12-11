<div class="post-title-container">
	<div class="smallis-container smallis-grid-container justify-space-between">
			<div class="post-title">			
				<?php echo the_title(); ?>
			</div>
			<div class="post-meta">
				<span class="post-author"><i class="icon-author"></i><?php the_author(); ?></span>
				<span class="post-tags"><i class="icon-tag"></i>
<?php		
					$post_tags = get_the_tags( get_the_ID() );
					foreach( $post_tags as $post_tag ) {
						echo '<span class="post-tag">' . $post_tag->name . '</span>';
					}
?>
				</span>
				<span class="post-date"><i class="icon-date"></i> <?php echo get_the_date(); ?></span>
			</div>	
		</div>
	</div>	