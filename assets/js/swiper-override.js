$( document ).ready(function() {
  var swiper9 = new Swiper('.swiper-carouse', {
    loop:true,
    slidesPerView: 1,
    spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-btn-next',
        prevEl: '.swiper-btn-prev',
      },
});

var swiper2 = new Swiper('.swiper-product-tabs2', {
    autoplay:{
        delay: 2000
    },
      navigation: {
        nextEl: '.swiper-btn-next',
        prevEl: '.swiper-btn-prev',
      },
      
      slidesPerView: 2,

      spaceBetween: 10,

      breakpoints: {
        640: {
          slidesPerView: 2.5,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2.5,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3.5,
          spaceBetween: 50,
        },
      }
});

var swiper3 = new Swiper('.swiper-product-tabs3', {
    autoplay:{
        delay: 2000
    },
      navigation: {
        nextEl: '.swiper-btn-next',
        prevEl: '.swiper-btn-prev',
      },
      
      slidesPerView: 2,

      spaceBetween: 10,

      breakpoints: {
        640: {
          slidesPerView: 2.5,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2.5,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3.5,
          spaceBetween: 50,
        },
      }
});

var swiper4 = new Swiper('.swiper-list_video', {
  loop:true,
  autoplay:{
      delay: 2000
  },
    navigation: {
      nextEl: '.swiper-btn-next',
      prevEl: '.swiper-btn-prev',
    },
    
    slidesPerView: 1,

    spaceBetween: 10,

});

var swiper5 = new Swiper('.swiper-blog', {
  autoplay:{
      delay: 2000
  },
    navigation: {
      nextEl: '.swiper-btn-next',
      prevEl: '.swiper-btn-prev',
    },
    
    slidesPerView: 2,
 
    spaceBetween: 10,

    breakpoints: {
      640: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    }

});


var swiper6 = new Swiper('.swiper-product-lienquan', {
  autoplay:{
      delay: 2000
  },
    navigation: {
      nextEl: '.swiper-btn-next',
      prevEl: '.swiper-btn-prev',
    },
    
    slidesPerView: 2,
 
    spaceBetween: 10,

    breakpoints: {
      640: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    }

});

var swiper7 = new Swiper('.swiper-customer', {
  autoplay:{
      delay: 2500
  },
    navigation: {
      nextEl: '.swiper-btn-next',
      prevEl: '.swiper-btn-prev',
    },
    
    slidesPerView: 1,
 
    spaceBetween: 10,

});


});

