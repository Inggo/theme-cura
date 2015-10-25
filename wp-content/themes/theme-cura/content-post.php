<article id="post-<?=the_ID();?>" <?php post_class('blog-post'); ?>>
    <div class="post-thumbnail"><a href="<?=get_permalink();?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive')); ?></a></div>
    <h3><a href="<?=get_permalink();?>"><?=get_the_title();?></a></h3>
    <hr>
    <?php if (is_singular()): ?>
    <div class="content">
        <?php the_content(); ?>
    </div>
    <div class="post-meta">
        <small>By <?php the_author(); ?>, Posted on <?php the_date('F d, Y'); ?></small>
    </div>
    <div class="share">
        <span class="share-label">Share this Bite</span>
        <a target="_blank" href="//twitter.com/home?status=<?=urlencode(get_the_permalink());?>"><span class="icon icon-twitter-yellow"></span></a>
        <a target="_blank" href="//www.linkedin.com/cws/share?url=<?=urlencode(get_the_permalink());?>"><span class="icon icon-linkedin-yellow"></span></a>
        <a target="_blank" href="//www.facebook.com/sharer/sharer.php?u=<?=urlencode(get_the_permalink());?>"><span class="icon icon-facebook-yellow"></span></a>
        <a target="_blank" href="//plus.google.com/share?url=<?=urlencode(get_the_permalink());?>"><span class="icon icon-google-yellow"></span></a>
        <a target="_blank" href="mailto:?body=<?=get_the_permalink();?>"><span class="icon icon-email-yellow"></span></a>
        <a href="javascript:window.print();"><span class="icon icon-print-yellow"></span></a>
    </div>
    <div class="comments">
        <?php comments_template(); ?>
    </div>
    <?php else: ?>
    <div class="excerpt">
        <?php the_excerpt(); ?>
    </div>
    <?php endif; ?>
</article>
