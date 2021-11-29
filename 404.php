<?php get_header(); ?>
        <section class="not-found">
            <div class="container">
                <p class="not-found__text">お探しのページは見つかりませんでした。<br>
                申し訳ございませんが<a href="<?php echo esc_url(home_url()); ?>" class="not-found__link">こちらのリンク</a>からトップページにお戻りください。</p>                
            </div>
        </section>
<?php get_footer(); ?>