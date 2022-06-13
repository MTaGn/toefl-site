<?php get_header(); ?>
    <main class="main-container">
        <div class="breadcrumb-box">
            <?php get_template_part("template-parts/breadcrumb") ?>
        </div>
        <div class="single-info-page-container">
            <div class="single-info-page-container__inner-box">

                <div class="single-info-page-container__article-category-box">

                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>

                            <article class="single-info-page-container__article-box">
                                <p class="single-info-page-container__label"><?php echo get_the_terms($post->ID, "info1")[0]->name; ?></p>
                                <h1 class="single-info-page-container__heading"><?php the_title(); ?></h1>

                                <div class="single-info-page-container__time-block">
                                    <?php the_time("Y年m月d日") ?>
                                </div>

                                <div class="single-info-page-container__detail-block">
                                    <p class="single-info-page-container__detail"><?php the_content(); ?></p>
                                </div>

                            </article>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

                <div class="single-info-page-container__sidebar-box">
                    <h2 class="single-info-page-container__sidebar-subheading">お知らせの種類</h2>
                    <?php 
                        $terms = get_terms("info1"); 
                        foreach ($terms as $term) {
                            echo "<div>".$term->name. "</div>";
                        }
                    ?>
                </div>

            </div>
        </div>
    </main>
<?php get_footer(); ?>