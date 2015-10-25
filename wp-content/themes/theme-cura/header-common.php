<?php
global $theme;
global $post;
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?=$theme->helper->getTitleTag();?></title>
    <?php wp_head(); ?>
</head>
<body <?=body_class($post->post_name);?>>
    <div class="page-wrapper">