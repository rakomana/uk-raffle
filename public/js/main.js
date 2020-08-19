(function($){
  "user strict";

  $(document).on('ready',function() {
    // inline background image function call
    background();
  });

  $(window).on("load", function() {
    //preloader
    $(".loader").delay(300).animate({
      "opacity" : "0"
      }, 300, function() {
      $(".loader").css("display","none");
    });
  });

  // header search 
  $(".header-serch-btn").on('click', function(){
    if ($(this).hasClass('toggle-close')) {
        $(this).removeClass('toggle-close').addClass('toggle-open');
        $('.header-top-search-area').addClass('open');
    }
    else {
        $(this).removeClass('toggle-open').addClass('toggle-close');
        $('.header-top-search-area').removeClass('open');
    }
  });

  // close search area when click off of container
  $(document).on('click touchstart', function (e){
    if (!$(e.target).is('.header-serch-btn, .header-serch-btn *, .header-top-search-area, .header-top-search-area *')) {
      $('.header-top-search-area').removeClass('open');
      $('.header-serch-btn').addClass('toggle-close');
    }
  });

  // mobile menu js
  $(".navbar-collapse>ul>li>a, .navbar-collapse ul.sub-menu>li>a").on("click", function() {
    const element = $(this).parent("li");
    if (element.hasClass("open")) {
      element.removeClass("open");
      element.find("li").removeClass("open");
    }
    else {
      element.addClass("open");
      element.siblings("li").removeClass("open");
      element.siblings("li").find("li").removeClass("open");
    }
  });

  //js code for menu toggle
  $(".menu-toggle").on("click", function() {
      $(this).toggleClass("is-active");
  });
  
   // menu options custom affix
   var fixed_top = $(".header-section");
   $(window).on("scroll", function(){
       if( $(window).scrollTop() > 50){  
           fixed_top.addClass("animated fadeInDown menu-fixed");
       }
       else{
           fixed_top.removeClass("animated fadeInDown menu-fixed");
       }
   });
 

  // header-top 
  $('.header-top-open-btn').on('click', function(){
    $('.header-top').addClass('open');
  });

  $('.header-top .close-btn').on('click', function(){
    $('.header-top').removeClass('open');
  });

  // inline background image function
  function background() {
    var img =$('.bg_img');
    img.css('background-image', function () {
    var bg = ('url(' + $(this).data('background') + ')');
    return bg;
    });
  };

  // counter init
  $('.counter').counterUp({
    delay: 50,
    time: 2500
  });

  // wow js init
  new WOW().init();

  // countdown time setup
  $('#remainTime1').countdown('2020/08/10', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  $('#remainTime2').countdown('2020/07/25', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  $('#remainTime3').countdown('2020/09/10', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  $('#remainTime4').countdown('2020/08/10', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  $('#remainTime5').countdown('2020/09/01', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  $('#remainTime6').countdown('2020/08/29', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  // color version change
  $('.template-version button').on('click', function(){
    $('.template-version').toggleClass('open');
  });

  // testimonial-slider js
  $('.testimonial-slider').owlCarousel({
    loop:true,
    margin: 30,
    smartSpeed: 800,
    dots: false,
    dots: false,
    autoplay: true,
    responsiveClass:true,
    responsive:{
      0:{
        items: 1
      },
      576:{
        items: 2
      },
      992:{
        items:3
      }
    }
  });

  // Boxes js
  $('.boxes').owlCarousel({
    loop:true,
    margin: 30,
    smartSpeed: 800,
    dots: false,
    dots: false,
    autoplay: true,
    responsiveClass:true,
    responsive:{
      0:{
        items: 1
      },
      576:{
        items: 2
      },
      992:{
        items:3
      }
    }
  });






  // Show or hide the sticky footer button
  $(window).on("scroll", function() {
    if ($(this).scrollTop() > 200) {
        $(".scroll-to-top").fadeIn(200);
    } else {
        $(".scroll-to-top").fadeOut(200);
    }
  });

  // Animate the scroll to top
  $(".scroll-to-top").on("click", function(event) {
    event.preventDefault();
    $("html, body").animate({scrollTop: 0}, 300);
  });


})(jQuery);