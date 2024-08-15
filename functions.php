<?php

// pageBannerを表示させるための関数を下に記述。


// CSSやJavaScriptを読み込ませるための関数を下に記述。
function dayservice_files(){
    // cssをwp_head()で読み込ませるために必要な関数を作る。
    wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDrgJKMTviBHb0MlThGeSv9LT-RCD3GLpo', NULL, '1.0', true);
    wp_enqueue_script('main-js', get_theme_file_uri('/dist/main.js'), null, '1.0', true);
    wp_enqueue_style('dayservice_main_style', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('bootstrap', "//cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css");
    wp_enqueue_style('bootstrap_grid', "//cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.min.css");
    wp_enqueue_style('bootstrap_icon', "//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css");
    wp_enqueue_style('google_font_japanese', "//fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=M+PLUS+Rounded+1c:wght@400;500;700&display=swap");
    wp_enqueue_style('google_font_japanese_cherry', "//fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap");
    wp_enqueue_style('font-awsome', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css");
    

    // 名前が同じになると一つしか読み込まないため注意する。
}

add_action('wp_enqueue_scripts', 'dayservice_files');


function dayserviceMapKey($api){
    $api['key'] = 'AIzaSyCIaSOaLjAcpTq_iK8v-S3cYh87XEP5mbE';
    return $api;
}

add_filter('acf/fields/google_map/api', 'dayserviceMapKey');