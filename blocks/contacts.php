<view>
<section class="contacts__section container">
  <h1 class="page__title">Контакты</h1>

  <div class="contacts__container">
    <a class="contacts__link" href="email:{{_var.email}}">{{_var.email}}</a>
    <a class="contacts__link" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_var.phone}}</a>

    <ul class="contacts__socials-list">
      <li class="contacts__socials-item">
        <a class="contacts__social-link" href="{{_var.whatsapp}}">Whatsapp</a>
      </li>
      <li class="contacts__socials-item">
        <a class="contacts__social-link" href="{{_var.telegram}}">Telegram</a>
      </li>
      <li class="contacts__socials-item">
        <a class="contacts__social-link" href="{{_var.messenger}}">Messenger</a>
      </li>
    </ul>

    <address class="contacts__address">{{_var.address}}</address>
  </div>
</section>

</view>
<edit header="Блок контактов">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>