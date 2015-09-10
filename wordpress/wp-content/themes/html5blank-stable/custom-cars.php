<?php /* Template Name: Cars Template */ get_header(); ?>

<div class="row">
    <div class="col-md-3 col-md-offset-1">
        <?=get_sidebar(); ?>
    </div>
    <div class="col-md-6">

        <?php
        $args = array(
            'post_type' => 'car',
            'order' => 'ASC',
            'orderby' => 'date'
        );

        $cars = new WP_Query($args);

        if ($cars->have_posts()): while ($cars->have_posts()): $cars->the_post();
        ?>
        <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
            <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
        <?php endif; ?>

        <h1><?=the_title(); ?></h1>
        <p><?=the_content(); ?></p>

        <?php endwhile; endif; ?>

    </div>
</div>

<?=get_footer(); ?>
