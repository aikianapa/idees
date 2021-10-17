function checkCookiesAccept() {
    const cookieBlock = document.querySelector('.cookies-block');

    if (!localStorage.getItem('isCookiesAccepted')) {
        const acceptButton = cookieBlock.querySelector('.cookies-block__accept-button');

        cookieBlock.classList.add('cookies-block--active');

        acceptButton.addEventListener('click', (evt) => {
            evt.preventDefault();

            cookieBlock.classList.remove('cookies-block--active');
            localStorage.setItem('isCookiesAccepted', true);

            setTimeout(() => {
                cookieBlock.remove();
            }, 2000);
        });

    } else {
        cookieBlock.remove();
    }
}

function mailingSubscribe() {
    const mailingBlock = document.querySelector('.mailing-block');

    if (mailingBlock) {
        if (localStorage.getItem('isCookiesAccepted') && !localStorage.getItem('isSubscribeCanceled') && !localStorage.getItem('isSubscribed')) {
            const mailingForm = mailingBlock.querySelector('.mailing-block__form');
            const cancelButton = mailingBlock.querySelector('.mailing-block__close-button');

            setTimeout(() => {

                mailingBlock.classList.add('mailing-block--active');

                mailingForm.addEventListener('submit', () => {
                    mailingBlock.classList.remove('mailing-block--active');
                    localStorage.setItem('isSubscribed', true);

                    setTimeout(() => {
                        mailingBlock.remove();
                    }, 2000);
                });

                cancelButton.addEventListener('click', () => {
                    mailingBlock.classList.remove('mailing-block--active');
                    localStorage.setItem('isSubscribeCanceled', true);

                    setTimeout(() => {
                        mailingBlock.remove();
                    }, 2000);
                });
            }, 30000);

        } else {
            mailingBlock.remove();
        }
    }
}

function setFormValidation() {
    const form = document.querySelector('form');

    if (form) {
        const inputs = form.querySelectorAll('input[required]');
        const button = form.querySelector('button[type="submit"]');
        const fileInput = form.querySelector('input[type="file"]');

        button.addEventListener('click', () => {
            inputs.forEach((elem) => {
                if (!elem.value) {
                    elem.classList.add('form__text-field--warning');
                }
                if (elem.value) {
                    elem.classList.remove('form__text-field--warning');
                }
            });
        });

        fileInput.addEventListener('change', function() {
            if (this.value) {
                this.classList.add('form__input-file--attached');
            } else {
                this.classList.remove('form__input-file--attached');
            }
        });
    }

}

function setModal(allModalsClass, modalClass, buttonOpenClass, buttonCloseClass) {
    const body = document.querySelector('body');
    const modal = document.querySelector(modalClass);
    const allModals = document.querySelectorAll(allModalsClass);
    const modalOpenButtons = document.querySelectorAll(buttonOpenClass);
    const modalCloseButtons = document.querySelectorAll(buttonCloseClass);

    modalOpenButtons.forEach((openButton) => {
        openButton.addEventListener('click', (evt) => {
            evt.preventDefault();

            allModals.forEach((modalElem) => {
                modalElem.classList.remove('modal-open');
                body.classList.remove('has-modal');
            });

            modal.classList.add('modal-open');
            body.classList.add('has-modal');
        });
    });

    modalCloseButtons.forEach((closeButton) => {
        closeButton.addEventListener('click', (evt) => {
            evt.preventDefault();

            modal.classList.remove('modal-open');
            body.classList.remove('has-modal');
        });
    });
}

function setProjectsList() {
    const projects = document.querySelector('.projects');

    if (projects) {
        const projectsList = projects.querySelector('.cases-section__list');
        const toogleBlocks = projects.querySelector('.js-toogle-blocks');
        const toogleList = projects.querySelector('.js-toogle-lines');

        toogleBlocks.classList.add('projects__toogle-button--active');
        projectsList.classList.add('cases-section__list--blocks');

        toogleBlocks.addEventListener('click', (evt) => {
            evt.preventDefault();
            toogleBlocks.classList.add('projects__toogle-button--active');
            toogleList.classList.remove('projects__toogle-button--active');
            projectsList.classList.add('cases-section__list--blocks');
        });

        toogleList.addEventListener('click', (evt) => {
            evt.preventDefault();
            toogleBlocks.classList.remove('projects__toogle-button--active');
            toogleList.classList.add('projects__toogle-button--active');
            projectsList.classList.remove('cases-section__list--blocks');
        });
    }
}

