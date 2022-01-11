// Main CSS
import './../scss/grupo-malwee-styles.scss';
import PureCounter from '@srexi/purecounterjs';
import { mainSlider } from './constants';
import {mainCarouselSlider} from "./carousels/main-carousel";
import {createParallax} from "./animations/parallax";
import {runAos} from "./animations/run-aos";
import {createHereHasMalweeCarousel} from "./carousels/carousels";
import { isHome } from "./constants/constants";

// eslint-disable-next-line require-jsdoc
const runApplication = () => {
  runAos();
  if(isHome) mainCarouselSlider(mainSlider);
  createParallax();
  createHereHasMalweeCarousel();
};

document.addEventListener('DOMContentLoaded', runApplication);

