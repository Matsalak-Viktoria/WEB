$(document).ready(function (){
    // Плавный скролл 
  $("body").on('click', '[href*="#"]', function (e) {
    var fixed_offset = 200;
    $('html,body').stop().animate({
      scrollTop: $(this.hash).offset().top
    }, 1000);
    e.preventDefault();
  });
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
  // Главный слайдер
  $('.main-slider').slick({
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 10000,
    arrows:false
  });
  $('.horse-image').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 10000,
    responsive: [{
              breakpoint: 737,
              settings: {
                slidesToShow: 2,
                variableWidth: false,
                centerMode: true,
                centerPadding: '30px',
                arrows:false
              }       
            }]
  });
  $('.phone-mask').mask('+3 (999) 999-99-99');
  $('.registration').validate({
        errorClass: "invalid",
        errorElement: "label",
        rules: {
          user_name: {
            required: true,
            minlength: 2,
            maxlength: 15,

          },
          user_email: {
            required: true,
          },
          user_phone:{
            required:true
          }
        },
        messages: {
          user_name: {
            required: "Поле обязательно для заполнения ",
            minlength: jQuery.validator.format("минимум {0} символов!"),
            maxlength: jQuery.validator.format("максимум {0} символов!")
          },
          user_email: {
            required: "Поле обязательно для заполнения ",
            email: "Не правильно ",
          }
        },
  });
  $('.contacts-form form').validate({
        errorClass: "invalid",
        errorElement: "label",
        rules: {
          user_name: {
            required: true,
            minlength: 2,
            maxlength: 15,

          },
          user_email: {
            required: true,
          },
          user_phone:{
            required:true
          },
          user_message:{
            required:true
          }
        },
        messages: {
          user_name: {
            required: "Поле обязательно для заполнения ",
            minlength: jQuery.validator.format("минимум {0} символов!"),
            maxlength: jQuery.validator.format("максимум {0} символов!")
          },
          user_email: {
            required: "Поле обязательно для заполнения ",
            email: "Не правильно ",
          },
          user_phone: {
            required: "Поле обязательно для заполнения ",
          },
          user_message: {
            required: "Поле обязательно для заполнения ",
          },
        },
  });
    $('#registration-form__checkbox').on('click',function(){
      if($(this).prop("checked") == true){
                $('.reg-button').prop('disabled', false);
            }
            else if($(this).prop("checked") == false){
                $('.reg-button').prop('disabled', true);
            }
    })
    $('#contacts-form__checkbox').on('click',function(){
      if($(this).prop("checked") == true){
                $('.contacts-form__btn').prop('disabled', false);
            }
            else if($(this).prop("checked") == false){
                $('.contacts-form__btn').prop('disabled', true);
            }
    })
    $(".tabs-head__item").on("click", function () {
        $(this)
            .addClass("active")
            .siblings()
            .removeClass("active")
            .closest(".tabs")
            .find(".tabs-content__block")
            .removeClass("active")
            .eq($(this).index())
            .addClass("active");
    });
})