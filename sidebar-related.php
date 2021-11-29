                <aside class="sidebar">
                    <p class="sidebar__title">関連記事</p>
                    <?php
                    $categories = get_the_category();
                    $category_ID = array();
                    foreach($categories as $category):
                      array_push( $category_ID, $category -> cat_ID);
                    endforeach ;
                    $args = array(
                        'post__not_in' => array($post -> ID),
                        'posts_per_page'=> 3,
                        'category__in' => $category_ID,
                        'orderby' => 'rand',
                    );
                    $the_query = new WP_Query($args);
                    if($the_query->have_posts()):
                        while($the_query->have_posts()) : $the_query->the_post();
                    ?>
                            <div class="blog-media sidebar__blog-media">
                                <figure class="blog-media__img">
                                    <div class="blog-media__img-inner">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="">
                                        <?php endif; ?>
                                    </div>
                                </figure>
                                <div class="blog-media__body">
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
                </aside>