<view>
    <section class="page__form-section container" id="partners-form">
        <wb-var header="Начать проект" wb-if="'{{header}}'==''" else="{{header}}"></wb-var>
        <h2 class="page__section-title">{{_var.header}}</h2>
        <wb-data wb-from="_cleardata">
            <form class="form" method="POST" action="quotes">
                <input type="hidden" name="quote" value="project">
                <div class="form__field-wrapper form-item">
                    <input class="form__text-field" type="text" id="shrot-form-name" name="name" placeholder="имя и фамилия">
                </div>

                <div class="form__field-wrapper form-item">
                    <input class="form__text-field" type="text" id="shrot-form-company" name="quote" placeholder="компания">
                </div>

                <div class="form__field-wrapper form-item">
                    <input class="form__text-field" type="email" id="shrot-form-email" name="email" required autocomplete="on" placeholder="email*">
                    <span class="form__field-error">Пожалуйста, заполните это поле</span>
                </div>

                <div class="form__field-wrapper form-item">
                    <input class="form__text-field" type="tel" id="shrot-form-phone" name="phone" required pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                        autocomplete="on" placeholder="телефон*">
                    <span class="form__field-error">Пожалуйста, заполните это поле</span>
                </div>

                <div class="form__field-wrapper form-item">
                    <textarea required name="task" placeholder="описание задачи*" class="js-textarea form__text-field" id="shrot-form-task"></textarea>
                    <span class="form__field-error">Пожалуйста, заполните это поле</span>
                </div>

                <div class="form__row form__row--bottom form__row--submit">
                    <input class="visually-hidden" id="short-form-file" type="file" accept="{{_sett.attach}}" name="file" done="">
                    <label class="file-upload" for="short-form-file">
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
                    <p class="form__text">
                        Отправляя заявку, я соглашаюсь передать свои персональные данные, содержащиеся в анкете и всех приложенных файлах. Я понимаю
                        и соглашаюсь, что мои данные будут храниться и обрабатываться в течение пяти лет, в соответствии с Федеральным
                        законом «О персональных данных».
                    </p>
                </div>
                <button class="ybutton" type="submit">
                    <span>отправить заявку</span>
                </button>
            </form>
        </wb-data>
    </section>
</view>

<edit header="Анкета проекта - короткая">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <div class="alert alert-info">
        Нажмите кнопку
        <a href="#" onclick="$('#yongerEditorBtnEdit').trigger('click')">Редактор</a>, чтобы редактировать форму.
    </div>
</edit>