$(function(){ //投稿ページであるsingle.phpで、投稿の見た目を整えるためにクラス名を付与する関数
    
    if ($('.post p').length) {//通常
        $('.post p').addClass('u-mt312vw u-mt72vw-md u-mt8vw-sm u-mt0');
    }
    if ($('.post h1,.post h2,.post h3,.post h4,.post h5,.post h6').length) {//通常
        $('.post h1,.post h2,.post h3,.post h4,.post h5,.post h6').addClass('u-mt312vw u-mt72vw-md u-mt8vw-sm');
    }
    if ($('.post .wp-block-quote').length) {//引用があるとき
        $('.post .wp-block-quote').addClass('c-blockquote u-mt312vw u-mt72vw-md u-mt8vw-sm');
        $('.post .wp-block-quote p').removeClass('u-mt312vw u-mt72vw-md u-mt8vw-sm u-mt0');
        $('.post .wp-block-quote cite').addClass('c-blockquote__source');
    }
    if ($('.post .wp-block-image').length) {//画像があるとき
        $('.post .wp-block-image').addClass('p-media p-media--only u-mt312vw u-mt72vw-md u-mt8vw-sm u-mt0');
        $('.post .wp-block-image img').addClass('p-media__img');
    }
    if ($('.wp-block-code').length) { //ブロックコードがあるとき
        $('.wp-block-code code').addClass('c-code');
        if ($('.wp-block-group__inner-container > .wp-block-code').length) { //ブロックコードがある要素の直下にあるとき、
            $('.wp-block-group__inner-container > .wp-block-code').addClass('c-code__wrapper u-mt312vw u-mt72vw-md u-mt8vw-sm');
        }
    }
    if ($('.wp-block-table').length) {  //テーブルがあるとき
        $('.wp-block-table').addClass('u-mt312vw u-mt72vw-md u-mt8vw-sm');
    }
})