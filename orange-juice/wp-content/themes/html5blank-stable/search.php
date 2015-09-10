<?php get_header(); ?>
<div class="row">
	<div class="col-md-2">
		<?php get_sidebar(); ?>
	</div>

	<div class="col-md-8 col-md-offset-1">
		<!-- section -->
		<div class="row">

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
		<!-- /section -->
	</div>


</div>
<?php get_footer(); ?>
