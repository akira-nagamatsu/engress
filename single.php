<?php get_header(); ?>
        <div class="container container--two-column">
            <div class="container--two-column__left">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <article <?php post_class('article'); ?>>
                        <?php $current_cat = get_the_category(); ?>
                            <div class="article__head">
                                <?php display_article_category(); ?>
                                <h2 class="article__title"><?php the_title(); ?></h2>
                                <div class="article__head-footer">
                                    <?php
                                    if( function_exists('wp_social_bookmarking_light_output_e') ) {
                                        wp_social_bookmarking_light_output_e();
                                    }
                                    ?>
                                    <time class="article__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                </div>
                            </div>
                            <div class="article__body">
                                <figure class="article__img-wrapper article__img-wrapper--main">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('large', ['class' => 'article__img']); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="" class="article__img">
                                    <?php endif; ?>
                                </figure>
                                <?php the_content(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <section class="pick-up">
                    <h2 class="pick-up__title">おすすめの記事</h2>
                    <?php
                    $args = array(
                        'post__not_in' => array($post -> ID),
                        'tag' => 'pickup',
                        'posts_per_page'=> 3,
                        'orderby' => 'rand',
                    );
                    $the_query = new WP_Query($args);
                    if($the_query->have_posts()):
                        while($the_query->have_posts()) : $the_query->the_post();
                    ?>
                            <div class="blog-media pick-up__blog-media">
                                <figure class="blog-media__img">
                                    <div class="blog-media__img-inner">
                                        <?php the_post_thumbnail(); ?>
                                        <?php display_category(); ?>
                                    </div>
                                </figure>
                                <div class="blog-media__body">
                                <time class="blog-media__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                    <a href="<?php the_permalink(); ?>">
                                        <h3 class="blog-media__title"><?php echo wp_trim_words( get_the_title(), 29, '...' ); ?></h3>
                                    </a>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                    
                </section>
            </div>
            <div class="container--two-column__right">
                <?php get_sidebar('related'); ?>
                <?php get_sidebar('category'); ?>
            </div>
        </div>
<?php get_footer(); ?>