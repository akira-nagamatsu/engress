<?php get_header(); ?>
        <section class="about">
            <div class="container">
                <p class="lv2-heading about__lv2-heading">TOEFL学習でこんな悩みありませんか？</p>
                <p class="about__inline-text about__inline-text--first">勉強の習慣が<br class="pc-only">身についていない</p><p class="about__inline-text">勉強しているはず<br class="pc-only">なのに点数が伸びない</p><p class="about__inline-text about__inline-text--last">正しい勉強方法が<br class="pc-only">わからない</p>
                <div class="remarkable-text">
                    <div class="remarkable-text__inner">     
                        <h2 class="remarkable-text__heading">
                            Engressは<br>
                            <span class="marker">TOEFLに特化したスクール</span>です
                        </h2>
                        <p class="remarkable-text__text">
                            完全オーダーメイドで、<br class="sp-only">１人１人の悩みに合わせた最適な指導で<br>
                            TOEFLの苦手分野を克服します。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container">
                <h2 class="lv2-heading features__lv2-heading">TOEFL対策に特化したEngress3つの強み</h2>
                <div class="media media--row-reverse">
                    <figure class="media__img">
                        <div class="media__img-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature01.jpg">
                        </div>
                    </figure>
                    <div class="media__body">
                        <p class="media__label">特長 １</p>
                        <h3 class="media__title">
                            TOEFLに最適化された<br>
                            無駄のないカリキュラム
                        </h3>
                        <p class="media__text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
                    </div>
                </div>
                <div class="media">
                    <figure class="media__img">
                        <div class="media__img-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature02.jpg">
                        </div>
                    </figure>
                    <div class="media__body">
                        <p class="media__label">特長 ２</p>
                        <h3 class="media__title">
                            日本人指導歴10年以上の<br>
                            経験豊富な講師陣
                        </h3>
                        <p class="media__text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
                    </div>
                </div>
                <div class="media media--row-reverse">
                    <figure class="media__img">
                        <div class="media__img-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature03.jpg">
                        </div>
                    </figure>
                    <div class="media__body">
                        <p class="media__label">特長 ３</p>
                        <h3 class="media__title">
                            平均3ヶ月でTOEFL iBT20点アップ
                        </h3>
                        <p class="media__text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
                    </div>
                </div>
                <div class="cta" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/price.jpg);">
                    <p class="cta__text">Engressの料金プランはこちら</p>
                    <a href="<?php echo esc_url(home_url('plan')); ?>" class="skeleton-btn">料金を見てみる</a>
                </div>
            </div>
        </section>
        <section class="success-stories">
            <div class="container">
                <h2 class="lv2-heading success-stories__lv2-heading">TOEFL成功事例</h2>
                <div class="profiles">
                    <div class="profile">
                        <h3 class="profile__heading"><?php the_field('heading1'); ?></h3>
                        <p class="profile__img-wrapper">
                            <?php
                            $pic = get_field('picture1');
                            $pic_url = $pic['sizes']['thumbnail'];
                            ?>
                            <img src="<?php echo $pic_url; ?>" alt="成功者１の顔写真" class="profile__img">
                        </p>
                        <div class="profile__desc">
                            <p class="profile__job"><?php the_field('job1'); ?></p>
                            <p class="profile__name"><?php the_field('name1'); ?></p>
                        </div>
                        <p class="profile__text"><?php the_field('score1'); ?></p>
                    </div>
                    <div class="profile">
                        <h3 class="profile__heading"><?php the_field('heading2'); ?></h3>
                        <p class="profile__img-wrapper">
                            <?php
                            $pic = get_field('picture2');
                            $pic_url = $pic['sizes']['thumbnail'];
                            ?>
                            <img src="<?php echo $pic_url; ?>" alt="成功者2の顔写真" class="profile__img">
                        </p>
                        <div class="profile__desc">
                            <p class="profile__job"><?php the_field('job2'); ?></p>
                            <p class="profile__name"><?php the_field('name2'); ?></p>
                        </div>
                        <p class="profile__text"><?php the_field('score2'); ?></p>
                    </div>
                    <div class="profile">
                        <h3 class="profile__heading"><?php the_field('heading3'); ?></h3>
                        <p class="profile__img-wrapper">
                            <?php
                            $pic = get_field('picture3');
                            $pic_url = $pic['sizes']['thumbnail'];
                            ?>
                            <img src="<?php echo $pic_url; ?>" alt="成功者3の顔写真" class="profile__img">
                        </p>
                        <div class="profile__desc">
                            <p class="profile__job"><?php the_field('job3'); ?></p>
                            <p class="profile__name"><?php the_field('name3'); ?></p>
                        </div>
                        <p class="profile__text"><?php the_field('score3'); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="flow">
            <div class="container">
                <h2 class="lv2-heading flow__lv2-heading">ご利用の流れ</h2>
                <ol class="flow-list">
                    <li class="flow-list__item">
                        <div class="flow-list__number">
                            <p>01</p>
                        </div>
                        <div class="flow-list__content">
                            <p class="flow-list__title">お問い合わせ</p>
                            <p class="flow-list__text">まずはフォームまたはお電話からお申し込みください。</p>
                        </div>
                    </li>
                    <li class="flow-list__item">
                        <div class="flow-list__number">
                            <p>02</p>
                        </div>
                        <div class="flow-list__content">
                            <p class="flow-list__title">ヒアリング</p>
                            <p class="flow-list__text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
                        </div>
                    </li>
                    <li class="flow-list__item">
                        <div class="flow-list__number">
                            <p>03</p>
                        </div>
                        <div class="flow-list__content">
                            <p class="flow-list__title">学習プランのご提供</p>
                            <p class="flow-list__text">目標達成のために最適な学習プランをご提案致します。</p>
                        </div>
                    </li>
                    <li class="flow-list__item">
                        <div class="flow-list__number">
                            <p>04</p>
                        </div>
                        <div class="flow-list__content">
                            <p class="flow-list__title">ご入会</p>
                            <p class="flow-list__text">お申込み完了後、レッスンがスタートします。</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>
        <section class="faq-area">
            <div class="container">
                <h2 class="lv2-heading faq-area__lv2-heading">よくある質問</h2>
                <div class="accordion">
                    <dt class="accordion__title">
                        <button class="accordion__btn open">
                            Engressはサラリーマンでも学習を続けられるでしょうか？
                        </button>
                    </dt>
                    <dd class="accordion__body">
                        <p class="accordion__text">
                            Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                        </p>
                    </dd>
                    <dt class="accordion__title">
                        <button class="accordion__btn">
                            教材はオリジナルのものを使用しているのでしょうか？
                        </button>
                    </dt>
                    <dd class="accordion__body">
                        <p class="accordion__text">
                            教材は弊社のノウハウを詰め込んだ完全オリジナル教材となっております。最新の傾向に合わせて日々ブラッシュアップしております。
                        </p>
                    </dd>
                    <dt class="accordion__title">
                        <button class="accordion__btn">
                            講師に日本人はいますか？
                        </button>
                    </dt>
                    <dd class="accordion__body">
                        <p class="accordion__text">
                            日本人の講師も多数在籍しております。
                        </p>
                    </dd>
                    <dt class="accordion__title">
                        <button class="accordion__btn">
                            TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？
                        </button>
                    </dt>
                    <dd class="accordion__body">
                        <p class="accordion__text">
                            英語に関しては可能な限りサポートいたしますので、ぜひ一度お問い合わせください。
                        </p>
                    </dd>
                </div>
            </div>
        </section>
        <div class="two-column container">
            <section class="blog two-column__column">
                <h2 class="lv3-heading">ブログ</h2>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()): 
                ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php get_template_part('template-parts/loop', 'blog'); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </section>
            <section class="news two-column__column">
                <h2 class="lv3-heading">お知らせ</h2>
                <?php
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 3,
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()): 
                ?>
                <ul class="posts-list">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php get_template_part('template-parts/loop', 'news'); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <?php endif; ?>
            </section>
        </div>
    <?php get_footer(); ?>