const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logo = document.querySelector('.logo');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');
const isFront = document.body.classList.contains('front-page')

const lightModeOn = (event) => {
    navbar.classList.add('navbar-light');
};

const lightModeOff = (event) => {
    navbar.classList.remove('navbar-light');
};

const changeNavHeight = (height) => {
    navbar.style.height = height;
}

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
    this.scrollY > 1 ? changeNavHeight('4.5rem') : changeNavHeight('5.875rem'); // if?  else:
    if (isFront) {
        this.scrollY > 1 ? lightModeOn() : lightModeOff();
    }
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

const modal = document.querySelector('.modal');
const modalDialog = document.querySelector('.modal-dialog');

document.addEventListener('click', (event) => {
    if (
        event.target.dataset.toggle === 'modal' || 
        event.target.parentNode.dataset.toggle === 'modal' ||
        (!event.composedPath().includes(modalDialog) && 
        modal.classList.contains('is-open'))
    ) {
        event.preventDefault();
        modal.classList.toggle('is-open');
    }
});
document.addEventListener('keyup', (event) => {
    if (event.key === 'Escape' && modal.classList.contains('is-open')) {
        modal.classList.toggle('is-open');
    }
});