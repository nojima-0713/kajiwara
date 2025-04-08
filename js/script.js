
//Facebook
$(function(){
(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = "https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v8.0";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
});

//ナビ
$('#nav-toggle').on('click', function() {
  $('body').toggleClass('open');
});

$('#gloval-nav a[href]').on('click', function(event) {
  $('#nav-toggle').trigger('click');
});


/*スマホ時ホバーアニメーション無効*/

var touch = 'ontouchstart' in document.documentElement
            || navigator.maxTouchPoints > 0
            || navigator.msMaxTouchPoints > 0;
 
if (touch) { // remove all :hover stylesheets
    try { // prevent exception on browsers not supporting DOM styleSheets properly
        for (var si in document.styleSheets) {
            var styleSheet = document.styleSheets[si];
            if (!styleSheet.rules) continue;
 
            for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                if (!styleSheet.rules[ri].selectorText) continue;
 
                if (styleSheet.rules[ri].selectorText.match(':hover')) {
                    styleSheet.deleteRule(ri);
                }
            }
        }
    } catch (ex) {}
}


//スムーススクロール
  /* ページ外アンカーリンク*/
  var urlHash = location.hash;
  if (urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function(){
      // ヘッダー固定の場合はヘッダーの高さを数値で入れる、固定でない場合は0
      var headerHight = 76;
      var target = $(urlHash);
      var position = target.offset().top - headerHight;
      $('body,html').stop().animate({scrollTop:position}, 800);
    }, 800);
    setTimeout( function() {
      window.history.replaceState(null, '', location.pathname + location.search);
    }, 1000 ); 
  }
  
  
  /*ページ内リンク*/
  $('a[href^="#"]').click(function() {
    var headerHeight = 76;
    var href= $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $('body,html').stop().animate({scrollTop:position}, 500);   
    return false; 
  });
  
  /*トップへ戻る*/
  const pagetopBtn = document.querySelector('#page_top');
  pagetopBtn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });

/*
 * トップに戻るボタン　出現
 */
$(document).ready(function(){
  $("#page_top").removeClass('btnFIn').addClass('btnFOut')  ;
  $(window).on("scroll", function() {
      if ($(this).scrollTop() > 100) {
          $("#page_top").removeClass('btnFOut').addClass('btnFIn'); //ふわっと表示
      } else {
          $("#page_top").removeClass('btnFIn').addClass('btnFOut'); //ふわっと非表示
      }
      scrollHeight = $(document).height(); //ドキュメントの高さ
      scrollPosition = $(window).height() + $(window).scrollTop(); //現在地
      footHeight = $(".footer").innerHeight(); //footerの高さ（＝止めたい位置）
      if ( scrollHeight - scrollPosition  <= footHeight ) { //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
          $("#page_top").css({
              "position":"absolute", //pisitionをabsolute（親：wrapperからの絶対値）に変更
              "bottom": footHeight + 10,
              "opacity": "1"//下からfooterの高さ + 20px上げた位置に配置
          });
      } else { //それ以外の場合は
          $("#page_top").css({
              "position":"fixed", //固定表示
              "bottom": "10px" , //下から20px上げた位置に
              "opacity" : "1"
          });
      }
  });
});



  //読み込み時は非表示
  $(window).bind('load', function(){
    $("#page_top").removeClass('btnFIn').addClass('btnFOut')  ;
  });

  var windowWidth = $(window).width();
  var windowSm = 470;
  if (windowWidth <= windowSm) {
    $("#page_top").css({
      "position":"absolute",
    });
  }


//チェックで送信ボタン押せるように
jQuery(function() {
  jQuery('#spam').on('click', function() {
    SetConditionOfSubmit();
  });
});
function SetConditionOfSubmit(){
  var chk = jQuery('#spam').prop('checked');
  jQuery('#submitbtn').attr('disabled', !chk);
}
