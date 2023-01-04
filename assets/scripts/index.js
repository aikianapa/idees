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

const formsPage = document.querySelectorAll('.form');
for (let index = 0; index < formsPage.length; index++) {
    setFormValidation(formsPage[index]);
}

const bLazy = new Blazy({
    breakpoints: [{
        width: 420 // Max-width
            ,
        src: 'data-src-small'
    }],
    success: function(element) {
        setTimeout(function() {
            let parent = element.parentNode;
            parent.className = parent.className.replace(/\bloading\b/, '');
        }, 200);
    }
});

function setFormValidation(f) {
    const inputs = f.querySelectorAll('input[required]');
    const button = f.querySelector('button[type="submit"]');
    const fileInput = f.querySelector('input[type="file"]');

    button.addEventListener('click', () => {
        inputs.forEach((elem) => {
            if (!elem.value) {
                elem.closest('.form__field-wrapper').classList.add('form__field-wrapper--warning');
                window.scrollBy({
                    top: -200,
                    left: 0,
                    behavior: 'smooth'
                });
            }
            if (elem.value && elem.classList.contains('form__field-wrapper--warning')) {
                elem.closest('.form__field-wrapper').classList.remove('form__field-wrapper--warning');
            }
        });
    });

    fileInput.addEventListener('change', function(e) {
        const fileWrapper = fileInput.parentElement.querySelector('.file-upload');
        const fileText = fileInput.parentElement.querySelector('.file-upload__info');
        fileText.innerHTML = e.target.files[0].name;
        if (this.value) {
            this.classList.add('form__input-file--attached');
            fileWrapper.classList.add('file-upload--attached');
        } else {
            this.classList.remove('form__input-file--attached');
            fileWrapper.classList.remove('file-upload--attached');
        }
    });
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
            if (window.scrollY > 1) {
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
                const body = document.querySelector('body')
                const imgDataSrc = image.getAttribute('data-src');
                const imgDataSrcSet = image.getAttribute('data-srcset');
                const imgSrc = image.getAttribute('src');
                const imgSrcSet = image.getAttribute('srcset');
                const popupDrop = document.createElement('div');
                popupDrop.classList.add('popup', 'popup--open');
                body.classList.add('lock');
                popupDrop.onclick = () => {
                    popupDrop.remove();
                    body.classList.remove('lock');
                };

                const button = document.createElement('button');
                button.classList.add('popup__button');
                button.innerHTML = '<svg class="popup__cross-icon" width="24" height="24" aria-hidden="true"><use xlink:href="/assets/img/sprite.svg#popup-cross"></use></svg>'
                button.setAttribute('type', 'button');
                button.onclick = (event) => {
                    event.preventDefault();
                    body.classList.remove('lock');
                    popupDrop.remove();
                };

                body.append(popupDrop);
                popupDrop.innerHTML = `<img alt="" width="928" height="600" data-src="${imgDataSrc}" 
                    data-srcset="${imgDataSrcSet}" src="${imgSrc}" srcset="${imgSrcSet}">`;
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

function setPopupFeedbackVideos() {
    const body = document.querySelector('body');
    const allVideos = document.querySelectorAll('.popup-video');

    function initPopupVideos() {
        allVideos.forEach((elem) => {
            elem.onclick = function(e) {
                e.preventDefault();
                const video = this;
                const videoLink = video.getAttribute('href');
                const realVideoLink = videoLink.replace('watch?v=', 'embed/');
                const popupDrop = document.createElement('div');
                popupDrop.classList.add('popup', 'popup__video');
                body.classList.add('lock');
                popupDrop.onclick = () => {
                    popupDrop.remove();
                    body.classList.remove('lock');
                };

                const button = document.createElement('button');
                button.classList.add('popup__button');
                button.innerHTML = '<svg class="popup__cross-icon" width="24" height="24" aria-hidden="true"><use xlink:href="/assets/img/sprite.svg#popup-cross"></use></svg>'
                button.setAttribute('type', 'button');
                button.onclick = (event) => {
                    event.preventDefault();
                    body.classList.remove('lock');
                    popupDrop.remove();
                };

                body.append(popupDrop);
                popupDrop.innerHTML = `<div class="feedback__popup-content">
                    <iframe class="feedback__video-iframe" src="${realVideoLink}?autoplay=1&showinfo=0&controls=1" 
                    frameborder="0" allowfullscreen></iframe>
                </div>`;
                popupDrop.append(button);
            };
        });
    }

    function removePopupVideos() {
        allVideos.forEach((elem) => {
            elem.onclick = null;
        });
    }

    if (allVideos.length) {
        initPopupVideos();
    }

    window.addEventListener('resize', () => {
        if (allVideos.length) {
            initPopupVideos();
        } else {
            removePopupVideos();
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
                    let animationBlock = '';

                    if (themeButton.classList.contains('js-theme--menu')) {
                        animationBlock = document.createElement('div');
                        document.querySelector('.modal-open').appendChild(animationBlock);
                        animationBlock.classList.add('dark-light-animation');
                        animationBlock.classList.add('dark-light-animation--menu');
                    } else {
                        animationBlock = document.createElement('div');
                        animationBlock.classList.add('dark-light-animation');
                        body.append(animationBlock);
                    }
                    setElemPosition(animationBlock, themeButton.x, themeButton.y);
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
                    let animationBlock = '';

                    if (themeButton.classList.contains('js-theme--menu')) {
                        animationBlock = document.createElement('div');
                        document.querySelector('.modal-open').appendChild(animationBlock);
                        animationBlock.classList.add('light-dark-animation');
                        animationBlock.classList.add('light-dark-animation--menu');
                    } else {
                        animationBlock = document.createElement('div');
                        animationBlock.classList.add('light-dark-animation');
                        body.append(animationBlock);
                    }

                    setElemPosition(animationBlock, themeButton.x, themeButton.y);
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

new Swiper('.brand__slider', {
    slidesPerGroup: 1,
    loop: true,
    navigation: {
        nextEl: '.brand__slider-button.js-slider-button--next',
        prevEl: '.brand__slider-button.js-slider-button--prev'
    },
    speed: 1200,
    parallax: true,
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 30
        },
        860: {
            spaceBetween: 40,
            slidesPerView: 4,
        }
    },
});

new Swiper('.feedback-section__list', {
    slidesPerGroup: 1,
    loop: true,
    navigation: {
        nextEl: '.js-feedback-slider-button--next'
    },
    speed: 1200,
    parallax: true,
    autoHeight: true,
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 30
        },
        860: {
            spaceBetween: 170,
            slidesPerView: 1.25,
        }
    },
});

new Swiper('.project__similar-list', {
    slidesPerGroup: 1,
    navigation: {
        nextEl: '.js-project-slider-button--next',
        prevEl: '.js-project-slider-button--prev'
    },
    speed: 1200,
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 40
        }
    },
});

