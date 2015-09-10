<?php /* Template Name: Home Template */ get_header(); ?>

<div class="row topiary-header">
    <h1 class="title"><?php bloginfo('name')?></h1>

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

<div class="row content list-group">
    <div class="col-md-5 col-md-offset-1 list-group-item">
        <h2 class="featured-item">
            Featured Item
        </h2>
        <?php
        $feat_prod = feature('topiary');

        if ($feat_prod->have_posts()): while ($feat_prod->have_posts()): $feat_prod->the_post();?>
            <div class="thumb-container">
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail(array(200,200)); ?>
                    </a>
                <?php endif; ?>
            </div>

            <h3><?=the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <p>List Price: $<?=types_render_field('list-price', array('output' => 'raw')); ?></p>

        <?php endwhile; endif; ?>
    </div>
    <div class="col-md-5 list-group-item">
        <h2 class="featured-post">
            Featured Post
        </h2>
        <?php
        $feat_prod = feature('post');

        if ($feat_prod->have_posts()): while ($feat_prod->have_posts()): $feat_prod->the_post();?>
            <div class="thumb-container">
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail(array(200,200)); ?>
                    </a>
                <?php endif; ?>
            </div>

            <h3><?=the_title(); ?></h3>
            <p><?php html5wp_excerpt(); ?></p>

        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>