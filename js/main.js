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
    Auto-updating year (footer)
    ========================================================================== */
  $("span.year").text(new Date().getFullYear());
});