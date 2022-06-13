<?php get_header(); ?>
    <main class="main-container">
        <div class="breadcrumb-box">
            <?php get_template_part("template-parts/breadcrumb") ?>
        </div>
        <div class="category-cat1-page-container">
            <div class="category-cat1-page-container__inner-container">
                
                <h1 class="category-cat1-page-container__heading">新着一覧</h1>
                
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>

                    <article class="category-cat1-page-container__blog-box">
                        <div class="category-cat1-page-container__img-block">
                            <p class="category-cat1-page-container__label">
                                <?php 
                                    $cat = get_the_category();
                                    echo $cat[0]->name;
                                ?>
                            </p>
                            <a href="<?php the_permalink(); ?>">
                                <?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php get_template_directory_uri();?>/assets/img/no-image.png" alt="ブログ画像" class="category-cat1-page-container__img">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="category-cat1-page-container__blog-detail-block">
                            <p class="category-cat1-page-container__blog-date"><?php the_time("Y年m月d日"); ?></p>
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="category-cat1-page-container__subheading"><?php the_title(); ?></h2>                            
                            </a>
                            <a href="<?php the_permalink(); ?>">
                                <p class="category-cat1-page-container__blog-detail">
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

                <div class="pagination">
                    <?php 
                        echo paginate_links([
                            "type" => "list",
                            "show_all" => false,
                            "mid_size" => 1,
                            "end_size" => 1,
                            "prev_text" => "&lt;&lt;",
                            "next_text" => "&gt;&gt;",
                        ]);
                    ?>
                </div>

            </div>
        </div>
    </main>
<?php get_footer(); ?>