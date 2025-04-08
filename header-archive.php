
<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="keywords" content="かじわら英樹,梶原英樹,京都市議会議員"/>
 <meta name="description" content="京都府議会議員 かじわら英樹（山科区選出）の公式ウェブサイトです">

<?php wp_head(); ?>

</head>
<body>
  <div class="wrapper">
    <div class="header" id="header">

      <div class="header_top" id="header_top">

        <div class="header_nav_name">
          <h1 class="name_img"><a href="<?php echo esc_url( home_url('/') ); ?>#header_top"><img src="<?php echo get_template_directory_uri(); ?>/images/header_name.svg" alt=""></a></h1>
        </div>

        <div id="nav-toggle">
          <div>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <ul class="menu_header"><!-- PCメニュー -->
          <li class="menu_link"><a href="<?php echo esc_url( home_url('/') ); ?>#header_top">トップ</a></li>
          <li class="menu_link"><a href="<?php echo esc_url( home_url('/') ); ?>gikai_news">議会報告</a></li>
          <li class="menu_link"><a href="<?php echo esc_url( home_url('/') ); ?>#social">SNS</a></li>
          <li class="menu_link"><a href="<?php echo esc_url( home_url('/') ); ?>#message">宣誓</a></li>
          <li class="menu_link"><a href="<?php echo esc_url( home_url('/') ); ?>#policy_fst">歩み</a></li>
          <li class="menu_link"><a href="<?php echo esc_url( home_url('/') ); ?>#policy">政策</a></li>
          <li class="menu_link"><a href="<?php echo esc_url( home_url('/') ); ?>#profile">プロフィール</a></li>
          <li class="menu_link"><a href="<?php echo esc_url( home_url('/') ); ?>supporter">後援会</a></li>
          <li class="menu_link"><a href="<?php echo esc_url( home_url('/') ); ?>#contact">お問い合わせ</a></li>
        </ul>

      </div><!--/header_top-->

      <div id="gloval-nav"><!--スマホメニュー -->
        <ul class="nav_menu">
          <li><a href="<?php echo esc_url( home_url('/') ); ?>#header_top">トップ</a></li>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>gikai_news">議会報告</a></li>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>#social">SNS</a></li>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>#message">宣誓</a></li>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>#policy_fst">かじわら英樹の歩み</a></li>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>#policy">政策</a></li>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>#profile">プロフィール</a></li>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>supporter">後援会</a></li>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>#contact">お問い合わせ</a></li>
        </ul>
        <ul class="nav_sns_icon">
          <li><a href="https://www.facebook.com/fugikaigin.kajihide/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/f_logo.svg"></a></li>
          <li><a href="https://www.instagram.com/h.kajiwara/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/in_logo.png"></a></li>
          <li><a href="https://twitter.com/kajiwarahideki" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/t_logo.svg"></a></li>
          <li><a href="https://line.me/R/ti/p/%40661zyrla" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/l_logo.svg"></a></li>
          <li><a href="https://www.youtube.com/channel/UCXQrD6NPHAo4pNXDk9cxh1w" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/y_logo.svg"></a></li>
        </ul>
      </div>

      <?php if( !(is_home() || is_front_page() )): ?>
        <div class="breadcrumb-area">
          <?php
          if ( function_exists( 'bcn_display' ) ) {
          bcn_display();
          }
          ?>
        </div>
      <?php endif; ?>

    </div>
