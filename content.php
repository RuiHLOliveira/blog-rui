
<article class="article">
		<h2>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<?php
		$categories_list = get_the_category_list( ' ' );
		// Make sure there's more than one category before displaying.
		if ( $categories_list ) {
			echo '<div class="cat-links">' . wp_kses_data( $categories_list ) . '</div>';
		}
		?>

		<span class="author-meta">
			<div class="author-photo">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
			</div>
			<span class="">
				<?php esc_html_e( 'By', 'balanced-blog' ); ?>
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>">
					<?php echo get_the_author_meta( 'display_name' ); ?>
				</a>
			</span>
		</span>
		
		<?php balanced_blog_widget_date_comments(); ?>

		<div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div><!-- .post-excerpt -->
		
		
</article>
