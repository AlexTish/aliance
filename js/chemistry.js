document.addEventListener('DOMContentLoaded', function() {
    const aboutSlider = document.querySelector('.chemistry-features');
    if (!aboutSlider) {
        console.warn('⚠️ Слайдер .chemistry-features не найден');
        return;
    }

    console.log('✅ Инициализация слайдера "О нас"');

    
    const swiperChemistryFeatures = new Swiper('.chemistry-features', {   // 39 https://swiperjs.com/swiper-api#initialize-swiper и https://swiperjs.com/swiper-api#navigation
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

const swiperResearchChemisrty = new Swiper('.research-chemisrty-slider', {
    speed: 400,
    loop: false,
    centeredSlides: false,             
    navigation: {
        nextEl: '.chemisrty-button-next',
        prevEl: '.chemisrty-button-prev',
    },  
    slidesPerView: 2.6,
    spaceBetween: 30,
    breakpoints: {
        0: {
            slidesPerView: 1.1,
            spaceBetween: 16,
        },
        480: {
            slidesPerView: 1.2,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 1.3,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 1.6,
            spaceBetween: 25,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 2.4,
            spaceBetween: 30,
        },
        1600: {
            slidesPerView: 2.3,
            spaceBetween: 30,
        },
        1800: {
            slidesPerView: 2.5,
            spaceBetween: 30,
        },
    },
});
