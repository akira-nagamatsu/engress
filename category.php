<?php get_header(); ?>
        <section class="blog-list">
            <div class="container">
                <h3 class="lv3-heading blog-list__lv3-heading"><?php wp_title(''); ?>一覧</h3>
                <?php if (have_posts()): ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/loop', 'blog'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>

<?php get_footer(); ?>