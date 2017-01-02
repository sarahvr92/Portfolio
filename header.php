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
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NF2WST" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>

<div class="off-canvas-wrapper">
    <div class="off-canvas-content" data-off-canvas-content>
        <header class="header" role="banner">
            <div class="header-secondary">
                <div class="header-logo-container">
                    <a href="<?php echo home_url(); ?>" class="header-logo"><?php bloginfo('name'); ?></a>
                </div>

                <ul class="social-media-list text-center show-for-medium">
                    <?php
                    $social_media = array(
                        'dribbble' => array(
                            'url' => portfolio_get_option('_theme_dribbble'),
                            'img' => get_template_directory() . '/assets/images/dribbble.svg'
                        ),
                        'github'   => array(
                            'url' => portfolio_get_option('_theme_github'),
                            'img' => get_template_directory() . '/assets/images/github.svg'
                        ),
                        'linkedin' => array(
                            'url' => portfolio_get_option('_theme_linkedin'),
                            'img' => get_template_directory() . '/assets/images/linkedin.svg'
                        ),
                        'twitter'  => array(
                            'url' => portfolio_get_option('_theme_twitter'),
                            'img' => get_template_directory() . '/assets/images/twitter.svg'
                        ),
                    );

                    foreach ($social_media as $social_profile):
                        if ($social_profile['url']): ?>
                            <li>
                                <a href="<?php echo $social_profile['url']; ?>" target="_blank">
                                    <?php echo file_get_contents($social_profile['img']); ?>
                                </a>
                            </li>
                        <?php endif;
                    endforeach; ?>
                </ul>
            </div>

            <?php portfolio_main_nav(); ?>
        </header>