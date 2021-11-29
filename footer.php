    <?php if(is_page('contact') || is_page('thanks')): ?>
    <?php else: ?>
        <div class="cta-area">
            <div class="cta cta-area__cta" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/cta.jpg);">
                <div class="cta__text">まずは無料で資料請求から</div>
                <a href="<?php echo esc_url(home_url('contact')); ?>" class="rounded-btn">資料請求</a>
                <a href="<?php echo esc_url(home_url('contact')); ?>" class="underlined-link">お問い合わせ</a>
            </div>
            <div class="cta-number">
                <p class="cta-number__lead">お電話でのお問い合わせはこちら</p>
                <p class="cta-number__number">0123-456-7890</p>
                <p class="cta-number__text">平日  08:00~20:00</p>
            </div>
        </div>
    <?php endif; ?>
    </main>

    <!-- ページトップに戻るボタン -->
    <div id="page-top" class="page-top">
        <a href="#" class="page-top__button">
            <div class="page-top__icon"></div>
        </a>
    </div>

    <footer class="footer">
        <div class="footer__inner">
            <div class="container footer__container">
                <nav>
                    <?php
                    $args = array(
                    'menu' => 'global-navigation',
                    'menu_class' => 'horizontal-nav footer__horizontal-nav',
                    'container' => false,
                    'add_li_class' => 'horizontal-nav__item', // liタグへclass追加
                    );
                    wp_nav_menu($args);
                    ?>
                </nav>
                <div class="buisiness-hours footer__buisiness-hours">
                    <p class="buisiness-hours__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="サイトロゴ" class="site-title__logo">
                    </p>
                    <div class="telephone buisiness-hours__telephone">
                        <a href="tel:0000-000-000">
                            <figure class="telephone__icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/white-telephone.png">
                            </figure>
                            <p class="telephone__number">0123-456-7890</p>
                        </a>
                        <p class="telephone__text">平日08:00〜20:00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <p class="copyright">© 2020 Engress. </p>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>