<?php
global $theme;
global $post;
global $testimonial_videos;

if (!is_array($testimonial_videos)) {
    $testimonial_videos = array();
}

// Get the 'testimonial_video' field
$post = get_field('testimonial_video');
setup_postdata($post);

// Prepare image
if (has_post_thumbnail()) {
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
    $thumb_url = $thumb_url_array[0];
} else {
    $thumb_url = $theme->helper->getVideoThumbnailFromLink(get_field('video_url'));
}
?>
<div class="testimonial-video-button">
    <a href="javascript:;" data-toggle="modal" data-target="#testimonial-<?=$post->ID?>">
        <span class="testimonial-video-label">Click Play</span>
        <div class="thumbnail-container" style="background-image: url('<?=$thumb_url;?>');">
            <div class="play">
                <span class="icon icon-play"></span>
            </div>
        </div>
    </a>
</div>

<?php
if (!in_array($post->ID, $testimonial_videos)) {
    $testimonial_videos[] = $post->id;
?>
<div class="modal fade in" id="testimonial-<?=$post->ID?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/<?=$theme->helper->getVideoID(get_field('video_url'));?>"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
wp_reset_postdata();
