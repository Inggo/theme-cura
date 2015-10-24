<?php global $theme; ?>
<div class="video-container youtube-video-container">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube.com/embed/<?= $theme->helper->getVideoID(get_field('video_link')); ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="thumbnail-container" style="background-image: url('<?=$theme->helper->getVideoThumbnailFromLink(get_field('video_link'));?>');"></div>
    <div class="play">
        <span class="triangle"></span>
    </div>
</div>
