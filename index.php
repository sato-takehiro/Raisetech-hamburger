<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>
            <section class="l-contents p-hero p-hero--archive">
                <h1 class="c-ttl">Menu:<span>チーズバーガー</span></h1>      
            </section>
            <section class="p-summary l-contents">
                <h2 class="p-summary__ttl">小見出しが入ります</h2>
                <p class="p-summary__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </section>
            <?php
                if( have_posts() ) :
                    while( have_posts() ) :
                        the_post(); ?>
                        <section class="p-menu l-contents" id="post-<?php the_ID(); //投稿ID?>" <?php post_class(); //生成するページによってclassを付与する?>>
                            <picture class="p-menu__img">
                                <?php //the_post_thumbnail() //設定されているときはアイキャッチ画像を表示?>
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img.png">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/menu_img-md.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu_img-sm.png">
                            </picture>
                            <div class="p-menu__contents">
                                <h3 class="p-menu__ttl"><?php the_title(); //投稿タイトルを表示?></h3>
                                <h4 class="p-menu__sub-ttl">小見出しが入ります</h4>
                                    <?php $content_string = get_the_content('<a href=" the_permalink(); " class="c-button u-button">詳しく見る</a>');//投稿本文の一部のプレビュー、引数で「さらに...」を「詳しく見る」に置き換える 
                                    $content_string = str_replace('<p','<p class="p-menu__description" ',$content_string);
                                    echo $content_string; ?>
                            </div>
                        </section>
                    <?php endwhile;
                else :
                    ?><p class="l-contents">表示する記事がありません</p><?php
                endif;
            ?>
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
        <?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
    </div>
<?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>