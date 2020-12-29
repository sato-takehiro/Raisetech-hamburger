<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"><!-- fontawsome CDN  -->
    <link rel="preconnect" href="https://fonts.gstatic.com"><!-- googlefonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/hamburger.css"><!--hamburger.css-->
    <!--<link type="text/css" rel="stylesheet" href="style.css">--><!--style.css-->
    <title>Hamburger</title>
</head>
<body>
    <div class="l-sidebar__wrapper">
        <div class="l-sidebar__opponent">
            <header class="l-header">
                <div class="c-header-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></div>
                <?php get_search_form(); //searchform.phpを読み込むテンプレートタグ（インクルードタグ）?>
            </header>