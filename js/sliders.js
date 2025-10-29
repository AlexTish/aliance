const swiper = new Swiper('.features-slider', {   // 39 https://swiperjs.com/swiper-api#initialize-swiper и https://swiperjs.com/swiper-api#navigation
    speed: 400,
    // autoHeight: true,
    // loop: true,   
    slidesPerView: 5, 
    navigation: {
        nextEl:'.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            //centeredSlides: true,  //размещение слайдера по центру и видимость половины второго слайда
            //slidesOffsetBefore: -100, // смещение слайдера

        },
        576: {
            slidesPerView: 2,
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 3,
        },
        // when window width is >= 640px
        1024: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        },
    },
});
const swiperSteps = new Swiper('.swiper-steps', {
    speed: 400,
    autoHeight: true,
    slidesPerView: 4, 
    navigation: {
        nextEl: '.steps-button-next',
        prevEl: '.steps-button-prev',
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
        },
        576: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
    },
});

const swiperBlog = new Swiper('.blog-slider', {
    speed: 400,
    slidesPerView: 2, 
    spaceBetween: 30,
    navigation: {
        nextEl: '.blog-button-next',
        prevEl: '.blog-button-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 25
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 30
        }
    },
});
