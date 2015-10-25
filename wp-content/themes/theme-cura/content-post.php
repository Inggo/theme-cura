<article id="post-<?=the_ID();?>" <?php post_class('blog-post'); ?>>
    <div class="post-thumbnail"><a href="<?=get_permalink();?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive')); ?></a></div>
    <h3><a href="<?=get_permalink();?>"><?=get_the_title();?></a></h3>
    <hr>
    <?php if (is_singular()): ?>
    <?php the_content(); ?>
    <?php else: ?>
    <div class="excerpt">
        <?php the_excerpt(); ?>
    </div>
    <?php endif; ?>
</article>
