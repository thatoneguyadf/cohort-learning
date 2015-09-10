<?php get_header(); ?>

<div class="row">
	<div class="col-md-2">
		<?php get_sidebar(); ?>
	</div>

	<div class="col-md-8 col-md-offset-1">
		<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
		<div class="row">



			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
	</div>


</div>
<?php get_footer(); ?>
