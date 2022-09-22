<view><section class="page__form-section container" id="partners-form">
        <wb-var header="Начать проект" wb-if="'{{header}}'==''" else="{{header}}"></wb-var>
        <h2 class="page__section-title">{{_var.header}}</h2>
<wb-data wb-from="_cleardata">
        <form class="form" method="POST" action="quotes" >
            <input type="hidden" name="quote" value="project">
            <div class="form__field-wrapper">
                <input class="form__text-field" type="text" id="shrot-form-name" name="name" placeholder="имя и фамилия">
                <label class="form__text-field-label" for="shrot-form-name">имя и фамилия</label>
            </div>

            <div class="form__field-wrapper">
                <input class="form__text-field" type="text" id="shrot-form-company" name="quote" placeholder="компания">
                <label class="form__text-field-label" for="shrot-form-company">компания</label>
            </div>

            <div class="form__field-wrapper">
                <input class="form__text-field" type="email" id="shrot-form-email" name="email" required
                        autocomplete="on" placeholder="email*">
                <label class="form__text-field-label" for="shrot-form-email">email*</label>
                <span class="form__field-error">Пожалуйста, заполните это поле</span>
            </div>

            <div class="form__field-wrapper">
                <input class="form__text-field" type="tel" id="shrot-form-phone" name="phone" required
                        pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                        autocomplete="on" placeholder="телефон*">
                <label class="form__text-field-label" for="shrot-form-phone">телефон*</label>
                <span class="form__field-error">Пожалуйста, заполните это поле</span>
            </div>

            <div class="form__field-wrapper">
                <input class="form__text-field" type="text" id="shrot-form-task" name="task" placeholder="описание задачи*">
                <label class="form__text-field-label" for="shrot-form-task">описание задачи*</label>
                <span class="form__field-error">Пожалуйста, заполните это поле</span>
            </div>

            <div class="form__row form__row--bottom form__row--submit">
                <button class="button" type="submit">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </span>

                    <span class="button__text">отправить заявку</span>
                </button>

                <input class="visually-hidden" id="short-form-file" type="file" accept="{{_sett.attach}}" name="file" done="">
                <label class="form__file" for="short-form-file">
                    <span class="form__file-icon-wrapper">
                        <svg class="form__file-icon" width="24" height="24">
                            <use xlink:href="/assets/img/sprite.svg#add-file"></use>
                        </svg>
                    </span>

                    <span class="form__file-text">
                        прикрепить файл<br>
                        <small>не более  {{_env.max_post}}</small>
                    </span>
                </label>
            </div>

            <p class="form__text">
                Отправляя заявку, я соглашаюсь передать свои персональные данные, содержащиеся в анкете и всех
                приложенных файлах. Я понимаю и соглашаюсь, что мои данные будут храниться и обрабатываться в течение
                пяти лет, в соответствии с Федеральным законом «О персональных данных».
            </p>
        </form>
</wb-data>
    </section></view><edit header="Анкета проекта - короткая"><div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
<div class="alert alert-info">
        Нажмите кнопку <a href="#" onclick="$('#yongerEditorBtnEdit').trigger('click')">Редактор</a>, чтобы
        редактировать форму.
    </div></edit>