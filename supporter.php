<?php
//var_dump($_POST);

// 変数の初期化
$page_flag = 0;
$clean = array();
$error = array();

// サニタイズ
if( !empty($_POST) ) {
	foreach( $_POST as $key => $value ) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	}
}

if( !empty($_POST['btn_confirm']) ) {

  $error = validation($clean);

	if( empty($error) ) {
	$page_flag = 1;
  // セッションの書き込み
  session_start();
  $_SESSION['page'] = true;
}
}elseif( !empty($_POST['btn_submit']) ) {

  session_start();
if( !empty($_SESSION['page']) && $_SESSION['page'] === true ) {

  // セッションの削除
  unset($_SESSION['page']);

 $page_flag = 2;

 // 変数とタイムゾーンを初期化
 $header = null;
 $admin_Body= null;
 $admin_reply_subject = null;
 $admin_reply_text = null;
 date_default_timezone_set('Asia/Tokyo');

 //日本語の使用宣言
	mb_language("ja");
	mb_internal_encoding("UTF-8");


 // ヘッダー情報を設定
 $header = "MIME-Version: 1.0\n";
 $header = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
 $header .= "From: かじわら英樹公式サイト <design_section_07@senkyo-pro.com>\n";
 $header .= "Reply-To: かじわら英樹公式サイト <design_section_07@senkyo-pro.com>\n";

 // 運営側へ送るメールの件名
 	$admin_reply_subject = "後援会入会フォームからのメールを受付ました";

 	// 本文を設定
 	$admin_reply_text = "下記の内容でお申し込みがありました。\n\n";
 	$admin_reply_text .= "日時：" . date("Y-m-d H:i") . "\n";
 	$admin_reply_text .= "氏名：" . $_POST['your_name'] . "\n";
 	$admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";

  $admin_Body="\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n";

	$admin_Body .="このメールは、\n\n";


 	// 運営側へメール送信
 	mb_send_mail( 'design_section_07@senkyo-pro.com', $admin_reply_subject, $admin_reply_text,$admin_Body, $header);

} else {
  $page_flag = 0;
}
}

function validation($data) {

	$error = array();

	// 氏名のバリデーション
	if( empty($data['your_name']) ) {
		$error[] = "「氏名」は必ず入力してください。";
	}

  // メールアドレスのバリデーション
	if( empty($data['email']) ) {
		$error[] = "「メールアドレス」は必ず入力してください。";
	}elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
		$error[] = "「メールアドレス」は正しい形式で入力してください。";
	}


	return $error;
}
?>
<!DOCTYPE>
<html lang="ja">
<head>
<title>お問い合わせフォーム</title>

<style rel="stylesheet" type="text/css">
body {
	padding: 20px;
	text-align: center;
}

h1 {
	margin-bottom: 20px;
	padding: 20px 0;
	color: #209eff;
	font-size: 122%;
	border-top: 1px solid #999;
	border-bottom: 1px solid #999;
}

input[type=text] {
	padding: 5px 10px;
	font-size: 86%;
	border: none;
	border-radius: 3px;
	background: #ddf0ff;
}

input[name=btn_confirm],
input[name=btn_submit],
input[name=btn_back] {
	margin-top: 10px;
	padding: 5px 20px;
	font-size: 100%;
	color: #fff;
	cursor: pointer;
	border: none;
	border-radius: 3px;
	box-shadow: 0 3px 0 #2887d1;
	background: #4eaaf1;
}

input[name=btn_back] {
	margin-right: 20px;
	box-shadow: 0 3px 0 #777;
	background: #999;
}

.element_wrap {
	margin-bottom: 10px;
	padding: 10px 0;
	border-bottom: 1px solid #ccc;
	text-align: left;
}

label {
	display: inline-block;
	margin-bottom: 10px;
	font-weight: bold;
	width: 150px;
}

.element_wrap p {
	display: inline-block;
	margin:  0;
	text-align: left;
}

label[for=gender_male],
label[for=gender_female],
label[for=agreement] {
	margin-right: 10px;
	width: auto;
	font-weight: normal;
}

textarea[name=contact] {
	padding: 5px 10px;
	width: 60%;
	height: 100px;
	font-size: 86%;
	border: none;
	border-radius: 3px;
	background: #ddf0ff;
}

.error_list {
	padding: 10px 30px;
	color: #ff2e5a;
	font-size: 86%;
	text-align: left;
	border: 1px solid #ff2e5a;
	border-radius: 5px;
}
</style>
</head>
<body>
<h1>お問い合わせフォーム</h1>

<?php if( $page_flag === 1 ): ?>

  <form method="post" action="">
  	<div class="element_wrap">
  		<label>氏名</label>
  		<p><?php echo $_POST['your_name']; ?></p>
  	</div>
  	<div class="element_wrap">
  		<label>メールアドレス</label>
  		<p><?php echo $_POST['email']; ?></p>
  	</div>
  	<input type="submit" name="btn_back" value="戻る">
  	<input type="submit" name="btn_submit" value="送信">
  	<input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
  	<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
  </form>

<?php elseif( $page_flag === 2 ): ?>

<p>送信が完了しました。</p>

<?php else: ?>

  <?php if( !empty($error) ): ?>
	<ul class="error_list">
	<?php foreach( $error as $value ): ?>
		<li><?php echo $value; ?></li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>

<form method="post" action="">
	<div class="element_wrap">
		<label>氏名</label>
		<input type="text" name="your_name" value="<?php if( !empty($_POST['your_name']) ){ echo $_POST['your_name']; } ?>">
	</div>
	<div class="element_wrap">
		<label>メールアドレス</label>
		<input type="text" name="email" value="<?php if( !empty($_POST['email']) ){ echo $_POST['email']; } ?>">
	</div>
	<input type="submit" name="btn_confirm" value="入力内容を確認する">
</form>

<?php endif; ?>

</body>
</html>
