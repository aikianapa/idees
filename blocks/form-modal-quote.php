<view>
    <div class="popups">
        <div class="popup zayavka" pop="zayavka">
        <div class="popup__overlay"></div>
            <div class="popup-inner">
                <div class="popup-inner__content">
                    <div class="krest"> </div>
                    <div class="sub-title popup__title">Заявка на услуги
                        <span class="popup__title-icon">
                            <img src="/assets/img/ic-form.png" alt="">
                        </span>
                    </div>
                </div>
                <wb-data>
                    <form method="POST" action="quotes" class="form">
                        <input type="hidden" name="quote" value="contact">

                        <div class="form-item">
                            <input type="text" name="name" placeholder="Имя и фамилия" class="form__text-field" id="form1-name">
                        </div>
                        <div class="form-item">
                            <input type="text" name="email" placeholder="Email" class="form__text-field" id="form1-email">
                        </div>
                        <div class="form-item">
                            <input class="form__text-field" type="text" id="form1-phone" name="phone" required pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                autocomplete="on" placeholder="Телефон">
                        </div>
                        <div class="form-item">
                            <textarea name="description" placeholder="Описание задачи" class="js-textarea form__text-field" id="form1-description"></textarea>
                        </div>
                        <div class="form-item">
                            <div class="dropdown" data-control="checkbox-dropdown">
                                <label class="dropdown-label">Выбрать услугу</label>

                                <div class="dropdown-list js-dropdown-list">
                                    <a href="#" data-toggle="check-all" class="dropdown-option">
                                        Выбрать все
                                    </a>

                                    <label class="dropdown-option">
                                        <input type="checkbox" name="services" value="стратегии в продвижении" class="js-dropdown-option-input" />
                                        <span class="dropdown-option__fake-checkbox"></span>
                                        стратегии в продвижении
                                    </label>

                                    <label class="dropdown-option">
                                        <input type="checkbox" name="services" value="позиционирование" class="js-dropdown-option-input" />
                                        <span class="dropdown-option__fake-checkbox"></span>
                                        позиционирование
                                    </label>

                                    <label class="dropdown-option">
                                        <input type="checkbox" name="services" value="знаки и логотипы" class="js-dropdown-option-input" />
                                        <span class="dropdown-option__fake-checkbox"></span>
                                        знаки и логотипы
                                    </label>

                                    <label class="dropdown-option">
                                        <input type="checkbox" name="services" value="фирменный стиль" class="js-dropdown-option-input" />
                                        <span class="dropdown-option__fake-checkbox"></span>
                                        фирменный стиль
                                    </label>

                                    <label class="dropdown-option">
                                        <input type="checkbox" name="services" value="корпоративные сайты" class="js-dropdown-option-input" />
                                        <span class="dropdown-option__fake-checkbox"></span>
                                        корпоративные сайты
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="services" value="сложные веб приложения" class="js-dropdown-option-input" />
                                        <span class="dropdown-option__fake-checkbox"></span>
                                        сложные веб приложения
                                    </label>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="services" value="интерфейсы сервисов" class="js-dropdown-option-input" />
                                        <span class="dropdown-option__fake-checkbox"></span>
                                        интерфейсы сервисов
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="agree-wrapper">
                            <div class="agree"> Отправляя заявку, я соглашаюсь передать свои персональные данные, содержащиеся в анкете и всех
                                приложенных файлах. Я понимаю и соглашаюсь, что мои данные будут храниться и обрабатываться
                                в соответствии с Федеральным законом «О персональных данных» </div>
                            <label class="file-upload" file="file1" for="file1">
                                <span class="file-upload__icon-wrapper">
                                    <svg class="file-upload__icon" width="24" height="24">
                                        <use xlink:href="/assets/img/sprite.svg#add-file"></use>
                                    </svg>
                                </span>
                                <div class="file-upload__info">
                                    <span class="file-upload__info-top-text">Прикрепить файл</span>
                                    <span class="file-upload__info-bottom-text">Не более 10мб</span>
                                </div>
                                <div> </div>
                            </label>
                            <button type="submit" class="gbutton zayav-button">Отправить заяку </button>
                            <input class="visually-hidden" type="file" accept="{{_sett.attach}}" name="file" id="file1">
                        </div>
                    </form>
                </wb-data>
            </div>
        </div>
    </div>
</view>
<edit header="Модальная форма заявки">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="alert alert-info">
        Нажмите кнопку
        <a href="#" onclick="$('#yongerEditorBtnEdit').trigger('click')">Редактор</a>, чтобы редактировать форму.
    </div>
</edit>