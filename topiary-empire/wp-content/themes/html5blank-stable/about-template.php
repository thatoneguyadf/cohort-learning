<?php /* Template Name: About Template */ get_header(); ?>

<div class="row topiary-header">
    <h1 class="title"><?php the_title(); ?></h1>
</div>

<div class="row content">
    <div class="col-xs-10 col-xs-offset-1">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

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
    </div>
</div>

<?=get_footer(); ?>