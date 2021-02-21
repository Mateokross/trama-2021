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

  $('.dropdown-trigger').dropdown({
    hover:true,
    constrainWidth:false,
    coverTrigger:false,
    inDuration:400,
    outDuration:400
  });

  $('.dropdown-trigger-mobile').dropdown({
    hover:true,
    constrainWidth:false,
    coverTrigger:false,
    inDuration:400,
    outDuration:400
  });

  if($('.collapsible').length > 0){
    $('.collapsible').collapsible();
  }
  


  if($('#bootcamp-carousel').length > 0){
    $('#bootcamp-carousel').carousel({
      dist: 0,
      numVisible: 5,
      padding: 70
    });
  }

  if($('#sponsors-carousel').length > 0){
    $('#sponsors-carousel').carousel({
      dist: 0,
      numVisible: 5,
      padding: 70
    });
  }

});