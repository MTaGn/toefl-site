<?php get_header(); ?>
    <main class="main-container">
        <div class="contact-page-container">
            <div class="contact-page-container__mainvisual-box">
                    <h1 class="contact-page-container__title">お問い合わせ・資料請求</h1>
                </div>
            <div class="breadcrumb-box">
                <?php get_template_part("template-parts/breadcrumb") ?>
            </div>
            <div class="contact-page-container__inner-box">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>

                    <div class="contact-page-container__form-box">
                        <p class="contact-page-container__desc">
                            弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。<span class="red-color-text">※デモページのため実際にはお問い合わせできません。</span>
                        </p>
                        <?php the_content(); ?>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>