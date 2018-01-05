$ ->
	
	window_size = $(window).width()
	
	$("article.course").css({
		"height": (window_size / 16) * 9
	})
	
	#variables
	ordble = $("#ordble > .order_description")
	$(window).scroll ->
		sc = $(this).scrollTop()
		
		console.log(sc)
		
		if sc > 110
			ordble.css({
				"position": "fixed",
				"top":  40
			})
		else
			ordble.css({
				"position": "absolute",
				"top": 80
			})
		
		if sc > 580
			ordble.fadeOut()
		else
			ordble.fadeIn()
		