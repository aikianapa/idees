<view>
<section class="page__form-section container" id="vacancy-form">
  <h2 class="page__section-title">Расскажите о себе</h2>
<wb-data wb-from="_cleardata">
  <form class="form" method="POST" action="quotes">
    <input type="hidden" name="quote" value="vacancy">
    <div class="form__field-wrapper">
      <input class="form__text-field" type="text" id="shrot-form-name" name="name" placeholder="имя и фамилия">
      <label class="form__text-field-label" for="shrot-form-name">имя и фамилия</label>
    </div>

    <div class="form__field-wrapper">
      <input class="form__text-field" type="email" id="shrot-form-email" name="email" required
              autocomplete="on" placeholder="email*">
      <label class="form__text-field-label" for="shrot-form-email">email*</label>
      <span class="form__field-error">Пожалуйста, заполните это поле</span>
    </div>

    <div class="form__field-wrapper">
      <input class="form__text-field" type="tel" id="shrot-form-phone" name="phone" required pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" autocomplete="on" placeholder="телефон*">
      <label class="form__text-field-label" for="shrot-form-phone">телефон*</label>
      <span class="form__field-error">Пожалуйста, заполните это поле</span>
    </div>

    <div class="form__field-wrapper">
      <input class="form__text-field" type="text" id="shrot-form-portfolio" name="portfolio" placeholder="Ссылка на резюме/портфолио" required>
      <label class="form__text-field-label" for="shrot-form-portfolio">Ссылка на резюме/портфолио</label>
    </div>


    <div class="form__field-wrapper">
      <input class="form__text-field" type="text" id="shrot-form-addition" name="addition" placeholder="дополнительные сведения">
      <label class="form__text-field-label" for="shrot-form-addition">дополнительные сведения</label>
    </div>

    <div class="form__row form__row--bottom form__row--submit">
      <button class="ybutton" type="submit">
        <span>отправить заявку</span>
      </button>

      <input class="visually-hidden" id="short-form-file" type="file" accept="{{_sett.attach}}" name="file">
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
    </div>

    <p class="form__text">
      Отправляя заявку, я соглашаюсь передать свои персональные данные, содержащиеся в анкете и всех приложенных файлах. Я понимаю и соглашаюсь, что мои данные будут храниться и обрабатываться в течение пяти лет, в соответствии с Федеральным законом «О персональных данных».
    </p>
  </form>
</wb-data>
</section>
</view>

<edit header="Форма отзыва на вакансию">
  <div>
    <wb-module wb="module=yonger&mode=edit&block=common.inc" />
  </div>
    <div class="alert alert-info">
        Нажмите кнопку <a href="#" onclick="$('#yongerEditorBtnEdit').trigger('click')">Редактор</a>, чтобы
        редактировать форму.
    </div>
</edit>