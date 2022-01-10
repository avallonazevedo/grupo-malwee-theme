// Main CSS
import './../scss/grupo-malwee-styles.scss';
import PureCounter from '@srexi/purecounterjs';
import { mainSlider } from './constants';
import {mainCarouselSlider} from "./carousels/main-carousel";
import {createParallax} from "./animations/parallax";
import {runAos} from "./animations/run-aos";

// eslint-disable-next-line require-jsdoc
const runApplication = () => {
  runAos();
  mainCarouselSlider(mainSlider);
  createParallax();
};

document.addEventListener('DOMContentLoaded', runApplication);
 
