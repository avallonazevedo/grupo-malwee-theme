import Swiper, { Navigation } from "swiper";
import 'swiper/swiper.min.css';

Swiper.use([Navigation]);

export function createHereHasMalweeCarousel() {
    return new Swiper('.business-example-carousel', {
        slidesPerView: 1,
        navigation: {
            prevEl: '.business-example-carousel-prev',
            nextEl: '.business-example-carousel-next',
        }
    });
}

