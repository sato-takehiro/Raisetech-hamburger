<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"><!-- fontawsome CDN  -->
    <link rel="preconnect" href="https://fonts.gstatic.com"><!-- googlefonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/hamburger.css"><!--style.css-->
    <title>Hamburger</title>
</head>
<body>
    <div class="l-sidebar__wrapper">
        <div class="l-sidebar__opponent">
            <header class="l-header">
                <div class="c-header-logo"><a href="#">Hamburger</a></div>
                <form action="" method="post" class="p-search">
                    <input type="search" class="p-search__form fas fa-search fa-2x" name="serch" placeholder="&#xf002">
                    <input type="submit" name="submit" class="p-search__button" value="検索"></input>
                </form>
            </header>
            <section class="cl-contents p-hero p-hero--archive">
                <h1 class="c-ttl">Menu:<span>チーズバーガー</span></h1>      
            </section>
            <section class="p-summary l-contents">
                <h2 class="p-summary__ttl">小見出しが入ります</h2>
                <p class="p-summary__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </section>
            <section class="p-menu l-contents">
                <picture class="p-menu__img">
                    <source media="(min-width: 960px)" srcset="img/menu_img.png">
                    <source media="(min-width: 560px)" srcset="img/menu_img-md.png">
                    <img src="img/menu_img-sm.png">
                </picture>
                <div class="p-menu__contents">
                    <h3 class="p-menu__ttl">チーズバーガー</h3>
                    <h4 class="p-menu__sub-ttl">小見出しが入ります</h4>
                    <p class="p-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="#" class="c-button u-button">詳しく見る</a>
                </div>
            </section>
            <section class="p-menu l-contents">
                <picture class="p-menu__img">
                    <source media="(min-width: 960px)" srcset="img/menu_img.png">
                    <source media="(min-width: 560px)" srcset="img/menu_img-md.png">
                    <img src="img/menu_img-sm.png">
                </picture>
                <div class="p-menu__contents">
                    <h3 class="p-menu__ttl">ダブルチーズバーガー</h3>
                    <h4 class="p-menu__sub-ttl">小見出しが入ります</h4>
                    <p class="p-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="#" class="c-button u-button">詳しく見る</a>
                </div>
            </section>
            <section class="p-menu l-contents">
                <picture class="p-menu__img">
                    <source media="(min-width: 960px)" srcset="img/menu_img.png">
                    <source media="(min-width: 560px)" srcset="img/menu_img-md.png">
                    <img src="img/menu_img-sm.png">
                </picture>
                <div class="p-menu__contents">
                    <h3 class="p-menu__ttl">スペシャルチーズバーガー</h3>
                    <h4 class="p-menu__sub-ttl">小見出しが入ります</h4>
                    <p class="p-menu__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="#" class="c-button u-button">詳しく見る</a>
                </div>
            </section>
            <div class="c-pagenation u-pd0 u-pd0-md l-contents">
                <p class="c-pagenation__description"><a href="#">page 1/10</a></p>
                <p class="c-pagenation__arrow--left"><a href="#"><<</a></p>
                <p class="c-pagenation__button c-pagenation__button--current"><a href="#">1</a></p>
                <p class="c-pagenation__button"><a href="#">2</a></p>
                <p class="c-pagenation__button"><a href="#">3</a></p>
                <p class="c-pagenation__button"><a href="#">4</a></p>
                <p class="c-pagenation__button"><a href="#">5</a></p>
                <p class="c-pagenation__button"><a href="#">6</a></p>
                <p class="c-pagenation__button"><a href="#">7</a></p>
                <p class="c-pagenation__button"><a href="#">8</a></p>
                <p class="c-pagenation__button"><a href="#">9</a></p>
                <p class="c-pagenation__arrow--right"><a href="#">>></a></p>
            </div>
        </div>
        <h2 class="p-sidebar__button--open">Menu</h2>
        <aside class="l-sidebar p-sidebar">
            <div class="p-sidebar__button--close">×</div>
            <h2 class="p-sidebar__ttl">Menu</h2>
            <ul class="p-sidebar__list-wrapper">
                <li class="p-sidebar__list">バーガー</li><!-- /.p-sidebar-list -->
                <ul class="p-sidebar__sub-list-wrapper">
                    <li class="p-sidebar__sub-list"><a href="#">ハンバーガー</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">チーズバーガー</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">テリヤキバーガー</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">アボカドバーガー</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">フィッシュバーガー</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">ベーコンバーガー</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">チキンバーガー</a></li><!-- /.p-sidebar__sub-list -->
                </ul><!-- /.p-sidebar__sub-list__wrapper -->
                <li class="p-sidebar__list">サイド</li><!-- /.p-sidebar-list -->
                <ul class="p-sidebar__sub-list-wrapper">
                    <li class="p-sidebar__sub-list"><a href="#">ポテト</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">サラダ</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">ナゲット</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">コーン</a></li><!-- /.p-sidebar__sub-list -->
                </ul><!-- /.p-sidebar__sub-list__wrapper -->
                <li class="p-sidebar__list">ドリンク</li><!-- /.p-sidebar-list -->
                <ul class="p-sidebar__sub-list-wrapper">
                    <li class="p-sidebar__sub-list"><a href="#">コーラ</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">ファンタ</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">オレンジ</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">アップル</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">紅茶（Ice/Hot）</a></li><!-- /.p-sidebar__sub-list -->
                    <li class="p-sidebar__sub-list"><a href="#">コーヒー（Ice/Hot）</a></li><!-- /.p-sidebar__sub-list -->
                </ul><!-- /.p-sidebar__sub-list__wrapper -->
            </ul><!-- /.p-sidebar-list__wrapper -->
        </aside>
    </div>
    <footer class="l-footer">
        <div class="c-footer-menu">
            <ul class="c-footer-menu__list-wrapper">
                <li class="c-footer-menu__list"><a href="#">ショップ情報</a></li>
                <li class="c-footer-menu__list"><a href="#">ヒストリー</a></li>
            </ul>
        </div>
        <small class="c-footer-copyright">Copyright: RaiseTech</small>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><!-- jQuery CDN -->
<script type="text/javascript" src="./js/sidebar.js"></script><!-- sidebar.js -->
</body>
</html>