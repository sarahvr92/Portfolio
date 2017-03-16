<?php get_header(); ?>
    <div id="content">
        <div id="inner-content" class="row">
            <main id="main" class="large-8 medium-8 columns">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> itemscope
                                 itemtype="http://schema.org/BlogPosting">
                            <header class="article-header">
                                <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
                                <?php get_template_part('parts/content', 'byline'); ?>
                            </header> <!-- end article header -->

                            <section class="entry-content" itemprop="articleBody">
                                <?php the_post_thumbnail('full'); ?>
                                <?php the_content(); ?>
                            </section> <!-- end article section -->

                            <footer class="article-footer">
                                <?php wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'jointswp'), 'after' => '</div>')); ?>
                                <p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointswp') . '</span> ', ', ', ''); ?></p>
                            </footer> <!-- end article footer -->

                            <?php comments_template(); ?>
                        </article>
                    <?php endwhile;
                endif; ?>
            </main>

            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>