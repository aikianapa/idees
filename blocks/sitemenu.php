<view>
    <wb-var menu="[]"></wb-var>
    <wb-var header=""></wb-var>
    <wb-data wb="table=pages&amp;item=_footer">
        <wb-foreach wb="from=blocks&amp;tpl=false">
            <wb-var menu="{{sitemenu.data}}" wb-if="'{{name}}'=='sitemenu'"></wb-var>
            <wb-var header="{{_val.header}}" wb-if="'{{name}}'=='sitemenu'"></wb-var>
        </wb-foreach>
    </wb-data>
    <section class="menu modal">
        <div class="modal__wrap">
            <header class="header header--menu">
                <div class="header__container container">
                    <div class="header--menu__left">
                        <a class="header__logo-link" href="/">
                            <svg class="header__logo-link-icon" width="33" height="33" viewBox="0 0 33 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M-0.000738144 0.432616L-0.00073838 5.83802L20.2695 5.83802L20.2695 0.432617L-0.000738144 0.432616Z" />
                                <path
                                    d="M24.2375 12.7019L20.4153 8.87971L6.0821 23.213L9.9043 27.0352L24.2375 12.7019Z" />
                                <path d="M27.0273 32.865H32.4327V12.5947H27.0273V32.865Z" />
                            </svg>
                            <svg class="header__logo-image" width="157" height="50" fill="none" viewbox="0 0 157 50">
                                <path
                                    d="M22.14 15.27a10.67 10.67 0 0 0-9.4-5.13C5.42 10.14 0 16.18 0 23.64c0 7.47 5.41 13.52 12.75 13.52 4.23 0 7.43-2 9.39-5.14v4.5h4.89V10.78h-4.89v4.5Zm-8.6 17.12a8.66 8.66 0 0 1-8.58-8.74 8.67 8.67 0 0 1 8.58-8.74 8.67 8.67 0 0 1 8.6 8.74 8.66 8.66 0 0 1-8.6 8.74Z">
                                </path>
                                <path
                                    d="M143.4 32.39a8.79 8.79 0 0 1-8.83-8.74 8.8 8.8 0 0 1 8.84-8.75 8.83 8.83 0 0 1 8.33 5.85h5.02a13.64 13.64 0 0 0-13.36-10.61 13.6 13.6 0 0 0-13.67 13.5 13.6 13.6 0 0 0 13.67 13.52c6.55 0 12.01-4.54 13.36-10.62h-5.02a8.83 8.83 0 0 1-8.33 5.85Z">
                                </path>
                                <path
                                    d="M87 15.24a10.68 10.68 0 0 0-9.38-5.1c-7.34 0-12.75 6-12.75 13.42S70.27 37 77.62 37c4.22 0 7.43-2 9.39-5.1v4.89c0 4.94-2.9 8.6-8.4 8.6-3.45 0-6.15-1.45-7.34-4.44h-5.35C67.43 46.58 72.65 50 78.61 50c7.96 0 13.28-5.81 13.28-13.22v-26H87v4.46Zm-8.58 17a8.63 8.63 0 0 1-8.6-8.68c0-4.8 3.86-8.68 8.6-8.68A8.64 8.64 0 0 1 87 23.56a8.64 8.64 0 0 1-8.6 8.68Z">
                                </path>
                                <path
                                    d="M45.95 7.43A9.4 9.4 0 0 0 55.07 0h-4.7c-.66 2.17-2.2 3.48-4.42 3.48-2.23 0-3.77-1.3-4.44-3.48h-4.69a9.43 9.43 0 0 0 9.13 7.43Z">
                                </path>
                                <path
                                    d="M37.39 34.08V10.81h-4.96V36.5h8.66l13.42-23.27V36.5h4.95V10.8H50.8L37.4 34.08Z">
                                </path>
                                <path
                                    d="M102.25 34.08V10.81H97.3V36.5h8.66l13.42-23.27V36.5h4.94V10.8h-8.65l-13.42 23.27Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="header--menu__right">
                        <button class="header__button-link header__button-link--theme js-theme js-theme--menu"
                            type="button" aria-label="Меню">
                            <svg class="header__logo-icon" width="24" height="24" aria-hidden="true">
                                <use xlink:href="/assets/img/sprite.svg#logo"></use>
                            </svg>
                        </button>
                        <button class="header__button-link header__button-link--project js-form-open"
                            type="button">Начать
                            проект</button>
                        <button class="header__button-link header__button-link--menu-close js-menu-close" type="button"
                            aria-label="Закрыть меню">
                            <span class="header__button-text">Меню</span>
                            <svg class="header__cross-icon" width="24" height="24" aria-hidden="true">
                                <use xlink:href="/assets/img/sprite.svg#menu-cross"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>


            <h2 class="visually-hidden">{{_var.header}}</h2>
            <div class="menu__container container">
                <nav class="menu__navigation">
                    <ul class="menu__list">
                        <wb-foreach wb="table=pages&tpl=false&sort=_sort"
                            wb-filter="{'active':'on','menu':'on','path':''}">
                            <li class="menu__item menu__item--{{name}}">
                                <a class="menu__link" href="{{url}}">{{menu_title}}</a>
                                <ul class="menu__sub-list">
                                    <wb-foreach wb="table=pages&tpl=false&sort=_sort"
                                        wb-filter="{'active':'on','menu':'on','path':'{{url}}'}">
                                        <li class="menu__sub-item">
                                            <a class="menu__sub-link" href="{{url}}">{{menu_title}}</a>
                                        </li>
                                    </wb-foreach>
                                </ul>
                            </li>
                            <wb-jq wb="$dom->find('ul:not(:parent)')->remove()"/>
                        </wb-foreach>
                    </ul>
                </nav>

                <div class="menu__contacts">
                    <a class="menu__contact-link" href="mailto:{{_var.email}}" target="_blank">{{_var.email}}</a>
                    <a class="menu__contact-link" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_var.phone}}</a>

                    <ul class="menu__socials-list">
                        <li class="menu__socials-item">
                            <a class="menu__socials-link" href="{{_var.telegram}}">Telegram</a>
                        </li>
                        <li class="menu__socials-item">
                            <a class="menu__socials-link" href="{{_var.whatsapp}}">Whatsapp</a>
                        </li>

                        <!--                         <li class="menu__socials-item"> -->
                        <!--                             <a class="menu__socials-link" href="{{_var.messenger}}">Messenger</a> -->
                        <!--                         </li> -->
                    </ul>
                </div>
            </div>

            <div class="menu__bottom-panel">
                <button class="menu__accept-button js-form-open" type="button">Начать проект</button>
            </div>
        </div>
    </section>
    <wb-jq wb="$dom->find('.menu .menu__sub-list:empty')->remove()" />
</view>
<edit header="Меню сайта">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <input name="sitemenu" wb-tree>
</edit>