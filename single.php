<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
            <section class="p-hero p-hero--single">
                <h1 class="c-ttl u-fs-40 u-fs-md-36">h1 ダミーサイト</h1>      
            </section>
            
            <?php //記事を表示する
            while( have_posts() ) :
                the_post(); ?>
                <section <?php post_class('p-menu l-contents'); //自動でクラスを割り当てる?> id="post-<?php the_ID(); //投稿ID?>" <?php post_class(); //生成するページによってclassを付与する?>>
                    <?php if( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('thumbnail',array('class' => 'p-menu__img')) //設定されているときはアイキャッチ画像を表示?>
                    <?php else: //サムネイルが設定されていなければデフォルト画像を表示する?>
                        <picture class="p-menu__img">
                            <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img.png">
                            <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img-md.png">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu_img-sm.png">
                        </picture>
                    <?php endif; ?>
                    <div class="p-menu__contents">
                        <h3 class="p-menu__ttl"><?php the_title(); //投稿タイトルを表示?></h3>
                            <?php $content_string = get_the_content('<a href=" the_permalink(); " class="c-button u-button">詳しく見る</a>');//投稿本文の一部のプレビュー、引数で「さらに...」を「詳しく見る」に置き換える 
                            $content_string = str_replace('<p','<p class="p-menu__description" ',$content_string);
                            $content_string = str_replace('<h1','<h1 class="p-menu__description" ',$content_string);
                            $content_string = str_replace('<h2','<h2 class="p-menu__description" ',$content_string);
                            $content_string = str_replace('<h3','<h3 class="p-menu__description" ',$content_string);
                            $content_string = str_replace('<h4','<h4 class="p-menu__description" ',$content_string);
                            $content_string = str_replace('<h5','<h5 class="p-menu__description" ',$content_string);
                            $content_string = str_replace('<h6','<h6 class="p-menu__description" ',$content_string);
                            echo $content_string; //p,h1-h6タグにクラス名を付け、スタイルを適用する?>
                    </div>
                </section>
            <?php endwhile; ?>
            
            <h2 class="l-contents u-mt312vw u-mt72vw-md u-mt8vw-sm">見出しh2</h2>
            <p class="l-contents u-mt312vw u-mt72vw-md u-mt8vw-sm">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
            <h3 class="l-contents u-mt312vw u-mt72vw-md u-mt8vw-sm">見出しh3</h3>
            <h4 class="l-contents u-mt312vw u-mt72vw-md u-mt8vw-sm">見出しh4</h4>
            <h5 class="l-contents u-mt312vw u-mt72vw-md u-mt8vw-sm">見出しh5</h5>
            <h4 class="l-contents u-mt312vw u-mt72vw-md u-mt8vw-sm">見出しh4</h4>
            <h5 class="l-contents u-mt312vw u-mt72vw-md u-mt8vw-sm">見出しh5</h5>
            <h6 class="l-contents u-mt312vw u-mt72vw-md u-mt8vw-sm">見出しh6</h6>
            <blockquote class="l-contents c-blockquote u-mt312vw u-mt72vw-md u-mt8vw-sm" cite="#">
                <p class="c-blockquote__description">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                <p class="c-blockquote__source">出典元： <a href="#">○○○○○○○○○○○○</a></p>
            </blockquote>
            <section class="l-contents p-media p-media--only">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cooked-foods.png" class="p-media__img">
            </section>
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