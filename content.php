<section <?php post_class('p-menu l-contents'); //自動でクラスを割り当てる?> id="post-<?php the_ID(); //投稿ID?>" <?php post_class(); //生成するページによってclassを付与する?>>
                            <?php if( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('thumbnail',array('class' => 'p-menu__img')) //設定されているときはアイキャッチ画像を表示?>
                            <?php else: //サムネイルが設定されていなければデフォルト画像を表示する?>
                                <picture class="p-menu__img">
                                    <source media="(min-width: 960px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/menu_img.png">
                                    <source media="(min-width: 560px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/menu_img-md.png">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/menu_img-sm.png">
                                </picture>
                            <?php endif; ?>
                            <div class="p-menu__contents">
                                <h3 class="p-menu__ttl  p-menu__ttl--search"><?php the_title(); //投稿タイトルを表示?></h3>
                                    <?php
                                    $content_string = get_the_content('詳しく見る');//投稿本文の一部のプレビュー、引数で「さらに...」を「詳しく見る」に置き換える 
                                    $content_string = str_replace('<p','<p class=".p-menu__description." ',$content_string);
                                    $content_string = str_replace('<h1','<h1 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h2','<h2 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h3','<h3 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h4','<h4 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h5','<h5 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<h6','<h6 class="p-menu__description" ',$content_string);
                                    $content_string = str_replace('<a','<a class="c-button u-button" ',$content_string);
                                    echo $content_string; //p,h1-h6タグにクラス名を付け、スタイルを適用する?>
                            </div>
                        </section>