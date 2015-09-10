<?php /* Template Name: Cohort Template */ get_header(); ?>

<div class="row">
    <div class="col-md-3 col-md-offset-1">
        <?=get_sidebar(); ?>
    </div>
    <div class="col-md-6">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <?=the_content(); ?>

        <?php endwhile; endif; ?>


    </div>
</div>

<?=get_footer(); ?>