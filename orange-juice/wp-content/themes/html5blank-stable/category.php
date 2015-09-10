<?php get_header(); ?>
<div class="row">
	<div class="col-md-2">
		<?php get_sidebar(); ?>
	</div>

	<div class="col-md-8 col-md-offset-1">
		<!-- section -->
		<div class="row orange-juice">

			<h1><?php _e( 'Entries for ', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
		<!-- /section -->
	</div>


</div>
<?php get_footer(); ?>
