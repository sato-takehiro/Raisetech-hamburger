<?php //サイドバーが有効でないときその後の処理を実行しない
if (! is_active_sidebar( 'sidebar-main' )) {
    return;
}
?>

<h2 class="p-sidebar__button--open">Menu</h2>
<aside id="secondary" class="sidebar l-sidebar p-sidebar" role="complementary">
    <div class="p-sidebar__button--close">×</div>
    <h2 class="p-sidebar__ttl">Menu</h2>
    <?php dynamic_sidebar( 'sidebar-main' );//サイドバーを表示する ?>
</aside>
