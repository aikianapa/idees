<view>
<section class="form-section modal">
    <div class="modal__wrap">
        <header class="header header--form">
            <div class="header__container container">
                <div class="header--form__left">
                    <a class="header__logo-link" href="/">
                        <svg class="header__logo-link-icon" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-0.000738144 0.432616L-0.00073838 5.83802L20.2695 5.83802L20.2695 0.432617L-0.000738144 0.432616Z"/>
                            <path d="M24.2375 12.7019L20.4153 8.87971L6.0821 23.213L9.9043 27.0352L24.2375 12.7019Z" />
                            <path d="M27.0273 32.865H32.4327V12.5947H27.0273V32.865Z" />
                        </svg>
                        <svg class="header__logo-image" width="157" height="50" fill="none" viewbox="0 0 157 50">
                            <path
                                d="M22.14 15.27a10.67 10.67 0 0 0-9.4-5.13C5.42 10.14 0 16.18 0 23.64c0 7.47 5.41 13.52 12.75 13.52 4.23 0 7.43-2 9.39-5.14v4.5h4.89V10.78h-4.89v4.5Zm-8.6 17.12a8.66 8.66 0 0 1-8.58-8.74 8.67 8.67 0 0 1 8.58-8.74 8.67 8.67 0 0 1 8.6 8.74 8.66 8.66 0 0 1-8.6 8.74Z">
                            </path>
                            <path
                                d="M45.95 7.43A9.4 9.4 0 0 0 55.07 0h-4.7c-.66 2.17-2.2 3.48-4.42 3.48-2.23 0-3.77-1.3-4.44-3.48h-4.69a9.43 9.43 0 0 0 9.13 7.43Z">
                            </path>
                            <path d="M37.39 34.08V10.81h-4.96V36.5h8.66l13.42-23.27V36.5h4.95V10.8H50.8L37.4 34.08Z"></path>
                            <path
                                d="M87 15.24a10.68 10.68 0 0 0-9.38-5.1c-7.34 0-12.75 6-12.75 13.42S70.27 37 77.62 37c4.22 0 7.43-2 9.39-5.1v4.89c0 4.94-2.9 8.6-8.4 8.6-3.45 0-6.15-1.45-7.34-4.44h-5.35C67.43 46.58 72.65 50 78.61 50c7.96 0 13.28-5.81 13.28-13.22v-26H87v4.46Zm-8.58 17a8.63 8.63 0 0 1-8.6-8.68c0-4.8 3.86-8.68 8.6-8.68A8.64 8.64 0 0 1 87 23.56a8.64 8.64 0 0 1-8.6 8.68Z">
                            </path>
                            <path d="M102.25 34.08V10.81H97.3V36.5h8.66l13.42-23.27V36.5h4.94V10.8h-8.65l-13.42 23.27Z"></path>
                            <path
                                d="M143.4 32.39a8.79 8.79 0 0 1-8.83-8.74 8.8 8.8 0 0 1 8.84-8.75 8.83 8.83 0 0 1 8.33 5.85h5.02a13.64 13.64 0 0 0-13.36-10.61 13.6 13.6 0 0 0-13.67 13.5 13.6 13.6 0 0 0 13.67 13.52c6.55 0 12.01-4.54 13.36-10.62h-5.02a8.83 8.83 0 0 1-8.33 5.85Z">
                            </path>
                        </svg>
                    </a>

                    <a class="header__button-link header__button-link--express" href="/special">экспресс - дизайн</a>
                </div>
                <div class="header--form__right">
                    <button class="header__button-link header__button-link--theme js-theme js-theme--menu" type="button" aria-label="Меню">
                        <svg class="header__logo-icon" width="24" height="24" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#logo"></use>
                        </svg>
                    </button>
                    <button class="header__button-link header__button-link--project js-form-open" type="button"></button>
                    <button class="header__button-link header__button-link--menu js-form-close" type="button" aria-label="Закрыть форму">
                        <svg class="header__cross-icon" width="24" height="24" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#menu-cross"></use>
                        </svg>
                    </button>
                    <button class="header__button-link header__button-link--menu js-menu-open" type="button" aria-label="Меню">
                        <svg class="header__burger-icon" width="40" height="10" aria-hidden="true">
                            <use xlink:href="/assets/img/sprite.svg#menu-burger"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </header>


        <div class="form-section__container container">
            <div class="form-section__title-container">
                <h2 class="form-section__title">Расскажите о вашем проекте</h2>

                <div class="form-section__right">
                    <p class="form-section__phone">
                        <span>Или свяжитесь с нами:</span>
                        <a class="form-section__phone-link" href="tel:+{{wbDigitsOnly({{_sett.phone}})}}">{{_sett.phone}}</a>
                    </p>
                    <ul class="form-section__list">
                        <li class="form-section__item">
                            <a class="form-section__link form-section__link--social" href="%7B%7B_var.telegram%7D%7D">Telegram</a>
                        </li>
                        <li class="form-section__item">
                            <a class="form-section__link form-section__link--social" href="%7B%7B_var.whatsapp%7D%7D">Whatsapp</a>
                        </li>
        <!--                         <li class="form-section__-item"> -->
        <!--                             <a class="form-section__link form-section__link--social" href="%7B%7B_var.messenger%7D%7D">Messenger</a> -->
        <!--                         </li> -->
                    </ul>
                </div>
            </div>
        <wb-data wb-from="_cleardata">
            <form class="form form-project" method="POST" action="quotes">
                <input type="hidden" name="quote" value="project">
                <fieldset class="form__fieldset">
                    <legend class="form__legend">Тип проекта</legend>
                    
                    <wb-data wb="table=catalogs&item=projects&field=tree">
                    <div class="form__row">
                        <wb-foreach wb="from=data&tpl=false">
                        <input class="form__checkbox visually-hidden" type="checkbox" id="project-{{id}}" name="project-{{id}}" done="">
                        <label class="form__checkbox-label" for="project-{{id}}">{{name}}</label>
                        </wb-foreach>
                    </div>
                    </wb-data>
                </fieldset>

                <fieldset class="form__fieldset">
                    <legend class="form__legend">Бюджет</legend>

                    <div class="form__row">
                        <input class="form__checkbox visually-hidden" type="radio" id="up-200" value="up-200" name="budget" done="">
                        <label class="form__checkbox-label" for="up-200">До 200 тыс</label>

                        <input class="form__checkbox visually-hidden" type="radio" id="200-500" value="200-500" name="budget" done="">
                        <label class="form__checkbox-label" for="200-500">200 тыс - 500 тыс</label>

                        <input class="form__checkbox visually-hidden" type="radio" id="500-1000" value="500-1000" name="budget" done="">
                        <label class="form__checkbox-label" for="500-1000">500 тыс - 1 млн</label>

                        <input class="form__checkbox visually-hidden" type="radio" id="1000-2000" value="1000-2000" name="budget" done="">
                        <label class="form__checkbox-label" for="1000-2000">1 млн - 2 млн</label>

                        <input class="form__checkbox visually-hidden" type="radio" id="from-2000" value="from-2000" name="budget" done="">
                        <label class="form__checkbox-label" for="from-2000">от 2 млн</label>
                    </div>
                </fieldset>

                <fieldset class="form__fieldset">
                    <legend class="form__legend form__legend--big">Задача и контакты</legend>

                    <div class="form__field-wrapper form-item">
                        <textarea required name="task" placeholder="описание задачи*" class="js-textarea form__text-field" id="task"></textarea>
                        <span class="form__field-error">Пожалуйста, заполните это поле</span>
                    </div>

                    <div class="form__field-wrapper form-item">
                        <input class="form__text-field" type="text" id="name" name="name" placeholder="имя и фамилия">
                    </div>

                    <div class="form__field-wrapper form-item">
                        <input class="form__text-field" type="tel" id="phone" name="phone" required
                                pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                autocomplete="on" placeholder="телефон*">
                        <span class="form__field-error">Пожалуйста, заполните это поле</span>
                    </div>

                    <div class="form__field-wrapper form-item">
                        <input class="form__text-field" type="email" id="email" name="email" required
                                autocomplete="on" placeholder="email*">
                        <span class="form__field-error">Пожалуйста, заполните это поле</span>
                    </div>

                    <div class="form__field-wrapper form-item">
                        <input class="form__text-field" type="text" id="city" name="city" placeholder="город">
                    </div>

                    <div class="form__field-wrapper form-item">
                        <input class="form__text-field" type="text" id="company" name="company" placeholder="компания">
                    </div>

                    <div class="form__field-wrapper form-item">
                        <input class="form__text-field" type="text" id="site" name="site" placeholder="ссылка на сайт">
                    </div>
                </fieldset>

                <fieldset class="form__fieldset">
                    <legend class="form__legend">как вы узнали о нас?</legend>

                    <wb-data wb="table=catalogs&item=sources&field=tree">
                    <div class="form__row">
                        <wb-foreach wb="from=data&tpl=false">
                        <input class="form__checkbox visually-hidden" type="checkbox" id="{{id}}" name="source-{{id}}" done="">
                        <label class="form__checkbox-label" for="{{id}}">{{name}}</label>
                        </wb-foreach>
                    </div>
                    </wb-data>
                </fieldset>

                <div class="form__row form__row--bottom form__row--submit">
                    <button class="button" type="submit">
                        <span class="button__icon-wrapper">
                            <svg class="button__icon" width="24" height="24">
                                <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </span>

                        <span class="button__text">отправить заявку</span>
                    </button>

                    <input class="visually-hidden" id="file" type="file" accept="{{_sett.attach}}" name="file" done="">
                    <label class="file-upload" for="file">
                        <span class="file-upload__icon-wrapper">
                            <svg class="file-upload__icon" width="24" height="24">
                                <use xlink:href="/assets/img/sprite.svg#add-file"></use>
                            </svg>
                        </span>

                        <span class="file-upload__info">
                            <span class="file-upload__info-top-text">прикрепить файл</span>
                            <span class="file-upload__info-bottom-text">Не более {{_env.max_post}}</span>
                        </span>
                    </label>
                </div>

                <p class="form__text">
                    Отправляя заявку, я соглашаюсь передать свои персональные данные, содержащиеся в анкете и всех приложенных файлах. Я понимаю
                    и соглашаюсь, что мои данные будут храниться и обрабатываться в течение пяти лет, в соответствии с Федеральным
                    законом «О персональных данных».
                </p>
            </form>
        </wb-data>
        </div>
    </div>
</section>
</view>

<edit header="Анкета проекта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="alert alert-info">
        Нажмите кнопку <a href="#" onclick="$('#yongerEditorBtnEdit').trigger('click')">Редактор</a>, чтобы
        редактировать форму.
    </div>
</edit>