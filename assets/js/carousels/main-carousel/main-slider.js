import EmblaCarousel from "embla-carousel";
import {autoplay, generateMainSliderDots, selectCurrentDotMainSlide, setSliderCount} from "./components";
import {autoplaySwitch, mainSliderCount, mainSliderDots} from "../../constants";
import AOS from "aos";

export const mainCarouselSlider = (element) => {
    // eslint-disable-next-line new-cap
    const embla = EmblaCarousel(element);
    generateMainSliderDots(mainSliderDots, embla);
    const autoplayPlayer = autoplay(embla, 5000, autoplaySwitch);
    const updateCountSlider = () => setSliderCount(mainSliderCount, embla);

    embla.on('init', () => {
        const { play } = autoplayPlayer;
        play();
        updateCountSlider();
    });

    const dots = mainSliderDots.querySelectorAll('button');
    embla.on('select', () => {
        selectCurrentDotMainSlide(dots, embla);
        updateCountSlider();
        setTimeout(() => {
            AOS.refresh();
        }, 500);
    });
};
