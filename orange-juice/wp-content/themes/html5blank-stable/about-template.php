<?php /* Template Name: About Template */ get_header(); ?>

<div class="row">

    <div class="col-md-10 col-md-offset-1">
        <!-- section -->
        <section>

            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <?php the_post_thumbnail(array(500,500)); ?>
            <?php endif; ?>

            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                    <?php comments_template( '', true ); // Remove if you don't want comments ?>

                    <br class="clear">

                </article>
                <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                </article>
                <!-- /article -->

            <?php endif; ?>

        </section>
        <!-- /section -->
    </div>
</div>

<?php get_footer(); ?>