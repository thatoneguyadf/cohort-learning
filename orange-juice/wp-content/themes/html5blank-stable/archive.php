<?php get_header(); ?>
<div class="row">
	<div class="col-md-2">
		<?php get_sidebar(); ?>
	</div>

	<div class="col-md-8 col-md-offset-1">
		<!-- section -->
		<div class="row orange-juice">

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
		<!-- /section -->
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
