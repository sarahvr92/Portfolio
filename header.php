<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">
    <meta name="theme-color" content="#FFFFFF">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="off-canvas-wrapper">
    <?php get_template_part('parts/content', 'offcanvas'); ?>

    <div class="off-canvas-content" data-off-canvas-content>
        <header class="header" role="banner">
            <?php get_template_part('parts/nav', 'offcanvas-topbar'); ?>
        </header>