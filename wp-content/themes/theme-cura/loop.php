<?php global $post; ?>
<div class="row">
    <div class="col-xs-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('content', 'post'); ?>
        <?php endwhile; else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>
