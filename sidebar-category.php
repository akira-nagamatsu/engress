                <aside class="sidebar">
                    <p class="sidebar__title">カテゴリー</p>
                    <ul>
                        <?php
                        $args = array(
                            'title_li' => '', //見出し削除
                        );
                        wp_list_categories($args);
                        ?>
                    </ul>
                </aside>