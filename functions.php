<?php


/*
 * デフォルトのjQueryを解除
 */
function load_script(){
  if ( !is_admin() ){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1');
  }
}
add_action('init', 'load_script');


/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 2, $show_only = false ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    //表示テキスト
    $text_first   = "« 最初へ";
    $text_before  = "‹ 前へ";
    $text_next    = "次へ ›";
    $text_last    = "最後へ »";

    if ( $show_only && $pages === 1 ) {
        // １ページのみで表示設定が true の時
        echo '<div class="pagination"><span class="current pager">1</span></div>';
        return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
        //２ページ以上の時
        echo '<div class="pagination"><span class="page_num">Page ', $paged ,' of ', $pages ,'</span>';
        if ( $paged > $range + 1 ) {
            // 「最初へ」 の表示
            echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
        }
        if ( $paged > 1 ) {
            // 「前へ」 の表示
            echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
        }
        for ( $i = 1; $i <= $pages; $i++ ) {

            if ( $i <= $paged + $range && $i >= $paged - $range ) {
                // $paged +- $range 以内であればページ番号を出力
                if ( $paged === $i ) {
                    echo '<span class="current pager">', $i ,'</span>';
                } else {
                    echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
                }
            }

        }
        if ( $paged < $pages ) {
            // 「次へ」 の表示
            echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
        }
        if ( $paged + $range < $pages ) {
            // 「最後へ」 の表示
            echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
        }
        echo '</div>';
    }
}

/* titleタグの出力 */
add_theme_support('title-tag');

//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );


//jsの読み込み
function twpp_enqueue_scripts() {
  wp_enqueue_script(
    'main-script',
    get_template_directory_uri() . '/js/script.js',
    array(),
    false,
    true
  );
  //全てのページにfontawesomeを読み込み
  wp_enqueue_style(
    'fontawesome-style',
    'https://use.fontawesome.com/releases/v5.12.1/css/all.css'
  );
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );


function add_css() {//関数名add_css()を作成
	//CSSの読み込みはここから

	//全てのページにstyle.cssを読み込み
 wp_enqueue_style(
    'sub-style', //idを定義
    get_template_directory_uri() . '/css/style.css'
  );
  //全てのページにreset.cssを読み込み
 wp_enqueue_style(
    'secondary-style',
    get_template_directory_uri() . '/css/reset.css',
     array( 'sub-style' )
  );

  if ( is_archive() || is_single() || is_page() ){ //アーカイブページかシングルページのとき
     wp_enqueue_style(
        'style-s',
        get_template_directory_uri() . '/css/style-s.css'
      );
  }
}
  //関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_css' );



