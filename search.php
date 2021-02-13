<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
            <section class="p-hero p-hero--archive">
                <?php 
                if (isset($_GET['s']) && empty($_GET['s'])) {
                    echo '<h1 class="c-ttl">Search:<span>検索キーワード未入力</span></h1>';  
                } else {
                    echo '<h1 class="c-ttl">Search:<span>'.$_GET['s'] .'</span></h1>';
                }
                ?>      
            </section>
            <section class="p-summary l-contents">
                <h2 class="p-summary__ttl">見出しが入ります</h2>
                <p class="p-summary__description">このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。このページはarchibe-searchページです。</p>
            </section>
            <?php
                if( have_posts() ) :
                    while( have_posts() ) :
                        the_post(); ?>
                        <?php get_template_part( 'content' ); ?>
                        <?php endwhile; ?>
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;//現在のページ送り番号を取得する
                    $pages = $wp_query->max_num_pages;//総ページ数を取得する
                    $args = array(
                        'mid_size' => 4,// 左右にそれぞれ表示するページ番号の数
                        'prev_text' => '&lt;&lt;',// 前のリンクテキスト
                        'next_text' => '&gt;&gt;',// 次のリンクテキスト
                        'screen_reader_text' => 'page&nbsp;'.$paged.'/'.$pages.'&nbsp;',// ナビゲーションのヘッダーテキスト
                    );
                    the_posts_pagination($args); //ページネーションを表示する?>
                <?php else ://記事がなかったときの表示内容?>
                    <p class="l-contents">表示する記事がありません</p>
                <?php endif; ?>
        </div>
        <?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
    </div>
<?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>