<?php global $post; ?>
<div class="container container-main">
    <div class="row">
        <div class="col-xs-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (get_field('use_parent_title') && get_field('show_title')): ?>
                    <h1><?=get_the_title($post->post_parent);?></h1>
                <?php elseif (get_field('show_title')): ?>
                    <h1><?=get_the_title();?></h1>
                <?php endif; ?>
                <?php get_template_part('content', 'video'); ?>
                <?php the_content(); ?>
            <?php endwhile; else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
