<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-engress.ico"; type="image/x-icon">
    <?php wp_head(); ?>
    <link>
</head>
<body>
    <header class="header-container">
        <div class="header-container__logo-menu-box">
            <div class="header-container__logo">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo (2).png" alt="Engressロゴ" class="header-container__logo-img">
                </a>
            </div>
            <ul class="header-container__menu-list">
                <li class="header-container__menu"><a href="<?php echo esc_url(home_url("/")); ?>">ホーム</a></li>
                <li class="header-container__menu"><a href="<?php echo esc_url(home_url("/info/")); ?>">お知らせ</a></li>
                <li class="header-container__menu"><a href="<?php echo esc_url(home_url("/category/blog/")); ?>">ブログ </a></li>
                <li class="header-container__menu"><a href="<?php echo esc_url(home_url("/price/")); ?>">コース・料金</a></li>
            </ul>
        </div>
        <div class="header-container__conversion-box">
            <div class="header-container__hours-tel-block">
                <p class="header-container__hours">平日08:00~20:00</p>
                <p href="" class="header-container__tel-anker">
                    <span class="header-container__tel-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/パス 29.svg" alt="連絡先" class="header-container__tel-icon-img"></span>0123-456-789
                </p>
            </div>
            <div class="header-container__button-block">
                <a href="./contact/" class="header-container__doc-request btn">資料請求</a>
                <a href="./contact/" class="header-container__contact btn">お問い合わせ</a>
            </div>
        </div>
        <div class="header-container__humberger">
            <span class="header-container__humberger-line"></span>
            <span class="header-container__humberger-line"></span>
            <span class="header-container__humberger-line"></span>
        </div>
        <nav class="header-container__nav-menu-list-sp">
            <div class="header-container__close">
                <span class="header-container__close-line"></span>
                <span class="header-container__close-line"></span>
            </div>
            <ul class="header-container__menu-list-sp">
                <li class="header-container__menu-sp"><a href="<?php echo esc_url(home_url("/")); ?>">ホーム</a></li>
                <li class="header-container__menu-sp"><a href="<?php echo esc_url(home_url("/info/")); ?>">お知らせ</a></li>
                <li class="header-container__menu-sp"><a href="<?php echo esc_url(home_url("/category/blog/")); ?>">ブログ</a></li>
                <li class="header-container__menu-sp"><a href="<?php echo esc_url(home_url("/price/")); ?>">コース・料金</a></li>
                <li class="header-container__menu-sp header-container__doc-request"><a href="<?php echo esc_url(home_url("/contact/")); ?>">資料請求</a></li>
                <li class="header-container__menu-sp header-container__contact"><a href="<?php echo esc_url(home_url("/contact/")); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>
  
