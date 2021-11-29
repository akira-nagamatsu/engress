                        <div 
                        <?php
                        if(is_home() || is_category()):
                            $classes = array(
                                'blog-media',
                                'blog-list__blog-media',
                            );
                        else:
                            $classes = array(
                                'blog-media',
                            );
                        endif;
                        post_class($classes); 
                        ?>>
                            <figure class="blog-media__img">
                                <div class="blog-media__img-inner">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="">
                                    <?php endif; ?>
                                    <?php display_category(); ?>
                                </div>
                            </figure>
                            <div class="blog-media__body">
                                <time class="blog-media__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="blog-media__title">
                                        <?php
                                            echo wp_trim_words( get_the_title(), 29, '...' ); 
                                        ?>
                                    </h3>
                                </a>
                                <?php if(is_home() || is_category()): ?>
                                    <p class="blog-media__text"><?php echo wp_trim_words( get_the_content(), 60, '...' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>