/*---- Google Web Fonts ----*/
function add_google_fonts() {
wp_register_style( 'googleFonts',
'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap'
);
wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


//投稿一覧とカスタム投稿タイプの記事を混ぜるコード
function change_posts_per_page($query) {

if ( is_admin() || ! $query->is_main_query() ){
     return;
 }
if ( is_date() && $query->is_main_query() ){
     $query->set('post_type', array( 'post', 'gikai_news'));
     return;
 }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );



//メールフォームの textarea にひらがなが無ければ送信できない（contact form7）
add_filter('wpcf7_validate_textarea', 'wpcf7_validation_textarea_hiragana', 10, 2);
add_filter('wpcf7_validate_textarea*', 'wpcf7_validation_textarea_hiragana', 10, 2);

function wpcf7_validation_textarea_hiragana($result, $tag)
{
    $name = $tag['name'];
    $value = (isset($_POST[$name])) ? (string) $_POST[$name] : '';

    if ($value !== '' && !preg_match('/[ぁ-ん]/u', $value)) {
        $result['valid'] = false;
        $result['reason'] = array($name => 'エラー / 日本語で入力してください。');
    }

    return $result;
}

//カレンダー土日クラス
function add_week_class2calendar( $calendar_output ) {
    $week_map = array(
        'mon' => '月曜日',
        'tue' => '火曜日',
        'wed' => '水曜日',
        'thu' => '木曜日',
        'fri' => '金曜日',
        'sat' => '土曜日',
        'sun' => '日曜日',
    );

    $regex = '/<th scope="col" title="([^"]+?)"/';
    $num = preg_match_all( $regex, $calendar_output, $m );

    if ( $num ) {
        $replace = array();
        for ( $i = 0; $i < $num; $i++ ) {
            $replace[$i] = '<th scope="col" class="' . array_search( $m[1][$i], $week_map ) . '" title="' . $m[1][$i] . '"';
        }
        $calendar_output = str_replace( $m[0], $replace, $calendar_output );
    }
    return $calendar_output;
}
add_filter( 'get_calendar', 'add_week_class2calendar' );

function add_week_classes2calendar( $calendar_output ) {
    global $wpdb, $m, $monthnum, $year, $wp_locale, $posts;

    if ( isset($_GET['w']) )
        $w = ''.intval($_GET['w']);

    // Let's figure out when we are
    if ( !empty($monthnum) && !empty($year) ) {
        $thismonth = ''.zeroise(intval($monthnum), 2);
        $thisyear = ''.intval($year);
    } elseif ( !empty($w) ) {
        // We need to get the month from MySQL
        $thisyear = ''.intval(substr($m, 0, 4));
        $d = (($w - 1) * 7) + 6; //it seems MySQL's weeks disagree with PHP's
        $thismonth = $wpdb->get_var("SELECT DATE_FORMAT((DATE_ADD('{$thisyear}0101', INTERVAL $d DAY) ), '%m')");
    } elseif ( !empty($m) ) {
        $thisyear = ''.intval(substr($m, 0, 4));
        if ( strlen($m) < 6 )
                $thismonth = '01';
        else
                $thismonth = ''.zeroise(intval(substr($m, 4, 2)), 2);
    } else {
        $thisyear = gmdate('Y', current_time('timestamp'));
        $thismonth = gmdate('m', current_time('timestamp'));
    }

    $jp_holidays = get_option( 'jp_holidays' );

    if ( ( ! $jp_holidays || !isset( $jp_holidays[$thisyear . $thismonth] ) || $jp_holidays[$thisyear . $thismonth]['expire'] < time() ) && $thisyear >= 2000 ) {
        $holiday_api = '<a class="vglnk" href="http://www.finds.jp/ws/calendar.php?php&y=" rel="nofollow"><span>http</span><span>://</span><span>www</span><span>.</span><span>finds</span><span>.</span><span>jp</span><span>/</span><span>ws</span><span>/</span><span>calendar</span><span>.</span><span>php</span><span>?</span><span>php</span><span>&</span><span>y</span><span>=</span></a>' . $thisyear . '&m=' . $thismonth . '&t=h&l=2';
        $ch = curl_init( $holiday_api );
        curl_setopt( $ch, CURLOPT_FAILONERROR, true );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
        $source = curl_exec( $ch );
        curl_close( $ch );
        if ( $source ) {
            $results = maybe_unserialize( $source );
            if ( isset( $results['status'] ) && $results['status'] == 200 ) {
                if ( ! is_array( $jp_holidays ) ) {
                    $jp_holidays = array();
                }
                $jp_holidays[$thisyear . $thismonth] = array();
                if ( isset( $results['result']['day'] ) ) {
                    foreach ( $results['result']['day'] as $hday ) {
                        $jp_holidays[$thisyear . $thismonth][$hday['mday']] = array( 'type' => $hday['htype'], 'name' => $hday['hname'] );
                    }
                    $jp_holidays[$thisyear . $thismonth]['expire'] = time() + 365 * 24 * 3600;
                }
                update_option( 'jp_holidays', $jp_holidays );
            }
        }
    }

    $yar = (int)$thisyear;
    $mon = (int)$thismonth;
    $day = 1;
    $regex = array();
    while( checkdate( $mon, $day, $yar ) ) {
        $classes = array();
        $wday = date( 'w', strtotime( sprintf( '%04d-%02d-%02d', $yar, $mon, $day ) ) );
        switch ( $wday ) {
        case 0 :
            $classes[] = 'sun';
            break;
        case 6 :
            $classes[] = 'sat';
            break;
        default :
        }
        if ( $jp_holidays && is_array( $jp_holidays ) && count( $jp_holidays[$thisyear . $thismonth] ) && isset( $jp_holidays[$thisyear . $thismonth][$day] ) ) {
            $classes[] = 'holiday';
        }
        $class = '';

        if ( count( $classes ) ) {
            $class =  ' class="' . implode( ' ', $classes ) . '"';
        }
        if ( $class ) {
            $regex['|<td( id="today")?>(()?' . $day . '()?)</td>|'] = '<td$1' . $class . '>$2</td>';
        }
        $day++;
    }

    $calendar_output = preg_replace( array_keys( $regex ), $regex, $calendar_output );

    return $calendar_output;
}
add_filter( 'get_calendar', 'add_week_classes2calendar', 0 );



//カスタム投稿で前の記事・次の記事表示

function mod_get_adjacent_post($direction = 'prev', $post_types = 'post') {
    global $post, $wpdb;
    if(empty($post)) return NULL;
    if(!$post_types) return NULL;
    if(is_array($post_types)){
        $txt = '';
        for($i = 0; $i <= count($post_types) - 1; $i++){
            $txt .= "'".$post_types[$i]."'";
            if($i != count($post_types) - 1) $txt .= ', ';
        }
        $post_types = $txt;
    }
    $current_post_date = $post->post_date;
    $join = '';
    $in_same_cat = FALSE;
    $excluded_categories = '';
    $adjacent = $direction == 'prev' ? 'previous' : 'next';
    $op = $direction == 'prev' ? '<' : '>';
    $order = $direction == 'prev' ? 'DESC' : 'ASC';
    $join  = apply_filters( "get_{$adjacent}_post_join", $join, $in_same_cat, $excluded_categories );
    $where = apply_filters( "get_{$adjacent}_post_where", $wpdb->prepare("WHERE p.post_date $op %s AND p.post_type IN({$post_types}) AND p.post_status = 'publish'", $current_post_date), $in_same_cat, $excluded_categories );
    $sort  = apply_filters( "get_{$adjacent}_post_sort", "ORDER BY p.post_date $order LIMIT 1" );
    $query = "SELECT p.* FROM $wpdb->posts AS p $join $where $sort";
    $query_key = 'adjacent_post_' . md5($query);
    $result = wp_cache_get($query_key, 'counts');
    if ( false !== $result )
        return $result;
    $result = $wpdb->get_row("SELECT p.* FROM $wpdb->posts AS p $join $where $sort");
    if ( null === $result )
        $result = '';
    wp_cache_set($query_key, $result, 'counts');
    return $result;
}
