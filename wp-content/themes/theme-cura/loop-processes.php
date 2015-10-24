<?php
global $post;

foreach ($posts as $post) {
    setup_postdata($post);
?>
<div class="col-xs-12">
    <div class="cura-process text-center">
        <div class="contents">
            <?= has_post_thumbnail() ? get_the_post_thumbnail() : ''; ?>
            <h2 class="cura-process-title"><?php the_title(); ?></h2>
            <hr>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php
}

wp_reset_postdata();