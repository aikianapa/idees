<view>
   <div class="special__content">
      <div class="special__tab-content">
         <section class="special__top-section container">
            <div class="special__top-section-container">
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
            </div>

            <p class="special__label">Вы получите:</p>

            <ul class="special__list">
               <li class="special__item">
               <h3 class="special__item-title">Логотип*</h3>
               <p class="special__item-description">Одна версия логотипа (формат .ai)</p>
               </li>

               <li class="special__item">
               <h3 class="special__item-title">Брендбук</h3>
               <p class="special__item-description">Руководство по использованию логотипа: Логобук, фирменные цвета, фирменные шрифты, фирменный элемент

               </p></li><li class="special__item">
               <h3 class="special__item-title">Оформление</h3>
               <p class="special__item-description">3 стандартных носителя на выбор</p>
               </li>
            </ul>

            <p class="special__sub-text">* Опция: возможно увеличить число вариантов концепций логотипа. Каждый дополнительный вариант логотипа + 10 000 руб.</p>
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

         <section class="page__section container">
            <h2 class="partners__section-title">
               {{title}}
            </h2>

            <ul class="partners__work-list">
               <wb-foreach wb="from=list&tpl=false">
               <li class="partners__work-item">
                  <h3 class="partners__work-title">{{text1}}</h3>
                  <p class="partners__work-description text-break">{{text2}}</p>
               </li>
               </wb-foreach>
            </ul>
         </section>

         <section class="page__section page__section--grey">
            <div class="container">
               <h2 class="page__section-title">Особенности услуги</h2>
            </div>

            <div class="brand__slider-container js-slider">
               <div class="container">
                  <div class="brand__swiper">
                     <ul class="brand__slider swiper-container js-slider-list">
                        <div class="brand__slider-wrapper swiper-wrapper">
                        <wb-foreach wb="from=list&tpl=false">
                              <li class="brand__slider-item swiper-slide">
                              <span class="brand__slider-item-number">{{sprintf("%02d", {{_ndx}})}}</span>
                              <span>{{text}}</span>
                              </li>
                        </wb-foreach>
                        </div>
                     </ul>
                  </div>

                  <div class="brand__slider-buttons">
                     <button class="button brand__slider-button js-slider-button--prev" type="button" aria-label="Назад">
                        <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                           <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                        </svg>
                        </span>
                     </button>

                     <button class="button brand__slider-button js-slider-button--next" type="button" aria-label="Вперед">
                        <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                           <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                        </span>
                     </button>
                  </div>
               </div>
            </div>
         </section>

         <section class="page__section container">
            <h2 class="partners__section-title">
               {{title}}
            </h2>
            <ul class="specail__fixes-list">
            <wb-foreach wb="from=list&tpl=false">
               <li class="special__fixes-item">
                  <span class="special__fixes-text">{{text2}}</span>
               </li>
            </wb-foreach>
            </ul>
            <p class="special__fixes-sub" wb-if="'{{text1}}'>''">{{text1}}</p>
         </section>
      </div>
   </div>
</view>

<edit header="Экспресс-дизайн">
   <div>
      <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
   </div>

   <div>
      <wb-module wb="module=yonger&mode=edit&block=common.inc" />
   </div>
   <wb-multiinput name="list">
      <textarea class="form-control col-12" rows="auto" name="text" placeholder="Текст"></textarea>
   </wb-multiinput>

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

   <div>
      <wb-module wb="module=yonger&mode=edit&block=common.inc" />
   </div>
   <div class="form-group">
      <label for="my-input">Заголовок</label>
      <input class="form-control col-12" type="text" name="title" placeholder="Заголовок" />
   </div>
   <wb-multiinput name="list">
      <input class="form-control col-12 mb-1" name="text1" placeholder="Заголовок">
      <textarea class="form-control col-12" rows="auto" name="text2" placeholder="Текст"></textarea>
   </wb-multiinput>

   <div>
      <wb-module wb="module=yonger&mode=edit&block=common.inc" />
   </div>

   <div class="form-group">
      <label for="my-input">Заголовок</label>
      <input class="form-control col-12" type="text" name="title" placeholder="Заголовок строки" />
   </div>
   <wb-multiinput name="list">
      <textarea class="form-control col-12" rows="auto" name="text2" placeholder="Текст"></textarea>
   </wb-multiinput>

   <div class="form-group">
      <label for="my-input">Текст внизу</label>
      <textarea class="form-control" name="text1" placeholder="Текст внизу"></textarea>
   </div>
</edit>