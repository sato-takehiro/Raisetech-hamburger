<!DOCTYPE html>
<html lang="<?php language_attributes(); //言語設定を自動的に出力します?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); //現在のページに応じて自動でクラスを割り当てる関数?>>
    <div class="l-sidebar__wrapper">
        <div class="l-sidebar__opponent">
            <header class="l-header">
                <div class="c-header-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></div>
                <?php get_search_form(); //searchform.phpを読み込むテンプレートタグ（インクルードタグ）?>
                <?php wp_head(); //functions.phpに記載したCSSとJavaScriptが読み込まれる?>
            </header>