<?php get_header(); ?>
    <div id="content">
        <div id="inner-content" class="inner-content row align-center">
            <main id="main" class="small-10 align-self-middle column" role="main">
                <article class="text-center">
                    <h1><?php _e('404'); ?></h1>

                    <p><?php _e('Page Not Found'); ?></p>

                    <small class="show-for-medium">
                        <?php $random_phrases = array(
                            __('I solemnly swear that I am up to no good.'),
                            __('Well, this is awkward...'),
                            __('Let\'s just go to the movies instead.'),
                            __('AAAAHHHHHHHHHHHH!!'),
                            __('Just like my motivation.'),
                        ); ?>

                        <i><?php echo $random_phrases[mt_rand(0, count($random_phrases) - 1)]; ?></i>
                    </small>

                    <?php $upload_dir = wp_upload_dir(); ?>
                    <img class="bottom-image" src="<?php echo $upload_dir['baseurl'] . '/404-gif.gif'; ?>"
                         alt="" aria-hidden="true">
                </article>
            </main>
        </div>
    </div>
<?php get_footer(); ?>