<?php get_header(); ?>
    <div id="content">
        <div id="inner-content">
            <main id="main" role="main" class="split-page">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="split-page-image-container">
                            <?php the_post_thumbnail('large'); ?>
                        </div>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('row split-page-row'); ?> role="article"
                                 itemscope itemtype="http://schema.org/WebPage">
                            <div class="small-10 large-8 xlarge-6 column">
                                <header class="split-page-content-header">
                                    <h1>
                                        <?php if ($subtitle = trim(get_post_meta(get_the_ID(), '_split_page_subtitle', true))): ?>
                                            <span class="subheader"><?php echo $subtitle; ?></span>
                                        <?php endif; ?>

                                        <?php echo trim(get_post_meta(get_the_ID(), '_split_page_title', true)) ?: get_the_title(); ?>
                                    </h1>
                                </header>

                                <section class="entry-content split-page-content">
                                    <?php the_content(); ?>
                                    <?php wp_link_pages(); ?>
                                </section>
                            </div>
                        </article>
                    <?php endwhile;
                endif; ?>
            </main>
        </div>
    </div>
<?php get_footer(); ?>