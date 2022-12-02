<view>
    <div class="header header--menu">
        <div class="container">

		<wb-var menu="{{yongerSiteMenu()}}" />
            <div class="top-nav">
                <a class="header__logo-link" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header__logo-link-icon" width="33" height="33"
                        viewBox="0 0 33 33" fill="none">
                        <path
                            d="M-0.000738144 0.432616L-0.00073838 5.83802L20.2695 5.83802L20.2695 0.432617L-0.000738144 0.432616Z">
                        </path>
                        <path d="M24.2375 12.7019L20.4153 8.87971L6.0821 23.213L9.9043 27.0352L24.2375 12.7019Z">
                        </path>
                        <path d="M27.0273 32.865H32.4327V12.5947H27.0273V32.865Z"></path>
                    </svg>
                    <svg class="header__logo-image" width="157" height="50" fill="none" viewBox="0 0 157 50">
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
                        <path d="M37.39 34.08V10.81h-4.96V36.5h8.66l13.42-23.27V36.5h4.95V10.8H50.8L37.4 34.08Z">
                        </path>
                        <path d="M102.25 34.08V10.81H97.3V36.5h8.66l13.42-23.27V36.5h4.94V10.8h-8.65l-13.42 23.27Z">
                        </path>
                    </svg>
                </a>
                <div class="menu">
                    <wb-foreach wb="from=_var.menu&tpl=false">
                        <wb-var sub="sub" wb-if="'{{count({{children}})}}'>'0'" else="" />
                        <a href="{{path}}" class="menu-item {{name}}-menu-item {{_var.sub}}" sub="{{name}}">
                            {{menu_title}}
                        </a>
                    </wb-foreach>
                </div>
                <div>
                    <div class="top-phone">
                        <a href="tel:+{{text2tel({{_sett.phone}})}}">{{_sett.phone}}</a>
                    </div>
                </div>
                <div>
                    <div class="ybutton zayav-button">Отправить заявку</div>
                    <div class="gamburger"> </div>
                    <div class="nav-krest krest hidden"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-menus">
        <wb-foreach wb="from=_var.menu&tpl=false">
            <div class="sub-menu" sub="{{name}}">
                <div class="gray-box sub-inner">
                    <wb-var class="container" wb-if="'{{name}}'=='services'" else="tlist" />
                    <div class="{{_var.class}}" wb-if="'{{_var.class}}'=='container'">
                        <div class="uslugi">
                            <wb-foreach wb="from=children&tpl=false">
                                <div class="uslugi-item" wb-if="'{{name}}'!=='{{_parent.name}}'">
                                    <div class="sub-sub-title"><a href="{{path}}" class="menu__sub-link"> {{menu_title}} </a></div>
                                    <div class="ttext"></div>
									<div class="tlist" wb-if="'{{count({{children}})}}'>'0'">
                                        <wb-foreach wb="from=children&tpl=false">
                                            <a href="{{path}}" class="menu__sub-link">
                                                {{menu_title}}
                                            </a>
                                        </wb-foreach>
                                    </div>
									<div class="tlist" wb-if="'{{attach}}'>''">
                                        <wb-foreach wb="table={{attach}}&tpl=false" wb-filter="{{attach_filter}}">
                                            <a href="{{path}}" class="menu__sub-link">
                                                {{header}}
                                            </a>
                                        </wb-foreach>
									</div>
                                </div>
                            </wb-foreach>
                        </div>
                    </div>

                    <div class="{{_var.class}}" wb-if="'{{_var.class}}'=='tlist'">
                        <wb-foreach wb="from=children&tpl=false">
                            <a href="{{path}}" class="menu__sub-link">
                                {{menu_title}}
                            </a>
                        </wb-foreach>
                    </div>
                </div>
            </div>
        </wb-foreach>

    </div>

    <div class="mob-menu-wrapper d-none" pop="mob">
        <div class="modal__wrap">
            <div class="header header--menu">
                <div class="container">
                    <div class="top-nav">
                        <a class="header__logo-link" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header__logo-link-icon" width="33"
                                height="33" viewBox="0 0 33 33" fill="none">
                                <path
                                    d="M-0.000738144 0.432616L-0.00073838 5.83802L20.2695 5.83802L20.2695 0.432617L-0.000738144 0.432616Z">
                                </path>
                                <path
                                    d="M24.2375 12.7019L20.4153 8.87971L6.0821 23.213L9.9043 27.0352L24.2375 12.7019Z">
                                </path>
                                <path d="M27.0273 32.865H32.4327V12.5947H27.0273V32.865Z"></path>
                            </svg>
                            <svg class="header__logo-image" width="157" height="50" fill="none" viewBox="0 0 157 50">
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


                        <div class="menu">
                        </div>
                        <div>
                            <div class="nav-krest krest"> </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mob-menu">
                <div class="mob-menu-inner">
                    <div class="container">
                        <ul class="mob-list mob-list1">
							<wb-foreach wb="from=_var.menu&tpl=false">
							<wb-var sub="sub" wb-if="'{{count({{children}})}}'>'0'" else="" />
							<wb-var sub="" wb-if="'{{name}}'=='blog'" />
							<wb-var link="javascript:" wb-if="'{{_var.sub}}'=='sub'" else="{{path}}" />
                            <li class="{{_var.sub}}">
                                <a href="{{_var.link}}"> {{menu_title}} </a>
                                <ul class="mob-list mob-list2" wb-if="'{{_var.sub}}'=='sub'">
									<wb-foreach wb="from=children&tpl=false">
									<wb-var sub1="sub" wb-if="'{{count({{children}})}}'>'0' OR '{{_parent.name}}'=='services'" else="" />
									<wb-var link1="javascript:" wb-if="'{{_var.sub1}}'=='sub'" else="{{path}}" />
                                    <li class="{{_var.sub1}}" wb-if="'{{name}}'!=='{{_parent.name}}'">
                                        <a href="{{_var.link1}}"> {{menu_title}} </a>
                                        <ul class="mob-list mob-list3" wb-if="'{{_var.sub1}}'=='sub'">
											<wb-foreach wb="from=children&tpl=false">
                                            <li>
                                                <a href="{{path}}" class="menu__sub-link"> {{name}} </a>
                                            <li>
											</wb-foreach>
											<wb-foreach wb="table={{attach}}&tpl=false" wb-filter="{{attach_filter}}" wb-if="'{{attach}}'>''">
												<a href="{{path}}" class="menu__sub-link">
													{{header}}
												</a>
											</wb-foreach>
                                        </ul>
									</li>
									</wb-foreach>
                                </ul>
                            </li>
							</wb-foreach>
                        </ul>
                    </div>
                </div>

                <div class="button-wrapper menu__bottom-panel ">
                    <center>
                        <button class="ybutton zayav-button">Отправить заяку </button>
                    </center>
                </div>


            </div>
        </div>
    </div>

</view>
<edit header="Меню сайта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc"></wb-module>
    </div>
	<div class="alert alert-info">
		Формируется на основе списка страниц по полю Меню
	</div>
    <!--input name="sitemenu" wb-tree-->
</edit>