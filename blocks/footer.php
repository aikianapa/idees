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

                <a class="footer__link footer__link--contact" href="email:{{_var.email}}">{{_var.email}}</a>
                <a class="footer__link footer__link--contact" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_var.phone}}</a>

                <ul class="footer__socials-list">
                    <li class="footer__socials-item">
                        <a class="footer__link footer__link--social" href="{{_var.whatsapp}}">Whatsapp</a>
                    </li>
                    <li class="footer__socials-item">
                        <a class="footer__link footer__link--social" href="{{_var.telegram}}">Telegram</a>
                    </li>
                    <li class="footer__socials-item">
                        <a class="footer__link footer__link--social" href="{{_var.messenger}}">Messenger</a>
                    </li>
                </ul>
            </div>

            <div class="footer__bottom-section">
                <div class="footer__bottom-section-wrapper">
                    <p class="footer__copy">Idees © 2012 – {{date("Y")}}</p>

                    <a class="footer__link" href="http://yonger.ru/" target="_blank">Built on Yonger</a>
                </div>

                <div class="footer__bottom-section-wrapper">
                    <a class="footer__link footer__link--map" href="/map">Карта сайта</a>
                    <a class="footer__link" href="/user-agreement">Конфиденциальность</a>
                </div>
            </div>
        </div>
    </footer>
    <wb-include wb-snippet="wbapp"></wb-include>
</view>

<edit header="Подвал сайта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>