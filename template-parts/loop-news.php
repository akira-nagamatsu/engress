                            <li class="posts-list__item">
                                <time class="posts-list__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="posts-list__title"><?php echo wp_trim_words( get_the_title(), 29, '...' ); ?></h3>
                                </a>
                            </li>