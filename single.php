<?php get_header(); //header.phpを読み込むテンプレートタグ（インクルードタグ）?>        
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
        </div>
        <?php get_sidebar(); //siderbar.phpを読み込むテンプレートタグ（インクルードタグ）?>
    </div>
<?php get_footer(); //footer.phpを読み込むテンプレートタグ（インクルードタグ）?>