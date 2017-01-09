<footer class="footer text-center hide-for-medium">
    <ul class="social-media-list">
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
</footer>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>