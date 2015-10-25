<?php
global $post;

foreach ($posts as $post) {
    setup_postdata($post);
?>
<div class="col-xs-12 col-lg-5ths">
    <div class="cura-reason text-center">
        <div class="contents">
            <?= has_post_thumbnail() ? get_the_post_thumbnail() : ''; ?>
            <?php the_title(); ?>
        </div>
    </div>
</div>
<?php
}

wp_reset_postdata();