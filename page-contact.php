<?php get_header(); ?>
<?php
//余分なタグを出力しないようにする
if(is_page('contact')) {
    remove_filter('the_content', 'wpautop');
}
?>
    <main>
        <section class="form-area">
            <div class="container">
                <p class="form-area__lead">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
                <?php
                if(have_posts()) : 
                    while(have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>