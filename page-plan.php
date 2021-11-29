<?php get_header(); ?>
    <main>
        <section class="fee-structure">
            <div class="container">
                <h3 class="lv3-heading">料金体系</h3>
                <div class="plus fee-structure__plus">
                    <div class="plus__term">
                        <p>入会金 39,800円</p>
                    </div>
                    <p class="plus__addition"></p>
                    <div class="plus__term">
                        <p>月額費用</p>
                    </div>
                </div>
                <p class="fee-structure__text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
            </div>
        </section>
        <section class="price-plans">
            <div class="container">
                <h3 class="lv3-heading price-plans__lv3-heading">料金表</h3>
                <div class="price-boxes__wrapper js-scrollable">
                    <ul class="price-boxes">
                        <li class="price-boxes__item price-box">
                            <div class="price-box__header">
                                <p class="price-box__title">基礎プラン</p>
                            </div>
                            <div class="price-box__body">
                                <p class="price-box__price"><?php the_field('basic-plan'); ?></p>
                                <p class="price-box__unit">*月額（税抜価格）</p>
                                <p class="price-box__feature check-mark">カリキュラム作成</p>
                                <p class="price-box__feature check-mark">TOEFL学習サポート</p>
                                <p class="price-box__feature check-mark">週一回のビデオMTG</p>
                            </div>
                        </li>
                        <li class="price-boxes__item price-box">
                            <div class="price-box__header">
                                <p class="price-box__title">演習プラン</p>
                            </div>
                            <div class="price-box__body">
                                <p class="price-box__price"><?php the_field('exercise-plan'); ?></p>
                                <p class="price-box__unit">*月額（税抜価格）</p>
                                <p class="price-box__feature check-mark">カリキュラム作成</p>
                                <p class="price-box__feature check-mark">TOEFL学習サポート</p>
                                <p class="price-box__feature check-mark">週一回のビデオMTG</p>
                                <p class="price-box__feature check-mark">月二回の模試（解説付き）</p>
                            </div>
                        </li>
                        <li class="price-boxes__item price-box price-box--recommended">
                            <div class="price-box__header">
                                <p class="price-box__title">おすすめ</p>
                                <p class="price-box__title">志望校対策プラン</p>
                            </div>
                            <div class="price-box__body">
                                <p class="price-box__price"><?php the_field('school-plan'); ?></p>
                                <p class="price-box__unit">*月額（税抜価格）</p>
                                <p class="price-box__feature check-mark">カリキュラム作成</p>
                                <p class="price-box__feature check-mark">TOEFL学習サポート</p>
                                <p class="price-box__feature check-mark">週一回のビデオMTG</p>
                                <p class="price-box__feature check-mark">月二回の模試（解説付き）</p>
                                <p class="price-box__feature check-mark">週一の英語面接対策</p>
                            </div>
                        </li>
                        <li class="price-boxes__item price-box">
                            <div class="price-box__header">
                                <p class="price-box__title">フレックスプラン</p>
                            </div>
                            <div class="price-box__body">
                                <p class="price-box__price"><?php the_field('flex-plan'); ?></p>
                                <p class="price-box__unit">*月額（税抜価格）</p>
                                <p class="price-box__feature">＊別途ご相談ください</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

<?php get_footer(); ?>