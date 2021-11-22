$(document).ready(function (){
  $('.header-search').on('click',function(){
    $('.modal-search').show();
  })
  $('.modal-close').on('click',function(){
    $('.modal-search').hide();
  })
  $('.arrow-dropmenu').on('click',function(){
    $(this).next().slideToggle();
  })
  $('.header-menu-close').on('click',function(){
    $('.header-menu').fadeOut();
    $(this).hide();
  })
  $('.header-burger').on('click',function(){
    $('.header-menu').fadeIn();
     $('.header-menu-close').show();
  })
  $('.main-slider').slick({
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 10000,
  });
  $('.horse-image').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 10000,
  });
})