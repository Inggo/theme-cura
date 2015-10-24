<?php
/**
 * Default template
 *
 * @author  Inggo Espinosa <inggo.espinosa@gmail.com
 * @since   1.0
 */

$posts_page = get_option('page_for_posts');

get_header();
?>
<div class="content-divider"></div>
<div class="container container-main">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
        <h1><?=get_the_title($posts_page);?></h1>
        <?=get_field('subheading', $posts_page);?>
        <?php get_template_part('loop'); ?>
    </div>
    <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
    </aside>
</div>
<?php
get_footer();