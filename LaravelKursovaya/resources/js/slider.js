import {Swiper, Navigation, Pagination} from 'swiper';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

Swiper.use([Navigation, Pagination]);

const swiper = new Swiper(".hero__swiper", {
    direction: 'horizontal',
    loop: false,
    slidesPerView: 1,

    breakpoints: {
        1200: {
            slidesPerView: 2,
        },
        1920: {
            slidesPerView: 3,
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: true,
    },
});