new Swiper('.article-page__similar-list', {
    slidesPerGroup: 1,
    navigation: {
        nextEl: '.js-article-slider-button--next',
        prevEl: '.js-article-slider-button--prev'
    },
    speed: 1200,
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        800: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 40
        }
    },
});

function getActiveTab() {
    const specialTab = document.querySelector('.special__tab-content')
    if (specialTab) {
        specialTab.classList.add('tab-content-active');
    }
}

function setPopupSuccess() {
    const body = document.querySelector('body');
    const popupDrop = document.createElement('div');
    const popups = document.querySelector('.popups');
    popups.classList.add('popups--hide');
    const popup = document.querySelector('.popup');
    popupDrop.classList.add('popup', 'form__popup', 'popup--success');
    body.classList.add('lock');

    body.append(popupDrop);
    popupDrop.innerHTML = `
        <div class="popup__overlay"></div>
        <div class="form__popup-content popup-inner">
        <div class="krest form__popup-close"> </div>
        <div class="popup__success">
                    <div class="sub-title popup__title">
                       Отправлено!
                        <span class="popup__title-icon">
                            <img src="/assets/img/ic-form-success.png" alt="">
                        </span>
                    </div>
                    <p>
                        Ваша заявка успешно отправлена нашим менеджерам.
                        В ближайшее время мы свяжемся с вами для согласования всех нюансов вашего проекта.
                    </p>
                    <p class="popup-inner__p-small">
                        На почту которую Вы указали при заполнении заявки было отправлено письмо с копией
                        заполненной вами информации.
                    </p>
                    <div class="sub-title-inner">Спасибо за обращение!</div>
                </div>
    </div>`;

    const close = document.querySelector('.form__popup-close');
    close.onclick = (event) => {
        event.preventDefault();
        body.classList.remove('lock');
        popups.classList.remove('popups--hide');
        popupDrop.classList.add('popup--success-close');
        setTimeout(async function() {
            popupDrop.remove();
        }, 3000);
    };

    setTimeout(async function() {
        body.classList.remove('lock');
        popupDrop.classList.add('popup--success-close');
        popup.style.display = 'none';
        setTimeout(async function() {
            popupDrop.remove();
        }, 3000);
        popups.classList.remove('popups--hide');
        $('#soverlay2').remove();
        body.classList.remove('lock');
    }, 3000);
}

