$(function(){

	/* 初期位置の設定 */
	var w = $(window).width();
	$(".outBox").css({
		"width": w - 4,
		"height": w /2 - 4
	});
	var out_width = $(".outBox").width();
	$(".middle_box").css({
		"width": out_width / 2 -8,
		"height": out_width / 2 -8
	});
	var middle = $(".middle_box").width();
	$(".small").css({
		"width": middle / 2 - 8,
		"height": middle / 2 - 8
	});
	
	var h_size = $(".main_container").height();
	$("footer").css({
		"top": h_size + 90,
		"left": 0
	});
	
	/* 初回ログイン時のメニューバーの挙動 */
	$("header").css({
		"opacity": 1
	}).mouseover(function(){
		$(this).css({
			"opacity": 1
		});
	}).mouseout(function(){
		$(this).css({
			"opacity": 1
		});
	});

	/* スクロール時の挙動 */
	$(window).scroll(function(){
		var sc = $(this).scrollTop();
		if(sc > 50){
			$("header").css({
				"opacity": 0.6,
				"height" : 40
			}).mouseover(function(){
				$(this).css({
					"opacity": 1
				}).mouseout(function(){
					$(this).css({
						"opacity": 0.6
					});
				});
			});
			$("#main_logo").css({
				"font-size": 26,
				"margin-top": 2
			});
			$("#header_nav").css({
				"top": 10
			});
			$(".header_side_li").css({
				"font-size": 14
			});
		}else{
			$("header").css({
				"opacity": 1,
				"height": 70
			}).mouseover(function(){
				$(this).css({
					"opacity": 1
				}).mouseout(function(){
					$(this).css({
						"opacity": 1
					});
				});
			});
			$("#main_logo").css({
				"font-size": 36,
				"margin-top": 8
			});
			$("#header_nav").css({
				"top": 30
			});
			$(".header_side_li").css({
				"font-size": 18
			});
		}
	});
	
	/* Windowサイズを切り替えた時の挙動 */
	$(window).resize(function(){
		var resize = $(this).width();
		$(".outBox").css({
			"width": resize - 10,
			"height": resize /2 - 14
		});
		
		var re_out = $(".outBox").width();
		var out_width = $(".outBox").width();
		$(".middle_box").css({
			"width": re_out / 2 -12,
			"height": re_out / 2 -12
		});
		
		var re_middle = $(".middle_box").width();
		$(".small").css({
			"width": re_middle / 2 - 10,
			"height": re_middle / 2 - 10
		});
		
		var re_h_size = $(".main_container").height();
		$("footer").css({
			"top": re_h_size + 90,
			"left": 0
		});
	});
});
