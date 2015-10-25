<?php
global $post;

foreach ($posts as $i => $post) {
    setup_postdata($post);
?>
<div class="col-xs-12">
    <div class="cura-team-member">
        <h2 class="cura-team-member-title">
            <a class="<?=$i > 0 ? 'collapsed' : ''?>" href="javascript:;" data-target="#team-member-<?=$post->ID?>" data-toggle="collapse">
                <?php the_title(); ?>
                <span class="icon icon-caret-up"></span>
                <span class="icon icon-caret-down"></span>
            </a>
        </h2>
        <div class="contents collapse <?= $i > 0 ? '' : 'in'; ?>" id="team-member-<?=$post->ID?>">
            <div class="team-member-inner">
                <?= has_post_thumbnail() ? get_the_post_thumbnail($post->ID, 'cura_team_member', array('class' => 'team-member-image')) : ''; ?>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php
}

wp_reset_postdata();