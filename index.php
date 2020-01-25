<?php get_header(); ?>

<?php get_template_part( 'template-parts/template-part', 'head' ); ?>
<?php get_template_part( 'template-parts/homepage', 'widgets' );?>
<!-- start content container -->
<div class="">

	<div class="col-md-<?php balanced_blog_main_content_width_columns(); ?>">
		<div class="flexContentDad">

			<?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile;

				the_posts_pagination();

			else :

				get_template_part( 'content', 'none' );

			endif;
			?>

		</div>
	</div>

	<?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
