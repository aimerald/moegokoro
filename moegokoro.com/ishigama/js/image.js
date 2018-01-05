// Generated by CoffeeScript 1.6.3
(function() {
  $(function() {
    var header, main_container, modal, modal_title, window_size;
    window_size = [$(window).width()];
    modal = $("article.modal");
    main_container = $("section.main_container");
    header = $("header#header_menu");
    modal_title = $("h1.modal_title");
    $("img.inpic").click(function() {
      var get_image_alt, get_image_src;
      modal_title.text("");
      main_container.css({
        "opacity": 0.333
      });
      header.css({
        "opacity": 0.333
      });
      get_image_src = $(this).attr("src");
      get_image_alt = $(this).attr("alt");
      $("img.modal_image").attr({
        src: get_image_src
      });
      modal_title.text(get_image_alt);
      return modal.css({
        "left": (window_size - 560) / 2
      }).show("fold", 666);
    });
    $(".modal_close").click(function() {
      modal.hide("drop", {
        direction: "down"
      }, 333);
      header.css({
        "opacity": 1
      });
      return main_container.css({
        "opacity": 1
      });
    });
    return $("button.ajax").click(function() {
    	//console.log("Clicked");
      return $.get("./data.js", {
        name: "VAlue"
      }, function(data) {
        return console.log(data);
      });
    });
  });

}).call(this);
