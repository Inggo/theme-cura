<?php get_header('common'); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_background'); ?>)">
	<?php get_template_part('nav'); ?>
    <?php get_template_part('content', 'video'); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="front-page-heading"><?=get_field('heading');?></h1>
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
