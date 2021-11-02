 /* Scroll */
 $(window).scroll(function() {
    var scrll = $('html,body').scrollTop();
    if(scrll>300) {
      $('.nav_menu').addClass('navbar-sticker');
    }
    else {
      $('.nav_menu').removeClass('navbar-sticker');
    }
    if(scrll>300) {
      $('.scroll').addClass('hien');
    }
    else {
      $('.scroll').removeClass('hien');
    }
  })
  $('.scroll').on('click', function(){
    $('html,body').animate({scrollTop:0},500);
  })
  /* Scroll End */