$ ->
	
	#Variables
	window_size = [$(window).width()]
	modal = $("article.modal")
	main_container = $("section.main_container")
	header = $("header#header_menu")
	modal_title = $("h1.modal_title")
	
	$("img.inpic").click ->
		modal_title.text("")
		main_container.css({
			#"-webkit-filter": "blur(10px)",
			"opacity": 0.333
		})
		#main_container.fadeOut()
		header.css({
			"opacity": 0.333
		})
		
		#Open modal
		get_image_src = $(this).attr("src")
		get_image_alt = $(this).attr("alt")
		
		$("img.modal_image").attr({
			src: get_image_src
		})
		modal_title.text(get_image_alt)
		
		modal.css({
			"left": (window_size - 560) / 2
		}).show("fold",666)
		

		
		
	#Close Modal
	$(".modal_close").click ->
		modal.hide("drop",{direction: "down"},333)
		header.css({
			"opacity": 1
		})
		main_container.css({
			#"-webkit-filter": "blur(0px)",
			"opacity": 1
		})
		#main_container.fadeIn()
		
	
	$("button.ajax").click ->
		$.get("./data.js",{
			name : "VAlue"
		}, (data) ->
			console.log(data)
		)