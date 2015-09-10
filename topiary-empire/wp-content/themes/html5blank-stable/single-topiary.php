<?php get_header(); ?>
<div class="row topiary-header">
	<h1 class="title"><?php the_title(); ?></h1>
</div>
<div class="row content blog-content">
	<div class="col-md-6 col-md-offset-1">

		<!-- section -->
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(300,300)); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
			</article>
			<?php endwhile; ?>
		</section>

	</div>
	<div class="col-md-4">
		<section>

			<?php while (have_posts()) : the_post(); ?>

			<article>

				<h1><?=the_title(); ?></h1>

				<p><?php the_content(); // Dynamic Content ?></p>

				<p>List Price: $<?=types_render_field('list-price', array('output' => 'raw')); ?></p>

				<p><?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); ?></p>

				<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); ?></p>


			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</div>
</div>


<?php get_footer(); ?>
