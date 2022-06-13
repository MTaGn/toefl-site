
            <footer class="footer-container">
                <div class="footer-container__inner-box">
                    <div class="footer-container__bottom-box">
                        <ul class="footer-container__menu-list">
                            <li class="footer-container__menu"><a href="<?php echo esc_url(home_url("/")); ?>" class="footer-container__anker">ホーム</a></li>
                            <li class="footer-container__menu"><a href="<?php echo esc_url(home_url("/info/")); ?>" class="footer-container__anker">お知らせ</a></li>
                            <li class="footer-container__menu"><a href="<?php echo esc_url(home_url("/category/blog/")); ?>" class="footer-container__anker">ブログ</a></li>
                            <li class="footer-container__menu"><a href="<?php echo esc_url(home_url("/price/")); ?>" class="footer-container__anker">コース・料金</a></li>
                        </ul>
                        <div class="footer-container__info-box">
                            <div class="footer-container__logo-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo (2).png" alt="" class="footer-container__logo">
                            </div>
                            <p class="footer-container__tel">
                                <span class="footer-container__tel-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/パス 29.png" alt="" class="footer-container__tel-icon-img">
                                </span>
                                0123-456-789
                            </p>
                            <p class="footer-container__hours">平日 08:00-20:00</p>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
        <?php wp_footer(); ?>
    </body>
</html>