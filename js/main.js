$(window).on("load", function () {
  /* ==========================================================================
   Preloader
   ========================================================================== */
  $(".preloader-circle").css("display", "none");
  $(".preloader").fadeOut(400);
  $("body").removeClass("loading");


  /* ==========================================================================
      Materialize - materializecss.com
      ========================================================================== */


  $('#sponsors-carousel').carousel({
    dist: 0,
    numVisible: 5,
    padding: 70
  });

  /*autoplay*/
  var instance = M.Carousel.getInstance($('#sponsors-carousel'));
  var play = 1;

  $('.carousel').hover(function () {
    play = false;
  }, function () {
    play = true;
  });

  function slide() {
    setInterval(function () {
      if (play) {
        instance.next();
      }
    }, 4000);
  }

  slide();

  
  /* ==========================================================================
    Change header on scroll
    ========================================================================== */
    var header = $("header");
    var navLinks = $("nav ul li a.section-link");
    var win = $(window);
    var winH = win.height();   // Get the window height.

    win.on("scroll", function () {
        if ($(this).scrollTop() > winH ) {
          header.addClass("shadow");
        } else {
          header.removeClass("shadow");
        }
    }).on("resize", function(){ // If the user resizes the window
       winH = $(this).height(); // you'll need the new height value
    });
    navLinks.on("click", function () {
        setTimeout(() => {  header.addClass("shadow"); }, 1000);
    })



  /* ==========================================================================
    Auto-updating year (footer)
    ========================================================================== */
  $("span.year").text(new Date().getFullYear());
});