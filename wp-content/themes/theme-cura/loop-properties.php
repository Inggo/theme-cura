<?php
global $post;

foreach ($posts as $post) {
    setup_postdata($post);
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
    $thumb_url = $thumb_url_array[0];
?>
<div class="col-xs-12 col-sm-6 col-md-4">
    <div class="cura-property text-center" style="background-image: url('<?=$thumb_url?>')">
        <div class="contents">
            <h3 class="cura-property-title"><?php the_title(); ?></h3>
            <ul class="cura-property-info list-inline">
            <?php if (get_field('property_bed')): ?>
                <li><?=get_field('property_bed');?> <span class="icon icon-bed"></span></li>
            <?php endif; ?>
            <?php if (get_field('property_bath')): ?>
                <li><?=get_field('property_bed');?> <span class="icon icon-bath"></span></li>
            <?php endif; ?>
            <?php if (get_field('property_parking')): ?>
                <li><?=get_field('property_parking');?> <span class="icon icon-parking"></span></li>
            <?php endif; ?>
            </ul>
            <div class="cura-property-agent">
                <?=get_field('property_agent');?>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
</div>
<?php
}

wp_reset_postdata();