function setScrollTop() {
    const scrollTopButton = document.querySelector('.up-button');

    if (scrollTopButton) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 800) {
                scrollTopButton.classList.add('up-button--active');
            } else {
                scrollTopButton.classList.remove('up-button--active');
            }
        });

        scrollTopButton.addEventListener('click', (event) => {
            event.preventDefault();
            window.scrollTo(0, 0);
        });
    }
}

function setAnimation() {
    const animationElem = document.querySelector('.main-section__scene-img');
    const animationTarget = document.querySelector('.animation-target');

    if (animationElem && animationTarget) {

        animationTarget.x = animationTarget.offsetLeft + animationTarget.clientWidth / 2 - animationElem.clientWidth / 2;
        animationTarget.y = animationTarget.offsetTop + animationTarget.clientHeight / 2 - animationElem.clientHeight / 2;

        setElemPosition(animationElem, animationTarget.x, animationTarget.y);

        window.addEventListener('resize', () => {
            animationTarget.x = animationTarget.offsetLeft + animationTarget.clientWidth / 2 - animationElem.clientWidth / 2;
            animationTarget.y = animationTarget.offsetTop + animationTarget.clientHeight / 2 - animationElem.clientHeight / 2;

            setElemPosition(animationElem, animationTarget.x, animationTarget.y);
        });
    }

    function setElemPosition(elem, x, y) {
        elem.style.setProperty('--position-x', `${x}px`);
        elem.style.setProperty('--position-y', `${y}px`);
    }
}

function setPopupImages() {
    const body = document.querySelector('body');
    const allImages = document.querySelectorAll('.popup-image');
    const mediaQuery = window.matchMedia('(min-width: 1200px)');

    function initPopupImages() {
        allImages.forEach((elem) => {
            elem.onclick = function() {
                const image = this;
                image.classList.add('popup__image');
                image.onclick = null;

                const popupDrop = document.createElement('div');
                popupDrop.classList.add('popup');
                popupDrop.onclick = () => {
                    popupDrop.remove();
                };

                const button = document.createElement('button');
                button.classList.add('popup__button');
                button.setAttribute('type', 'button');
                button.onclick = (event) => {
                    event.preventDefault();
                    popupDrop.remove();
                };

                body.append(popupDrop);
                popupDrop.append(image);
                popupDrop.append(button);
            };
        });
    }

    function removePopupImages() {
        allImages.forEach((elem) => {
            elem.onclick = null;
        });
    }

    if (allImages.length && mediaQuery.matches) {
        initPopupImages();
    }

    window.addEventListener('resize', () => {
        if (allImages.length && mediaQuery.matches) {
            initPopupImages();
        } else {
            removePopupImages();
        }
    });
}

function setCollapseElements(titleClass, collapseItemClass, buttonClass, containerClass) {
    const collapseTitles = document.querySelectorAll(titleClass);

    collapseTitles.forEach((elem) => {
        elem.collapseItem = elem.closest(collapseItemClass);
        elem.collapseButton = elem.collapseItem.querySelector(buttonClass);
        elem.collapseContainer = elem.collapseItem.querySelector(containerClass);

        elem.collapseContainer.classList.add('active');
        elem.collapseContainer.style.height = 'auto';
        elem.containerHeight = elem.collapseContainer.clientHeight + 'px';
        elem.collapseContainer.classList.remove('active');

        elem.collapseButton.setAttribute('aria-label', 'Развернуть');
        elem.collapseContainer.classList.remove('active');
        elem.collapseContainer.style.height = '0px';

        elem.onclick = function(evt) {
            evt.preventDefault();

            collapseTitles.forEach((elem) => {
                if (elem.contains(evt.target) && !elem.collapseContainer.classList.contains('active')) {
                    elem.collapseItem.classList.add('opened');
                    elem.collapseButton.setAttribute('aria-label', 'Свернуть');
                    elem.collapseContainer.classList.add('active');
                    elem.collapseContainer.style.height = elem.containerHeight;
                } else if (!elem.contains(evt.target) || elem.contains(evt.target) && elem.collapseContainer.classList.contains('active')) {
                    elem.collapseItem.classList.remove('opened');
                    elem.collapseButton.setAttribute('aria-label', 'Развернуть');
                    elem.collapseContainer.style.height = '0px';
                    setTimeout(() => {
                        elem.collapseContainer.classList.remove('active');
                    }, 200);
                }
            });
        };
    });
}

