jQuery(function($){
    //アコーディオン
    $('.accordion__title').on('click', function () {
        $(this).next().slideToggle();
        $(this).children().toggleClass('open');
    });

    //ハンバーガーメニュー用
    $('.humburger-btn').on('click',function(){
        $('.humburger-btn').toggleClass('cross');
        $('.humburger-nav-wrapper').toggleClass('open');
    });
    
    $('.humburger-nav_item a').on('click',function(){
      $('.humburger-nav-wrapper').fadeOut(100);
      $('.humburger-btn').removeClass('cross');
    });

    //ページトップボタン追従
    var appear = false;
    var pagetop = $('#page-top');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
        if (appear == false) {
          appear = true;
          pagetop.stop().animate({
            'bottom': '50px'
          }, 300);
        }
      } else {
        if (appear) {
          appear = false;
          pagetop.stop().animate({
            'bottom': '-50px'
          }, 300);
        }
      }
    });
    pagetop.click(function () {
      $('body, html').animate({ scrollTop: 0 }, 300);
      return false;
    });
});