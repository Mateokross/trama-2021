$(document).ready(function () {

  /* ==========================================================================
  AOS - https://michalsnik.github.io/aos/
  ========================================================================== */
  AOS.init({
    offset: 300,
    delay: 200, 
    duration: 1800,
    once: true
  });


  /* ==========================================================================
  Materialize - materializecss.com
  ========================================================================== */
    $('.sidenav').sidenav({
        edge: 'right'
    });


});