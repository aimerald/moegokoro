<?php
session_start();
	require("./date.php");
	require("./func.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="keyword" content="石窯パン工房ロリア" />
	<meta name="description" content="石窯,ロロッツ,レストラン,南紀白浜,ゴールデンウィーク"/>
	
	<title>石窯マイスターロロッツのお店　南紀白浜点</title>
	
	<!--Link rel-->
	<link rel="stylesheet" href="../assets/reset.css" />
	<link rel="stylesheet" href="../assets/jquery-ui.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="../css/modal.css" />
	<link rel="stylesheet" href="./css/main.css" />
	<link rel="stylesheet" href="http://summer-windmill.net/sns/css/zero.css" />
	<link rel="stylesheet" href="./css/flexslider.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="../images/favico.ico" />
	<link rel="canonical" href="http://lolia.jp/ishigama/index.html"/>
	
	<!--	Web fonts -->
	<link href='http://fonts.googleapis.com/css?family=Qwigley' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Parisienne&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<!--OGP-->
	<meta property="og:title" content="石窯パン工房ロリア" />
	<meta property="og:type" content="article"/>'
	<meta property="og:description" content="美味しそうなパスタにオードブル。ゴールデンウィークを利用した旅行のディナーに最適です！"/>
	<meta property="og:url" content="http://lolia.jp/ishigama/index.html" />
	<meta property="og:image" content="./images/favico.png"/>
	<meta property="og:site-name" content="石窯マイスターロロッツのお店"/>
	
	
	<!-- IE -->
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--></head>
<body class="full_black">
	<header  id="header_menu">
		<section class="header_include">
			<h1 id="main_logo">石窯パン工房ロリア</h1>
			<nav id="header_nav" class="side_line">
				<ul id="header_ul">
					<li class="header_side_li">
						<a href="./menu" class="header_a">レシピ</a>
					</li>
					<li class="header_side_li">
						<a href="./reserve/index.html" class="header_a">ご予約</a>
					</li>
					<li class="header_side_li">
						<a href="http://moegokoro.com" class="header_a">萌え心</a>
					</li>
				</ul>
			</nav>
		</section>
	</header>
	
	<section class="reserve_contianer">		
		<div class="reserve">
			<h1 class="title">光溢れるダイニングで贅沢なランチとディナーをご用意しております。</h1>
<!--
			<div class="description_container">
				<p class="w"></p>
			</div>
-->	
			<ul class="reserve_tab">
				<li class="tab" id="lunch">ランチ</li>
				<li class="tab" id="dinner">ディナー</li>
			</ul>
			
			<article class="information" id="lunch_container">
				<div class="flexslider slide_show">
					<ul class="slides">
            <li><img src="./images/lunch1.jpg"  class="image"/></li>
  	    		<li><img src="./images/lunch2.jpg" class="image"/></li>
  	    		<li><img src="./images/lunch3.jpg" class="image"/></li>
  	    		<li><img src="./images/lunch4.jpg" class="image"/></li>
					</ul>
				</div>
				
				<div class="form_container">
					<form action="./reserve.php" method="post">
						<input type="hidden" name="token" value="<?php echo(set_token()); ?>"/>
						<div class="field">
							<label class="label">ご予約者様のお名前</label>
							<input type="text" name="name" class="input" placeholder="お名前" value="<?php echo(bf($_SESSION["name"])); ?>"/>
						</div>
						<div class="field">
							<label class="label">ご連絡先のお電話番号</label>
							<input type="text" name="phone" class="input" placeholder="お電話番号" value="<?php echo(bf($_SESSION["phone"])); ?>"/>
						</div>
						<div class="field">
							<label class="label">メールアドレス</label>
							<input type="email" name="email" class="input" placeholder="メールアドレス" value="<?php echo(bf($_SESSION["email"])); ?>"/>
						</div>
						<div class="go_left">
							<select name="type">
								<option value="morning">モーニング</option>
								<option value="lunch">ランチ</option>
								<option value="dinner">ディナー</option>
							</select>
							<label class="label">時間帯</label>
						</div>
						<div class="go_left">
							<select name="number" id="go_left">
								<?php for($i=1;$i<9;$i++):?>
									<?php   if($_SESSION["number"] == $i){ ?>
										<option selected value="<?php echo(bf($i)); ?>"><?php echo($i); ?>人</option>
									<?php }else{ ?>
										<option value="<?php echo($i); ?>"><?php echo($i); ?>人</option>										
									<?php } ?>
								<?php endfor ?>
							</select>
							<label class="label">ご来店予定の人数</label>
						</div>
						<div class="field go_left">
							<span>
								<?php $reserve_date = my_reserve(60,date("Y"),date("m"),date("d")); ?>
								<select name="date">
									<?php foreach($reserve_date as $value){ ?>
										<?php if($_SESSION["date"] == $value): ?>									
											<option value="<?php echo($value); ?>" selected><?php echo($value); ?></option>
										<?php endif ?>
											<option value="<?php echo($value); ?>"><?php echo($value); ?></option>
									<?php } ?>
								</select>
							</span>
							<label class="label">ご来店予定日</label>
						</div>
						
						<div class="field">
							<textarea  name="body" class="text" placeholder="備考:アレルギーまたは苦手な食品などございましたら前もってお教えください。"><?php echo(bf($_SESSION["body"])); ?></textarea>
						</div>
						
						<input type="submit" class="button blue_line round" value="ご予約"/>	
						
					</form>
				</div>
			</article>
			<article class="information" id="dinner_container"></article>
			
		</div>
	</section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../assets/jquery-ui.js"></script>
<script src="./js/flexslider.js"></script>
<script src="./js/reserve.js"></script>
</body>
</html>
<!-- Y-masuo -->