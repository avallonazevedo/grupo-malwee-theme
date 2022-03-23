export function createMobileMenu() {

    const toggleMobileMenu = document.querySelector('#toggle-mobile-menu');
    const mobileMenu = document.querySelector('#mobile-menu');

    const menusWithSubMenus = mobileMenu.querySelectorAll('.menu-item-has-children a');

    toggleMobileMenu.addEventListener('click', () => {
        console.log('clicked')
        toggleMobileMenu.classList.toggle('opened');
        document.querySelector('body').classList.toggle('no-scroll');
        mobileMenu.classList.toggle('opened')
    })

    if(menusWithSubMenus.length) {
        menusWithSubMenus.forEach((item) => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                item.nextElementSibling.classList.toggle('opened')
            })
        })
    }

}
