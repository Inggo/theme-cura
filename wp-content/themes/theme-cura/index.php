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
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10">
        <h1><?=get_the_title($posts_page);?></h1>
        <?=get_field('subheading', $posts_page);?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10">
        <?php get_template_part('loop'); ?>
    </div>
    <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
        <?php get_search_form(); ?>
    </aside>
</div>
<?php
get_footer();