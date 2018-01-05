<?php
	require("php/func.php");
$name = htmlspecialchars($_POST["name"],ENT_QUOTES);
$email = htmlspecialchars($_POST["email"],ENT_QUOTES);

if(!empty($name) && !empty($email)){
	insertsql($name,$email);
	
	unset($name);
	unset($email);
	$check = "メールの送信に成功しました！";
	
}else{
	$check = "文字が入力されていません。";
}

?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=8 ; IE=9" />	
	<meta  name="keywords" content="萌え心,もえごころ,萌えごころ,和歌山県田辺市の同人サークル,イベントサークル">
	<meta name="description" content="萌え心は和歌山県を萌えの力で盛り上げるイベントサークルです。今後のイベントや活動状況のご紹介します。">
	
	<!-- Link rel -->
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.12.0/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/button.css">
<!-- 	<link rel="stylesheet" href="css/rain.css"> -->
	<link rel="canonical" href="http://moegokoro.com/mail"/>
	<link rel="shortcut icon" href="http://moegokoro.com/images/favico.ico" />
	<!--[if IE 9]><script src="js/forie.js"></script><![endif]-->
	
	<title>萌え心-トップページ-</title>
	
	<!--OGP -->
	<meta property="og:title" content="萌え心">
	<meta property="og:type" content="website">
	<meta property="og:description" content="和歌山県田辺市のイベントサークル『萌え心』のホームページ。ライブイベント、同人即売会など実施" />
	<meta property="og:url" content="http://moegokoro.com/" />
	<meta property="og:image" content="http://moegokoro.com/images/splash.png" />
	<meta property="og:site_name" content="萌え心 -トップページ-" />
	
</head>

<body>
	<div id="container">
		<header>
			<section>
					<h1 id="main_title">萌え心</h1>
					<p id="main_description">もえごころ</p>
					<div id="header_img"></div>
			</section>
		</header>	
		
		<div id="content">
		
			<div id="sidebar">		
				<div class="menu_index_background">
						<p class="menu_index_title">メニュー</p>
					</div><!--  menu_bar -->
				<nav id="groval_nav">
					<ul>
						<li id="this" class="lists">
								<div class="nav_li_strings">
									<h1>トップページ</h1>
									<p>Home</p>
								</div>
							</li>
						<li class="lists">
							<a href="events">
								<div class="nav_li_strings">
									<h1>イベント情報</h1>
									<p>Festival</p>
								</div>
							</a>
						</li>
						<li class="lists">
							<a href="contact">
								<div class="nav_li_strings">
									<h1>お問い合わせ</h1>
									<p>Letter</p>
								</div>
							</a>
						</li>
						<li class="lists">
							<a href="staff">
								<div class="nav_li_strings">
									<h1>スタッフ</h1>
									<p>Staff</p>
								</div>
							</a>
						</li>
					</ul>
				</nav> <!-- グローバルリンク -->
				<div class="menu_index_background">
					<p class="menu_index_title">関連リンク</p>
				</div><!--  menu_bar -->
				<nav id="link_relation">
					<ul>
						<li id="mixi" class="lists">
							<a href="http://page.mixi.jp/recent_page_feed.pl?page_id=283593" target="_blank">
								<div class="nav_li_strings_2">
									<h1>mixi</h1>
									<p>萌え心mixiコミュニティ</p>
								</div>
							</a>
							</li>
						<li id="oreyome_night" class="lists">
						<a href="http://page.mixi.jp/view_page_information.pl?page_id=54972&module_id=288312" target="_blank">
								<div class="nav_li_strings_2">
									<h1>俺の嫁ナイト</h1>
									<p>オレヨメ夜</p>
								</div>
							</a>
							</li>
						<li id="hanatsubomi" class="lists">
						<a href="http://www17.ocn.ne.jp/~hanatubo/" target="_blank">
								<div class="nav_li_strings_2">
									<h1>花つぼみ</h1>
									<p>四季の花が彩る街道</p>
								</div>
							</a>
							</li>
					</ul>
				</nav>　<!-- 他サイトへのリンク -->
			</div><!--  end sidebar -->
			
			<style>
				.form{
					width: 90%;
					height: 30px;
					margin: 15px 0px 5px 0px;
				}
				.confirm{
					width: 90%;
					height: 30px;
					margin-top: 20px;
				}
				.string_check{
					color: red;
					font-size: 20px;
				}
				#cat{
/*
					position: fixed;
					bottom: 10px;
					right: 20px;
*/
					width: 150px;
					height: auto;
					display: none;
					border-radius: 15px;
				}
				.like{
					width: 100px;
					height: 25px;
					background-color: #1d6cff;
					color: white;
					text-align: center;
					cursor: pointer;
					border-radius: 2px;
				}
				.like:hover{
					background-color: #0048cc;
					cursor: pointer;
					box-shadow: 1px 1px 1px gray;
				}
			</style>
			
			<section  id="contents_section">
					<article  class="attention">
						<div class="title">
									<h1 class="company_name">王様の副業</h1>
									<h2 class="sub_title_2">Moe＆Biz</h2>
								<div class="title_under_line"></div><!-- 横線を引くためのコード -->
						</div><!-- ここまでがタイトル -->
						<p>僕はお仕事を七件持っています。</p>
						<p>アルバイトが二件と副業が五件です。</p>
						<p>そんな私の本業はなんでしょう？</p>
						<p>本業は。</p>
						<p>本業は『王様』です。</p>
						<p>なんのことを行っているのかさっぱりわからないでしょう。</p>
						<p>僕もわかりません。</p>
						<p>でもこの下のフォームにお名前（性だけでもOk）とメールアドレスを入ろyくしてくれれば</p>
						<p>あなたの目で確認してもらうことができます。</p>
						<p>さあ、あなたの目でこの世界の『王』を見てださい。</p>
						<div class="like">イイね！</div>
						<img src="images/cat.jpg" id="cat"/>
						<?php
							if(!empty($check)){
						?>
						<p class="string_check"><?php echo($check) ?></p>
						<?php
						unset($check);
							}
						?>
						<form action="" method="post">
							<input type="text" name="name" placeholder="お名前を入力してください（性だけでもOKです。）" class="form"/>
							<input type="email" name="email" placeholder="メールアドレスを入力してください。" class="form" />
							<button class="confirm" type="submit">送信</button>
						</form>
					</article>	
			</section>
		<footer>
				<article>
					<nav>
						<ul>
							<li>トップページ</li>
							<li><a href="events">イベント情報</a></li>
							<li><a href="contact">お問い合わせ</a></li>
							<li><a href="../staff">スタッフ</a></li>
							<li><a href="http://mixi.bz/ifv" target="_blank">萌え心＠mixi</a></li>
						</ul>
					</nav>
				</article>
				<address>
					<p id="copyright"><small>Copyright &copy; 2011 - 2013 moegokoro.com</small></p>
				</address>
		</footer>
	</div> <!-- end container -->
	<script src="../js/jquery.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$(function(){
			setTimeout(function(){
				$(".string_check").fadeOut(3000);
			}, 3000);
			
			$(".like").click(function(){
				$("#cat").show();
				setTimeout(function(){
					$("#cat").fadeOut(2000);
				}, 2000)
			});
		});
	</script>
</body>
</html>
<!-- Y-Masuo -->