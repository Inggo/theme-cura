<?php
/**
 * Front-Page template
 *
 * @author Inggo Espinosa
 * @since 1.0
 */

get_header('front');
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php
get_footer();