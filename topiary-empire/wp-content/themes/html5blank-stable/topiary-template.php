<?php /* Template Name: Topiary Template */ get_header(); ?>

<div class="row topiary-header">
    <h1 class="title"><?php the_title(); ?></h1>
</div>
<div class="row content">
    <div class="col-xs-10 col-xs-offset-1 list-group">
        <?php
        $args = array(
            'post_type' => 'topiary',
            'order' => 'ASC',
            'orderby' => 'date'
        );

        $ojs = new WP_Query($args);

        if ($ojs->have_posts()): while ($ojs->have_posts()): $ojs->the_post();?>
            <div class="col-md-4 topiary-item list-group-item">
                <div class="thumb-container">
                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(array(120,120)); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <h1><?=the_title(); ?></h1>
                <p><?=the_content(); ?></p>
                <p>List Price: $<?=types_render_field('list-price', array('output' => 'raw')); ?></p>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?=get_footer(); ?>
