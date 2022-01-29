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
                        <a class="footer__link footer__link--social" href="%7B%7B_var.whatsapp%7D%7D">Whatsapp</a>
                    </li>
                    <li class="footer__socials-item">
                        <a class="footer__link footer__link--social" href="%7B%7B_var.telegram%7D%7D">Telegram</a>
                    </li>
                    <li class="footer__socials-item">
                        <a class="footer__link footer__link--social" href="%7B%7B_var.messenger%7D%7D">Messenger</a>
                    </li>
                </ul>
            </div>

            <div class="footer__bottom-section">
                <div class="footer__bottom-section-wrapper">
                    <p class="footer__copy">{{copyright}} © {{year}} – {{date("Y")}}</p>

                    <a class="footer__link" href="http://yonger.ru/" target="_blank">Built on Yonger</a>
                </div>

                <div class="footer__bottom-section-wrapper">
                    <a class="footer__link footer__link--map" href="/map">Карта сайта</a>
                    <a class="footer__link" href="/user-agreement">Конфиденциальность</a>
                </div>
            </div>
        </div>
    </footer><button class="up-button js-scroll-top" type="button">
        <svg class="up-button__icon" width="28" height="28" aria-hidden="true">
            <use xlink:href="/assets/img/sprite.svg#arrow-top"></use>
        </svg>
    </button>
    <load>
        <wb-snippet name="wbapp"></wb-snippet>
        <wb-scripts src="idees">
            [ "/engine/modules/yonger/common/blocks/assets/slick/slick.min.js"
            ,"/assets/scripts/libs/img-comparison-slider.js" ,"/assets/scripts/libs/parallax.js"
            ,"/assets/scripts/index.js" ]
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