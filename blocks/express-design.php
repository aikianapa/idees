<view>

   <div class="special__tab-content">
      <section class="special__top-section container">
         <p class="special__description">
            Создадим систему визуальной идентификации вашего проекта или услуги и оформим до 3 стандартных носителей на ваш выбор
         </p>

         <aside class="special__aside">
            <h2 class="special__aside-title">Сроки и стоимость</h2>

            <dl class="special__aside-params">
            <dt class="special__aside-params-name">Стоимость</dt>
            <dd class="special__aside-params-value">от 145 000 ₽</dd>

            <dt class="special__aside-params-name">Сроки разработки</dt>
            <dd class="special__aside-params-value">от 10 рабочих дней</dd>
            </dl>
         </aside>

         <div class="special__links-container">
            <a class="button special__contacts-button" href="#" download>
            <span class="button__icon-wrapper">
               <svg class="button__icon" width="24" height="24">
                  <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
               </svg>
            </span>

            <span class="button__text">скачать договор</span>
            </a>

            <a class="button special__contacts-button" href="#" download>
            <span class="button__icon-wrapper">
               <svg class="button__icon" width="24" height="24">
                  <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
               </svg>
            </span>

            <span class="button__text">скачать бриф</span>
            </a>
         </div>
      </section>
      <section class="page__section page__section--grey">
        <h2 class="visually-hidden">{{header}}</h2>
        <div class="special__section-container container">
            <p class="special__big-text">
                {{title}}
            </p>

            <p class="special__sub-descr">{{text}}</p>

            <ul class="special__contacts">
                <li class="special__contacts-item">
                    <span class="special__contacts-name">Почта для вопросов</span>
                    <a class="special__contacts-value" href="mailto:{{_sett.email}}">{{_sett.email}}</a>
                </li>

                <li class="special__contacts-item">
                    <span class="special__contacts-name">Телефон для связи</span>
                    <a class="special__contacts-value" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_sett.phone}}</a>
                </li>
            </ul>
        </div>
      </section>
   </div>
</view>

<edit header="Экспресс дизайн">
   <div>
   <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
   </div>
   <div>
      <wb-module wb="module=yonger&mode=edit&block=common.inc" />
   </div>
   <div class="form-group row">
      <label class="col-sm-3">Заголовок</label>
      <div class="col-sm-9">
         <textarea class="form-control" rows="auto" name="title" placeholder="Большой текст"></textarea>
      </div>
   </div>
   <div class="form-group row">
      <label class="col-sm-3">Текст</label>
      <div class="col-sm-9">
         <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
      </div>
   </div>
</edit>