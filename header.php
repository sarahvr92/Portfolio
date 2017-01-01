<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NF2WST');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">
    <meta name="theme-color" content="#FFFFFF">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NF2WST" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<div class="off-canvas-wrapper">
    <div class="off-canvas-content" data-off-canvas-content>
        <header class="header" role="banner">
            <div class="header-secondary">
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>

            <div class="header-primary">
                <?php portfolio_main_nav(); ?>
            </div>
        </header>