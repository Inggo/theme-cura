<?php
global $post;
global $faqs;

if (!is_integer($faqs)) {
    $faqs = 0;
}

$faqs++;

foreach ($posts as $i => $post) {
    setup_postdata($post);
?>
<div class="col-xs-12">
    <div class="cura-faq">
        <h3 class="cura-faq-question">
            <a class="collapsed" href="javascript:;" data-target="#faq-<?=$faqs?>-<?=$post->ID?>" data-toggle="collapse">
                <?=get_field('question')?>
                <span class="icon icon-caret-up"></span>
                <span class="icon icon-caret-down"></span>
            </a>
        </h3>
        <div class="contents collapse" id="faq-<?=$faqs?>-<?=$post->ID?>">
            <div class="faq-inner">
                <?=get_field('answer')?>
            </div>
        </div>
    </div>
</div>
<?php
}

wp_reset_postdata();