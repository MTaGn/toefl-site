<?php get_header(); ?>
    <main class="main-container">
        <div class="info-page-container">
            <div class="info-page-container__mainvisual-box">
                <h1 class="info-page-container__title">お知らせ</h1>
            </div>
            <div class="breadcrumb-box">
                <?php get_template_part("template-parts/breadcrumb") ?>
            </div>

            <div class="info-page-container__inner-box">
                <h2 class="info-page-container__heading">お知らせ一覧</h2>

                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="info-page-container__article-link"> 
                            <article class="info-page-container__article-box">
                                <div class="info-page-container__time"><?php the_time("Y年m月d日"); ?></div>
                                <div class="info-page-container__excerpt"><?php the_excerpt(); ?></div>
                            </article>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                
                <?php get_template_part("template-parts/pagination"); ?>
    </main>
<?php get_footer(); ?>