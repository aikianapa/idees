<view>
  <div class="gray-box last">
    <wb-data>
      <div class="container">
        <wb-var header="Заявка на услуги" wb-if="'{{header}}'==''" else="{{header}}"></wb-var>
        <h2 class="sub-title"> {{_var.header}} </h2>

        <div class="zayav-form">
          <form class="form" method="POST" action="quotes">
            <div class="zayav-form-line1">
              <div class="form-item">
                <input type="text" name="name" required placeholder="Имя и фамилия" class="form__text-field" id="form2-name" />
              </div>

              <div class="form-item">
                <input type="text" name="email" placeholder="E-mail" class="form__text-field" id="form2-email" />
              </div>

              <div class="form-item">
                <input type="text" name="phone" placeholder="Телефон" required pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                  class="form__text-field" id="form2-phone" />
              </div>

            </div>

            <div class="zayav-form-line2">
              <div class="form-item">
                  <textarea name="description" placeholder="Описание задачи" class="js-textarea form__text-field" id="form2-description"></textarea>
              </div>
            </div>

            <div class="zayav-form-line3">
              <label class="file-upload" for="file2">
                <span class="file-upload__icon-wrapper">
                    <svg class="file-upload__icon" width="24" height="24">
                        <use xlink:href="/assets/img/sprite.svg#add-file"></use>
                    </svg>
                </span>
                <div class="file-upload__info">
                    <span class="file-upload__info-top-text">Прикрепить файл</span>
                    <span class="file-upload__info-bottom-text">Не более 10мб</span>
                </div>
              </label>
              <div> </div>
              <div class="agree"> Отправляя заявку, я соглашаюсь передать свои персональные данные, содержащиеся в анкете и всех приложенных
                файлах. Я понимаю и соглашаюсь, что мои данные будут храниться и обрабатываться в соответствии с Федеральным
                законом «О персональных данных» </div>
            </div>

            <button  type="submit" class="gbutton">Отправить заяку </button>

            <input type="file" name="file" accept="{{_sett.attach}}" id="file2" />
          </form>

        </div>

      </div>
    </wb-data>
  </div>
</view>
<edit header="Форма контакта">
  <div>
    <wb-module wb="module=yonger&mode=edit&block=common.inc" />
  </div>
  <div class="alert alert-info">
    Нажмите кнопку
    <a href="#" onclick="$('#yongerEditorBtnEdit').trigger('click')">Редактор</a>, чтобы редактировать форму.
  </div>
</edit>