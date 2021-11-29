<?php get_header(); ?>
<?php add_filter( 'wp_lazy_loading_enabled', '__return_false' ); ?>
        <div class="container">
            <?php if(have_posts()): ?>
                <?php while(have_posts()) : the_post(); ?>
                    <article class="article article--simple">
                        <div class="article__head">
                            <h2 class="article__title"><?php the_title(); ?></h2>
                            <time class="article__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                        </div>
                        <div class="article__body">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

<?php get_footer(); ?>