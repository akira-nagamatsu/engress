<?php get_header(); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()) : the_post(); ?>
            <section class="<?php echo $post->post_name; ?>">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </section>
    <?php endwhile; ?>
<?php endif; ?>
    
<?php get_footer(); ?>