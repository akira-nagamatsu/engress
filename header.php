<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engress</title>
    <meta name="title" content="Engress">
    <meta name="description" content="日本人へのTOEFL指導歴豊かな講師陣の コーチング型TOEFLスクール">

    <!-- Googlefonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet">

    <?php
    wp_enqueue_style('reset-css', get_template_directory_uri(). '/assets/css/modern-css-reset.css');
    wp_enqueue_style('main-css', get_template_directory_uri(). '/assets/css/style.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('engress-main', get_template_directory_uri() . '/assets/js/script.js'); 
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/26d1ebdb5f.js');
    if (is_page('plan')) {
        wp_enqueue_style('scrollhint-css', 'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css');
        wp_enqueue_script('scrollhint-js', 'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js');
        wp_enqueue_script('engress-scroll', get_template_directory_uri() . '/assets/js/scroll.js'); 
    }
    wp_head(); 
    ?>

    <!-- ファビコン -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico ?>">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png ?>">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/android-chrome-48x48.png ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ponnkotsu20.com/">
    <meta property="og:title" content="Engress">
    <meta property="og:description" content="日本人へのTOEFL指導歴豊かな講師陣の コーチング型TOEFLスクール">
    <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://ponnkotsu20.com/">
    <meta property="twitter:title" content="Engress">
    <meta property="twitter:description" content="日本人へのTOEFL指導歴豊かな講師陣の コーチング型TOEFLスクール">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <meta name="robots" content="noindex">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <div class="header__inner">
            <div class="header__inner-left">
                <a href="<?php echo esc_url(home_url()); ?>" class="site-title header__site-title">
                    <h1 class="site-title__logo-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="サイトロゴ" class="site-title__logo">
                    </h1>
                </a>
                <nav class="header__nav">
                    <?php
                    $args = array(
                    'menu' => 'global-navigation',
                    'menu_class' => 'horizontal-nav',
                    'container' => false,
                    'add_li_class' => 'horizontal-nav__item', // liタグへclass追加
                    );
                    wp_nav_menu($args);
                    ?>
                </nav>
            </div>
            <div class="header__inner-right">                    
                <div class="telephone header__telephone">
                    <p class="telephone__text">平日08:00〜20:00</p>
                    <a href="tel:0000-000-000">
                        <figure class="telephone__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/telephone.png"></figure><p class="telephone__number">0123-456-7890</p>
                    </a>
                </div>
                <a href="<?php echo esc_url(home_url('contact')); ?>" class="btn header__btn">資料請求</a>
                <a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn--blue header__btn">お問い合わせ</a>
            </div>
        </div>
    </header>

    <button class="humburger-btn">
        <div class="humburger-btn__line"></div>
    </button>

    <div class="humburger-nav-wrapper">
        <nav class="humburger-nav">
            <?php
            $args = array(
            'menu' => 'humburger-menu',
            'menu_class' => 'humburger-nav__list',
            'container' => false,
            'add_li_class' => 'humburger-nav__item', // liタグへclass追加
            );
            wp_nav_menu($args);
            ?>
        </nav>
    </div>
    <?php if(is_front_page()): ?>
        <main>
            <section class="fv" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fv.jpg);">
                <div class="fv__inner">
                    <h2 class="fv__title">TOEFL対策はEngress</h2>
                    <p class="fv__text">
                        日本人へのTOEFL指導歴豊かな講師陣の<br>
                        コーチング型TOEFLスクール
                    </p>
                    <a href="<?php echo esc_url(home_url('contact')); ?>" class="rounded-btn">資料請求</a>
                    <a href="<?php echo esc_url(home_url('contact')); ?>" class="underlined-link">お問い合わせ</a>
                </div>
            </section>
    <?php elseif(is_single() || is_page('thanks') || is_404()): ?>
        <main class="padding-for-header">
        <?php get_template_part('template-parts/breadcrumb'); ?>
    <?php else: ?>
        <main>
            <section class="page-fv" style="background-image: url('<?php echo get_main_image_url(); ?>');">
                <h2 class="page-fv__title"><?php echo get_main_title(); ?></h2>
            </section>
            <?php get_template_part('template-parts/breadcrumb'); ?>
    <?php endif; ?>