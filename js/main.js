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

const forms = document.querySelectorAll('form'); // Собираем формы
forms.forEach((form) => {
    const validation = new JustValidate(form, {
        errorFieldCssClass: 'is-invalid',
    });
    validation
        .addField('[name=username]', [
            {
            rule: 'required',
            errorMessage: 'Укажите имя',
            },
            {
            rule: 'maxLength',
            value: 50,
            errorMessage: 'Максимально 50 символов',
            },
        ])
        .addField('[name=userphone]', [
            {
            rule: 'required',
            errorMessage: 'Укажите телефон',
            },
        ])
        .onSuccess((event) => {
            const thisForm = event.target;
            const formData = new FormData(thisForm);
            const ajaxSend = (formData) => {
                fetch(thisForm.getAttribute('action'), {   //fetch(url, {options})
                    method: thisForm.getAttribute('method'),
                    body: formData,
                }).then  (response => {
                    if(response.ok){
                        thisForm.reset();
                        alert('Форма отправлена!')
                    } else{
                        alert('Ошибка. Текст ошибки'.response.statusText);
                    }
                });
            };
            ajaxSend(formData);
        });
});

const prefixNumber = (str) => {   // Создаем префикс +7
    if (str === "7") {  // если вводят семерку, добавляем ей скобку 
        return "7 (";
    }
    return "7 (";     // в других случаях просто 7 (/
}; 
// Ловим события ввода в любом поле 
document.addEventListener("input", (e) => {
    if (e.target.classList.contains("phone-mask")) {  // проверяем, что поле имеет класс phone-mask 
        const input = e.target;  // поле с телефоном помещаем в переменную input 
        const value = input.value.replace(/\D+/g, "");  // вставляем плюс в начале номера 
        const numberLength = 11;  // длина номера 11 символов 
    
        // Создаем переменную, куда будем записывать номер 
        let result;
        // Если пользователь ввел 8... 
        if (input.value.includes("+8") || input.value[0] === "8") {
        //Стираем восьмерку 
            result = "";
        } else {
        // Оставляем плюсик в поле */
            result = "+";
        }
        // Запускаем цикл, где переберем каждую цифру от 0 до 11 
        for (let i = 0; i < value.length && i < numberLength; i++) {
            switch (i) {
                case 0:
                    result += prefixNumber(value[i]);  // в самом начале ставим префикс +7 
                    continue;
                case 4:
                    result += ") "; // добавляем после "+7 (" круглую скобку ")"
                    break;
                case 7:
                    result += "-";  // дефиc
                    break;
                case 9:
                    result += "-";  // дефис  
                    break;
                default:
                    break;
                }
            // Hа каждом шаге цикла добавляем новую цифру к номеру 
            result += value[i];
            }
            input.value = result;
        }
    });