<view>
<section class="page__form-section container">
  <h2 class="page__section-title">Свяжитесь с нами</h2>

  <form class="form" method="POST" action="https://echo.htmlacademy.ru/">
    <div class="form__field-wrapper">
      <label class="form__text-field-label" for="shrot-form-name">имя и фамилия</label>
      <input class="form__text-field" type="text" id="shrot-form-name" name="shrot-form-name" done="">
    </div>

    <div class="form__field-wrapper">
      <label class="form__text-field-label" for="shrot-form-email">email</label>
      <input class="form__text-field" type="email" id="shrot-form-email" name="shrot-form-email" required autocomplete="on" done="">
    </div>

    <div class="form__field-wrapper">
      <label class="form__text-field-label" for="shrot-form-phone">телефон</label>
      <input class="form__text-field" type="tel" id="shrot-form-phone" name="shrot-form-phone" required pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" autocomplete="on" done="">
    </div>

    <div class="form__field-wrapper">
      <label class="form__text-field-label" for="shrot-form-addition">дополнительные сведения</label>
      <input class="form__text-field" type="text" id="shrot-form-addition" name="shrot-form-addition" done="">
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

      <input class="visually-hidden" id="short-form-file" type="file" name="short-form-file" done="">
      <label class="form__file" for="short-form-file">
        <span class="form__file-icon-wrapper">
          <svg class="form__file-icon" width="24" height="24">
            <use xlink:href="/assets/img/sprite.svg#add-file"></use>
          </svg>
        </span>

        <span class="form__file-text">
          прикрепить файл<br>
          <small>не более 10mb</small>
        </span>
      </label>
    </div>

    <p class="form__text">
      Отправляя заявку, я соглашаюсь передать свои персональные данные, содержащиеся в анкете и всех приложенных файлах. Я понимаю и соглашаюсь, что мои данные будут храниться и обрабатываться в течение пяти лет, в соответствии с Федеральным законом «О персональных данных».
    </p>
  </form>
</section>
</view>
<edit header="Форма контакта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>