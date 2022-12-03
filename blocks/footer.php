<view>

		<footer>

			<div class="gray-box2">

				<div class="container">


					<div class="footer-top">
						<div class="footer-top-left">
							<div class="footer-phone"> <a  href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{str_replace("-"," ",{{_var.phone}})}}</a> </div>
							<div class="footer-email"> <a href="mailto:{{_var.email}}">{{_var.email}}</a> </div>
							<div class="footer-soc"> 
                                <span wb-if="'{{_var.whatsapp}}'>''"> <a href="{{_var.whatsapp}}">Whatsapp</a> </span>
								<span wb-if="'{{_var.telegram}}'>''"> <a href="{{_var.telegram}}"> Telegram </a></span>
                                <span wb-if="'{{_var.vkontakte}}'>''"> <a href="{{_var.telegram}}"> ВКонтакте </a></span>
							</div>
						</div>
						<div> </div>
						<div class="footer-top-right">
							<div class="big-gray davayte"> давайте </div>
							<div class="big-gray sozdavat"> создавать </div>
							<button class="ybutton footer-button zayav-button"> Оставить заявку </button>
						</div>
					</div>

					<div class="footer-bottom">
						<div class="f1 ff"> {{copyright}} © {{year}} – {{date("Y")}} </div>
						<a class="f2 ff footer__link" href="http://yonger.ru/"> Построен на
							&nbsp;
							<span>
								ёнгер
								<svg viewBox="0 0 70 36">
									<path
										d="M6.9739 30.8153H63.0244C65.5269 30.8152 75.5358 -3.68471 35.4998 2.81531C-16.1598 11.2025 0.894099 33.9766 26.9922 34.3153C104.062 35.3153 54.5169 -6.68469 23.489 9.31527">
									</path>
								</svg>
							</span>
						</a>
						<a href="/map" class="f3 ff"> Карта сайта</a>
						<a href="/user-agreement" class="f4 ff"> Конфиденциальность</a>

					</div>

				</div> <!-- container -->

			</div> <!-- gray-box2 -->


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

        <wb-snippet name="wbapp"></wb-snippet>
        <wb-scripts src="idees">
            ["/assets/js/slick/slick.js",
            "/assets/scripts/libs/img-comparison-slider.js",
            "/assets/scripts/libs/parallax.js",
            "/assets/scripts/libs/dynamic.js",
            "/assets/scripts/libs/swiper-bundle.min.js",
            "/assets/scripts/index.js",
            "/assets/js/script.js"]
        </wb-scripts>
        <wb-styles src="slick">
            ["/assets/js/slick/slick.css" ,"/assets/js/slick/slick-theme.css" ]
        </wb-styles>
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