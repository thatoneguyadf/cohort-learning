<?php /* Template Name: Orange Juice Template */ get_header(); ?>

<div class="row">

    <div class="col-md-10 col-md-offset-1">

            <?php
            $args = array(
                'post_type' => 'orange-juice',
                'order' => 'ASC',
                'orderby' => 'date'
            );

            $ojs = new WP_Query($args);

            if ($ojs->have_posts()): while ($ojs->have_posts()): $ojs->the_post();?>
        <div class="row orange-juice">
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail(array(500,500)); ?>
                    </a>
                <?php endif; ?>

                <h1><?=the_title(); ?></h1>
                <p><?=the_content(); ?></p>
        </div>
        <div class="divider">
            <hr>
        </div>
            <?php endwhile; endif; ?>

    </div>
</div>

<?=get_footer(); ?>