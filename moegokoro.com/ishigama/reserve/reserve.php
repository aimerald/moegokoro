<?php
session_start();
require("./func.php");

mb_language("ja");
mb_internal_encoding("UTF-8");
$mailto = "rorottro@icloud.com";
$subject = "レストランのご予約";
$mail_from = "restaurant@lolia.jp";

$check_token = h($_POST["token"]);

if(empty($check_token) || h($_POST["token"]) != $_SESSION["token"]){
	//エラー処理
	echo("不正なデータ送信の可能性があります。"."<br/>");
	echo("お手数ではございますがお電話でお問い合わせください。"."<br>");
	echo("<a href='telto:0739265696'>0739265696</a>");
	
}else{
	//CSRFのバリデーションをパスした場合の処理
	//echo("CSRFの処理をパスしました！"); //debug
	
	$customer_order = safe_eash($_POST);
	save_session_each($_POST);	
	
	$send_body = <<<EOM
{$customer_order['name']}様からレストランのご予約を頂きました。\n
来店予定日は{$customer_order['date']}で{$customer_order['type']}のご希望です。\n
{$customer_order['name']}様の情報\n
	メールアドレス: {$customer_order['email']}\n
	電話番号 :{$customer_order['phone']}\n
	来店人数 : {$customer_order['number']}\n
	備考	: {$customer_order['body']}\n
以上\n
EOM;
	//echo($send_body);
	
	$customer_message = <<<EOM
		
		
EOM;
	
	
	if(mb_send_mail($mailto,$subject,$send_body,$mailfrom)){
		header("Location: ../index.html");
	}else{
		echo("ご登録に失敗しました。<br/>お手数ではございますが下記お電話でお問い合わせください。"."<br>");
		echo("<a href='telto:0739265696'>0739265696</a>");
	}
	//echo("処理終了！"); //debug
}

?>