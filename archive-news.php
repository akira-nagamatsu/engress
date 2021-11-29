<?php get_header(); ?>
        <section class="news-list">
            <div class="container">
                <h3 class="lv3-heading news-list__lv3-heading">お知らせ一覧</h3>
                <ul class="posts-list news-list__posts-list">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('template-parts/loop', 'news'); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <div class="wp-pagenavi-wrapper">
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                </div>
            </div>
        </section>

<?php get_footer(); ?>