<?php

function insertsql($name,$email){
	try{
		$dbh = new PDO("mysql:host=mysql007.phy.lolipop.lan;dbname=LAA0312095-moegokoro","LAA0312095","lancelot183");
		
	}catch(PDOException $e){
		var_dump($e->getMessage());	
		exit;
	}
	
	$stmt = $dbh->prepare("insert into listen (name,email) values (:name,:email)");
	$stmt->execute(array(":name"=>$name,":email"=>$email));
	
	
	mb_language("Ja") ;
	mb_internal_encoding("UTF-8") ;
	$subject="お申込みありがとうございます。";
	$content="${name} さま\nこのたびはお申込み誠にありがとうございます。\nこれから毎日メールをお送りいたしますのでよろしくお願いします。\nこのメールには返信することはできません。";
	$mailfrom="From:" .mb_encode_mimeheader("Moegokoro") ."<mail@moegokoro.com>";
	
	if(mb_send_mail($email,$subject,$content,$mailfrom)){
/* 		echo("メールの送信に成功しました！"); */
		eixt;
	}else{
		echo("問題が発生しました。\nしばらくたってからもう一度お確かめ下さい");
		exit;
	}
}

?>