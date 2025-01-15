document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.swiper-container', {
    preloadImages: false,
    lazy: true,
    watchSlidesVisibility: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  })

  new Swiper('.swiper-products', {
    preloadImages: false,
    lazy: true,
    watchSlidesVisibility: true,
    slidesPerView: 5,
    spaceBetween: 40,
    pagination: {
      el: '.swiper-pagination-products',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 5,
        spaceBetween: 40
      }
    }
  })
})
