<?php get_header('common'); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_background'); ?>)">
	<?php get_template_part('nav'); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php get_template_part('content', 'video'); ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="front-page-heading"><?=get_field('heading');?></div>
            </div>
        </div>
    </div>
</div>
<div class="subheading">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 front-page-subheading">
                <?=get_field('subheading');?>
            </div>
        </div>
    </div>
</div>
