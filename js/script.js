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
  
})