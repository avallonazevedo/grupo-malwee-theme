/**
 * Create dots button instance
 * @param index
 * @param emblaInstance
 * @return {HTMLButtonElement}
 */
const setupButtonSliderDots = (index, emblaInstance) => {
    const button = document.createElement('button');
    button.classList.add('main-slider-dot', `main-slider-dot-${index}`);
    if (index === 0) {
        button.classList.add('is-selected');
    }
    button.addEventListener('click', () => emblaInstance.scrollTo(index));
    return button;
};

/**
 * Dynamically generate dots
 * @param dotsContainer
 * @param emblaInstance
 */
export const generateMainSliderDots = (dotsContainer, emblaInstance) => {
    const slideList = emblaInstance.scrollSnapList();
    const button = (index) => setupButtonSliderDots(index, emblaInstance);
    const markup = slideList.map((_, index) => button(index));
    dotsContainer.append(...markup);
};

/**
 * Main slider autoplay
 * @param embla
 * @param interval
 * @return {{play: play, stop: stop}}
 */
export const autoplay = (embla, interval, switchButton) => {
    let timer = 0;
    let isStarted = true;
    const play = () => {
        stop();
        requestAnimationFrame(() => (timer = window.setTimeout(next, interval)));
    };

    const stop = () => {
        window.clearTimeout(timer);
        timer = 0;
    };

    const next = () => {
        if (embla.canScrollNext()) {
            embla.scrollNext();
        } else {
            embla.scrollTo(0);
        }
        play();
    };

    switchButton.addEventListener('click', () => {
        const playImage = `<img alt="Play Icon" src="${switchButton.getAttribute(
            'data-play-icon'
        )}" />`;
        const pauseImage = `<img alt="Pause Icon" src="${switchButton.getAttribute(
            'data-pause-icon'
        )}" />`;
        isStarted = !isStarted;

        if (isStarted) {
            switchButton.innerHTML = pauseImage;
            play();
        } else {
            switchButton.innerHTML = playImage;
            stop();
        }
    });

    return { play, stop };
};

/**
 * Select dot main slide
 * @param dots
 * @param emblaInstance
 */
export const selectCurrentDotMainSlide = (dots, emblaInstance) => {
    const previous = emblaInstance.previousScrollSnap();
    const selected = emblaInstance.selectedScrollSnap();
    dots[previous].classList.remove('is-selected');
    dots[selected].classList.add('is-selected');
};

export const setSliderCount = (countContainer, emblaInstance) => {
    const current = emblaInstance.selectedScrollSnap() + 1;
    const total = emblaInstance.slideNodes().length;
    const markup = `${current}/${total}`;
    countContainer.innerHTML = markup;
};
