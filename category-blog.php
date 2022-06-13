<?php get_header(); ?>
    <main class="main-container">
        
        <div class="category-blog-page-container">
            <div class="category-blog-page-container__mainvisual-box">
                <h1 class="category-blog-page-container__title">ブログ</h1>
            </div>
            <div class="breadcrumb-box">
                <?php get_template_part("template-parts/breadcrumb") ?>
            </div>
            <div class="category-blog-page-container__inner-container">
                
                <h3 class="category-blog-page-container__heading">新着一覧</h3>
                
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>

                    <article class="category-blog-page-container__blog-box">
                        <div class="category-blog-page-container__img-block">
                            <p class="category-blog-page-container__label">
                                <?php 
                                    $cat = get_the_category();
                                    echo $cat[0]->name;
                                ?>
                            </p>
                            <a href="<?php the_permalink(); ?>">
                                <?php if( has_post_thumbnail() ): ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="ブログ画像" class="category-blog-page-container__img">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/no-image.png" alt="ブログ画像" class="category-blog-page-container__img">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="category-blog-page-container__blog-detail-block">
                            <p class="category-blog-page-container__blog-date"><?php the_time("Y年m月d日"); ?></p>
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="category-blog-page-container__subheading"><?php the_title(); ?></h2>                            
                            </a>
                            <a href="<?php the_permalink(); ?>">
                                <p class="category-blog-page-container__blog-detail">
                                    <?php 
                                        $exc = get_the_excerpt(); 
                                        echo $exc;
                                    ?>
                                </p>
                            </a>
                        </div>
                    </article>

                    <?php endwhile; ?>
                <?php endif; ?>

               <?php get_template_part("template-parts/pagination"); ?>

            </div>
        </div>
    </main>
<?php get_footer(); ?>