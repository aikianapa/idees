<view>
    <div class="popups">
        <div class="popup zayavka" pop="zayavka">
            <div class="popup-inner">
                <div class="krest"> </div>
                <div class="sub-title">Заявка на услуги</div>
                <wb-data>
                    <form method="POST" action="quotes">
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
                            <input type="text" name="description" placeholder="Описание задачи" class="form__text-field" id="form1-description">
                        </div>

                        <div class="agree-wrapper">
                            <div class="agree"> Отправляя заявку, я соглашаюсь передать свои персональные данные, содержащиеся в анкете и всех
                                приложенных файлах. Я понимаю и соглашаюсь, что мои данные будут храниться и обрабатываться
                                в соответствии с Федеральным законом «О персональных данных» </div>
                            <label class="prikrepit-wrapper" file="file1" for="file1">
                                <div>
                                    <img src="/assets/img/file.svg"> </div>
                                <div class="prikrepit"> Прикрепить файл
                                    <span class="ne-bolee">Не более 10мб</span>
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