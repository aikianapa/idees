
<view>
<wb-var menu='[]' />
<wb-var header='' />
<wb-data wb="table=pages&item=_footer">
<wb-foreach wb="from=blocks&tpl=false">
    <wb-var menu='{{sitemenu.data}}' wb-if="'{{name}}'=='sitemenu'" />
    <wb-var header='{{_val.header}}' wb-if="'{{name}}'=='sitemenu'" />
</wb-foreach>
</wb-data>

  <h2 class="visually-hidden">{{_var.header}}</h2>
  <div class="menu__container container">
    <nav class="menu__navigation">
      <ul class="menu__list">
        <wb-foreach wb="from=_var.menu">
        <li class="menu__item menu__item--{{id}}">
          <a class="menu__link" href="{{data.link}}">{{name}}</a>
            <ul class="menu__sub-list" wb-if="'{{children}}'>''">
            <wb-foreach wb="from=children">
            <li class="menu__sub-item">
              <a class="menu__sub-link" href="{{data.link}}">{{name}}</a>
            </li>
            </wb-foreach>
            </ul>
        </li>
        </wb-foreach>
      </ul>
    </nav>

    <div class="menu__contacts">
      <a class="menu__contact-link" href="email:{{_var.email}}" target="_blank">{{_var.email}}</a>
      <a class="menu__contact-link" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_var.phone}}</a>

      <ul class="menu__socials-list">
        <li class="menu__socials-item">
          <a class="menu__socials-link" href="{{_var.whatsapp}}">Whatsapp</a>
        </li>
        <li class="menu__socials-item">
          <a class="menu__socials-link" href="{{_var.telegram}}">Telegram</a>
        </li>
        <li class="menu__socials-item">
          <a class="menu__socials-link" href="{{_var.messenger}}">Messenger</a>
        </li>
      </ul>
    </div>
  </div>
</view>
<edit header="Меню сайта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <input name="sitemenu" wb-tree>
</edit>