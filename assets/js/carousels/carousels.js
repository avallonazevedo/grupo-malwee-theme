import Swiper, { Navigation, Pagination } from "swiper";
import 'swiper/swiper.min.css';

Swiper.use([Navigation, Pagination]);

export function createHereHasMalweeCarousel() {
    return new Swiper('.business-example-carousel', {
        slidesPerView: 1,
        navigation: {
            prevEl: '.business-example-carousel-prev',
            nextEl: '.business-example-carousel-next',
        }
    });
}

export function createOurValuesCarousel() {
    return new Swiper('.carousel-our-values', {
        slidesPerView: 1,
        navigation: {
            prevEl: '.our-values-carousel-prev',
            nextEl: '.our-values-carousel-next',
        }
    });
}

export function createTimelineCarousel() {
    return new Swiper('.timeline-carousel', {
        slidesPerView: 1,
        navigation: {
            prevEl: '.timeline-carousel-prev',
            nextEl: '.timeline-carousel-next',
        }
    });
}

export function createWhereDoWeProduceCarousel() {
    return new Swiper('.carousel-where-do-we-produce', {
        slidesPerView: 1,
        navigation: {
            prevEl: '.where-do-we-produce-carousel-prev',
            nextEl: '.where-do-we-produce-carousel-next',
        }
    });
}


export function createPrizesCarousel() {
    return new Swiper('.our-prizes-carousel', {
        slidesPerView: 1,
        navigation: {
        prevEl: '.our-prizes-carousel-prev',
            nextEl: '.our-prizes-carousel-next',
    }
});
}

export function createPeopleCarousel() {
    return new Swiper('.people-carousel', {
        slidesPerView: 1,
        pagination: {
            el: '.people-carousel-bullets',
            clickable: true
        },
        navigation: {
            prevEl: '.people-carousel-prev',
            nextEl: '.people-carousel-next',
        }
    });
}
