<?php if ( have_comments() ) : ?>
<div class="current-comments">
    <ol class="commentlist">
    <?php wp_list_comments();?>
    </ol>
    <div class="row curreont-comments-navigation">
        <div class="col-xs-6 text-left"><?php previous_comments_link() ?></div>
        <div class="col-xs-6 text-right"><?php next_comments_link() ?></div>
    </div>
</div>
<?php endif; ?>
<?php 
// Display the comment form
comment_form(array(
    'title_reply'          => __('Leave a comment', 'theme-cura'),
    'comment_notes_before' => '',
    'comment_notes_after'  => '',
    'label_submit'         => __('Submit', 'theme-cura'),
    'comment_field'        => '<p class="comment-form-comment"><textarea id="comment" name="comment" rows="2" aria-required="true" placeholder="Enter your comment here..."></textarea></p>'
));