function setVideo() {
    const VIDEO = document.querySelector('.js-video');

    if (VIDEO) {
        const PLAY = document.querySelector('.js-play');
        const PAUSE = document.querySelector('.js-pause');

        PLAY.addEventListener('click', () => {
            VIDEO.play();
            PLAY.classList.toggle('video-section__button--active');
            PAUSE.classList.toggle('video-section__button--active');
            VIDEO.classList.add('video-section__video--playing');
        });

        PAUSE.addEventListener('click', () => {
            VIDEO.pause();
            PLAY.classList.toggle('video-section__button--active');
            PAUSE.classList.toggle('video-section__button--active');
            VIDEO.classList.remove('video-section__video--playing');
        });
    }

}

function setThemeButton() {
    const body = document.querySelector('body');
    const themeButtons = body.querySelectorAll('.js-theme');
    let isAnimationEnabled = true;

    themeButtons.forEach((themeButton) => {
        themeButton.addEventListener('click', (evt) => {
            evt.preventDefault();

            if (isAnimationEnabled) {
                isAnimationEnabled = false;

                themeButton.x = themeButton.offsetLeft + themeButton.clientWidth / 2;
                themeButton.y = themeButton.offsetTop + themeButton.clientHeight / 2;

                if (localStorage.getItem('darkTheme')) {
                    localStorage.removeItem('darkTheme');

                    const animationBlock = document.createElement('div');
                    animationBlock.classList.add('dark-light-animation');
                    setElemPosition(animationBlock, themeButton.x, themeButton.y);
                    body.append(animationBlock);
                    body.classList.add('light-button');

                    setTimeout(() => {
                        body.classList.add('light-typo');
                    }, 300);

                    setTimeout(() => {
                        body.classList.remove('dark');
                        body.classList.remove('light-typo');
                        body.classList.remove('light-button');

                    }, 1300);

                    setTimeout(() => {
                        animationBlock.remove();
                        isAnimationEnabled = true;
                    }, 1500);
                } else {
                    localStorage.setItem('darkTheme', true);

                    const animationBlock = document.createElement('div');
                    animationBlock.classList.add('light-dark-animation');
                    setElemPosition(animationBlock, themeButton.x, themeButton.y);
                    body.append(animationBlock);
                    body.classList.add('dark-button');


                    setTimeout(() => {
                        body.classList.add('dark-typo');
                    }, 300);

                    setTimeout(() => {
                        body.classList.add('dark');
                        body.classList.remove('dark-typo');
                        body.classList.remove('dark-button');
                    }, 1300);

                    setTimeout(() => {
                        animationBlock.remove();
                        isAnimationEnabled = true;
                    }, 1500);
                }
            }
        });
    });

    function setElemPosition(elem, x, y) {
        elem.style.setProperty('--position-x', `${x}px`);
        elem.style.setProperty('--position-y', `${y}px`);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    setModal('.modal', '.form-section', '.js-form-open', '.js-form-close');
    setModal('.modal', '.menu', '.js-menu-open', '.js-menu-close');

    checkCookiesAccept();
    mailingSubscribe();
    setFormValidation();
    setProjectsList();
    setScrollTop();
    setAnimation();
    setPopupImages();
    setCollapseElements('.collapse-item__title-wrapper', '.collapse-item', '.collapse-item__button', '.collapse-item__container');
    setVideo();
    setThemeButton();

    const scene = document.getElementById('scene');

    if (scene) {
        new Parallax(scene);
    }
});


$(document).ready(function() {
    $('.feedback-section__list').slick({
        infinite: true,
        centerMode: true,
        nextArrow: '.feedback__next-button'
    });
})