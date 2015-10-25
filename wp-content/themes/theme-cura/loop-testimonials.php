<?php
global $post;

foreach ($posts as $i => $post) {
    setup_postdata($post);
?>
<div class="col-xs-12 cura-testimonial-container">
    <div class="cura-testimonial">
        <div class="testimonial-image"><?= has_post_thumbnail() ? get_the_post_thumbnail($post->ID, 'cura_testimonial', array('class' => 'img-responsive')) : ''; ?></div>
        <h3 class="cura-testimonial-title"><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <?php if (get_field('testimonial_video')): ?>
            <?php get_template_part('content', 'testimonial_video'); ?>
        <?php endif; ?>
    </div>
</div>
<?php
}

wp_reset_postdata();