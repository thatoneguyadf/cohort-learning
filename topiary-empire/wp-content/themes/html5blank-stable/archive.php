<?php get_header(); ?>

<div class="row topiary-header">
	<h1 class="title"><?php bloginfo('name'); ?> Blog</h1>
</div>
<div class="row content blog-content">
	<div class="col-md-2 sidebar-container">
		<?php get_sidebar(); ?>
	</div>
	<div class="col-md-10">
		<div class="row">
			<div class="col-md-8 col-md-offset-1">
				<!-- section -->
				<section>

					<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</section>
				<!-- /section -->
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
