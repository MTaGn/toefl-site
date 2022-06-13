<?php get_header(); ?>

<main class="main-container">
    <div class="prie-page-container">
        <div class="prie-page-container__mainvisual-box">
            <h1 class="prie-page-container__title">コース・料金</h1>
        </div>
        <div class="breadcrumb-box">
            <?php get_template_part("template-parts/breadcrumb") ?>
        </div>
        <div class="prie-page-container__inner-box">
            <div class="prie-page-container__price-desc-box">
                <h2 class="prie-page-container__subheading">料金体系</h2>
                <div class="prie-page-container__price-figure-box">
                    <div class="prie-page-container__admission-block">
                        <p class="prie-page-container__admission-text">入会金 39,800円</p>
                    </div>
                    <div class="prie-page-container__plus-block"></div>
                    <div class="prie-page-container__monthly-block">
                        <p class="prie-page-container__monthly-text">月額費用</p>
                    </div>
                </div>
                <div class="prie-page-container__desc-block">
                        <p class="prie-page-container__price-desc-text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
                </div>
            </div>

            <div class="prie-page-container__price-table">
                <?php
                    $basePrice = get_field("base-price");
                    $exercisePrice = get_field("exercise-price");
                    $recommendPrice = get_field("recommend-price");
                    $flexPrice = get_field("flex-price");
                ?>
                <h2 class="prie-page-container__subheading">料金表</h2>
                <div class="prie-page-container__price-table-figures-box">
                    <div class="prie-page-container__price-table-figure">
                        <div class="prie-page-container__price-table-plan">
                            <p class="prie-page-container__price-table-plan-title">基礎プラン</p>
                        </div>
                        <div class="prie-page-container__price-table-text-area">
                            <div class="prie-page-container__price-table-price">
                                <p class="prie-page-container__price-table-text"><?php echo $basePrice; ?>円~</p>
                                <p class="prie-page-container__price-table-caption">*月額（税抜価格）</p>
                            </div>
                            <div class="prie-page-container__price-table-support">
                                <p class="prie-page-container__price-table-support-text">カリキュラム作成</p>
                                <p class="prie-page-container__price-table-support-text">TOEFL学習サポート</p>
                                <p class="prie-page-container__price-table-support-text">週一回の学習MTG</p>
                            </div>
                        </div>
                    </div>

                    <div class="prie-page-container__price-table-figure">
                        <div class="prie-page-container__price-table-plan">
                            <p class="prie-page-container__price-table-plan-title">演習プラン</p>
                        </div>
                        <div class="prie-page-container__price-table-text-area">
                            <div class="prie-page-container__price-table-price">
                                <p class="prie-page-container__price-table-text"><?php echo $exercisePrice; ?>円~</p>
                                <p class="prie-page-container__price-table-caption">*月額（税抜価格）</p>
                            </div>
                            <div class="prie-page-container__price-table-support">
                                <p class="prie-page-container__price-table-support-text">カリキュラム作成</p>
                                <p class="prie-page-container__price-table-support-text">TOEFL学習サポート</p>
                                <p class="prie-page-container__price-table-support-text">週一回の学習MTG</p>
                                <p class="prie-page-container__price-table-support-text">月二回の模試（解説付き）</p>
                            </div>
                        </div>
                    </div>

                    <div class="prie-page-container__price-table-figure prie-page-container__price-table-figure--recommendation">
                        <div class="prie-page-container__price-table-plan prie-page-container__price-table-plan--recommendation">
                            <p class="prie-page-container__price-table-plan-title">おすすめプラン</p>
                            <p class="prie-page-container__price-table-plan-title">志望校対策プラン</p>
                        </div>
                        <div class="prie-page-container__price-table-text-area">
                            <div class="prie-page-container__price-table-price">
                                <p class="prie-page-container__price-table-text"><?php echo $recommendPrice; ?>円~</p>
                                <p class="prie-page-container__price-table-caption">*月額（税抜価格）</p>
                            </div>
                            <div class="prie-page-container__price-table-support">
                                <p class="prie-page-container__price-table-support-text">カリキュラム作成</p>
                                <p class="prie-page-container__price-table-support-text">TOEFL学習サポート</p>
                                <p class="prie-page-container__price-table-support-text">週一回の学習MTG</p>
                                <p class="prie-page-container__price-table-support-text">週二回の模試（解説付き）</p>
                                <p class="prie-page-container__price-table-support-text">週一回の英語面接対策</p>
                            </div>
                        </div>
                    </div>                    

                    <div class="prie-page-container__price-table-figure">
                        <div class="prie-page-container__price-table-plan">
                            <p class="prie-page-container__price-table-plan-title">フレックスプラン</p>
                        </div>
                        <div class="prie-page-container__price-table-text-area">
                            <div class="prie-page-container__price-table-price">
                                <p class="prie-page-container__price-table-text"><?php echo $flexPrice; ?>円~</p>
                                <p class="prie-page-container__price-table-caption">*月額（税抜価格）</p>
                            </div>
                            <div class="prie-page-container__price-table-support">
                                <p class="prie-page-container__price-table-support-text">*別途ご相談ください</p>
                            </div>
                        </div>
                    </div>                    
                    
                </div>

                <div class="conversion-container">
                    <div class="conversion-container__inner-box">
                        <p class="conversion-container__main-text">まずは無料で資料請求から</p>
                        <a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="conversion-container__doc-request">資料請求</a>
                        <a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="conversion-container__contact">お問い合わせ</a>
                    </div>
                </div>

                <div class="contact-container">
                    <div class="contact-container__inner-box">
                        <p class="contact-container__message">お電話でのお問い合わせはこちら</p>
                        <p class="contact-container__tel">0123-456-789</p>
                        <p class="contact-container__biz-hours">平日 08:00-20:00</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

<?php get_footer(); ?>