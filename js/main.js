    var header = $("#header");
    //     introH = $("#intro").innerHeight(),
    var scrollOffset;

 // slider
  $('.breaking_news_slider').slick({
    infinite: true,
    autoplay: true,
    arrows: false,
    speed: 300
  });

 // fixed header

    $(window).on("scroll", function() {
        scrollOffset = $(this).scrollTop();
        if (scrollOffset != 0) {
		header.addClass("fixed");
        } else {
             header.removeClass("fixed");
       }
    });

  // burger menu

  var menu = $("#burger_menu");
  var burger = $("#burger");
  var close = $("#menu_close");

     burger.on("click", function() {
      menu.addClass('active');
     });
     close.on("click", function() {
      menu.removeClass('active');
     });