/* viewport width */
// function viewport() {
//     var e = window,
//         a = 'inner';
//     if (!('innerWidth' in window)) {
//         a = 'client';
//         e = document.documentElement || document.body;
//     }
//     return {
//         width: e[a + 'Width'],
//         height: e[a + 'Height']
//     }
// };
/* viewport width */

function serialize(data) {
    let obj = {};

    for (let [key, value] of data) {
        if (obj[key] !== undefined) {
            if (!Array.isArray(obj[key])) {
                obj[key] = [obj[key]];
            }
            obj[key].push(value);
        } else {
            obj[key] = value;
        }
    }
    return obj;
}




$(document).ready(function() {
    setModal('.modal', '.form-section', '.js-form-open', '.js-form-close');
    setModal('.modal', '.menu', '.js-menu-open', '.js-menu-close');

    checkCookiesAccept();
    mailingSubscribe();
    setProjectsList();
    setScrollTop();
    setAnimation();
    setPopupImages();
    setPopupFeedbackVideos();
    setCollapseElements('.collapse-item__title-wrapper', '.collapse-item', '.collapse-item__button', '.collapse-item__container');
    setVideo();
    setThemeButton();
    getActiveTab();

    const scene = document.getElementById('scene');

    if (scene) {
        new Parallax(scene);
    }

    $('form').submit(function(ev) {
        if ($(this).attr('action') == 'quotes') {
            let error = false;
            ev.stopPropagation();
            let form = this;
            let data = new FormData(form);
            data.pathname = document.location.pathname;
            data = serialize(data);

            let attaches = $(form).find('input[name][type=file]');
            let reader = new FileReader();
            $.each(attaches, function() {
                let file = $(this)[0].files[0];
                if (file) {
                    let that = this;
                    reader.readAsDataURL(file);
                    reader.onload = function() {
                        data[that.name] = reader.result.toString(); //base64encoded string 
                    };
                }
            });
            setTimeout(function() {
                console.log(data);
                data = JSON.stringify(data)

                $.ajax({
                    url: '/form/quotes/submit',
                    type: 'POST',
                    data: data,
                    contentType: 'application/json',
                    // processData: false,
                    success: function(data) {
                        console.log('----------------------- /form/quotes/submit -> success ----------------');
                        setPopupSuccess();
                        $(form)[0].reset();
                        ym(17921479, 'reachGoal', 'send_form');
                    },
                    error: function(data) {
                        if (error) {
                            wbapp.toast('Ошибка', 'Сообщение не отправлено', { bgcolor: 'warning' });
                            return false;
                        }
                    }
                });
            }, 50)

            return false;
        }
    });

    var lastScrollTop = 0;
    $(window).scroll(function(event) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop) {
            $('.header--menu').addClass('bottom-scroll')
            $('.up-button').removeClass('full-btn')
        } else {
            $('.header--menu').removeClass('bottom-scroll')
            $('.up-button').addClass('full-btn')
        }
        lastScrollTop = st;
    });
    $('.modal__wrap').scroll(function(event) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop) {
            $('.header--form').addClass('bottom-scroll')
        } else {
            $('.header--form').removeClass('bottom-scroll')
        }
        lastScrollTop = st;
    });

    $('ul.special__tabs').on('click', 'li:not(.special__tabs-item-active)', function() {
        $(this)
            .addClass('special__tabs-item-active').siblings().removeClass('special__tabs-item-active')
            .closest('body').find('div.special__tab-content').removeClass('tab-content-active').eq($(this).index()).addClass('tab-content-active');
    });

    $('.tabloid_navigation a').click(function(e) {
        e.preventDefault();
        if ($(this).parent('li.special__tabs-item').hasClass('special__tabs-item-active')) {
            return true;
        }
        window.location.hash = e.target.hash;
        $('li.special__tabs-item')
            .addClass('special__tabs-item-active').siblings().removeClass('special__tabs-item-active')
            .closest('body').find('div.special__tab-content').removeClass('tab-content-active').eq($(this).index()).addClass('tab-content-active');
        $($(this).attr("href")).fadeIn(200);
    });

    $(window).scroll(function() {
        if (!$(window).scrollTop() == 0) {
            $('.main-section__button.js-form-open.mobile-button').addClass('mobile-anim')
            $('.main-section__button.js-form-open.pc-button').addClass('mobile-hidden')
        } else {
            $('.main-section__button.js-form-open.mobile-button').removeClass('mobile-anim')
            $('.main-section__button.js-form-open.pc-button').removeClass('mobile-hidden')
        }
    });
    const siteMapTitle = $(".map__link:contains('Глоссарий')").addClass('new-title')
    const siteMapTitleParent = $(".map__link:contains('Глоссарий')").parents('.map__list').addClass('new-elem')

    $("a[href*='mailto:']").attr("onclick", "ym(17921479,'reachGoal','send_mail');")
    $("a[href*='tel:']").attr("onclick", "ym(17921479,'reachGoal','click_phon');")
    $("[class*='socials-item'] a").attr("onclick", "ym(17921479,'reachGoal','click_msngr');")

    // var scroller
    // var handler = function () {

    //     var height_footer = $('footer').height();
    //     var height_header = $('header').height();
    //     // $('.content').css({ 'padding-bottom': height_footer + 40, 'padding-top': height_header + 40 });


    //     var viewport_wid = viewport().width;
    //     var viewport_height = viewport().height;
    //     if (viewport_wid <= 1279) {
    //         staticWidth = 35
    //     }
    //     else {
    //         staticWidth = 195
    //     }
    //     if (viewport_wid >= 1024) {
    //         scroller = new SmoothScroll({
    //             target: document.querySelector("#scroll-container"),
    //             scrollEase: 0.05,
    //         });
    //     }
    // }
    // $(window).resize(handler);
    // handler();

    // var viewport_wid = viewport().width;
    // if (viewport_wid >= 1024) {
    //     $('button.header__button-link--project, button.header__button-link--menu.js-menu-open, .main-section__button.js-form-open').on('click', function () {
    //         const bodyModal = $('body').hasClass('has-modal')
    //         if (bodyModal) {
    //             $('#viewport-scroll').css('height', 'auto');
    //             $('body > header').css('display', 'none')
    //             $('.viewport').css('position', 'static')
    //             $('.scroll-container').css({
    //                 'position': 'static',
    //                 'transform': 'none',
    //                 'height': '100%'
    //             })
    //         }
    //     });
    //     $('button.header__button-link--menu-close, button.header__button-link--menu.js-form-close').on('click', function () {
    //         const windowElem = $('#viewport-scroll');
    //         const clientHeight = windowElem.attr('data-height');
    //         $('#viewport-scroll').css('height', `${clientHeight}`);
    //         $('body > header').css('display', 'block');
    //         $('.viewport').css('position', 'fixed')
    //         $('.scroll-container').css({
    //             'position': 'absolute',
    //             'transform': 'preserve-3d',
    //             'height': 'auto'
    //         })
    //     });
    // } else {
    //     $('button.header__button-link--project, button.header__button-link--menu.js-menu-open, .main-section__button.js-form-open').on('click', function () {
    //         $('body > header').css('display', 'none')
    //     });
    //     $('button.header__button-link--menu-close, button.header__button-link--menu.js-form-close').on('click', function () {
    //         $('body > header').css('display', 'block');
    //     })
    // }
    // $('ul[data-pagination]').bind("DOMSubtreeModified", function () {
    //     handler();
    // });
    // $('ul.glosario__item-list').bind("DOMSubtreeModified", function () {
    //     handler();
    // });
});