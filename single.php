<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
            <!--<section class="p-hero p-hero--single">
                <h1 class="c-ttl u-fs-40 u-fs-md-36">h1 ダミーサイト</h1>      
            </section>-->
            
            <?php //記事を表示する
            while( have_posts() ) :
                the_post(); ?>
                <div <?php post_class(); //生成するページによってclassを付与する?> id="post-<?php the_ID(); //投稿ID?>">
                    <section class="p-hero p-hero--single p-menu">
                        <?php if( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('thumbnail',array('class' => 'p-menu__img'));//設定されているときはアイキャッチ画像を表示 ?>
                        <?php else : //サムネイルが設定されていなければデフォルト画像を表示する?>
                            <picture class="p-menu__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img.png">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img-md.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu_img-sm.png">
                            </picture>
                        <?php endif; ?>
                        <h1 class="p-menu__ttl p-menu__ttl--single"><?php the_title(); //投稿タイトルを表示?></h1>
                    </section>
                    <div class="l-contents">    
                        <?php the_content();//投稿本文を表示する?>
                    </div>
                </div>
            <?php endwhile; ?>
            
            <section class="l-contents p-media">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
                <p class="p-media__description"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
            </section>
            <section class="l-contents p-media p-media--reverse">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
                <p class="p-media__description"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
            </section>
            <section class="l-contents p-media p-media--only-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
            </section>
            <section class="l-contents p-media p-media--nine">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods-mini.png" class="p-media__img">
            </section>
            <section class="l-contents p-list__wrapper">
                <ol class="p-list p-list--order">
                    <li class="p-list__inner">リストリストリスト</li>
                    <li class="p-list__inner">リストリストリスト</li>
                    <ol class="p-list p-list--order">
                        <li class="p-list__inner">リスト2リスト2リスト2</li>
                        <li class="p-list__inner">リスト2リスト2リスト2</li>
                    </ol>
                    <li class="p-list__inner">リストリストリスト</li>
                    <li class="p-list__inner">リストリストリスト</li>
                </ol>
            </section>
            <section class="l-contents p-list__wrapper">
                <ul class="p-list">
                    <li class="p-list__inner">リストリストリスト</li>
                    <li class="p-list__inner">リストリストリスト</li>
                        <ul class="p-list">
                            <li class="p-list__inner">リスト2リスト2リスト2</li>
                            <li class="p-list__inner">リスト2リスト2リスト2</li>
                        </ul>
                    </li>
                    <li class="p-list__inner">リストリストリスト</li>
                    <li class="p-list__inner">リストリストリスト</li>
                </ul>
            </section>
            <section class="l-contents c-code__wrapper">
                <pre class="c-code"><code>&lt;html&gt;
    &lt;head&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
            </section>
            <section class="l-contents c-table__wrapper">
                <table class="c-table">
                    <tr>
                        <th>テーブル</th>
                        <th>テーブル</th>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                </table>
            </section>
            <section class="l-contents u-mt312vw u-mt72vw-md u-mt8vw-sm c-button--solid__wrapper">
                <a class="c-button c-button--solid">ボタン</a>
            </section>
            <section class="l-contents u-mt312vw u-mt72vw-md u-mt8vw-sm">
                <p class="u-bold">boldboldboldboldboldboldbold</p>
            </section>
        </div>
        <?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
    </div>
<?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>