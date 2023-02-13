<view>
  <section class="container contacts__section">
    <h1 class="page__title">Контакты</h1>

    <div class="contacts__container">
      <a class="contacts__link" href="mailto:{{_var.email}}">{{_var.email}}</a>
      <a class="contacts__link" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_var.phone}}</a>

      <ul class="contacts__socials-list">
        <li class="contacts__socials-item">
          <a class="contacts__social-link" href="{{_var.whatsapp}}">Whatsapp</a>
        </li>
        <li class="contacts__socials-item">
          <a class="contacts__social-link" href="{{_var.telegram}}">Telegram</a>
        </li>
        <li class="contacts__socials-item">
          <a class="contacts__social-link" href="{{_var.vkontakte}}">Vkontakte</a>
        </li>
      </ul>

      <address class="contacts__address">{{_var.address}}</address>
    </div>
  </section>
</view>
<edit header="Блок контактов">
  <div>
    <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
  </div>
</edit>