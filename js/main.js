const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logo = document.querySelector('.logo');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');

const lightModeOn = (event) => {
    navbar.classList.add('navbar-light');
    logo.style.display = 'block';
    logoLight.style.display = 'none';
};

const lightModeOff = (event) => {
    navbar.classList.remove('navbar-light');
    logo.style.display = 'none';
    logoLight.style.display = 'block';
};

const openMenu = (event) => {           //функция открытия меню
    menu.classList.add('is-open');    // вешает класс is-open
    mMenuToggle.classList.add('close-menu');
    document.body.style.overflow='hidden';  //запрет прокрутки сайта под меню
    lightModeOn();
};
const closeMenu = (event) => {           //функция закрытия меню
    menu.classList.remove('is-open');    // убирает класс is-open
    mMenuToggle.classList.remove('close-menu');
    document.body.style.overflow='';  //возвращает прокрутку сайта под меню
    lightModeOff();
};

window.addEventListener('scroll', () => {
    this.scrollY > 1 ? lightModeOn() : lightModeOff(); // if?  else:
});
mMenuToggle.addEventListener('click', (event) => {
    event.preventDefault();
    //menu.classList.toggle("is-open");
    menu.classList.contains('is-open') ? closeMenu() : openMenu();
});

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
