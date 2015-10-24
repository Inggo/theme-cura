<article id="post-<?=the_ID();?>" class="blog-post">
    <div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
    <h2><?=get_the_title();?></h2>
    <?php the_content(); ?>
</article>
