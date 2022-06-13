<?php get_header(); ?>
    <div class ="main-container">
        <div class ="not-found-page-container">
          <div class ="not-found-page-container__inner-box">
              <h1 class ="not-found-page-container__title">404 NOT FOUND</h1>
              <p class="not-found-page-container__text">ページが見つかりませんでした。</p>
              <p class="not-found-page-container__text">申し訳ございませんが、<a href ="<?php echo esc_url(home_url('/')); ?>" class="under-line">こちらのリンク</a>からトップページにお戻りください。</p>
          </div>
        </div>
    </div>

<?php get_footer(); ?>