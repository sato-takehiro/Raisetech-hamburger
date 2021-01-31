    <footer class="l-footer">    
        <nav id="footer-navigation" class="c-footer-menu" role="navigation">
            <?php wp_nav_menu( array( //フッダーナビゲーションを表示する
            'theme_location'  => 'footer-navigation',//メニューの位置。先ほどregister_nav_menu()の第1引数で渡した値と同じにする
            'menu_id'         => 'footer-navigation__list-wrapper',//メニューが出力されるときにつけるid名
            'menu_class'      => 'menu-item__wrapper',//メニューが出力されるときにつけるクラス名
            ) ); ?>
        </nav>
        <small class="c-footer-copyright">Copyright: RaiseTech</small>
    </footer>
<?php wp_footer(); //functions.phpに記載したCSSとJavaScriptが読み込まれる?>
</body>
</html>