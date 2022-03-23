// Main CSS
import './../scss/grupo-malwee-styles.scss';
import PureCounter from '@srexi/purecounterjs';
import { mainSlider } from './constants';
import {mainCarouselSlider} from "./carousels/main-carousel";
import {createParallax} from "./animations/parallax";
import {runAos} from "./animations/run-aos";
import {
  createHereHasMalweeCarousel,
  createOurValuesCarousel,
  createTimelineCarousel,
  createWhereDoWeProduceCarousel,
  createPrizesCarousel,
    createPeopleCarousel
} from "./carousels/carousels";
import { isHome } from "./constants/constants";
import {createMobileMenu} from "./animations/mobile-menu";

// eslint-disable-next-line require-jsdoc
const runApplication = () => {
  runAos();
  if(isHome) mainCarouselSlider(mainSlider);
  createParallax();
  createHereHasMalweeCarousel();
  createOurValuesCarousel();
  createTimelineCarousel();
  createWhereDoWeProduceCarousel();
  createPrizesCarousel();
  createPeopleCarousel();
  createMobileMenu();
};

document.addEventListener('DOMContentLoaded', runApplication);

