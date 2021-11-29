<?php
/**
 * <title>タグを出力する
 */
add_theme_support( 'title-tag' );

/**
 * タイトルの区切り文字を変更
 */
add_filter( 'document_title_separator', 'my_document_title_separator' );
function my_document_title_separator($separator) {
    $separator = '|';
    return $separator;
}

/**
 * アイキャッチ画像を使用可能にする
*/ 
add_theme_support( 'post-thumbnails' );

//各テンプレートごとのメイン画像を表示
function get_main_image_url() {
    if (is_category() || is_home()):
        return get_template_directory_uri(). '/assets/img/blog.jpg';
    elseif (is_page('plan')):
        return get_template_directory_uri(). '/assets/img/plan.jpg;';
    elseif (is_page('contact')):
        return get_template_directory_uri(). '/assets/img/cta.jpg;';
    elseif (is_archive('news')):
        return get_template_directory_uri(). '/assets/img/news.jpg;';
    else:

    endif;
}

//メイン画像上にテンプレートごとの文字列表示
function get_main_title() {
    if ( is_singular('post') ):
        $category_obj = get_the_category();
        return $category_obj[0]->name;
    elseif ( is_page('contact') ):
        return 'お問い合わせ・資料請求';
    elseif ( is_page('plan') ):
        return 'コース・料金';
    elseif ( is_page() ):
        return get_the_title();
    elseif ( is_archive('news') ):
        return 'お知らせ';
    elseif ( is_category() || is_home() ):
        return 'ブログ';
    endif;
}

//カテゴリーラベル表示
function display_category() {
    $cats =  get_the_category();
    echo '<li><a class="category-label" href="' . get_category_link($cats[0]->term_id) . '">' . $cats[0]->name . '</a></li>';
}
function display_article_category() {
    $cats =  get_the_category();
    echo '<div class="category-label article__category-label" href="' . get_category_link($cats[0]->term_id) . '">' . $cats[0]->name . '</div>';
}

/**
 * カスタムメニュー機能を有効化する
 */ 
add_theme_support( 'menus' );

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


