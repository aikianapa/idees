<view>
    <footer class="footer">
        <div class="container">
            <div class="footer__top-section">
                <p class="footer__text">
                    Есть задача
                    <br> для обсуждения?
                    <br>

                    <button class="footer__link footer__link--form js-form-open">кнопка чтобы начать</button>
                </p>

                <a class="footer__link footer__link--contact" href="email:%7B%7B_var.email%7D%7D">{{_var.email}}</a>
                <a class="footer__link footer__link--contact"
                    href="tel:+%7B%7BwbDigitsOnly(%7B%7B_var.phone%7D%7D)%7D%7D">{{_var.phone}}</a>

                <ul class="footer__socials-list">
                    <li class="footer__socials-item">
                        <a class="footer__link footer__link--social" href="%7B%7B_var.telegram%7D%7D">Telegram</a>
                    </li>
                    <li class="footer__socials-item">
                        <a class="footer__link footer__link--social" href="%7B%7B_var.whatsapp%7D%7D">Whatsapp</a>
                    </li>

<!--                     <li class="footer__socials-item"> -->
<!--                         <a class="footer__link footer__link--social" href="%7B%7B_var.messenger%7D%7D">Messenger</a> -->
<!--                     </li> -->
                </ul>
            </div>

            <div class="footer__bottom-section">
                <div class="footer__bottom-section-wrapper">
                    <p class="footer__copy">{{copyright}} © {{year}} – {{date("Y")}}</p>

                    <a class="footer__link" href="http://yonger.ru/" target="_blank">
                        Построен на <span>
                            ёнгер
                            <svg viewBox="0 0 70 36">
                                <path d="M6.9739 30.8153H63.0244C65.5269 30.8152 75.5358 -3.68471 35.4998 2.81531C-16.1598 11.2025 0.894099 33.9766 26.9922 34.3153C104.062 35.3153 54.5169 -6.68469 23.489 9.31527" />
                            </svg>
                        </span>
                        
                    </a>
                </div>

                <div class="footer__bottom-section-wrapper">
                    <a class="footer__link footer__link--map" href="/map">Карта сайта</a>
                    <a class="footer__link" href="/user-agreement">Конфиденциальность</a>
                </div>
            </div>
        </div>
    </footer>
    <button class="up-button js-scroll-top" type="button">
        <svg class="up-button__icon" width="28" height="28" aria-hidden="true">
            <use xlink:href="/assets/img/sprite.svg#arrow-top"></use>
        </svg>
        <span class="up-button__text">Наверх</span>
    </button>
    <button class="button main-section__button js-form-open animation-target mobile-button" type="button">
      <span class="button__icon-wrapper">
        <svg class="button__icon" width="24" height="24" aria-hidden="true">
          <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
        </svg>
      </span>

      <span class="button__text">начать проект</span>
    </button>
    <div class="cookies-block">
        <div class="container cookies-block__container">
            <div class="cookies-block__wrapper">
                <svg class="cookies-block__icon" width="30" height="30" aria-hidden="true">
                    <use xlink:href="/assets/img/sprite.svg#cookies"></use>
                </svg>

                <span class="cookies-block__text">
                    Мы используем cookies. Оставаясь на сайте, вы соглашаетесь с
                    <a class="cookies-block__link" href="/personal-data" target="_blank">политикой конфиденциальности</a>.
                </span>
            </div>

            <button class="cookies-block__accept-button" type="button">я согласен</button>
        </div>
    </div>
    <div class="mailing-block">
        <div class="container mailing-block__container">
            <span class="mailing-block__text">
                Полезная рассылка два раза в неделю: во вторник и пятницу
            </span>

            <form class="mailing-block__form" action="https://echo.htmlacademy.ru/courses" method="post">
                <label class="visually-hidden" for="email-field">Email</label>
                <input class="mailing-block__input" id="email-field" type="email" name="email" placeholder="введите свой email" required
                    done="">

                <div class="mailing-block__buttons-wrapper">
                    <button class="mailing-block__accept-button" type="submit">Подписаться</button>

                    <button class="mailing-block__close-button button" type="button" aria-label="Не подписываться">
                        <svg class="button__icon button__icon--fill" width="24" height="24" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#menu-cross"></use>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <load> 
        <wb-snippet name="wbapp"></wb-snippet>
        <wb-scripts src="idees">
            [ "/engine/modules/yonger/common/blocks/assets/slick/slick.min.js"
            ,"/assets/scripts/libs/img-comparison-slider.js" ,"/assets/scripts/libs/parallax.js"
            , "/assets/scripts/libs/dynamic.js"
            ,"/assets/scripts/libs/swiper-bundle.min.js", "/assets/scripts/index.js" ]
        </wb-scripts>
        <wb-styles src="slick">
            [ "/engine/modules/yonger/common/blocks/assets/slick/slick.min.css"
            ,"/engine/modules/yonger/common/blocks/assets/slick/slick-theme.css"
            ]
        </wb-styles>
    </load>
</view>
<edit header="Подвал сайта">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Копирайт</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="copyright" placeholder="Копирайт">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Год начала</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="year" placeholder="Год">
        </div>
    </div>
</edit>