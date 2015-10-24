<?php 
global $theme; 
global $post;

// Get the 'featured_video' field
$post = get_field('featured_video');
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
<div class="video-frame-container youtube-video-frame-container">
    <div class="row">
        <div class="col-xs-12">
            <div class="video-container youtube-video-container">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/<?=$theme->helper->getVideoID(get_field('video_url'));?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="thumbnail-container" style="background-image: url('<?=$thumb_url;?>');"></div>
                <div class="play">
                    <span class="triangle"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
wp_reset_postdata();