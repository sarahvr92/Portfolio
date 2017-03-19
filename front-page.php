<?php get_header(); ?>
    <div id="content">
        <div id="inner-content">
            <main id="main" class="split-page">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="split-page-image-container">
                            <?php the_post_thumbnail('large'); ?>
                        </div>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('split-page-content-container'); ?> itemscope
                                 itemtype="http://schema.org/WebPage">
                            <div class="row split-page-content-header-row">
                                <div class="small-1 medium-2 column hide-for-large"></div>
                                <div class="small-10 medium-9 large-10 column">
                                    <header class="split-page-content-header">
                                        <h1 class="entry-title">
                                            <?php if ($subtitle = trim(get_post_meta(get_the_ID(), '_split_page_subtitle', true))): ?>
                                                <span class="subheader"><?php echo $subtitle; ?></span>
                                            <?php endif; ?>

                                            <?php echo trim(get_post_meta(get_the_ID(), '_split_page_title', true)) ?: get_the_title(); ?>
                                        </h1>
                                    </header>
                                </div>
                            </div>

                            <div class="row split-page-content-row">
                                <div class="small-10 medium-8 large-10 column">
                                    <section class="entry-content split-page-content">
                                        <?php the_content(); ?>
                                        <?php wp_link_pages(); ?>
                                    </section>
                                </div>
                            </div>
                        </article>
                    <?php endwhile;
                endif; ?>
            </main>
        </div>
    </div>
<?php get_footer(); ?>