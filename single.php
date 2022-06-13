<?php get_header(); ?>
<main class="main-container">
    <div class="breadcrumb-box">
        <?php get_template_part("template-parts/breadcrumb") ?>
    </div>
    <div class="single-page-container">
        <div class="single-page-container__inner-box">

            <div class="single-page-container__article-and-recommend-box">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>

                        <article class="single-page-container__detail-box">
                            <p class="single-page-container__label">
                                <?php 
                                    $cat = get_the_category();
                                    echo $cat[0]->name;
                                ?>
                            </p>

                            <h1 class="single-page-container__heading"><?php the_title(); ?></h1>

                            <div class="single-page-container__sns-block">
                                <div class="single-page-container__sns">
                                <?php
                                    if( function_exists("wp_social_bookmarking_light_output_e") ) {
                                        wp_social_bookmarking_light_output_e();
                                    }
                                ?>
                                </div>
                                <?php the_time("Y年m月d日") ?>
                            </div>

                            <div class="single-page-container__img-block">
                                <?php if( has_post_thumbnail() ): ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="ブログ画像" class="category-cat1-page-container__img">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/no-image.png" alt="ブログ画像" class="category-cat1-page-container__img">
                                <?php endif; ?>
                            </div>

                            <div class="single-page-container__blog-overview-block">
                                <h2 class="single-page-container__subheading">h2見出し</h2>
                                <p class="single-page-container__detail"><?php the_excerpt(); ?></p>
                            </div>

                            <div class="single-page-container__blog-detail-block">
                                <h3 class="single-page-container__h3">h3見出し</h3>
                                <p class="single-page-container__h3-detail">ああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                                <p class="single-page-container__h3-detail--grey-bkg">ああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                            </div>

                        </article>
                        
                    <?php endwhile; ?>
                <?php endif; ?>


            </div>

            

            <div class="single-page-container__sidebar-box">
                <h2 class="single-page-container__sidebar-subheading">カテゴリー</h2>
                <?php get_sidebar("categories"); ?>
            </div>  
        </div>
    </div>
</main>
<?php get_footer(); ?>