document.addEventListener('DOMContentLoaded', function() {
    const aboutSlider = document.querySelector('.chemistry-features');
    if (!aboutSlider) {
        console.warn('⚠️ Слайдер .chemistry-features не найден');
        return;
    }

    console.log('✅ Инициализация слайдера "О нас"');


    const swiperAboutFeatures = new Swiper('.chemistry-features', {   // 39 https://swiperjs.com/swiper-api#initialize-swiper и https://swiperjs.com/swiper-api#navigation
        speed: 400,
        // autoHeight: true,
        // loop: true,   
        slidesPerView: 5, 
        navigation: {
            nextEl:'.chemistry-button-next',
            prevEl: '.chemistry-button-prev',
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
});