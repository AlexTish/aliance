document.addEventListener('DOMContentLoaded', function() {
    const aboutSlider = document.querySelector('.about-features');
    if (!aboutSlider) {
        console.warn('⚠️ Слайдер .about-features не найден');
        return;
    }

    console.log('✅ Инициализация слайдера "О нас"');


    const swiperAboutFeatures = new Swiper('.about-features', {   // 39 https://swiperjs.com/swiper-api#initialize-swiper и https://swiperjs.com/swiper-api#navigation
        speed: 400,
        // autoHeight: true,
        // loop: true,   
        slidesPerView: 5, 
        navigation: {
            nextEl:'.about-button-next',
            prevEl: '.about-button-prev',
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

const swiperResearch = new Swiper('.research-slider', {
    speed: 400,
    slidesPerView: 2.2,    
    spaceBetween: 30,
    centeredSlides: true,   // Центрируем активный слайд
    loop: false,            // Чтобы не было бесконечного скролла (по желанию)
    navigation: {
        nextEl: '.research-button-next',
        prevEl: '.research-button-prev',
    },   
    breakpoints: {
        640: {
            slidesPerView: 1.1,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 1.5,
            spaceBetween: 25
        },
        1024: {
            slidesPerView: 2.2,
            spaceBetween: 30
        },
        1200: {
            slidesPerView: 2.2,
            spaceBetween: 30
        },
    },
});

