<view><section class="contacts__section container">
  <h1 class="page__title">Контакты</h1>

  <div class="contacts__container">
    <a class="contacts__link" href="mailto:%7B%7B_var.email%7D%7D">{{_var.email}}</a>
    <a class="contacts__link" href="tel:+%7B%7BwbDigitsOnly(%7B%7B_var.phone%7D%7D)%7D%7D">{{_var.phone}}</a>

    <ul class="contacts__socials-list">
      <li class="contacts__socials-item">
        <a class="contacts__social-link" href="%7B%7B_var.whatsapp%7D%7D">Whatsapp</a>
      </li>
      <li class="contacts__socials-item">
        <a class="contacts__social-link" href="%7B%7B_var.telegram%7D%7D">Telegram</a>
      </li>

    </ul>

    <address class="contacts__address">{{_var.address}}</address>
  </div>
</section></view><edit header="Блок контактов"><div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div></edit>